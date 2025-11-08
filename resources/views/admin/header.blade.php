<header class="header">
    <style>
        .header { display:flex; align-items:center; justify-content:space-between; gap:12px; flex-wrap:wrap; }
        .header-left { flex: 0 1 auto; min-width: 180px; }
        .header-right { flex: 1 1 auto; display:flex; align-items:center; gap:12px; min-width:0; justify-content:flex-end; }
        .user-name { white-space: nowrap; }
        .user-menu { position: relative; white-space: nowrap; }
        @media (max-width: 768px) {
            .header { align-items:flex-start; }
            .header-right { width:100%; justify-content:flex-end; }
        }
    </style>
    <div class="header-left">
        <h2 id="pageTitle">ড্যাশবোর্ড ওভারভিউ</h2>
        <p id="currentDate"></p>
    </div>
    <div class="header-right">
        <span class="user-name" aria-hidden="true">অ্যাডমিন</span>
        <div class="user-menu">
            <button class="user-avatar" id="userMenuBtn" aria-haspopup="true" aria-expanded="false">
                <img src="/images/Joljochna.png" alt="User profile">
            </button>
            <div class="user-dropdown" id="userDropdown" role="menu">
                <a href="#" role="menuitem" onclick="openProfileLogoEditor(); return false;">প্রোফাইল পরিবর্তন</a>
                <a href="#" role="menuitem" onclick="showTab('settings'); return false;">সেটিংস</a>
            </div>
        </div>
    </div>
</header>