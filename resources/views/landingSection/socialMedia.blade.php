```php
<section id="social-media" class="social-media">
    <style>
        /* Container styling - Modern & Professional */
        #social-media { 
            padding: 60px 0; 
            background: #050816;
            position: relative;
            overflow: hidden;
        }
        
        #social-media .carousel-wrapper { 
            position: relative; 
            max-width: 1400px; 
            margin: 0 auto; 
            padding: 0 60px; 
        }
        
        #social-media .carousel-container { 
            overflow: hidden; 
            padding: 20px 0;
        }
        
        #social-media .carousel-track { 
            display: flex; 
            gap: 24px; 
            transition: transform 400ms cubic-bezier(0.4, 0, 0.2, 1); 
            will-change: transform; 
            padding: 10px;
        }

        #social-media .carousel-track::after,
        #social-media .carousel-track::before {
            content: '';
            flex: 0 0 24px;
        }

        /* Modern Card Styles */
        #social-media .sm-card { 
            flex: 0 0 calc(25% - 18px);
            min-width: 280px;
            background: #ffffff;
            border-radius: 20px;
            border: 2px solid #e5e7eb;
            display: flex;
            flex-direction: column;
            color: #1f2937;
            box-shadow: 0 10px 30px rgba(0,0,0,0.12);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            min-height: 440px;
        }
        
        #social-media .sm-card::before {
            content: '';
            position: absolute;
            inset: -2px;
            border-radius: 20px;
            padding: 2px;
            background: linear-gradient(135deg, #0a4d2e, #38bdf8, #0a4d2e);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        #social-media .sm-card:hover::before {
            opacity: 1;
            animation: borderRotate 3s linear infinite;
        }
        
        @keyframes borderRotate {
            0% { background: linear-gradient(135deg, #0a4d2e, #38bdf8, #0a4d2e); }
            25% { background: linear-gradient(225deg, #38bdf8, #0a4d2e, #38bdf8); }
            50% { background: linear-gradient(315deg, #0a4d2e, #38bdf8, #0a4d2e); }
            75% { background: linear-gradient(45deg, #38bdf8, #0a4d2e, #38bdf8); }
            100% { background: linear-gradient(135deg, #0a4d2e, #38bdf8, #0a4d2e); }
        }
        
        #social-media .sm-card:hover { 
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 20px 50px rgba(10, 77, 46, 0.2);
            border-color: rgba(10, 77, 46, 0.3);
        }
        
        #social-media .sm-card a { 
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;
            color: inherit;
            text-decoration: none;
            padding: 0;
            position: relative;
            z-index: 1;
        }
        
        #social-media .sm-image {
            width: 100%;
            height: 240px;
            background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
            flex-shrink: 0;
        }
        
        #social-media .sm-image img,
        #social-media .sm-image video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        
        #social-media .sm-card:hover .sm-image img,
        #social-media .sm-card:hover .sm-image video {
            transform: scale(1.08);
        }
        
        #social-media .sm-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            flex: 1;
            min-height: 0;
        }
        
        #social-media .sm-title { 
            font-size: 18px;
            line-height: 1.4;
            font-weight: 700;
            letter-spacing: 0.1px;
            color: #0a4d2e;
            transition: color 0.3s ease;
            word-wrap: break-word;
            overflow-wrap: break-word;
            hyphens: auto;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        #social-media .sm-card:hover .sm-title {
            color: #0d6639;
        }
        
        #social-media .sm-subtitle { 
            color: #64748b;
            font-size: 13px;
            line-height: 1.6;
            word-wrap: break-word;
            overflow-wrap: break-word;
            hyphens: auto;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        #social-media .sm-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            background: linear-gradient(135deg, #0a4d2e 0%, #0d6639 100%);
            color: #ffffff;
            padding: 11px 22px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            transition: all 0.3s ease;
            margin-top: auto;
            align-self: flex-end;
            white-space: nowrap;
        }
        
        #social-media .sm-btn:hover {
            transform: translateX(4px);
            box-shadow: 0 4px 15px rgba(10, 77, 46, 0.3);
        }

        /* Navigation Button */
        #social-media .carousel-btn.next-btn { 
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: linear-gradient(135deg, #8b5cf6, #6366f1);
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(99,102,241,0.4);
            transition: all 0.3s ease;
            z-index: 10;
        }
        
        #social-media .carousel-btn.next-btn:hover { 
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 15px 40px rgba(99,102,241,0.6);
        }

        /* Responsive Breakpoints */
        @media (max-width: 1200px) {
            #social-media .sm-card { 
                flex: 0 0 calc(33.333% - 16px);
                min-width: 280px;
            }
            
            #social-media .sm-image { height: 220px; }
        }
        
        @media (max-width: 992px) {
            #social-media { padding: 50px 0; }
            
            #social-media .carousel-wrapper { padding: 0 24px; }
            
            #social-media .carousel-track {
                gap: 18px;
                padding: 10px;
            }
            
            #social-media .carousel-track::before,
            #social-media .carousel-track::after {
                flex: 0 0 18px;
            }
            
            #social-media .sm-card { 
                flex: 0 0 calc(50% - 18px);
                min-width: 260px;
                min-height: 420px;
            }
            
            #social-media .sm-image { height: 220px; }
            #social-media .sm-content { padding: 20px; gap: 10px; }
            #social-media .sm-title { font-size: 17px; }
            #social-media .sm-subtitle { font-size: 13px; }
            #social-media .sm-btn { padding: 10px 20px; font-size: 13px; }
        }
        
        @media (max-width: 768px) {
            #social-media { 
                padding: 40px 0;
                background: #f8f9fa;
            }
            
            #social-media .carousel-wrapper { 
                padding: 0 12px;
                max-width: 100%;
            }
            
            #social-media .carousel-track {
                gap: 16px;
                padding: 10px;
            }
            
            #social-media .carousel-track::before,
            #social-media .carousel-track::after {
                flex: 0 0 14px;
            }
            
            #social-media .sm-card { 
                flex: 0 0 calc(100% - 20px);
                min-width: 0;
                width: 100%;
                max-width: 380px;
                margin: 0 auto;
                border-radius: 16px;
                min-height: 460px;
            }
            
            #social-media .sm-image { 
                height: 260px;
            }
            
            #social-media .sm-content {
                padding: 24px;
                gap: 14px;
            }
            
            #social-media .sm-title { 
                font-size: 19px;
                line-height: 1.5;
            }
            
            #social-media .sm-subtitle { 
                font-size: 14px;
                line-height: 1.7;
            }
            
            #social-media .sm-btn {
                padding: 13px 24px;
                font-size: 15px;
                width: 100%;
                border-radius: 12px;
                align-self: stretch;
            }
            
            #social-media .carousel-btn.next-btn {
                width: 48px;
                height: 48px;
                right: 10px;
            }
        }
        
        @media (max-width: 480px) {
            #social-media { 
                padding: 28px 0;
                background: #f8f9fa;
            }
            
            #social-media .carousel-wrapper { 
                padding: 0 10px;
            }
            
            #social-media .carousel-track {
                gap: 12px;
                padding: 10px;
            }
            
            #social-media .carousel-track::before,
            #social-media .carousel-track::after {
                flex: 0 0 10px;
            }
            
            #social-media .sm-card { 
                flex: 0 0 calc(100% - 12px);
                min-width: 0;
                width: 100%;
                max-width: 340px;
                border-radius: 16px;
                min-height: 420px;
            }
            
            #social-media .sm-image { 
                height: 220px;
            }
            
            #social-media .sm-content {
                padding: 20px;
                gap: 12px;
            }
            
            #social-media .sm-title { 
                font-size: 17px;
                line-height: 1.45;
            }
            
            #social-media .sm-subtitle { 
                font-size: 13px;
                line-height: 1.65;
                -webkit-line-clamp: 4;
            }
            
            #social-media .sm-btn {
                padding: 12px 18px;
                font-size: 14px;
                width: 100%;
                border-radius: 12px;
                align-self: stretch;
            }
            
            #social-media .carousel-btn.next-btn { 
                width: 44px;
                height: 44px;
                top: auto;
                bottom: -64px;
                right: 50%;
                transform: translateX(50%);
                background: linear-gradient(135deg, #0a4d2e, #0d6639);
            }
            
            #social-media .carousel-btn.next-btn:hover {
                transform: translateX(50%) scale(1.08);
            }
        }
        
        @media (max-width: 360px) {
            #social-media .carousel-wrapper { 
                padding: 0 6px;
            }
            
            #social-media .carousel-track {
                gap: 10px;
                padding: 8px;
            }
            
            #social-media .carousel-track::before,
            #social-media .carousel-track::after {
                flex: 0 0 8px;
            }
            
            #social-media .sm-card { 
                border-radius: 14px;
                min-height: 400px;
            }
            
            #social-media .sm-image { 
                height: 200px;
            }
            
            #social-media .sm-content {
                padding: 18px;
                gap: 10px;
            }
            
            #social-media .sm-title {
                font-size: 16px;
            }
            
            #social-media .sm-subtitle {
                font-size: 12.5px;
                -webkit-line-clamp: 4;
            }
            
            #social-media .sm-btn {
                padding: 12px 14px;
                font-size: 13px;
                width: 100%;
                border-radius: 12px;
                align-self: stretch;
            }
            
            #social-media .carousel-btn.next-btn { 
                width: 40px;
                height: 40px;
            }
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
                    track.innerHTML = '<div class="sm-card"><div class="sm-content"><p style="text-align:center; color:#666;">কোনো আইটেম নেই</p></div></div>';
                    return;
                }
                items.forEach((it, idx) => {
                    const card = document.createElement('div');
                    card.className = 'sm-card';
                    card.setAttribute('role','group');
                    card.setAttribute('aria-label', (it.title || 'আইটেম'));

                    const inner = document.createElement(it.link ? 'a' : 'div');
                    if (it.link) { 
                        inner.href = it.link; 
                        inner.target = '_blank'; 
                        inner.rel = 'noopener'; 
                    }

                    // Determine poster for video
                    let poster = '';
                    if (it.image_url) {
                        poster = it.image_url;
                    } else if (it.image_path) {
                        poster = `/storage/${it.image_path}`;
                    }

                    // Create media element
                    let mediaHTML = '';
                    if (it.video_url) {
                        mediaHTML = `
                            <div class="sm-image">
                                <video poster="${poster}" autoplay muted loop playsinline>
                                    <source src="${it.video_url}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        `;
                    } else if (it.image_url) {
                        mediaHTML = `<div class="sm-image"><img src="${it.image_url}" alt="${it.title || 'Image'}" /></div>`;
                    } else if (it.image_path) {
                        mediaHTML = `<div class="sm-image"><img src="/storage/${it.image_path}" alt="${it.title || 'Image'}" /></div>`;
                    } else {
                        // Fallback gradient background
                        mediaHTML = `<div class="sm-image" style="display:flex; align-items:center; justify-content:center; font-size:4rem;">📱</div>`;
                    }
                    
                    inner.innerHTML = `
                        ${mediaHTML}
                        <div class="sm-content">
                            <div class="sm-title">${(it.title || '').toString().trim()}</div>
                            ${it.content ? `<div class="sm-subtitle">${(it.content||'').toString().trim()}</div>` : ''}
                            <div class="sm-btn">এখুনি দেখুন</div>
                        </div>
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
                if (items.length <= getVisibleCount()) {
                    if (nextBtn) nextBtn.style.display = 'none';
                } else {
                    if (nextBtn) nextBtn.style.display = 'inline-flex';
                }
                function update(){
                    const card = track.querySelector('.sm-card');
                    const cardWidth = card ? card.offsetWidth : 0;
                    const computedStyles = window.getComputedStyle(track);
                    const gapValue = computedStyles.columnGap || computedStyles.gap || '16px';
                    const gap = parseFloat(gapValue);
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
                    if (w <= 768) return 1;
                    if (w <= 992) return 2;
                    if (w <= 1200) return 3;
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
```