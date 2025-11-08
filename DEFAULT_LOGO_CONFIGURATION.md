# Default Website Logo Configuration

## ✅ Status: Already Configured

The website logo at `public/images/Joljochna.png` is already set as the **permanent default logo** across the entire system.

---

## Where It's Used

### 1. **Frontend Header (Homepage)**
**File:** `resources/views/landingSection/header.blade.php`
- **Line 62:** `logoUrl: '/images/Joljochna.png'`
- This logo appears in the navigation bar at the top of the website
- Automatically loads on every page unless user uploads a custom logo

### 2. **Admin Dashboard Sidebar**
**File:** `resources/views/admin/sidebar.blade.php`
- **Line 3:** `<img src="/images/Joljochna.png" alt="Sidebar Logo">`
- Includes fallback: `onerror="this.src='/images/Joljochna.png'"`
- Always displays this logo in the admin sidebar

### 3. **Admin Header Settings**
**File:** `public/assets/admin/program.js`
- **Line 497:** Default configuration
  ```javascript
  const headerDefaults = {
      logoUrl: '/images/Joljochna.png',
      ...
  };
  ```

---

## How It Works

### Default Behavior:
1. **No Custom Logo Uploaded:**
   - System displays `/images/Joljochna.png`
   - This is the default logo that always loads

2. **User Uploads Custom Logo:**
   - Admin can upload a different logo from: **Dashboard → হেডার**
   - Custom logo is stored in localStorage as Base64 data
   - Custom logo takes priority over default

3. **User Resets Logo:**
   - Click **Reset to Default** button in Dashboard → হেডার
   - System clears custom logo from localStorage
   - Automatically falls back to `/images/Joljochna.png`

### Priority Order:
```
1. Custom Uploaded Logo (if exists)
   ↓
2. Default Logo (/images/Joljochna.png) ← Always here as fallback
```

---

## File Information

### Logo File:
- **Path:** `/Applications/XAMPP/xamppfiles/htdocs/Final-Joljochna/public/images/Joljochna.png`
- **Size:** 123 KB
- **Format:** PNG
- **Public URL:** `http://localhost/Final-Joljochna/images/Joljochna.png`

### Where Logo is Referenced:
1. ✅ Frontend header defaults
2. ✅ Admin sidebar
3. ✅ Admin header settings defaults
4. ✅ Footer settings (via localStorage)

---

## User Management

### To Upload Custom Logo:
1. Go to **Dashboard → হেডার**
2. Click **"লোগো আপলোড"** file input
3. Select image file (PNG/JPG/SVG)
4. Preview appears automatically
5. Click **Save** button
6. Custom logo now displays on website

### To Restore Default Logo:
1. Go to **Dashboard → হেডার**
2. Click **"Reset to Default"** button
3. System removes custom logo
4. `/images/Joljochna.png` displays again

---

## Technical Details

### Default Logo Configuration:

#### Frontend (header.blade.php):
```javascript
const defaults = {
    logoUrl: '/images/Joljochna.png',
    logoDataUrl: '',  // Empty = use logoUrl
    ...
};
```

#### Admin (program.js):
```javascript
const headerDefaults = {
    logoUrl: '/images/Joljochna.png',
    logoDataUrl: '',  // Custom uploaded logo stored here
    ...
};
```

### Logo Display Logic:
```javascript
const logoSrc = data.logoDataUrl || data.logoUrl || '';
if (logoSrc) {
    brandLogo.src = logoSrc;
    brandLogo.style.display = 'inline-block';
    brandIcon.style.display = 'none';  // Hide fallback icon
} else {
    // Show fallback icon (🏠) if no logo
    brandLogo.style.display = 'none';
    brandIcon.style.display = 'inline-block';
}
```

### Data Flow:
```
1. Load default from config → '/images/Joljochna.png'
2. Check localStorage for custom logo → If exists, use it
3. Merge: Custom overrides default
4. Display final logo
```

---

## Replacing Default Logo

If you want to change the **permanent default logo** to a different file:

### Option 1: Replace the File
1. Delete or rename `public/images/Joljochna.png`
2. Add your new logo as `public/images/Joljochna.png`
3. No code changes needed!

### Option 2: Change Default Path
Edit these files:

**1. Frontend Header:**
```javascript
// File: resources/views/landingSection/header.blade.php (Line 62)
logoUrl: '/images/YourNewLogo.png',  // Change this
```

**2. Admin Defaults:**
```javascript
// File: public/assets/admin/program.js (Line 497)
logoUrl: '/images/YourNewLogo.png',  // Change this
```

**3. Admin Sidebar:**
```html
<!-- File: resources/views/admin/sidebar.blade.php (Line 3) -->
<img src="/images/YourNewLogo.png" alt="Sidebar Logo">
```

---

## Browser Caching

If you replace the logo file:
- Users may see old logo due to browser cache
- Solution: Clear cache with `Cmd+Shift+R` (Mac) or `Ctrl+Shift+R` (Windows)
- Or rename file (e.g., `Joljochna-v2.png`) and update paths

---

## Summary

### ✅ Current Setup:
- Default logo: `/images/Joljochna.png` (123 KB)
- Automatic fallback if custom logo not uploaded
- Never changes unless user uploads custom logo
- Can be restored to default anytime

### 🎯 No Action Required:
The system is already configured correctly. The logo at `public/images/Joljochna.png` will **always** be the default logo unless explicitly changed by the admin user.

### 📝 Key Points:
1. ✅ Default logo is permanent
2. ✅ File exists and is accessible
3. ✅ Used across entire website
4. ✅ Can be customized from dashboard
5. ✅ Can be reset to default anytime
6. ✅ No code changes needed

---

## Testing

### Verify Default Logo is Working:
1. Open homepage: `http://localhost/Final-Joljochna/`
2. Check top-left corner of navigation bar
3. Should see Joljochna logo
4. If not visible, clear browser cache

### Verify Admin Sidebar Logo:
1. Login to dashboard
2. Check sidebar on left
3. Should see Joljochna logo at top

### Verify Reset Functionality:
1. Upload a custom logo from dashboard
2. Click "Reset to Default"
3. Joljochna.png should display again

---

## Conclusion

**Everything is already set up correctly!** The logo at `public/images/Joljochna.png` is the permanent default logo and will always load unless the user explicitly uploads a custom logo from the dashboard.

No code changes or configuration updates are needed. The system is ready to use! 🎉
