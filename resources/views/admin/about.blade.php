<div id="about" class="tab-content">
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-card-content">
                <div class="stat-info">
                    <h3>আমাদের সম্পর্কে</h3>
                    <div class="subtitle">এই ট্যাবে হিরো সেকশন, ইতিহাস, মিশন, ভিশন, প্রতিষ্ঠাতা, চেয়ারম্যান ইত্যাদি ম্যানেজ করুন
                    </div>
                </div>
                <div class="stat-icon green">ℹ️</div>
            </div>
        </div>
    </div>

    <input type="hidden" id="csrfTokenAbout" value="{{ csrf_token() }}">
    
    <style>
        .about-form-group {
            margin-bottom: 16px;
        }
        .about-form-group label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            font-weight: 600;
            color: #374151;
        }
        .about-form-group input[type="text"],
        .about-form-group textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.2s;
        }
        .about-form-group input[type="text"]:focus,
        .about-form-group textarea:focus {
            outline: none;
            border-color: #0a4d2e;
        }
        .about-form-group textarea {
            min-height: 100px;
            resize: vertical;
            font-family: inherit;
        }
        .about-save-btn {
            background: #0a4d2e;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 2px 4px rgba(10, 77, 46, 0.2);
        }
        .about-save-btn:hover {
            background: #0d6639;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(10, 77, 46, 0.3);
        }
        .about-status {
            margin-top: 12px;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 500;
            display: inline-block;
        }
        .about-status.success {
            background: #d1fae5;
            color: #065f46;
        }
        .about-status.error {
            background: #fee2e2;
            color: #991b1b;
        }
        .image-preview-container {
            margin-top: 12px;
            text-align: center;
        }
        .image-preview-container img {
            max-width: 100%;
            max-height: 200px;
            border-radius: 8px;
            border: 2px solid #e5e7eb;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
    </style>

    <!-- Hero Section -->
    <div id="about-hero" style="margin-top:1rem;">
        <div class="table-card">
            <h2>হিরো সেকশন</h2>
            <p style="color:#6b7280; margin-bottom:20px;">About পেজের হিরো সেকশনের কন্টেন্ট ম্যানেজ করুন</p>
            
            <div class="about-form-group">
                <label>শিরোনাম</label>
                <input type="text" id="hero-title" placeholder="যেমন: আমাদের সম্পর্কে" />
            </div>
            <div class="about-form-group">
                <label>সাব-টাইটেল ১</label>
                <textarea id="hero-subtitle" placeholder="প্রথম উক্তি"></textarea>
            </div>
            <div class="about-form-group">
                <label>সাব-টাইটেল ২</label>
                <textarea id="hero-subtitle2" placeholder="দ্বিতীয় উক্তি"></textarea>
            </div>
            
            <button class="about-save-btn" onclick="saveAboutSection('hero')">সংরক্ষণ করুন</button>
            <div id="hero-status" class="about-status" style="display:none;"></div>
        </div>
    </div>

    <!-- History Section -->
    <div id="about-history" style="margin-top:1rem;">
        <div class="table-card">
            <h2>আমাদের ইতিহাস</h2>
            <p style="color:#6b7280; margin-bottom:20px;">ইতিহাস সেকশনের কন্টেন্ট ম্যানেজ করুন</p>
            
            <div class="about-form-group">
                <label>প্রথম প্যারাগ্রাফ</label>
                <textarea id="history-content" placeholder="আমাদের সংস্থা ২০০৫ সালে শুরু হয়েছিল..."></textarea>
            </div>
            <div class="about-form-group">
                <label>দ্বিতীয় প্যারাগ্রাফ</label>
                <textarea id="history-content2" placeholder="সময়ের সঙ্গে সঙ্গে আমরা নতুন নতুন উদ্যোগ নিয়েছি..."></textarea>
            </div>
            
            <button class="about-save-btn" onclick="saveAboutSection('history')">সংরক্ষণ করুন</button>
            <div id="history-status" class="about-status" style="display:none;"></div>
        </div>
    </div>

    <!-- Mission Section -->
    <div id="about-mission" style="margin-top:1rem;">
        <div class="table-card">
            <h2>আমাদের মিশন</h2>
            <p style="color:#6b7280; margin-bottom:20px;">মিশন সেকশনের কন্টেন্ট ম্যানেজ করুন</p>
            
            <div class="about-form-group">
                <label>শিরোনাম</label>
                <input type="text" id="mission-title" placeholder="আমাদের মিশন" />
            </div>
            <div class="about-form-group">
                <label>বিবরণ</label>
                <textarea id="mission-content" placeholder="আমাদের মিশন হলো..."></textarea>
            </div>
            <div class="about-form-group">
                <label>ছবি আপলোড করুন</label>
                <input type="file" id="mission-image" accept="image/*" style="width:100%; padding:8px; border:1px solid #d1d5db; border-radius:8px;" onchange="previewAboutImage('mission')" />
                <div id="mission-image-preview" class="image-preview-container"></div>
            </div>
            
            <button class="about-save-btn" onclick="saveAboutSection('mission')">সংরক্ষণ করুন</button>
            <div id="mission-status" class="about-status" style="display:none;"></div>
        </div>
    </div>

    <!-- Vision Section -->
    <div id="about-vision" style="margin-top:1rem;">
        <div class="table-card">
            <h2>আমাদের ভিশন</h2>
            <p style="color:#6b7280; margin-bottom:20px;">ভিশন সেকশনের কন্টেন্ট ম্যানেজ করুন</p>
            
            <div class="about-form-group">
                <label>শিরোনাম</label>
                <input type="text" id="vision-title" placeholder="আমাদের ভিশন" />
            </div>
            <div class="about-form-group">
                <label>বিবরণ</label>
                <textarea id="vision-content" placeholder="আমাদের ভিশন হলো..."></textarea>
            </div>
            <div class="about-form-group">
                <label>ছবি আপলোড করুন</label>
                <input type="file" id="vision-image" accept="image/*" style="width:100%; padding:8px; border:1px solid #d1d5db; border-radius:8px;" onchange="previewAboutImage('vision')" />
                <div id="vision-image-preview" class="image-preview-container"></div>
            </div>
            
            <button class="about-save-btn" onclick="saveAboutSection('vision')">সংরক্ষণ করুন</button>
            <div id="vision-status" class="about-status" style="display:none;"></div>
        </div>
    </div>

    <!-- Founder Section -->
    <div id="about-founder" style="margin-top:1rem;">
        <div class="table-card">
            <h2>আমাদের প্রতিষ্ঠাতা</h2>
            <p style="color:#6b7280; margin-bottom:20px;">প্রতিষ্ঠাতার তথ্য ম্যানেজ করুন</p>
            
            <div class="about-form-group">
                <label>নাম</label>
                <input type="text" id="founder-name" placeholder="মারুফ সাত্তার আলী" />
            </div>
            <div class="about-form-group">
                <label>পদবি</label>
                <input type="text" id="founder-position" placeholder="প্রতিষ্ঠাতা, জলজোছনা" />
            </div>
            <div class="about-form-group">
                <label>বিবরণ (প্রথম প্যারাগ্রাফ)</label>
                <textarea id="founder-content" placeholder="জনাব মারুফ সাত্তার আলী একজন উদ্ভাবক ও সমাজসেবক..."></textarea>
            </div>
            <div class="about-form-group">
                <label>বিবরণ (দ্বিতীয় প্যারাগ্রাফ)</label>
                <textarea id="founder-content2" placeholder="তিনি বিশ্বাস করেন..."></textarea>
            </div>
            <div class="about-form-group">
                <label>বিবরণ (তৃতীয় প্যারাগ্রাফ)</label>
                <textarea id="founder-content3" placeholder="অতিরিক্ত তথ্য..."></textarea>
            </div>
            <div class="about-form-group">
                <label>ছবি আপলোড করুন</label>
                <input type="file" id="founder-image" accept="image/*" style="width:100%; padding:8px; border:1px solid #d1d5db; border-radius:8px;" onchange="previewAboutImage('founder')" />
                <div id="founder-image-preview" class="image-preview-container"></div>
            </div>
            
            <button class="about-save-btn" onclick="saveAboutSection('founder')">সংরক্ষণ করুন</button>
            <div id="founder-status" class="about-status" style="display:none;"></div>
        </div>
    </div>

    <!-- Chairman Section -->
    <div id="about-chairman" style="margin-top:1rem;">
        <div class="table-card">
            <h2>আমাদের চেয়ারম্যান</h2>
            <p style="color:#6b7280; margin-bottom:20px;">চেয়ারম্যানের তথ্য ম্যানেজ করুন</p>
            
            <div class="about-form-group">
                <label>নাম</label>
                <input type="text" id="chairman-name" placeholder="আব্দুল করিম" />
            </div>
            <div class="about-form-group">
                <label>পদবি</label>
                <input type="text" id="chairman-position" placeholder="চেয়ারম্যান, জলজোছনা" />
            </div>
            <div class="about-form-group">
                <label>বিবরণ</label>
                <textarea id="chairman-content" placeholder="চেয়ারম্যান সম্পর্কে..."></textarea>
            </div>
            <div class="about-form-group">
                <label>ছবি আপলোড করুন</label>
                <input type="file" id="chairman-image" accept="image/*" style="width:100%; padding:8px; border:1px solid #d1d5db; border-radius:8px;" onchange="previewAboutImage('chairman')" />
                <div id="chairman-image-preview" class="image-preview-container"></div>
            </div>
            
            <button class="about-save-btn" onclick="saveAboutSection('chairman')">সংরক্ষণ করুন</button>
            <div id="chairman-status" class="about-status" style="display:none;"></div>
        </div>
    </div>

    <script>
        (function(){
            const csrfToken = document.getElementById('csrfTokenAbout').value;
            
            // Load all sections on page load
            async function loadAllSections() {
                const sections = ['hero', 'history', 'mission', 'vision', 'founder', 'chairman'];
                
                for (const section of sections) {
                    try {
                        const response = await fetch(`/api/about-sections?section_key=${section}`);
                        if (response.ok) {
                            const data = await response.json();
                            if (data) {
                                populateSection(section, data);
                            }
                        }
                    } catch (error) {
                        console.error(`Error loading ${section}:`, error);
                    }
                }
            }
            
            function populateSection(section, data) {
                // Populate form fields based on section
                if (section === 'hero') {
                    if (data.title) document.getElementById('hero-title').value = data.title;
                    if (data.subtitle) document.getElementById('hero-subtitle').value = data.subtitle;
                    if (data.content) document.getElementById('hero-subtitle2').value = data.content;
                } else if (section === 'history') {
                    if (data.content) document.getElementById('history-content').value = data.content;
                    if (data.content_2) document.getElementById('history-content2').value = data.content_2;
                } else if (section === 'mission') {
                    if (data.title) document.getElementById('mission-title').value = data.title;
                    if (data.content) document.getElementById('mission-content').value = data.content;
                    if (data.image_url) showImagePreview('mission', data.image_url);
                } else if (section === 'vision') {
                    if (data.title) document.getElementById('vision-title').value = data.title;
                    if (data.content) document.getElementById('vision-content').value = data.content;
                    if (data.image_url) showImagePreview('vision', data.image_url);
                } else if (section === 'founder') {
                    if (data.name) document.getElementById('founder-name').value = data.name;
                    if (data.position) document.getElementById('founder-position').value = data.position;
                    if (data.content) document.getElementById('founder-content').value = data.content;
                    if (data.content_2) document.getElementById('founder-content2').value = data.content_2;
                    if (data.content_3) document.getElementById('founder-content3').value = data.content_3;
                    if (data.image_url) showImagePreview('founder', data.image_url);
                } else if (section === 'chairman') {
                    if (data.name) document.getElementById('chairman-name').value = data.name;
                    if (data.position) document.getElementById('chairman-position').value = data.position;
                    if (data.content) document.getElementById('chairman-content').value = data.content;
                    if (data.image_url) showImagePreview('chairman', data.image_url);
                }
            }
            
            function showImagePreview(section, imageUrl) {
                const previewDiv = document.getElementById(`${section}-image-preview`);
                if (previewDiv) {
                    previewDiv.innerHTML = `<img src="${imageUrl}" alt="Preview" />`;
                }
            }
            
            window.previewAboutImage = function(section) {
                const input = document.getElementById(`${section}-image`);
                const previewDiv = document.getElementById(`${section}-image-preview`);
                
                if (input.files && input.files[0]) {
                    const file = input.files[0];
                    
                    // Validate file size (max 5MB)
                    if (file.size > 5 * 1024 * 1024) {
                        alert('ফাইলের আকার ৫ এমবি এর কম হতে হবে।');
                        input.value = '';
                        return;
                    }
                    
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewDiv.innerHTML = `<img src="${e.target.result}" alt="Preview" />`;
                    };
                    reader.readAsDataURL(file);
                }
            };
            
            window.saveAboutSection = async function(section) {
                const statusEl = document.getElementById(`${section}-status`);
                
                // Collect data based on section
                const formData = new FormData();
                formData.append('section_key', section);
                
                if (section === 'hero') {
                    formData.append('title', document.getElementById('hero-title').value);
                    formData.append('subtitle', document.getElementById('hero-subtitle').value);
                    formData.append('content', document.getElementById('hero-subtitle2').value);
                } else if (section === 'history') {
                    formData.append('content', document.getElementById('history-content').value);
                    formData.append('content_2', document.getElementById('history-content2').value);
                } else if (section === 'mission') {
                    formData.append('title', document.getElementById('mission-title').value);
                    formData.append('content', document.getElementById('mission-content').value);
                    const imageFile = document.getElementById('mission-image').files[0];
                    if (imageFile) formData.append('image', imageFile);
                } else if (section === 'vision') {
                    formData.append('title', document.getElementById('vision-title').value);
                    formData.append('content', document.getElementById('vision-content').value);
                    const imageFile = document.getElementById('vision-image').files[0];
                    if (imageFile) formData.append('image', imageFile);
                } else if (section === 'founder') {
                    formData.append('name', document.getElementById('founder-name').value);
                    formData.append('position', document.getElementById('founder-position').value);
                    formData.append('content', document.getElementById('founder-content').value);
                    formData.append('content_2', document.getElementById('founder-content2').value);
                    formData.append('content_3', document.getElementById('founder-content3').value);
                    const imageFile = document.getElementById('founder-image').files[0];
                    if (imageFile) formData.append('image', imageFile);
                } else if (section === 'chairman') {
                    formData.append('name', document.getElementById('chairman-name').value);
                    formData.append('position', document.getElementById('chairman-position').value);
                    formData.append('content', document.getElementById('chairman-content').value);
                    const imageFile = document.getElementById('chairman-image').files[0];
                    if (imageFile) formData.append('image', imageFile);
                }
                
                // Show loading status
                if (statusEl) {
                    statusEl.textContent = 'সংরক্ষণ করা হচ্ছে...';
                    statusEl.className = 'about-status';
                    statusEl.style.display = 'inline-block';
                    statusEl.style.background = '#f3f4f6';
                    statusEl.style.color = '#666';
                }
                
                try {
                    const response = await fetch('/admin/about-sections', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: formData
                    });
                    
                    const result = await response.json();
                    
                    if (result.success) {
                        if (statusEl) {
                            statusEl.textContent = '✓ সফলভাবে সংরক্ষিত হয়েছে';
                            statusEl.className = 'about-status success';
                            setTimeout(() => {
                                statusEl.style.display = 'none';
                            }, 3000);
                        }
                        
                        // Trigger refresh on frontend
                        try {
                            localStorage.setItem('refreshAboutPage', Date.now().toString());
                        } catch(e) {}
                    } else {
                        throw new Error('Save failed');
                    }
                } catch (error) {
                    console.error('Error saving:', error);
                    if (statusEl) {
                        statusEl.textContent = '✗ সংরক্ষণ ব্যর্থ হয়েছে';
                        statusEl.className = 'about-status error';
                    }
                }
            };
            
            // Load sections on page load
            loadAllSections();
            
            // Reload every 30 seconds
            setInterval(loadAllSections, 30000);
        })();
    </script>
</div>
