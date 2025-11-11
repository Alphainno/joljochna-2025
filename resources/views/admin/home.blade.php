<div id="home" class="tab-content">
    <div class="stats-grid">
        <div class="stat-card full-width">
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
                        <label>ইমেইল ঠিকানা (লাইন ব্রেকে আলাদা করুন বা &lt;br&gt; ব্যবহার করুন)</label>
                        <textarea id="contactEmailAddressInput" placeholder="hello@example.com"></textarea>
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

            <div style="margin-top:14px; display:flex; gap:10px; align-items:center;">
                <button id="saveContactBtn" class="btn btn-primary" type="button">সেভ</button>
                <button id="resetContactBtn" class="btn btn-secondary" type="button">রিসেট</button>
                <span style="color:#6b7280; font-size:14px; margin-left:8px;">
                    💡 পরিবর্তন দেখতে <a href="/" target="_blank" style="color:#059669; text-decoration:underline;">হোম পেজ</a> এর যোগাযোগ সেকশন চেক করুন
                </span>
            </div>

            {{-- Live Preview --}}
            <div style="margin-top:1.5rem; border:1px solid #e5e7eb; border-radius:12px; padding:16px; background:#f9fafb;">
                <h3 style="margin:0 0 1rem 0; font-size:1rem; color:#374151;">লাইভ প্রিভিউ</h3>
                <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap:12px;">
                    <div style="border:1px solid #e5e7eb; border-radius:8px; padding:12px; background:#fff; display:flex; gap:12px; align-items:start;">
                        <div id="prevPhoneIcon" style="font-size:24px;">📞</div>
                        <div>
                            <h4 id="prevPhoneLabel" style="margin:0 0 4px; font-size:14px; color:#059669;">Phone</h4>
                            <p id="prevPhoneNumbers" style="margin:0; font-size:13px; color:#6b7280; line-height:1.5;">+880 1991 995 995</p>
                        </div>
                    </div>
                    <div style="border:1px solid #e5e7eb; border-radius:8px; padding:12px; background:#fff; display:flex; gap:12px; align-items:start;">
                        <div id="prevEmailIcon" style="font-size:24px;">📧</div>
                        <div>
                            <h4 id="prevEmailLabel" style="margin:0 0 4px; font-size:14px; color:#059669;">Email</h4>
                            <p id="prevEmailAddress" style="margin:0; font-size:13px; color:#6b7280;">hello@example.com</p>
                        </div>
                    </div>
                    <div style="border:1px solid #e5e7eb; border-radius:8px; padding:12px; background:#fff; display:flex; gap:12px; align-items:start;">
                        <div id="prevWebIcon" style="font-size:24px;">🌐</div>
                        <div>
                            <h4 id="prevWebLabel" style="margin:0 0 4px; font-size:14px; color:#059669;">Website</h4>
                            <p id="prevWebAddress" style="margin:0; font-size:13px; color:#6b7280;">www.example.com</p>
                        </div>
                    </div>
                    <div style="border:1px solid #e5e7eb; border-radius:8px; padding:12px; background:#fff; display:flex; gap:12px; align-items:start;">
                        <div id="prevAddressIcon" style="font-size:24px;">📍</div>
                        <div>
                            <h4 id="prevAddressLabel" style="margin:0 0 4px; font-size:14px; color:#059669;">Address</h4>
                            <p id="prevAddressText" style="margin:0; font-size:13px; color:#6b7280; line-height:1.5;">শুভনূর ৩৮৮ বাড়ি</p>
                        </div>
                    </div>
                </div>
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

                    // Live preview elements
                    const prevEls = {
                        phoneIcon: qs('prevPhoneIcon'),
                        phoneLabel: qs('prevPhoneLabel'),
                        phoneNumbers: qs('prevPhoneNumbers'),
                        emailIcon: qs('prevEmailIcon'),
                        emailLabel: qs('prevEmailLabel'),
                        emailAddress: qs('prevEmailAddress'),
                        webIcon: qs('prevWebIcon'),
                        webLabel: qs('prevWebLabel'),
                        webAddress: qs('prevWebAddress'),
                        addressIcon: qs('prevAddressIcon'),
                        addressLabel: qs('prevAddressLabel'),
                        addressText: qs('prevAddressText')
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
                        if(els.emailAddress) els.emailAddress.value = (s.emailAddress||'hello@example.com').replace(/<br\s*\/>?/gi, '\n');
                        if(els.webIcon) els.webIcon.value = s.webIcon || '🌐';
                        if(els.webLabel) els.webLabel.value = s.webLabel || 'ওয়েবসাইট';
                        if(els.webAddress) els.webAddress.value = s.webAddress || 'www.example.com';
                        if(els.addressIcon) els.addressIcon.value = s.addressIcon || '📍';
                        if(els.addressLabel) els.addressLabel.value = s.addressLabel || 'ঠিকানা';
                        if(els.addressText) els.addressText.value = (s.addressText||'').replace(/<br\s*\/>?/gi, '\n');
                    }

                    function updatePreview() {
                        if(prevEls.phoneIcon) prevEls.phoneIcon.textContent = els.phoneIcon?.value || '📞';
                        if(prevEls.phoneLabel) prevEls.phoneLabel.textContent = els.phoneLabel?.value || 'Phone';
                        if(prevEls.phoneNumbers) prevEls.phoneNumbers.innerHTML = (els.phoneNumbers?.value || '').split(/\n+/).map(s=>s.trim()).filter(Boolean).join('<br>') || '+880 1991 995 995';
                        if(prevEls.emailIcon) prevEls.emailIcon.textContent = els.emailIcon?.value || '📧';
                        if(prevEls.emailLabel) prevEls.emailLabel.textContent = els.emailLabel?.value || 'Email';
                        if(prevEls.emailAddress) prevEls.emailAddress.innerHTML = (els.emailAddress?.value || '').split(/\n+/).map(s=>s.trim()).filter(Boolean).join('<br>') || 'hello@example.com';
                        if(prevEls.webIcon) prevEls.webIcon.textContent = els.webIcon?.value || '🌐';
                        if(prevEls.webLabel) prevEls.webLabel.textContent = els.webLabel?.value || 'Website';
                        if(prevEls.webAddress) prevEls.webAddress.textContent = els.webAddress?.value || 'www.example.com';
                        if(prevEls.addressIcon) prevEls.addressIcon.textContent = els.addressIcon?.value || '📍';
                        if(prevEls.addressLabel) prevEls.addressLabel.textContent = els.addressLabel?.value || 'Address';
                        if(prevEls.addressText) prevEls.addressText.innerHTML = (els.addressText?.value || '').split(/\n+/).map(s=>s.trim()).filter(Boolean).join('<br>') || 'শুভনূর ৩৮৮ বাড়ি';
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
                            emailAddress: (els.emailAddress?.value || '').split(/\n+/).map(s=>s.trim()).filter(Boolean).join('<br>'),
                            webIcon: els.webIcon?.value || '',
                            webLabel: els.webLabel?.value || '',
                            webAddress: els.webAddress?.value || '',
                            addressIcon: els.addressIcon?.value || '',
                            addressLabel: els.addressLabel?.value || '',
                            addressText: (els.addressText?.value || '').split(/\n+/).map(s=>s.trim()).filter(Boolean).join('<br>')
                        };
                        write(payload);
                        updatePreview();
                        showSaveSuccess();
                    }

                    function showSaveSuccess() {
                        const btn = document.getElementById('saveContactBtn');
                        const originalText = btn.textContent;
                        btn.textContent = '✓ সেভ হয়েছে';
                        btn.style.backgroundColor = '#10b981';
                        setTimeout(() => {
                            btn.textContent = originalText;
                            btn.style.backgroundColor = '';
                        }, 2000);
                    }

                    document.getElementById('saveContactBtn').addEventListener('click', save);
                    document.getElementById('resetContactBtn').addEventListener('click', ()=>{
                        localStorage.removeItem('contactSettings'); 
                        load(); 
                        updatePreview();
                        window.dispatchEvent(new StorageEvent('storage', {key:'contactSettings', newValue: null}));
                    });

                    // Auto-save on input changes
                    Object.values(els).forEach(el=>{ if(!el) return; ['input','change'].forEach(ev=> el.addEventListener(ev, save)); });

                    load();
                    updatePreview();
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
                @keyframes modalSlideIn {
                    from {
                        opacity: 0;
                        transform: scale(0.9) translateY(-20px);
                    }
                    to {
                        opacity: 1;
                        transform: scale(1) translateY(0);
                    }
                }
                
                #home-social-carousel .social-form input[type="text"],
                #home-social-carousel .social-form input[type="url"],
                #home-social-carousel .social-form textarea { 
                    height: 46px; 
                    padding:10px 12px; 
                    font-size:15px; 
                    border-radius:10px; 
                    width: 100%;
                    border: 1px solid #e5e7eb;
                    box-sizing: border-box;
                }
                #home-social-carousel .social-form textarea { 
                    height: auto; 
                    min-height: 80px; 
                    resize: vertical;
                }
                #home-social-carousel .social-grid-editor { 
                    display:grid; 
                    grid-template-columns:repeat(2,1fr); 
                    gap:12px; 
                }
                #home-social-carousel .card-editor { 
                    border:1px solid #e5e7eb; 
                    border-radius:12px; 
                    padding:12px; 
                    background:#fafafa;
                    position: relative;
                }
                #home-social-carousel .card-editor h4 { 
                    margin:0 0 8px; 
                    font-size:14px;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }
                #home-social-carousel .card-editor .delete-btn {
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
                #home-social-carousel .card-editor .delete-btn:hover {
                    background: #dc2626;
                }
                @media (max-width: 960px){ 
                    #home-social-carousel .social-grid-editor{ 
                        grid-template-columns:1fr;
                    } 
                }
            </style>
            
            <div class="social-form">
                <div id="socialItemsContainer" class="social-grid-editor">
                    <!-- Social media items will be loaded here dynamically -->
                </div>
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
                        const uniqueCards = new Map();
                        
                        cards.forEach(card => {
                            const cardId = card.dataset.socialId;
                            
                            // Get values from input fields (works in both edit and view mode)
                            const titleInput = card.querySelector('.sm-title');
                            const contentInput = card.querySelector('.sm-subtitle');
                            const linkInput = card.querySelector('.sm-link');
                            const imgElement = card.querySelector(`[class^="image-preview-"] img`);
                            
                            const title = titleInput?.value?.trim() || '';
                            const content = contentInput?.value?.trim() || '';
                            const link = linkInput?.value?.trim() || '';
                            const image_url = imgElement?.getAttribute('src') || '';
                            
                            // Only include items with at least title or content
                            if(title || content) {
                                // Use card ID as key to prevent duplicates
                                uniqueCards.set(cardId, { title, content, link, image_url });
                            }
                        });
                        
                        return Array.from(uniqueCards.values());
                    }

                    function updateDashboardStatus(){
                        const dashStatusText = document.getElementById('dashStatusText');
                        const dashItemCount = document.getElementById('dashItemCount');
                        const dashStatusIndicator = document.getElementById('dashStatusIndicator');
                        
                        // Get unique cards from DOM
                        const allCards = Array.from(container.querySelectorAll('.card-editor'));
                        const uniqueCardIds = new Set();
                        allCards.forEach(card => uniqueCardIds.add(card.dataset.socialId));
                        const cardCount = uniqueCardIds.size;
                        
                        const validItems = collectPreviewItems();
                        const validCount = validItems.length;
                        
                        if(dashItemCount){
                            dashItemCount.textContent = `${cardCount} টি আইটেম`;
                            if(cardCount > 0){
                                dashItemCount.style.background = '#d1fae5';
                                dashItemCount.style.color = '#065f46';
                            } else {
                                dashItemCount.style.background = '#fee2e2';
                                dashItemCount.style.color = '#991b1b';
                            }
                        }
                        
                        if(dashStatusText){
                            if(validCount > 0 && validCount !== cardCount){
                                dashStatusText.textContent = `${validCount} টি প্রিভিউতে`;
                            } else if(cardCount > 0){
                                dashStatusText.textContent = 'প্রিভিউতে সংযুক্ত';
                            } else {
                                dashStatusText.textContent = 'কোনো আইটেম নেই';
                            }
                        }
                        
                        if(dashStatusIndicator){
                            if(cardCount > 0){
                                dashStatusIndicator.style.background = '#10b981';
                                dashStatusIndicator.style.boxShadow = '0 0 6px #10b981';
                            } else {
                                dashStatusIndicator.style.background = '#fbbf24';
                                dashStatusIndicator.style.boxShadow = '0 0 6px #fbbf24';
                            }
                        }
                    }
                    
                    function broadcastPreview(){
                        const previewItems = collectPreviewItems();
                        const payload = { 
                            ts: Date.now(), 
                            items: previewItems 
                        };
                        
                        try{ 
                            localStorage.setItem('liveSocialMediaPreview', JSON.stringify(payload)); 
                        }catch(e){ 
                            console.error('Failed to save preview:', e); 
                        }
                        
                        // Dispatch storage event for cross-tab communication
                        try{ 
                            window.dispatchEvent(new StorageEvent('storage', { 
                                key: 'liveSocialMediaPreview', 
                                newValue: JSON.stringify(payload),
                                url: window.location.href,
                                storageArea: localStorage
                            })); 
                        }catch(_){ }
                        
                        updateDashboardStatus();
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
                        card.dataset.editMode = isNew ? 'true' : 'false'; // New cards start in edit mode
                        
                        card.innerHTML = `
                            <div class="card-body text-center">
                            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:12px; padding-bottom:8px; border-bottom:2px solid #e5e7eb;">
                                <h4 style="margin:0; color:#0a4d2e; font-weight:600;"><span>আইটেম ${displayIndex}</span></h4>
                                <div style="display:flex; gap:8px;">
                                    ${!isNew ? `<button type="button" class="edit-mode-btn" onclick="toggleEditMode('${id}')" style="background:#3b82f6; color:white; border:none; border-radius:6px; padding:6px 12px; font-size:12px; cursor:pointer; font-weight:500; transition: all 0.2s; display:none;" onmouseover="this.style.background='#2563eb'" onmouseout="this.style.background='#3b82f6'">✎ সম্পাদনা</button>` : ''}
                                    <button type="button" class="remove-card-btn" onclick="removeCardFromForm('${id}')" style="background:#ef4444; color:white; border:none; border-radius:6px; padding:6px 12px; font-size:12px; cursor:pointer; font-weight:500; transition: all 0.2s;" onmouseover="this.style.background='#dc2626'" onmouseout="this.style.background='#ef4444'">✕ সরান</button>
                                </div>
                            </div>
                            <div style="text-align:left;">
                                <label style="display:block; margin-bottom:4px; font-size:13px; font-weight:600; color:#374151;">শিরোনাম</label>
                                <input type="text" class="sm-title editable-field" placeholder="শিরোনাম লিখুন" value="${escapedTitle}" style="width:100%; padding:8px; border:1px solid #d1d5db; border-radius:6px; font-size:13px; transition: border 0.2s;" onfocus="this.style.borderColor='#0a4d2e'" onblur="this.style.borderColor='#d1d5db'" />
                            </div>
                            <div style="margin-top:8px; text-align:left;">
                                <label style="display:block; margin-bottom:4px; font-size:13px; font-weight:600; color:#374151;">সাব-শিরোনাম</label>
                                <textarea class="sm-subtitle editable-field" placeholder="বিস্তারিত লিখুন" style="width:100%; padding:8px; border:1px solid #d1d5db; border-radius:6px; min-height:60px; font-size:13px; resize:vertical; font-family:inherit; transition: border 0.2s;" onfocus="this.style.borderColor='#0a4d2e'" onblur="this.style.borderColor='#d1d5db'">${escapedSubtitle}</textarea>
                            </div>
                            <div style="margin-top:8px; text-align:left;">
                                <label style="display:block; margin-bottom:4px; font-size:13px; font-weight:600; color:#374151;">লিংক</label>
                                <input type="url" class="sm-link editable-field" placeholder="https://example.com" value="${escapedLink}" style="width:100%; padding:8px; border:1px solid #d1d5db; border-radius:6px; font-size:13px; transition: border 0.2s;" onfocus="this.style.borderColor='#0a4d2e'" onblur="this.style.borderColor='#d1d5db'" />
                            </div>
                            <div class="image-upload-section" style="margin-top:8px; text-align:left;">
                                <label style="display:block; margin-bottom:4px; font-size:13px; font-weight:600; color:#374151;">ছবি আপলোড করুন</label>
                                <input type="file" class="sm-image editable-field" accept="image/*" style="width:100%; padding:8px; border:1px solid #d1d5db; border-radius:6px; font-size:13px; cursor:pointer;" onchange="previewSocialImage(this, '${id}')" />
                                <div class="image-preview-${id}" style="margin-top:8px; text-align:center;">
                                    ${imageUrl ? `<img src="${imageUrl}" alt="Preview" style="max-width:100%; max-height:150px; border-radius:8px; border:2px solid #e5e7eb; box-shadow: 0 2px 4px rgba(0,0,0,0.1);" />` : ''}
                                </div>
                            </div>
                            <div class="action-buttons" style="margin-top:16px; padding-top:12px; border-top:1px solid #e5e7eb; display:flex; gap:8px; align-items:center; flex-wrap:wrap; justify-content:center;">
                                <button type="button" class="save-btn btn btn-primary" onclick="saveSocialItem('${id}')" style="padding:10px 20px; font-size:14px; font-weight:600; background:#0a4d2e; border:none; border-radius:6px; color:white; cursor:pointer; transition: all 0.2s; box-shadow: 0 2px 4px rgba(10,77,46,0.2);" onmouseover="this.style.background='#0d6639'; this.style.transform='translateY(-1px)'; this.style.boxShadow='0 4px 6px rgba(10,77,46,0.3)'" onmouseout="this.style.background='#0a4d2e'; this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 4px rgba(10,77,46,0.2)'">${isNew ? '✓ সংরক্ষণ' : '✓ আপডেট'}</button>
                                ${!isNew ? `<button type="button" class="cancel-edit-btn" onclick="toggleEditMode('${id}')" style="padding:10px 20px; font-size:14px; font-weight:600; background:#6b7280; border:none; border-radius:6px; color:white; cursor:pointer; transition: all 0.2s; box-shadow: 0 2px 4px rgba(107,114,128,0.2); display:none;" onmouseover="this.style.background='#4b5563'; this.style.transform='translateY(-1px)'; this.style.boxShadow='0 4px 6px rgba(107,114,128,0.3)'" onmouseout="this.style.background='#6b7280'; this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 4px rgba(107,114,128,0.2)'">✕ বাতিল</button>` : ''}
                                ${!isNew ? `<button type="button" class="delete-btn" onclick="deleteSocialItem('${id}')" style="padding:10px 20px; font-size:14px; font-weight:600; background:#ef4444; border:none; border-radius:6px; color:white; cursor:pointer; transition: all 0.2s; box-shadow: 0 2px 4px rgba(239,68,68,0.2);" onmouseover="this.style.background='#dc2626'; this.style.transform='translateY(-1px)'; this.style.boxShadow='0 4px 6px rgba(239,68,68,0.3)'" onmouseout="this.style.background='#ef4444'; this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 4px rgba(239,68,68,0.2)'">✕ মুছুন</button>` : ''}
                            </div>
                            <div style="margin-top:8px; min-height:20px; text-align:center;">
                                <span class="save-status-${id}" style="font-size:13px; font-weight:500; display:inline-block; padding:4px 12px; border-radius:4px;"></span>
                            </div>
                            </div>
                        `;
                        
                        // Set initial edit mode
                        setTimeout(() => {
                            if(!isNew) {
                                setCardEditMode(card, false);
                            }
                            attachLiveHandlers(card);
                            // Ensure button text is correct for existing items
                            if(!isNew){
                                const saveBtn = card.querySelector('.save-btn');
                                if(saveBtn) saveBtn.textContent = '✓ আপডেট';
                            }
                        }, 50);
                        
                        return card;
                    }
                    
                    function setCardEditMode(card, isEditing){
                        if(!card) return;
                        
                        card.dataset.editMode = isEditing ? 'true' : 'false';
                        
                        // Toggle editable fields
                        const fields = card.querySelectorAll('.editable-field');
                        fields.forEach(field => {
                            field.readOnly = !isEditing;
                            field.disabled = !isEditing;
                            field.style.backgroundColor = isEditing ? '#ffffff' : '#f9fafb';
                            field.style.cursor = isEditing ? 'text' : 'not-allowed';
                            field.style.opacity = isEditing ? '1' : '0.7';
                        });
                        
                        // Toggle buttons visibility
                        const editBtn = card.querySelector('.edit-mode-btn');
                        const saveBtn = card.querySelector('.save-btn');
                        const cancelBtn = card.querySelector('.cancel-edit-btn');
                        const deleteBtn = card.querySelector('.delete-btn');
                        const imageUpload = card.querySelector('.image-upload-section');
                        
                        if(editBtn) editBtn.style.display = isEditing ? 'none' : 'inline-block';
                        if(saveBtn) saveBtn.style.display = isEditing ? 'inline-block' : 'none';
                        if(cancelBtn) cancelBtn.style.display = isEditing ? 'inline-block' : 'none';
                        if(deleteBtn) deleteBtn.style.display = isEditing ? 'none' : 'inline-block';
                        if(imageUpload) {
                            const fileInput = imageUpload.querySelector('.sm-image');
                            if(fileInput) fileInput.style.display = isEditing ? 'block' : 'none';
                        }
                    }
                    
                    window.toggleEditMode = function(id){
                        const card = document.querySelector(`[data-social-id="${id}"]`);
                        if(!card) return;
                        
                        const currentMode = card.dataset.editMode === 'true';
                        setCardEditMode(card, !currentMode);
                        
                        // If canceling edit, restore original values
                        if(currentMode){
                            // Find the original item data
                            const originalItem = items.find(item => item.id == id);
                            if(originalItem){
                                card.querySelector('.sm-title').value = originalItem.title || '';
                                card.querySelector('.sm-subtitle').value = originalItem.content || '';
                                card.querySelector('.sm-link').value = originalItem.link || '';
                            }
                            // Broadcast preview after restoring values
                            broadcastPreview();
                        }
                    }

                    async function loadItems(){
                        const dashStatusText = document.getElementById('dashStatusText');
                        const dashStatusIndicator = document.getElementById('dashStatusIndicator');
                        
                        if(dashStatusText) dashStatusText.textContent = 'ডাটাবেস থেকে লোড হচ্ছে...';
                        if(dashStatusIndicator){
                            dashStatusIndicator.style.background = '#3b82f6';
                            dashStatusIndicator.style.boxShadow = '0 0 6px #3b82f6';
                        }
                        
                        try{
                            const res = await fetch('/api/social-media?_=' + Date.now(), {
                                headers: { 'Accept': 'application/json' },
                                cache: 'no-store'
                            });
                            if(!res.ok) throw new Error('Failed to load social media');
                            items = await res.json();
                            container.innerHTML = '';
                            if(items.length===0){
                                container.innerHTML = '<div style="grid-column: 1 / -1; text-align: center; padding: 2rem; color: #666;">কোনো আইটেম নেই। "আইটেম যোগ করুন" বাটনে ক্লিক করে নতুন আইটেম যোগ করুন।</div>';
                                // Broadcast empty preview
                                broadcastPreview();
                            } else {
                                // Clear container first to prevent duplicates
                                container.innerHTML = '';
                                // Remove duplicates from items array based on ID
                                const uniqueItems = [];
                                const seenIds = new Set();
                                items.forEach(it => {
                                    if(!seenIds.has(it.id)){
                                        seenIds.add(it.id);
                                        uniqueItems.push(it);
                                    }
                                });
                                items = uniqueItems;
                                
                                items.forEach((it, idx)=>{ 
                                    container.appendChild(createCard(it, idx)); 
                                });
                                
                                // After DOM is ready, attach handlers and broadcast initial preview
                                setTimeout(() => {
                                    attachLiveHandlers();
                                    broadcastPreview();
                                }, 100);
                            }
                            
                            if(dashStatusText) dashStatusText.textContent = 'ডাটাবেস সংযুক্ত';
                            if(dashStatusIndicator){
                                dashStatusIndicator.style.background = '#10b981';
                                dashStatusIndicator.style.boxShadow = '0 0 6px #10b981';
                            }
                        }catch(err){
                            console.error('Error loading social items:', err);
                            container.innerHTML = '<div style="grid-column: 1 / -1; text-align: center; padding: 2rem; color: #ef4444;">সোশ্যাল মিডিয়া লোড করতে সমস্যা হয়েছে।</div>';
                            
                            if(dashStatusText) dashStatusText.textContent = 'লোড ব্যর্থ';
                            if(dashStatusIndicator){
                                dashStatusIndicator.style.background = '#ef4444';
                                dashStatusIndicator.style.boxShadow = '0 0 6px #ef4444';
                            }
                        }
                    }

                    

                    // Create confirmation modal
                    function showConfirmModal(title, message, onConfirm) {
                        const overlay = document.createElement('div');
                        overlay.id = 'confirmOverlay';
                        overlay.style.cssText = 'display:block; position:fixed; inset:0; background:rgba(0,0,0,0.5); z-index:9998; backdrop-filter:blur(4px);';
                        
                        const modal = document.createElement('div');
                        modal.id = 'confirmModal';
                        modal.style.cssText = 'display:flex; position:fixed; inset:0; z-index:9999; align-items:center; justify-content:center;';
                        
                        modal.innerHTML = `
                            <div style="background:#ffffff; width:90%; max-width:420px; border-radius:12px; box-shadow:0 20px 40px rgba(0,0,0,0.25); overflow:hidden; animation:modalSlideIn 0.3s ease-out;">
                                <div style="padding:18px 20px; border-bottom:1px solid #eef2f7; display:flex; align-items:center; gap:10px;">
                                    <div style="width:36px; height:36px; border-radius:50%; background:#fef3c7; color:#d97706; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:20px;">!</div>
                                    <div style="font-size:18px; font-weight:700; color:#0f172a;">${title}</div>
                                </div>
                                <div style="padding:18px 20px; color:#334155; font-size:15px; line-height:1.6;">
                                    ${message}
                                </div>
                                <div style="padding:14px 16px; display:flex; gap:10px; justify-content:flex-end; background:#f8fafc; border-top:1px solid #eef2f7;">
                                    <button type="button" id="modalCancelBtn" style="padding:10px 20px; background:#e5e7eb; color:#111827; border:none; border-radius:8px; font-weight:600; cursor:pointer; transition:all 0.2s;" onmouseover="this.style.background='#d1d5db'" onmouseout="this.style.background='#e5e7eb'">না</button>
                                    <button type="button" id="modalConfirmBtn" style="padding:10px 20px; background:#0a4d2e; color:#fff; border:none; border-radius:8px; font-weight:600; cursor:pointer; transition:all 0.2s;" onmouseover="this.style.background='#0d6639'" onmouseout="this.style.background='#0a4d2e'">হ্যাঁ</button>
                                </div>
                            </div>
                        `;
                        
                        document.body.appendChild(overlay);
                        document.body.appendChild(modal);
                        
                        const closeModal = () => {
                            overlay.remove();
                            modal.remove();
                        };
                        
                        document.getElementById('modalCancelBtn').onclick = closeModal;
                        overlay.onclick = closeModal;
                        
                        document.getElementById('modalConfirmBtn').onclick = () => {
                            closeModal();
                            if (onConfirm) onConfirm();
                        };
                        
                        // ESC key to close
                        const escHandler = (e) => {
                            if (e.key === 'Escape') {
                                closeModal();
                                window.removeEventListener('keydown', escHandler);
                            }
                        };
                        window.addEventListener('keydown', escHandler);
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
                            showConfirmModal('ত্রুটি', 'অনুগ্রহ করে শিরোনাম পূরণ করুন।', null);
                            return;
                        }
                        
                        const isNew = id.toString().startsWith('new_');
                        const actionText = isNew ? 'সংরক্ষণ' : 'আপডেট';
                        
                        showConfirmModal(
                            `${actionText} নিশ্চিতকরণ`,
                            `আপনি কি এই আইটেমটি ${actionText} করতে চান?`,
                            async () => {
                                await performSave(id, card, title, content, link, imageFile, statusEl, isNew);
                            }
                        );
                    };
                    
                    async function performSave(id, card, title, content, link, imageFile, statusEl, isNew){
                        if(statusEl){ 
                            statusEl.textContent='সংরক্ষণ করা হচ্ছে...'; 
                            statusEl.style.color='#666'; 
                            statusEl.style.background='#f3f4f6';
                        }
                        try{
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
                                if(statusEl){ 
                                    statusEl.textContent='✓ সফলভাবে সংরক্ষিত হয়েছে'; 
                                    statusEl.style.color='#059669'; 
                                    statusEl.style.background='#d1fae5';
                                    setTimeout(()=>{ statusEl.textContent=''; statusEl.style.background='transparent'; }, 4000); 
                                }
                                try{ localStorage.setItem('refreshSocialMedia', String(Date.now())); }catch(_){ }
                                // Don't reload items - keep the current card as is
                                // Update the card's data-social-id if it was a new item
                                const wasNew = id.toString().startsWith('new_');
                                if(wasNew && result.data && result.data.id){
                                    card.setAttribute('data-social-id', result.data.id);
                                    // Update button text from "সংরক্ষণ" to "আপডেট"
                                    const saveBtn = card.querySelector('.btn.btn-primary');
                                    if(saveBtn) saveBtn.textContent = '✓ আপডেট';
                                    
                                    // Add edit button in header
                                    const headerBtns = card.querySelector('[style*="display:flex; gap:8px"]');
                                    if(headerBtns && !card.querySelector('.edit-mode-btn')){
                                        const editBtn = document.createElement('button');
                                        editBtn.type = 'button';
                                        editBtn.className = 'edit-mode-btn';
                                        editBtn.onclick = () => toggleEditMode(result.data.id);
                                        editBtn.textContent = '✎ সম্পাদনা';
                                        editBtn.style = 'background:#3b82f6; color:white; border:none; border-radius:6px; padding:6px 12px; font-size:12px; cursor:pointer; font-weight:500; transition: all 0.2s; display:none;';
                                        editBtn.onmouseover = function(){ this.style.background='#2563eb'; };
                                        editBtn.onmouseout = function(){ this.style.background='#3b82f6'; };
                                        headerBtns.insertBefore(editBtn, headerBtns.firstChild);
                                    }
                                    
                                    // Add cancel button if not exists
                                    const btnContainer = card.querySelector('.action-buttons');
                                    if(btnContainer && !card.querySelector('.cancel-edit-btn')){
                                        const cancelBtn = document.createElement('button');
                                        cancelBtn.type = 'button';
                                        cancelBtn.className = 'cancel-edit-btn';
                                        cancelBtn.onclick = () => toggleEditMode(result.data.id);
                                        cancelBtn.textContent = '✕ বাতিল';
                                        cancelBtn.style = 'padding:10px 20px; font-size:14px; font-weight:600; background:#6b7280; border:none; border-radius:6px; color:white; cursor:pointer; transition: all 0.2s; box-shadow: 0 2px 4px rgba(107,114,128,0.2); display:none;';
                                        cancelBtn.onmouseover = function(){ this.style.background='#4b5563'; this.style.transform='translateY(-1px)'; this.style.boxShadow='0 4px 6px rgba(107,114,128,0.3)'; };
                                        cancelBtn.onmouseout = function(){ this.style.background='#6b7280'; this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 4px rgba(107,114,128,0.2)'; };
                                        saveBtn.parentNode.insertBefore(cancelBtn, saveBtn.nextSibling);
                                    }
                                    
                                    // Add delete button if not exists
                                    if(btnContainer && !card.querySelector('.delete-btn')){
                                        const deleteBtn = document.createElement('button');
                                        deleteBtn.type = 'button';
                                        deleteBtn.className = 'delete-btn';
                                        deleteBtn.onclick = () => deleteSocialItem(result.data.id);
                                        deleteBtn.textContent = '✕ মুছুন';
                                        deleteBtn.style = 'padding:10px 20px; font-size:14px; font-weight:600; background:#ef4444; border:none; border-radius:6px; color:white; cursor:pointer; transition: all 0.2s; box-shadow: 0 2px 4px rgba(239,68,68,0.2);';
                                        deleteBtn.onmouseover = function(){ this.style.background='#dc2626'; this.style.transform='translateY(-1px)'; this.style.boxShadow='0 4px 6px rgba(239,68,68,0.3)'; };
                                        deleteBtn.onmouseout = function(){ this.style.background='#ef4444'; this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 4px rgba(239,68,68,0.2)'; };
                                        const cancelBtn = card.querySelector('.cancel-edit-btn');
                                        if(cancelBtn){
                                            cancelBtn.parentNode.insertBefore(deleteBtn, cancelBtn.nextSibling);
                                        }
                                    }
                                    
                                    // Update items array with new item (check for duplicates first)
                                    const existingIndex = items.findIndex(item => item.id == result.data.id);
                                    if(existingIndex === -1){
                                        items.push({
                                            id: result.data.id,
                                            title: title,
                                            content: content,
                                            link: link,
                                            image_url: result.data.image_url || ''
                                        });
                                    }
                                    
                                    // Exit edit mode after successful save for new items
                                    setCardEditMode(card, false);
                                }
                                
                                // Exit edit mode after successful save for existing items
                                if(!wasNew){
                                    setCardEditMode(card, false);
                                    // Update items array with updated values
                                    const itemIndex = items.findIndex(item => item.id == id);
                                    if(itemIndex !== -1){
                                        items[itemIndex].title = title;
                                        items[itemIndex].content = content;
                                        items[itemIndex].link = link;
                                        if(result.data.image_url) items[itemIndex].image_url = result.data.image_url;
                                    }
                                }
                                
                                saveCardsToStorage();
                                // Broadcast preview immediately after successful save
                                setTimeout(broadcastPreview, 50);
                            } else {
                                if(statusEl){ 
                                    statusEl.textContent='✗ সংরক্ষণ ব্যর্থ হয়েছে'; 
                                    statusEl.style.color='#dc2626'; 
                                    statusEl.style.background='#fee2e2';
                                    setTimeout(()=>{ statusEl.textContent=''; statusEl.style.background='transparent'; }, 4000);
                                }
                                if(typeof alertUser==='function'){ alertUser('ত্রুটি','কিছু ভুল হয়েছে। আবার চেষ্টা করুন।'); }
                            }
                        }catch(err){
                            console.error(err);
                            if(statusEl){ 
                                statusEl.textContent='✗ নেটওয়ার্ক ত্রুটি'; 
                                statusEl.style.color='#dc2626'; 
                                statusEl.style.background='#fee2e2';
                                setTimeout(()=>{ statusEl.textContent=''; statusEl.style.background='transparent'; }, 4000);
                            }
                            if(typeof alertUser==='function'){ alertUser('ত্রুটি','নেটওয়ার্ক সংযোগ ত্রুটি। আবার চেষ্টা করুন।'); }
                        }
                    }

                    window.deleteSocialItem = async function(id){
                        const card = document.querySelector(`[data-social-id="${id}"]`);
                        const statusEl = card?.querySelector(`.save-status-${id}`);
                        
                        showConfirmModal(
                            'মুছে ফেলার নিশ্চিতকরণ',
                            'আপনি কি নিশ্চিত এই আইটেমটি মুছে ফেলতে চান? এই কাজটি পূর্বাবস্থায় ফেরানো যাবে না।',
                            async () => {
                                await performDelete(id, card, statusEl);
                            }
                        );
                    };
                    
                    async function performDelete(id, card, statusEl){
                        
                        if(statusEl){
                            statusEl.textContent='মুছে ফেলা হচ্ছে...';
                            statusEl.style.color='#666';
                            statusEl.style.background='#f3f4f6';
                        }
                        
                        try{
                            const token = (document.querySelector('meta[name="csrf-token"]').content || document.getElementById('csrfToken')?.value || '').toString();
                            const resp = await fetch(`/admin/social-media/${id}`, { method:'DELETE', headers:{ 'X-CSRF-TOKEN': token, 'Accept':'application/json' } });
                            const result = await resp.json();
                            if(result.success){
                                if(typeof alertUser==='function'){ alertUser('সফল', 'আইটেমটি সফলভাবে মুছে ফেলা হয়েছে।'); }
                                // Fade out animation before removing
                                if(card){
                                    card.style.transition = 'all 0.3s ease';
                                    card.style.opacity = '0';
                                    card.style.transform = 'scale(0.95)';
                                    setTimeout(() => {
                                        card.remove();
                                        // Update items array
                                        const itemIndex = items.findIndex(item => item.id == id);
                                        if(itemIndex !== -1){
                                            items.splice(itemIndex, 1);
                                        }
                                        // Check if container is empty
                                        const container = document.getElementById('socialItemsContainer');
                                        if(container && container.querySelectorAll('.card-editor').length === 0){
                                            container.innerHTML = '<div style="grid-column: 1 / -1; text-align: center; padding: 2rem; color: #666;">কোনো আইটেম নেই। "আইটেম যোগ করুন" বাটনে ক্লিক করে নতুন আইটেম যোগ করুন।</div>';
                                        }
                                        // Broadcast preview after deletion
                                        broadcastPreview();
                                    }, 300);
                                }
                                try{ localStorage.setItem('refreshSocialMedia', String(Date.now())); }catch(_){ }
                            } else {
                                if(statusEl){
                                    statusEl.textContent='✗ মুছতে ব্যর্থ';
                                    statusEl.style.color='#dc2626';
                                    statusEl.style.background='#fee2e2';
                                    setTimeout(()=>{ statusEl.textContent=''; statusEl.style.background='transparent'; }, 3000);
                                }
                                if(typeof alertUser==='function'){ alertUser('ত্রুটি','আইটেম মুছতে সমস্যা হয়েছে।'); }
                            }
                        }catch(err){ 
                            console.error(err); 
                            if(statusEl){
                                statusEl.textContent='✗ নেটওয়ার্ক ত্রুটি';
                                statusEl.style.color='#dc2626';
                                statusEl.style.background='#fee2e2';
                                setTimeout(()=>{ statusEl.textContent=''; statusEl.style.background='transparent'; }, 3000);
                            }
                            if(typeof alertUser==='function'){ alertUser('ত্রুটি','নেটওয়ার্ক সংযোগ ত্রুটি।'); } 
                        }
                    }

                    window.previewSocialImage = function(input, id){
                        const previewDiv = document.querySelector(`.image-preview-${id}`);
                        if(input.files && input.files[0]){
                            const file = input.files[0];
                            // Validate file size (max 5MB)
                            if(file.size > 5 * 1024 * 1024){
                                if(typeof alertUser==='function'){ alertUser('ত্রুটি','ফাইলের আকার ৫ এমবি এর কম হতে হবে।'); }
                                input.value = '';
                                return;
                            }
                            // Validate file type
                            if(!file.type.startsWith('image/')){
                                if(typeof alertUser==='function'){ alertUser('ত্রুটি','অনুগ্রহ করে একটি ছবি ফাইল নির্বাচন করুন।'); }
                                input.value = '';
                                return;
                            }
                            const reader = new FileReader();
                            reader.onload = function(e){
                                previewDiv.innerHTML = `<img src="${e.target.result}" alt="Preview" style="max-width:100%; max-height:150px; border-radius:8px; border:2px solid #e5e7eb; box-shadow: 0 2px 4px rgba(0,0,0,0.1);" />`;
                                broadcastPreview();
                            };
                            reader.readAsDataURL(file);
                        }
                    }

                    window.removeCardFromForm = function(id){
                        const card = document.querySelector(`[data-social-id="${id}"]`);
                        if(!card) return;
                        
                        showConfirmModal(
                            'সরানোর নিশ্চিতকরণ',
                            'আপনি কি এই আইটেমটি ফর্ম থেকে সরাতে চান?',
                            () => {
                                // Just remove from DOM, don't delete from database
                                card.style.transition = 'all 0.3s ease';
                                card.style.opacity = '0';
                                card.style.transform = 'scale(0.95)';
                                setTimeout(() => {
                                    card.remove();
                                    broadcastPreview();
                                    saveCardsToStorage();
                                    updateDashboardStatus();
                                }, 300);
                            }
                        );
                    }

                    document.getElementById('addSocialItemBtn').addEventListener('click', ()=>{
                        showConfirmModal(
                            'নতুন আইটেম যোগ করুন',
                            'আপনি কি একটি নতুন সোশ্যাল মিডিয়া আইটেম যোগ করতে চান?',
                            () => {
                                // Remove "no items" message if it exists
                                const noItemsMsg = container.querySelector('div[style*="grid-column: 1 / -1"]');
                                if(noItemsMsg && noItemsMsg.textContent.includes('কোনো আইটেম নেই')){
                                    noItemsMsg.remove();
                                }
                                
                                const card = createCard();
                                container.appendChild(card);
                                card.scrollIntoView({ behavior:'smooth', block:'nearest' });
                                broadcastPreview();
                                saveCardsToStorage();
                                updateDashboardStatus();
                            }
                        );
                    });

                    // Initialize: Load items from API to get fresh data
                    loadItems();
                    
                })();
            </script>
        </div>
    </div>

    <div id="home-hero-slider" style="margin-top:1rem;">
        <div class="table-card">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:0.5rem;">
                <div>
                    <h2 style="margin:0 0 0.5rem 0;">হিরো স্লাইডার ম্যানেজমেন্ট</h2>
                    <div id="heroSliderStatus" style="display: flex; align-items: center; gap: 8px; font-size: 13px; color: #6b7280;">
                        <span id="heroStatusIndicator" style="width: 8px; height: 8px; border-radius: 50%; background: #10b981; box-shadow: 0 0 6px #10b981;"></span>
                        <span id="heroStatusText">ডাটাবেস সংযুক্ত</span>
                        <span id="heroItemCount" style="margin-left: 8px; padding: 2px 8px; background: #e0f2fe; color: #0369a1; border-radius: 12px; font-weight: 500;">0 টি স্লাইড</span>
                    </div>
                </div>
                <button id="addHeroSlideBtn" class="btn btn-primary" type="button" style="display:flex; align-items:center; gap:8px;">
                    <span>+</span>
                    <span>স্লাইড যোগ করুন</span>
                </button>
            </div>
            <input type="hidden" id="csrfTokenHero" value="{{ csrf_token() }}">
            <style>
                #home-hero-slider .hero-slider-grid { 
                    display: grid;
                    gap: 16px;
                }
                #home-hero-slider .slider-card-editor { 
                    border:1px solid #e5e7eb; 
                    border-radius:12px; 
                    padding:16px; 
                    background:#fafafa; 
                    position:relative;
                }
                #home-hero-slider .slider-card-editor h4 { 
                    margin:0 0 12px; 
                    font-size:15px; 
                    display:flex; 
                    justify-content:space-between; 
                    align-items:center;
                    color: #0a4d2e;
                    font-weight: 600;
                }
                #home-hero-slider .slider-card-editor input[type="text"],
                #home-hero-slider .slider-card-editor input[type="url"],
                #home-hero-slider .slider-card-editor input[type="number"],
                #home-hero-slider .slider-card-editor select,
                #home-hero-slider .slider-card-editor textarea {
                    height:46px; 
                    padding:10px 12px; 
                    font-size:15px; 
                    border-radius:10px; 
                    width:100%; 
                    box-sizing:border-box; 
                    border:1px solid #e5e7eb;
                    margin-bottom: 8px;
                }
                #home-hero-slider .slider-card-editor textarea { 
                    height:auto; 
                    min-height:80px; 
                    resize:vertical; 
                }
                #home-hero-slider .slider-card-editor .image-preview {
                    margin: 8px 0;
                    max-width: 100%;
                    border-radius: 8px;
                    overflow: hidden;
                }
                #home-hero-slider .slider-card-editor .image-preview img {
                    width: 100%;
                    max-height: 200px;
                    object-fit: cover;
                    border-radius: 8px;
                }
                #home-hero-slider .slider-card-editor .delete-btn { 
                    background:#ef4444; 
                    color:#fff; 
                    border:none; 
                    padding:10px 16px; 
                    border-radius:6px; 
                    cursor:pointer; 
                    font-size:14px; 
                    font-weight:500; 
                }
                #home-hero-slider .slider-card-editor .save-btn { 
                    background:#10b981; 
                    color:#fff; 
                    border:none; 
                    padding:10px 16px; 
                    border-radius:6px; 
                    cursor:pointer; 
                    font-size:14px; 
                    font-weight:500; 
                    margin-right: 8px;
                }
                #home-hero-slider .form-row {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 12px;
                }
                @media (max-width: 960px){ 
                    #home-hero-slider .form-row { 
                        grid-template-columns:1fr 
                    } 
                }
            </style>
            
            <div class="hero-slider-form">
                <div id="heroSliderContainer" class="hero-slider-grid"></div>
            </div>
            <script>
                (function(){
                    const container = document.getElementById('heroSliderContainer');
                    const addBtn = document.getElementById('addHeroSlideBtn');
                    const statusText = document.getElementById('heroStatusText');
                    const statusIndicator = document.getElementById('heroStatusIndicator');
                    const itemCount = document.getElementById('heroItemCount');
                    const csrfToken = document.getElementById('csrfTokenHero').value;
                    
                    let sliders = [];
                    let sliderCounter = 0;

                    function updateStatus(text, isError = false) {
                        statusText.textContent = text;
                        statusIndicator.style.background = isError ? '#ef4444' : '#10b981';
                        statusIndicator.style.boxShadow = isError ? '0 0 6px #ef4444' : '0 0 6px #10b981';
                    }

                    function updateItemCount() {
                        itemCount.textContent = `${sliders.length} টি স্লাইড`;
                    }

                    async function loadSliders() {
                        try {
                            const response = await fetch('/admin/hero-sliders');
                            if (!response.ok) throw new Error('Failed to load');
                            sliders = await response.json();
                            renderSliders();
                            updateStatus('ডাটাবেস সংযুক্ত');
                            updateItemCount();
                        } catch (error) {
                            console.error('Error loading sliders:', error);
                            updateStatus('লোড করতে ব্যর্থ', true);
                        }
                    }

                    function createSliderCard(slider = null, index = null) {
                        const id = slider ? slider.id : 'new_' + (++sliderCounter);
                        const isNew = !slider;
                        const displayIndex = index !== null ? index + 1 : (sliders.length + 1);
                        
                        const card = document.createElement('div');
                        card.className = 'slider-card-editor';
                        card.dataset.sliderId = id;
                        
                        const escapeHtml = (str) => (str || '').replace(/"/g, '&quot;').replace(/\n/g, '&#10;');
                        
                        card.innerHTML = `
                            <h4>
                                <span>স্লাইড ${displayIndex}</span>
                                <div style="display:flex; gap:8px;">
                                    <label style="display:flex; align-items:center; gap:4px; font-weight:normal; font-size:13px;">
                                        <input type="checkbox" class="slider-active" ${slider?.is_active !== false ? 'checked' : ''} />
                                        <span>সক্রিয়</span>
                                    </label>
                                </div>
                            </h4>
                            
                            <div style="margin-bottom:12px;">
                                <label style="display:block; margin-bottom:4px; font-size:13px; font-weight:500;">স্লাইড ছবি</label>
                                <input type="file" class="slider-image" accept="image/*" style="width:100%; padding:6px; border:1px solid #e5e7eb; border-radius:6px;" />
                                <div class="image-preview-${id}" style="margin-top:8px;">
                                    ${slider?.image_url ? `<img src="${slider.image_url}" alt="Preview" style="max-width:100%; max-height:200px; border-radius:8px; border:1px solid #e5e7eb;" />` : ''}
                                </div>
                            </div>

                            <input type="text" class="slider-title" placeholder="শিরোনাম (যেমন: আপনার স্বপ্নের বাড়ি)" value="${escapeHtml(slider?.title)}" />
                            <input type="text" class="slider-subtitle" placeholder="সাব-টাইটেল (যেমন: জলজোছনা প্রজেক্টে)" value="${escapeHtml(slider?.subtitle)}" />
                            <textarea class="slider-description" placeholder="বিবরণ">${escapeHtml(slider?.description)}</textarea>
                            
                            <div class="form-row">
                                <input type="text" class="slider-primary-btn-text" placeholder="প্রাইমারি বাটন টেক্সট" value="${escapeHtml(slider?.primary_button_text)}" />
                                <input type="text" class="slider-primary-btn-link" placeholder="প্রাইমারি বাটন লিংক" value="${escapeHtml(slider?.primary_button_link)}" />
                            </div>
                            
                            <div class="form-row">
                                <input type="text" class="slider-secondary-btn-text" placeholder="সেকেন্ডারি বাটন টেক্সট" value="${escapeHtml(slider?.secondary_button_text)}" />
                                <input type="text" class="slider-secondary-btn-link" placeholder="সেকেন্ডারি বাটন লিংক" value="${escapeHtml(slider?.secondary_button_link)}" />
                            </div>

                            <input type="number" class="slider-order" placeholder="ক্রম (Order)" value="${slider?.order || 0}" min="0" />
                            
                            <div style="margin-top:12px; display:flex; gap:8px;">
                                <button class="save-btn" onclick="saveSlider('${id}', ${isNew})">সেভ করুন</button>
                                ${!isNew ? `<button class="delete-btn" onclick="deleteSlider('${id}')">ডিলিট করুন</button>` : ''}
                            </div>
                        `;
                        
                        return card;
                    }

                    function renderSliders() {
                        container.innerHTML = '';
                        sliders.forEach((slider, index) => {
                            container.appendChild(createSliderCard(slider, index));
                        });
                    }

                    window.saveSlider = async function(id, isNew) {
                        const card = document.querySelector(`[data-slider-id="${id}"]`);
                        if (!card) return;

                        const formData = new FormData();
                        formData.append('title', card.querySelector('.slider-title').value);
                        formData.append('subtitle', card.querySelector('.slider-subtitle').value);
                        formData.append('description', card.querySelector('.slider-description').value);
                        formData.append('primary_button_text', card.querySelector('.slider-primary-btn-text').value);
                        formData.append('primary_button_link', card.querySelector('.slider-primary-btn-link').value);
                        formData.append('secondary_button_text', card.querySelector('.slider-secondary-btn-text').value);
                        formData.append('secondary_button_link', card.querySelector('.slider-secondary-btn-link').value);
                        formData.append('order', card.querySelector('.slider-order').value);
                        formData.append('is_active', card.querySelector('.slider-active').checked ? '1' : '0');
                        
                        const imageInput = card.querySelector('.slider-image');
                        if (imageInput.files.length > 0) {
                            formData.append('image', imageInput.files[0]);
                        }

                        try {
                            const url = isNew ? '/admin/hero-sliders' : `/admin/hero-sliders/${id}`;
                            const method = isNew ? 'POST' : 'PUT';
                            
                            const options = {
                                method: method,
                                headers: {
                                    'X-CSRF-TOKEN': csrfToken
                                },
                                body: formData
                            };

                            // For PUT requests, we need to add _method field
                            if (!isNew) {
                                formData.append('_method', 'PUT');
                                options.method = 'POST';
                            }

                            const response = await fetch(url, options);
                            
                            if (!response.ok) {
                                const errorData = await response.json();
                                throw new Error(errorData.message || 'Failed to save');
                            }

                            updateStatus(isNew ? 'নতুন স্লাইড যোগ হয়েছে' : 'স্লাইড আপডেট হয়েছে');
                            await loadSliders();
                            
                            // Trigger refresh on frontend
                            try {
                                localStorage.setItem('refreshHeroSlider', Date.now().toString());
                            } catch(e) {}
                            
                        } catch (error) {
                            console.error('Error saving slider:', error);
                            updateStatus('সেভ করতে ব্যর্থ', true);
                            alert('স্লাইডার সেভ করতে সমস্যা হয়েছে');
                        }
                    };

                    window.deleteSlider = async function(id) {
                        if (!confirm('আপনি কি এই স্লাইডটি ডিলিট করতে চান?')) return;

                        try {
                            const response = await fetch(`/admin/hero-sliders/${id}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': csrfToken,
                                    'Content-Type': 'application/json'
                                }
                            });

                            if (!response.ok) throw new Error('Failed to delete');

                            updateStatus('স্লাইড ডিলিট হয়েছে');
                            await loadSliders();
                            
                            // Trigger refresh on frontend
                            try {
                                localStorage.setItem('refreshHeroSlider', Date.now().toString());
                            } catch(e) {}
                            
                        } catch (error) {
                            console.error('Error deleting slider:', error);
                            updateStatus('ডিলিট করতে ব্যর্থ', true);
                            alert('স্লাইডার ডিলিট করতে সমস্যা হয়েছে');
                        }
                    };

                    addBtn.addEventListener('click', () => {
                        const newCard = createSliderCard();
                        container.insertBefore(newCard, container.firstChild);
                    });

                    // Load sliders on page load
                    loadSliders();
                    
                    // Reload sliders every 30 seconds
                    setInterval(loadSliders, 30000);
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
