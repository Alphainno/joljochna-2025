<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SocialMediaController extends Controller
{
    public function index()
    {
        $items = SocialMedia::orderBy('order')
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function ($item) {
                if ($item->image_path) {
                    $item->image_url = asset('storage/' . ltrim($item->image_path, '/'));
                }
                return $item;
            });

        return response()->json($items);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'platform' => 'required|string|max:50',
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'link' => 'nullable|url|max:500',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:5120',
            'order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('social_media', 'public');
        }

        $item = SocialMedia::create([
            'platform' => $validated['platform'],
            'title' => $validated['title'],
            'content' => $validated['content'] ?? '',
            'link' => $validated['link'] ?? '',
            'image_path' => $imagePath,
            'order' => $validated['order'] ?? 0,
            'is_active' => $validated['is_active'] ?? true,
        ]);

        if ($item->image_path) {
            $item->image_url = asset('storage/' . ltrim($item->image_path, '/'));
        }

        return response()->json([
            'success' => true,
            'message' => 'আইটেম সফলভাবে যোগ করা হয়েছে',
            'item' => $item,
        ]);
    }

    public function update(Request $request, $id)
    {
        $item = SocialMedia::findOrFail($id);

        $validated = $request->validate([
            'platform' => 'required|string|max:50',
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'link' => 'nullable|url|max:500',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:5120',
            'order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($item->image_path && Storage::disk('public')->exists($item->image_path)) {
                try { Storage::disk('public')->delete($item->image_path); } catch (\Throwable $e) {}
            }
            $validated['image_path'] = $request->file('image')->store('social_media', 'public');
        }

        unset($validated['image']);
        $item->update($validated);
        $item->refresh();

        if ($item->image_path) {
            $item->image_url = asset('storage/' . ltrim($item->image_path, '/'));
        }

        return response()->json([
            'success' => true,
            'message' => 'আইটেম সফলভাবে আপডেট করা হয়েছে',
            'item' => $item,
        ]);
    }

    public function destroy($id)
    {
        $item = SocialMedia::findOrFail($id);

        if ($item->image_path && Storage::disk('public')->exists($item->image_path)) {
            try { Storage::disk('public')->delete($item->image_path); } catch (\Throwable $e) {}
        }

        $item->delete();

        return response()->json([
            'success' => true,
            'message' => 'আইটেম সফলভাবে মুছে ফেলা হয়েছে',
        ]);
    }
}
