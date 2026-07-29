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
    <meta name="description" content="<?php echo esc_attr(gloservices_get_seo_description()); ?>">
    <?php if (!function_exists('has_site_icon') || !has_site_icon()) : ?>
        <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon-circle.png" type="image/png">
    <?php endif; ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <script>
        window.currentLang = '<?php echo function_exists('pll_current_language') ? esc_js(pll_current_language('slug')) : 'fr'; ?>';
    </script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- DEBUG LANG: <?php echo function_exists('pll_current_language') ? pll_current_language('slug') : 'no_pll'; ?> -->
<?php wp_body_open(); ?>

<!-- Spinner -->
<div id="spinner" class="show <?php echo is_front_page() ? 'is-homepage-preloader' : 'is-innerpage-preloader'; ?>">
    <!-- Background Floating Category Icons -->
    <div class="spinner-bg-icons-container">
        <i class="fas fa-city spinner-bg-icon icon-1"></i>
        <i class="fas fa-road spinner-bg-icon icon-2"></i>
        <i class="fas fa-laptop-code spinner-bg-icon icon-3"></i>
    </div>

    <!-- Central Spinning Globuild Logo -->
    <div class="spinner-logo-wrapper text-center">
        <img class="spinner-favicon-img spinning-logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon-circle.png" alt="Gloservices Loading">
    </div>

    <!-- Homepage Cinematic Intro Zoom Text (Build The Future) -->
    <?php if (is_front_page()) : ?>
        <div class="cinematic-intro-wrapper">
            <h1 class="cinematic-zoom-text">BUILD THE FUTURE</h1>
        </div>
    <?php endif; ?>
</div>

<!-- Topbar -->
<div class="topbar d-none d-lg-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="topbar-info">
                    <a href="https://maps.google.com/?q=<?php echo urlencode(get_option('gloservices_address', '11 Rue Dayet Aoua, Agdal, Rabat')); ?>" target="_blank" rel="noopener noreferrer" class="topbar-info-item text-decoration-none topbar-address-link" title="<?php echo esc_attr(gloservices_translate('Voir l\'emplacement sur Google Maps')); ?>">
                        <i class="fas fa-map-marker-alt text-primary"></i>
                        <span><?php echo esc_html(gloservices_translate(get_option('gloservices_address', '11 Rue Dayet Aoua, Agdal, Rabat'))); ?></span>
                    </a>
                    <span class="topbar-info-item">
                        <i class="far fa-clock text-primary"></i>
                        <span><?php echo esc_html(gloservices_translate(get_option('gloservices_hours', 'Lundi - Vendredi : 09h00 - 18h00'))); ?></span>
                    </span>
                </div>
            </div>
            <div class="col-md-5 text-end">
                <div class="d-inline-flex align-items-center gap-3">
                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', get_option('gloservices_phone', '+212 5 37 77 14 50'))); ?>" class="topbar-info-item text-decoration-none">
                        <i class="fas fa-phone-alt text-primary"></i>
                        <span dir="ltr"><?php echo esc_html(get_option('gloservices_phone', '+212 5 37 77 14 50')); ?></span>
                    </a>
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
                ['slug' => '',        'label' => __('Accueil', 'gloservices')],
                ['slug' => 'about',   'label' => __('Qui sommes-nous', 'gloservices')],
                ['slug' => 'service', 'label' => __('Services', 'gloservices')],
                ['slug' => 'moyen',   'label' => __('Nos moyens', 'gloservices')],
                ['slug' => 'projet',  'label' => __('Projets', 'gloservices')],
            ];
            echo '<ul class="mobile-nav-list">';
            foreach ($mob_items as $mob_item) {
                if ($mob_item['slug'] === '') {
                    $url = home_url('/');
                    $is_active = is_front_page() || is_home();
                } else {
                    $url = gloservices_fix_url_host(gloservices_translated_page_url($mob_item['slug']));
                    $is_active = is_page($mob_item['slug']) || is_page_template('page-' . $mob_item['slug'] . '.php') || (is_singular('project') && $mob_item['slug'] === 'projet') || (is_post_type_archive('project') && $mob_item['slug'] === 'projet');
                }
                $active_class = $is_active ? ' class="active"' : '';
                echo '<li><a' . $active_class . ' href="' . esc_url($url) . '">' . esc_html($mob_item['label']) . '</a></li>';
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