<section id="social-media" class="social-media">
    <style>
        /* Container styling to match dark elegant look */
        #social-media { padding: 40px 0; background: #050816; }
        #social-media .carousel-wrapper { position: relative; max-width: 1200px; margin: 0 auto; padding: 0 16px; }
        #social-media .carousel-container { overflow: hidden; }
        #social-media .carousel-track { display: flex; gap: 16px; transition: transform 300ms ease; will-change: transform; }

        /* Card styles */
        #social-media .sm-card { flex: 0 0 calc(25% - 12px); background: #0b1021; border-radius: 16px; border: 2px solid rgba(56,189,248,0.35); height: 260px; display: flex; align-items: center; justify-content: center; color: #e2e8f0; text-align: center; padding: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.35); transition: transform 200ms ease, box-shadow 200ms ease, border-color 200ms ease; }
        #social-media .sm-card:nth-child(odd) { transform: rotate(-6deg); }
        #social-media .sm-card:nth-child(even) { transform: rotate(6deg); }
        #social-media .sm-card:hover { transform: rotate(0deg) translateY(-4px); box-shadow: 0 16px 40px rgba(0,0,0,0.45); border-color: rgba(56,189,248,0.8); }
        #social-media .sm-card a { display:block; width:100%; height:100%; color:inherit; text-decoration:none; }
        #social-media .sm-title { font-size: 20px; line-height: 1.4; font-weight: 700; letter-spacing: 0.2px; }
        #social-media .sm-subtitle { margin-top: 8px; color:#93c5fd; font-size:14px; }

        /* Next button */
        #social-media .carousel-btn.next-btn { position: absolute; right: 8px; top: 50%; transform: translateY(-50%); background: linear-gradient(135deg,#8b5cf6,#6366f1); color:#fff; border:none; border-radius: 9999px; padding:10px 14px; cursor:pointer; box-shadow: 0 10px 25px rgba(99,102,241,0.35); }
        #social-media .carousel-btn.next-btn:hover { filter: brightness(1.05); }

        /* Responsive: show fewer cards */
        @media (max-width: 1024px) {
            #social-media .sm-card { flex-basis: calc(33.333% - 11px); height: 240px; }
        }
        @media (max-width: 768px) {
            #social-media .sm-card { flex-basis: calc(50% - 8px); height: 220px; }
        }
        @media (max-width: 480px) {
            #social-media .sm-card { flex-basis: 100%; height: 200px; }
            #social-media .carousel-btn.next-btn { top: auto; bottom: -10px; right: 50%; transform: translate(50%,0); }
        }
    </style>

    <div class="carousel-wrapper">
        <div class="carousel-container">
            <div id="socialTrack" class="carousel-track" aria-live="polite">
                <!-- Social media items will be loaded dynamically -->
            </div>
        </div>
        <button id="nextSocialBtn" class="carousel-btn next-btn" aria-label="Next">❯</button>
    </div>

    <script>
        (function(){
            const track = document.getElementById('socialTrack') || document.querySelector('#social-media .carousel-inner');
            const nextBtn = document.getElementById('nextSocialBtn');
            let currentIndex = 0;
            const apiUrl = "{{ url('/api/social-media') }}";
            let items = [];


            async function loadItems() {
                try {
                    const response = await fetch(apiUrl + '?_=' + Date.now(), { headers: { 'Accept': 'application/json' } });
                    if (!response.ok) {
                        const txt = await response.text();
                        throw new Error('Failed to load social media: ' + response.status + ' ' + txt);
                    }
                    items = await response.json();
                    renderItems();
                    initCarousel();
                } catch (e) { console.error('Social media section load error:', e); }
            }

            function renderItems(){
                if (!track) return;
                const usingBootstrap = track.classList.contains('carousel-inner');
                track.innerHTML = '';
                if (!items.length) {
                    if (usingBootstrap) {
                        const empty = document.createElement('div');
                        empty.className = 'carousel-item active';
                        empty.innerHTML = '<div class="sm-card"><p style="text-align:center;">কোনো আইটেম নেই</p></div>';
                        track.appendChild(empty);
                    } else {
                        track.innerHTML = '<div class="sm-card"><p style="text-align:center;">কোনো আইটেম নেই</p></div>';
                    }
                    return;
                }
                items.forEach((it, idx) => {
                    // Create a card per item (title-focused like the design)
                    const card = document.createElement('div');
                    card.className = 'sm-card';
                    card.setAttribute('role','group');
                    card.setAttribute('aria-label', (it.title || 'আইটেম'));

                    const inner = document.createElement(it.link ? 'a' : 'div');
                    if (it.link) { inner.href = it.link; inner.target = '_blank'; inner.rel = 'noopener'; }
                    inner.innerHTML = `
                        <div class="sm-title">${(it.title || '').toString().trim()}</div>
                        ${it.content ? `<div class="sm-subtitle">${(it.content||'')}</div>` : ''}
                    `;
                    card.appendChild(inner);
                    track.appendChild(card);
                });
            }

            function initCarousel(){
                if (!track) return;
                const usingBootstrap = track.classList.contains('carousel-inner');
                if (usingBootstrap) {
                    // Let Bootstrap's JS handle sliding if included. Hide custom arrows.
                    if (nextBtn) nextBtn.style.display = 'none';
                    return;
                }
                if (items.length <= 4) {
                    if (nextBtn) nextBtn.style.display = 'none';
                } else {
                    if (nextBtn) nextBtn.style.display = 'inline-flex';
                }
                function update(){
                    const card = track.querySelector('.sm-card');
                    const cardWidth = card ? card.offsetWidth : 0;
                    const gap = 16; // must match CSS gap
                    track.style.transform = `translateX(${-currentIndex * (cardWidth + gap)}px)`;
                }
                nextBtn && (nextBtn.onclick = ()=>{
                    const visible = getVisibleCount();
                    const maxIndex = Math.max(0, items.length - visible);
                    currentIndex = Math.min(currentIndex + 1, maxIndex);
                    update();
                });

                function getVisibleCount(){
                    const w = window.innerWidth;
                    if (w <= 480) return 1;
                    if (w <= 768) return 2;
                    if (w <= 1024) return 3;
                    return 4;
                }
                window.addEventListener('resize', update);
                update();
            }

            loadItems();
            setInterval(loadItems, 5000);
            document.addEventListener('visibilitychange', ()=>{ if(!document.hidden) loadItems(); });
            window.addEventListener('focus', loadItems);
            window.addEventListener('storage', function(e){ try{ if(e && e.key==='refreshSocialMedia'){ loadItems(); } }catch(_){}}
            );
            // No section title/subtitle to sync
        })();
    </script>
</section>
