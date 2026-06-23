<?php
/**
 * Gloservices Theme Functions
 *
 * @package Gloservices
 */

if (!defined('ABSPATH')) {
    exit;
}

// Load translations module
require_once get_template_directory() . '/translations.php';

/**
 * Theme Setup
 */
function gloservices_setup()
{
    load_theme_textdomain('gloservices', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('align-wide');

    register_nav_menus([
        'primary' => __('Menu Principal', 'gloservices'),
        'footer'  => __('Menu Footer', 'gloservices'),
    ]);

    add_image_size('gloservices-600x400', 600, 400, true);
    add_image_size('gloservices-carousel', 1920, 800, true);
}
add_action('after_setup_theme', 'gloservices_setup');

function gloservices_content_width()
{
    $GLOBALS['content_width'] = 1140;
}
add_action('after_setup_theme', 'gloservices_content_width', 0);

/**
 * Enqueue scripts and styles
 */
function gloservices_scripts()
{
    $theme_dir = get_template_directory_uri();

    // Google Fonts: Inter + Plus Jakarta Sans
    wp_enqueue_style('gloservices-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap', [], null);

    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', [], '6.5.0');

    // Bootstrap Icons
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css', [], '1.11.3');

    // Owl Carousel CSS
    wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', [], '2.3.4');
    wp_enqueue_style('owl-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', [], '2.3.4');

    // Animate CSS
    wp_enqueue_style('animate-css', $theme_dir . '/assets/lib/animate/animate.min.css', [], '4.1.1');

    // Lightbox CSS
    wp_enqueue_style('lightbox-css', $theme_dir . '/assets/lib/lightbox/css/lightbox.min.css', [], '2.11.3');

    // Bootstrap CSS
    wp_enqueue_style('bootstrap', $theme_dir . '/assets/css/bootstrap.min.css', [], '5.0.0');

    // Theme style
    wp_enqueue_style('gloservices-style', $theme_dir . '/assets/css/style.css', ['bootstrap'], '2.9.2');

    // jQuery
    wp_enqueue_script('jquery');

    // Bootstrap JS
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', ['jquery'], '5.0.0', true);

    // Wow JS
    wp_enqueue_script('wow', $theme_dir . '/assets/lib/wow/wow.min.js', [], '1.3.0', true);

    // Easing
    wp_enqueue_script('easing', $theme_dir . '/assets/lib/easing/easing.min.js', ['jquery'], '1.4.1', true);

    // Waypoints
    wp_enqueue_script('waypoints', $theme_dir . '/assets/lib/waypoints/waypoints.min.js', ['jquery'], '4.0.1', true);

    // Counterup
    wp_enqueue_script('counterup', $theme_dir . '/assets/lib/counterup/counterup.min.js', ['jquery', 'waypoints'], '1.0.0', true);

    // Owl Carousel JS
    wp_enqueue_script('owl-carousel', $theme_dir . '/assets/lib/owlcarousel/owl.carousel.min.js', ['jquery'], '2.3.4', true);

    // Isotope
    wp_enqueue_script('isotope', $theme_dir . '/assets/lib/isotope/isotope.pkgd.min.js', ['jquery'], '3.0.6', true);

    // Lightbox JS
    wp_enqueue_script('lightbox', $theme_dir . '/assets/lib/lightbox/js/lightbox.min.js', ['jquery'], '2.11.3', true);

    // Theme main JS
    wp_enqueue_script('gloservices-main', $theme_dir . '/assets/js/main.js', ['jquery'], '2.6.0', true);

    // RTL support
    if (is_rtl()) {
        wp_enqueue_style('gloservices-rtl', $theme_dir . '/assets/css/rtl.css', ['gloservices-style'], '2.0.0');
    }

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'gloservices_scripts');

/**
 * Register widget areas
 */
function gloservices_widgets_init()
{
    register_sidebar([
        'name'          => __('Sidebar', 'gloservices'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets de la barre latérale.', 'gloservices'),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget-title mb-3">',
        'after_title'   => '</h5>',
    ]);

    for ($i = 1; $i <= 4; $i++) {
        register_sidebar([
            'name'          => sprintf(__('Footer Colonne %d', 'gloservices'), $i),
            'id'            => "footer-{$i}",
            'description'   => sprintf(__('Widgets du footer, colonne %d.', 'gloservices'), $i),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="text-white mb-4">',
            'after_title'   => '</h5>',
        ]);
    }
}
add_action('widgets_init', 'gloservices_widgets_init');

/**
 * Register Custom Post Types
 */
function gloservices_register_post_types()
{
    register_post_type('project', [
        'labels' => [
            'name'               => __('Projets', 'gloservices'),
            'singular_name'      => __('Projet', 'gloservices'),
            'menu_name'          => __('Projets', 'gloservices'),
            'add_new'            => __('Ajouter un projet', 'gloservices'),
            'add_new_item'       => __('Ajouter un nouveau projet', 'gloservices'),
            'edit_item'          => __('Modifier le projet', 'gloservices'),
            'new_item'           => __('Nouveau projet', 'gloservices'),
            'view_item'          => __('Voir le projet', 'gloservices'),
            'search_items'       => __('Rechercher des projets', 'gloservices'),
            'not_found'          => __('Aucun projet trouvé', 'gloservices'),
            'not_found_in_trash' => __('Aucun projet dans la corbeille', 'gloservices'),
        ],
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-portfolio',
        'menu_position' => 5,
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'show_in_rest' => true,
        'rewrite'      => ['slug' => 'projets'],
    ]);

    register_post_type('service', [
        'labels' => [
            'name'               => __('Services', 'gloservices'),
            'singular_name'      => __('Service', 'gloservices'),
            'menu_name'          => __('Services', 'gloservices'),
            'add_new'            => __('Ajouter un service', 'gloservices'),
            'add_new_item'       => __('Ajouter un nouveau service', 'gloservices'),
            'edit_item'          => __('Modifier le service', 'gloservices'),
            'new_item'           => __('Nouveau service', 'gloservices'),
            'view_item'          => __('Voir le service', 'gloservices'),
            'search_items'       => __('Rechercher des services', 'gloservices'),
            'not_found'          => __('Aucun service trouvé', 'gloservices'),
            'not_found_in_trash' => __('Aucun service dans la corbeille', 'gloservices'),
        ],
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-welcome-widgets-menus',
        'menu_position' => 6,
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'show_in_rest' => true,
        'rewrite'      => ['slug' => 'services'],
    ]);

    register_post_type('team_member', [
        'labels' => [
            'name'               => __("L'équipe", 'gloservices'),
            'singular_name'      => __('Membre', 'gloservices'),
            'menu_name'          => __("L'équipe", 'gloservices'),
            'add_new'            => __('Ajouter un membre', 'gloservices'),
            'add_new_item'       => __('Ajouter un nouveau membre', 'gloservices'),
            'edit_item'          => __('Modifier le membre', 'gloservices'),
            'new_item'           => __('Nouveau membre', 'gloservices'),
            'view_item'          => __('Voir le membre', 'gloservices'),
            'search_items'       => __('Rechercher des membres', 'gloservices'),
            'not_found'          => __('Aucun membre trouvé', 'gloservices'),
            'not_found_in_trash' => __('Aucun membre dans la corbeille', 'gloservices'),
        ],
        'public'       => true,
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-groups',
        'menu_position' => 7,
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'show_in_rest' => true,
    ]);

    register_taxonomy('project_category', 'project', [
        'labels' => [
            'name'              => __('Catégories de projet', 'gloservices'),
            'singular_name'     => __('Catégorie', 'gloservices'),
            'search_items'      => __('Rechercher des catégories', 'gloservices'),
            'all_items'         => __('Toutes les catégories', 'gloservices'),
            'edit_item'         => __('Modifier la catégorie', 'gloservices'),
            'update_item'       => __('Mettre à jour', 'gloservices'),
            'add_new_item'      => __('Ajouter une catégorie', 'gloservices'),
            'new_item_name'     => __('Nouvelle catégorie', 'gloservices'),
            'menu_name'         => __('Catégories', 'gloservices'),
        ],
        'hierarchical' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'projet-categorie'],
    ]);
}
add_action('init', 'gloservices_register_post_types');

/**
 * Meta boxes
 */
function gloservices_add_meta_boxes()
{
    add_meta_box('team_member_info', __('Informations du membre', 'gloservices'), 'gloservices_team_meta_callback', 'team_member', 'normal', 'high');
    add_meta_box('service_icon', __('Icône du service', 'gloservices'), 'gloservices_service_meta_callback', 'service', 'side', 'default');
    add_meta_box('project_info', __('Informations du projet', 'gloservices'), 'gloservices_project_meta_callback', 'project', 'normal', 'high');
}
add_action('add_meta_boxes', 'gloservices_add_meta_boxes');

function gloservices_project_meta_callback($post)
{
    wp_nonce_field('gloservices_project_meta', 'gloservices_project_nonce');
    $client = get_post_meta($post->ID, '_project_client', true);
    $year = get_post_meta($post->ID, '_project_year', true);
    $cost = get_post_meta($post->ID, '_project_cost', true);
    ?>
    <p><label for="project_client"><strong><?php _e('Client', 'gloservices'); ?></strong></label><br>
    <input type="text" id="project_client" name="project_client" value="<?php echo esc_attr($client); ?>" class="widefat"></p>
    <p><label for="project_year"><strong><?php _e('Année de réalisation', 'gloservices'); ?></strong></label><br>
    <input type="text" id="project_year" name="project_year" value="<?php echo esc_attr($year); ?>" class="widefat" placeholder="Ex: 2025 ou 2023-2025"></p>
    <p><label for="project_cost"><strong><?php _e('Budget / Coût', 'gloservices'); ?></strong></label><br>
    <input type="text" id="project_cost" name="project_cost" value="<?php echo esc_attr($cost); ?>" class="widefat" placeholder="Ex: 800 000 MAD"></p>
    <?php
}

function gloservices_team_meta_callback($post)
{
    wp_nonce_field('gloservices_team_meta', 'gloservices_team_nonce');
    $designation = get_post_meta($post->ID, '_team_designation', true);
    $facebook = get_post_meta($post->ID, '_team_facebook', true);
    $twitter = get_post_meta($post->ID, '_team_twitter', true);
    $instagram = get_post_meta($post->ID, '_team_instagram', true);
    ?>
    <p><label for="team_designation"><strong><?php _e('Fonction', 'gloservices'); ?></strong></label><br>
    <input type="text" id="team_designation" name="team_designation" value="<?php echo esc_attr($designation); ?>" class="widefat"></p>
    <p><label for="team_facebook"><strong><?php _e('Facebook URL', 'gloservices'); ?></strong></label><br>
    <input type="url" id="team_facebook" name="team_facebook" value="<?php echo esc_attr($facebook); ?>" class="widefat"></p>
    <p><label for="team_twitter"><strong><?php _e('Twitter URL', 'gloservices'); ?></strong></label><br>
    <input type="url" id="team_twitter" name="team_twitter" value="<?php echo esc_attr($twitter); ?>" class="widefat"></p>
    <p><label for="team_instagram"><strong><?php _e('Instagram URL', 'gloservices'); ?></strong></label><br>
    <input type="url" id="team_instagram" name="team_instagram" value="<?php echo esc_attr($instagram); ?>" class="widefat"></p>
    <?php
}

function gloservices_service_meta_callback($post)
{
    wp_nonce_field('gloservices_service_meta', 'gloservices_service_nonce');
    $icon = get_post_meta($post->ID, '_service_icon', true);
    ?>
    <p><label for="service_icon"><strong><?php _e('Icône Font Awesome', 'gloservices'); ?></strong></label><br>
    <input type="text" id="service_icon" name="service_icon" value="<?php echo esc_attr($icon); ?>" class="widefat" placeholder="fa fa-road">
    <small><?php _e('Ex: fa fa-road, fa fa-hard-hat, fa fa-lightbulb', 'gloservices'); ?></small></p>
    <?php
}

function gloservices_save_meta($post_id)
{
    if (isset($_POST['gloservices_team_nonce']) && wp_verify_nonce($_POST['gloservices_team_nonce'], 'gloservices_team_meta')) {
        $fields = ['team_designation', 'team_facebook', 'team_twitter', 'team_instagram'];
        foreach ($fields as $field) {
            if (isset($_POST[$field])) {
                update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
            }
        }
    }
    if (isset($_POST['gloservices_service_nonce']) && wp_verify_nonce($_POST['gloservices_service_nonce'], 'gloservices_service_meta')) {
        if (isset($_POST['service_icon'])) {
            update_post_meta($post_id, '_service_icon', sanitize_text_field($_POST['service_icon']));
        }
    }
    if (isset($_POST['gloservices_project_nonce']) && wp_verify_nonce($_POST['gloservices_project_nonce'], 'gloservices_project_meta')) {
        $fields = ['project_client', 'project_year', 'project_cost'];
        foreach ($fields as $field) {
            if (isset($_POST[$field])) {
                update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
            }
        }
    }
}
add_action('save_post', 'gloservices_save_meta');

/**
 * Admin menu
 */
function gloservices_add_admin_menu()
{
    add_menu_page(
        __('Gloservices Options', 'gloservices'),
        __('Gloservices', 'gloservices'),
        'manage_options',
        'gloservices-options',
        'gloservices_options_page',
        'dashicons-admin-generic',
        3
    );
}
add_action('admin_menu', 'gloservices_add_admin_menu');

function gloservices_register_settings()
{
    $options = [
        'gloservices_phone', 'gloservices_email', 'gloservices_address',
        'gloservices_hours', 'gloservices_facebook', 'gloservices_linkedin',
        'gloservices_twitter', 'gloservices_youtube',
        'gloservices_stats_customers', 'gloservices_stats_projects', 'gloservices_stats_workers',
    ];
    foreach ($options as $option) {
        register_setting('gloservices_options_group', $option);
    }
}
add_action('admin_init', 'gloservices_register_settings');

function gloservices_options_page()
{
    ?>
    <div class="wrap">
        <h1><?php _e('Gloservices - Options du thème', 'gloservices'); ?></h1>
        <form method="post" action="options.php">
            <?php settings_fields('gloservices_options_group'); ?>
            <table class="form-table">
                <tr><th scope="row"><?php _e('Téléphone', 'gloservices'); ?></th><td><input type="text" name="gloservices_phone" value="<?php echo esc_attr(get_option('gloservices_phone')); ?>" class="regular-text"></td></tr>
                <tr><th scope="row"><?php _e('Email', 'gloservices'); ?></th><td><input type="email" name="gloservices_email" value="<?php echo esc_attr(get_option('gloservices_email')); ?>" class="regular-text"></td></tr>
                <tr><th scope="row"><?php _e('Adresse', 'gloservices'); ?></th><td><input type="text" name="gloservices_address" value="<?php echo esc_attr(get_option('gloservices_address')); ?>" class="regular-text"></td></tr>
                <tr><th scope="row"><?php _e('Heures d\'ouverture', 'gloservices'); ?></th><td><input type="text" name="gloservices_hours" value="<?php echo esc_attr(get_option('gloservices_hours')); ?>" class="regular-text"></td></tr>
                <tr><th scope="row"><?php _e('Facebook URL', 'gloservices'); ?></th><td><input type="url" name="gloservices_facebook" value="<?php echo esc_attr(get_option('gloservices_facebook')); ?>" class="regular-text"></td></tr>
                <tr><th scope="row"><?php _e('LinkedIn URL', 'gloservices'); ?></th><td><input type="url" name="gloservices_linkedin" value="<?php echo esc_attr(get_option('gloservices_linkedin')); ?>" class="regular-text"></td></tr>
                <tr><th scope="row"><?php _e('Twitter URL', 'gloservices'); ?></th><td><input type="url" name="gloservices_twitter" value="<?php echo esc_attr(get_option('gloservices_twitter')); ?>" class="regular-text"></td></tr>
                <tr><th scope="row"><?php _e('YouTube URL', 'gloservices'); ?></th><td><input type="url" name="gloservices_youtube" value="<?php echo esc_attr(get_option('gloservices_youtube')); ?>" class="regular-text"></td></tr>
                <tr><th scope="row"><?php _e('Clients satisfaits', 'gloservices'); ?></th><td><input type="number" name="gloservices_stats_customers" value="<?php echo esc_attr(get_option('gloservices_stats_customers', '100')); ?>"></td></tr>
                <tr><th scope="row"><?php _e('Projets réalisés', 'gloservices'); ?></th><td><input type="number" name="gloservices_stats_projects" value="<?php echo esc_attr(get_option('gloservices_stats_projects', '30')); ?>"></td></tr>
                <tr><th scope="row"><?php _e('Travailleurs experts', 'gloservices'); ?></th><td><input type="number" name="gloservices_stats_workers" value="<?php echo esc_attr(get_option('gloservices_stats_workers', '12')); ?>"></td></tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

/**
 * Language switcher
 */
function gloservices_language_switcher()
{
    $languages = [
        'fr' => ['name' => 'Français', 'flag' => 'https://img.icons8.com/color/48/000000/france.png'],
        'en' => ['name' => 'English', 'flag' => 'https://img.icons8.com/color/48/000000/usa.png'],
        'ar' => ['name' => 'العربية', 'flag' => 'https://img.icons8.com/color/48/000000/morocco.png'],
    ];

    $current_lang = 'fr';
    if (function_exists('pll_current_language')) {
        $current_lang = pll_current_language('slug') ?: 'fr';
    }

    echo '<div class="language-selector d-inline-flex align-items-center">';
    foreach ($languages as $code => $lang) {
        $url = '';
        $active_class = ($code === $current_lang) ? ' active-lang' : '';

        if (function_exists('pll_current_language')) {
            if (is_singular()) {
                $tr_id = pll_get_post(get_queried_object_id(), $code);
                $url = $tr_id ? get_permalink($tr_id) : pll_home_url($code);
            } else {
                $url = pll_home_url($code);
            }
        } else {
            $url = home_url('/?lang=' . $code);
        }

        echo sprintf(
            '<a class="btn btn-sm p-1 language-icon%s" href="%s" title="%s" hreflang="%s"><img src="%s" alt="%s"></a>',
            esc_attr($active_class),
            esc_url($url),
            esc_attr($lang['name']),
            esc_attr($code),
            esc_url($lang['flag']),
            esc_attr(strtoupper($code))
        );
    }
    echo '</div>';
}

/**
 * Vendor carousel
 */
function gloservices_vendor_carousel()
{
    $vendors = [
        'vendor-1.jpg',
        'vendor-2.jpg',
        'vendor-3.jpg',
        'vendor-4.jpg',
        'vendor-5.jpg',
        'vendor-6.jpg',
        'vendor-7.jpg',
        'vendor-8.jpg',
        'vendor-9.jpg',
        'vendor-10.png',
        'vendor-11.png',
        'vendor-12.png',
        'vendor-13.png',
        'vendor-14.png',
    ];
    echo '<div class="owl-carousel vendor-carousel" style="direction:ltr;">';
    foreach ($vendors as $vendor) {
        $img = get_template_directory_uri() . '/assets/img/' . $vendor;
        echo sprintf('<div class="ref-logo-item"><img src="%s" alt=""></div>', esc_url($img));
    }
    echo '</div>';
}

/** 
 * Get translated page URL 
 */
function gloservices_translated_page_url($slug)
{
    if (function_exists('pll_get_post')) {
        $fr_page = get_page_by_path($slug);
        if ($fr_page) {
            $current_lang = pll_current_language('slug');
            $tr_id = pll_get_post($fr_page->ID, $current_lang);
            if ($tr_id) {
                return get_permalink($tr_id);
            }
            return get_permalink($fr_page->ID);
        }
    }
    return home_url('/' . $slug . '/');
}

/**
 * Fallback menu
 */
function gloservices_fallback_menu()
{
    $items = [
        ['slug' => '',           'label' => __('Accueil', 'gloservices')],
        ['slug' => 'about',      'label' => __('Qui sommes-nous', 'gloservices')],
        ['slug' => 'service',    'label' => __('Services', 'gloservices')],
        ['slug' => 'moyen',      'label' => __('Nos moyens', 'gloservices')],
        ['slug' => 'projet',     'label' => __('Projets', 'gloservices')],
    ];

    echo '<ul class="navbar-nav ms-auto p-4 p-lg-0">';
    foreach ($items as $item) {
        if ($item['slug'] === '') {
            $url = function_exists('pll_home_url') ? pll_home_url() : home_url('/');
        } else {
            $url = gloservices_translated_page_url($item['slug']);
        }
        echo '<li><a class="nav-item nav-link" href="' . esc_url($url) . '">' . esc_html($item['label']) . '</a></li>';
    }
    echo '</ul>';
}

/**
 * Filter
 */
add_filter('excerpt_length', function($length) { return 30; });
add_filter('excerpt_more', function($more) { return '...'; });

function gloservices_body_classes($classes)
{
    $locale = get_locale();
    if (strpos($locale, 'ar') === 0) { $classes[] = 'rtl'; $classes[] = 'lang-ar'; }
    if (strpos($locale, 'fr') === 0) { $classes[] = 'lang-fr'; }
    return $classes;
}
add_filter('body_class', 'gloservices_body_classes');

/**
 * Add Bootstrap classes to primary menu items
 */
function gloservices_nav_menu_css_class($classes, $item, $args) {
    if(isset($args->theme_location) && $args->theme_location === 'primary') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'gloservices_nav_menu_css_class', 1, 3);

/**
 * Add Bootstrap classes to primary menu links
 */
function gloservices_nav_menu_link_attributes($atts, $item, $args) {
    if(isset($args->theme_location) && $args->theme_location === 'primary') {
        $class = isset($atts['class']) ? $atts['class'] : '';
        $atts['class'] = $class . ' nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'gloservices_nav_menu_link_attributes', 1, 3);

add_action('after_switch_theme', function() {
    gloservices_register_post_types();
    flush_rewrite_rules();
});

/**
 * Helper to check if we are on a project-related page context
 */
function gloservices_is_project_context()
{
    if (is_singular('project') || is_post_type_archive('project') || get_post_type() === 'project') {
        return true;
    }
    if (is_page() && (is_page('projet') || is_page('project') || is_page('projets') || is_page('projects') || is_page('road-structure') || is_page('road_structure'))) {
        return true;
    }
    return false;
}

/**
 * Replace Gloservices with Globuild in page titles on project pages
 */
add_filter('document_title_parts', function($title_parts) {
    if (gloservices_is_project_context()) {
        if (isset($title_parts['site'])) {
            $title_parts['site'] = str_replace('Gloservices', 'Globuild', $title_parts['site']);
        }
        if (isset($title_parts['title'])) {
            $title_parts['title'] = str_replace('Gloservices', 'Globuild', $title_parts['title']);
        }
    }
    return $title_parts;
});

/**
 * Replace Gloservices with Globuild in post titles on project pages
 */
add_filter('the_title', function($title, $id = null) {
    if (is_admin()) {
        return $title;
    }
    if (gloservices_is_project_context()) {
        $title = str_replace('Gloservices', 'Globuild', $title);
    }
    return $title;
}, 10, 2);

/**
 * Replace Gloservices with Globuild in post content on project pages
 */
add_filter('the_content', function($content) {
    if (gloservices_is_project_context()) {
        $content = str_replace('Gloservices', 'Globuild', $content);
    }
    return $content;
});