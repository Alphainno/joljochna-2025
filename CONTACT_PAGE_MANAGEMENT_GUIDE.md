# Contact Page Management Guide
## Managing Company Info & Contact Form from Dashboard

This guide shows you how to manage both sections of the contact page from the admin dashboard.

---

## 📍 Location in Dashboard
**Dashboard → হোম → যোগাযোগ করুন**

---

## Section 1: Company Information (Left Side)

### Editable Fields:

#### 1. **Section Headers**
- **সেকশন শিরোনাম**: Main title (e.g., "যোগাযোগ করুন")
- **সাব-শিরোনাম**: Subtitle (e.g., "আমরা আপনার সেবায় প্রস্তুত")

#### 2. **Phone Section**
- **ফোন আইকন**: Icon/emoji (default: 📞)
- **ফোন লেবেল**: Label text (default: "ফোন")
- **ফোন নম্বরসমূহ**: Phone numbers (multiple lines supported)
  - Example:
    ```
    +880 1991 995 995
    +880 1991 994 994
    +880 1997 995 995
    ```

#### 3. **Email Section**
- **ইমেইল আইকন**: Icon/emoji (default: 📧)
- **ইমেইল লেবেল**: Label text (default: "ইমেইল")
- **ইমেইল ঠিকানা**: Email address (e.g., "hello@example.com")

#### 4. **Website Section**
- **ওয়েবসাইট আইকন**: Icon/emoji (default: 🌐)
- **ওয়েবসাইট লেবেল**: Label text (default: "ওয়েবসাইট")
- **ওয়েবসাইট ঠিকানা**: Website URL (e.g., "www.example.com")

#### 5. **Address Section**
- **ঠিকানা আইকন**: Icon/emoji (default: 📍)
- **ঠিকানা লেবেল**: Label text (default: "ঠিকানা")
- **ঠিকানা**: Address text (HTML supported, use `<br>` for line breaks)
  - Example:
    ```
    শুভনূর ৩৮৮ বাড়ি সিদ্ধার্থ এস আবাস<br>খুলনা, বাংলাদেশ
    ```

### How to Edit:
1. Go to Dashboard → হোম → যোগাযোগ করুন
2. Edit any field in the **Company Info cards**
3. Changes save automatically (auto-save enabled)
4. Click **সেভ** to manually save
5. Click **রিসেট** to restore defaults

---

## Section 2: Contact Form (Right Side)

### A. Form Title
- **ফর্ম শিরোনাম**: Form heading (e.g., "বুকিং তথ্য পাঠান")
- Located in the first card with section headers
- Auto-saves on change

### B. Form Fields Management

#### Dynamic Fields Section:
Located in **ফর্ম ফিল্ড ম্যানেজমেন্ট** section (below company info)

#### Add New Field:
1. Click **+ নতুন ফিল্ড যোগ করুন** button
2. Fill in the form:
   - **লেবেল**: Field label (e.g., "নাম", "ফোন নম্বর")
   - **টাইপ**: Select field type:
     - **টেক্সট** (text) - Single line text input
     - **ইমেইল** (email) - Email input with validation
     - **ফোন** (tel) - Phone number input
     - **সংখ্যা** (number) - Numeric input
     - **টেক্সট এরিয়া** (textarea) - Multi-line text area
   - **অর্ডার**: Display order (0 = first, 1 = second, etc.)
   - **প্লেসহোল্ডার**: Placeholder text (e.g., "আপনার নাম লিখুন")
   - **প্রয়োজনীয়**: Check if field is required ✓
3. Click **যোগ করুন** button
4. Field appears on frontend immediately

#### Edit Existing Field:
1. Find the field card in the list
2. Modify any values
3. Click **আপডেট** button
4. Changes sync to frontend automatically

#### Delete Field:
1. Click **মুছুন** button on field card
2. Confirm deletion
3. Field removed from frontend

#### Reorder Fields:
- Change the **অর্ডার** number
- Lower numbers appear first (0, 1, 2, 3...)
- Click **আপডেট** to save order

### C. Submit Button Text
- **সাবমিট বাটন টেক্সট**: Button text (e.g., "পাঠান", "জমা দিন")
- Located at top of **ফর্ম ফিল্ড ম্যানেজমেন্ট** section
- Changes save automatically
- Updates frontend button immediately

---

## Default Form Fields

If no fields are added, these default fields will show:

1. **নাম** (Name) - Text, Required
2. **ফোন নম্বর** (Phone) - Tel, Required
3. **ইমেইল** (Email) - Email, Required
4. **আগ্রহের প্লট সাইজ** (Plot Size) - Text, Optional
5. **বার্তা** (Message) - Textarea, Optional

---

## Example Configurations

### Example 1: Basic Contact Form
```
Fields:
1. নাম (Name) - Text, Required, Order: 0
2. ইমেইল (Email) - Email, Required, Order: 1
3. বার্তা (Message) - Textarea, Required, Order: 2

Button: "পাঠান"
```

### Example 2: Real Estate Inquiry Form
```
Fields:
1. পূর্ণ নাম (Full Name) - Text, Required, Order: 0
2. ফোন নম্বর (Phone) - Tel, Required, Order: 1
3. ইমেইল (Email) - Email, Optional, Order: 2
4. প্লট সাইজ (Plot Size) - Text, Required, Order: 3
5. বাজেট (Budget) - Number, Optional, Order: 4
6. পছন্দের এলাকা (Preferred Area) - Text, Optional, Order: 5
7. মন্তব্য (Comments) - Textarea, Optional, Order: 6

Button: "বুকিং রিকোয়েস্ট পাঠান"
```

### Example 3: Simple Callback Request
```
Fields:
1. নাম (Name) - Text, Required, Order: 0
2. ফোন নম্বর (Phone) - Tel, Required, Order: 1

Button: "কলব্যাক রিকোয়েস্ট করুন"
```

---

## Real-Time Updates

### Auto-Save Features:
- ✅ Company info auto-saves on input change
- ✅ Form title auto-saves on input change  
- ✅ Submit button text auto-saves on input change
- ✅ Form fields require manual save (click আপডেট)

### Frontend Sync:
- Changes reflect on homepage within 1 second
- Uses localStorage for instant synchronization
- No page refresh needed

---

## Tips & Best Practices

### Icons/Emojis:
- Use standard emojis for consistency
- Common icons: 📞 ✉️ 🌐 📍 📧 📱 🏠 💬 ✓ ❌

### Field Labels:
- Keep labels short and clear
- Use Bangla for local audience
- Examples: "নাম", "ফোন", "ইমেইল", "ঠিকানা"

### Placeholders:
- Provide helpful examples
- Guide users on what to enter
- Examples: 
  - "আপনার পূর্ণ নাম লিখুন"
  - "০১৭১১-১২৩৪৫৬"
  - "example@gmail.com"

### Required Fields:
- Mark essential fields as required
- Typically: Name, Phone or Email
- Optional: Additional details, preferences

### Field Order:
- Start with most important fields (0, 1, 2...)
- Name first, then contact info
- Additional details last
- Message/textarea at bottom

### Button Text:
- Keep it action-oriented
- Examples:
  - "পাঠান" (Send)
  - "জমা দিন" (Submit)
  - "রিকোয়েস্ট পাঠান" (Send Request)
  - "যোগাযোগ করুন" (Contact Us)

---

## Troubleshooting

### Changes Not Showing?
1. Clear browser cache: `Cmd+Shift+R` (Mac) or `Ctrl+Shift+R` (Windows)
2. Check if you clicked **আপডেট** button for fields
3. Verify field is marked as active (is_active = true)

### Field Not Appearing?
1. Check the **অর্ডার** number is set
2. Ensure field is marked as required/optional correctly
3. Verify you clicked **যোগ করুন** or **আপডেট**

### Button Text Not Changing?
1. Edit the **সাবমিট বাটন টেক্সট** input
2. Should save automatically
3. Refresh homepage if needed

---

## Technical Notes

### Data Storage:
- **Company Info**: Stored in localStorage
- **Form Fields**: Stored in MySQL database (`contact_form_fields` table)
- **Submit Button**: Stored in localStorage
- **Form Title**: Stored in localStorage

### Field Types Available:
1. `text` - Single line text
2. `email` - Email with validation
3. `tel` - Phone number
4. `number` - Numeric only
5. `textarea` - Multi-line text

### Validation:
- Required fields enforce browser validation
- Email fields check for valid email format
- Number fields only accept numeric input

---

## Summary

You now have full control over:

### Company Info Section (Left):
- ✅ Phone numbers
- ✅ Email address
- ✅ Website URL
- ✅ Physical address
- ✅ All icons and labels
- ✅ Section title and subtitle

### Contact Form Section (Right):
- ✅ Form title
- ✅ All form fields (add/edit/delete)
- ✅ Field types and properties
- ✅ Field order
- ✅ Required/optional flags
- ✅ Placeholders
- ✅ Submit button text

All changes are instant and require no coding! 🎉
