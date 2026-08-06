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

    // Enhanced Spinner & Homepage Cinematic Intro Sequence
    var spinner = function () {
        var $spinner = $('#spinner');
        if ($spinner.length === 0) return;

        var isHomepage = $spinner.hasClass('is-homepage-preloader') || $('body').hasClass('home') || $('body').hasClass('page-template-front-page');

        if (!isHomepage) {
            // Inner Pages: Quick smooth hide
            setTimeout(function () {
                $spinner.removeClass('show');
            }, 250);
            return;
        }

        // HOMEPAGE ONLY: Guaranteed 2.5s 3-Icon Sequence (City -> Road -> IT) + Media Load Wait
        var startTime = Date.now();
        var minIconSequenceDuration = 2500; // 2.5 seconds for all 3 icons to display behind spinning logo

        // Pause all hero videos & stop carousel autoplay during preloader display
        var $heroVideos = $('.hero-video');
        $heroVideos.each(function () {
            this.pause();
        });
        $('.hero-carousel').trigger('stop.owl.autoplay');

        var playHeroVideos = function () {
            $heroVideos.each(function () {
                var videoEl = this;
                try {
                    videoEl.currentTime = 0;
                    var playPromise = videoEl.play();
                    if (playPromise !== undefined) {
                        playPromise.catch(function () {});
                    }
                } catch (e) {}
            });
            // Restart Hero Carousel autoplay 10s timer FROM ZERO now that preloader is gone
            var $carousel = $('.hero-carousel');
            if ($carousel.length) {
                $carousel.trigger('stop.owl.autoplay');
                $carousel.trigger('play.owl.autoplay', [10000]);
            }
        };

        var hidePreloader = function () {
            if ($spinner.data('done')) return;
            $spinner.data('done', true);

            // Step 1: Trigger Cinematic Intro "BUILD THE FUTURE" Text & Zoom
            $spinner.addClass('play-cinematic');

            // Step 2: After 1200ms zoom animation completes, hide preloader overlay AND START VIDEO
            setTimeout(function () {
                $spinner.removeClass('show');
                playHeroVideos();
                if (typeof triggerHeroScrollReminderPulse === 'function') {
                    triggerHeroScrollReminderPulse();
                }
            }, 1200);
        };

        var tryTriggerCinematic = function () {
            var elapsedTime = Date.now() - startTime;
            var remainingTime = Math.max(0, minIconSequenceDuration - elapsedTime);

            setTimeout(function () {
                hidePreloader();
            }, remainingTime);
        };

        var $heroCarousel = $('.hero-carousel');
        var promises = [];

        // 1. Preload slide background images & img tags
        if ($heroCarousel.length > 0) {
            $heroCarousel.find('.hero-bg-image, [style*="background-image"]').each(function () {
                var bgUrl = $(this).css('background-image');
                if (bgUrl && bgUrl !== 'none') {
                    var match = bgUrl.match(/^url\((['"]?)(.*)\1\)$/);
                    if (match && match[2]) {
                        var url = match[2];
                        promises.push(new Promise(function (resolve) {
                            var img = new Image();
                            img.onload = function () { resolve(); };
                            img.onerror = function () { resolve(); };
                            img.src = url;
                        }));
                    }
                }
            });

            // 2. Preload hero videos
            $heroCarousel.find('video').each(function () {
                var videoEl = this;
                promises.push(new Promise(function (resolve) {
                    if (videoEl.readyState >= 2) {
                        resolve();
                        return;
                    }
                    var timeout = setTimeout(resolve, 5000);
                    videoEl.addEventListener('canplaythrough', function () {
                        clearTimeout(timeout);
                        resolve();
                    }, { once: true });
                    videoEl.addEventListener('loadeddata', function () {
                        clearTimeout(timeout);
                        resolve();
                    }, { once: true });
                    videoEl.addEventListener('error', function () {
                        clearTimeout(timeout);
                        resolve();
                    }, { once: true });
                }));
            });
        }

        $(window).on('load', function () {
            if (promises.length > 0) {
                Promise.all(promises).then(function () {
                    tryTriggerCinematic();
                });
            } else {
                tryTriggerCinematic();
            }
        });

        // Fallback safety timeout (max 7s)
        setTimeout(function () {
            tryTriggerCinematic();
        }, 7000);
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

    // === PARTNERS SECTION SMOOTH SCROLL PARALLAX + FLOAT MOTION ===
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
                var marginTop = (progress - 0.5) * 180; // 180px scroll shift
                partnersBgLayer.style.marginTop = marginTop + 'px';
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
        if (!$carousel || !$carousel.length) return;

        // Reset all slides
        $carousel.find('.hero-slide').removeClass('slide-anim-active');

        // Target all currently active slides in OwlCarousel DOM (including cloned slides during swipe loop)
        var $activeSlides = $carousel.find('.owl-item.active .hero-slide');

        if (!$activeSlides.length) {
            $activeSlides = $carousel.find('.hero-slide').first();
        }

        // Force reflow on next two frames so animation restarts cleanly
        requestAnimationFrame(function () {
            requestAnimationFrame(function () {
                $activeSlides.addClass('slide-anim-active');
            });
        });
    }

    var pulseTimer = null;
    function triggerHeroScrollReminderPulse() {
        // Do not display/pulse arrow while preloader overlay is active on homepage
        if ($('#spinner').length && $('#spinner').hasClass('show')) return;

        var $reminder = $('#heroScrollReminder');
        if (!$reminder.length) return;

        $reminder.removeClass('pulse-active');
        // Force reflow
        void $reminder[0].offsetWidth;
        $reminder.addClass('pulse-active');

        if (pulseTimer) clearTimeout(pulseTimer);
        pulseTimer = setTimeout(function () {
            $reminder.removeClass('pulse-active');
        }, 5000); // 5 seconds display duration!
    }

    // Attach events BEFORE owlCarousel init so 'initialized' fires
    $heroCarousel
        .on('initialized.owl.carousel', function () {
            triggerHeroAnim($(this));
            triggerHeroScrollReminderPulse();
        })
        .on('translated.owl.carousel', function () {
            triggerHeroAnim($(this));
            triggerHeroScrollReminderPulse();
        })
        .on('changed.owl.carousel', function () {
            triggerHeroAnim($(this));
        })
        .on('dragged.owl.carousel', function () {
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

    // Handle scroll reminder arrow click to smoothly scroll to stats section (100 Clients, 30 Projets...)
    $(document).on('click', '#heroScrollReminder', function (e) {
        e.preventDefault();
        var $target = $('#stats-section');
        if ($target.length) {
            if (window.gloLenis) {
                window.gloLenis.scrollTo($target[0], { duration: 1.2 });
            } else {
                $('html, body').animate({
                    scrollTop: $target.offset().top - 80
                }, 800);
            }
        }
    });

    // If preloader is currently active on homepage, pause carousel autoplay until preloader finishes
    if ($('#spinner').length && $('#spinner').hasClass('show')) {
        $heroCarousel.trigger('stop.owl.autoplay');
    }

    // Fallback: ensure first slide animates even if 'initialized' was missed
    setTimeout(function () {
        if (!$heroCarousel.find('.hero-slide.slide-anim-active').length) {
            triggerHeroAnim($heroCarousel);
            triggerHeroScrollReminderPulse();
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

    // ===== NOS ENGAGEMENTS SEQUENTIAL HOVER ANIMATION (PLAY ON SCROLL INTO VIEW) =====
    var engagementsSection = $('.engagements-section');
    if (engagementsSection.length) {
        var cards = engagementsSection.find('.engagement-card');
        var animated = false;
        var animationTimeouts = [];

        function clearAllCardAnimations() {
            animationTimeouts.forEach(function(timeout) {
                clearTimeout(timeout);
            });
            animationTimeouts = [];
            cards.removeClass('auto-hover');
            animated = false;
        }

        function runSequentialAnimation() {
            if (animated) return;
            animated = true;

            var index = 0;
            function animateNextCard() {
                if (index < cards.length) {
                    var currentCard = cards.eq(index);
                    currentCard.addClass('auto-hover');

                    var cardTimeout = setTimeout(function () {
                        currentCard.removeClass('auto-hover');
                        index++;
                        var nextTimeout = setTimeout(animateNextCard, 150);
                        animationTimeouts.push(nextTimeout);
                    }, 2000); // 2 seconds animation duration per card
                    animationTimeouts.push(cardTimeout);
                }
            }
            animateNextCard();
        }

        // Use IntersectionObserver if supported, with scroll fallback
        if ('IntersectionObserver' in window) {
            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        runSequentialAnimation();
                    } else {
                        clearAllCardAnimations();
                    }
                });
            }, { threshold: 0.15 }); // Trigger when 15% of section is visible
            observer.observe(engagementsSection[0]);
        } else {
            $(window).on('scroll.engagements', function () {
                var wTop = $(window).scrollTop();
                var wHeight = $(window).height();
                var sTop = engagementsSection.offset().top;
                var sHeight = engagementsSection.outerHeight();
                if (wTop + wHeight > sTop + 100 && wTop < sTop + sHeight - 100) {
                    runSequentialAnimation();
                } else {
                    clearAllCardAnimations();
                }
            });
        }
    }

    // ===== NOTRE DEMARCHE QUALITE SEQUENTIAL 3-BOUNCE ANIMATION (PLAY ON SCROLL INTO VIEW) =====
    var workflowSection = $('.workflow-section');
    if (workflowSection.length) {
        var workflowCards = workflowSection.find('.workflow-step-card');
        var workflowAnimated = false;
        var workflowTimeouts = [];

        function clearAllWorkflowAnimations() {
            workflowTimeouts.forEach(function(timeout) {
                clearTimeout(timeout);
            });
            workflowTimeouts = [];
            workflowCards.removeClass('auto-bounce');
            workflowAnimated = false;
        }

        function runSequentialWorkflowAnimation() {
            if (workflowAnimated) return;
            workflowAnimated = true;

            var index = 0;
            function animateNextWorkflowCard() {
                if (index < workflowCards.length) {
                    var currentCard = workflowCards.eq(index);
                    currentCard.addClass('auto-bounce');

                    var cardTimeout = setTimeout(function () {
                        currentCard.removeClass('auto-bounce');
                        index++;
                        var nextTimeout = setTimeout(animateNextWorkflowCard, 150);
                        workflowTimeouts.push(nextTimeout);
                    }, 2000); // 2 seconds animation duration per card
                    workflowTimeouts.push(cardTimeout);
                }
            }
            animateNextWorkflowCard();
        }

        // Use IntersectionObserver if supported, with scroll fallback
        if ('IntersectionObserver' in window) {
            var workflowObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        runSequentialWorkflowAnimation();
                    } else {
                        clearAllWorkflowAnimations();
                    }
                });
            }, { threshold: 0.15 });
            workflowObserver.observe(workflowSection[0]);
        } else {
            $(window).on('scroll.workflow', function () {
                var wTop = $(window).scrollTop();
                var wHeight = $(window).height();
                var sTop = workflowSection.offset().top;
                var sHeight = workflowSection.outerHeight();
                if (wTop + wHeight > sTop + 100 && wTop < sTop + sHeight - 100) {
                    runSequentialWorkflowAnimation();
                } else {
                    clearAllWorkflowAnimations();
                }
            });
        }
    }

    // ===== MOYEN STATS CARDS AUTOPLAY ANIMATION (PLAY ON SCROLL INTO VIEW) =====
    var moyenSection = $('.moyen-stats-section');
    if (moyenSection.length) {
        var moyenCards = moyenSection.find('.moyen-stat-box');
        var moyenAnimated = false;
        var moyenTimeouts = [];

        function resetMoyenCards() {
            moyenTimeouts.forEach(function(timeout) {
                clearTimeout(timeout);
            });
            moyenTimeouts = [];
            moyenCards.removeClass('auto-lift');
            moyenAnimated = false;
        }

        function runMoyenAnimation() {
            if (moyenAnimated) return;
            moyenAnimated = true;

            // Immediately lift all cards together
            moyenCards.addClass('auto-lift');

            // Wait 3 seconds, then drop them back down one by one (Card 1 to 4)
            var t1 = setTimeout(function() {
                moyenCards.eq(0).removeClass('auto-lift');
            }, 3000);
            moyenTimeouts.push(t1);

            var t2 = setTimeout(function() {
                moyenCards.eq(1).removeClass('auto-lift');
            }, 3300);
            moyenTimeouts.push(t2);

            var t3 = setTimeout(function() {
                moyenCards.eq(2).removeClass('auto-lift');
            }, 3600);
            moyenTimeouts.push(t3);

            var t4 = setTimeout(function() {
                moyenCards.eq(3).removeClass('auto-lift');
            }, 3900);
            moyenTimeouts.push(t4);
        }

        // Use IntersectionObserver if supported, with scroll fallback
        if ('IntersectionObserver' in window) {
            var moyenObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        runMoyenAnimation();
                    } else {
                        resetMoyenCards();
                    }
                });
            }, { threshold: 0.15 });
            moyenObserver.observe(moyenSection[0]);
        } else {
            $(window).on('scroll.moyen', function () {
                var wTop = $(window).scrollTop();
                var wHeight = $(window).height();
                var sTop = moyenSection.offset().top;
                var sHeight = moyenSection.outerHeight();
                if (wTop + wHeight > sTop + 50 && wTop < sTop + sHeight - 50) {
                    runMoyenAnimation();
                } else {
                    resetMoyenCards();
                }
            });
        }
    }

    // ===== EXCELLENCE & IMPACT CARDS AUTOPLAY ANIMATION (PLAY ON SCROLL INTO VIEW) =====
    var excellenceSection = $('.excellence-section');
    if (excellenceSection.length) {
        var excellenceCards = excellenceSection.find('.method-step-card');
        var excellenceAnimated = false;
        var excellenceTimeouts = [];

        function resetExcellenceCards() {
            excellenceTimeouts.forEach(function(timeout) {
                clearTimeout(timeout);
            });
            excellenceTimeouts = [];
            excellenceCards.removeClass('auto-lift');
            excellenceAnimated = false;
        }

        function runExcellenceAnimation() {
            if (excellenceAnimated) return;
            excellenceAnimated = true;

            // Immediately lift all cards together
            excellenceCards.addClass('auto-lift');

            // Wait 3 seconds, then drop them back down one by one (Card 1 to 3)
            var t1 = setTimeout(function() {
                excellenceCards.eq(0).removeClass('auto-lift');
            }, 3000);
            excellenceTimeouts.push(t1);

            var t2 = setTimeout(function() {
                excellenceCards.eq(1).removeClass('auto-lift');
            }, 3300);
            excellenceTimeouts.push(t2);

            var t3 = setTimeout(function() {
                excellenceCards.eq(2).removeClass('auto-lift');
            }, 3600);
            excellenceTimeouts.push(t3);
        }

        // Use IntersectionObserver if supported, with scroll fallback
        if ('IntersectionObserver' in window) {
            var excellenceObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        runExcellenceAnimation();
                    } else {
                        resetExcellenceCards();
                    }
                });
            }, { threshold: 0.15 });
            excellenceObserver.observe(excellenceSection[0]);
        } else {
            $(window).on('scroll.excellence', function () {
                var wTop = $(window).scrollTop();
                var wHeight = $(window).height();
                var sTop = excellenceSection.offset().top;
                var sHeight = excellenceSection.outerHeight();
                if (wTop + wHeight > sTop + 50 && wTop < sTop + sHeight - 50) {
                    runExcellenceAnimation();
                } else {
                    resetExcellenceCards();
                }
            });
        }
    }
    // ===== CUSTOM PREMIUM DROPDOWN FOR QUOTE SERVICES =====
    $('select[name="quote_service"]').each(function() {
        var $this = $(this),
            numberOfOptions = $(this).children('option').length;
        
        $this.addClass('select-hidden'); 
        $this.wrap('<div class="select-custom-wrapper"></div>');
        $this.after('<div class="select-styled"></div>');

        var $styledSelect = $this.next('div.select-styled');
        $styledSelect.text($this.children('option').eq(0).text());
      
        var $list = $('<ul />', {
            'class': 'select-options'
        }).insertAfter($styledSelect);
      
        for (var i = 0; i < numberOfOptions; i++) {
            var $optionText = $this.children('option').eq(i).text();
            var $optionVal = $this.children('option').eq(i).val();
            // Set first option (placeholder) value to empty string
            if (i === 0) {
                $optionVal = "";
            }
            $('<li />', {
                text: $optionText,
                rel: $optionVal,
                class: (i === 0 ? 'select-option-placeholder' : '')
            }).appendTo($list);
        }
      
        var $listItems = $list.children('li');
      
        $styledSelect.click(function(e) {
            e.stopPropagation();
            
            // Clear validation error state when clicking to select
            $(this).removeClass('is-invalid');
            $(this).parent().find('.invalid-feedback').remove();
            
            $('div.select-styled.active').not(this).each(function(){
                $(this).removeClass('active').next('ul.select-options').hide();
            });
            $(this).toggleClass('active').next('ul.select-options').toggle();
        });
      
        $listItems.click(function(e) {
            e.stopPropagation();
            var selectedText = $(this).text();
            var selectedVal = $(this).attr('rel');
            $styledSelect.text(selectedText).removeClass('active');
            $this.val(selectedVal);
            $this.trigger('change');
            $list.hide();
        });
      
        $(document).click(function() {
            $styledSelect.removeClass('active');
            $list.hide();
        });
    });

    // ===== FORM VALIDATION SYSTEM =====
    $('form.quote-form, form[action*="gloservices_contact_form"], form[action*="admin-post.php"]').on('submit', function(e) {
        var $form = $(this);
        var isValid = true;
        
        // Multi-language error messages
        var lang = $('html').attr('lang') || 'fr';
        var isAr = lang.indexOf('ar') === 0;
        var isEn = lang.indexOf('en') === 0;

        var msgRequired = "Ce champ est requis.";
        var msgEmail = "Adresse e-mail invalide.";
        var msgSelect = "Veuillez sélectionner un service.";

        if (isAr) {
            msgRequired = "هذا الحقل مطلوب.";
            msgEmail = "البريد الإلكتروني غير صالح.";
            msgSelect = "يرجى اختيار الخدمة.";
        } else if (isEn) {
            msgRequired = "This field is required.";
            msgEmail = "Invalid email address.";
            msgSelect = "Please select a service.";
        }

        // Validate text/email inputs and textareas
        $form.find('input[required], textarea[required]').each(function() {
            var $input = $(this);
            var val = $.trim($input.val());
            var fieldValid = true;
            var errorMsg = msgRequired;

            if (val === '') {
                fieldValid = false;
            } else if ($input.attr('type') === 'email') {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                if (!emailReg.test(val)) {
                    fieldValid = false;
                    errorMsg = msgEmail;
                }
            }

            if (!fieldValid) {
                isValid = false;
                $input.addClass('is-invalid');
                
                // Append invalid feedback if not present
                var $feedback = $input.siblings('.invalid-feedback');
                if ($feedback.length === 0) {
                    if ($input.parent('.form-floating').length > 0) {
                        $input.parent('.form-floating').append('<div class="invalid-feedback">' + errorMsg + '</div>');
                    } else {
                        $input.after('<div class="invalid-feedback">' + errorMsg + '</div>');
                    }
                } else {
                    $feedback.text(errorMsg);
                }
            } else {
                $input.removeClass('is-invalid');
                $input.siblings('.invalid-feedback').remove();
                $input.parent('.form-floating').find('.invalid-feedback').remove();
            }
        });

        // Validate custom select dropdown
        $form.find('select[name="quote_service"]').each(function() {
            var $select = $(this);
            var val = $select.val();
            var $styledSelect = $select.siblings('.select-styled');
            
            if (val === '' || val === null || val.indexOf('Sélectionner') !== -1 || val.indexOf('Select') !== -1 || val.indexOf('اختيار') !== -1) {
                isValid = false;
                $styledSelect.addClass('is-invalid');
                
                var $feedback = $styledSelect.parent().find('.invalid-feedback');
                if ($feedback.length === 0) {
                    $styledSelect.parent().append('<div class="invalid-feedback d-block">' + msgSelect + '</div>');
                }
            } else {
                $styledSelect.removeClass('is-invalid');
                $styledSelect.parent().find('.invalid-feedback').remove();
            }
        });

        // Validate file uploads on submit (redundancy check)
        $form.find('input[type="file"]').each(function() {
            var $fileInput = $(this);
            var files = $fileInput[0].files;
            
            if (files && files.length > 0) {
                var file = files[0];
                var fileValid = true;
                
                var maxSize = 5 * 1024 * 1024;
                var allowedTypes = ['application/pdf', 'image/jpeg', 'image/jpg', 'image/png'];
                var allowedExts = ['.pdf', '.jpg', '.jpeg', '.png'];
                var ext = file.name.substring(file.name.lastIndexOf('.')).toLowerCase();

                if (file.size > maxSize) {
                    fileValid = false;
                } else if (allowedTypes.indexOf(file.type) === -1 && allowedExts.indexOf(ext) === -1) {
                    fileValid = false;
                }

                if (!fileValid) {
                    isValid = false;
                    $fileInput.addClass('is-invalid');
                    var $container = $fileInput.closest('.custom-file-upload-container');
                    $container.find('.custom-file-trigger-btn').addClass('is-invalid');
                }
            }
        });

        if (!isValid) {
            e.preventDefault();
            // Scroll to the first invalid field
            var $firstInvalid = $form.find('.is-invalid').first();
            if ($firstInvalid.length) {
                var offset = $firstInvalid.offset().top - 120;
                $('html, body').animate({ scrollTop: offset }, 300);
                $firstInvalid.focus();
            }
        }
    });

    // Clear validation styling on focus, click, typing, or changing
    $(document).on('focus click input change', 'input, textarea, select', function() {
        var $el = $(this);
        $el.removeClass('is-invalid');
        $el.siblings('.custom-file-upload-trigger').removeClass('is-invalid');
        $el.siblings('.invalid-feedback').remove();
        $el.parent('.form-floating').find('.invalid-feedback').remove();
        $el.parent('.custom-file-upload-container').find('.invalid-feedback').remove();
    });

    // Progressive File Upload List
    $(document).on('click', '.custom-file-trigger-btn', function() {
        var $btn = $(this);
        var $container = $btn.closest('.custom-file-upload-container');
        var $inputs = $container.find('.custom-file-input-hidden');
        var $activeInput = $inputs.last();
        $activeInput.click();
    });

    $(document).on('change', '.custom-file-input-hidden', function() {
        var $input = $(this);
        var $container = $input.closest('.custom-file-upload-container');
        var $list = $container.find('.selected-files-list');
        var $btn = $container.find('.custom-file-trigger-btn');
        var files = $input[0].files;
        
        if (!files || files.length === 0) {
            return; // Cancelled
        }

        var file = files[0];
        
        // Language variables
        var lang = $('html').attr('lang') || 'fr';
        var isAr = lang.indexOf('ar') === 0;
        var isEn = lang.indexOf('en') === 0;

        // Validation limits
        var maxSize = 5 * 1024 * 1024; // 5MB
        var maxTotalSize = 20 * 1024 * 1024; // 20MB
        var allowedTypes = ['application/pdf', 'image/jpeg', 'image/jpg', 'image/png'];
        var allowedExts = ['.pdf', '.jpg', '.jpeg', '.png'];
        var ext = file.name.substring(file.name.lastIndexOf('.')).toLowerCase();

        // Calculate currently added files and total size
        var currentFilesCount = $list.find('.selected-file-item').length;
        var currentTotalSize = 0;
        $container.find('.custom-file-input-hidden').not($input).each(function() {
            if (this.files && this.files.length > 0) {
                currentTotalSize += this.files[0].size;
            }
        });

        var fileValid = true;
        var errorMsg = "";

        if (currentFilesCount >= 4) {
            fileValid = false;
            errorMsg = isAr ? "لا يمكنك تحميل أكثر من 4 ملفات." : (isEn ? "You cannot upload more than 4 files." : "Vous ne pouvez pas télécharger plus de 4 fichiers.");
        } else if (file.size > maxSize) {
            fileValid = false;
            errorMsg = isAr ? "حجم الملف يتجاوز 5 ميغابايت." : (isEn ? "File size exceeds 5MB." : "Le fichier dépasse la limite de 5 Mo.");
        } else if (allowedTypes.indexOf(file.type) === -1 && allowedExts.indexOf(ext) === -1) {
            fileValid = false;
            errorMsg = isAr ? "صيغة الملف غير صالحة. المسموح به: PDF, JPG, PNG" : (isEn ? "Invalid file format. Allowed: PDF, JPG, PNG" : "Format de fichier invalide. Requis: PDF, JPG, PNG");
        } else if (currentTotalSize + file.size > maxTotalSize) {
            fileValid = false;
            errorMsg = isAr ? "الحجم الإجمالي للملفات يتجاوز 20 ميغابايت." : (isEn ? "Total file size exceeds 20MB." : "La taille totale des fichiers dépasse 20 Mo.");
        }

        // Clear any previous error message for this container
        $container.find('.invalid-feedback').remove();
        $btn.removeClass('is-invalid');

        if (!fileValid) {
            $input.val(''); // Clear value so it can be re-selected
            $btn.addClass('is-invalid');
            $container.append('<div class="invalid-feedback d-block">' + errorMsg + '</div>');
            return;
        }

        // If valid, add unique ID to the input
        var fileId = 'file-' + Math.random().toString(36).substr(2, 9);
        $input.attr('data-file-id', fileId);

        // Display file size nicely
        var sizeInMb = (file.size / (1024 * 1024)).toFixed(2) + ' Mo';
        if (isEn) {
            sizeInMb = (file.size / (1024 * 1024)).toFixed(2) + ' MB';
        } else if (isAr) {
            sizeInMb = (file.size / (1024 * 1024)).toFixed(2) + ' ميغابايت';
        }

        // Append visual item
        var itemHtml = '<div class="selected-file-item" data-file-id="' + fileId + '">' +
            '<span class="file-name"><i class="far fa-file-alt me-2"></i>' + file.name + ' (' + sizeInMb + ')</span>' +
            '<button type="button" class="btn-remove-file" title="' + (isAr ? 'حذف' : (isEn ? 'Remove' : 'Supprimer')) + '"><i class="fas fa-times-circle"></i></button>' +
            '</div>';
        $list.append(itemHtml);

        // Append a NEW empty file input for the next selection
        var newInputHtml = '<input type="file" name="quote_file[]" class="custom-file-input-hidden" accept=".pdf,.jpg,.jpeg,.png">';
        $container.find('.hidden-inputs-container').append(newInputHtml);

        // Update button text to "Ajouter un fichier"
        var addText = "Ajouter un fichier";
        if (isEn) {
            addText = "Add a file";
        } else if (isAr) {
            addText = "إضافة ملف";
        }
        $btn.find('.custom-file-btn-text').text(addText);

        // Hide trigger button if we hit the limit of 4
        if ($list.find('.selected-file-item').length >= 4) {
            $btn.hide();
        }
    });

    $(document).on('click', '.btn-remove-file', function(e) {
        e.stopPropagation();
        var $item = $(this).closest('.selected-file-item');
        var fileId = $item.attr('data-file-id');
        var $container = $item.closest('.custom-file-upload-container');
        var $btn = $container.find('.custom-file-trigger-btn');
        var $list = $container.find('.selected-files-list');

        // Remove the associated input element
        $container.find('.custom-file-input-hidden[data-file-id="' + fileId + '"]').remove();
        
        // Remove visual item
        $item.remove();

        // Clear any validation errors
        $container.find('.invalid-feedback').remove();
        $btn.removeClass('is-invalid');

        var currentFilesCount = $list.find('.selected-file-item').length;

        // Show button again since we have space
        if (currentFilesCount < 4) {
            $btn.show();
        }

        // Change button text back if list is empty
        if (currentFilesCount === 0) {
            var lang = $('html').attr('lang') || 'fr';
            var isAr = lang.indexOf('ar') === 0;
            var isEn = lang.indexOf('en') === 0;
            var chooseText = "Choisir un fichier";
            if (isEn) {
                chooseText = "Choose a file";
            } else if (isAr) {
                chooseText = "اختيار ملف";
            }
            $btn.find('.custom-file-btn-text').text(chooseText);
        }
    });

    // For custom options click
    $(document).on('click', '.select-options li', function() {
        var $li = $(this);
        var $wrapper = $li.closest('.select-custom-wrapper');
        var $styledSelect = $wrapper.find('.select-styled');
        
        if ($li.attr('rel') !== '') {
            $styledSelect.removeClass('is-invalid');
            $wrapper.find('.invalid-feedback').remove();
        }
    });

    // Clear file-upload trigger is-invalid on click
    $(document).on('click', '.custom-file-trigger-btn', function() {
        var $btn = $(this);
        $btn.removeClass('is-invalid');
        $btn.parent('.custom-file-upload-container').find('.invalid-feedback').remove();
    });

    // === PROJECT CARD SLIDESHOW ===
    var initProjectSlideshows = function() {
        $('.project-gallery-slideshow').each(function() {
            var $container = $(this);
            var $imgs = $container.find('.project-slideshow-img');
            if ($imgs.length <= 1) return; // No slideshow needed if only 1 image

            var currentIndex = 0;
            var intervalTime = parseInt($container.data('interval')) || 10000; // default 10 seconds

            setInterval(function() {
                var nextIndex = (currentIndex + 1) % $imgs.length;
                
                // Transition: fade out current, fade in next
                $imgs.eq(currentIndex).removeClass('active');
                var $nextImg = $imgs.eq(nextIndex);
                $nextImg.addClass('active');
                
                // Update the zoom/lightbox href to match the current image URL
                var newSrc = $nextImg.attr('src');
                $container.closest('.project-card-modern, .project-card-v2').find('[data-lightbox="portfolio"]').attr('href', newSrc);
                
                currentIndex = nextIndex;
            }, intervalTime);
        });
    };

    // Initialize slideshows
    initProjectSlideshows();

})(jQuery);
