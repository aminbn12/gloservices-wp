(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();

    // Init WOW
    new WOW().init();

    // Navbar scroll effect
    var navbar = $('.navbar');
    var stickyNavbar = function () {
        if (window.scrollY > 50) {
            navbar.addClass('scrolled');
        } else {
            navbar.removeClass('scrolled');
        }
    };
    $(window).scroll(stickyNavbar);
    stickyNavbar();

    // Back to top button
    var backToTop = $('.back-to-top');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            backToTop.addClass('show');
        } else {
            backToTop.removeClass('show');
        }
    });
    backToTop.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 300);
    });

    // Counter Up
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });

    // Hero carousel (full width)
    $('.hero-carousel').owlCarousel({
        loop: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        smartSpeed: 800,
        dots: true,
        dotsData: true,
        nav: false,
        responsive: {
            0: { dots: true },
            992: { dots: true }
        }
    });

    // Vendor carousel
    $('.vendor-carousel').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: { items: 2 },
            576: { items: 3 },
            768: { items: 4 },
            992: { items: 5 },
            1200: { items: 6 }
        }
    });

    // Portfolio isotope filter
    var portfolioContainer = $('.portfolio-container');
    if (portfolioContainer.length) {
        portfolioContainer.isotope({
            itemSelector: '.portfolio-item',
            layoutMode: 'fitRows'
        });
        $('#portfolio-flters li').on('click', function () {
            $('#portfolio-flters li').removeClass('active');
            $(this).addClass('active');
            portfolioContainer.isotope({ filter: $(this).data('filter') });
        });
    }

    // Lightbox
    if (typeof lightbox !== 'undefined') {
        lightbox.option({
            resizeDuration: 200,
            wrapAround: true,
            albumLabel: "Image %1 sur %2"
        });
    }

    // Stat Counter Animation (Intersection Observer)
    var statCounters = document.querySelectorAll('.stat-counter');
    if (statCounters.length > 0) {
        var animateCounter = function (el) {
            var target = parseInt(el.getAttribute('data-target'), 10);
            var duration = 2000;
            var start = 0;
            var startTime = null;

            var step = function (timestamp) {
                if (!startTime) startTime = timestamp;
                var progress = Math.min((timestamp - startTime) / duration, 1);
                var eased = 1 - Math.pow(1 - progress, 3); // ease-out cubic
                var current = Math.floor(eased * target);
                el.textContent = current.toLocaleString('fr-FR');
                if (progress < 1) {
                    requestAnimationFrame(step);
                } else {
                    el.textContent = target.toLocaleString('fr-FR');
                }
            };
            requestAnimationFrame(step);
        };

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                    entry.target.classList.add('counted');
                    animateCounter(entry.target);
                }
            });
        }, { threshold: 0.4 });

        statCounters.forEach(function (counter) {
            observer.observe(counter);
        });
    }

    // Smooth scroll for anchors
    $('a[href*="#"]:not([href="#"])').on('click', function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 500);
                return false;
            }
        }
    });

    // ===== MOBILE SIDEBAR =====
    var $tog     = $('#mobileMenuToggle');
    var $sidebar = $('#mobileSidebar');
    var $overlay = $('#mobileOverlay');
    var $close   = $('#mobileMenuClose');

    function openSidebar() {
        $overlay.addClass('is-active');
        requestAnimationFrame(function () { $overlay.addClass('is-visible'); });
        $sidebar.addClass('is-open');
        $tog.addClass('is-open').attr('aria-label', 'Fermer le menu');
        $('body').css('overflow', 'hidden');
    }
    function closeSidebar() {
        $overlay.removeClass('is-visible');
        $sidebar.removeClass('is-open');
        $tog.removeClass('is-open').attr('aria-label', 'Ouvrir le menu');
        $('body').css('overflow', '');
        setTimeout(function () { $overlay.removeClass('is-active'); }, 380);
    }

    $tog.on('click', function () {
        $sidebar.hasClass('is-open') ? closeSidebar() : openSidebar();
    });
    $close.on('click', closeSidebar);
    $overlay.on('click', closeSidebar);
    $sidebar.find('.mobile-nav-list a').on('click', function () {
        closeSidebar();
    });
    $(document).on('keydown', function (e) {
        if (e.key === 'Escape' && $sidebar.hasClass('is-open')) closeSidebar();
    });
    // ===== FIN MOBILE SIDEBAR =====

})(jQuery);

