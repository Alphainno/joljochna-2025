# Social Media Slider – Mobile Modernisation

## Goal
Make the social media carousel fully responsive and professional on small devices while keeping the desktop layout polished.

## File Updated
`resources/views/landingSection/socialMedia.blade.php`

---

## Key Changes

### 1. Card Structure & Typography
- Added `min-height` tiers (desktop 440px → mobile 400px) to prevent tall empty areas.
- Introduced title (2 lines) & description (3–4 lines) clamps to avoid overflow.
- Ensured buttons stay visible by stretching to full width on tablet and mobile.

### 2. Spacing & Padding
- Added internal padding to the carousel track and responsive gap sizing:
  - Desktop gap 24px (with padding 10px)
  - Tablet gap 16px, mobile gap 12px, extra-small gap 10px
- Wrapped track with flexible `::before/::after` spacers so first/last cards align nicely.

### 3. Breakpoint Refinements
| Breakpoint | Track Padding | Card Width | Min Height | Notes |
|------------|---------------|------------|------------|-------|
| Desktop    | `10px`        | `25%` (4-up) | 440px | Original look retained |
| 992px      | `10px`        | 2-up        | 420px | Reduced gap + smaller min-height |
| 768px      | `10px`        | 1-up (max 380px) | 460px | Centered & full-width buttons |
| 480px      | `10px`        | 1-up (max 340px) | 420px | Button fills width, text clamp 4 lines |
| 360px      | `8px`         | 1-up (max 320px) | 400px | Tighter padding, 13px button |

### 4. JavaScript Tweaks
- Carousel gap now read dynamically from computed CSS gap so sliding distance matches responsive spacing.

---

## Testing Checklist
- [x] Desktop (≥1200px) – 4 cards visible, hover states intact
- [x] Tablet (~768px) – 1 centered card, no horizontal scroll
- [x] Mobile (~414px) – Full-width card, text readable, button visible
- [x] Extra-small (≤360px) – Layout fits viewport, no clipped content
- [x] Button remains tappable on touch
- [x] Slider animation still smooth

---

## Summary
The social media slider now adapts gracefully from desktop down to narrow mobile screens. Cards remain consistent in height, titles and descriptions stay polished, buttons are always accessible, and the carousel spacing keeps the layout modern and professional. No linter errors were introduced.

