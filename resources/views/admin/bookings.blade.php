<div id="bookings" class="tab-content">
    <div class="stats-grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); margin-bottom: 0.5rem;">
        <div class="stat-card">
            <div class="stat-card-content">
                <div class="stat-info">
                    <h3>মোট বুকিং</h3>
                    <div class="stat-number" id="totalBookings">0</div>
                </div>
                <div class="stat-icon blue">📋</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-card-content">
                <div class="stat-info">
                    <h3>নতুন বুকিং</h3>
                    <div class="stat-number" id="newBookings">0</div>
                </div>
                <div class="stat-icon green">✓</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-card-content">
                <div class="stat-info">
                    <h3>নির্বাচিত</h3>
                    <div class="stat-number" id="selectedCount">0</div>
                </div>
                <div class="stat-icon purple">☑</div>
            </div>
        </div>
    </div>

    <input type="hidden" id="csrfTokenBookings" value="{{ csrf_token() }}">

    <style>
        .bookings-table-card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            margin-top: 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .bookings-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 15px;
        }
        .bookings-header h2 {
            margin: 0;
            font-size: 1.5rem;
            color: #0a4d2e;
            font-weight: 700;
        }
        .bookings-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            align-items: center;
        }
        .bulk-delete-btn {
            background: #ef4444;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: none;
        }
        .bulk-delete-btn.show {
            display: inline-block;
        }
        .bulk-delete-btn:hover {
            background: #dc2626;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
        }
        .refresh-btn {
            background: linear-gradient(135deg, #0a4d2e 0%, #0d6639 100%);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }
        .refresh-btn:hover {
            background: linear-gradient(135deg, #064029 0%, #0a4d2e 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(10, 77, 46, 0.4);
        }
        .download-btn {
            background: linear-gradient(135deg, #0a4d2e 0%, #0d6639 100%);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }
        .download-btn:hover {
            background: linear-gradient(135deg, #064029 0%, #0a4d2e 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(10, 77, 46, 0.4);
        }
        .bookings-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .bookings-table thead {
            background: linear-gradient(135deg, #0a4d2e 0%, #0d6639 100%);
            color: white;
        }
        .bookings-table th {
            padding: 14px 12px;
            text-align: left;
            font-weight: 600;
            font-size: 14px;
        }
        .bookings-table td {
            padding: 14px 12px;
            border-bottom: 1px solid #e5e7eb;
            font-size: 14px;
        }
        .bookings-table tbody tr {
            transition: all 0.2s;
        }
        .bookings-table tbody tr:hover {
            background: #f9fafb;
        }
        .bookings-table tbody tr.selected {
            background: #eff6ff;
        }
        .status-badge {
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
        }
        .status-pending {
            background: #fef3c7;
            color: #92400e;
        }
        .status-contacted {
            background: #dbeafe;
            color: #1e40af;
        }
        .status-completed {
            background: #d1fae5;
            color: #065f46;
        }
        .action-btn {
            padding: 6px 12px;
            border: none;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            margin: 0 3px;
        }
        .action-btn.delete {
            background: #fee2e2;
            color: #991b1b;
        }
        .action-btn.delete:hover {
            background: #fecaca;
        }
        .action-btn.view {
            background: #dbeafe;
            color: #1e40af;
        }
        .action-btn.view:hover {
            background: #bfdbfe;
        }
        .checkbox-cell {
            width: 40px;
            text-align: center;
        }
        .checkbox-cell input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #6b7280;
        }
        .empty-state-icon {
            font-size: 64px;
            margin-bottom: 16px;
            opacity: 0.5;
        }
        
        /* Mobile Responsive Styles */
        @media (max-width: 768px) {
            .bookings-table-card {
                padding: 16px;
                border-radius: 10px;
            }
            .bookings-header {
                flex-direction: column;
                align-items: stretch;
                gap: 12px;
            }
            .bookings-header h2 {
                font-size: 1.25rem;
                text-align: center;
            }
            .bookings-actions {
                justify-content: center;
                gap: 8px;
            }
            .bookings-actions button {
                flex: 1;
                min-width: 0;
                font-size: 12px;
                padding: 8px 12px;
            }
            .bookings-table {
                font-size: 12px;
                display: block;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
            .bookings-table thead,
            .bookings-table tbody,
            .bookings-table th,
            .bookings-table td,
            .bookings-table tr {
                display: block;
            }
            .bookings-table thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }
            .bookings-table tbody tr {
                border: 1px solid #e5e7eb;
                margin-bottom: 12px;
                border-radius: 8px;
                padding: 12px;
                background: white;
            }
            .bookings-table td {
                border: none;
                position: relative;
                padding: 8px 12px 8px 45%;
                text-align: right;
                min-height: 40px;
                display: flex;
                align-items: center;
                justify-content: flex-end;
            }
            .bookings-table td:before {
                content: attr(data-label);
                position: absolute;
                left: 12px;
                width: 40%;
                padding-right: 10px;
                white-space: nowrap;
                text-align: left;
                font-weight: 600;
                color: #374151;
            }
            .checkbox-cell {
                width: auto;
                padding: 8px 12px;
                justify-content: center;
            }
            .action-btn {
                font-size: 11px;
                padding: 5px 10px;
            }
        }
        
        @media (max-width: 480px) {
            .bookings-table-card {
                padding: 12px;
            }
            .bookings-header h2 {
                font-size: 1.1rem;
            }
            .bookings-actions button {
                font-size: 11px;
                padding: 7px 10px;
            }
            .bookings-table td {
                padding: 6px 10px 6px 42%;
                font-size: 11px;
            }
            .action-btn {
                font-size: 10px;
                padding: 4px 8px;
                margin: 2px;
            }
        }
    </style>

    <div class="bookings-table-card">
        <div class="bookings-header">
            <h2>বুকিং তালিকা</h2>
            <div class="bookings-actions">
                <button class="bulk-delete-btn" id="bulkDeleteBtn" onclick="bulkDeleteBookings()">
                    🗑️ নির্বাচিত মুছুন (<span id="bulkDeleteCount">0</span>)
                </button>
                <button class="download-btn" onclick="downloadBookings()">
                    📥 ডাউনলোড করুন
                </button>
                <button class="refresh-btn" onclick="loadBookings()">
                    🔄 রিফ্রেশ
                </button>
            </div>
        </div>

        <div id="bookingsTableContainer">
            <table class="bookings-table">
                <thead>
                    <tr>
                        <th class="checkbox-cell">
                            <input type="checkbox" id="selectAllCheckbox" onchange="toggleSelectAll(this)" />
                        </th>
                        <th>#</th>
                        <th>নাম</th>
                        <th>ফোন</th>
                        <th>ইমেইল</th>
                        <th>প্লট সাইজ</th>
                        <th>বার্তা</th>
                        <th>তারিখ</th>
                        <th>স্ট্যাটাস</th>
                        <th>অ্যাকশন</th>
                    </tr>
                </thead>
                <tbody id="bookingsTableBody">
                    <tr>
                        <td colspan="10" class="empty-state">
                            <div class="empty-state-icon">📭</div>
                            <div>লোড হচ্ছে...</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        (function(){
            const csrfToken = document.getElementById('csrfTokenBookings').value;
            let bookings = [];
            let selectedIds = new Set();

            // Load all bookings
            async function loadBookings() {
                try {
                    const response = await fetch('/api/bookings');
                    if (response.ok) {
                        bookings = await response.json();
                        console.log('Loaded bookings:', bookings);
                        renderBookings();
                        updateStats();
                    }
                } catch (error) {
                    console.error('Error loading bookings:', error);
                }
            }

            // Render bookings table
            function renderBookings() {
                const tbody = document.getElementById('bookingsTableBody');
                if (!tbody) return;

                if (bookings.length === 0) {
                    tbody.innerHTML = `
                        <tr>
                            <td colspan="10" class="empty-state">
                                <div class="empty-state-icon">📭</div>
                                <div>কোনো বুকিং নেই</div>
                            </td>
                        </tr>
                    `;
                    return;
                }

                tbody.innerHTML = '';

                bookings.forEach((booking, index) => {
                    const row = document.createElement('tr');
                    if (selectedIds.has(booking.id)) {
                        row.classList.add('selected');
                    }

                    const date = new Date(booking.created_at);
                    const formattedDate = date.toLocaleDateString('bn-BD', {
                        year: 'numeric',
                        month: 'short',
                        day: 'numeric'
                    });

                    row.innerHTML = `
                        <td class="checkbox-cell" data-label="">
                            <input type="checkbox" 
                                   class="booking-checkbox" 
                                   data-id="${booking.id}" 
                                   ${selectedIds.has(booking.id) ? 'checked' : ''}
                                   onchange="toggleSelect(${booking.id}, this.checked)" />
                        </td>
                        <td data-label="#">${index + 1}</td>
                        <td data-label="নাম"><strong>${booking.name}</strong></td>
                        <td data-label="ফোন">${booking.phone}</td>
                        <td data-label="ইমেইল">${booking.email}</td>
                        <td data-label="প্লট সাইজ">${booking.plot_size || '-'}</td>
                        <td data-label="বার্তা" style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" title="${booking.message || ''}">${booking.message || '-'}</td>
                        <td data-label="তারিখ">${formattedDate}</td>
                        <td data-label="স্ট্যাটাস">
                            <select class="status-badge status-${booking.status}" onchange="updateStatus(${booking.id}, this.value)" style="border: none; background: transparent; cursor: pointer; font-weight: 600;">
                                <option value="pending" ${booking.status === 'pending' ? 'selected' : ''}>অপেক্ষমাণ</option>
                                <option value="contacted" ${booking.status === 'contacted' ? 'selected' : ''}>যোগাযোগ করা হয়েছে</option>
                                <option value="completed" ${booking.status === 'completed' ? 'selected' : ''}>সম্পন্ন</option>
                            </select>
                        </td>
                        <td data-label="অ্যাকশন">
                            <button class="action-btn view" onclick="viewBooking(${booking.id})" title="বিস্তারিত দেখুন">👁️</button>
                            <button class="action-btn delete" onclick="deleteBooking(${booking.id})" title="মুছুন">🗑️</button>
                        </td>
                    `;

                    tbody.appendChild(row);
                });
            }

            // Update statistics
            function updateStats() {
                document.getElementById('totalBookings').textContent = bookings.length;
                const newBookings = bookings.filter(b => !b.is_read).length;
                document.getElementById('newBookings').textContent = newBookings;
                document.getElementById('selectedCount').textContent = selectedIds.size;
            }

            // Toggle select all
            window.toggleSelectAll = function(checkbox) {
                const checkboxes = document.querySelectorAll('.booking-checkbox');
                checkboxes.forEach(cb => {
                    cb.checked = checkbox.checked;
                    const id = parseInt(cb.getAttribute('data-id'));
                    if (checkbox.checked) {
                        selectedIds.add(id);
                    } else {
                        selectedIds.delete(id);
                    }
                });
                updateSelectUI();
            };

            // Toggle individual select
            window.toggleSelect = function(id, checked) {
                if (checked) {
                    selectedIds.add(id);
                } else {
                    selectedIds.delete(id);
                }
                updateSelectUI();
            };

            // Update select UI
            function updateSelectUI() {
                document.getElementById('selectedCount').textContent = selectedIds.size;
                const bulkBtn = document.getElementById('bulkDeleteBtn');
                const countSpan = document.getElementById('bulkDeleteCount');
                
                if (selectedIds.size > 0) {
                    bulkBtn.classList.add('show');
                    countSpan.textContent = selectedIds.size;
                } else {
                    bulkBtn.classList.remove('show');
                }

                // Update row styling
                document.querySelectorAll('.bookings-table tbody tr').forEach(row => {
                    const checkbox = row.querySelector('.booking-checkbox');
                    if (checkbox && checkbox.checked) {
                        row.classList.add('selected');
                    } else {
                        row.classList.remove('selected');
                    }
                });
            }

            // Update booking status
            window.updateStatus = async function(id, status) {
                try {
                    const response = await fetch(`/admin/bookings/${id}/status`, {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({ status })
                    });

                    const result = await response.json();
                    if (result.success) {
                        loadBookings();
                    }
                } catch (error) {
                    console.error('Error updating status:', error);
                }
            };

            // View booking details
            window.viewBooking = function(id) {
                const booking = bookings.find(b => b.id === id);
                if (!booking) return;

                const message = `
নাম: ${booking.name}
ফোন: ${booking.phone}
ইমেইল: ${booking.email}
প্লট সাইজ: ${booking.plot_size || 'উল্লেখ নেই'}
বার্তা: ${booking.message || 'কোনো বার্তা নেই'}
তারিখ: ${new Date(booking.created_at).toLocaleString('bn-BD')}
স্ট্যাটাস: ${booking.status}
                `.trim();

                alert(message);
            };

            // Delete single booking
            window.deleteBooking = async function(id) {
                if (!confirm('আপনি কি নিশ্চিত যে আপনি এই বুকিংটি মুছে ফেলতে চান?')) {
                    return;
                }

                try {
                    const response = await fetch(`/admin/bookings/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken,
                            'Content-Type': 'application/json'
                        }
                    });

                    const result = await response.json();
                    if (result.success) {
                        alert('✓ বুকিং মুছে ফেলা হয়েছে');
                        loadBookings();
                    }
                } catch (error) {
                    console.error('Error deleting booking:', error);
                    alert('✗ মুছে ফেলা ব্যর্থ হয়েছে');
                }
            };

            // Bulk delete bookings
            window.bulkDeleteBookings = async function() {
                if (selectedIds.size === 0) return;

                if (!confirm(`আপনি কি নিশ্চিত যে আপনি ${selectedIds.size} টি বুকিং মুছে ফেলতে চান?`)) {
                    return;
                }

                try {
                    const response = await fetch('/admin/bookings/bulk-delete', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({ ids: Array.from(selectedIds) })
                    });

                    const result = await response.json();
                    if (result.success) {
                        alert('✓ ' + result.message);
                        selectedIds.clear();
                        loadBookings();
                    }
                } catch (error) {
                    console.error('Error bulk deleting:', error);
                    alert('✗ মুছে ফেলা ব্যর্থ হয়েছে');
                }
            };

            // Download bookings as CSV
            window.downloadBookings = function() {
                window.location.href = '/admin/bookings/export';
            };

            // Initial load
            window.loadBookings = loadBookings;
            loadBookings();

            // Auto-refresh every 30 seconds
            setInterval(loadBookings, 30000);
        })();
    </script>
</div>

