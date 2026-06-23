<?php
/**
 * Template Name: Page About (Qui sommes-nous)
 *
 * @package Gloservices
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown"><?php _e('Qui sommes-nous', 'gloservices'); ?></h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Accueil', 'gloservices'); ?></a></li>
                <li class="breadcrumb-item text-white active" aria-current="page"><?php _e('À propos', 'gloservices'); ?></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Presentation Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow slideInLeft" data-wow-delay="0.1s">
                <span class="section-badge"><?php _e('À propos', 'gloservices'); ?></span>
                <h2 class="section-main-title mb-4"><?php _e('L\'ingénierie au service du développement et de la performance', 'gloservices'); ?></h2>
                <p class="mb-4 text-dark" style="line-height: 1.7; font-size: 1.05rem;">
                    <?php _e('Créé en 2018, GLOBUILD SARL est un bureau d\'études techniques et d\'ingénierie intervenant dans les secteurs des infrastructures, des ouvrages d\'art, du bâtiment, des aménagements urbains et des réseaux divers. Le bureau assure des missions d\'études, de maîtrise d\'œuvre, d\'assistance à maîtrise d\'ouvrage et d\'ordonnancement, pilotage et coordination pour le compte de maîtres d\'ouvrage publics et privés.', 'gloservices'); ?>
                </p>
                <p class="mb-4 text-dark" style="line-height: 1.7; font-size: 1.05rem;">
                    <?php _e('Son organisation repose sur une approche intégrée permettant de couvrir l\'ensemble du cycle de vie des projets, depuis les études préliminaires et les investigations techniques jusqu\'au suivi de l\'exécution des travaux et aux opérations de réception. Cette organisation garantit la maîtrise des contraintes techniques, financières et calendaires ainsi que la conformité des ouvrages aux exigences réglementaires et normatives applicables.', 'gloservices'); ?>
                </p>
                <div class="row g-3 mt-2">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="btn-sm-square bg-primary text-white rounded-circle me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fa fa-road"></i>
                            </div>
                            <span class="text-dark fw-bold"><?php _e('Infrastructures', 'gloservices'); ?></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="btn-sm-square bg-primary text-white rounded-circle me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fa fa-drafting-compass"></i>
                            </div>
                            <span class="text-dark fw-bold"><?php _e('Ouvrages d\'art', 'gloservices'); ?></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="btn-sm-square bg-primary text-white rounded-circle me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fa fa-building"></i>
                            </div>
                            <span class="text-dark fw-bold"><?php _e('Bâtiments', 'gloservices'); ?></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="btn-sm-square bg-primary text-white rounded-circle me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fa fa-city"></i>
                            </div>
                            <span class="text-dark fw-bold"><?php _e('Aménagements & VRD', 'gloservices'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column align-self-stretch wow slideInRight" data-wow-delay="0.1s" style="min-height: 450px; padding: 20px;">
                <div class="position-relative flex-grow-1" style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg);">
                    <img class="position-absolute img-fluid w-100 h-100" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/about.jpg" style="object-fit: cover;" alt="<?php esc_attr_e('À propos de GLOBUILD', 'gloservices'); ?>">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Presentation End -->

<!-- Notre Approche Start -->
<div class="container-xxl py-5 bg-light my-5 rounded-4" style="border-radius: var(--radius-lg);">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <span class="section-badge"><?php _e('NOTRE APPROCHE', 'gloservices'); ?></span>
            <h2 class="section-main-title mb-4"><?php _e('Une prise en charge globale et intégrée', 'gloservices'); ?></h2>
            <p class="text-muted"><?php _e('Concevoir aujourd\'hui les infrastructures de demain à travers un cycle complet de suivi.', 'gloservices'); ?></p>
        </div>
        <div class="row g-4 justify-content-center">
            <?php
            $steps = [
                ['1', 'ÉTUDES', 'Analyse, faisabilité et conception', 'fa-search'],
                ['2', 'CONCEPTION', 'Avant-projets et études détaillées', 'fa-pencil-ruler'],
                ['3', 'RÉALISATION', 'Assistance technique et suivi de chantier', 'fa-cogs'],
                ['4', 'RÉCEPTION', 'Contrôle, essais et mise en service', 'fa-check-double']
            ];
            foreach ($steps as $idx => $step) :
            ?>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="<?php echo (0.1 + $idx * 0.1) . 's'; ?>">
                <div class="step-card">
                    <div class="step-icon-wrap">
                        <i class="fas <?php echo $step[3]; ?>"></i>
                        <span class="step-number"><?php echo $step[0]; ?></span>
                    </div>
                    <h4><?php _e($step[1], 'gloservices'); ?></h4>
                    <p class="text-muted mb-0"><?php _e($step[2], 'gloservices'); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Notre Approche End -->

<!-- Notre Engagement Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 d-flex flex-column align-self-stretch wow slideInLeft" data-wow-delay="0.1s" style="min-height: 400px; padding: 20px;">
                <div class="position-relative flex-grow-1" style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg);">
                    <img class="position-absolute img-fluid w-100 h-100" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/feature.jpg" style="object-fit: cover;" alt="<?php esc_attr_e('Engagements de GLOBUILD', 'gloservices'); ?>">
                </div>
            </div>
            <div class="col-lg-6 wow slideInRight" data-wow-delay="0.1s">
                <span class="section-badge"><?php _e('NOTRE ENGAGEMENT', 'gloservices'); ?></span>
                <h2 class="section-main-title mb-4"><?php _e('Garantir la performance et la durabilité', 'gloservices'); ?></h2>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="d-flex align-items-start engagement-item">
                            <div class="engagement-icon-box me-3">
                                <i class="fa fa-star text-white"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 text-dark"><?php _e('Excellence technique et innovation', 'gloservices'); ?></h5>
                                <p class="mb-0 text-muted"><?php _e('Utilisation des dernières technologies et méthodes d\'ingénierie pour des ouvrages durables.', 'gloservices'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-start engagement-item">
                            <div class="engagement-icon-box me-3">
                                <i class="fa fa-clock text-white"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 text-dark"><?php _e('Respect des délais et maîtrise des coûts', 'gloservices'); ?></h5>
                                <p class="mb-0 text-muted"><?php _e('Un suivi rigoureux du planning et du budget pour garantir la rentabilité de vos investissements.', 'gloservices'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-start engagement-item">
                            <div class="engagement-icon-box me-3">
                                <i class="fa fa-handshake text-white"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 text-dark"><?php _e('Accompagnement de la conception à la réception', 'gloservices'); ?></h5>
                                <p class="mb-0 text-muted"><?php _e('Un interlocuteur unique à chaque phase de votre projet pour une coordination parfaite.', 'gloservices'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-start engagement-item">
                            <div class="engagement-icon-box me-3">
                                <i class="fa fa-shield-alt text-white"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 text-dark"><?php _e('Qualité, sécurité et durabilité', 'gloservices'); ?></h5>
                                <p class="mb-0 text-muted"><?php _e('Conformité absolue aux normes réglementaires avec une approche éco-responsable intégrée.', 'gloservices'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Notre Engagement End -->

<!-- References Start -->
<div class="references-section wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="references-header">
            <span class="references-label"><?php _e('Ils nous font confiance', 'gloservices'); ?></span>
            <h2><?php _e('Nos Références', 'gloservices'); ?></h2>
        </div>
        <div class="references-track">
            <?php gloservices_vendor_carousel(); ?>
        </div>
    </div>
</div>
<!-- References End -->

<?php
get_footer();