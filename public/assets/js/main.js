(function () {
    // ===== Preloader (safe)
    window.addEventListener('load', function () {
        const pre = document.querySelector('.preloader');
        if (pre) {
            setTimeout(() => {
                pre.style.opacity = '0';
                setTimeout(() => pre.style.display = 'none', 400);
            }, 500);
        }
    });

    // ===== On scroll: sticky header + back-to-top
    function handleScroll() {
        const header = document.querySelector('.navbar-area') || document.querySelector('.header');
        const backToTop = document.querySelector('.scroll-top');
        const scrolled = window.scrollY || document.documentElement.scrollTop;

        if (backToTop) backToTop.style.display = scrolled > 50 ? 'flex' : 'none';
        if (header) header.classList.toggle('sticky', scrolled > 50);
        document.querySelector('#header')?.classList.toggle('header-scrolled', scrolled > 100);
    }

    window.addEventListener('scroll', handleScroll);
    window.addEventListener('load', handleScroll);
    handleScroll(); // initial

    document.addEventListener('DOMContentLoaded', function () {
        const navmenu = document.querySelector('#navmenu');
        const mobileToggle = document.querySelector('.mobile-nav-toggle');
        const headerLang = document.querySelector('.header-lang');
        let mobileLangLi = null;

        // ===== Mobile language clone
        function createMobileLang() {
            if (!navmenu || !headerLang || mobileLangLi) return;
            const clone = headerLang.cloneNode(true);
            clone.classList.remove('d-none', 'd-xl-flex');

            mobileLangLi = document.createElement('li');
            mobileLangLi.className = 'mobile-language d-xl-none';
            mobileLangLi.appendChild(clone);

            const ul = navmenu.querySelector('ul') || navmenu;
            ul.appendChild(mobileLangLi);

            const sel = mobileLangLi.querySelector('select');
            if (sel) sel.addEventListener('change', function () { if (this.value) window.location.href = this.value; });
        }

        function removeMobileLang() {
            if (mobileLangLi) {
                mobileLangLi.remove();
                mobileLangLi = null;
            }
        }

        // ===== Toggle mobile nav
        function toggleMobileNav() {
            if (!navmenu) return;
            const isOpen = navmenu.classList.toggle('open');
            document.body.classList.toggle('mobile-nav-active', isOpen);

            if (mobileToggle) {
                mobileToggle.classList.toggle('bi-list', !isOpen);
                mobileToggle.classList.toggle('bi-x', isOpen);
                mobileToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            }

            if (isOpen) createMobileLang(); else removeMobileLang();
        }

        if (mobileToggle) mobileToggle.addEventListener('click', e => { e.stopPropagation(); toggleMobileNav(); });

        // ===== Dropdowns for mobile
        document.querySelectorAll('#navmenu .toggle-dropdown').forEach(btn => {
            btn.addEventListener('click', e => {
                if (window.innerWidth < 1200) {
                    e.preventDefault();
                    const submenu = btn.closest('li').querySelector('ul');
                    if (submenu) submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
                    btn.setAttribute('aria-expanded', submenu?.style.display === 'block');
                }
            });
        });

        // ===== Close mobile menu on outside click
        document.addEventListener('click', e => {
            if (!navmenu) return;
            const insideNav = navmenu.contains(e.target);
            const clickedToggle = e.target.closest('.mobile-nav-toggle');
            if (!insideNav && !clickedToggle && navmenu.classList.contains('open')) toggleMobileNav();
        });

        // ===== Close menu on link click
        navmenu.querySelectorAll('ul li a').forEach(a => {
            a.addEventListener('click', () => { if (window.innerWidth < 1200) toggleMobileNav(); });
        });

        // ===== Desktop language select
        const langSelect = document.getElementById('language-selector-desktop');
        if (langSelect) langSelect.addEventListener('change', function () { if (this.value) window.location.href = this.value; });

        // ===== Cleanup on resize
        window.addEventListener('resize', () => { if (window.innerWidth >= 1200) { if (navmenu) navmenu.classList.remove('open'); removeMobileLang(); if (mobileToggle) { mobileToggle.classList.add('bi-list'); mobileToggle.classList.remove('bi-x'); mobileToggle.setAttribute('aria-expanded', 'false'); } } });
    });
})();
