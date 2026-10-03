document.addEventListener('DOMContentLoaded', function () {

    /* ---- Nav berubah tampilan setelah melewati hero ---- */
    var nav = document.querySelector('.nav');
    var hero = document.querySelector('.hero');

    if (nav && hero) {
        var toggleNav = function () {
            var trigger = hero.offsetHeight - 80;
            if (window.scrollY > trigger) {
                nav.classList.add('is-scrolled');
            } else {
                nav.classList.remove('is-scrolled');
            }
        };
        toggleNav();
        window.addEventListener('scroll', toggleNav, { passive: true });
    }

    /* ---- Progress bar tipis di atas halaman ---- */
    var progress = document.querySelector('.scroll-progress');
    if (progress) {
        var updateProgress = function () {
            var scrollTop = window.scrollY;
            var docHeight = document.documentElement.scrollHeight - window.innerHeight;
            var pct = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
            progress.style.width = pct + '%';
        };
        updateProgress();
        window.addEventListener('scroll', updateProgress, { passive: true });
        window.addEventListener('resize', updateProgress);
    }

    /* ---- Reveal saat elemen masuk viewport ----
       Berlaku untuk semua elemen ber-class "reveal" / "reveal-scale",
       termasuk yang ditambahkan nanti di bagian bawah halaman. */
    var revealEls = document.querySelectorAll('.reveal, .reveal-scale');

    if ('IntersectionObserver' in window && revealEls.length) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -60px 0px' });

        revealEls.forEach(function (el) { observer.observe(el); });
    } else {
        // fallback: kalau IntersectionObserver tidak didukung, tampilkan langsung
        revealEls.forEach(function (el) { el.classList.add('is-visible'); });
    }

    /* ---- Stagger: anak-anak elemen ber-class "stagger" muncul
       satu-satu berurutan (jeda dihitung di sini, dipasang lewat
       transition-delay). Dipakai untuk daftar tag, grid proyek, dan
       timeline. Berjalan di semua perangkat, bukan cuma desktop. ---- */
    var staggerEls = document.querySelectorAll('.stagger');

    if ('IntersectionObserver' in window && staggerEls.length) {
        var staggerObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var children = entry.target.children;
                    for (var i = 0; i < children.length; i++) {
                        children[i].style.transitionDelay = (i * 70) + 'ms';
                    }
                    entry.target.classList.add('is-visible');
                    staggerObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

        staggerEls.forEach(function (el) { staggerObserver.observe(el); });
    } else {
        staggerEls.forEach(function (el) { el.classList.add('is-visible'); });
    }

    /* ---- Tombol "kembali ke atas" ----
       Muncul lembut setelah scroll melewati hero, scroll halus saat diklik.
       Berjalan di semua perangkat. ---- */
    var backToTop = document.querySelector('.back-to-top');
    if (backToTop) {
        var toggleBackToTop = function () {
            if (window.scrollY > window.innerHeight * 0.6) {
                backToTop.classList.add('is-visible');
            } else {
                backToTop.classList.remove('is-visible');
            }
        };
        toggleBackToTop();
        window.addEventListener('scroll', toggleBackToTop, { passive: true });
        backToTop.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* =========================================================
       EFEK KHUSUS DESKTOP
       Semua di bawah ini hanya aktif kalau perangkat punya mouse
       presisi (bukan sentuh) DAN pengguna tidak mengaktifkan
       "reduce motion" di sistemnya — supaya tidak mengganggu
       pengguna mobile atau yang sensitif terhadap animasi.
       ========================================================= */
    var isDesktopPointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
    var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var enableDesktopFx = isDesktopPointer && !prefersReducedMotion;

    if (enableDesktopFx) {

        /* ---- Kursor kustom: dot menempel persis, ring mengikuti
           dengan sedikit "lag" (dihitung lewat interpolasi tiap frame)
           supaya terasa halus, dan membesar di atas elemen interaktif. ---- */
        document.documentElement.classList.add('has-custom-cursor');

        var cursorDot = document.querySelector('.cursor-dot');
        var cursorRing = document.querySelector('.cursor-ring');

        if (cursorDot && cursorRing) {
            var mouseX = 0, mouseY = 0, ringX = 0, ringY = 0, cursorStarted = false;

            document.addEventListener('mousemove', function (e) {
                mouseX = e.clientX;
                mouseY = e.clientY;
                if (!cursorStarted) {
                    ringX = mouseX;
                    ringY = mouseY;
                    cursorStarted = true;
                    cursorDot.classList.add('is-active');
                    cursorRing.classList.add('is-active');
                }
                cursorDot.style.left = mouseX + 'px';
                cursorDot.style.top = mouseY + 'px';
            });

            document.addEventListener('mousedown', function () { cursorRing.classList.add('is-clicking'); });
            document.addEventListener('mouseup', function () { cursorRing.classList.remove('is-clicking'); });

            var hoverSelector = 'a, button, .btn, .project-card, .tag-list li, .timeline-item, input, textarea, select';
            document.addEventListener('mouseover', function (e) {
                if (e.target.closest && e.target.closest(hoverSelector)) {
                    cursorRing.classList.add('is-hovering');
                }
            });
            document.addEventListener('mouseout', function (e) {
                if (e.target.closest && e.target.closest(hoverSelector)) {
                    cursorRing.classList.remove('is-hovering');
                }
            });

            document.addEventListener('mouseleave', function () {
                cursorDot.classList.remove('is-active');
                cursorRing.classList.remove('is-active');
                cursorStarted = false;
            });

            (function animateCursorRing() {
                ringX += (mouseX - ringX) * 0.18;
                ringY += (mouseY - ringY) * 0.18;
                cursorRing.style.left = ringX + 'px';
                cursorRing.style.top = ringY + 'px';
                requestAnimationFrame(animateCursorRing);
            })();
        }

        /* ---- Tombol "magnetic": tertarik lembut ke arah kursor
           saat didekati, lalu kembali dengan efek pegas saat kursor
           menjauh. ---- */
        var initMagnetic = function (el, strength) {
            el.addEventListener('mousemove', function (e) {
                var rect = el.getBoundingClientRect();
                var relX = e.clientX - rect.left - rect.width / 2;
                var relY = e.clientY - rect.top - rect.height / 2;
                el.style.transition = 'transform 0.1s ease-out';
                el.style.transform = 'translate(' + (relX * strength) + 'px, ' + (relY * strength) + 'px)';
            });
            el.addEventListener('mouseleave', function () {
                el.style.transition = 'transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1)';
                el.style.transform = 'translate(0, 0)';
            });
        };
        document.querySelectorAll('.btn').forEach(function (btn) { initMagnetic(btn, 0.25); });

        /* ---- Tilt 3D + glare pada kartu proyek: kartu miring mengikuti
           posisi kursor, dengan sorotan cahaya lembut yang ikut bergerak. ---- */
        var initTilt = function (card) {
            var maxTilt = 8;
            card.addEventListener('mousemove', function (e) {
                var rect = card.getBoundingClientRect();
                var x = (e.clientX - rect.left) / rect.width;
                var y = (e.clientY - rect.top) / rect.height;
                var rotateX = (0.5 - y) * maxTilt;
                var rotateY = (x - 0.5) * maxTilt;
                card.style.transform = 'perspective(900px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg) translateY(-6px)';
                card.style.setProperty('--glare-x', (x * 100) + '%');
                card.style.setProperty('--glare-y', (y * 100) + '%');
                card.classList.add('is-tilting');
            });
            card.addEventListener('mouseleave', function () {
                card.style.transform = '';
                card.classList.remove('is-tilting');
            });
        };
        document.querySelectorAll('.tilt-card').forEach(function (card) { initTilt(card); });

        /* ---- Parallax lembut di hero: foto dan awan bergeser tipis
           mengikuti posisi kursor, memberi kesan kedalaman. Dihitung
           per-frame dengan interpolasi supaya geraknya halus, bukan
           langsung "nempel" ke posisi kursor. ---- */
        var parallaxEls = document.querySelectorAll('[data-parallax]');
        if (parallaxEls.length) {
            var targetX = 0, targetY = 0, currentX = 0, currentY = 0;
            document.addEventListener('mousemove', function (e) {
                targetX = (e.clientX / window.innerWidth) - 0.5;
                targetY = (e.clientY / window.innerHeight) - 0.5;
            });
            (function animateParallax() {
                currentX += (targetX - currentX) * 0.06;
                currentY += (targetY - currentY) * 0.06;
                parallaxEls.forEach(function (el) {
                    var depth = parseFloat(el.getAttribute('data-parallax')) || 10;
                    el.style.transform = 'translate(' + (currentX * -depth) + 'px, ' + (currentY * -depth) + 'px)';
                });
                requestAnimationFrame(animateParallax);
            })();
        }
    }

});
