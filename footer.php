<?php
/**
 * Footer template
 *
 * @package Gloservices
 */
?>

<!-- Footer Start -->
<div class="container-fluid footer text-body mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Brand Column -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-brand mb-4">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="d-inline-block">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo-light.png" alt="Globuild Logo" style="height: 42px; width: auto; object-fit: contain;">
                    </a>
                </div>
                <p class="mb-4"><?php _e('Bureau d\'études d\'ingénierie et de solutions numériques. Nous façonnons le futur de la construction.', 'gloservices'); ?></p>
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

            <!-- Gallery Column -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title text-white mb-4"><?php _e('Galerie', 'gloservices'); ?></h5>
                <div class="row g-2 footer-gallery">
                    <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <div class="col-4">
                        <div class="gallery-item-wrap overflow-hidden rounded">
                            <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/gallery-<?php echo $i; ?>.jpg" alt="Gallery <?php echo $i; ?>">
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Copyright Bar -->
    <div class="footer-bottom border-top border-secondary py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 text-muted">
                    &copy; <a href="<?php echo esc_url(home_url('/')); ?>" class="text-white fw-bold">Globuild</a>, <?php _e('Tous droits réservés.', 'gloservices'); ?>
                </div>
                <div class="col-md-6 text-center text-md-end text-muted">
                    <?php _e('Conçu par', 'gloservices'); ?> <a href="#" class="text-primary fw-bold">Gloservices Ingénierie</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

<?php wp_footer(); ?>
</body>

</html>