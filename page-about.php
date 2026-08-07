<?php
/**
 * Template Name: Page About (Qui sommes-nous)
 *
 * @package Gloservices
 */

get_header();
?>

<style>
/* CSS crossfade slideshow */
.card-slideshow {
    border: 1px solid rgba(0, 0, 0, 0.08);
    position: relative;
}
.card-slideshow .slide-img {
    transition: opacity 1s ease-in-out;
    opacity: 0;
}
.card-slideshow .slide-img.active {
    opacity: 1;
}

/* Force rounded corners on all about page frames/cards */
.tc-header-style2 .facts-wrapper,
.tc-about-style3 .md-card,
.tc-about-style3 .lg-card,
.tc-header-style2 .bg-white.p-4.rounded-4,
.tc-process-style2 .accordion-item,
.tc-process-style2 .img-wrapper,
.tc-testimonials-style2 .bg-white.p-4.rounded-4,
.card-slideshow {
    border-radius: 20px !important;
}
.tc-process-style2 .accordion-button {
    border-radius: 20px 20px 0 0 !important;
}

/* Slideshow Image Fixes (No squishing, cover style) */
.card-slideshow img {
    max-width: none !important;
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
}

/* Division Cards Layout and Hover Overrides */
.tc-about-style3 .top-info .numbers-boxes {
    display: flex !important;
    flex-direction: row !important;
    align-items: stretch !important;
    gap: 24px !important;
}
.tc-about-style3 .top-info .numbers-boxes .md-card,
.tc-about-style3 .top-info .numbers-boxes .lg-card {
    width: auto !important;
    max-width: 100% !important;
    flex: 1 1 0% !important;
    margin-top: 0 !important;
    margin-left: 0 !important;
    clip-path: none !important;
    -webkit-clip-path: none !important;
    border-radius: 20px !important;
    overflow: hidden !important;
    display: flex !important;
    flex-direction: column !important;
    justify-content: space-between !important;
    box-shadow: var(--shadow) !important;
    border: 1px solid rgba(0, 0, 0, 0.05) !important;
    padding: 24px !important;
    transition: var(--transition) !important;
}
.tc-about-style3 .top-info .numbers-boxes .md-card {
    background-color: #F8FAFC !important;
    color: var(--dark) !important;
}
.tc-about-style3 .top-info .numbers-boxes .lg-card {
    background-color: #ECFDF5 !important;
    color: var(--dark) !important;
}
.tc-about-style3 .top-info .numbers-boxes .md-card h4,
.tc-about-style3 .top-info .numbers-boxes .lg-card h4 {
    font-family: 'Outfit', sans-serif !important;
    font-size: 24px !important;
    font-weight: 700 !important;
    letter-spacing: -0.5px !important;
    margin-bottom: 8px !important;
    color: var(--dark) !important;
}
.tc-about-style3 .top-info .numbers-boxes .md-card p,
.tc-about-style3 .top-info .numbers-boxes .lg-card p {
    font-family: 'Inter', sans-serif !important;
    font-size: 14.5px !important;
    line-height: 1.6 !important;
    font-weight: 400 !important;
    margin-bottom: 0 !important;
}
.tc-about-style3 .top-info .numbers-boxes .md-card p {
    color: var(--gray-600) !important;
}
.tc-about-style3 .top-info .numbers-boxes .lg-card p {
    color: #065F46 !important;
}
.tc-about-style3 .top-info .numbers-boxes .md-card:hover {
    background-color: var(--white) !important;
    border: 1px solid var(--primary) !important;
    color: var(--dark) !important;
    transform: translateY(-5px) !important;
    box-shadow: var(--shadow-lg) !important;
}
.tc-about-style3 .top-info .numbers-boxes .lg-card:hover {
    background-color: var(--white) !important;
    border: 1px solid var(--primary) !important;
    color: var(--dark) !important;
    transform: translateY(-5px) !important;
    box-shadow: var(--shadow-lg) !important;
}
.tc-about-style3 .top-info .numbers-boxes .lg-card:hover p {
    color: var(--gray-600) !important;
}

@media (max-width: 767.98px) {
    .tc-about-style3 .top-info .numbers-boxes {
        flex-direction: column !important;
        gap: 20px !important;
    }
}

/* ============================================================
   ACCORDION TEXT & ACTIVE OVERRIDES
   ============================================================ */
.tc-process-style2 .accordion-item .accordion-button:not(.collapsed) {
    font-size: 26px !important;
}
.tc-process-style2 .accordion-item .accordion-button:not(.collapsed) h3 {
    font-size: 26px !important;
    text-decoration: underline !important;
    text-underline-offset: 8px !important;
    text-decoration-color: var(--primary) !important;
}
.tc-process-style2 .accordion-item .accordion-body .text,
.tc-process-style2 .accordion-item .accordion-body p {
    font-size: 17px !important;
    line-height: 1.7 !important;
    color: #4B5563 !important;
}

/* Accordion open/close icon customizations */
.tc-process-style2 .accordion-item .accordion-button:after {
    background-image: none !important;
    content: "\f067" !important; /* Plus icon */
    font-family: "Font Awesome 5 Free" !important;
    font-weight: 900 !important;
    font-size: 18px !important;
    color: var(--dark) !important;
    transform: none !important;
    display: inline-block !important;
}
.tc-process-style2 .accordion-item .accordion-button:not(.collapsed):after {
    background-image: none !important;
    content: "\f068" !important; /* Minus icon */
    font-family: "Font Awesome 5 Free" !important;
    font-weight: 900 !important;
    font-size: 18px !important;
    color: var(--primary) !important;
    transform: none !important;
    display: inline-block !important;
}

/* ============================================================
   RESPONSIVE NOTRE APPROCHE LAYOUT FOR MOBILE & TABLET (< 992px)
   ============================================================ */
/* ============================================================
   RESPONSIVE NOTRE APPROCHE LAYOUT FOR MOBILE & TABLET (< 992px)
   ============================================================ */
@media (max-width: 991.98px) {
    .tc-process-style2 .imgs {
        display: grid !important;
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 48px 20px !important;
        margin: 40px auto 10px auto !important;
        max-width: 440px !important;
        height: auto !important;
        position: relative !important;
        background-image: none !important;
        background: none !important;
        padding: 0 10px !important;
    }
    
    .tc-process-style2 .imgs .img,
    .tc-process-style2 .imgs .img:nth-of-type(1),
    .tc-process-style2 .imgs .img:nth-of-type(2),
    .tc-process-style2 .imgs .img:nth-of-type(3),
    .tc-process-style2 .imgs .img:nth-of-type(4) {
        position: relative !important;
        top: auto !important;
        left: auto !important;
        right: auto !important;
        bottom: auto !important;
        transform: none !important;
        width: 100% !important;
        max-width: 170px !important;
        margin: 0 auto !important;
        aspect-ratio: 1 / 1 !important;
        height: auto !important;
        border-radius: 50% !important;
        border: 5px solid #FFFFFF !important;
        overflow: visible !important;
        box-shadow: 0 12px 30px rgba(15, 23, 42, 0.12), 0 0 0 2px rgba(16, 185, 129, 0.25) !important;
        transition: transform 0.3s ease, box-shadow 0.3s ease !important;
    }

    .tc-process-style2 .imgs .img:hover {
        transform: translateY(-4px) !important;
        box-shadow: 0 16px 36px rgba(16, 185, 129, 0.22), 0 0 0 2px rgba(16, 185, 129, 0.4) !important;
    }

    .tc-process-style2 .imgs .img img {
        width: 100% !important;
        height: 100% !important;
        border-radius: 50% !important;
        object-fit: cover !important;
        display: block !important;
    }

    .tc-process-style2 .imgs .img .txt,
    .tc-process-style2 .imgs .img:nth-of-type(1) .txt,
    .tc-process-style2 .imgs .img:nth-of-type(2) .txt,
    .tc-process-style2 .imgs .img:nth-of-type(3) .txt,
    .tc-process-style2 .imgs .img:nth-of-type(4) .txt {
        position: absolute !important;
        bottom: -14px !important;
        left: 50% !important;
        top: auto !important;
        right: auto !important;
        transform: translateX(-50%) !important;
        background: linear-gradient(135deg, #10B981 0%, #0EA5E9 100%) !important;
        color: #FFFFFF !important;
        border: 2px solid #FFFFFF !important;
        border-radius: 9999px !important;
        padding: 4px 16px !important;
        font-size: 0.82rem !important;
        font-weight: 600 !important;
        white-space: nowrap !important;
        box-shadow: 0 4px 14px rgba(16, 185, 129, 0.35) !important;
        z-index: 10 !important;
    }
}

@media (max-width: 480px) {
    .tc-process-style2 .imgs {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 38px 12px !important;
        max-width: 340px !important;
    }
    .tc-process-style2 .imgs .img {
        max-width: 140px !important;
        border-width: 4px !important;
    }
    .tc-process-style2 .imgs .img .txt {
        font-size: 0.76rem !important;
        padding: 3px 12px !important;
        bottom: -12px !important;
    }
}

@media (max-width: 360px) {
    .tc-process-style2 .imgs {
        gap: 34px 8px !important;
        max-width: 290px !important;
    }
    .tc-process-style2 .imgs .img {
        max-width: 125px !important;
        border-width: 3px !important;
    }
    .tc-process-style2 .imgs .img .txt {
        font-size: 0.7rem !important;
        padding: 2px 10px !important;
        bottom: -10px !important;
    }
}

/* ============================================================
   DESKTOP NOTRE APPROCHE LAYOUT OVERRIDES (>= 992px)
   ============================================================ */
@media (min-width: 992px) {
    .tc-process-style2 .imgs {
        display: block !important;
        position: relative !important;
        height: 720px !important;
        margin-top: 0 !important;
        background-image: none !important; /* Suppression du cadre / motif dégradé arrière-plan */
        background: none !important;
    }
    /* Removal of dark gradient overlays on photo bubbles */
    .tc-process-style2 .imgs .img:after,
    .tc-process-style2 .imgs .img:before {
        display: none !important;
        content: none !important;
        background: none !important;
        background-image: none !important;
    }
    .tc-process-style2 .imgs .img {
        position: absolute !important;
        border-radius: 50% !important;
        border: 6px solid #FFFFFF !important;
        box-shadow: 0 16px 40px rgba(15, 23, 42, 0.14), 0 0 0 2px rgba(16, 185, 129, 0.25) !important;
        overflow: visible !important;
        margin: 0 !important;
        transition: transform 0.4s ease, box-shadow 0.4s ease !important;
    }
    .tc-process-style2 .imgs .img:hover {
        transform: scale(1.04) !important;
        box-shadow: 0 20px 48px rgba(16, 185, 129, 0.22), 0 0 0 3px rgba(16, 185, 129, 0.4) !important;
    }
    .tc-process-style2 .imgs .img img {
        border-radius: 50% !important;
        object-fit: cover !important;
    }
    
    /* Bubble 1: Personnalisé */
    .tc-process-style2 .imgs .img:nth-of-type(1) {
        width: 340px !important;
        height: 340px !important;
        left: 20px !important;
        top: -30px !important;
        z-index: 2 !important;
    }
    .tc-process-style2 .imgs .img:nth-of-type(1) .txt {
        font-size: 20px !important;
        position: absolute !important;
        top: 65px !important;
        right: -50px !important;
        left: auto !important;
        bottom: auto !important;
        z-index: 10 !important;
        border: 1px solid rgba(255, 255, 255, 0.4) !important;
        background: linear-gradient(135deg, #10B981 0%, #0EA5E9 100%) !important;
        color: #ffffff !important;
        border-radius: 9999px !important;
        padding: 5px 22px !important;
        transform: none !important;
        box-shadow: 0 4px 14px rgba(16, 185, 129, 0.3) !important;
    }
    
    /* Bubble 2: Réactif (Rapprochée de la bulle Optimisation) */
    .tc-process-style2 .imgs .img:nth-of-type(2) {
        right: 25px !important;
        top: 260px !important; /* Rapprochée de la bulle Optimisation (à top: 420px) */
        width: 170px !important;
        height: 170px !important;
        z-index: 3 !important;
        left: auto !important;
    }
    .tc-process-style2 .imgs .img:nth-of-type(2) .txt {
        font-size: 17px !important;
        position: absolute !important;
        bottom: -10px !important;
        right: 50% !important;
        left: auto !important;
        top: auto !important;
        z-index: 10 !important;
        color: #ffffff !important;
        background: linear-gradient(135deg, #10B981 0%, #0EA5E9 100%) !important;
        border: 1px solid rgba(255, 255, 255, 0.4) !important;
        border-radius: 9999px !important;
        padding: 4px 18px !important;
        transform: translateX(50%) !important;
        white-space: nowrap !important;
        box-shadow: 0 4px 14px rgba(16, 185, 129, 0.3) !important;
    }
    
    /* Bubble 3: Qualité */
    .tc-process-style2 .imgs .img:nth-of-type(3) {
        left: -30px !important;
        top: 390px !important;
        width: 210px !important;
        height: 210px !important;
        z-index: 3 !important;
    }
    .tc-process-style2 .imgs .img:nth-of-type(3) .txt {
        font-size: 17px !important;
        position: absolute !important;
        bottom: -10px !important;
        right: 50% !important;
        left: auto !important;
        top: auto !important;
        z-index: 10 !important;
        color: #ffffff !important;
        background: linear-gradient(135deg, #10B981 0%, #0EA5E9 100%) !important;
        border: 1px solid rgba(255, 255, 255, 0.4) !important;
        border-radius: 9999px !important;
        padding: 4px 18px !important;
        transform: translateX(50%) !important;
        white-space: nowrap !important;
        box-shadow: 0 4px 14px rgba(16, 185, 129, 0.3) !important;
    }
    
    /* Bubble 4: Optimisation */
    .tc-process-style2 .imgs .img:nth-of-type(4) {
        right: 30px !important;
        top: 420px !important;
        width: 230px !important;
        height: 230px !important;
        z-index: 2 !important;
        left: auto !important;
    }
    .tc-process-style2 .imgs .img:nth-of-type(4) .txt {
        font-size: 19px !important;
        position: absolute !important;
        top: 65px !important;
        left: -50px !important;
        right: auto !important;
        bottom: auto !important;
        z-index: 10 !important;
        background: linear-gradient(135deg, #10B981 0%, #0EA5E9 100%) !important;
        color: #ffffff !important;
        border: 1px solid rgba(255, 255, 255, 0.4) !important;
        border-radius: 9999px !important;
        padding: 4px 22px !important;
        transform: none !important;
        box-shadow: 0 4px 14px rgba(16, 185, 129, 0.3) !important;
    }
}

/* ============================================================
   RTL / ARABIC SPECIFIC STYLING OVERRIDES
   ============================================================ */
@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap');

body.rtl, body.rtl *:not(.fa):not(.fas):not(.far):not(.fab):not([class^="fa-"]):not([class*=" fa-"]) {
    font-family: 'Cairo', sans-serif !important;
}
body.rtl .tc-process-style2 .accordion-item .accordion-button:after,
body.rtl .tc-process-style2 .accordion-item .accordion-button:not(.collapsed):after {
    font-family: "Font Awesome 5 Free" !important;
}

body.rtl .tc-process-style2 .accordion-item .accordion-button .num {
    margin-left: 30px !important;
    margin-right: 0 !important;
}

body.rtl .tc-process-style2 .accordion-item .accordion-button:after {
    margin-left: 0 !important;
    margin-right: auto !important;
}

@media (min-width: 992px) {
    body.rtl .tc-process-style2 .imgs .img:nth-of-type(1) {
        right: 20px !important;
        left: auto !important;
        top: -30px !important;
    }
    body.rtl .tc-process-style2 .imgs .img:nth-of-type(1) .txt {
        left: -50px !important;
        right: auto !important;
    }
    
    body.rtl .tc-process-style2 .imgs .img:nth-of-type(2) {
        left: 10px !important;
        right: auto !important;
        top: 210px !important;
    }
    body.rtl .tc-process-style2 .imgs .img:nth-of-type(2) .txt {
        left: auto !important;
        right: 20px !important;
    }
    
    body.rtl .tc-process-style2 .imgs .img:nth-of-type(3) {
        right: -30px !important;
        left: auto !important;
        top: 390px !important;
    }
    body.rtl .tc-process-style2 .imgs .img:nth-of-type(3) .txt {
        left: 50% !important;
        right: auto !important;
        transform: translate(-50%) !important;
    }
    
    body.rtl .tc-process-style2 .imgs .img:nth-of-type(4) {
        left: 30px !important;
        right: auto !important;
        top: 420px !important;
    }
    body.rtl .tc-process-style2 .imgs .img:nth-of-type(4) .txt {
        right: -50px !important;
        left: auto !important;
    }
}
</style>

<!-- ==========================================
     HERO & STATS SECTION (tc-header-style2)
     ========================================== -->
<header class="tc-header-style2 py-5 text-white position-relative" style="background: linear-gradient(rgba(15, 23, 42, 0.75), rgba(15, 23, 42, 0.75)), url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/archiback.jpg') center center / cover no-repeat;">
    <div class="container">
        <div class="top-info">
            <div class="row align-items-center justify-content-between g-5">
                <div class="col-lg-8 wow slideInLeft" data-wow-delay="0.1s">
                    <span class="section-badge"><?php _e('À propos', 'gloservices'); ?></span>
                    <h1 class="display-4 fw-bold mt-3 mb-4 text-white" style="line-height: 1.2;">
                        <?php _e('L\'ingénierie au service du', 'gloservices'); ?> 
                        <span class="text-primary"><?php _e('développement', 'gloservices'); ?></span> 
                        <?php _e('et de la', 'gloservices'); ?> 
                        <span class="text-primary"><?php _e('performance', 'gloservices'); ?></span>
                    </h1>
                </div>
                <div class="col-lg-4 wow slideInRight" data-wow-delay="0.1s">
                    <div class="side-info ps-lg-4">
                        <div class="facts-wrapper p-4 bg-white rounded-4 shadow-sm border border-light position-relative overflow-hidden mb-4">
                            <div class="title fsz-12 text-uppercase mb-3 fw-bold text-muted">
                                <i class="fas fa-chart-line text-primary me-2"></i> <?php _e('Les Faits', 'gloservices'); ?>
                            </div>
                            <div class="numbers">
                                <div class="row">
                                    <div class="col-6">
                                        <h2 class="num fw-bold text-dark mb-0">
                                            <span class="counter"><?php echo esc_html(get_option('gloservices_stats_customers', '100')); ?></span>+
                                        </h2>
                                        <p class="text-muted small mb-0"><?php _e('Clients Satisfaits', 'gloservices'); ?></p>
                                    </div>
                                    <div class="col-6">
                                        <h2 class="num fw-bold text-dark mb-0">
                                            <span class="counter"><?php echo esc_html(get_option('gloservices_stats_projects', '30')); ?></span>+
                                        </h2>
                                        <p class="text-muted small mb-0"><?php _e('Projets Réalisés', 'gloservices'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text text-white" style="font-size: 0.95rem; line-height: 1.6; opacity: 0.95;">
                            <?php _e('Notre signature est la conception sur mesure, l\'exécution rigoureuse et le suivi client pour des projets d\'infrastructures et de bâtiments durables.', 'gloservices'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==========================================
     COMPANY PROFILE SECTION (tc-about-style3)
     ========================================== -->
<section class="tc-about-style3 py-5">
    <div class="top-info">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="info">
                        <h3 class="fsz-30 text-uppercase fw-bold text-dark mb-4">
                            <?php _e('Créé en 2018,', 'gloservices'); ?>
                        </h3>
                        <p class="text-dark mb-3" style="font-size: 1.05rem; line-height: 1.7;">
                            <?php _e('GLOBUILD SARL est un bureau d\'études techniques et d\'ingénierie intervenant dans les secteurs des infrastructures, des ouvrages d\'art, du bâtiment, des aménagements urbains et des réseaux divers.', 'gloservices'); ?>
                        </p>
                        <p class="text-dark mb-4" style="font-size: 1.05rem; line-height: 1.7;">
                            <?php _e('Son organisation repose sur une approche intégrée permettant de couvrir l\'ensemble du cycle de vie des projets, depuis les études préliminaires et les investigations techniques jusqu\'au suivi de l\'exécution des travaux et aux opérations de réception.', 'gloservices'); ?>
                        </p>
                        <p class="text-muted mb-4" style="font-size: 0.95rem; line-height: 1.7;">
                            <?php _e('Chez GLOBUILD, nous mettons notre expertise au service de solutions durables et innovantes, pensées pour répondre aux exigences d\'aujourd\'hui tout en anticipant celles de demain.', 'gloservices'); ?>
                        </p>
                        <a href="<?php echo esc_url(gloservices_translated_page_url('projet')); ?>" class="btn btn-primary mt-3">
                            <span><?php _e('Nos Références', 'gloservices'); ?> <i class="fas fa-arrow-right ms-2"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="numbers-boxes d-flex flex-column flex-md-row gap-4 h-100 align-items-stretch">
                        <!-- Division Card 1 -->
                        <div class="md-card flex-fill p-4 rounded-4 d-flex flex-column justify-content-between shadow-sm" style="transition: var(--transition);">
                            <div id="infra-slideshow" class="card-slideshow position-relative overflow-hidden mb-3" style="height: 180px;">
                                <img class="slide-img active position-absolute w-100 h-100" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/autoroute.jpg" style="object-fit: cover; z-index: 1;" alt="Autoroute">
                                <img class="slide-img position-absolute w-100 h-100" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/tunnel.jpg" style="object-fit: cover; z-index: 1;" alt="Tunnel">
                            </div>
                            <div class="card-icon mb-4">
                                <div class="btn-sm-square bg-primary text-white rounded-circle" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fa fa-road fa-lg"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="fw-bold mb-2"><?php _e('Infrastructures & VRD', 'gloservices'); ?></h4>
                                <p class="small mb-0">
                                    <?php _e('Maîtrise d\'œuvre, études routières, réseaux divers (assainissement, eau potable, électricité).', 'gloservices'); ?>
                                </p>
                            </div>
                        </div>
                        <!-- Division Card 2 -->
                        <div class="lg-card flex-fill p-4 rounded-4 d-flex flex-column justify-content-between shadow-sm" style="transition: var(--transition);">
                            <div id="batiment-slideshow" class="card-slideshow position-relative overflow-hidden mb-3" style="height: 180px;">
                                <img class="slide-img active position-absolute w-100 h-100" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/batimangrus.jpg" style="object-fit: cover; z-index: 1;" alt="Bâtiment Gros Œuvre">
                                <img class="slide-img position-absolute w-100 h-100" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/plan.jpg" style="object-fit: cover; z-index: 1;" alt="Plan de structure">
                            </div>
                            <div class="card-icon mb-4">
                                <div class="btn-sm-square bg-primary text-white rounded-circle" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fa fa-building fa-lg"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="fw-bold mb-2"><?php _e('Bâtiments & Génie Civil', 'gloservices'); ?></h4>
                                <p class="small mb-0">
                                    <?php _e('Études de structures, béton armé, charpente métallique, fluides et coordination technique.', 'gloservices'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     NOS ENGAGEMENTS SECTION (HIGH-END ARCHITECTURAL DESIGN)
     ========================================== -->
<section class="engagements-section py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <span class="section-badge"><?php _e('Nos Engagements', 'gloservices'); ?></span>
            <h2 class="section-main-title mt-2 mb-3"><?php _e('Garantir la performance, la sécurité et la durabilité', 'gloservices'); ?></h2>
            <p class="section-subtext text-muted mb-0"><?php _e('Les piliers fondamentaux qui guident l\'ensemble de nos interventions d\'ingénierie et de conseil BTP.', 'gloservices'); ?></p>
        </div>
        
        <div class="row g-4">
            <!-- Pillar 1 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="engagement-card h-100">
                    <div class="card-top-bar"></div>
                    <span class="engagement-num">01</span>
                    <div class="engagement-icon-box">
                        <i class="fas fa-drafting-compass"></i>
                    </div>
                    <h4 class="engagement-title"><?php _e('Expertise Pluridisciplinaire', 'gloservices'); ?></h4>
                    <p class="engagement-text">
                        <?php _e('GLOBUILD combine des compétences variées en structures, VRD et bâtiment pour offrir des solutions complètes et pérennes.', 'gloservices'); ?>
                    </p>
                    <div class="card-bottom-line"></div>
                </div>
            </div>

            <!-- Pillar 2 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="engagement-card h-100">
                    <div class="card-top-bar"></div>
                    <span class="engagement-num">02</span>
                    <div class="engagement-icon-box">
                        <i class="fas fa-cube"></i>
                    </div>
                    <h4 class="engagement-title"><?php _e('Innovation & Technologie', 'gloservices'); ?></h4>
                    <p class="engagement-text">
                        <?php _e('Modélisation 3D avancée, outils de calcul de pointe et audits digitaux pour optimiser chaque phase de la conception.', 'gloservices'); ?>
                    </p>
                    <div class="card-bottom-line"></div>
                </div>
            </div>

            <!-- Pillar 3 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="engagement-card h-100">
                    <div class="card-top-bar"></div>
                    <span class="engagement-num">03</span>
                    <div class="engagement-icon-box">
                        <i class="fas fa-stopwatch"></i>
                    </div>
                    <h4 class="engagement-title"><?php _e('Respect des Délais & Budget', 'gloservices'); ?></h4>
                    <p class="engagement-text">
                        <?php _e('Planification rigoureuse et suivi continu pour assurer la livraison de vos ouvrages dans le strict respect de vos exigences.', 'gloservices'); ?>
                    </p>
                    <div class="card-bottom-line"></div>
                </div>
            </div>

            <!-- Pillar 4 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="engagement-card h-100">
                    <div class="card-top-bar"></div>
                    <span class="engagement-num">04</span>
                    <div class="engagement-icon-box">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h4 class="engagement-title"><?php _e('Accompagnement & Éco-Conception', 'gloservices'); ?></h4>
                    <p class="engagement-text">
                        <?php _e('Présence proactive à vos côtés de la faisabilité au parfait achèvement, engagés envers la durabilité environnementale.', 'gloservices'); ?>
                    </p>
                    <div class="card-bottom-line"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     OUR APPROACH SECTION (tc-process-style2)
     ========================================== -->
<section class="tc-process-style2 py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <span class="section-badge"><?php _e('Notre Approche', 'gloservices'); ?></span>
            <h2 class="section-main-title mt-3 mb-4"><?php _e('Une méthodologie rigoureuse pour vos projets', 'gloservices'); ?></h2>
        </div>
        <div class="content mt-5">
            <div class="row g-5 align-items-center">
                <!-- Accordion Side -->
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="accordion" id="accordionProcess">
                        <!-- Step 1 -->
                        <div class="accordion-item mb-3 border border-light rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-bold text-dark p-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="num"><?php _e('1/', 'gloservices'); ?></span> <h3><?php _e('ÉTUDES & INVESTIGATIONS', 'gloservices'); ?></h3>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionProcess">
                                <div class="accordion-body px-4 pb-4 pt-0">
                                    <p class="text-muted mb-0 small">
                                        <?php _e('Analyse approfondie du site, études de faisabilité techniques et environnementales, et investigations géotechniques préalables.', 'gloservices'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div class="accordion-item mb-3 border border-light rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-bold text-dark p-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="num"><?php _e('2/', 'gloservices'); ?></span> <h3><?php _e('CONCEPTION TECHNIQUE', 'gloservices'); ?></h3>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionProcess">
                                <div class="accordion-body px-4 pb-4 pt-0">
                                    <p class="text-muted mb-0 small">
                                        <?php _e('Élaboration des avant-projets (APS/APD), calculs de structures détaillés, métrés estimatifs et établissement des dossiers de consultation.', 'gloservices'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div class="accordion-item mb-3 border border-light rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fw-bold text-dark p-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="num"><?php _e('3/', 'gloservices'); ?></span> <h3><?php _e('RÉALISATION & SUIVI', 'gloservices'); ?></h3>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionProcess">
                                <div class="accordion-body px-4 pb-4 pt-0">
                                    <p class="text-muted mb-0 small">
                                        <?php _e('Assistance technique au maître d\'ouvrage, suivi rigoureux de l\'exécution des travaux de construction et coordination de chantier.', 'gloservices'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Step 4 -->
                        <div class="accordion-item mb-3 border border-light rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed fw-bold text-dark p-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span class="num"><?php _e('4/', 'gloservices'); ?></span> <h3><?php _e('RÉCEPTION DES OUVRAGES', 'gloservices'); ?></h3>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionProcess">
                                <div class="accordion-body px-4 pb-4 pt-0">
                                    <p class="text-muted mb-0 small">
                                        <?php _e('Contrôle final de conformité réglementaire, assistance lors des opérations préalables à la réception et mise en service des installations.', 'gloservices'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Images Grid Side -->
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="imgs">
                        <div class="img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/about.jpg" class="img-cover w-100 h-100" style="object-fit: cover;" alt="<?php esc_attr_e('Bureau d\'études Globuild', 'gloservices'); ?>" loading="lazy">
                            <span class="txt sub-font"><?php _e('Personnalisé', 'gloservices'); ?></span>
                        </div>
                        <div class="img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/feature.jpg" class="img-cover w-100 h-100" style="object-fit: cover;" alt="<?php esc_attr_e('Ingénierie BTP et Structures Globuild', 'gloservices'); ?>" loading="lazy">
                            <span class="txt sub-font"><?php _e('Réactif', 'gloservices'); ?></span>
                        </div>
                        <div class="img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/carousel-1.jpg" class="img-cover w-100 h-100" style="object-fit: cover;" alt="<?php esc_attr_e('Projet BTP Globuild au Maroc', 'gloservices'); ?>" loading="lazy">
                            <span class="txt sub-font"><?php _e('Qualité', 'gloservices'); ?></span>
                        </div>
                        <div class="img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/carousel-2.jpg" class="img-cover w-100 h-100" style="object-fit: cover;" alt="<?php esc_attr_e('Solutions Numériques BTP Globuild', 'gloservices'); ?>" loading="lazy">
                            <span class="txt sub-font"><?php _e('Optimisation', 'gloservices'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg"></div>
</section>

<!-- ==========================================
     TESTIMONIALS SECTION (SLIDER STYLE MATCHING BETB)
     ========================================== -->
<?php
// Synchronized Testimonial Slider dynamically loaded from WordPress
$testimonials_query = new WP_Query([
    'post_type'      => 'testimonial',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => 'menu_order title',
    'order'          => 'ASC',
]);

$js_testimonials = [];
if ($testimonials_query->have_posts()) {
    while ($testimonials_query->have_posts()) {
        $testimonials_query->the_post();
        $t_id = get_the_ID();
        $name = get_the_title();
        $role = get_post_meta($t_id, '_testimonial_role', true) ?: __('Partenaire', 'gloservices');
        $raw_content = get_the_content() ? get_the_content() : get_the_excerpt();
        $quote = '"' . wp_strip_all_tags(gloservices_translate($raw_content)) . '"';
        $img_url = get_the_post_thumbnail_url($t_id, 'full');
        if (!$img_url) {
            $img_url = get_template_directory_uri() . '/assets/img/autoroute.jpg';
        }
        $translated_name = gloservices_translate($name);
        $letter = mb_substr(trim($translated_name), 0, 1, 'UTF-8');

        $js_testimonials[] = [
            'image'  => $img_url,
            'text'   => $quote,
            'name'   => $translated_name,
            'role'   => gloservices_translate($role),
            'letter' => strtoupper($letter),
        ];
    }
    wp_reset_postdata();
}

if (empty($js_testimonials)) {
    $js_testimonials = [
        [
            'image'  => get_template_directory_uri() . '/assets/img/autoroute.jpg',
            'text'   => '"GLOBUILD a su transformer notre vision en réalité avec une précision incroyable. Leur expertise pluridisciplinaire et leur réactivité ont fait toute la différence. Un partenaire de confiance pour des projets complexes !"',
            'name'   => 'Tarik',
            'role'   => __('Promoteur immobilier', 'gloservices'),
            'letter' => 'T',
        ],
        [
            'image'  => get_template_directory_uri() . '/assets/img/tunnel.jpg',
            'text'   => '"De l\'étude d\'avant-projet à l\'assistance technique sur le chantier, le professionnalisme de GLOBUILD a garanti un strict respect de nos contraintes budgétaires et calendaires."',
            'name'   => 'Lamia',
            'role'   => __('Chef de projet industriel', 'gloservices'),
            'letter' => 'L',
        ],
        [
            'image'  => get_template_directory_uri() . '/assets/img/carousel-1.jpg',
            'text'   => '"Un accompagnement sur mesure exceptionnel. Leur expertise multidisciplinaire intégrée permet de résoudre efficacement les interfaces techniques complexes entre voirie et réseaux."',
            'name'   => 'Ahmed',
            'role'   => __('Directeur Technique', 'gloservices'),
            'letter' => 'A',
        ]
    ];
}

$first_t = $js_testimonials[0];
$total_t = count($js_testimonials);
?>
<section class="tc-testimonials-dark py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <!-- Left Side: Project Image Slider -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-img-card">
                    <div class="testimonial-img-wrapper" id="testimonial-img-container">
                        <img src="<?php echo esc_url($first_t['image']); ?>" id="testimonial-img" alt="<?php esc_attr_e('Projet Globuild', 'gloservices'); ?>" class="img-fluid">
                    </div>
                    <!-- Image Bottom Navigation Arrows -->
                    <div class="testimonial-img-controls">
                        <button type="button" class="img-nav-btn prev-btn" aria-label="<?php esc_attr_e('Précédent', 'gloservices'); ?>"><i class="fas fa-chevron-left"></i></button>
                        <button type="button" class="img-nav-btn next-btn" aria-label="<?php esc_attr_e('Suivant', 'gloservices'); ?>"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>

            <!-- Right Side: Quote, Author & Counter Navigation -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="testimonial-quote-box">
                    <div class="quote-content-wrapper">
                        <p class="testimonial-quote-text" id="testimonial-text">
                            <?php echo esc_html($first_t['text']); ?>
                        </p>
                    </div>

                    <div class="testimonial-divider"></div>

                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <!-- Author Info -->
                        <div class="d-flex align-items-center">
                            <div class="testimonial-avatar-wrap me-3" id="testimonial-avatar">
                                <span class="avatar-letter"><?php echo esc_html($first_t['letter']); ?></span>
                            </div>
                            <div>
                                <h5 class="testimonial-name text-white fw-bold mb-1" id="testimonial-name"><?php echo esc_html($first_t['name']); ?></h5>
                                <small class="testimonial-role text-white-50" id="testimonial-role"><?php echo esc_html($first_t['role']); ?></small>
                            </div>
                        </div>

                        <!-- Right Counter & Arrows Pill -->
                        <div class="testimonial-counter-pill">
                            <button type="button" class="pill-nav-btn prev-btn" aria-label="<?php esc_attr_e('Précédent', 'gloservices'); ?>"><i class="fas fa-chevron-left"></i></button>
                            <span class="pill-counter-text" id="testimonial-counter">1 / <?php echo $total_t; ?></span>
                            <button type="button" class="pill-nav-btn next-btn" aria-label="<?php esc_attr_e('Suivant', 'gloservices'); ?>"><i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     REFERENCES / CLIENTS SECTION
     ========================================== -->
<div class="references-section wow fadeInUp py-5" data-wow-delay="0.1s">
    <div class="container">
        <div class="references-header text-center mb-5">
            <span class="section-badge"><?php _e('Ils nous font confiance', 'gloservices'); ?></span>
            <h2 class="section-main-title mt-2"><?php _e('Nos Références', 'gloservices'); ?></h2>
        </div>
        <div class="references-track">
            <?php gloservices_vendor_carousel(); ?>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    function startCardSlideshow(selector) {
        const container = document.querySelector(selector);
        if (!container) return;
        const images = container.querySelectorAll('.slide-img');
        if (images.length < 2) return;
        let currentIndex = 0;
        setInterval(() => {
            images[currentIndex].classList.remove('active');
            images[currentIndex].style.opacity = 0;
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.add('active');
            images[currentIndex].style.opacity = 1;
        }, 10000); // 10 seconds loop
    }
    startCardSlideshow('#infra-slideshow');
    startCardSlideshow('#batiment-slideshow');

    // Scroll-based Spring Parallax for Notre Approche bubbles (>= 992px)
    function initScrollParallax() {
        if (window.innerWidth < 992) return;
        
        const section = document.querySelector('.tc-process-style2');
        if (!section) return;
        
        const bubbles = section.querySelectorAll('.imgs .img');
        if (bubbles.length === 0) return;
        
        const factors = [0.08, -0.15, -0.06, 0.12];
        
        window.addEventListener('scroll', function() {
            const rect = section.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                const relativeScroll = (window.innerHeight / 2) - rect.top;
                
                bubbles.forEach((bubble, index) => {
                    const factor = factors[index] || 0.05;
                    const val = relativeScroll * factor;
                    
                    bubble.style.transition = 'transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
                    bubble.style.setProperty('transform', 'translateY(' + val + 'px)', 'important');
                });
            }
        });
    }
    
    initScrollParallax();
    window.addEventListener('resize', initScrollParallax);

    // Testimonials array populated from WP_Query above
    const testimonials = <?php echo json_encode($js_testimonials); ?>;

    let currentTestimonialIndex = 0;
    let testimonialTimer;

    const imgEl = document.getElementById("testimonial-img");
    const textEl = document.getElementById("testimonial-text");
    const nameEl = document.getElementById("testimonial-name");
    const roleEl = document.getElementById("testimonial-role");
    const counterEl = document.getElementById("testimonial-counter");
    const avatarWrap = document.getElementById("testimonial-avatar");

    function updateTestimonial(index) {
        if (!imgEl || !textEl || !testimonials.length) return;
        currentTestimonialIndex = index;
        const item = testimonials[currentTestimonialIndex];

        imgEl.classList.add("fade-out");
        textEl.classList.add("fade-out");

        setTimeout(function() {
            imgEl.src = item.image;
            textEl.innerHTML = item.text;
            if (nameEl) nameEl.textContent = item.name;
            if (roleEl) roleEl.textContent = item.role;
            if (counterEl) counterEl.textContent = (currentTestimonialIndex + 1) + " / " + testimonials.length;
            if (avatarWrap) avatarWrap.querySelector('.avatar-letter').textContent = item.letter;

            imgEl.classList.remove("fade-out");
            textEl.classList.remove("fade-out");
        }, 300);
    }

    function nextTestimonial() {
        if (!testimonials.length) return;
        const newIndex = (currentTestimonialIndex + 1) % testimonials.length;
        updateTestimonial(newIndex);
    }

    function prevTestimonial() {
        if (!testimonials.length) return;
        const newIndex = (currentTestimonialIndex - 1 + testimonials.length) % testimonials.length;
        updateTestimonial(newIndex);
    }

    function resetTestimonialTimer() {
        clearInterval(testimonialTimer);
        testimonialTimer = setInterval(nextTestimonial, 10000);
    }

    document.querySelectorAll(".tc-testimonials-dark .next-btn").forEach(function(btn) {
        btn.addEventListener("click", function() {
            nextTestimonial();
            resetTestimonialTimer();
        });
    });

    document.querySelectorAll(".tc-testimonials-dark .prev-btn").forEach(function(btn) {
        btn.addEventListener("click", function() {
            prevTestimonial();
            resetTestimonialTimer();
        });
    });

    testimonialTimer = setInterval(nextTestimonial, 10000);
});
</script>

<?php
get_footer();