(function ($) {
    // Safety guard to prevent invalid/undefined event handlers from crashing jQuery dispatch
    if ($.event && $.event.add) {
        var _origEventAdd = $.event.add;
        $.event.add = function (elem, types, handler, data, selector) {
            if (!handler || (typeof handler !== 'function' && typeof handler !== 'object')) {
                return;
            }
            return _origEventAdd.apply(this, arguments);
        };
    }

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 300);
    };
    spinner();

    // Init WOW with optimized settings
    new WOW().init({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 100,
        mobile: true,
        live: true
    });

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

    // === LENIS ULTRA-FLUID HIGH-FPS SMOOTH SCROLL ===
    var lenis;
    if (typeof Lenis !== 'undefined') {
        lenis = new Lenis({
            duration: 1.5,
            easing: function (t) { return t === 1 ? 1 : 1 - Math.pow(2, -10 * t); },
            orientation: 'vertical',
            gestureOrientation: 'vertical',
            smoothWheel: true,
            wheelMultiplier: 0.85,
            smoothTouch: false,
            touchMultiplier: 1.5,
            infinite: false
        });
        window.gloLenis = lenis;

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);

        // Synchronize Lenis scroll with navbar and back-to-top
        lenis.on('scroll', function (e) {
            if (e.scroll > 50) {
                navbar.addClass('scrolled');
            } else {
                navbar.removeClass('scrolled');
            }

            var btt = document.querySelector('.back-to-top');
            if (btt) {
                if (e.scroll > 100) {
                    btt.classList.add('show');
                } else {
                    btt.classList.remove('show');
                }
            }
        });

        // Smooth scroll to anchor links using Lenis
        $(document).on('click', 'a[href^="#"]:not([href="#"])', function (e) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                e.preventDefault();
                lenis.scrollTo(target[0], { offset: -80, duration: 1.2 });
            }
        });
    }

    // Back to top button
    setTimeout(function() {
        var backToTop = document.querySelector('.back-to-top');
        
        if (backToTop) {
            var updateBackToTop = function () {
                if (window.scrollY > 100) {
                    backToTop.classList.add('show');
                } else {
                    backToTop.classList.remove('show');
                }
            };
            
            // Attach scroll event using native API
            window.addEventListener('scroll', updateBackToTop, { passive: true });
            
            // Initial check after a short delay to ensure page is loaded
            setTimeout(updateBackToTop, 300);
            
            // Smooth scroll to top
            backToTop.addEventListener('click', function (e) {
                e.preventDefault();
                if (lenis) {
                    lenis.scrollTo(0, { duration: 1.2 });
                } else {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                }
            });
        }
    }, 500);

    // === LIGHTBOX OPTIMIZED OPTIONS & FAST-CLICK GUARD ===
    if (typeof lightbox !== 'undefined') {
        lightbox.option({
            fadeDuration: 150,
            resizeDuration: 150,
            imageFadeDuration: 150,
            wrapAround: true,
            showImageNumberLabel: true
        });
    }

    // === PARTNERS SECTION HARDWARE-ACCELERATED PARALLAX SCROLL ===
    var partnersBgLayer = document.querySelector('.partners-bg-layer');
    var partnersSection = document.querySelector('.partners-grid-section');
    if (partnersBgLayer && partnersSection) {
        var updatePartnersParallax = function() {
            var rect = partnersSection.getBoundingClientRect();
            var windowHeight = window.innerHeight;
            if (rect.top < windowHeight && rect.bottom > 0) {
                var totalRange = windowHeight + rect.height;
                var currentPos = windowHeight - rect.top;
                var progress = currentPos / totalRange; // 0 to 1
                var translateY = (progress - 0.5) * 280; // 280px prominent move
                partnersBgLayer.style.transform = 'translate3d(0, ' + translateY + 'px, 0)';
            }
        };
        window.addEventListener('scroll', updatePartnersParallax, { passive: true });
        if (window.gloLenis) {
            window.gloLenis.on('scroll', updatePartnersParallax);
        }
        updatePartnersParallax();
        setTimeout(updatePartnersParallax, 300);
    }

    // Counter Up
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });

    // =========================================================
    // Hero carousel (full width) with text animations
    // =========================================================
    var $heroCarousel = $('.hero-carousel');

    /**
     * Trigger hero text animation on the active slide.
     * Removes the class first (resets animation), then re-adds on next frame
     * so CSS @keyframes replay cleanly.
     */
    function triggerHeroAnim($carousel) {
        var $activeItem = $carousel.find('.owl-item.active:not(.cloned)').first();
        var $slide = $activeItem.find('.hero-slide');

        if (!$slide.length) return;

        // Reset all slides
        $carousel.find('.hero-slide').removeClass('slide-anim-active');

        // Force reflow on next two frames so animation restarts
        requestAnimationFrame(function () {
            requestAnimationFrame(function () {
                $slide.addClass('slide-anim-active');
            });
        });
    }

    // Attach events BEFORE owlCarousel init so 'initialized' fires
    $heroCarousel
        .on('initialized.owl.carousel', function () {
            triggerHeroAnim($(this));
        })
        .on('translated.owl.carousel', function () {
            triggerHeroAnim($(this));
        });

    $heroCarousel.owlCarousel({
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

    // Fallback: ensure first slide animates even if 'initialized' was missed
    setTimeout(function () {
        if (!$heroCarousel.find('.hero-slide.slide-anim-active').length) {
            triggerHeroAnim($heroCarousel);
        }
    }, 300);





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

    // Optimized smooth scroll for anchors using native smooth scroll
    $('a[href*="#"]:not([href="#"])').on('click', function (e) {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                e.preventDefault();
                var targetOffset = target.offset().top - 80;
                
                // Use native smooth scroll for better performance
                if ('scrollBehavior' in document.documentElement.style) {
                    window.scrollTo({
                        top: targetOffset,
                        behavior: 'smooth'
                    });
                } else {
                    // Fallback for older browsers
                    $('html, body').animate({ scrollTop: targetOffset }, 500);
                }
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

    // ===== PARALLAX EFFECT FOR ABOUT SECTION (Optimized with RAF) =====
    var parallaxBg = $('.parallax-bg');
    if (parallaxBg.length) {
        var parallaxSpeed = parseFloat(parallaxBg.data('speed')) || 0.3;
        var parallaxTicking = false;
        
        var updateParallax = function () {
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            var offset = parallaxBg.offset().top;
            var windowHeight = $(window).height();
            
            // Check if element is in viewport
            if (scrollTop + windowHeight > offset && scrollTop < offset + parallaxBg.outerHeight()) {
                var yPos = (scrollTop - offset) * parallaxSpeed;
                parallaxBg.css('transform', 'translate3d(0, ' + yPos + 'px, 0)');
            }
            parallaxTicking = false;
        };
        
        $(window).on('scroll', function() {
            if (!parallaxTicking) {
                requestAnimationFrame(updateParallax);
                parallaxTicking = true;
            }
        }, { passive: true });
    }

    // ===== DYNAMIC CONTENT FOR HERO CAROUSEL SLIDES =====
    var heroCarousel = $('.hero-carousel');
    if (heroCarousel.length) {
        // Get current language from PHP
        var currentLang = (typeof window.currentLang !== 'undefined') ? window.currentLang : 'fr';
        
        // Function to update all slides content based on language
        function updateAllSlidesContent() {
            // Update all badge texts
            $('.badge-text').each(function() {
                var $this = $(this);
                var text = $this.data(currentLang) || $this.data('fr');
                if (text) $this.text(text);
            });
            
            // Update all title texts
            $('.title-text').each(function() {
                var $this = $(this);
                var text = $this.data(currentLang) || $this.data('fr');
                if (text) $this.text(text);
            });
            
            // Update all highlight texts
            $('.highlight-text').each(function() {
                var $this = $(this);
                var text = $this.data(currentLang) || $this.data('fr');
                if (text) $this.text(text);
            });
            
            // Update all description texts
            $('.desc-text').each(function() {
                var $this = $(this);
                var text = $this.data(currentLang) || $this.data('fr');
                if (text) $this.text(text);
            });
        }
        
        // Initialize on page load
        updateAllSlidesContent();
        
        // Update content when slide changes
        heroCarousel.on('changed.owl.carousel', function(event) {
            // Small delay to let Owl Carousel finish its DOM manipulation
            setTimeout(updateAllSlidesContent, 50);
        });
    }

})(jQuery);
