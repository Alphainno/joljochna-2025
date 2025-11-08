<div id="home" class="tab-content">
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-card-content">
                <div class="stat-info">
                    <h3>হোম</h3>
                    <div class="subtitle">ড্যাশবোর্ডের হোম সেকশন</div>
                </div>
                <div class="stat-icon blue">🏠</div>
            </div>
        </div>
    </div>

    <div id="home-contact" style="margin-top:1rem;">
        <div class="table-card">
            <h2>যোগাযোগ সেকশন</h2>
            <p style="color:#6b7280; margin-top:-6px;">হোম পেজের যোগাযোগ (Contact) সেকশনের কনটেন্ট এই ফর্ম থেকে ম্যানেজ করুন।</p>
            <style>
                #home-contact .grid-2 { display:grid; grid-template-columns:1fr 1fr; gap:12px; }
                #home-contact .card { border:1px solid #e5e7eb; border-radius:12px; padding:12px; background:#fafafa; }
                #home-contact input[type="text"],
                #home-contact input[type="url"],
                #home-contact textarea { width:100%; height:46px; padding:10px 12px; font-size:15px; border-radius:10px; border:1px solid #d1d5db; box-sizing:border-box; }
                #home-contact textarea { min-height:100px; height:auto; resize:vertical; }
                @media (max-width: 960px){ #home-contact .grid-2 { grid-template-columns:1fr; } }
            </style>
            <div class="grid-2">
                <div class="card">
                    <div class="form-group">
                        <label>সেকশন শিরোনাম</label>
                        <input type="text" id="contactTitleInput" placeholder="যোগাযোগ করুন">
                    </div>
                    <div class="form-group" style="margin-top:8px;">
                        <label>সাব-শিরোনাম</label>
                        <input type="text" id="contactSubtitleInput" placeholder="আমরা আপনার সেবায় প্রস্তুত">
                    </div>
                    <div class="form-group" style="margin-top:8px;">
                        <label>ফর্ম শিরোনাম</label>
                        <input type="text" id="contactFormTitleInput" placeholder="বুকিং তথ্য পাঠান">
                    </div>
                </div>

                <div class="card">
                    <div class="grid-2">
                        <div class="form-group">
                            <label>ফোন আইকন</label>
                            <input type="text" id="contactPhoneIconInput" placeholder="📞">
                        </div>
                        <div class="form-group">
                            <label>ফোন লেবেল</label>
                            <input type="text" id="contactPhoneLabelInput" placeholder="ফোন">
                        </div>
                    </div>
                    <div class="form-group" style="margin-top:8px;">
                        <label>ফোন নম্বরসমূহ (লাইন ব্রেকে আলাদা করুন বা <br> ব্যবহার করুন)</label>
                        <textarea id="contactPhoneNumbersInput" placeholder="+880 1991 995 995\n+880 1991 994 994"></textarea>
                    </div>
                </div>
            </div>

            <div class="grid-2" style="margin-top:12px;">
                <div class="card">
                    <div class="grid-2">
                        <div class="form-group">
                            <label>ইমেইল আইকন</label>
                            <input type="text" id="contactEmailIconInput" placeholder="📧">
                        </div>
                        <div class="form-group">
                            <label>ইমেইল লেবেল</label>
                            <input type="text" id="contactEmailLabelInput" placeholder="ইমেইল">
                        </div>
                    </div>
                    <div class="form-group" style="margin-top:8px;">
                        <label>ইমেইল ঠিকানা</label>
                        <input type="text" id="contactEmailAddressInput" placeholder="hello@example.com">
                    </div>
                </div>
                <div class="card">
                    <div class="grid-2">
                        <div class="form-group">
                            <label>ওয়েবসাইট আইকন</label>
                            <input type="text" id="contactWebIconInput" placeholder="🌐">
                        </div>
                        <div class="form-group">
                            <label>ওয়েবসাইট লেবেল</label>
                            <input type="text" id="contactWebLabelInput" placeholder="ওয়েবসাইট">
                        </div>
                    </div>
                    <div class="form-group" style="margin-top:8px;">
                        <label>ওয়েবসাইট ঠিকানা</label>
                        <input type="text" id="contactWebAddressInput" placeholder="www.example.com">
                    </div>
                </div>
            </div>

            <div class="card" style="margin-top:12px;">
                <div class="grid-2">
                    <div class="form-group">
                        <label>ঠিকানা আইকন</label>
                        <input type="text" id="contactAddressIconInput" placeholder="📍">
                    </div>
                    <div class="form-group">
                        <label>ঠিকানা লেবেল</label>
                        <input type="text" id="contactAddressLabelInput" placeholder="ঠিকানা">
                    </div>
                </div>
                <div class="form-group" style="margin-top:8px;">
                    <label>ঠিকানা (HTML অনুমোদিত)</label>
                    <textarea id="contactAddressTextInput" placeholder="লাইন ব্রেকের জন্য <br> ব্যবহার করুন"></textarea>
                </div>
            </div>

            <div style="margin-top:14px; display:flex; gap:10px;">
                <button id="saveContactBtn" class="btn btn-primary" type="button">সেভ</button>
                <button id="resetContactBtn" class="btn btn-secondary" type="button">রিসেট</button>
            </div>

            <script>
                (function(){
                    const qs = (id)=> document.getElementById(id);
                    const els = {
                        title: qs('contactTitleInput'),
                        subtitle: qs('contactSubtitleInput'),
                        formTitle: qs('contactFormTitleInput'),
                        phoneIcon: qs('contactPhoneIconInput'),
                        phoneLabel: qs('contactPhoneLabelInput'),
                        phoneNumbers: qs('contactPhoneNumbersInput'),
                        emailIcon: qs('contactEmailIconInput'),
                        emailLabel: qs('contactEmailLabelInput'),
                        emailAddress: qs('contactEmailAddressInput'),
                        webIcon: qs('contactWebIconInput'),
                        webLabel: qs('contactWebLabelInput'),
                        webAddress: qs('contactWebAddressInput'),
                        addressIcon: qs('contactAddressIconInput'),
                        addressLabel: qs('contactAddressLabelInput'),
                        addressText: qs('contactAddressTextInput')
                    };

                    function read(){ try{ return JSON.parse(localStorage.getItem('contactSettings')||'{}'); }catch(e){ return {}; } }
                    function write(v){ localStorage.setItem('contactSettings', JSON.stringify(v)); window.dispatchEvent(new StorageEvent('storage', {key:'contactSettings', newValue: JSON.stringify(v)})); }
                    function cur(){ return read() || {}; }

                    function load(){
                        const s = cur();
                        if(els.title) els.title.value = s.title || 'যোগাযোগ করুন';
                        if(els.subtitle) els.subtitle.value = s.subtitle || 'আমরা আপনার সেবায় প্রস্তুত';
                        if(els.formTitle) els.formTitle.value = s.formTitle || 'বুকিং তথ্য পাঠান';
                        if(els.phoneIcon) els.phoneIcon.value = s.phoneIcon || '📞';
                        if(els.phoneLabel) els.phoneLabel.value = s.phoneLabel || 'ফোন';
                        if(els.phoneNumbers) els.phoneNumbers.value = (s.phoneNumbers||'+880 1991 995 995\n+880 1991 994 994').replace(/<br\s*\/>?/gi, '\n');
                        if(els.emailIcon) els.emailIcon.value = s.emailIcon || '📧';
                        if(els.emailLabel) els.emailLabel.value = s.emailLabel || 'ইমেইল';
                        if(els.emailAddress) els.emailAddress.value = s.emailAddress || 'hello@example.com';
                        if(els.webIcon) els.webIcon.value = s.webIcon || '🌐';
                        if(els.webLabel) els.webLabel.value = s.webLabel || 'ওয়েবসাইট';
                        if(els.webAddress) els.webAddress.value = s.webAddress || 'www.example.com';
                        if(els.addressIcon) els.addressIcon.value = s.addressIcon || '📍';
                        if(els.addressLabel) els.addressLabel.value = s.addressLabel || 'ঠিকানা';
                        if(els.addressText) els.addressText.value = (s.addressText||'').replace(/<br\s*\/>?/gi, '\n');
                    }

                    function save(){
                        const payload = {
                            title: els.title?.value || '',
                            subtitle: els.subtitle?.value || '',
                            formTitle: els.formTitle?.value || '',
                            phoneIcon: els.phoneIcon?.value || '',
                            phoneLabel: els.phoneLabel?.value || '',
                            phoneNumbers: (els.phoneNumbers?.value || '').split(/\n+/).map(s=>s.trim()).filter(Boolean).join('<br>'),
                            emailIcon: els.emailIcon?.value || '',
                            emailLabel: els.emailLabel?.value || '',
                            emailAddress: els.emailAddress?.value || '',
                            webIcon: els.webIcon?.value || '',
                            webLabel: els.webLabel?.value || '',
                            webAddress: els.webAddress?.value || '',
                            addressIcon: els.addressIcon?.value || '',
                            addressLabel: els.addressLabel?.value || '',
                            addressText: (els.addressText?.value || '').split(/\n+/).map(s=>s.trim()).filter(Boolean).join('<br>')
                        };
                        write(payload);
                    }

                    document.getElementById('saveContactBtn').addEventListener('click', save);
                    document.getElementById('resetContactBtn').addEventListener('click', ()=>{
                        localStorage.removeItem('contactSettings'); load(); window.dispatchEvent(new StorageEvent('storage', {key:'contactSettings', newValue: null}));
                    });

                    // Auto-save on input changes
                    Object.values(els).forEach(el=>{ if(!el) return; ['input','change'].forEach(ev=> el.addEventListener(ev, save)); });

                    load();
                })();
            </script>
        </div>

        {{-- Dynamic Form Fields Management --}}
        <div class="table-card" style="margin-top:1rem;">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem;">
                <div>
                    <h2 style="margin:0;">ফর্ম ফিল্ড ম্যানেজমেন্ট</h2>
                    <p style="color:#6b7280; margin:4px 0 0;">যোগাযোগ ফর্মের ফিল্ডগুলি সম্পাদনা করুন</p>
                </div>
                <button id="addFormFieldBtn" class="btn btn-primary" type="button">+ নতুন ফিল্ড যোগ করুন</button>
            </div>
            
            <div class="form-group" style="margin-bottom:1rem;">
                <label>সাবমিট বাটন টেক্সট</label>
                <input type="text" id="submitButtonText" placeholder="পাঠান" style="max-width:300px;">
            </div>

            <div id="formFieldsContainer" style="display:grid; gap:12px;"></div>

            <style>
                .card-editor[draggable="true"] {
                    cursor: move;
                }
                .card-editor[draggable="true"]:hover {
                    border-color: #3b82f6 !important;
                    box-shadow: 0 2px 8px rgba(59, 130, 246, 0.2);
                }
                .card-editor[draggable="true"] .drag-handle:hover {
                    color: #3b82f6;
                }
                .card-editor[draggable="true"][style*="opacity: 0.5"] {
                    border-color: #93c5fd !important;
                    background: #eff6ff !important;
                }
            </style>

            <script>
                (function(){
                    let formFields = [];
                    const container = document.getElementById('formFieldsContainer');
                    const submitBtnInput = document.getElementById('submitButtonText');
                    let fieldCounter = 0;

                    async function loadFormFields() {
                        try {
                            const response = await fetch('/api/contact-form-fields');
                            formFields = await response.json();
                            renderFields();
                        } catch (error) {
                            console.error('Error loading form fields:', error);
                        }
                    }

                    function renderFields() {
                        container.innerHTML = '';
                        formFields.forEach((field, index) => {
                            const isLastField = index === formFields.length - 1;
                            container.appendChild(createFieldCard(field, index, isLastField));
                        });
                        setupDragAndDrop();
                    }

                    function setupDragAndDrop() {
                        const cards = container.querySelectorAll('.card-editor[draggable="true"]');
                        let draggedElement = null;

                        cards.forEach(card => {
                            card.addEventListener('dragstart', function(e) {
                                draggedElement = this;
                                this.style.opacity = '0.5';
                                e.dataTransfer.effectAllowed = 'move';
                                e.dataTransfer.setData('text/html', this.innerHTML);
                            });

                            card.addEventListener('dragend', function() {
                                this.style.opacity = '1';
                                draggedElement = null;
                            });

                            card.addEventListener('dragover', function(e) {
                                e.preventDefault();
                                e.dataTransfer.dropEffect = 'move';
                                
                                if (this !== draggedElement && this.draggable) {
                                    const rect = this.getBoundingClientRect();
                                    const midpoint = rect.top + rect.height / 2;
                                    
                                    if (e.clientY < midpoint) {
                                        this.parentNode.insertBefore(draggedElement, this);
                                    } else {
                                        this.parentNode.insertBefore(draggedElement, this.nextSibling);
                                    }
                                }
                            });

                            card.addEventListener('drop', function(e) {
                                e.stopPropagation();
                                updateFieldOrder();
                            });
                        });
                    }

                    async function updateFieldOrder() {
                        const cards = container.querySelectorAll('.card-editor[draggable="true"]');
                        const updates = [];
                        
                        cards.forEach((card, index) => {
                            const fieldId = card.dataset.fieldId;
                            const field = formFields.find(f => f.id == fieldId);
                            if (field) {
                                field.order = index;
                                updates.push({
                                    id: fieldId,
                                    order: index
                                });
                            }
                        });

                        // Save new order to backend
                        try {
                            for (const update of updates) {
                                const formData = new FormData();
                                const field = formFields.find(f => f.id == update.id);
                                formData.append('label', field.label);
                                formData.append('type', field.type);
                                formData.append('placeholder', field.placeholder || '');
                                formData.append('required', field.required ? '1' : '0');
                                formData.append('order', update.order);
                                formData.append('_method', 'PUT');
                                
                                await fetch(`/admin/contact-form-fields/${update.id}`, {
                                    method: 'POST',
                                    body: formData,
                                    headers: {
                                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
                                    }
                                });
                            }
                            console.log('Field order updated successfully');
                        } catch (error) {
                            console.error('Error updating field order:', error);
                        }
                    }

                    function createFieldCard(field = null, index = null, isLastField = false) {
                        const id = field ? field.id : 'new_' + (++fieldCounter);
                        const isNew = !field;
                        const card = document.createElement('div');
                        card.className = 'card-editor';
                        const extraPadding = isLastField ? 'padding:16px 16px 46px 16px;' : 'padding:16px;';
                        const bgColor = isLastField ? 'background:#f0f9ff;' : 'background:#fafafa;';
                        card.style.cssText = `border:1px solid #e5e7eb; border-radius:12px; ${extraPadding} ${bgColor} position:relative; transition:all 0.2s;`;
                        card.dataset.fieldId = id;
                        card.draggable = !isNew; // Only saved fields are draggable

                        const label = (field?.label || '').replace(/"/g, '&quot;');
                        const type = field?.type || 'text';
                        const placeholder = (field?.placeholder || '').replace(/"/g, '&quot;');
                        const required = field?.required || false;
                        const order = field?.order || index || 0;

                        card.innerHTML = `
                            ${!isNew ? `<div class="drag-handle" style="position:absolute; left:8px; top:50%; transform:translateY(-50%); cursor:grab; color:#9ca3af; font-size:20px;">⋮⋮</div>` : ''}
                            <div style="display:grid; grid-template-columns:2fr 1fr 1fr; gap:12px; margin-bottom:12px; padding-left:${!isNew ? '24px' : '0'};">
                                <div>
                                    <label style="font-size:13px; font-weight:500;">লেবেল</label>
                                    <input type="text" class="field-label" value="${label}" placeholder="নাম" style="width:100%; padding:8px; border:1px solid #d1d5db; border-radius:6px; margin-top:4px;">
                                </div>
                                <div>
                                    <label style="font-size:13px; font-weight:500;">টাইপ</label>
                                    <select class="field-type" style="width:100%; padding:8px; border:1px solid #d1d5db; border-radius:6px; margin-top:4px;">
                                        <option value="text" ${type === 'text' ? 'selected' : ''}>টেক্সট</option>
                                        <option value="email" ${type === 'email' ? 'selected' : ''}>ইমেইল</option>
                                        <option value="tel" ${type === 'tel' ? 'selected' : ''}>ফোন</option>
                                        <option value="number" ${type === 'number' ? 'selected' : ''}>সংখ্যা</option>
                                        <option value="textarea" ${type === 'textarea' ? 'selected' : ''}>টেক্সট এরিয়া</option>
                                    </select>
                                </div>
                                <div>
                                    <label style="font-size:13px; font-weight:500;">অর্ডার</label>
                                    <input type="number" class="field-order" value="${order}" min="0" style="width:100%; padding:8px; border:1px solid #d1d5db; border-radius:6px; margin-top:4px;">
                                </div>
                            </div>
                            <div style="margin-bottom:12px;">
                                <label style="font-size:13px; font-weight:500;">প্লেসহোল্ডার</label>
                                <input type="text" class="field-placeholder" value="${placeholder}" placeholder="আপনার নাম লিখুন" style="width:100%; padding:8px; border:1px solid #d1d5db; border-radius:6px; margin-top:4px;">
                            </div>
                            <div style="margin-bottom:12px;">
                                <label style="display:flex; align-items:center; gap:8px; font-size:13px; cursor:pointer;">
                                    <input type="checkbox" class="field-required" ${required ? 'checked' : ''} style="cursor:pointer;">
                                    <span>এই ফিল্ডটি প্রয়োজনীয়</span>
                                </label>
                            </div>
                            <div style="display:flex; gap:8px;">
                                <button type="button" class="btn btn-primary" onclick="saveFormField('${id}')" style="padding:8px 16px; font-size:13px;">${isNew ? 'যোগ করুন' : 'আপডেট'}</button>
                                ${!isNew ? `<button type="button" class="btn" onclick="deleteFormField('${id}')" style="padding:8px 16px; font-size:13px; background:#ef4444; color:#fff;">মুছুন</button>` : ''}
                                <span class="status-${id}" style="font-size:12px; color:#666; margin-left:8px; align-self:center;"></span>
                            </div>
                        `;
                        return card;
                    }

                    window.saveFormField = async function(id) {
                        const card = document.querySelector(`[data-field-id="${id}"]`);
                        if (!card) return;

                        const label = card.querySelector('.field-label').value.trim();
                        const type = card.querySelector('.field-type').value;
                        const placeholder = card.querySelector('.field-placeholder').value.trim();
                        const required = card.querySelector('.field-required').checked;
                        const order = parseInt(card.querySelector('.field-order').value) || 0;
                        const statusEl = card.querySelector(`.status-${id}`);

                        if (!label) {
                            alert('লেবেল প্রয়োজনীয়');
                            return;
                        }

                        if (statusEl) statusEl.textContent = 'সংরক্ষণ করা হচ্ছে...';

                        try {
                            const isNew = id.toString().startsWith('new_');
                            const url = isNew ? '/admin/contact-form-fields' : `/admin/contact-form-fields/${id}`;
                            const formData = new FormData();
                            formData.append('label', label);
                            formData.append('type', type);
                            formData.append('placeholder', placeholder);
                            formData.append('required', required ? '1' : '0');
                            formData.append('order', order);
                            if (!isNew) formData.append('_method', 'PUT');

                            const response = await fetch(url, {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
                                },
                                body: formData
                            });

                            const result = await response.json();
                            if (result.success) {
                                if (statusEl) {
                                    statusEl.textContent = '✓ সংরক্ষিত';
                                    statusEl.style.color = '#10b981';
                                    setTimeout(() => statusEl.textContent = '', 3000);
                                }
                                setTimeout(() => {
                                    loadFormFields();
                                    // Trigger frontend refresh
                                    try {
                                        localStorage.setItem('refreshContactForm', Date.now());
                                    } catch(e) {}
                                }, 500);
                            }
                        } catch (error) {
                            console.error('Error:', error);
                            if (statusEl) {
                                statusEl.textContent = '✗ ত্রুটি';
                                statusEl.style.color = '#ef4444';
                            }
                        }
                    };

                    window.deleteFormField = async function(id) {
                        if (!confirm('এই ফিল্ডটি মুছে ফেলতে চান?')) return;

                        try {
                            const response = await fetch(`/admin/contact-form-fields/${id}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
                                }
                            });

                            const result = await response.json();
                            if (result.success) {
                                loadFormFields();
                                try {
                                    localStorage.setItem('refreshContactForm', Date.now());
                                } catch(e) {}
                            }
                        } catch (error) {
                            console.error('Error:', error);
                        }
                    };

                    document.getElementById('addFormFieldBtn').addEventListener('click', () => {
                        container.appendChild(createFieldCard());
                    });

                    // Submit button text management
                    function loadSubmitButtonText() {
                        const saved = localStorage.getItem('contactFormButtonText');
                        submitBtnInput.value = saved || 'পাঠান';
                    }

                    function saveSubmitButtonText() {
                        const text = submitBtnInput.value.trim() || 'পাঠান';
                        localStorage.setItem('contactFormButtonText', text);
                        localStorage.setItem('refreshContactForm', Date.now());
                    }

                    submitBtnInput.addEventListener('input', saveSubmitButtonText);
                    submitBtnInput.addEventListener('change', saveSubmitButtonText);

                    loadFormFields();
                    loadSubmitButtonText();
                })();
            </script>
        </div>
    </div>
    <div id="home-features" style="margin-top:1rem;">
        <div class="table-card">
            <h2>আমাদের সুবিধা সমূহ</h2>
            <style>
                #home-features .features-form input[type="text"],
                #home-features .features-form textarea { height: 46px; padding:10px 12px; font-size:15px; border-radius:10px; }
                #home-features .features-grid-editor { display:grid; grid-template-columns:repeat(3,1fr); gap:12px; }
                #home-features .card-editor { border:1px solid #e5e7eb; border-radius:12px; padding:12px; background:#fafafa }
                #home-features .card-editor h4 { margin:0 0 8px; font-size:14px }
                @media (max-width: 960px){ #home-features .features-grid-editor{ grid-template-columns:1fr } }
            </style>
            <div class="features-form">
                <div class="features-grid-editor">
                    <div class="card-editor">
                        <h4>কার্ড ১</h4>
                        <input type="text" id="featIcon1" placeholder="আইকন (যেমন: 🏘️)" />
                        <input type="text" id="featTitle1" placeholder="শিরোনাম" style="margin-top:8px;" />
                        <input type="text" id="featDesc1" placeholder="বিবরণ" style="margin-top:8px;" />
                    </div>
                    <div class="card-editor">
                        <h4>কার্ড ২</h4>
                        <input type="text" id="featIcon2" placeholder="আইকন (যেমন: 📋)" />
                        <input type="text" id="featTitle2" placeholder="শিরোনাম" style="margin-top:8px;" />
                        <input type="text" id="featDesc2" placeholder="বিবরণ" style="margin-top:8px;" />
                    </div>
                    <div class="card-editor">
                        <h4>কার্ড ৩</h4>
                        <input type="text" id="featIcon3" placeholder="আইকন (যেমন: 🎯)" />
                        <input type="text" id="featTitle3" placeholder="শিরোনাম" style="margin-top:8px;" />
                        <input type="text" id="featDesc3" placeholder="বিবরণ" style="margin-top:8px;" />
                    </div>
                    <div class="card-editor">
                        <h4>কার্ড ৪</h4>
                        <input type="text" id="featIcon4" placeholder="আইকন (যেমন: ✅)" />
                        <input type="text" id="featTitle4" placeholder="শিরোনাম" style="margin-top:8px;" />
                        <input type="text" id="featDesc4" placeholder="বিবরণ" style="margin-top:8px;" />
                    </div>
                    <div class="card-editor">
                        <h4>কার্ড ৫</h4>
                        <input type="text" id="featIcon5" placeholder="আইকন (যেমন: 🚗)" />
                        <input type="text" id="featTitle5" placeholder="শিরোনাম" style="margin-top:8px;" />
                        <input type="text" id="featDesc5" placeholder="বিবরণ" style="margin-top:8px;" />
                    </div>
                    <div class="card-editor">
                        <h4>কার্ড ৬</h4>
                        <input type="text" id="featIcon6" placeholder="আইকন (যেমন: 🌳)" />
                        <input type="text" id="featTitle6" placeholder="শিরোনাম" style="margin-top:8px;" />
                        <input type="text" id="featDesc6" placeholder="বিবরণ" style="margin-top:8px;" />
                    </div>
                </div>
                <div style="margin-top:14px; display:flex; gap:10px;">
                    <button id="saveFeaturesBtn" class="btn btn-primary" type="button">সেভ</button>
                    <button id="resetFeaturesBtn" class="btn btn-secondary" type="button">রিসেট</button>
                </div>
            </div>
            <script>
                (function(){
                    const ids = ['1','2','3','4','5','6'];
                    const getInputs = () => ids.map(i=>({
                        icon: document.getElementById('featIcon'+i),
                        title: document.getElementById('featTitle'+i),
                        desc: document.getElementById('featDesc'+i)
                    }));
                    function load(){
                        try{
                            const saved = JSON.parse(localStorage.getItem('featuresSettings')||'{}');
                            const items = Array.isArray(saved.items)? saved.items: [];
                            const inputs = getInputs();
                            inputs.forEach((g, idx)=>{
                                const it = items[idx] || {};
                                g.icon.value = it.icon || '';
                                g.title.value = it.title || '';
                                g.desc.value  = it.desc  || '';
                            });
                        }catch(e){}
                    }
                    function save(){
                        const inputs = getInputs();
                        const items = inputs.map(g=>({icon:g.icon.value, title:g.title.value, desc:g.desc.value}));
                        const payload = { items };
                        localStorage.setItem('featuresSettings', JSON.stringify(payload));
                        window.dispatchEvent(new StorageEvent('storage', {key:'featuresSettings', newValue: JSON.stringify(payload)}));
                    }
                    document.getElementById('saveFeaturesBtn').addEventListener('click', save);
                    document.getElementById('resetFeaturesBtn').addEventListener('click', ()=>{
                        localStorage.removeItem('featuresSettings');
                        getInputs().forEach(g=>{ g.icon.value=''; g.title.value=''; g.desc.value=''; });
                        window.dispatchEvent(new StorageEvent('storage', {key:'featuresSettings', newValue: null}));
                    });
                    getInputs().forEach(g=>{ ['input','change'].forEach(evt=>{
                        g.icon.addEventListener(evt, save); g.title.addEventListener(evt, save); g.desc.addEventListener(evt, save);
                    }); });
                    load();
                })();
            </script>
        </div>
    </div>

    <div id="home-hero" style="margin-top:1rem;">
        <div class="table-card">
            <h2>হির সেকশন</h2>
            <style>
                #home-hero .table-card input[type="text"],
                #home-hero .table-card input[type="url"],
                #home-hero .table-card select {
                    height: 48px;
                    padding: 10px 12px;
                    font-size: 16px;
                    border-radius: 10px;
                }
                #home-hero .table-card textarea {
                    min-height: 120px;
                    padding: 12px;
                    font-size: 16px;
                    border-radius: 10px;
                }
            </style>
            <div class="form-grid" style="display:grid; grid-template-columns:1fr; gap:16px; align-items:start;">
                <div>
                    <div class="form-group">
                        <label>শিরোনাম</label>
                        <input type="text" id="heroTitleInput" placeholder="হিরো শিরোনাম">
                    </div>
                    <div class="form-group">
                        <label>সাব-শিরোনাম</label>
                        <input type="text" id="heroSubtitleInput" placeholder="সাব-শিরোনাম">
                    </div>
                    <div class="form-row" style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
                        <div class="form-group">
                            <label>প্রাইমারি বাটন টেক্সট</label>
                            <input type="text" id="heroPrimaryTextInput" placeholder="মূল্য দেখুন">
                        </div>
                        <div class="form-group">
                            <label>প্রাইমারি বাটন লিংক</label>
                            <input type="text" id="heroPrimaryLinkInput" placeholder="#pricing">
                        </div>
                        <div class="form-group">
                            <label>সেকেন্ডারি বাটন টেক্সট</label>
                            <input type="text" id="heroSecondaryTextInput" placeholder="যোগাযোগ করুন">
                        </div>
                        <div class="form-group">
                            <label>সেকেন্ডারি বাটন লিংক</label>
                            <input type="text" id="heroSecondaryLinkInput" placeholder="#contact">
                        </div>
                    </div>
                </div>
                <div>
                    <label style="display:block; margin-bottom:6px;">স্লাইড ইমেজ (৩টি)</label>
                    <div class="slides-upload" style="display:grid; grid-template-columns:repeat(3,1fr); gap:12px;">
                        <div>
                            <div style="border:1px dashed #cbd5e1; border-radius:10px; overflow:hidden; aspect-ratio:16/9; background:#f8fafc; display:flex; align-items:center; justify-content:center;">
                                <img id="heroSlidePrev1" alt="Slide 1" style="max-width:100%; max-height:100%; display:none;" />
                                <span id="heroSlidePh1" style="color:#94a3b8;">Slide 1</span>
                            </div>
                            <input type="file" id="heroSlideInput1" accept="image/*" style="margin-top:6px;">
                        </div>
                        <div>
                            <div style="border:1px dashed #cbd5e1; border-radius:10px; overflow:hidden; aspect-ratio:16/9; background:#f8fafc; display:flex; align-items:center; justify-content:center;">
                                <img id="heroSlidePrev2" alt="Slide 2" style="max-width:100%; max-height:100%; display:none;" />
                                <span id="heroSlidePh2" style="color:#94a3b8;">Slide 2</span>
                            </div>
                            <input type="file" id="heroSlideInput2" accept="image/*" style="margin-top:6px;">
                        </div>
                        <div>
                            <div style="border:1px dashed #cbd5e1; border-radius:10px; overflow:hidden; aspect-ratio:16/9; background:#f8fafc; display:flex; align-items:center; justify-content:center;">
                                <img id="heroSlidePrev3" alt="Slide 3" style="max-width:100%; max-height:100%; display:none;" />
                                <span id="heroSlidePh3" style="color:#94a3b8;">Slide 3</span>
                            </div>
                            <input type="file" id="heroSlideInput3" accept="image/*" style="margin-top:6px;">
                        </div>
                    </div>
                </div>
                <div style="margin-top:14px; display:flex; gap:10px;">
                    <button id="saveHeroBtn" class="btn btn-primary" type="button">সেভ</button>
                    <button id="resetHeroBtn" class="btn btn-secondary" type="button">রিসেট</button>
                </div>
            </div>
            <script>
                (function(){
                    const qs = id => document.getElementById(id);
                    const inputs = {
                        title: qs('heroTitleInput'),
                        subtitle: qs('heroSubtitleInput'),
                        pText: qs('heroPrimaryTextInput'),
                        pLink: qs('heroPrimaryLinkInput'),
                        sText: qs('heroSecondaryTextInput'),
                        sLink: qs('heroSecondaryLinkInput')
                    };
                    const fileInputs = [qs('heroSlideInput1'), qs('heroSlideInput2'), qs('heroSlideInput3')];
                    const prevImgs = [qs('heroSlidePrev1'), qs('heroSlidePrev2'), qs('heroSlidePrev3')];
                    const phs = [qs('heroSlidePh1'), qs('heroSlidePh2'), qs('heroSlidePh3')];

                    function load(){
                        try{
                            const saved = JSON.parse(localStorage.getItem('heroSettings')||'{}');
                            if(saved.title) inputs.title.value = saved.title; else inputs.title.value='';
                            if(saved.subtitle) inputs.subtitle.value = saved.subtitle; else inputs.subtitle.value='';
                            if(saved.primaryText) inputs.pText.value = saved.primaryText; else inputs.pText.value='';
                            if(saved.primaryLink) inputs.pLink.value = saved.primaryLink; else inputs.pLink.value='';
                            if(saved.secondaryText) inputs.sText.value = saved.secondaryText; else inputs.sText.value='';
                            if(saved.secondaryLink) inputs.sLink.value = saved.secondaryLink; else inputs.sLink.value='';
                            const slides = Array.isArray(saved.slides)? saved.slides: [];
                            slides.forEach((src, i)=>{
                                if(src){ prevImgs[i].src = src; prevImgs[i].style.display='block'; phs[i].style.display='none'; }
                            });
                        }catch(e){ /* ignore */ }
                    }

                    function save(partial){
                        const saved = JSON.parse(localStorage.getItem('heroSettings')||'{}');
                        const next = Object.assign({}, saved, partial||{}, {
                            title: inputs.title.value,
                            subtitle: inputs.subtitle.value,
                            primaryText: inputs.pText.value,
                            primaryLink: inputs.pLink.value,
                            secondaryText: inputs.sText.value,
                            secondaryLink: inputs.sLink.value
                        });
                        localStorage.setItem('heroSettings', JSON.stringify(next));
                        window.dispatchEvent(new StorageEvent('storage', {key:'heroSettings', newValue: JSON.stringify(next)}));
                    }

                    function wireFile(i){
                        const input = fileInputs[i];
                        input?.addEventListener('change', (e)=>{
                            const f = e.target.files && e.target.files[0];
                            if(!f) return;
                            const url = URL.createObjectURL(f);
                            prevImgs[i].src = url; prevImgs[i].style.display='block'; phs[i].style.display='none';
                            const reader = new FileReader();
                            reader.onload = ()=>{
                                const saved = JSON.parse(localStorage.getItem('heroSettings')||'{}');
                                const slides = Array.isArray(saved.slides)? saved.slides: [];
                                slides[i] = reader.result;
                                save({slides});
                                URL.revokeObjectURL(url);
                            };
                            reader.readAsDataURL(f);
                        });
                    }

                    document.getElementById('saveHeroBtn').addEventListener('click', ()=> save());
                    document.getElementById('resetHeroBtn').addEventListener('click', ()=>{
                        localStorage.removeItem('heroSettings');
                        [inputs.title, inputs.subtitle, inputs.pText, inputs.pLink, inputs.sText, inputs.sLink].forEach(i=> i.value='');
                        prevImgs.forEach((img, i)=>{ img.src=''; img.style.display='none'; phs[i].style.display='block'; });
                        window.dispatchEvent(new StorageEvent('storage', {key:'heroSettings', newValue: null}));
                    });

                    [inputs.title, inputs.subtitle, inputs.pText, inputs.pLink, inputs.sText, inputs.sLink].forEach(inp=>{
                        inp.addEventListener('input', ()=> save());
                    });
                    for(let i=0;i<3;i++) wireFile(i);
                    load();
                })();
            </script>
        </div>
    </div>

    <div id="home-pricing" style="margin-top:1rem;">
        <div class="table-card">
            <h2>মূল্য তালিকা</h2>
            <style>
                #home-pricing .pricing-form input[type="text"] { height: 46px; padding:10px 12px; font-size:15px; border-radius:10px; }
                #home-pricing .pricing-grid-editor { display:grid; grid-template-columns:repeat(2,1fr); gap:12px; }
                #home-pricing .pricing-card-editor { border:1px solid #e5e7eb; border-radius:12px; padding:12px; background:#fafafa }
                #home-pricing .pricing-card-editor h4 { margin:0 0 8px; font-size:14px; font-weight:600; }
                @media (max-width: 960px){ #home-pricing .pricing-grid-editor{ grid-template-columns:1fr } }
            </style>
            <div class="pricing-form">
                <div class="pricing-grid-editor">
                    <!-- Pricing Plan 1 -->
                    <div class="pricing-card-editor">
                        <h4>প্ল্যান ১</h4>
                        <input type="text" id="priceTitle1" placeholder="শিরোনাম (যেমন: ২০ কুড়া মালা)" />
                        <input type="text" id="priceAmount1" placeholder="মূল্য (যেমন: ৮০,০০,০০০ টাকা)" style="margin-top:8px;" />
                        <input type="text" id="priceDown1" placeholder="ডাউন পেমেন্ট" style="margin-top:8px;" />
                        <input type="text" id="priceInst1_1" placeholder="কিস্তি ১" style="margin-top:8px;" />
                        <input type="text" id="priceInst1_2" placeholder="কিস্তি ২" style="margin-top:8px;" />
                        <input type="text" id="priceInst1_3" placeholder="কিস্তি ৩" style="margin-top:8px;" />
                        <input type="text" id="priceInst1_4" placeholder="কিস্তি ৪" style="margin-top:8px;" />
                        <input type="text" id="priceBtn1" placeholder="বাটন টেক্সট" style="margin-top:8px;" />
                        <input type="text" id="priceLink1" placeholder="বাটন লিংক" style="margin-top:8px;" />
                    </div>
                    <!-- Pricing Plan 2 -->
                    <div class="pricing-card-editor">
                        <h4>প্ল্যান ২</h4>
                        <input type="text" id="priceTitle2" placeholder="শিরোনাম" />
                        <input type="text" id="priceAmount2" placeholder="মূল্য" style="margin-top:8px;" />
                        <input type="text" id="priceDown2" placeholder="ডাউন পেমেন্ট" style="margin-top:8px;" />
                        <input type="text" id="priceInst2_1" placeholder="কিস্তি ১" style="margin-top:8px;" />
                        <input type="text" id="priceInst2_2" placeholder="কিস্তি ২" style="margin-top:8px;" />
                        <input type="text" id="priceInst2_3" placeholder="কিস্তি ৩" style="margin-top:8px;" />
                        <input type="text" id="priceInst2_4" placeholder="কিস্তি ৪" style="margin-top:8px;" />
                        <input type="text" id="priceBtn2" placeholder="বাটন টেক্সট" style="margin-top:8px;" />
                        <input type="text" id="priceLink2" placeholder="বাটন লিংক" style="margin-top:8px;" />
                    </div>
                    <!-- Pricing Plan 3 -->
                    <div class="pricing-card-editor">
                        <h4>প্ল্যান ৩</h4>
                        <input type="text" id="priceTitle3" placeholder="শিরোনাম" />
                        <input type="text" id="priceAmount3" placeholder="মূল্য" style="margin-top:8px;" />
                        <input type="text" id="priceDown3" placeholder="ডাউন পেমেন্ট" style="margin-top:8px;" />
                        <input type="text" id="priceInst3_1" placeholder="কিস্তি ১" style="margin-top:8px;" />
                        <input type="text" id="priceInst3_2" placeholder="কিস্তি ২" style="margin-top:8px;" />
                        <input type="text" id="priceInst3_3" placeholder="কিস্তি ৩" style="margin-top:8px;" />
                        <input type="text" id="priceInst3_4" placeholder="কিস্তি ৪" style="margin-top:8px;" />
                        <input type="text" id="priceBtn3" placeholder="বাটন টেক্সট" style="margin-top:8px;" />
                        <input type="text" id="priceLink3" placeholder="বাটন লিংক" style="margin-top:8px;" />
                    </div>
                    <!-- Pricing Plan 4 -->
                    <div class="pricing-card-editor">
                        <h4>প্ল্যান ৪</h4>
                        <input type="text" id="priceTitle4" placeholder="শিরোনাম" />
                        <input type="text" id="priceAmount4" placeholder="মূল্য" style="margin-top:8px;" />
                        <input type="text" id="priceDown4" placeholder="ডাউন পেমেন্ট" style="margin-top:8px;" />
                        <input type="text" id="priceInst4_1" placeholder="কিস্তি ১" style="margin-top:8px;" />
                        <input type="text" id="priceInst4_2" placeholder="কিস্তি ২" style="margin-top:8px;" />
                        <input type="text" id="priceInst4_3" placeholder="কিস্তি ৩" style="margin-top:8px;" />
                        <input type="text" id="priceInst4_4" placeholder="কিস্তি ৪" style="margin-top:8px;" />
                        <input type="text" id="priceBtn4" placeholder="বাটন টেক্সট" style="margin-top:8px;" />
                        <input type="text" id="priceLink4" placeholder="বাটন লিংক" style="margin-top:8px;" />
                    </div>
                    <!-- Pricing Plan 5 -->
                    <div class="pricing-card-editor">
                        <h4>প্ল্যান ৫</h4>
                        <input type="text" id="priceTitle5" placeholder="শিরোনাম" />
                        <input type="text" id="priceAmount5" placeholder="মূল্য" style="margin-top:8px;" />
                        <input type="text" id="priceDown5" placeholder="ডাউন পেমেন্ট" style="margin-top:8px;" />
                        <input type="text" id="priceInst5_1" placeholder="কিস্তি ১" style="margin-top:8px;" />
                        <input type="text" id="priceInst5_2" placeholder="কিস্তি ২" style="margin-top:8px;" />
                        <input type="text" id="priceInst5_3" placeholder="কিস্তি ৩" style="margin-top:8px;" />
                        <input type="text" id="priceInst5_4" placeholder="কিস্তি ৪" style="margin-top:8px;" />
                        <input type="text" id="priceBtn5" placeholder="বাটন টেক্সট" style="margin-top:8px;" />
                        <input type="text" id="priceLink5" placeholder="বাটন লিংক" style="margin-top:8px;" />
                    </div>
                </div>
                <div style="margin-top:14px; display:flex; gap:10px;">
                    <button id="savePricingBtn" class="btn btn-primary" type="button">সেভ</button>
                    <button id="resetPricingBtn" class="btn btn-secondary" type="button">রিসেট</button>
                </div>
            </div>
            <script>
                (function(){
                    const ids = ['1','2','3','4','5'];
                    const getInputs = () => ids.map(i=>({
                        title: document.getElementById('priceTitle'+i),
                        amount: document.getElementById('priceAmount'+i),
                        downPayment: document.getElementById('priceDown'+i),
                        installment1: document.getElementById('priceInst'+i+'_1'),
                        installment2: document.getElementById('priceInst'+i+'_2'),
                        installment3: document.getElementById('priceInst'+i+'_3'),
                        installment4: document.getElementById('priceInst'+i+'_4'),
                        buttonText: document.getElementById('priceBtn'+i),
                        buttonLink: document.getElementById('priceLink'+i)
                    }));
                    
                    function load(){
                        try{
                            const saved = JSON.parse(localStorage.getItem('pricingSettings')||'{}');
                            const items = Array.isArray(saved.items)? saved.items: [];
                            const inputs = getInputs();
                            inputs.forEach((g, idx)=>{
                                const it = items[idx] || {};
                                g.title.value = it.title || '';
                                g.amount.value = it.amount || '';
                                g.downPayment.value = it.downPayment || '';
                                g.installment1.value = it.installment1 || '';
                                g.installment2.value = it.installment2 || '';
                                g.installment3.value = it.installment3 || '';
                                g.installment4.value = it.installment4 || '';
                                g.buttonText.value = it.buttonText || '';
                                g.buttonLink.value = it.buttonLink || '';
                            });
                        }catch(e){}
                    }
                    
                    function save(){
                        const inputs = getInputs();
                        const items = inputs.map(g=>({
                            title: g.title.value,
                            amount: g.amount.value,
                            downPayment: g.downPayment.value,
                            installment1: g.installment1.value,
                            installment2: g.installment2.value,
                            installment3: g.installment3.value,
                            installment4: g.installment4.value,
                            buttonText: g.buttonText.value,
                            buttonLink: g.buttonLink.value
                        }));
                        const payload = { items };
                        localStorage.setItem('pricingSettings', JSON.stringify(payload));
                        console.log('Pricing saved:', payload);
                        window.dispatchEvent(new StorageEvent('storage', {key:'pricingSettings', newValue: JSON.stringify(payload)}));
                    }
                    
                    document.getElementById('savePricingBtn').addEventListener('click', ()=> {
                        save();
                        // Show success message
                        if(typeof alertUser === 'function') {
                            alertUser('সফল', 'মূল্য তালিকা সংরক্ষণ করা হয়েছে।');
                        } else {
                            alert('মূল্য তালিকা সংরক্ষণ করা হয়েছে।');
                        }
                    });
                    document.getElementById('resetPricingBtn').addEventListener('click', ()=>{
                        localStorage.removeItem('pricingSettings');
                        getInputs().forEach(g=>{ 
                            g.title.value=''; g.amount.value=''; g.downPayment.value='';
                            g.installment1.value=''; g.installment2.value=''; g.installment3.value=''; g.installment4.value='';
                            g.buttonText.value=''; g.buttonLink.value='';
                        });
                        window.dispatchEvent(new StorageEvent('storage', {key:'pricingSettings', newValue: null}));
                        if(typeof alertUser === 'function') {
                            alertUser('সফল', 'মূল্য তালিকা রিসেট করা হয়েছে।');
                        } else {
                            alert('মূল্য তালিকা রিসেট করা হয়েছে।');
                        }
                    });
                    
                    // Auto-save on input
                    getInputs().forEach(g=>{ 
                        ['input','change'].forEach(evt=>{
                            g.title.addEventListener(evt, save);
                            g.amount.addEventListener(evt, save);
                            g.downPayment.addEventListener(evt, save);
                            g.installment1.addEventListener(evt, save);
                            g.installment2.addEventListener(evt, save);
                            g.installment3.addEventListener(evt, save);
                            g.installment4.addEventListener(evt, save);
                            g.buttonText.addEventListener(evt, save);
                            g.buttonLink.addEventListener(evt, save);
                        });
                    });
                    
                    load();
                })();
            </script>
        </div>
    </div>

    <div id="home-testimonials" style="margin-top:1rem;">
        <div class="table-card">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem;">
                <h2 style="margin:0;">বিনিয়োগকারী মন্তব্য</h2>
                <button id="addTestimonialBtn" class="btn btn-primary" type="button" style="display:flex; align-items:center; gap:8px;">
                    <span>+</span>
                    <span>মন্তব্য যোগ করুন</span>
                </button>
            </div>
            <style>
                #home-testimonials .testimonials-form input[type="text"],
                #home-testimonials .testimonials-form textarea { 
                    height: 46px; 
                    padding:10px 12px; 
                    font-size:15px; 
                    border-radius:10px; 
                    width: 100%;
                    border: 1px solid #e5e7eb;
                    box-sizing: border-box;
                }
                #home-testimonials .testimonials-form textarea { 
                    height: auto; 
                    min-height: 80px; 
                    resize: vertical;
                }
                #home-testimonials .testimonials-grid-editor { 
                    display:grid; 
                    grid-template-columns:repeat(2,1fr); 
                    gap:12px; 
                }
                #home-testimonials .card-editor { 
                    border:1px solid #e5e7eb; 
                    border-radius:12px; 
                    padding:12px; 
                    background:#fafafa;
                    position: relative;
                }
                #home-testimonials .card-editor h4 { 
                    margin:0 0 8px; 
                    font-size:14px;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }
                #home-testimonials .card-editor .delete-btn {
                    background: #ef4444;
                    color: white;
                    border: none;
                    padding: 10px 16px;
                    border-radius: 6px;
                    cursor: pointer;
                    font-size: 14px;
                    font-weight: 500;
                    transition: background 0.2s;
                }
                #home-testimonials .card-editor .delete-btn:hover {
                    background: #dc2626;
                }
                @media (max-width: 960px){ 
                    #home-testimonials .testimonials-grid-editor{ grid-template-columns:1fr } 
                }
            </style>
            <div class="testimonials-form">
                <div id="testimonialsContainer" class="testimonials-grid-editor">
                    <!-- Testimonials will be loaded here dynamically -->
                    </div>
                    </div>
            <script>
                (function(){
                    // Define notification function FIRST so it's always available
                    window.showGreenNotification = function(title, message) {
                        try {
                            // Remove existing notification if any
                            const existing = document.getElementById('testimonial-success-notification');
                            if (existing) {
                                existing.remove();
                            }

                            // Create notification element - positioned at top center of website
                            const notification = document.createElement('div');
                            notification.id = 'testimonial-success-notification';
                            notification.style.cssText = `
                                position: fixed;
                                top: 20px;
                                left: 50%;
                                transform: translateX(-50%);
                                background: #10b981;
                                color: white;
                                padding: 16px 24px;
                                border-radius: 8px;
                                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
                                z-index: 10000;
                                display: flex;
                                align-items: center;
                                gap: 12px;
                                min-width: 300px;
                                max-width: 500px;
                                text-align: center;
                            `;
                            notification.innerHTML = `
                                <div style="font-size: 24px; flex-shrink: 0;">✓</div>
                                <div style="flex: 1;">
                                    <div style="font-weight: 600; margin-bottom: 4px; font-size: 16px;">${title}</div>
                                    <div style="font-size: 14px; opacity: 0.95; line-height: 1.4;">${message}</div>
                    </div>
                            `;

                            // Add animation style if not exists
                            if (!document.getElementById('testimonial-notification-style')) {
                                const style = document.createElement('style');
                                style.id = 'testimonial-notification-style';
                                style.textContent = `
                                    @keyframes slideDown {
                                        from {
                                            transform: translateX(-50%) translateY(-100%);
                                            opacity: 0;
                                        }
                                        to {
                                            transform: translateX(-50%) translateY(0);
                                            opacity: 1;
                                        }
                                    }
                                    #testimonial-success-notification {
                                        animation: slideDown 0.3s ease;
                                    }
                                `;
                                document.head.appendChild(style);
                            }

                            document.body.appendChild(notification);

                            // Auto remove after 5 seconds
                            setTimeout(() => {
                                if (notification.parentNode) {
                                    notification.style.transition = 'transform 0.3s ease, opacity 0.3s ease';
                                    notification.style.transform = 'translateX(-50%) translateY(-100%)';
                                    notification.style.opacity = '0';
                                    setTimeout(() => {
                                        if (notification.parentNode) {
                                            notification.remove();
                                        }
                                    }, 300);
                                }
                            }, 5000);
                        } catch (error) {
                            console.error('Error showing notification:', error);
                            // Fallback to alert
                            alert(title + ': ' + message);
                        }
                    };

                    const container = document.getElementById('testimonialsContainer');
                    let testimonials = [];
                    let testimonialCounter = 0;

                    function createTestimonialCard(testimonial = null, index = null) {
                        const id = testimonial ? testimonial.id : 'new_' + (++testimonialCounter);
                        const isNew = !testimonial;
                        const displayIndex = index !== null ? index + 1 : (testimonials.length + 1);
                        const card = document.createElement('div');
                        card.className = 'card-editor';
                        card.dataset.testimonialId = id;
                        const escapedAvatar = (testimonial?.avatar || '').replace(/"/g, '&quot;');
                        const escapedName = (testimonial?.name || '').replace(/"/g, '&quot;');
                        const escapedTitle = (testimonial?.title || '').replace(/"/g, '&quot;');
                        const escapedQuote = (testimonial?.quote || '').replace(/"/g, '&quot;').replace(/\n/g, '&#10;');
                        const imageUrl = testimonial?.image_url || '';
                        card.innerHTML = `
                            <h4>
                                <span>মন্তব্য ${displayIndex}</span>
                            </h4>
                            <div style="margin-bottom:8px;">
                                <label style="display:block; margin-bottom:4px; font-size:13px; font-weight:500;">ছবি আপলোড করুন</label>
                                <input type="file" class="test-image" accept="image/*" style="width:100%; padding:6px; border:1px solid #e5e7eb; border-radius:6px;" onchange="previewTestimonialImage(this, '${id}')" />
                                <div class="image-preview-${id}" style="margin-top:8px;">
                                    ${imageUrl ? `<img src="${imageUrl}" alt="Preview" style="max-width:100%; max-height:120px; border-radius:8px; border:1px solid #e5e7eb;" />` : ''}
                    </div>
                </div>
                            <input type="text" class="test-avatar" placeholder="অবতার (যেমন: FA)" value="${escapedAvatar}" />
                            <input type="text" class="test-name" placeholder="নাম" style="margin-top:8px;" value="${escapedName}" />
                            <input type="text" class="test-title" placeholder="পদবি / অবস্থান" style="margin-top:8px;" value="${escapedTitle}" />
                            <textarea class="test-quote" placeholder="উক্তি" style="margin-top:8px;">${escapedQuote}</textarea>
                            <div style="margin-top:8px; display:flex; gap:8px; align-items:center;">
                                <button type="button" class="btn btn-primary" onclick="saveTestimonial('${id}')" style="padding:8px 16px; font-size:13px;">${isNew ? 'যোগ করুন' : 'আপডেট'}</button>
                                <span class="save-status-${id}" style="font-size:12px; color:#666; margin-left:8px;"></span>
                </div>
                            ${!isNew ? '<div style="margin-top:8px;"><button type="button" class="delete-btn" onclick="deleteTestimonial(\''+id+'\')" style="width:100%;">মুছুন</button></div>' : ''}
                        `;
                        return card;
                    }

                    window.saveTestimonial = async function(id) {
                        console.log('saveTestimonial called with id:', id);
                        const card = document.querySelector(`[data-testimonial-id="${id}"]`);
                        if (!card) {
                            console.error('Card not found for id:', id);
                            return;
                        }

                        // Get the save button and prevent double-clicking
                        const saveBtn = card.querySelector('.btn.btn-primary');
                        if (saveBtn && saveBtn.disabled) {
                            console.log('Save already in progress, ignoring duplicate click');
                            return;
                        }

                        const name = card.querySelector('.test-name').value.trim();
                        const title = card.querySelector('.test-title').value.trim();
                        const quote = card.querySelector('.test-quote').value.trim();
                        const avatar = card.querySelector('.test-avatar').value.trim();
                        const imageFile = card.querySelector('.test-image').files[0];
                        const statusEl = card.querySelector(`.save-status-${id}`);

                        console.log('Form data:', { name, title, quote, avatar, hasImage: !!imageFile });

                        if (!name || !title || !quote) {
                            console.error('Validation failed - missing required fields');
                            if(typeof alertUser==='function'){ alertUser('ত্রুটি','অনুগ্রহ করে সব ফিল্ড পূরণ করুন।'); }
                            if(statusEl) statusEl.textContent = '';
                            return;
                        }

                        // Disable button and show saving status
                        if (saveBtn) {
                            saveBtn.disabled = true;
                            saveBtn.style.opacity = '0.6';
                            saveBtn.style.cursor = 'not-allowed';
                        }
                        if(statusEl) {
                            statusEl.textContent = 'সংরক্ষণ করা হচ্ছে...';
                            statusEl.style.color = '#666';
                        }

                        try {
                            const isNew = id.toString().startsWith('new_');
                            const url = isNew ? '/admin/testimonials' : `/admin/testimonials/${id}`;
                            const method = 'POST'; // Always use POST, Laravel will handle PUT via _method

                            const formData = new FormData();
                            formData.append('name', name);
                            formData.append('title', title);
                            formData.append('quote', quote);
                            formData.append('avatar', avatar);
                            if (imageFile) {
                                formData.append('image', imageFile);
                            }
                            
                            // For updates, add _method field for Laravel
                            if (!isNew) {
                                formData.append('_method', 'PUT');
                            }

                            console.log('Sending request to:', url, 'Method:', method);
                            
                            const response = await fetch(url, {
                                method: method,
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
                                },
                                body: formData
                            });

                            console.log('Response status:', response.status, response.statusText);

                            if (!response.ok) {
                                const errorText = await response.text();
                                console.error('Server error response:', errorText);
                                throw new Error('Network response was not ok: ' + response.status);
                            }

                            const result = await response.json();
                            console.log('Save result:', result);
                            
                            if (result.success) {
                                // ALWAYS show notification immediately - no checks, just show it
                                console.log('Save successful, showing notification...');
                                
                                // Remove any existing notification first
                                const existing = document.getElementById('testimonial-success-notification');
                                if (existing) {
                                    existing.remove();
                                }
                                
                                // Create and show notification directly
                                const notification = document.createElement('div');
                                notification.id = 'testimonial-success-notification';
                                notification.style.cssText = `
                                    position: fixed !important;
                                    top: 20px !important;
                                    left: 50% !important;
                                    transform: translateX(-50%) !important;
                                    background: #10b981 !important;
                                    color: white !important;
                                    padding: 16px 24px !important;
                                    border-radius: 8px !important;
                                    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important;
                                    z-index: 99999 !important;
                                    display: flex !important;
                                    align-items: center !important;
                                    gap: 12px !important;
                                    min-width: 300px !important;
                                    max-width: 500px !important;
                                    font-family: Arial, sans-serif !important;
                                `;
                                notification.innerHTML = `
                                    <div style="font-size: 24px; flex-shrink: 0;">✓</div>
                                    <div style="flex: 1;">
                                        <div style="font-weight: 600; margin-bottom: 4px; font-size: 16px;">সফল!</div>
                                        <div style="font-size: 14px; opacity: 0.95; line-height: 1.4;">আপনার মন্তব্য সফলভাবে যোগ করা হয়েছে এবং হোম পেজে দেখানো হবে।</div>
            </div>
                                `;
                                
                                // Add to body immediately
                                document.body.appendChild(notification);
                                
                                // Force visibility
                                notification.style.display = 'flex';
                                notification.style.visibility = 'visible';
                                notification.style.opacity = '1';
                                
                                // Auto remove after 5 seconds
                                setTimeout(() => {
                                    if (notification.parentNode) {
                                        notification.style.transition = 'opacity 0.3s ease';
                                        notification.style.opacity = '0';
                                        setTimeout(() => {
                                            if (notification.parentNode) {
                                                notification.remove();
                                            }
                                        }, 300);
                                    }
                                }, 5000);
                                
                                // Update status beside button
                                if(statusEl) {
                                    statusEl.textContent = '✓ সংরক্ষিত';
                                    statusEl.style.color = '#10b981';
                                    setTimeout(() => {
                                        statusEl.textContent = '';
                                    }, 3000);
                                }
                                
                                // Reload testimonials list in admin - this will replace the new card with saved one
                                // The saved testimonial will appear as a card with delete button at bottom
                                // Card will remain visible with all saved data
                                setTimeout(() => {
                                    loadTestimonials();
                                    // Trigger frontend refresh
                                    try {
                                        localStorage.setItem('refreshTestimonials', Date.now());
                                    } catch(e) { console.error('LocalStorage error:', e); }
                                }, 500);
                            } else {
                                console.error('Save failed:', result);
                                // Re-enable button on failure
                                if (saveBtn) {
                                    saveBtn.disabled = false;
                                    saveBtn.style.opacity = '1';
                                    saveBtn.style.cursor = 'pointer';
                                }
                                if(statusEl) {
                                    statusEl.textContent = '✗ ত্রুটি';
                                    statusEl.style.color = '#ef4444';
                                }
                                if(typeof alertUser==='function'){ alertUser('ত্রুটি','কিছু ভুল হয়েছে।'); }
                            }
                        } catch (error) {
                            console.error('Error:', error);
                            // Re-enable button on error
                            if (saveBtn) {
                                saveBtn.disabled = false;
                                saveBtn.style.opacity = '1';
                                saveBtn.style.cursor = 'pointer';
                            }
                            if(statusEl) {
                                statusEl.textContent = '✗ ত্রুটি';
                                statusEl.style.color = '#ef4444';
                            }
                            if(typeof alertUser==='function'){ alertUser('ত্রুটি','নেটওয়ার্ক ত্রুটি। অনুগ্রহ করে আবার চেষ্টা করুন।'); }
                        }
                    };

                    window.deleteTestimonial = async function(id) {
                        if (!confirm('আপনি কি এই মন্তব্য মুছে ফেলতে চান?')) return;

                        try {
                            const response = await fetch(`/admin/testimonials/${id}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
                                }
                            });

                            const result = await response.json();
                            
                            if (result.success) {
                                if(typeof alertUser==='function'){ alertUser('সফল', result.message); }
                                loadTestimonials();
                            } else {
                                if(typeof alertUser==='function'){ alertUser('ত্রুটি','কিছু ভুল হয়েছে।'); }
                            }
                        } catch (error) {
                            console.error('Error:', error);
                            if(typeof alertUser==='function'){ alertUser('ত্রুটি','নেটওয়ার্ক ত্রুটি।'); }
                        }
                    };

                    async function loadTestimonials() {
                        try {
                            const response = await fetch('/api/testimonials');
                            if (!response.ok) {
                                throw new Error('Failed to load testimonials');
                            }
                            testimonials = await response.json();
                            
                            // Clear container and rebuild with all testimonials from database
                            container.innerHTML = '';
                            
                            if (testimonials.length === 0) {
                                // Show message if no testimonials
                                container.innerHTML = '<div style="grid-column: 1 / -1; text-align: center; padding: 2rem; color: #666;">কোন মন্তব্য নেই। "মন্তব্য যোগ করুন" বাটনে ক্লিক করে নতুন মন্তব্য যোগ করুন।</div>';
                            } else {
                                // Render all testimonials - they will appear as cards with delete buttons
                                testimonials.forEach((testimonial, index) => {
                                    const card = createTestimonialCard(testimonial, index);
                                    container.appendChild(card);
                                });
                            }
                        } catch (error) {
                            console.error('Error loading testimonials:', error);
                            if (container) {
                                container.innerHTML = '<div style="grid-column: 1 / -1; text-align: center; padding: 2rem; color: #ef4444;">মন্তব্য লোড করতে সমস্যা হয়েছে।</div>';
                            }
                        }
                    }

                    window.previewTestimonialImage = function(input, id) {
                        const previewDiv = document.querySelector(`.image-preview-${id}`);
                        if (input.files && input.files[0]) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                previewDiv.innerHTML = `<img src="${e.target.result}" alt="Preview" style="max-width:100%; max-height:120px; border-radius:8px; border:1px solid #e5e7eb;" />`;
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    };


                    document.getElementById('addTestimonialBtn').addEventListener('click', () => {
                        const card = createTestimonialCard();
                        container.appendChild(card);
                        card.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                    });

                    loadTestimonials();
                })();
            </script>
        </div>
    </div>

    <div id="home-social-carousel" style="margin-top:1rem;">
        <div class="table-card">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem;">
                <h2 style="margin:0;">সোশ্যাল মিডিয়া (Carousel)</h2>
                <button id="addSocialItemBtn" class="btn btn-primary" type="button" style="display:flex; align-items:center; gap:8px;">
                    <span>+</span>
                    <span>আইটেম যোগ করুন</span>
                </button>
            </div>
            <input type="hidden" id="csrfToken" value="{{ csrf_token() }}">
            <style>
                #home-social-carousel .social-grid-editor { 
                    display:grid; grid-template-columns:repeat(2,1fr); gap:12px; 
                }
                #home-social-carousel .card-editor { 
                    border:1px solid #e5e7eb; border-radius:12px; padding:12px; background:#fafafa; position:relative;
                }
                #home-social-carousel .card-editor h4 { 
                    margin:0 0 8px; font-size:14px; display:flex; justify-content:space-between; align-items:center;
                }
                #home-social-carousel .card-editor input[type="text"],
                #home-social-carousel .card-editor input[type="url"],
                #home-social-carousel .card-editor select,
                #home-social-carousel .card-editor textarea {
                    height:46px; padding:10px 12px; font-size:15px; border-radius:10px; width:100%; box-sizing:border-box; border:1px solid #e5e7eb;
                }
                #home-social-carousel .card-editor textarea { height:auto; min-height:80px; resize:vertical; }
                #home-social-carousel .card-editor .delete-btn { background:#ef4444; color:#fff; border:none; padding:10px 16px; border-radius:6px; cursor:pointer; font-size:14px; font-weight:500; }
                @media (max-width: 960px){ #home-social-carousel .social-grid-editor{ grid-template-columns:1fr } }
            </style>
            
            <div class="social-form">
                <div id="socialItemsContainer" class="social-grid-editor"></div>
            </div>
            <script>
                (function(){
                    const container = document.getElementById('socialItemsContainer');
                    const STORAGE_KEY = 'socialMediaAdminCards';
                    let items = [];
                    let newCounter = 0;

                    function saveCardsToStorage(){
                        const cards = Array.from(container.querySelectorAll('.card-editor'));
                        const cardsData = cards.map(card=>{
                            const id = card.dataset.socialId;
                            const title = card.querySelector('.sm-title')?.value?.trim() || '';
                            const content = card.querySelector('.sm-subtitle')?.value?.trim() || '';
                            const link = card.querySelector('.sm-link')?.value?.trim() || '';
                            const img = card.querySelector(`[class^="image-preview-"] img`)?.getAttribute('src') || '';
                            return { id, title, content, link, image_url: img };
                        });
                        try{
                            localStorage.setItem(STORAGE_KEY, JSON.stringify(cardsData));
                        }catch(e){ console.error('Failed to save cards:', e); }
                    }

                    function loadCardsFromStorage(){
                        try{
                            const saved = localStorage.getItem(STORAGE_KEY);
                            if(saved){
                                const cardsData = JSON.parse(saved);
                                cardsData.forEach(cardData => {
                                    const card = createCard({ 
                                        id: cardData.id, 
                                        title: cardData.title, 
                                        content: cardData.content, 
                                        link: cardData.link,
                                        image_url: cardData.image_url
                                    });
                                    container.appendChild(card);
                                });
                            }
                        }catch(e){ console.error('Failed to load cards:', e); }
                    }

                    function collectPreviewItems(){
                        const cards = Array.from(container.querySelectorAll('.card-editor'));
                        return cards.map(card=>{
                            const title = card.querySelector('.sm-title')?.value?.trim() || '';
                            const content = card.querySelector('.sm-subtitle')?.value?.trim() || '';
                            const link = card.querySelector('.sm-link')?.value?.trim() || '';
                            const img = card.querySelector(`[class^="image-preview-"] img`)?.getAttribute('src') || '';
                            return { title, content, link, image_url: img };
                        });
                    }

                    function broadcastPreview(){
                        const payload = { ts: Date.now(), items: collectPreviewItems() };
                        try{ localStorage.setItem('liveSocialMediaPreview', JSON.stringify(payload)); }catch(_){ }
                        try{ window.dispatchEvent(new StorageEvent('storage', { key:'liveSocialMediaPreview', newValue: JSON.stringify(payload) })); }catch(_){ }
                        saveCardsToStorage();
                    }

                    function attachLiveHandlers(scope){
                        const root = scope || container;
                        root.querySelectorAll('.sm-title, .sm-subtitle, .sm-link').forEach(el=>{
                            ['input','change'].forEach(ev=> el.addEventListener(ev, broadcastPreview));
                        });
                    }

                    function createCard(item = null, index = null){
                        const id = item ? item.id : 'new_' + (++newCounter);
                        const isNew = !item;
                        const displayIndex = index !== null ? index + 1 : (items.length + 1);
                        const escapedTitle = (item?.title || '').replace(/"/g,'&quot;');
                        const escapedSubtitle = (item?.content || '').replace(/"/g,'&quot;').replace(/\n/g,'&#10;');
                        const escapedLink = (item?.link || '').replace(/"/g,'&quot;');
                        const imageUrl = item?.image_url || '';
                        const card = document.createElement('div');
                        card.className = 'card card-editor';
                        card.dataset.socialId = id;
                        card.innerHTML = `
                            <div class="card-body text-center">
                            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px;">
                                <h4 style="margin:0;"><span>আইটেম ${displayIndex}</span></h4>
                                <button type="button" class="remove-card-btn" onclick="removeCardFromForm('${id}')" style="background:#ef4444; color:white; border:none; border-radius:6px; padding:6px 12px; font-size:12px; cursor:pointer; font-weight:500;">✕ সরান</button>
                            </div>
                            <div style="text-align:left;">
                                <label style="display:block; margin-bottom:4px; font-size:13px; font-weight:500;">শিরোনাম</label>
                                <input type="text" class="sm-title" placeholder="শিরোনাম" value="${escapedTitle}" />
                            </div>
                            <div style="margin-top:8px; text-align:left;">
                                <label style="display:block; margin-bottom:4px; font-size:13px; font-weight:500;">সাব-শিরোনাম</label>
                                <textarea class="sm-subtitle" placeholder="সাব-শিরোনাম">${escapedSubtitle}</textarea>
                            </div>
                            <div style="margin-top:8px;">
                                <label style="display:block; margin-bottom:4px; font-size:13px; font-weight:500;">লিংক</label>
                                <input type="url" class="sm-link" placeholder="https://..." value="${escapedLink}" />
                            </div>
                            <div style="margin-top:8px;">
                                <label style="display:block; margin-bottom:4px; font-size:13px; font-weight:500;">ছবি আপলোড করুন</label>
                                <input type="file" class="sm-image" accept="image/*" style="width:100%; padding:6px; border:1px solid #e5e7eb; border-radius:6px;" onchange="previewSocialImage(this, '${id}')" />
                                <div class="image-preview-${id}" style="margin-top:8px;">
                                    ${imageUrl ? `<img src="${imageUrl}" alt="Preview" style="max-width:100%; max-height:120px; border-radius:8px; border:1px solid #e5e7eb;" />` : ''}
                                </div>
                            </div>
                            <div style="margin-top:8px; display:flex; gap:8px; align-items:center; flex-wrap:wrap; justify-content:center;">
                                <button type="button" class="btn btn-primary" onclick="saveSocialItem('${id}')" style="padding:8px 16px; font-size:13px;">${isNew ? 'যোগ করুন' : 'আপডেট'}</button>
                                ${!isNew ? `<button type="button" class="delete-btn" onclick="deleteSocialItem('${id}')">মুছুন</button>` : ''}
                                <span class="save-status-${id}" style="font-size:12px; color:#666; margin-left:8px;"></span>
                            </div>
                            </div>
                        `;
                        // attach handlers for this new card for live preview
                        setTimeout(()=> attachLiveHandlers(card), 0);
                        return card;
                    }

                    async function loadItems(){
                        try{
                            const res = await fetch('/api/social-media');
                            if(!res.ok) throw new Error('Failed to load social media');
                            items = await res.json();
                            container.innerHTML = '';
                            if(items.length===0){
                                container.innerHTML = '<div style="grid-column: 1 / -1; text-align: center; padding: 2rem; color: #666;">কোনো আইটেম নেই। "আইটেম যোগ করুন" বাটনে ক্লিক করে নতুন আইটেম যোগ করুন।</div>';
                            } else {
                                items.forEach((it, idx)=>{ container.appendChild(createCard(it, idx)); });
                            }
                            // After DOM is ready, attach handlers and broadcast initial preview
                            attachLiveHandlers();
                            broadcastPreview();
                        }catch(err){
                            console.error('Error loading social items:', err);
                            container.innerHTML = '<div style="grid-column: 1 / -1; text-align: center; padding: 2rem; color: #ef4444;">সোশ্যাল মিডিয়া লোড করতে সমস্যা হয়েছে।</div>';
                        }
                    }

                    

                    window.saveSocialItem = async function(id){
                        const card = document.querySelector(`[data-social-id="${id}"]`);
                        if(!card) return;
                        const title = card.querySelector('.sm-title').value.trim();
                        const content = card.querySelector('.sm-subtitle').value.trim();
                        const link = card.querySelector('.sm-link').value.trim();
                        const imageFile = card.querySelector('.sm-image').files[0];
                        const statusEl = card.querySelector(`.save-status-${id}`);
                        if(!title){
                            if(typeof alertUser==='function'){ alertUser('ত্রুটি','অনুগ্রহ করে শিরোনাম পূরণ করুন।'); }
                            if(statusEl) statusEl.textContent = '';
                            return;
                        }
                        if(statusEl){ statusEl.textContent='সংরক্ষণ করা হচ্ছে...'; statusEl.style.color='#666'; }
                        try{
                            const isNew = id.toString().startsWith('new_');
                            const url = isNew ? '/admin/social-media' : `/admin/social-media/${id}`;
                            const method = 'POST'; // use POST always; spoof PUT via _method to keep file uploads reliable
                            const fd = new FormData();
                            if(!isNew) fd.append('_method','PUT');
                            fd.append('platform', 'Other');
                            fd.append('title', title);
                            fd.append('content', content);
                            fd.append('link', link);
                            if(imageFile) fd.append('image', imageFile);
                            const token = (document.querySelector('meta[name="csrf-token"]').content || document.getElementById('csrfToken')?.value || '').toString();
                            const resp = await fetch(url, { method, headers: { 'X-CSRF-TOKEN': token, 'Accept':'application/json' }, body: fd });
                            if(!resp.ok){ const t=await resp.text(); console.error('Server error:', t); throw new Error('Bad response '+resp.status); }
                            const result = await resp.json();
                            if(result.success){
                                if(statusEl){ statusEl.textContent='✓ সংরক্ষিত'; statusEl.style.color='#10b981'; setTimeout(()=>{ statusEl.textContent=''; }, 3000); }
                                try{ localStorage.setItem('refreshSocialMedia', String(Date.now())); }catch(_){ }
                                // Don't reload items - keep the current card as is
                                // Update the card's data-social-id if it was a new item
                                const isNew = id.toString().startsWith('new_');
                                if(isNew && result.data && result.data.id){
                                    card.setAttribute('data-social-id', result.data.id);
                                    // Update button text from "যোগ করুন" to "আপডেট"
                                    const saveBtn = card.querySelector('.btn.btn-primary');
                                    if(saveBtn) saveBtn.textContent = 'আপডেট';
                                    // Add delete button if not exists
                                    const btnContainer = card.querySelector('[style*="justify-content:center"]');
                                    if(btnContainer && !card.querySelector('.delete-btn')){
                                        const deleteBtn = document.createElement('button');
                                        deleteBtn.type = 'button';
                                        deleteBtn.className = 'delete-btn';
                                        deleteBtn.onclick = () => deleteSocialItem(result.data.id);
                                        deleteBtn.textContent = 'মুছুন';
                                        saveBtn.parentNode.insertBefore(deleteBtn, saveBtn.nextSibling);
                                    }
                                }
                                saveCardsToStorage();
                            } else {
                                if(statusEl){ statusEl.textContent='✗ ত্রুটি'; statusEl.style.color='#ef4444'; }
                                if(typeof alertUser==='function'){ alertUser('ত্রুটি','কিছু ভুল হয়েছে।'); }
                            }
                        }catch(err){
                            console.error(err);
                            if(statusEl){ statusEl.textContent='✗ ত্রুটি'; statusEl.style.color='#ef4444'; }
                            if(typeof alertUser==='function'){ alertUser('ত্রুটি','নেটওয়ার্ক ত্রুটি।'); }
                        }
                    }

                    window.deleteSocialItem = async function(id){
                        if(!confirm('আপনি কি এই আইটেম মুছে ফেলতে চান?')) return;
                        try{
                            const token = (document.querySelector('meta[name="csrf-token"]').content || document.getElementById('csrfToken')?.value || '').toString();
                            const resp = await fetch(`/admin/social-media/${id}`, { method:'DELETE', headers:{ 'X-CSRF-TOKEN': token } });
                            const result = await resp.json();
                            if(result.success){
                                if(typeof alertUser==='function'){ alertUser('সফল', result.message); }
                                // Remove the card from DOM instead of reloading
                                const card = document.querySelector(`[data-social-id="${id}"]`);
                                if(card) card.remove();
                                try{ localStorage.setItem('refreshSocialMedia', String(Date.now())); }catch(_){ }
                            } else {
                                if(typeof alertUser==='function'){ alertUser('ত্রুটি','কিছু ভুল হয়েছে।'); }
                            }
                        }catch(err){ console.error(err); if(typeof alertUser==='function'){ alertUser('ত্রুটি','নেটওয়ার্ক ত্রুটি।'); } }
                    }

                    window.previewSocialImage = function(input, id){
                        const previewDiv = document.querySelector(`.image-preview-${id}`);
                        if(input.files && input.files[0]){
                            const reader = new FileReader();
                            reader.onload = function(e){
                                previewDiv.innerHTML = `<img src="${e.target.result}" alt="Preview" style="max-width:100%; max-height:120px; border-radius:8px; border:1px solid #e5e7eb;" />`;
                                broadcastPreview();
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                    window.removeCardFromForm = function(id){
                        const card = document.querySelector(`[data-social-id="${id}"]`);
                        if(card){
                            // Just remove from DOM, don't delete from database
                            card.remove();
                            broadcastPreview();
                            saveCardsToStorage();
                        }
                    }

                    document.getElementById('addSocialItemBtn').addEventListener('click', ()=>{
                        const card = createCard();
                        container.appendChild(card);
                        card.scrollIntoView({ behavior:'smooth', block:'nearest' });
                        broadcastPreview();
                        saveCardsToStorage();
                    });

                    // Load saved cards from localStorage on page load
                    loadCardsFromStorage();
                    // Attach handlers to loaded cards
                    attachLiveHandlers();
                    broadcastPreview();
                    
                })();
            </script>
        </div>
    </div>

    <div id="home-social" style="margin-top:1rem;">
        <div class="table-card">
            <h2>সোশ্যাল মিডিয়া</h2>
            <style>
                #home-social .social-form input[type="url"] { height: 46px; padding:10px 12px; font-size:15px; border-radius:10px; }
                #home-social .grid { display:grid; grid-template-columns:1fr 1fr; gap:12px; }
                @media (max-width: 960px){ #home-social .grid{ grid-template-columns:1fr } }
            </style>
            <div class="social-form">
                <div class="grid">
                    <input type="url" id="socialFacebook" placeholder="Facebook URL" />
                    <input type="url" id="socialInstagram" placeholder="Instagram URL" />
                    <input type="url" id="socialTwitter" placeholder="Twitter/X URL" />
                    <input type="url" id="socialLinkedin" placeholder="LinkedIn URL" />
                    <input type="url" id="socialYouTube" placeholder="YouTube URL" />
                </div>
                <div style="margin-top:14px; display:flex; gap:10px;">
                    <button id="saveSocialBtn" class="btn btn-primary" type="button">সেভ</button>
                    <button id="resetSocialBtn" class="btn btn-secondary" type="button">রিসেট</button>
                </div>
            </div>
            <script>
                (function(){
                    const ids=['Facebook','Instagram','Twitter','Linkedin','YouTube'];
                    function load(){
                        try{
                            const v = JSON.parse(localStorage.getItem('socialSettings')||'{}');
                            ids.forEach(k=>{ const el=document.getElementById('social'+k); if(el) el.value = v['social'+k] || ''; });
                        }catch(_){}
                    }
                    function collect(){
                        const v={}; ids.forEach(k=>{ const el=document.getElementById('social'+k); v['social'+k]= el ? el.value.trim() : ''; }); return v;
                    }
                    function save(v){ localStorage.setItem('socialSettings', JSON.stringify(v)); }
                    document.getElementById('saveSocialBtn').addEventListener('click', ()=>{ save(collect()); if(typeof alertUser==='function'){ alertUser('সফল','সোশ্যাল লিংক সংরক্ষণ করা হয়েছে।'); } });
                    document.getElementById('resetSocialBtn').addEventListener('click', ()=>{ localStorage.removeItem('socialSettings'); ids.forEach(k=>{ const el=document.getElementById('social'+k); if(el) el.value=''; }); if(typeof alertUser==='function'){ alertUser('সফল','সোশ্যাল লিংক রিসেট করা হয়েছে।'); } });
                    ids.forEach(k=>{ const el=document.getElementById('social'+k); if(el){ ['input','change'].forEach(ev=> el.addEventListener(ev, ()=> save(collect())) ); } });
                    load();
                })();
            </script>
        </div>
    </div>

    <div id="home-roadmap-content" style="margin-top:1rem;">
        <div class="table-card">
            <h2>প্রকল্প রোডম্যাপ (বাম সেকশন)</h2>
            <p style="color:#6b7280; margin-top:-6px;">হোম পেজের "প্রকল্প রোডম্যাপ" সেকশনের বাম দিকের কন্টেন্ট (main-section) এই ফর্ম থেকে ম্যানেজ হবে।</p>
            <style>
                #home-roadmap-content .form-grid { display:grid; grid-template-columns:1fr; gap:16px; align-items:start; }
                #home-roadmap-content .card { border:1px solid #e5e7eb; border-radius:12px; padding:12px; background:#fafafa }
                #home-roadmap-content input[type="text"],
                #home-roadmap-content input[type="url"],
                #home-roadmap-content textarea { width:100%; height:46px; padding:10px 12px; font-size:15px; border-radius:10px; border:1px solid #d1d5db; box-sizing:border-box; }
                #home-roadmap-content textarea { min-height:120px; height:auto; resize:vertical; }
                #home-roadmap-content .grid-2 { display:grid; grid-template-columns:1fr 1fr; gap:12px; }
                #home-roadmap-content .grid-4 { display:grid; grid-template-columns:repeat(2,1fr); gap:12px; }
                #home-roadmap-content .plot-item { border:1px dashed #cbd5e1; border-radius:10px; padding:10px; background:#fff; }
                #home-roadmap-content .amenity-pill { display:inline-flex; align-items:center; gap:6px; padding:6px 10px; background:#e2fbe8; color:#065f46; border-radius:999px; font-size:13px; margin:6px 6px 0 0; }
                #home-roadmap-content .amenity-pill button { background:transparent; border:none; color:#059669; cursor:pointer; }
                #home-roadmap-content .map-prev { border:1px dashed #cbd5e1; border-radius:10px; overflow:hidden; aspect-ratio:16/9; background:#f8fafc; display:flex; align-items:center; justify-content:center; }
                #home-roadmap-content .map-prev img { max-width:100%; max-height:100%; display:block; }
                @media (max-width: 960px){
                    #home-roadmap-content .grid-2, #home-roadmap-content .grid-4 { grid-template-columns:1fr; }
                }
            </style>
            <div class="form-grid">
                <div class="card">
                    <div class="form-group">
                        <label>অফার শিরোনাম</label>
                        <input type="text" id="rpOfferTitle" placeholder="বেছে নিন আপনার পছন্দের প্লট">
                    </div>
                </div>

                <div class="card">
                    <label style="display:block; margin-bottom:6px;">প্লট বক্স (৪টি)</label>
                    <div id="rpPlots" class="grid-4"></div>
                    <div style="margin-top:8px; color:#64748b; font-size:13px;">প্রতি বক্সে আকার (যেমন: ৮ কাঠা) এবং ক্যাটাগরি (যেমন: প্রিমিয়াম প্লট)</div>
                </div>

                <div class="card">
                    <label style="display:block; margin-bottom:6px;">সুবিধাসমূহ (amenities)</label>
                    <div id="rpAmenitiesWrap"></div>
                    <div class="grid-2" style="margin-top:10px;">
                        <input type="text" id="rpAmenityInput" placeholder="নতুন সুবিধা (যেমন: ক্লাব হাউজ)">
                        <button id="rpAmenityAdd" class="btn btn-primary" type="button">যোগ করুন</button>
                    </div>
                </div>

                <div class="card">
                    <div class="form-group">
                        <label>ফুটার নোট</label>
                        <textarea id="rpFooterNote" placeholder="HTML সমর্থিত"></textarea>
                    </div>
                </div>

                <div class="card grid-2">
                    <div>
                        <div class="form-group">
                            <label>CTA বার</label>
                            <input type="text" id="rpCtaBar" placeholder="📞 এখনই যোগাযোগ করুন — সীমিত সময়ের অফার">
                        </div>
                    </div>
                    <div>
                        <label style="display:block; margin-bottom:6px;">প্রকল্প রোডম্যাপ</label>
                        <div class="map-prev"><img id="rpMapPrev" alt="Map" src="assets/images/realstate3.PNG"></div>
                        <input type="file" id="rpMapInput" accept="image/*" style="margin-top:6px;">
                    </div>
                </div>

                <div style="margin-top:14px; display:flex; gap:10px;">
                    <button id="rpSaveBtn" class="btn btn-primary" type="button">সেভ</button>
                    <button id="rpResetBtn" class="btn btn-secondary" type="button">রিসেট</button>
                </div>
            </div>

            <script>
                (function(){
                    const qs = (id)=> document.getElementById(id);
                    const els = {
                        offer: qs('rpOfferTitle'),
                        plotsWrap: qs('rpPlots'),
                        amenWrap: qs('rpAmenitiesWrap'),
                        amenInput: qs('rpAmenityInput'),
                        amenAdd: qs('rpAmenityAdd'),
                        footer: qs('rpFooterNote'),
                        cta: qs('rpCtaBar'),
                        mapPrev: qs('rpMapPrev'),
                        mapInput: qs('rpMapInput')
                    };

                    const defaults = {
                        offerTitle: 'বেছে নিন আপনার পছন্দের প্লট',
                        plots: [
                            {size: '৮ কাঠা', cat: 'প্রিমিয়াম প্লট'},
                            {size: '১০ কাঠা', cat: 'ডিলাক্স প্লট'},
                            {size: '৩০ কাঠা', cat: 'এক্সিকিউটিভ প্লট'},
                            {size: '২০ কাঠা', cat: 'কর্পোরেট প্লট'}
                        ],
                        amenities: ['ক্লাব হাউজ', 'জিম', 'মসজিদ', 'শপিং এরিয়া'],
                        footerNote: '<p>সবুজ প্রকৃতি, নীরব কলকল ধারা আর নির্মল আবহাওয়া — এই জায়গাটি হতে পারে আপনার স্বপ্নের ঠিকানা! এখানে আছে আধুনিক রাস্তাঘাট, বিদ্যুৎ, পানি, গ্যাস, ও নিরাপত্তার নিশ্চয়তা।</p><p>মূল্য বৃদ্ধির আগে, আজই বুকিং করুন।</p>',
                        ctaBar: '📞 এখনই যোগাযোগ করুন — সীমিত সময়ের অফার',
                        mapImage: 'assets/images/realstate3.PNG'
                    };

                    function read(){ try{ return JSON.parse(localStorage.getItem('ourProjectsSettings')||'{}'); }catch(e){ return {}; } }
                    function write(v){ localStorage.setItem('ourProjectsSettings', JSON.stringify(v)); window.dispatchEvent(new StorageEvent('storage', {key:'ourProjectsSettings', newValue: JSON.stringify(v)})); }

                    function current(){ const s = read(); return { ...defaults, ...s, plots: Array.isArray(s.plots)? s.plots : defaults.plots.slice(), amenities: Array.isArray(s.amenities)? s.amenities.slice() : defaults.amenities.slice() } }

                    function renderPlots(plots){
                        els.plotsWrap.innerHTML = '';
                        const ensure = (i)=> plots[i] || (plots[i] = {size:'', cat:''});
                        for(let i=0;i<4;i++){
                            ensure(i);
                            const p = plots[i];
                            const html = `<div class="plot-item">
                                <div class="grid-2">
                                    <input type="text" data-idx="${i}" data-field="size" placeholder="আকার (যেমন: ৮ কাঠা)" value="${p.size||''}">
                                    <input type="text" data-idx="${i}" data-field="cat" placeholder="ক্যাটাগরি (যেমন: প্রিমিয়াম প্লট)" value="${p.cat||''}">
                                </div>
                            </div>`;
                            const wrap = document.createElement('div'); wrap.innerHTML = html; els.plotsWrap.appendChild(wrap.firstChild);
                        }
                        els.plotsWrap.querySelectorAll('input[data-field]').forEach(inp=>{
                            ['input','change'].forEach(ev=> inp.addEventListener(ev, ()=>{
                                const idx = parseInt(inp.getAttribute('data-idx'),10) || 0;
                                const field = inp.getAttribute('data-field');
                                plots[idx][field] = inp.value;
                                const v = current(); v.plots = plots; write(v);
                            }));
                        });
                    }

                    function renderAmenities(list){
                        els.amenWrap.innerHTML = '';
                        (list||[]).forEach((txt, i)=>{
                            const pill = document.createElement('span');
                            pill.className = 'amenity-pill';
                            pill.innerHTML = `<span>${txt}</span><button type="button" data-i="${i}">✕</button>`;
                            pill.querySelector('button').addEventListener('click', ()=>{
                                const v = current(); v.amenities.splice(i,1); write(v); renderAmenities(v.amenities);
                            });
                            els.amenWrap.appendChild(pill);
                        });
                    }

                    function load(){
                        const v = current();
                        els.offer.value = v.offerTitle || '';
                        renderPlots(v.plots);
                        renderAmenities(v.amenities);
                        els.footer.value = v.footerNote || '';
                        els.cta.value = v.ctaBar || '';
                        if (els.mapPrev && v.mapImage) els.mapPrev.src = v.mapImage;
                    }

                    function savePartial(obj){ const v = current(); Object.assign(v, obj||{}); write(v); }

                    // Wire inputs
                    els.offer.addEventListener('input', ()=> savePartial({offerTitle: els.offer.value}));
                    els.footer.addEventListener('input', ()=> savePartial({footerNote: els.footer.value}));
                    els.cta.addEventListener('input', ()=> savePartial({ctaBar: els.cta.value}));
                    els.amenAdd.addEventListener('click', ()=>{
                        const val = (els.amenInput.value||'').trim(); if(!val) return;
                        const v = current(); v.amenities.push(val); els.amenInput.value=''; write(v); renderAmenities(v.amenities);
                    });
                    els.mapInput.addEventListener('change', (e)=>{
                        const f = e.target.files && e.target.files[0]; if(!f) return;
                        const url = URL.createObjectURL(f); if(els.mapPrev){ els.mapPrev.src = url; }
                        const rdr = new FileReader(); rdr.onload = ()=>{ savePartial({mapImage: rdr.result}); URL.revokeObjectURL(url); }; rdr.readAsDataURL(f);
                    });

                    // Buttons
                    document.getElementById('rpSaveBtn').addEventListener('click', ()=>{ const v = current(); write(v); });
                    document.getElementById('rpResetBtn').addEventListener('click', ()=>{
                        localStorage.removeItem('ourProjectsSettings'); load();
                        window.dispatchEvent(new StorageEvent('storage', {key:'ourProjectsSettings', newValue: null}));
                    });

                    load();
                })();
            </script>
        </div>
    </div>

    <div id="home-projects" style="margin-top:1rem;">
        <div class="table-card">
            <h2>অন্যান্য প্রকল্প</h2>
            <style>
                #home-projects .proj-grid { display:grid; grid-template-columns:1fr 1fr; gap:16px; }
                #home-projects .proj-form input[type="text"],
                #home-projects .proj-form input[type="url"],
                #home-projects .proj-form textarea { height:46px; padding:10px 12px; font-size:15px; border-radius:10px; }
                #home-projects .proj-card { border:1px solid #e5e7eb; border-radius:12px; padding:12px; background:#fafafa }
                #home-projects .proj-card h4 { margin:0 0 8px; font-size:14px; font-weight:600; }
                #home-projects .preview-box{ border:1px dashed #cbd5e1; border-radius:12px; padding:12px; background:#f8fafc; }
                @media (max-width: 960px){ #home-projects .proj-grid{ grid-template-columns:1fr } }
            </style>
            <div class="proj-grid">
                <div class="proj-form">
                    <div class="form-group" style="margin-bottom:8px;">
                        <label>সেকশন শিরোনাম</label>
                        <input type="text" id="opTitle" placeholder="অন্যান্য প্রকল্প" />
                    </div>
                    <div class="form-group" style="margin-bottom:12px;">
                        <label>সেকশন সাব-শিরোনাম</label>
                        <input type="text" id="opSubtitle" placeholder="NEX Real Estate-এর সফল প্রকল্পগুলো দেখুন" />
                    </div>
                    <div id="opForms"></div>
                    <div style="margin-top:14px; display:flex; gap:10px; flex-wrap:wrap;">
                        <button id="addProjectBtn" class="btn btn-primary" type="button">নতুন প্রকল্প যোগ করুন</button>
                        <button id="saveOtherProjectsBtn" class="btn btn-primary" type="button">সেভ</button>
                        <button id="resetOtherProjectsBtn" class="btn btn-secondary" type="button">রিসেট</button>
                    </div>
                </div>
                <div>
                    <div class="preview-box">
                        <div style="margin-bottom:8px;">
                            <div id="pvOpTitle" style="font-weight:700; font-size:20px;">অন্যান্য প্রকল্প</div>
                            <div id="pvOpSubtitle" style="color:#64748b;">NEX Real Estate-এর সফল প্রকল্পগুলো দেখুন</div>
                        </div>
                        <div id="pvOpList" style="display:grid; grid-template-columns:1fr 1fr; gap:12px;"></div>
                    </div>
                </div>
            </div>
            <script>
                (function(){
                    function get(){ try{ return JSON.parse(localStorage.getItem('otherProjectsSettings')||'{}'); }catch(e){ return {}; } }
                    function set(data){ localStorage.setItem('otherProjectsSettings', JSON.stringify(data)); window.dispatchEvent(new StorageEvent('storage', {key:'otherProjectsSettings', newValue: JSON.stringify(data)})); }
                    const els = { title: document.getElementById('opTitle'), subtitle: document.getElementById('opSubtitle') };
                    const formsWrap = document.getElementById('opForms');
                    const listWrap  = document.getElementById('pvOpList');
                    function normalizeLegacy(v){
                        if(Array.isArray(v.items)) return v;
                        const items=[]; for(let i=1;i<=12;i++){ const name=v['name'+i],icon=v['icon'+i],desc=v['desc'+i],btn=v['btn'+i],href=v['href'+i]; if(name||icon||desc||btn||href){ items.push({icon:icon||'',name:name||'',desc:desc||'',btn:btn||'',href:href||''}); } }
                        return { title:v.title||'', subtitle:v.subtitle||'', items };
                    }
                    function projectFormTemplate(idx, d){ return `
                        <div class="proj-card" data-index="${idx}" style="margin-top:12px;">
                            <div style=\"display:flex; justify-content:space-between; align-items:center; margin-bottom:6px;\">
                                <h4 style=\"margin:0;\">প্রকল্প ${idx+1}</h4>
                                <button type=\"button\" class=\"btn btn-secondary\" data-remove=\"${idx}\" style=\"background:#ef4444; border-color:#ef4444;\">মুছুন</button>
                            </div>
                            <input type=\"text\" data-field=\"icon\" placeholder=\"আইকন (যেমন: 🏙️)\" value=\"${(d&&d.icon)||''}\" />
                            <input type=\"text\" data-field=\"name\" placeholder=\"নাম\" style=\"margin-top:8px;\" value=\"${(d&&d.name)||''}\" />
                            <textarea data-field=\"desc\" placeholder=\"বিবরণ\" style=\"margin-top:8px; height:90px;\">${(d&&d.desc)||''}</textarea>
                            <div style=\"display:grid; grid-template-columns:1fr 1fr; gap:8px; margin-top:8px;\">
                                <input type=\"text\" data-field=\"btn\" placeholder=\"বাটন টেক্সট\" value=\"${(d&&d.btn)||''}\" />
                                <input type=\"url\" data-field=\"href\" placeholder=\"লিংক\" value=\"${(d&&d.href)||''}\" />
                            </div>
                        </div>`; }
                    function renderForms(v){ formsWrap.innerHTML=''; (v.items||[]).forEach((it,idx)=>{ formsWrap.insertAdjacentHTML('beforeend', projectFormTemplate(idx,it)); }); bindFormHandlers(); }
                    function renderPreview(v){
                        document.getElementById('pvOpTitle').textContent = v.title || 'অন্যান্য প্রকল্প';
                        document.getElementById('pvOpSubtitle').textContent = v.subtitle || 'NEX Real Estate-এর সফল প্রকল্পগুলো দেখুন';
                        listWrap.innerHTML='';
                        const items = (v.items&&v.items.length)? v.items: [{icon:'🏙️',name:'শান্তি নিবাস',desc:'শহরের ঠিক মাঝে আপনার শান্তির ঠিকানা...',btn:'বিস্তারিত জানুন',href:'#contact'}];
                        items.forEach(p=>{ const card=document.createElement('div'); card.style.border='1px solid #e5e7eb'; card.style.borderRadius='10px'; card.style.padding='10px'; card.style.background='#fff'; card.innerHTML=`<div style=\"font-size:28px;\">${p.icon||''}</div><div style=\"font-weight:600; margin-top:4px;\">${p.name||''}</div><div style=\"color:#475569; font-size:14px; margin-top:4px;\">${p.desc||''}</div><a href=\"${p.href||'#contact'}\" class=\"btn btn-primary\" style=\"margin-top:8px; display:inline-block;\">${p.btn||'বিস্তারিত জানুন'}</a>`; listWrap.appendChild(card); });
                    }
                    function current(){ return normalizeLegacy(get()); }
                    function save(v){ set(v); renderPreview(v); }
                    function bindHeaderInputs(v){ els.title.value=v.title||''; els.subtitle.value=v.subtitle||''; ['input','change'].forEach(ev=>{ els.title.addEventListener(ev, ()=>{ const n=current(); n.title=els.title.value; save(n); }); els.subtitle.addEventListener(ev, ()=>{ const n=current(); n.subtitle=els.subtitle.value; save(n); }); }); }
                    function bindFormHandlers(){ formsWrap.querySelectorAll('.proj-card').forEach((card, idx)=>{ card.querySelectorAll('[data-field]').forEach(inp=>{ ['input','change'].forEach(ev=> inp.addEventListener(ev, ()=>{ const v=current(); v.items[idx][inp.dataset.field]=inp.value; save(v); })); }); const rm=card.querySelector('[data-remove]'); rm&&rm.addEventListener('click', ()=>{ const v=current(); v.items.splice(idx,1); set(v); renderForms(v); renderPreview(v); }); }); }
                    (function(){
                        const addHandlers = () => {
                            const btns = document.querySelectorAll('#addProjectBtn, .addProjectBtn');
                            btns.forEach(btn => {
                                if (!btn.dataset.bound) {
                                    btn.addEventListener('click', ()=>{
                                        const v=current();
                                        if(!Array.isArray(v.items)) v.items=[];
                                        v.items.push({icon:'🏙️',name:'',desc:'',btn:'বিস্তারিত জানুন',href:'#contact'});
                                        set(v); renderForms(v); renderPreview(v);
                                    });
                                    btn.dataset.bound = 'true';
                                }
                            });
                        };
                        addHandlers();
                        // Re-run binding when storage events update the DOM
                        window.addEventListener('storage', (e)=>{ if(e.key==='otherProjectsSettings'){ addHandlers(); } });
                    })();
                    document.getElementById('saveOtherProjectsBtn').addEventListener('click', ()=>{ const v=current(); set(v); if(typeof alertUser==='function'){ alertUser('সফল','অন্যান্য প্রকল্প সংরক্ষণ করা হয়েছে।'); } });
                    document.getElementById('resetOtherProjectsBtn').addEventListener('click', ()=>{ localStorage.removeItem('otherProjectsSettings'); const v={title:'',subtitle:'',items:[]}; renderForms(v); renderPreview(v); window.dispatchEvent(new StorageEvent('storage', {key:'otherProjectsSettings', newValue: null})); });
                    const initial=current(); bindHeaderInputs(initial); renderForms(initial); renderPreview(initial);
                })();
                })();
            </script>
        </div>
    </div>

</div>
