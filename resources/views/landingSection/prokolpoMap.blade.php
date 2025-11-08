<style>
  body {
    background: linear-gradient(to right, #004d25, #006b33);
    font-family: 'Noto Sans Bengali', sans-serif;
    color: white;
    overflow-x: hidden;
  }

  .main-section {
    padding: 40px 15px;
  }

  /* ---------- CARD (LEFT OFFER) ---------- */
  .offer-card {
    background-color: #004e25;
    border: none;
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    padding: 25px 20px;
    height: 100%;
  }

  .offer-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #ffd700;
    margin-bottom: 20px;
    text-align: center;
  }

  .plot-box {
    background-color: #125c38;
    color: #fff;
    border: 2px solid #f9b233;
    border-radius: 12px;
    padding: 10px;
    transition: transform 0.3s ease;
  }

  .plot-box:hover {
    transform: translateY(-5px);
  }

  .plot-size {
    font-size: 1.2rem;
    font-weight: 700;
    color: #ffcc33;
  }

  .category-label {
    background-color: #f9b233;
    color: #004d25;
    padding: 4px 10px;
    border-radius: 20px;
    font-weight: 700;
    font-size: 0.8rem;
    display: inline-block;
    margin-top: 5px;
  }

  .footer-note {
    margin-top: 20px;
    font-size: 0.9rem;
    line-height: 1.6;
    text-align: center;
  }

  .cta-bar {
    background-color: #ff8800;
    color: white;
    font-weight: 700;
    padding: 10px;
    margin-top: 20px;
    border-radius: 5px;
    font-size: 1rem;
    text-align: center;
  }

  /* ---------- RIGHT (MAP) ---------- */
.map-section {
  text-align: center;
  background: rgba(0, 0, 0, 0.15);
  border-radius: 15px;
  padding: 20px;
  height: 100%;
  display: flex;            /* make vertical layout */
  flex-direction: column;   /* title then image */
  overflow: hidden; /* ✅ keeps image inside rounded area */
}

.map-section img {
  width: 100%;
  flex: 1 1 auto;         /* take remaining height */
  height: 100%;           /* fill container to align bottoms */
  object-fit: cover;      /* fill without stretching */
  border-radius: 10px; /* ✅ rounded corners */
  border: 2px solid #ffc107; /* optional border */
  display: block;
}



  .map-title {
    font-size: 1.3rem;
    font-weight: 700;
    color: #ffd700;
    margin-bottom: 10px;
  }

  /* ---------- RESPONSIVE ---------- */
  @media (max-width: 992px) {
    .map-section {
      margin-top: 25px;
    }
  }
</style>

<h2 class="section-title" id="socialMediaTitle" style="text-align: center; margin: 2rem 0; color: #ffffff;">সোশ্যাল মিডিয়া পোস্ট</h2>
<style>
  .slider-wrap { width:100%; max-width:1200px; margin: 0 auto; }
  .slider-container { display:flex; overflow-x:auto; gap:24px; padding: 24px 0; scroll-behavior:smooth; cursor:grab; }
  .slider-container.grabbing { cursor:grabbing; }
  .slide-col { flex: 0 0 100%; min-width:0; height: 420px; }
  .slide-col a { text-decoration: none; color: inherit; display: block; height: 100%; }
  @media (min-width: 640px) { .slide-col { flex-basis: calc(50% - 12px); height: 450px; } }
  @media (min-width: 768px) { .slide-col { flex-basis: calc(33.33% - 16px); height: 460px; } }
  @media (min-width: 1024px){ .slide-col { flex-basis: calc(25% - 18px); height: 480px; } }
  .slide-card { background:#fff; border-radius:12px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); overflow:hidden; height:100%; display:flex; flex-direction:column; transition: transform 0.3s ease, box-shadow 0.3s ease; }
  .slide-col a:hover .slide-card { transform: translateY(-4px); box-shadow: 0 12px 24px rgba(0,0,0,0.15); }
  .slide-card h3 { font-size:16px; font-weight:700; color:#111827; margin:0; line-height:1.4; text-decoration: none; overflow:hidden; display:-webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical; }
  .slide-card .title { padding:16px 16px 8px 16px; flex-shrink: 0; }
  .slide-card img { width:100%; height:160px; object-fit:cover; display:block; flex-shrink: 0; }
  .slide-card .desc { padding:12px 16px 20px 16px; color:#6b7280; font-size:13px; line-height:1.5; text-decoration: none; overflow:hidden; display:-webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical; }
  @media (min-width: 640px) {
    .slide-card { border-radius:14px; }
    .slide-card h3 { font-size:18px; }
    .slide-card .title { padding:18px 18px 8px 18px; }
    .slide-card img { height:180px; }
    .slide-card .desc { padding:12px 18px 22px 18px; font-size:13px; -webkit-line-clamp:4; }
  }
  @media (min-width: 1024px) {
    .slide-card { border-radius:16px; }
    .slide-card h3 { font-size:20px; }
    .slide-card .title { padding:20px 20px 8px 20px; }
    .slide-card img { height:200px; }
    .slide-card .desc { padding:12px 20px 24px 20px; font-size:14px; line-height:1.6; }
  }
  .dots { display:flex; justify-content:center; align-items:center; gap:14px; margin-top:10px; }
  .dot {
    width: 12px;
    height: 12px;
    border-radius: 999px;
    border: 2px solid #ffffff; /* visible on dark bg */
    background: transparent;
    outline: none;
    cursor: pointer;
    transition: transform .2s ease, background-color .2s ease, opacity .2s ease, box-shadow .2s ease;
    opacity: 0.8;
    box-shadow: 0 1px 3px rgba(0,0,0,0.25);
  }
  .dot:hover { opacity: 1; }
  .dot.active { transform: scale(1.15); background: #ffffff; opacity: 1; }
</style>

<div class="slider-wrap" aria-label="Project Roadmap Slider">
  <div id="slider-container" class="slider-container" role="region" aria-roledescription="carousel"></div>
  <div id="pagination-dots" class="dots" aria-label="পেজিনেশন">
    <button data-target="0" class="dot" aria-label="শুরুতে যান"></button>
    <button data-target="0.5" class="dot" aria-label="মাঝে যান"></button>
    <button data-target="1" class="dot" aria-label="শেষে যান"></button>
  </div>
  <script>
    (function(){
      const sliderContainer = document.getElementById('slider-container');
      const dotsContainer = document.getElementById('pagination-dots');
      const dots = Array.from(dotsContainer.querySelectorAll('.dot'));
      let isDown=false, startX=0, scrollLeft=0;

      function bindDrag(){
        sliderContainer.addEventListener('mousedown', (e)=>{ isDown=true; sliderContainer.classList.add('grabbing'); startX = e.pageX - sliderContainer.offsetLeft; scrollLeft = sliderContainer.scrollLeft; });
        window.addEventListener('mouseup', ()=>{ isDown=false; sliderContainer.classList.remove('grabbing'); });
        sliderContainer.addEventListener('mouseleave', ()=>{ isDown=false; sliderContainer.classList.remove('grabbing'); });
        sliderContainer.addEventListener('mousemove', (e)=>{ if(!isDown) return; e.preventDefault(); const x = e.pageX - sliderContainer.offsetLeft; const walk=(x-startX)*1.5; sliderContainer.scrollLeft = scrollLeft - walk; });
      }

      function updateDots(){
        const max = sliderContainer.scrollWidth - sliderContainer.clientWidth;
        if (max <= 0) { dots.forEach((d,i)=> d.classList.toggle('active', i===0)); return; }
        const ratio = sliderContainer.scrollLeft / max;
        let activeIdx = ratio < 0.33 ? 0 : (ratio < 0.66 ? 1 : 2);
        dots.forEach((d,i)=> d.classList.toggle('active', i===activeIdx));
      }
      function scrollToRatio(r){ const max = sliderContainer.scrollWidth - sliderContainer.clientWidth; sliderContainer.scrollLeft = max * r; }
      function bindDots(){
        dotsContainer.addEventListener('click', (e)=>{ const btn = e.target.closest('.dot'); if(btn){ const r = parseFloat(btn.dataset.target||'0'); scrollToRatio(r); } });
        sliderContainer.addEventListener('scroll', updateDots);
        window.addEventListener('resize', updateDots);
      }

      function cardTemplate(it){
        const title = (it.title||'').toString();
        const desc = (it.content||'').toString();
        let img = (it.image_url||'').toString();
        if(!img && it.image_path){
          const p = it.image_path.toString().replace(/^\/+/, '');
          img = "{{ asset('storage') }}" + '/' + p;
        }
        let href = (it.link||'').toString().trim();
        // Ensure external links have protocol, otherwise treat as relative
        if(href && !href.match(/^https?:\/\//i) && !href.startsWith('/')){
          href = 'https://' + href;
        }
        const alt = title || 'সোশ্যাল মিডিয়া ছবি';
        const imageEl = img ? `<img src=\"${img}\" alt=\"${alt}\" loading=\"lazy\" onerror=\"this.style.display='none'\">` : '';
        const body = `
            <div class=\"slide-card\">
              <div class=\"title\"><h3>${title}</h3></div>
              ${imageEl}
              ${desc ? `<div class=\"desc\">${desc}</div>` : ''}
            </div>`;
        return `
          <div class=\"slide-col\">
            ${href ? `<a href=\"${href}\" target=\"_blank\" rel=\"noopener noreferrer\">${body}</a>` : body}
          </div>`;
      }

      function renderFromItems(items){
        if(Array.isArray(items) && items.length){
          sliderContainer.innerHTML = items.map(cardTemplate).join('');
        } else {
          sliderContainer.innerHTML = `<div class="slide-col"><div class="slide-card"><div class="title"><h3>কোনো আইটেম নেই</h3></div><div class="desc">ড্যাশবোর্ড থেকে সোশ্যাল মিডিয়া আইটেম যোগ করুন।</div></div></div>`;
        }
        updateDots();
      }

      function getLivePreviewItems(){
        try{
          const raw = localStorage.getItem('liveSocialMediaPreview');
          if(!raw) return null;
          const payload = JSON.parse(raw);
          if(payload && Array.isArray(payload.items)) return payload.items;
        }catch(_){ }
        return null;
      }

      async function loadSocial(){
        try{
          // Prefer live preview if available
          const live = getLivePreviewItems();
          console.log('Live preview items:', live);
          if(live && live.length){
            console.log('Using live preview');
            renderFromItems(live);
            return;
          }
          const apiUrl = "{{ url('/api/social-media') }}" + '?_=' + Date.now();
          console.log('Fetching from API:', apiUrl);
          const res = await fetch(apiUrl, { headers: { 'Accept': 'application/json' } });
          if(!res.ok){ throw new Error('Load failed ' + res.status); }
          let items = await res.json();
          console.log('API returned items:', items);
          if(Array.isArray(items)){
            items = items.filter(it => it && (it.is_active === true || it.is_active === 1 || typeof it.is_active === 'undefined'))
                         .sort((a,b)=> (a.order||0) - (b.order||0));
            console.log('Filtered/sorted items:', items);
          }
          renderFromItems(items);
        }catch(err){
          console.error('Social media load error:', err);
        }
      }

      // Initial bindings
      bindDrag();
      bindDots();
      // Initial: prefer live preview if present, else API
      const initialLive = getLivePreviewItems();
      if(initialLive && initialLive.length){ renderFromItems(initialLive); } else { loadSocial(); }
      // Refresh when admin saves or live-previews
      window.addEventListener('storage', (e)=>{
        if(e.key==='refreshSocialMedia'){ loadSocial(); }
        if(e.key==='liveSocialMediaPreview'){ const live = getLivePreviewItems(); if(live){ renderFromItems(live); } }
      });
      // Fallback polling (in case same-tab save)
      let lastRefresh = localStorage.getItem('refreshSocialMedia');
      let lastLive = localStorage.getItem('liveSocialMediaPreview');
      setInterval(()=>{
        const cur = localStorage.getItem('refreshSocialMedia');
        if(cur!==lastRefresh){ lastRefresh=cur; loadSocial(); }
        const curLive = localStorage.getItem('liveSocialMediaPreview');
        if(curLive!==lastLive){ lastLive=curLive; const live = getLivePreviewItems(); if(live){ renderFromItems(live); } }
      }, 1200);
    })();
  </script>
</div>
<h2 class="section-title" id="roadmapSectionTitle" style="text-align: center; margin: 2rem 0; color: #ffffff;">প্রজেক্ট রোডম্যাপ</h2>

<div class="container main-section py-4 mb-4">
  <div class="row align-items-stretch">
    <!-- LEFT SIDE - OFFER DETAILS -->
    <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
      <div class="offer-card h-100">
        <h2 class="offer-title" id="prokolpoTitle">বেছে নিন আপনার পছন্দের প্লট</h2>

        <div class="row g-3 justify-content-center" id="prokolpoPlots">
          <div class="col-6">
            <div class="plot-box">
              <div class="plot-size">৮ কাঠা</div>
              <div class="category-label">প্রিমিয়াম প্লট</div>
            </div>
          </div>

          <div class="col-6">
            <div class="plot-box">
              <div class="plot-size">১০ কাঠা</div>
              <div class="category-label">ডিলাক্স প্লট</div>
            </div>
          </div>

          <div class="col-6">
            <div class="plot-box">
              <div class="plot-size">৩০ কাঠা</div>
              <div class="category-label">এক্সিকিউটিভ প্লট</div>
            </div>
          </div>

          <div class="col-6">
            <div class="plot-box">
              <div class="plot-size">২০ কাঠা</div>
              <div class="category-label">কর্পোরেট প্লট</div>
            </div>
          </div>
        </div>

        <div class="mt-3 text-center" id="prokolpoAmenities">
          <span class="category-label bg-success text-white">ক্লাব হাউজ</span>
          <span class="category-label bg-success text-white">জিম</span>
          <span class="category-label bg-success text-white">মসজিদ</span>
          <span class="category-label bg-success text-white">শপিং এরিয়া</span>
        </div>

        <div class="footer-note" id="prokolpoFooterNote">
          <p>
            সবুজ প্রকৃতি, নীরব কলকল ধারা আর নির্মল আবহাওয়া — এই জায়গাটি হতে পারে আপনার স্বপ্নের ঠিকানা!
            এখানে আছে আধুনিক রাস্তাঘাট, বিদ্যুৎ, পানি, গ্যাস, ও নিরাপত্তার নিশ্চয়তা।
          </p>
          <p>মূল্য বৃদ্ধির আগে, আজই বুকিং করুন।</p>
        </div>

        <div class="cta-bar" id="prokolpoCtaBar">
          📞 এখনই যোগাযোগ করুন — সীমিত সময়ের অফার
        </div>
      </div>
    </div>

    <!-- RIGHT SIDE - MAP -->
    <div class="col-lg-6 col-md-12">
      <div class="map-section h-100">
        <h3 class="map-title" id="prokolpoMapTitle">প্রজেক্ট রোডম্যাপ</h3>
        <img src="/images/Project-roadmap.png" class="img-fluid object-fit-fill" alt="Project Map" id="prokolpoMapImage">
      </div>
    </div>
  </div>
</div>


<script>
(function(){
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
        mapImage: '/images/Project-roadmap.png'
    };

    const el = {
        title: document.getElementById('prokolpoTitle'),
        plots: document.getElementById('prokolpoPlots'),
        amenities: document.getElementById('prokolpoAmenities'),
        footerNote: document.getElementById('prokolpoFooterNote'),
        ctaBar: document.getElementById('prokolpoCtaBar'),
        mapImage: document.getElementById('prokolpoMapImage')
    };

    function readProjects(){
        try{ return JSON.parse(localStorage.getItem('ourProjectsSettings')||'{}'); }catch(e){ return {}; }
    }

    function readRoadmap(){
        try{ return JSON.parse(localStorage.getItem('roadmapSettings')||'{}'); }catch(e){ return {}; }
    }

    function apply(){
        const savedProjects = readProjects();
        const s = { ...defaults, ...savedProjects };

        if (el.title) el.title.textContent = s.offerTitle;

        if (el.plots) {
            el.plots.innerHTML = s.plots.map(p => `
                <div class="col-6">
                    <div class="plot-box">
                        <div class="plot-size">${p.size}</div>
                        <div class="category-label">${p.cat}</div>
                    </div>
                </div>
            `).join('');
        }

        if (el.amenities) {
            el.amenities.innerHTML = s.amenities.map(a => `<span class="category-label bg-success text-white">${a}</span>`).join('');
        }

        if (el.footerNote) el.footerNote.innerHTML = s.footerNote;
        if (el.ctaBar) el.ctaBar.textContent = s.ctaBar;
        if (el.mapImage && s.mapImage) el.mapImage.src = s.mapImage;

        // Disable dynamic roadmap rendering
        const existingRoadmapEl = document.getElementById('dynamicRoadmap');
        if (existingRoadmapEl) existingRoadmapEl.remove();
    }

    apply();
    window.addEventListener('storage', (e)=>{ if(e.key==='ourProjectsSettings' || e.key==='roadmapSettings'){ apply(); } });
    let lastProjects = localStorage.getItem('ourProjectsSettings');
    let lastRoadmap = localStorage.getItem('roadmapSettings');
    setInterval(()=>{
        const curProjects = localStorage.getItem('ourProjectsSettings');
        const curRoadmap = localStorage.getItem('roadmapSettings');
        if(curProjects!==lastProjects){ lastProjects=curProjects; apply(); }
        if(curRoadmap!==lastRoadmap){ lastRoadmap=curRoadmap; apply(); }
    }, 1000);
})();
</script>
