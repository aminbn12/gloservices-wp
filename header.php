<?php
/**
 * Header template
 *
 * @package Gloservices
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php if (!function_exists('has_site_icon') || !has_site_icon()) : ?>
        <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon-circle.png" type="image/png">
    <?php endif; ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- DEBUG LANG: <?php echo function_exists('pll_current_language') ? pll_current_language('slug') : 'no_pll'; ?> -->
<?php wp_body_open(); ?>

<!-- Spinner -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only"><?php _e('Chargement...', 'gloservices'); ?></span>
    </div>
</div>

<!-- Topbar -->
<div class="topbar d-none d-lg-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="topbar-info">
                    <span class="topbar-info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <?php echo esc_html(gloservices_translate(get_option('gloservices_address', '11 Rue Dayet Aoua, Agdal, Rabat'))); ?>
                    </span>
                    <span class="topbar-info-item">
                        <i class="far fa-clock"></i>
                        <?php echo esc_html(gloservices_translate(get_option('gloservices_hours', 'Lundi - Vendredi : 09h00 - 18h00'))); ?>
                    </span>
                </div>
            </div>
            <div class="col-md-5 text-end">
                <div class="d-inline-flex align-items-center gap-3">
                    <span class="topbar-info-item">
                        <i class="fas fa-phone-alt"></i>
                        <span dir="ltr"><?php echo esc_html(get_option('gloservices_phone', '+212 5 37 77 14 50')); ?></span>
                    </span>
                    <?php
                    $facebook = get_option('gloservices_facebook');
                    $linkedin = get_option('gloservices_linkedin');
                    ?>
                    <div class="topbar-social">
                        <?php if ($facebook) : ?><a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a><?php endif; ?>
                        <?php if ($linkedin) : ?><a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener"><i class="fab fa-linkedin-in"></i></a><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top px-3">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand py-3" href="<?php echo esc_url(home_url('/')); ?>">
            <img class="logo-light" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo-light.png" alt="Globuild Logo">
            <img class="logo-dark" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo-dark.png" alt="Globuild Logo">
        </a>

        <!-- Language Switcher + Hamburger mobile -->
        <div class="d-flex align-items-center gap-2 order-lg-last ms-auto">
            <?php gloservices_language_switcher(); ?>
            <!-- Bouton hamburger visible uniquement sur mobile -->
            <button class="mobile-menu-toggle d-lg-none" id="mobileMenuToggle" aria-label="Ouvrir le menu">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>
        </div>

        <!-- Nav links (desktop uniquement via Bootstrap expand-lg) -->
        <div class="collapse navbar-collapse" id="mainNav">
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'navbar-nav mx-auto',
                    'container'      => false,
                    'fallback_cb'    => 'gloservices_fallback_menu',
                ));
            } else {
                gloservices_fallback_menu();
            }
            ?>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary ms-lg-3">
                <?php _e('Contact', 'gloservices'); ?>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</nav>

<!-- ===== MOBILE SIDEBAR ===== -->
<div class="mobile-overlay" id="mobileOverlay"></div>
<div class="mobile-sidebar" id="mobileSidebar">

    <!-- En-tête sidebar : logo + bouton fermer -->
    <div class="mobile-sidebar-header">
        <a href="<?php echo esc_url(home_url('/')); ?>" onclick="document.getElementById('mobileOverlay').click()">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo-dark.png" alt="Globuild" style="height:36px;">
        </a>
        <button class="mobile-sidebar-close" id="mobileMenuClose" aria-label="Fermer">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <!-- Liens de navigation -->
    <nav class="mobile-sidebar-nav">
        <?php
        if (has_nav_menu('primary')) {
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'mobile-nav-list',
                'container'      => false,
                'fallback_cb'    => false,
            ));
        } else {
            $mob_items = [
                [gloservices_translated_page_url(''),        __('Accueil', 'gloservices')],
                [gloservices_translated_page_url('about'),   __('Qui sommes-nous', 'gloservices')],
                [gloservices_translated_page_url('service'), __('Services', 'gloservices')],
                [gloservices_translated_page_url('moyen'),   __('Nos moyens', 'gloservices')],
                [gloservices_translated_page_url('projet'),  __('Projets', 'gloservices')],
            ];
            echo '<ul class="mobile-nav-list">';
            foreach ($mob_items as $mob_item) {
                echo '<li><a href="' . esc_url($mob_item[0]) . '">' . esc_html($mob_item[1]) . '</a></li>';
            }
            echo '</ul>';
        }
        ?>
    </nav>

    <!-- Pied du sidebar : CTA + langue + infos -->
    <div class="mobile-sidebar-footer">
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary w-100 mb-3">
            <?php _e('Contact', 'gloservices'); ?> <i class="fas fa-arrow-right ms-2"></i>
        </a>
        <div class="mobile-sidebar-lang-wrap">
            <?php gloservices_language_switcher(); ?>
        </div>
        <div class="mobile-sidebar-info-wrap mt-3">
            <div class="mob-info-row"><i class="fas fa-phone-alt"></i> <span dir="ltr"><?php echo esc_html(get_option('gloservices_phone', '+212 5 37 77 14 50')); ?></span></div>
            <div class="mob-info-row"><i class="fas fa-envelope"></i> <span dir="ltr"><?php echo esc_html(get_option('gloservices_email', 'contact@gloservices.ma')); ?></span></div>
        </div>
    </div>

</div>
<!-- ===== FIN MOBILE SIDEBAR ===== -->

