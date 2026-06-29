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
                        <div class="md-card flex-fill bg-light p-4 rounded-4 border border-light d-flex flex-column justify-content-between shadow-sm" style="transition: var(--transition);">
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
                                <h4 class="text-dark fw-bold mb-2"><?php _e('Infrastructures & VRD', 'gloservices'); ?></h4>
                                <p class="text-muted small mb-0">
                                    <?php _e('Maîtrise d\'œuvre, études routières, réseaux divers (assainissement, eau potable, électricité).', 'gloservices'); ?>
                                </p>
                            </div>
                        </div>
                        <!-- Division Card 2 -->
                        <div class="lg-card flex-fill bg-dark text-white p-4 rounded-4 d-flex flex-column justify-content-between shadow-sm" style="transition: var(--transition);">
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
                                <h4 class="text-white fw-bold mb-2"><?php _e('Bâtiments & Génie Civil', 'gloservices'); ?></h4>
                                <p class="text-light small mb-0" style="opacity: 0.85;">
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
                                    <span class="text-primary me-3 fw-light">1/</span> <?php _e('ÉTUDES & INVESTIGATIONS', 'gloservices'); ?>
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
                                    <span class="text-primary me-3 fw-light">2/</span> <?php _e('CONCEPTION TECHNIQUE', 'gloservices'); ?>
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
                                    <span class="text-primary me-3 fw-light">3/</span> <?php _e('RÉALISATION & SUIVI', 'gloservices'); ?>
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
                                    <span class="text-primary me-3 fw-light">4/</span> <?php _e('RÉCEPTION DES OUVRAGES', 'gloservices'); ?>
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
                    <div class="imgs d-grid gap-4" style="grid-template-columns: repeat(2, 1fr);">
                        <div class="img-wrapper position-relative overflow-hidden rounded-4 shadow-sm" style="height: 200px;">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/about.jpg" class="w-100 h-100 img-cover" style="object-fit: cover;" alt="">
                            <span class="position-absolute bottom-0 start-0 m-3 px-3 py-1 bg-primary text-white rounded-pill fw-bold small"><?php _e('Personnalisé', 'gloservices'); ?></span>
                        </div>
                        <div class="img-wrapper position-relative overflow-hidden rounded-4 shadow-sm" style="height: 200px;">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/feature.jpg" class="w-100 h-100 img-cover" style="object-fit: cover;" alt="">
                            <span class="position-absolute bottom-0 start-0 m-3 px-3 py-1 bg-primary text-white rounded-pill fw-bold small"><?php _e('Réactif', 'gloservices'); ?></span>
                        </div>
                        <div class="img-wrapper position-relative overflow-hidden rounded-4 shadow-sm" style="height: 200px;">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/carousel-1.jpg" class="w-100 h-100 img-cover" style="object-fit: cover;" alt="">
                            <span class="position-absolute bottom-0 start-0 m-3 px-3 py-1 bg-primary text-white rounded-pill fw-bold small"><?php _e('Qualité', 'gloservices'); ?></span>
                        </div>
                        <div class="img-wrapper position-relative overflow-hidden rounded-4 shadow-sm" style="height: 200px;">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/carousel-2.jpg" class="w-100 h-100 img-cover" style="object-fit: cover;" alt="">
                            <span class="position-absolute bottom-0 start-0 m-3 px-3 py-1 bg-primary text-white rounded-pill fw-bold small"><?php _e('Optimisation', 'gloservices'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
});
</script>

<?php
get_footer();