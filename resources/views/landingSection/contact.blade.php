   <section id="contact" class="contact">
        <h2 class="section-title" id="contactTitle">যোগাযোগ করুন</h2>
        <p class="section-subtitle" id="contactSubtitle">আমরা আপনার সেবায় প্রস্তুত</p>
        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-icon" id="contactPhoneIcon">📞</div>
                    <div class="contact-details">
                        <h3 id="contactPhoneLabel">ফোন</h3>
                        <p id="contactPhoneNumbers">+880 1991 995 995<br>+880 1991 994 994<br>+880 1997 995 995<br>+880 1677 600 000</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon" id="contactEmailIcon">📧</div>
                    <div class="contact-details">
                        <h3 id="contactEmailLabel">ইমেইল</h3>
                        <p id="contactEmailAddress">hello.nexgroup@gmail.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon" id="contactWebIcon">🌐</div>
                    <div class="contact-details">
                        <h3 id="contactWebLabel">ওয়েবসাইট</h3>
                        <p id="contactWebAddress">www.joljochna.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon" id="contactAddressIcon">📍</div>
                    <div class="contact-details">
                        <h3 id="contactAddressLabel">ঠিকানা</h3>
                        <p id="contactAddressText">শুভনূর ৩৮৮ বাড়ি সিদ্ধার্থ এস আবাস<br>খুলনা, বাংলাদেশ</p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <h3 style="margin-bottom: 2rem;" id="contactFormTitle">বুকিং তথ্য পাঠান</h3>
                <form id="dynamicContactForm">
                    <div id="dynamicFormFields"></div>
                    <button type="submit" class="btn btn-primary" id="contactSubmitBtn">পাঠান</button>
                </form>
            </div>
        </div>
        <script>
            (function(){
                const els = {
                    title: document.getElementById('contactTitle'),
                    subtitle: document.getElementById('contactSubtitle'),
                    phoneIcon: document.getElementById('contactPhoneIcon'),
                    phoneLabel: document.getElementById('contactPhoneLabel'),
                    phoneNumbers: document.getElementById('contactPhoneNumbers'),
                    emailIcon: document.getElementById('contactEmailIcon'),
                    emailLabel: document.getElementById('contactEmailLabel'),
                    emailAddress: document.getElementById('contactEmailAddress'),
                    webIcon: document.getElementById('contactWebIcon'),
                    webLabel: document.getElementById('contactWebLabel'),
                    webAddress: document.getElementById('contactWebAddress'),
                    addressIcon: document.getElementById('contactAddressIcon'),
                    addressLabel: document.getElementById('contactAddressLabel'),
                    addressText: document.getElementById('contactAddressText'),
                    formTitle: document.getElementById('contactFormTitle')
                };
                function readContact(){ try{ return JSON.parse(localStorage.getItem('contactSettings')||'{}'); }catch(e){ return {}; } }
                function applyContact(){
                    const s = readContact();
                    if (els.title && s.title) els.title.textContent = s.title;
                    if (els.subtitle && s.subtitle) els.subtitle.textContent = s.subtitle;
                    if (els.phoneIcon && s.phoneIcon) els.phoneIcon.textContent = s.phoneIcon;
                    if (els.phoneLabel && s.phoneLabel) els.phoneLabel.textContent = s.phoneLabel;
                    if (els.phoneNumbers && s.phoneNumbers) els.phoneNumbers.innerHTML = s.phoneNumbers;
                    if (els.emailIcon && s.emailIcon) els.emailIcon.textContent = s.emailIcon;
                    if (els.emailLabel && s.emailLabel) els.emailLabel.textContent = s.emailLabel;
                    if (els.emailAddress && s.emailAddress) els.emailAddress.innerHTML = s.emailAddress;
                    if (els.webIcon && s.webIcon) els.webIcon.textContent = s.webIcon;
                    if (els.webLabel && s.webLabel) els.webLabel.textContent = s.webLabel;
                    if (els.webAddress && s.webAddress) els.webAddress.textContent = s.webAddress;
                    if (els.addressIcon && s.addressIcon) els.addressIcon.textContent = s.addressIcon;
                    if (els.addressLabel && s.addressLabel) els.addressLabel.textContent = s.addressLabel;
                    if (els.addressText && s.addressText) els.addressText.innerHTML = s.addressText;
                    if (els.formTitle && s.formTitle) els.formTitle.textContent = s.formTitle;
                }
                applyContact();
                window.addEventListener('storage', (e)=>{ if(e.key==='contactSettings') applyContact(); });
                let last = localStorage.getItem('contactSettings');
                setInterval(()=>{ const cur = localStorage.getItem('contactSettings'); if(cur!==last){ last=cur; applyContact(); } }, 1000);
            })();

            // Dynamic Form Fields
            (function(){
                const fieldsContainer = document.getElementById('dynamicFormFields');
                const submitBtn = document.getElementById('contactSubmitBtn');
                let formFields = [];

                async function loadFormFields() {
                    try {
                        const response = await fetch('/api/contact-form-fields');
                        formFields = await response.json();
                        renderFormFields();
                    } catch (error) {
                        console.error('Error loading form fields:', error);
                        // Fallback to default fields
                        renderDefaultFields();
                    }
                }

                function renderFormFields() {
                    if (!fieldsContainer) return;
                    fieldsContainer.innerHTML = '';

                    if (formFields.length === 0) {
                        renderDefaultFields();
                        return;
                    }

                    formFields.forEach((field, index) => {
                        const formGroup = document.createElement('div');
                        formGroup.className = 'form-group';

                        const label = document.createElement('label');
                        label.textContent = field.label;
                        formGroup.appendChild(label);

                        const isFirstField = index === 0;
                        const isLastField = index === formFields.length - 1;
                        
                        let input;
                        // First field is always normal input, last field is always textarea
                        if (isLastField || (field.type === 'textarea' && !isFirstField)) {
                            input = document.createElement('textarea');
                            // Last field gets extra height
                            if (isLastField) {
                                input.style.minHeight = '120px';
                                input.style.height = '120px';
                            }
                        } else {
                            input = document.createElement('input');
                            input.type = isFirstField ? 'text' : field.type;
                        }
                        
                        input.placeholder = field.placeholder || '';
                        if (field.required) {
                            input.required = true;
                        }
                        
                        formGroup.appendChild(input);
                        fieldsContainer.appendChild(formGroup);
                    });
                }

                function renderDefaultFields() {
                    fieldsContainer.innerHTML = `
                        <div class="form-group">
                            <label>নাম</label>
                            <input type="text" placeholder="আপনার নাম লিখুন" required>
                        </div>
                        <div class="form-group">
                            <label>ফোন নম্বর</label>
                            <input type="tel" placeholder="আপনার ফোন নম্বর" required>
                        </div>
                        <div class="form-group">
                            <label>ইমেইল</label>
                            <input type="email" placeholder="আপনার ইমেইল ঠিকানা" required>
                        </div>
                        <div class="form-group">
                            <label>আগ্রহের প্লট সাইজ</label>
                            <input type="text" placeholder="যেমন: ৩০ কুড়া মালা">
                        </div>
                        <div class="form-group">
                            <label>বার্তা</label>
                            <textarea placeholder="আপনার প্রশ্ন বা মন্তব্য"></textarea>
                        </div>
                    `;
                }

                function loadSubmitButtonText() {
                    const buttonText = localStorage.getItem('contactFormButtonText');
                    if (submitBtn && buttonText) {
                        submitBtn.textContent = buttonText;
                    }
                }

                // Watch for changes
                window.addEventListener('storage', (e) => {
                    if (e.key === 'refreshContactForm') {
                        loadFormFields();
                        loadSubmitButtonText();
                    }
                    if (e.key === 'contactFormButtonText') {
                        loadSubmitButtonText();
                    }
                });

                let lastRefresh = localStorage.getItem('refreshContactForm');
                setInterval(() => {
                    const currentRefresh = localStorage.getItem('refreshContactForm');
                    if (currentRefresh !== lastRefresh) {
                        lastRefresh = currentRefresh;
                        loadFormFields();
                        loadSubmitButtonText();
                    }
                }, 1000);

                loadFormFields();
                loadSubmitButtonText();

                // Handle form submission
                const form = document.getElementById('dynamicContactForm');
                if (form) {
                    form.addEventListener('submit', async function(e) {
                        e.preventDefault();
                        
                        const submitBtn = document.getElementById('contactSubmitBtn');
                        const originalText = submitBtn.textContent;
                        
                        // Collect form data
                        const formData = {};
                        const inputs = form.querySelectorAll('input, textarea, select');
                        
                        inputs.forEach(input => {
                            const label = input.previousElementSibling?.textContent || '';
                            
                            // Map to expected field names
                            if (label.includes('নাম') || label.toLowerCase().includes('name')) {
                                formData.name = input.value;
                            } else if (label.includes('ফোন') || label.toLowerCase().includes('phone')) {
                                formData.phone = input.value;
                            } else if (label.includes('ইমেইল') || label.toLowerCase().includes('email')) {
                                formData.email = input.value;
                            } else if (label.includes('প্লট') || label.toLowerCase().includes('plot')) {
                                formData.plot_size = input.value;
                            } else if (label.includes('বার্তা') || label.toLowerCase().includes('message')) {
                                formData.message = input.value;
                            }
                        });

                        // Validate
                        if (!formData.name || !formData.phone || !formData.email) {
                            alert('অনুগ্রহ করে সকল প্রয়োজনীয় তথ্য পূরণ করুন');
                            return;
                        }

                        // Show loading
                        submitBtn.textContent = 'পাঠানো হচ্ছে...';
                        submitBtn.disabled = true;

                        try {
                            const response = await fetch('/api/bookings', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
                                },
                                body: JSON.stringify(formData)
                            });

                            const result = await response.json();

                            if (result.success) {
                                alert('✓ ' + result.message);
                                form.reset();
                            } else {
                                throw new Error(result.message || 'Submission failed');
                            }
                        } catch (error) {
                            console.error('Error submitting booking:', error);
                            alert('✗ বুকিং জমা দিতে ব্যর্থ হয়েছে। অনুগ্রহ করে আবার চেষ্টা করুন।');
                        } finally {
                            submitBtn.textContent = originalText;
                            submitBtn.disabled = false;
                        }
                    });
                }
            })();
        </script>
    </section>