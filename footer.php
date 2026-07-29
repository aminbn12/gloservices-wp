<?php
/**
 * Footer template
 *
 * @package Gloservices
 */
?>

<!-- Footer Start -->
<div class="container-fluid footer text-body position-relative overflow-visible wow fadeIn" data-wow-delay="0.1s" style="margin-top: 60px;">
    
    <!-- 50/50 Overlapping Consultation Banner Card -->
    <div class="footer-cta-overlap-wrapper">
        <div class="container">
            <div class="footer-consultation-card p-4 p-md-5">
                <!-- CAD Grid blueprint pattern inside the card -->
                <div class="footer-card-blueprint"></div>
                
                <div class="row align-items-center g-4 position-relative z-10">
                    <div class="col-lg-8">
                        <div class="footer-strip-badge mb-3">
                            <i class="fas fa-shield-alt me-2"></i>
                            <span><?php echo esc_html(gloservices_translate('ENGAGEMENT DE QUALITÉ')); ?></span>
                        </div>
                        <h3 class="footer-strip-title text-white fw-bold mb-3">
                            <?php echo esc_html(gloservices_translate('Un projet d\'infrastructure, de bâtiment, de modélisation BIM ou de solution numérique ?')); ?>
                        </h3>
                        <p class="footer-strip-sub text-white mb-0" style="font-size: 1.05rem; line-height: 1.6; opacity: 1;">
                            <?php echo esc_html(gloservices_translate('Nos ingénieurs experts vous accompagnent de l\'étude préliminaire et la conception numérique jusqu\'au suivi de chantier.')); ?>
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn footer-cta-btn rounded-pill px-4 py-3 fw-bold shadow-lg">
                            <span><?php echo esc_html(gloservices_translate('Demander une étude projet')); ?></span>
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Background image with gradient mask transition -->
    <div class="footer-image-bg" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/footer.jpg');"></div>
    
    <!-- Content overlay -->
    <div class="footer-content-overlay">
        <div class="container pb-3 footer-content-container">
            <div class="row g-4 g-lg-5 mb-0">
                <!-- Brand Column -->
                <div class="col-lg-3 col-md-6 footer-brand-column">
                    <div class="footer-brand mb-4">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="d-inline-block">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo-dark.png" alt="Globuild Logo" style="height: 42px; width: auto; object-fit: contain;">
                        </a>
                    </div>
                    <p class="mb-3"><?php _e('Bureau d\'études d\'ingénierie et de solutions numériques. Nous façonnons le futur de la construction.', 'gloservices'); ?></p>
                    
                    <!-- Certification Quality Badge -->
                    <div class="footer-quality-badge mb-4">
                        <i class="fas fa-shield-alt text-success me-2"></i>
                        <span><?php echo esc_html(gloservices_translate('Agrément & Conformité RPS 2000 / Eurocodes')); ?></span>
                    </div>

                    <div class="d-flex gap-2">
                        <?php
                        $socials = [
                            'gloservices_facebook' => 'fab fa-facebook-f',
                            'gloservices_linkedin' => 'fab fa-linkedin-in',
                        ];
                        foreach ($socials as $option => $icon) :
                            $url = get_option($option);
                            if ($url) :
                        ?>
                            <a class="btn btn-social" href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener"><i class="<?php echo esc_attr($icon); ?>"></i></a>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </div>
                </div>

                <!-- Contact Column -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-title text-white mb-4"><?php _e('Contact', 'gloservices'); ?></h5>
                    <ul class="footer-contact-list list-unstyled m-0">
                        <li class="d-flex align-items-start gap-3 mb-3">
                            <i class="fas fa-map-marker-alt text-primary mt-1"></i>
                            <span><?php echo esc_html(gloservices_translate(get_option('gloservices_address', '11 Rue Dayet Aoua, Agdal, Rabat'))); ?></span>
                        </li>
                        <li class="d-flex align-items-center gap-3 mb-3">
                            <i class="fas fa-phone-alt text-primary"></i>
                            <span dir="ltr"><?php echo esc_html(get_option('gloservices_phone', '+212 5 37 77 14 50')); ?></span>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <i class="fas fa-envelope text-primary"></i>
                            <span><?php echo esc_html(get_option('gloservices_email', 'contact@gloservices.ma')); ?></span>
                        </li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-title text-white mb-4"><?php _e('Liens rapides', 'gloservices'); ?></h5>
                    <ul class="footer-links list-unstyled m-0">
                        <li class="mb-2"><a href="<?php echo esc_url(home_url('/about')); ?>"><i class="fas fa-chevron-right text-primary me-2"></i><?php _e('Qui sommes-nous', 'gloservices'); ?></a></li>
                        <li class="mb-2"><a href="<?php echo esc_url(home_url('/service')); ?>"><i class="fas fa-chevron-right text-primary me-2"></i><?php _e('Services', 'gloservices'); ?></a></li>
                        <li class="mb-2"><a href="<?php echo esc_url(home_url('/projet')); ?>"><i class="fas fa-chevron-right text-primary me-2"></i><?php _e('Projets', 'gloservices'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>"><i class="fas fa-chevron-right text-primary me-2"></i><?php _e('Contact', 'gloservices'); ?></a></li>
                    </ul>
                </div>

                <!-- Gallery Column - Images from Projects -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-title text-white mb-4"><?php _e('Galerie', 'gloservices'); ?></h5>
                    <div class="row g-2 footer-gallery">
                        <?php
                        $footer_projects = new WP_Query([
                            'post_type'      => 'project',
                            'posts_per_page' => 6,
                        ]);
                        $footer_counter = 0;
                        if ($footer_projects->have_posts()) :
                            while ($footer_projects->have_posts()) : $footer_projects->the_post();
                                $thumb_url = gloservices_get_project_image_url(get_the_ID(), 'thumbnail');
                        ?>
                        <div class="col-4">
                            <a href="<?php the_permalink(); ?>" class="d-block">
                                <div class="gallery-item-wrap overflow-hidden rounded">
                                    <img class="img-fluid" src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
                                </div>
                            </a>
                        </div>
                        <?php
                                $footer_counter++;
                            endwhile;
                            wp_reset_postdata();
                        else :
                            for ($i = 1; $i <= 6; $i++) :
                        ?>
                        <div class="col-4">
                            <a href="<?php echo esc_url(home_url('/projet')); ?>" class="d-block">
                                <div class="gallery-item-wrap overflow-hidden rounded">
                                    <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/img-600x400-<?php echo $i; ?>.jpg" alt="Gallery <?php echo $i; ?>" loading="lazy">
                                </div>
                            </a>
                        </div>
                        <?php
                            endfor;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Copyright Bar -->
        <div class="footer-bottom border-top border-secondary py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 text-muted">
                        &copy; <a href="<?php echo esc_url(home_url('/')); ?>" class="text-primary fw-bold">Globuild</a>, <?php _e('Tous droits réservés.', 'gloservices'); ?>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-muted">
                        <?php _e('Conçu par', 'gloservices'); ?> <a href="#" class="text-primary fw-bold">Gloservices Ingénierie</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-right"></i></a>

<?php wp_footer(); ?>
</body>

</html>