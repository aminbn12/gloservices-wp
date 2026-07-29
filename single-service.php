<?php
/**
 * Single service template
 *
 * @package Gloservices
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-0 animated slideInDown"><?php _e('Détails du Service', 'gloservices'); ?></h1>
    </div>
</div>
<!-- Page Header End -->

<div class="container-xxl py-5">
    <div class="container">
        <?php while (have_posts()) : the_post(); 
            $service_post_id = get_the_ID();
            $service_slug = get_post_field('post_name', $service_post_id);
            if (function_exists('pll_get_post')) {
                $fr_post_id = pll_get_post($service_post_id, 'fr');
                if ($fr_post_id) {
                    $service_slug = get_post_field('post_name', $fr_post_id);
                }
            }
            $drawing_svg = function_exists('gloservices_get_service_drawing') ? gloservices_get_service_drawing($service_slug) : '';
        ?>
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Architectural CAD Vector Drawing Canvas Frame Above Service Title -->
                    <div class="service-single-frame mb-4">
                        <div class="service-single-drawing-wrap">
                            <?php echo $drawing_svg; ?>
                        </div>
                        <div class="corner-mark corner-tl"></div>
                        <div class="corner-mark corner-tr"></div>
                        <div class="corner-mark corner-bl"></div>
                        <div class="corner-mark corner-br"></div>
                    </div>

                    <!-- Service Featured Photo Showcase (if available) -->
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="project-single-frame mb-4">
                            <div class="project-single-img-wrap">
                                <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                            </div>
                            <div class="corner-mark corner-tl"></div>
                            <div class="corner-mark corner-tr"></div>
                            <div class="corner-mark corner-bl"></div>
                            <div class="corner-mark corner-br"></div>
                        </div>
                    <?php endif; ?>

                    <h2 class="mb-3 font-display fw-bold" style="color: #0F172A;"><?php the_title(); ?></h2>
                    
                    <?php if (has_excerpt()) : ?>
                        <div class="service-subtitle mb-4" style="font-size: 1.1rem; font-weight: 500; color: var(--gray-600); line-height: 1.6; border-left: 4px solid var(--primary); padding-left: 16px; font-style: italic;">
                            <?php echo get_the_excerpt(); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="content text-dark" style="line-height: 1.8; font-size: 1.05rem;">
                        <?php the_content(); ?>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="bg-light p-4 rounded shadow-sm border border-light">
                        <h5 class="text-primary fw-bold mb-3"><i class="fas fa-info-circle me-2"></i><?php _e('Informations & Accompagnement', 'gloservices'); ?></h5>
                        <p class="text-muted small mb-4"><?php _e('Nos ingénieurs experts vous accompagnent de la conception préliminaire jusqu\'à la livraison sur chantier.', 'gloservices'); ?></p>
                        
                        <div class="service-meta-list mb-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="btn-sm-square bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; min-width: 38px;">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div>
                                    <strong class="d-block text-dark small"><?php _e('Normes Certifiées', 'gloservices'); ?></strong>
                                    <small class="text-muted">RPS 2000, NM & Eurocodes</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="btn-sm-square bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; min-width: 38px;">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <div>
                                    <strong class="d-block text-dark small"><?php _e('Logiciels sous licence', 'gloservices'); ?></strong>
                                    <small class="text-muted">Robot, Covadis, Revit 3D</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="btn-sm-square bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; min-width: 38px;">
                                    <i class="fas fa-hard-hat"></i>
                                </div>
                                <div>
                                    <strong class="d-block text-dark small"><?php _e('Suivi de Chantier', 'gloservices'); ?></strong>
                                    <small class="text-muted">Contrôle qualité & Maîtrise d'ouvrage</small>
                                </div>
                            </div>
                        </div>

                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary rounded-pill w-100 py-3 fw-bold shadow-sm mb-3">
                            <i class="fas fa-paper-plane me-2"></i><?php _e('Demander un devis gratuit', 'gloservices'); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/service')); ?>" class="btn btn-outline-secondary rounded-pill w-100 py-2">
                            <i class="fas fa-arrow-left me-2"></i><?php _e('Retour aux services', 'gloservices'); ?>
                        </a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<!-- References Start -->
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
<!-- References End -->

<?php
get_footer();