<?php
/**
 * Single project template
 *
 * @package Gloservices
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-0 animated slideInDown"><?php _e('Détails du Projet', 'gloservices'); ?></h1>
    </div>
</div>
<!-- Page Header End -->

<div class="container-xxl py-5">
    <div class="container">
        <?php while (have_posts()) : the_post(); 
            $img_url = gloservices_get_project_image_url(get_the_ID(), 'full');
            $terms = get_the_terms(get_the_ID(), 'project_category');
        ?>
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Photo liée au projet dans un cadre stylisé au-dessus du titre -->
                    <div class="project-single-frame mb-4">
                        <div class="project-single-img-wrap project-gallery-slideshow" data-interval="7000">
                            <?php 
                            $gallery_urls = gloservices_get_project_gallery_urls(get_the_ID(), $img_url);
                            $is_first = true;
                            foreach ($gallery_urls as $g_url) :
                            ?>
                                <img src="<?php echo esc_url($g_url); ?>" alt="<?php the_title_attribute(); ?>" class="project-slideshow-img<?php echo $is_first ? ' active' : ''; ?>">
                            <?php 
                                $is_first = false;
                            endforeach; 
                            ?>
                            <?php if ($terms && !is_wp_error($terms)) : ?>
                                <span class="project-frame-badge"><i class="fas fa-tag me-2"></i><?php echo esc_html($terms[0]->name); ?></span>
                            <?php endif; ?>
                            
                            <!-- Navigation Arrows -->
                            <button type="button" class="slideshow-nav-btn prev-btn" aria-label="<?php esc_attr_e('Image précédente', 'gloservices'); ?>"><i class="fas fa-chevron-left"></i></button>
                            <button type="button" class="slideshow-nav-btn next-btn" aria-label="<?php esc_attr_e('Image suivante', 'gloservices'); ?>"><i class="fas fa-chevron-right"></i></button>
                        </div>
                        <div class="corner-mark corner-tl"></div>
                        <div class="corner-mark corner-tr"></div>
                        <div class="corner-mark corner-bl"></div>
                        <div class="corner-mark corner-br"></div>
                    </div>

                    <h2 class="mb-3 font-display fw-bold" style="color: #0F172A;"><?php the_title(); ?></h2>
                    
                    <div class="mb-3">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'project_category');
                        if ($terms && !is_wp_error($terms)) {
                            echo '<p class="text-primary mb-2">';
                            foreach ($terms as $term) {
                                echo '<span class="badge bg-primary me-2">' . esc_html($term->name) . '</span>';
                            }
                            echo '</p>';
                        }
                        ?>
                    </div>
                    
                    <?php if (has_excerpt()) : ?>
                        <div class="project-subtitle mb-4" style="font-size: 1.1rem; font-weight: 500; color: var(--gray-600); line-height: 1.6; border-left: 4px solid var(--primary); padding-left: 16px; font-style: italic;">
                            <?php echo get_the_excerpt(); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="content text-dark" style="line-height: 1.8; font-size: 1.05rem;">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light p-4 rounded">
                        <?php
                        $client = get_post_meta(get_the_ID(), '_project_client', true);
                        $year = get_post_meta(get_the_ID(), '_project_year', true) ?: get_the_date('Y');
                        $cost = get_post_meta(get_the_ID(), '_project_cost', true);
                        ?>
                        <h5 class="text-primary mb-3"><?php _e('Informations', 'gloservices'); ?></h5>
                        <?php if ($client) : ?>
                            <p><strong><?php _e('Client :', 'gloservices'); ?></strong> <?php echo esc_html(gloservices_translate($client)); ?></p>
                        <?php endif; ?>
                        <p><strong><?php _e('Année :', 'gloservices'); ?></strong> <?php echo esc_html($year); ?></p>
                        <?php if ($cost) : ?>
                            <p><strong><?php _e('Budget :', 'gloservices'); ?></strong> <?php echo esc_html($cost); ?></p>
                        <?php endif; ?>
                        <p><strong><?php _e('Catégorie :', 'gloservices'); ?></strong> 
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'project_category');
                            if ($terms && !is_wp_error($terms)) {
                                $names = wp_list_pluck($terms, 'name');
                                echo esc_html(implode(', ', $names));
                            } else {
                                _e('Non classé', 'gloservices');
                            }
                            ?>
                        </p>
                        <a href="<?php echo esc_url(gloservices_get_translated_page_url('projet')); ?>" class="btn btn-primary rounded-pill py-2 px-4 mt-3"><?php _e('Retour aux projets', 'gloservices'); ?></a>
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