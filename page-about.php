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
   DESKTOP NOTRE APPROCHE LAYOUT OVERRIDES (>= 992px)
   ============================================================ */
@media (min-width: 992px) {
    .tc-process-style2 .imgs {
        display: block !important;
        position: relative !important;
        height: 660px !important;
        margin-top: 0 !important;
        background-size: contain !important;
    }
    .tc-process-style2 .imgs .img {
        position: absolute !important;
        border-radius: 50% !important;
        overflow: visible !important;
        margin: 0 !important;
    }
    .tc-process-style2 .imgs .img img {
        border-radius: 50% !important;
        object-fit: cover !important;
    }
    
    /* Bubble 1 (spaced slightly) */
    .tc-process-style2 .imgs .img:nth-of-type(1) {
        width: 350px !important;
        height: 350px !important;
        left: 10px !important;
        top: -10px !important;
        z-index: 2 !important;
    }
    .tc-process-style2 .imgs .img:nth-of-type(1) .txt {
        font-size: 26px !important;
        position: absolute !important;
        top: 65px !important;
        right: -50px !important;
        left: auto !important;
        bottom: auto !important;
        z-index: 10 !important;
        border: 1px solid #ccc !important;
        background-color: #f1eee9 !important;
        color: #000 !important;
        border-radius: 15px !important;
        padding: 4px 24px !important;
        transform: none !important;
    }
    
    /* Bubble 2 (spaced slightly) */
    .tc-process-style2 .imgs .img:nth-of-type(2) {
        right: -25px !important;
        top: 60px !important;
        width: 170px !important;
        height: 170px !important;
        z-index: 3 !important;
        left: auto !important;
    }
    .tc-process-style2 .imgs .img:nth-of-type(2) .txt {
        font-size: 20px !important;
        position: absolute !important;
        bottom: 20px !important;
        right: 20px !important;
        left: auto !important;
        top: auto !important;
        z-index: 10 !important;
        color: #fff !important;
        background: none !important;
        border: none !important;
        padding: 0 !important;
        transform: none !important;
    }
    
    /* Bubble 3 (spaced slightly) */
    .tc-process-style2 .imgs .img:nth-of-type(3) {
        left: -30px !important;
        top: 320px !important;
        width: 210px !important;
        height: 210px !important;
        z-index: 3 !important;
    }
    .tc-process-style2 .imgs .img:nth-of-type(3) .txt {
        font-size: 22px !important;
        position: absolute !important;
        bottom: 15px !important;
        right: 50% !important;
        left: auto !important;
        top: auto !important;
        z-index: 10 !important;
        color: #fff !important;
        background: none !important;
        border: none !important;
        padding: 0 !important;
        transform: translate(50%) !important;
    }
    
    /* Bubble 4 (spaced slightly) */
    .tc-process-style2 .imgs .img:nth-of-type(4) {
        right: 30px !important;
        top: 360px !important;
        width: 230px !important;
        height: 230px !important;
        z-index: 2 !important;
        left: auto !important;
    }
    .tc-process-style2 .imgs .img:nth-of-type(4) .txt {
        font-size: 22px !important;
        position: absolute !important;
        top: 65px !important;
        left: -50px !important;
        right: auto !important;
        bottom: auto !important;
        z-index: 10 !important;
        background-color: #000 !important;
        color: #fff !important;
        border-radius: 15px !important;
        padding: 4px 24px !important;
        transform: none !important;
    }
}

/* ============================================================
   RTL / ARABIC SPECIFIC STYLING OVERRIDES
   ============================================================ */
@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap');

body.rtl, body.rtl * {
    font-family: 'Cairo', sans-serif !important;
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
        right: 10px !important;
        left: auto !important;
    }
    body.rtl .tc-process-style2 .imgs .img:nth-of-type(1) .txt {
        left: -50px !important;
        right: auto !important;
    }
    
    body.rtl .tc-process-style2 .imgs .img:nth-of-type(2) {
        left: -25px !important;
        right: auto !important;
    }
    body.rtl .tc-process-style2 .imgs .img:nth-of-type(2) .txt {
        left: 20px !important;
        right: auto !important;
    }
    
    body.rtl .tc-process-style2 .imgs .img:nth-of-type(3) {
        right: -30px !important;
        left: auto !important;
    }
    body.rtl .tc-process-style2 .imgs .img:nth-of-type(3) .txt {
        left: 50% !important;
        right: auto !important;
        transform: translate(-50%) !important;
    }
    
    body.rtl .tc-process-style2 .imgs .img:nth-of-type(4) {
        left: 30px !important;
        right: auto !important;
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
                        <a href="<?php echo esc_url(home_url('/projets')); ?>" class="btn btn-primary mt-3">
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
     FEATURES SWIPER / ENGAGEMENTS SECTION
     ========================================== -->
<section class="tc-header-style2 py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <span class="section-badge"><?php _e('Nos Engagements', 'gloservices'); ?></span>
            <h2 class="section-main-title mb-4"><?php _e('Garantir la performance et la durabilité', 'gloservices'); ?></h2>
        </div>
        
        <!-- Engagements Static Carousel/Grid -->
        <div class="row g-4 justify-content-center">
            <!-- Pillar 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column align-items-center text-center">
                    <div class="btn-sm-square bg-primary-light text-primary rounded-circle mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-award fa-lg"></i>
                    </div>
                    <h5 class="text-dark fw-bold mb-2"><?php _e('Expertise pluridisciplinaire', 'gloservices'); ?></h5>
                    <p class="text-muted small mb-0">
                        <?php _e('GLOBUILD combine des compétences variées pour offrir des solutions techniques complètes et intégrées.', 'gloservices'); ?>
                    </p>
                </div>
            </div>
            <!-- Pillar 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column align-items-center text-center">
                    <div class="btn-sm-square bg-primary-light text-primary rounded-circle mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-lightbulb fa-lg"></i>
                    </div>
                    <h5 class="text-dark fw-bold mb-2"><?php _e('Innovation & Technique', 'gloservices'); ?></h5>
                    <p class="text-muted small mb-0">
                        <?php _e('Nous utilisons des outils et technologies modernes pour optimiser chaque phase de la conception.', 'gloservices'); ?>
                    </p>
                </div>
            </div>
            <!-- Pillar 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column align-items-center text-center">
                    <div class="btn-sm-square bg-primary-light text-primary rounded-circle mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-handshake fa-lg"></i>
                    </div>
                    <h5 class="text-dark fw-bold mb-2"><?php _e('Accompagnement sur mesure', 'gloservices'); ?></h5>
                    <p class="text-muted small mb-0">
                        <?php _e('À l\'écoute de vos besoins, nous garantissons qualité, respect des délais et maîtrise des budgets.', 'gloservices'); ?>
                    </p>
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
        <h2 class="section-main-title text-center mb-5"><?php _e('Notre Approche', 'gloservices'); ?></h2>
        <div class="content mt-5">
            <div class="row g-5 align-items-center">
                <!-- Accordion Side -->
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="accordion" id="accordionProcess">
                        <!-- Step 1 -->
                        <div class="accordion-item mb-3 border border-light rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed fw-bold text-dark p-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <span class="num"><?php _e('1/', 'gloservices'); ?></span> <h3><?php _e('ÉTUDES & INVESTIGATIONS', 'gloservices'); ?></h3>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionProcess">
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
                                <button class="accordion-button fw-bold text-dark p-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <span class="num"><?php _e('2/', 'gloservices'); ?></span> <h3><?php _e('CONCEPTION TECHNIQUE', 'gloservices'); ?></h3>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionProcess">
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
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/about.jpg" class="img-cover w-100 h-100" style="object-fit: cover;" alt="">
                            <span class="txt sub-font"><?php _e('Personnalisé', 'gloservices'); ?></span>
                        </div>
                        <div class="img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/feature.jpg" class="img-cover w-100 h-100" style="object-fit: cover;" alt="">
                            <span class="txt sub-font"><?php _e('Réactif', 'gloservices'); ?></span>
                        </div>
                        <div class="img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/carousel-1.jpg" class="img-cover w-100 h-100" style="object-fit: cover;" alt="">
                            <span class="txt sub-font"><?php _e('Qualité', 'gloservices'); ?></span>
                        </div>
                        <div class="img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/carousel-2.jpg" class="img-cover w-100 h-100" style="object-fit: cover;" alt="">
                            <span class="txt sub-font"><?php _e('Optimisation', 'gloservices'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/prc_bg.png" alt="" class="bg">
</section>

<!-- ==========================================
     TESTIMONIALS SECTION (tc-testimonials-style2)
     ========================================== -->
<section class="tc-testimonials-style2 py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <span class="section-badge"><?php _e('Témoignages', 'gloservices'); ?></span>
            <h2 class="section-main-title mb-4"><?php _e('Ce que disent nos partenaires', 'gloservices'); ?></h2>
        </div>
        <div class="row g-4">
            <!-- Testimonial 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between">
                    <p class="text-dark small style-italic mb-4" style="line-height: 1.6;">
                        "<?php _e('Nous avons collaboré avec GLOBUILD pour la conception technique de notre nouveau siège administratif, et nous sommes extrêmement satisfaits de la rigueur et de la réactivité de l\'équipe d\'ingénieurs.', 'gloservices'); ?>"
                    </p>
                    <div class="d-flex align-items-center">
                        <div class="avatar bg-primary-light text-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 45px; height: 45px; font-weight: 700;">
                            T
                        </div>
                        <div>
                            <h6 class="text-dark fw-bold mb-0">Tarik</h6>
                            <small class="text-muted"><?php _e('Promoteur immobilier', 'gloservices'); ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between">
                    <p class="text-dark small style-italic mb-4" style="line-height: 1.6;">
                        "<?php _e('De l\'étude d\'avant-projet à l\'assistance technique sur le chantier, le professionnalisme de GLOBUILD a garanti un strict respect de nos contraintes budgétaires et calendaires.', 'gloservices'); ?>"
                    </p>
                    <div class="d-flex align-items-center">
                        <div class="avatar bg-primary-light text-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 45px; height: 45px; font-weight: 700;">
                            L
                        </div>
                        <div>
                            <h6 class="text-dark fw-bold mb-0">Lamia</h6>
                            <small class="text-muted"><?php _e('Chef de projet industriel', 'gloservices'); ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between">
                    <p class="text-dark small style-italic mb-4" style="line-height: 1.6;">
                        "<?php _e('Un accompagnement sur mesure exceptionnel. Leur expertise multidisciplinaire intégrée permet de résoudre efficacement les interfaces techniques complexes entre voirie et réseaux.', 'gloservices'); ?>"
                    </p>
                    <div class="d-flex align-items-center">
                        <div class="avatar bg-primary-light text-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 45px; height: 45px; font-weight: 700;">
                            A
                        </div>
                        <div>
                            <h6 class="text-dark fw-bold mb-0">Ahmed</h6>
                            <small class="text-muted"><?php _e('Directeur Technique', 'gloservices'); ?></small>
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
});
</script>

<?php
get_footer();