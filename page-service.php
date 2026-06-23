<?php
/**
 * Template Name: Page Service
 *
 * @package Gloservices
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown"><?php _e('Services', 'gloservices'); ?></h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Accueil', 'gloservices'); ?></a></li>
                <li class="breadcrumb-item text-white active" aria-current="page"><?php _e('Services', 'gloservices'); ?></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Service Start -->
<div class="container-fluid services py-5">
    <div class="container">
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <span class="section-badge"><?php _e('SERVICES & EXPERTISE', 'gloservices'); ?></span>
            <h2 class="section-main-title mb-4"><?php _e('L\'alliance de l\'ingénierie de précision et de l\'innovation digitale', 'gloservices'); ?></h2>
        </div>
        <div class="services-grid">
            <?php
            $services_query = new WP_Query([
                'post_type'      => 'service',
                'posts_per_page' => -1,
            ]);

            if ($services_query->have_posts()) :
                $delays = ['0.1s', '0.3s', '0.5s', '0.1s', '0.3s', '0.5s'];
                $counter = 0;
                while ($services_query->have_posts()) : $services_query->the_post();
                    $icon = get_post_meta(get_the_ID(), '_service_icon', true) ?: 'fas fa-road';
            ?>
                <div class="service-card wow fadeInUp" data-wow-delay="<?php echo esc_attr($delays[$counter % 6]); ?>">
                    <div class="icon-wrap">
                        <i class="<?php echo esc_attr($icon); ?>"></i>
                    </div>
                    <h4><?php the_title(); ?></h4>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                    <a class="learn-more" href="<?php the_permalink(); ?>"><?php _e('Lire la suite', 'gloservices'); ?><i class="fa fa-arrow-right ms-2"></i></a>
                </div>
            <?php
                    $counter++;
                endwhile;
                wp_reset_postdata();
            else :
                $static_services = [
                    ['infrastructures_service', 'infrastructures_desc', 'fas fa-road'],
                    ['ouvrages_art_service', 'ouvrages_art_desc', 'fas fa-drafting-compass'],
                    ['batiments_service', 'batiments_desc', 'fas fa-building'],
                    ['vrd_service', 'vrd_desc', 'fas fa-city'],
                    ['solutions_digitales_service', 'solutions_digitales_desc', 'fas fa-laptop-code'],
                    ['gestion_projet_service', 'gestion_projet_desc', 'fas fa-tasks'],
                ];
                $delays = ['0.1s', '0.3s', '0.5s', '0.1s', '0.3s', '0.5s'];
                foreach ($static_services as $idx => $service) :
            ?>
                <div class="service-card wow fadeInUp" data-wow-delay="<?php echo esc_attr($delays[$idx]); ?>">
                    <div class="icon-wrap">
                        <i class="<?php echo esc_attr($service[2]); ?>"></i>
                    </div>
                    <h4><?php _e($service[0], 'gloservices'); ?></h4>
                    <p><?php _e($service[1], 'gloservices'); ?></p>
                    <a class="learn-more" href="<?php echo esc_url(home_url('/contact')); ?>"><?php _e('Lire la suite', 'gloservices'); ?><i class="fa fa-arrow-right ms-2"></i></a>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Feature Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow slideInRight" data-wow-delay="0.1s">
                <div class="p-lg-5 ps-lg-0">
                    <span class="section-badge"><?php _e('Pourquoi nous choisir !', 'gloservices'); ?></span>
                    <h2 class="section-main-title mb-4"><?php _e('Solutions d\'Ingénierie et Numériques Complètes', 'gloservices'); ?></h2>
                    <p class="mb-4 pb-2"><?php _e('Nous fournissons des solutions de pointe pour les projets de génie civil. Notre expertise va de la conception structurelle aux outils numériques avancés pour la gestion de projet.', 'gloservices'); ?></p>
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center feature-item">
                                <div class="feature-icon-box me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div>
                                    <p class="mb-0"><?php _e('Haute Qualité', 'gloservices'); ?></p>
                                    <h5 class="mb-0"><?php _e('Services', 'gloservices'); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center feature-item">
                                <div class="feature-icon-box me-3">
                                    <i class="fa fa-user-check text-white"></i>
                                </div>
                                <div>
                                    <p class="mb-0"><?php _e('Expert', 'gloservices'); ?></p>
                                    <h5 class="mb-0"><?php _e('Professionnels', 'gloservices'); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center feature-item">
                                <div class="feature-icon-box me-3">
                                    <i class="fa fa-drafting-compass text-white"></i>
                                </div>
                                <div>
                                    <p class="mb-0"><?php _e('Consultation', 'gloservices'); ?></p>
                                    <h5 class="mb-0"><?php _e('Gratuite', 'gloservices'); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center feature-item">
                                <div class="feature-icon-box me-3">
                                    <i class="fa fa-headphones text-white"></i>
                                </div>
                                <div>
                                    <p class="mb-0"><?php _e('Support Client', 'gloservices'); ?></p>
                                    <h5 class="mb-0"><?php _e('24/7', 'gloservices'); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 d-flex flex-column align-self-stretch wow slideInRight" data-wow-delay="0.1s" style="min-height: 500px; padding: 20px;">
                <div class="position-relative flex-grow-1" style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg);">
                    <img class="position-absolute img-fluid w-100 h-100" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/feature.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

<!-- Quote Start -->
<div class="quote-section py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="quote-card">
            <div class="quote-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/quote.jpg" alt="">
            </div>
            <div class="quote-form-wrap">
                <div class="quote-tag"><i class="fa fa-file-invoice"></i> <?php _e('Devis Gratuit', 'gloservices'); ?></div>
                <h3><?php _e('Obtenez un Devis Personnalisé', 'gloservices'); ?></h3>
                <p class="quote-desc"><?php _e('Contactez-nous pour obtenir un devis sur mesure pour votre projet. Notre équipe vous répondra rapidement.', 'gloservices'); ?></p>
                <?php
                if (shortcode_exists('contact-form-7')) {
                    echo do_shortcode('[contact-form-7 title="Devis"]');
                } else {
                ?>
                <form action="<?php echo esc_url(home_url('/contact')); ?>" method="post" class="quote-form">
                    <div class="row g-2">
                        <div class="col-12 col-sm-6">
                            <input type="text" name="quote_name" placeholder="<?php esc_attr_e('Votre Nom', 'gloservices'); ?>" required>
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" name="quote_email" placeholder="<?php esc_attr_e('Votre Email', 'gloservices'); ?>" required>
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="text" name="quote_mobile" placeholder="<?php esc_attr_e('Votre Mobile', 'gloservices'); ?>">
                        </div>
                        <div class="col-12 col-sm-6">
                            <select name="quote_service" class="form-select">
                                <option selected><?php _e('Sélectionner un Service', 'gloservices'); ?></option>
                                <option value="btp"><?php _e('Ingénierie Civile (BTP)', 'gloservices'); ?></option>
                                <option value="it"><?php _e('Solutions Numériques (IT)', 'gloservices'); ?></option>
                            </select>
                        </div>
                        <div class="col-12">
                            <textarea name="quote_note" placeholder="<?php esc_attr_e('Note Spéciale', 'gloservices'); ?>" rows="3"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary rounded-pill py-3 px-5" type="submit"><?php _e('Soumettre', 'gloservices'); ?><i class="fas fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->

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