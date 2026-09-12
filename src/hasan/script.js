// CV HASAN — Script (typing + 8-bit sound + hamburger + nav + reduced-motion)
(function () {
  // 0. Reduced-motion detection
  var rrm = window.matchMedia('(prefers-reduced-motion: reduce)');
  if (rrm.matches) document.body.classList.add('reduced-motion');
  rrm.addEventListener('change', function (e) {
    document.body.classList.toggle('reduced-motion', e.matches);
  });

  // 1. Typing effect
  var full = window.__TITLE__ || 'Linux Enthusiast';
  var el = document.getElementById('typed');
  var idx = 0;
  function tick() {
    if (!el) return;
    el.textContent = full.slice(0, idx++);
    if (idx <= full.length + 8) setTimeout(tick, 55);
  }
  tick();

  // 2. 8-bit blip sound (WebAudio, user-gesture only)
  var ctx = null, soundOn = false, timer = null;
  var btn = document.getElementById('soundBtn');
  var btnM = document.getElementById('soundBtnMobile');
  function blip() {
    if (!ctx) ctx = new (window.AudioContext || window.webkitAudioContext)();
    var o = ctx.createOscillator(), g = ctx.createGain();
    o.type = 'square';
    o.frequency.value = 400 + Math.random() * 600;
    g.gain.value = 0.04;
    o.connect(g); g.connect(ctx.destination);
    o.start(); o.stop(ctx.currentTime + 0.08);
  }
  function coin() {
    if (!ctx) ctx = new (window.AudioContext || window.webkitAudioContext)();
    [660, 990].forEach(function (f, k) {
      var o = ctx.createOscillator(), g = ctx.createGain();
      o.type = 'square'; o.frequency.value = f; g.gain.value = 0.05;
      o.connect(g); g.connect(ctx.destination);
      o.start(ctx.currentTime + k * 0.09); o.stop(ctx.currentTime + k * 0.09 + 0.09);
    });
  }
  function toggleSound() {
    soundOn = !soundOn;
    var lbl = soundOn ? (window.__LBL_ON__ || 'SOUND: ON') : (window.__LBL_OFF__ || 'SOUND: OFF');
    if (btn) btn.textContent = lbl;
    if (btnM) btnM.textContent = lbl;
    if (soundOn) { coin(); timer = setInterval(blip, 2400); }
    else { clearInterval(timer); }
  }
  if (btn) btn.addEventListener('click', toggleSound);
  if (btnM) btnM.addEventListener('click', toggleSound);

  // 3. Press P to print
  document.addEventListener('keydown', function (ev) {
    if ((ev.key === 'p' || ev.key === 'P') && !ev.ctrlKey && !ev.metaKey) {
      if (document.activeElement && /INPUT|TEXTAREA/.test(document.activeElement.tagName)) return;
      window.print();
    }
  });

  // 4. Hamburger toggle
  var hamburger = document.getElementById('hamburgerBtn');
  var overlay = document.getElementById('navOverlay');
  var navClose = document.getElementById('navClose');
  function openNav() {
    if (!overlay || !hamburger) return;
    overlay.classList.add('open');
    overlay.setAttribute('aria-hidden', 'false');
    hamburger.setAttribute('aria-expanded', 'true');
    overlay.querySelector('.nav-overlay-link').focus();
  }
  function closeNav() {
    if (!overlay || !hamburger) return;
    overlay.classList.remove('open');
    overlay.setAttribute('aria-hidden', 'true');
    hamburger.setAttribute('aria-expanded', 'false');
    hamburger.focus();
  }
  if (hamburger) hamburger.addEventListener('click', openNav);
  if (navClose) navClose.addEventListener('click', closeNav);
  // Close on overlay link click
  var oLinks = document.querySelectorAll('.nav-overlay-link');
  for (var i = 0; i < oLinks.length; i++) {
    oLinks[i].addEventListener('click', closeNav);
  }
  // Close on Escape
  document.addEventListener('keydown', function (ev) {
    if (ev.key === 'Escape' && overlay && overlay.classList.contains('open')) closeNav();
  });
  // Close on backdrop click
  if (overlay) {
    overlay.addEventListener('click', function (ev) {
      if (ev.target === overlay) closeNav();
    });
  }

  // 5. Active nav on scroll
  var sections = document.querySelectorAll('section[id], header[id]');
  var navLinks = document.querySelectorAll('.nav-links a[data-section]');
  function updateActiveNav() {
    var scrollY = window.scrollY + 120;
    var found = false;
    sections.forEach(function (sec) {
      if (found) return;
      var top = sec.offsetTop;
      var height = sec.offsetHeight;
      var id = sec.getAttribute('id');
      if (scrollY >= top && scrollY < top + height) {
        navLinks.forEach(function (link) {
          var isActive = link.getAttribute('data-section') === id;
          link.classList.toggle('active', isActive);
        });
        found = true;
      }
    });
  }
  window.addEventListener('scroll', updateActiveNav, { passive: true });
  updateActiveNav();
})();
