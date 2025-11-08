# Dynamic Contact Form Feature - Complete Implementation

## Overview
The contact form (যোগাযোগ করুন) is now fully dynamic. Admin can edit field labels, add/remove fields, change field types, and customize the submit button text from the dashboard.

## Features Implemented

### ✅ Field Management
- **Add Fields**: Create new form fields with custom labels
- **Edit Fields**: Modify existing field properties
- **Remove Fields**: Delete unwanted fields
- **Reorder Fields**: Control the display order
- **Field Types**: Support for text, email, tel, number, and textarea
- **Required Flag**: Mark fields as required or optional
- **Placeholders**: Custom placeholder text for each field

### ✅ Submit Button Customization
- Change button text (e.g., "পাঠান", "জমা দিন", "সাবমিট করুন")
- Changes reflect immediately on frontend

## Files Created/Modified

### Database
1. **Migration**: `database/migrations/2025_11_08_024832_create_contact_form_fields_table.php`
   - Schema for storing form field configurations

### Models
2. **ContactFormField**: `app/Models/ContactFormField.php`
   - Model for form field management

### Controllers
3. **ContactFormFieldController**: `app/Http/Controllers/Admin/ContactFormFieldController.php`
   - CRUD operations for form fields
   - Methods: index(), store(), update(), destroy()

### Routes
4. **web.php**: Added routes for contact form fields API
   ```php
   GET    /api/contact-form-fields
   POST   /admin/contact-form-fields
   PUT    /admin/contact-form-fields/{id}
   DELETE /admin/contact-form-fields/{id}
   ```

### Views
5. **Admin Dashboard**: `resources/views/admin/home.blade.php`
   - New "ফর্ম ফিল্ড ম্যানেজমেন্ট" section added
   - Field editor with:
     - Label input
     - Type selector (dropdown)
     - Placeholder input
     - Order input
     - Required checkbox
     - Add/Update/Delete buttons

6. **Frontend Form**: `resources/views/landingSection/contact.blade.php`
   - Dynamic form rendering from database
   - Fallback to default fields if database is empty
   - Real-time updates via localStorage

## How To Use

### 1. Access Form Field Editor
1. Login to dashboard
2. Go to **হোম** → **যোগাযোগ করুন**
3. Scroll down to **ফর্ম ফিল্ড ম্যানেজমেন্ট** section

### 2. Add New Field
1. Click **+ নতুন ফিল্ড যোগ করুন** button
2. Fill in:
   - **লেবেল**: Field label (e.g., "নাম")
   - **টাইপ**: Select field type
     - টেক্সট (text)
     - ইমেইল (email)
     - ফোন (tel)
     - সংখ্যা (number)
     - টেক্সট এরিয়া (textarea)
   - **অর্ডার**: Display order (0 = first)
   - **প্লেসহোল্ডার**: Placeholder text
   - **প্রয়োজনীয়**: Check if field is required
3. Click **যোগ করুন** button

### 3. Edit Existing Field
1. Modify any field values in the card
2. Click **আপডেট** button
3. Changes sync to frontend automatically

### 4. Delete Field
1. Click **মুছুন** button on field card
2. Confirm deletion
3. Field removed from frontend immediately

### 5. Change Submit Button Text
1. Edit **সাবমিট বাটন টেক্সট** input at top of section
2. Changes apply automatically (no save button needed)

## Technical Details

### Field Types
```javascript
- text      → <input type="text">
- email     → <input type="email">
- tel       → <input type="tel">
- number    → <input type="number">
- textarea  → <textarea>
```

### Database Schema
```sql
contact_form_fields
├── id (bigint)
├── label (string) - Field label
├── type (string) - input type
├── placeholder (string) - Placeholder text
├── required (boolean) - Is required?
├── order (integer) - Display order
├── is_active (boolean) - Show/hide field
├── created_at (timestamp)
└── updated_at (timestamp)
```

### API Endpoints

#### Get All Active Fields
```
GET /api/contact-form-fields
Response: [
  {
    "id": 1,
    "label": "নাম",
    "type": "text",
    "placeholder": "আপনার নাম লিখুন",
    "required": true,
    "order": 0,
    "is_active": true
  }
]
```

#### Create Field
```
POST /admin/contact-form-fields
Body: {
  "label": "ফোন নম্বর",
  "type": "tel",
  "placeholder": "আপনার ফোন নম্বর",
  "required": true,
  "order": 1
}
```

#### Update Field
```
PUT /admin/contact-form-fields/{id}
Body: { /* same as create */ }
```

#### Delete Field
```
DELETE /admin/contact-form-fields/{id}
```

### Synchronization
- **Admin → Frontend**: Uses localStorage events
- **Trigger Key**: `refreshContactForm`
- **Button Text Key**: `contactFormButtonText`
- **Polling Interval**: 1 second (checks for changes)

### Fallback Behavior
If no fields in database, default fields are shown:
1. নাম (Name) - text, required
2. ফোন নম্বর (Phone) - tel, required
3. ইমেইল (Email) - email, required
4. আগ্রহের প্লট সাইজ (Plot Size) - text
5. বার্তা (Message) - textarea

## Browser Compatibility
- ✅ Modern browsers (Chrome, Firefox, Safari, Edge)
- ✅ Mobile responsive
- ✅ JavaScript required
- ✅ localStorage support required

## Testing

### Test Add Field
1. Add a new field "বাজেট" (Budget)
2. Type: সংখ্যা (number)
3. Placeholder: "আপনার বাজেট"
4. Mark as required
5. Verify it appears on frontend contact form

### Test Edit Field
1. Change "নাম" label to "পূর্ণ নাম"
2. Verify label updates on frontend

### Test Delete Field
1. Delete "আগ্রহের প্লট সাইজ" field
2. Verify it's removed from frontend

### Test Button Text
1. Change to "জমা দিন"
2. Check frontend button shows new text

### Test Order
1. Set field orders: 0, 1, 2, 3...
2. Verify fields display in correct order on frontend

## Known Limitations
1. Form submissions not handled (add backend handler if needed)
2. No field validation rules beyond required
3. No conditional field display
4. No file upload field type
5. Maximum field types limited to 5 basic types

## Future Enhancements
- [ ] Field validation rules (min/max length, patterns)
- [ ] Conditional field visibility
- [ ] File upload field type
- [ ] Field groups/sections
- [ ] Multi-language support for labels
- [ ] Form submission handling
- [ ] Email notifications on form submit
- [ ] Database storage of form submissions
- [ ] Export form submissions to CSV

## Notes
- Fields are sorted by `order` ASC then `created_at` ASC
- Only `is_active = true` fields are shown on frontend
- All fields stored in database persist across sessions
- Button text stored in localStorage (no database persistence)
- Real-time sync works within same browser only
