<?php
/**
 * Template Name: Page Contact
 *
 * @package Gloservices
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown"><?php _e('Contact', 'gloservices'); ?></h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Accueil', 'gloservices'); ?></a></li>
                <li class="breadcrumb-item text-white active" aria-current="page"><?php _e('Contact', 'gloservices'); ?></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 4rem 0;">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-5 contact-text py-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-4 ps-lg-0">
                    <h6 class="text-primary"><?php _e('Contactez-nous', 'gloservices'); ?></h6>
                    <h1 class="mb-4 h2"><?php _e('N\'hésitez pas à nous contacter', 'gloservices'); ?></h1>
                    <p class="mb-4"><?php _e('Une question, un projet, une demande de devis ? Contactez-nous et notre équipe vous répondra dans les plus brefs délais.', 'gloservices'); ?></p>
                    
                    <?php
                    // Contact Form 7 DESACTIVÉ - utilisation du formulaire HTML natif traduit
                    ?>
                    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                        <input type="hidden" name="action" value="gloservices_contact_form">
                        <?php wp_nonce_field('gloservices_contact', 'gloservices_contact_nonce'); ?>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="contact_name" placeholder="<?php esc_attr_e('Votre Nom', 'gloservices'); ?>" required>
                                    <label for="name"><?php _e('Votre Nom', 'gloservices'); ?></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="contact_email" placeholder="<?php esc_attr_e('Votre Email', 'gloservices'); ?>" required>
                                    <label for="email"><?php _e('Votre Email', 'gloservices'); ?></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="contact_subject" placeholder="<?php esc_attr_e('Sujet', 'gloservices'); ?>">
                                    <label for="subject"><?php _e('Sujet', 'gloservices'); ?></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="<?php esc_attr_e('Votre message', 'gloservices'); ?>" id="message" name="contact_message" style="height: 100px" required></textarea>
                                    <label for="message"><?php _e('Message', 'gloservices'); ?></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit"><?php _e('Envoyer le message', 'gloservices'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 pe-lg-0 align-self-center">
                <div style="height: 660px; border-radius: 15px; overflow: hidden; box-shadow: 0 8px 24px rgba(0,0,0,0.08);">
                    <iframe class="w-100 h-100" style="object-fit: cover; border:0;"
                        src="https://maps.google.com/maps?q=11+Rue+Dayet+Aoua,+Agdal,+Rabat&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

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