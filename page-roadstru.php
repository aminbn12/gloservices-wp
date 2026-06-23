<?php
/**
 * Template Name: Page Roadstru (Routes & Ouvrages)
 *
 * @package Gloservices
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown"><?php _e('Routes & Ouvrages', 'gloservices'); ?></h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Accueil', 'gloservices'); ?></a></li>
                <li class="breadcrumb-item text-white active" aria-current="page"><?php _e('Routes & Ouvrages', 'gloservices'); ?></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Roadstru Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-12 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <h4 class="text-primary"><?php _e('Routes, Ponts et Ouvrages d\'Art', 'gloservices'); ?></h4>
                    <p class="text-dark">
                        <ul>
                            <li><?php _e('Routes et signalisation', 'gloservices'); ?></li>
                            <li><?php _e('Pistes Rurales', 'gloservices'); ?></li>
                            <li><?php _e('Transport urbain', 'gloservices'); ?></li>
                            <li><?php _e('Étude et dimensionnement des ouvrages d\'art', 'gloservices'); ?></li>
                            <li><?php _e('Métré et évaluation', 'gloservices'); ?></li>
                            <li><?php _e('Suivi des travaux de construction', 'gloservices'); ?></li>
                        </ul>
                    </p>
                    <h4 class="text-primary"><?php _e('Prestations assurées', 'gloservices'); ?></h4>
                    <p class="text-dark">
                        <ul>
                            <li><?php _e('Conception et dimensionnement des ouvrages de franchissement', 'gloservices'); ?></li>
                            <li><?php _e('Étude et conception des routes et pistes rurales', 'gloservices'); ?></li>
                            <li><?php _e('Élaboration des plans d\'exécution : profils en long et en travers…', 'gloservices'); ?></li>
                            <li><?php _e('Métré et évaluation des travaux', 'gloservices'); ?></li>
                            <li><?php _e('Élaboration des DCE', 'gloservices'); ?></li>
                            <li><?php _e('Suivi et contrôle des travaux', 'gloservices'); ?></li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Roadstru End -->

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