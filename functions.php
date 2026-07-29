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
    wp_enqueue_style('gloservices-style', $theme_dir . '/assets/css/style.css', ['bootstrap'], '6.9.0');

    // jQuery
    wp_enqueue_script('jquery');
    wp_add_inline_script('jquery', '(function($){if($&&$.event&&$.event.add){var _orig=$.event.add;$.event.add=function(elem,types,handler,data,selector){if(!handler||(typeof handler!=="function"&&typeof handler!=="object"))return;return _orig.apply(this,arguments);};}})(jQuery);', 'after');

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

    // Lenis Ultra-Smooth 120fps Smooth Scroll
    wp_enqueue_script('lenis', $theme_dir . '/assets/js/lenis.min.js', [], '1.1.18', true);

    // Theme main JS
    wp_enqueue_script('gloservices-main', $theme_dir . '/assets/js/main.js', ['jquery', 'lenis'], '2.7.0', true);

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
 * Early jQuery Error Shield to prevent invalid handler dispatch exceptions
 */
function gloservices_jquery_error_shield() {
    ?>
    <script>
    (function() {
        function guard() {
            if (window.jQuery && window.jQuery.event && !window.jQuery.event.__shielded) {
                window.jQuery.event.__shielded = true;
                var origAdd = window.jQuery.event.add;
                window.jQuery.event.add = function(elem, types, handler, data, selector) {
                    if (!handler || (typeof handler !== 'function' && typeof handler.handler !== 'function')) {
                        return;
                    }
                    return origAdd.apply(this, arguments);
                };
                var origDispatch = window.jQuery.event.dispatch;
                if (origDispatch) {
                    window.jQuery.event.dispatch = function(event) {
                        try {
                            return origDispatch.apply(this, arguments);
                        } catch (err) {
                            if (err && err.message && err.message.indexOf('apply is not a function') !== -1) {
                                return;
                            }
                            throw err;
                        }
                    };
                }
            }
        }
        guard();
        document.addEventListener('DOMContentLoaded', guard);
    })();
    </script>
    <?php
}
add_action('wp_head', 'gloservices_jquery_error_shield', 1);

/**
 * Helper function to retrieve a consistent, deterministic project image URL.
 * Checks for WP Featured Image first; if missing, computes a stable fallback image URL based on Post ID.
 */
function gloservices_get_project_image_url($post_id = null, $size = 'gloservices-600x400')
{
    if (!$post_id) {
        $post_id = get_the_ID();
    }

    $img_url = get_the_post_thumbnail_url($post_id, $size);
    if ($img_url) {
        return $img_url;
    }

    $post_title = get_the_title($post_id);
    if ($post_id === 70 || stripos($post_title, 'Route Nationale') !== false) {
        $img_num = 4;
    } elseif ($post_id === 73 || stripos($post_title, 'Audit') !== false) {
        $img_num = 3;
    } else {
        $img_num = ($post_id % 6) + 1;
    }

    return get_template_directory_uri() . '/assets/img/img-600x400-' . $img_num . '.jpg';
}

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
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-portfolio',
        'menu_position' => 5,
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'show_in_rest' => true,
        'rewrite'      => ['slug' => 'projet'],
    ]);

/**
 * Redirection 301 permanente pour supprimer l'URL /projets/ et renvoyer vers /projet/
 */
function gloservices_redirect_projets_archive() {
    if (is_admin()) return;
    $request_uri = $_SERVER['REQUEST_URI'] ?? '';
    if (preg_match('#^/gloservices/projets/?(\?.*)?$#i', $request_uri) || is_post_type_archive('project')) {
        wp_redirect(home_url('/projet/'), 301);
        exit;
    }
}
add_action('template_redirect', 'gloservices_redirect_projets_archive', 1);

/**
 * Auto-flush des règles de réécriture pour éviter toute erreur 404 sur les fiches projets
 */
function gloservices_ensure_rewrite_rules() {
    if (get_option('gloservices_cpt_version') !== '2.2') {
        flush_rewrite_rules();
        update_option('gloservices_cpt_version', '2.2');
    }
}
add_action('init', 'gloservices_ensure_rewrite_rules', 99);

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

    register_post_type('hero_slide', [
        'labels' => [
            'name'               => __('Diapositives', 'gloservices'),
            'singular_name'      => __('Diapositive', 'gloservices'),
            'menu_name'          => __('Diapositives', 'gloservices'),
            'add_new'            => __('Ajouter une diapositive', 'gloservices'),
            'add_new_item'       => __('Ajouter une nouvelle diapositive', 'gloservices'),
            'edit_item'          => __('Modifier la diapositive', 'gloservices'),
            'new_item'           => __('Nouvelle diapositive', 'gloservices'),
            'view_item'          => __('Voir la diapositive', 'gloservices'),
            'search_items'       => __('Rechercher des diapositives', 'gloservices'),
            'not_found'          => __('Aucune diapositive trouvée', 'gloservices'),
            'not_found_in_trash' => __('Aucune diapositive dans la corbeille', 'gloservices'),
        ],
        'public'       => true,
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-images-alt2',
        'menu_position' => 4,
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'show_in_rest' => true,
    ]);

    register_post_type('partner', [
        'labels' => [
            'name'               => __('Partenaires', 'gloservices'),
            'singular_name'      => __('Partenaire', 'gloservices'),
            'menu_name'          => __('Partenaires', 'gloservices'),
            'add_new'            => __('Ajouter un partenaire', 'gloservices'),
            'add_new_item'       => __('Ajouter un nouveau partenaire', 'gloservices'),
            'edit_item'          => __('Modifier le partenaire', 'gloservices'),
            'new_item'           => __('Nouveau partenaire', 'gloservices'),
            'view_item'          => __('Voir le partenaire', 'gloservices'),
            'search_items'       => __('Rechercher des partenaires', 'gloservices'),
            'not_found'          => __('Aucun partenaire trouvé', 'gloservices'),
            'not_found_in_trash' => __('Aucun partenaire dans la corbeille', 'gloservices'),
        ],
        'public'       => true,
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-awards',
        'menu_position' => 8,
        'supports'     => ['title', 'thumbnail', 'custom-fields'],
        'show_in_rest' => true,
    ]);

    register_post_type('testimonial', [
        'labels' => [
            'name'               => __('Témoignages', 'gloservices'),
            'singular_name'      => __('Témoignage', 'gloservices'),
            'menu_name'          => __('Témoignages', 'gloservices'),
            'add_new'            => __('Ajouter un témoignage', 'gloservices'),
            'add_new_item'       => __('Ajouter un nouveau témoignage', 'gloservices'),
            'edit_item'          => __('Modifier le témoignage', 'gloservices'),
            'new_item'           => __('Nouveau témoignage', 'gloservices'),
            'view_item'          => __('Voir le témoignage', 'gloservices'),
            'search_items'       => __('Rechercher des témoignages', 'gloservices'),
            'not_found'          => __('Aucun témoignage trouvé', 'gloservices'),
            'not_found_in_trash' => __('Aucun témoignage dans la corbeille', 'gloservices'),
        ],
        'public'       => true,
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-format-quote',
        'menu_position' => 9,
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'show_in_rest' => true,
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
    add_meta_box('hero_slide_info', __('Informations de la Diapositive', 'gloservices'), 'gloservices_hero_slide_meta_callback', 'hero_slide', 'normal', 'high');
    add_meta_box('partner_info', __('Informations du Partenaire', 'gloservices'), 'gloservices_partner_meta_callback', 'partner', 'normal', 'high');
    add_meta_box('testimonial_info', __('Informations du Témoignage', 'gloservices'), 'gloservices_testimonial_meta_callback', 'testimonial', 'normal', 'high');
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

function gloservices_hero_slide_meta_callback($post)
{
    wp_nonce_field('gloservices_hero_slide_meta', 'gloservices_hero_slide_nonce');
    $badge_icon = get_post_meta($post->ID, '_hero_badge_icon', true);
    $badge_text = get_post_meta($post->ID, '_hero_badge_text', true);
    $highlight_text = get_post_meta($post->ID, '_hero_highlight_text', true);
    $video_url = get_post_meta($post->ID, '_hero_video_url', true);
    $btn1_text = get_post_meta($post->ID, '_hero_btn1_text', true);
    $btn1_url = get_post_meta($post->ID, '_hero_btn1_url', true);
    $btn2_text = get_post_meta($post->ID, '_hero_btn2_text', true);
    $btn2_url = get_post_meta($post->ID, '_hero_btn2_url', true);
    ?>
    <p><label for="hero_badge_text"><strong><?php _e('Texte du Badge', 'gloservices'); ?></strong></label><br>
    <input type="text" id="hero_badge_text" name="hero_badge_text" value="<?php echo esc_attr($badge_text); ?>" class="widefat" placeholder="Ex: Bureau d'études BTP"></p>
    
    <p><label for="hero_badge_icon"><strong><?php _e('Icône du Badge (FontAwesome class)', 'gloservices'); ?></strong></label><br>
    <input type="text" id="hero_badge_icon" name="hero_badge_icon" value="<?php echo esc_attr($badge_icon); ?>" class="widefat" placeholder="Ex: fa-hard-hat"></p>

    <p><label for="hero_highlight_text"><strong><?php _e('Titre en Surligné Vert (Highlight)', 'gloservices'); ?></strong></label><br>
    <input type="text" id="hero_highlight_text" name="hero_highlight_text" value="<?php echo esc_attr($highlight_text); ?>" class="widefat" placeholder="Ex: CLÉS EN MAIN"></p>

    <p><label for="hero_video_url"><strong><?php _e('URL Vidéo d\'arrière-plan (MP4)', 'gloservices'); ?></strong></label><br>
    <input type="text" id="hero_video_url" name="hero_video_url" value="<?php echo esc_attr($video_url); ?>" class="widefat" placeholder="Ex: /wp-content/uploads/2026/07/video.mp4"><br>
    <small><?php _e('Optionnel. Si vide, l\'image mise à la une sera utilisée.', 'gloservices'); ?></small></p>

    <hr/>
    <h3><?php _e('Boutons d\'action', 'gloservices'); ?></h3>
    <div style="display: flex; gap: 10px;">
        <div style="flex: 1;">
            <p><label for="hero_btn1_text"><strong><?php _e('Texte Bouton 1 (Principal)', 'gloservices'); ?></strong></label><br>
            <input type="text" id="hero_btn1_text" name="hero_btn1_text" value="<?php echo esc_attr($btn1_text); ?>" class="widefat" placeholder="Ex: Découvrir"></p>
            <p><label for="hero_btn1_url"><strong><?php _e('Lien Bouton 1', 'gloservices'); ?></strong></label><br>
            <input type="text" id="hero_btn1_url" name="hero_btn1_url" value="<?php echo esc_attr($btn1_url); ?>" class="widefat" placeholder="Ex: /about"></p>
        </div>
        <div style="flex: 1;">
            <p><label for="hero_btn2_text"><strong><?php _e('Texte Bouton 2 (Secondaire)', 'gloservices'); ?></strong></label><br>
            <input type="text" id="hero_btn2_text" name="hero_btn2_text" value="<?php echo esc_attr($btn2_text); ?>" class="widefat" placeholder="Ex: Nous contacter"></p>
            <p><label for="hero_btn2_url"><strong><?php _e('Lien Bouton 2', 'gloservices'); ?></strong></label><br>
            <input type="text" id="hero_btn2_url" name="hero_btn2_url" value="<?php echo esc_attr($btn2_url); ?>" class="widefat" placeholder="Ex: /contact"></p>
        </div>
    </div>
    <?php
}

function gloservices_partner_meta_callback($post)
{
    wp_nonce_field('gloservices_partner_meta', 'gloservices_partner_nonce');
    $url = get_post_meta($post->ID, '_partner_url', true);
    ?>
    <p><label for="partner_url"><strong><?php _e('Lien du site web', 'gloservices'); ?></strong></label><br>
    <input type="url" id="partner_url" name="partner_url" value="<?php echo esc_attr($url); ?>" class="widefat" placeholder="https://example.com"></p>
    <?php
}

function gloservices_testimonial_meta_callback($post)
{
    wp_nonce_field('gloservices_testimonial_meta', 'gloservices_testimonial_nonce');
    $role = get_post_meta($post->ID, '_testimonial_role', true);
    ?>
    <p><label for="testimonial_role"><strong><?php _e('Fonction / Poste / Profession de l\'auteur', 'gloservices'); ?></strong></label><br>
    <input type="text" id="testimonial_role" name="testimonial_role" value="<?php echo esc_attr($role); ?>" class="widefat" placeholder="Ex: Promoteur immobilier"></p>
    <small><?php _e('Astuce : Le nom de l\'auteur est le titre de ce témoignage. Le texte de la citation est le contenu ci-dessus.', 'gloservices'); ?></small>
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
    if (isset($_POST['gloservices_hero_slide_nonce']) && wp_verify_nonce($_POST['gloservices_hero_slide_nonce'], 'gloservices_hero_slide_meta')) {
        $fields = ['hero_badge_icon', 'hero_badge_text', 'hero_highlight_text', 'hero_video_url', 'hero_btn1_text', 'hero_btn1_url', 'hero_btn2_text', 'hero_btn2_url'];
        foreach ($fields as $field) {
            if (isset($_POST[$field])) {
                update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
            }
        }
    }
    if (isset($_POST['gloservices_partner_nonce']) && wp_verify_nonce($_POST['gloservices_partner_nonce'], 'gloservices_partner_meta')) {
        if (isset($_POST['partner_url'])) {
            update_post_meta($post_id, '_partner_url', esc_url_raw($_POST['partner_url']));
        }
    }
    if (isset($_POST['gloservices_testimonial_nonce']) && wp_verify_nonce($_POST['gloservices_testimonial_nonce'], 'gloservices_testimonial_meta')) {
        if (isset($_POST['testimonial_role'])) {
            update_post_meta($post_id, '_testimonial_role', sanitize_text_field($_POST['testimonial_role']));
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
        $url = gloservices_fix_url_host($url);

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
    $partners = new WP_Query([
        'post_type'      => 'partner',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC'
    ]);

    echo '<div class="owl-carousel vendor-carousel" style="direction:ltr;">';
    if ($partners->have_posts()) {
        while ($partners->have_posts()) {
            $partners->the_post();
            $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $partner_url = get_post_meta(get_the_ID(), '_partner_url', true);
            if ($img_url) {
                if ($partner_url) {
                    echo sprintf('<div class="ref-logo-item"><a href="%s" target="_blank"><img src="%s" alt="%s"></a></div>', esc_url($partner_url), esc_url($img_url), esc_attr(get_the_title()));
                } else {
                    echo sprintf('<div class="ref-logo-item"><img src="%s" alt="%s"></div>', esc_url($img_url), esc_attr(get_the_title()));
                }
            }
        }
        wp_reset_postdata();
    } else {
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
        foreach ($vendors as $vendor) {
            $img = get_template_directory_uri() . '/assets/img/' . $vendor;
            echo sprintf('<div class="ref-logo-item"><img src="%s" alt=""></div>', esc_url($img));
        }
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
            $url = home_url('/');
            $is_active = is_front_page() || is_home();
        } else {
            $url = gloservices_fix_url_host(gloservices_translated_page_url($item['slug']));
            $is_active = is_page($item['slug']) || is_page_template('page-' . $item['slug'] . '.php') || (is_singular('project') && $item['slug'] === 'projet') || (is_post_type_archive('project') && $item['slug'] === 'projet');
        }
        $active_class = $is_active ? ' active' : '';
        echo '<li class="' . ($is_active ? 'active current-menu-item' : '') . '"><a class="nav-item nav-link' . $active_class . '" href="' . esc_url($url) . '">' . esc_html($item['label']) . '</a></li>';
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

function gloservices_nav_menu_link_attributes($atts, $item, $args) {
    if (isset($args->theme_location) && $args->theme_location === 'primary') {
        $existing = isset($atts['class']) ? $atts['class'] : '';
        $classes = explode(' ', $existing);
        if (!in_array('nav-link', $classes)) {
            $classes[] = 'nav-link';
        }
        if (is_array($item->classes) && (in_array('current-menu-item', $item->classes) || in_array('current_page_item', $item->classes) || in_array('current-menu-ancestor', $item->classes))) {
            if (!in_array('active', $classes)) {
                $classes[] = 'active';
            }
        }
        $atts['class'] = trim(implode(' ', array_filter($classes)));
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'gloservices_nav_menu_link_attributes', 10, 3);

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

/**
 * Developer helper for local environment:
 * Prevents PHPMailer validation failures and forces wp_mail to return success.
 */
if (isset($_SERVER['HTTP_HOST']) && (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false || strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false)) {
    // 1. Force a valid email format for the sender to pass PHPMailer validation
    add_filter('wp_mail_from', function($email) {
        if ($email === 'wordpress@localhost' || strpos($email, '@localhost') !== false) {
            return 'wordpress@gloservices.local';
        }
        return $email;
    });

    // 2. Preempt wp_mail execution to return success (true) on local environments.
    // This allows Contact Form 7 to show the green success box instead of the red error box.
    // The WP Mail Logging plugin will still capture and display the mail correctly.
    add_filter('pre_wp_mail', function($pre, $atts) {
        return true;
    }, 10, 2);
}

/**
 * Core helper: rewrite any localhost URL to the current dynamic host.
 * Works for Ngrok and any other tunnel/proxy.
 */
function gloservices_fix_url_host($url) {
    if (!defined('WP_HOME')) return $url;
    $current_host   = parse_url(WP_HOME, PHP_URL_HOST);
    $current_scheme = parse_url(WP_HOME, PHP_URL_SCHEME);
    // Only rewrite when we are NOT on localhost ourselves
    if ($current_host === 'localhost' || $current_host === '127.0.0.1') return $url;
    // Replace http(s)://localhost/... and http(s)://127.0.0.1/...
    $url = preg_replace('#https?://(localhost|127\.0\.0\.1)(/.*)#i', $current_scheme . '://' . $current_host . '$2', $url);
    return $url;
}

/**
 * Rewrite localhost in home_url() — fixes logo, fallback menu, breadcrumbs, etc.
 */
add_filter('home_url', function($url, $path, $scheme, $blog_id) {
    return gloservices_fix_url_host($url);
}, 99, 4);

/**
 * Rewrite localhost in get_option('home') — used by Polylang and other plugins
 * that read the option directly without going through home_url().
 */
add_filter('option_home', function($value) {
    return gloservices_fix_url_host($value);
}, 99);

add_filter('option_siteurl', function($value) {
    return gloservices_fix_url_host($value);
}, 99);

/**
 * Fix Polylang home URL redirects on dynamic hostnames (like Ngrok)
 */
add_filter('pll_home_url', function($url, $lang) {
    return gloservices_fix_url_host($url);
}, 99, 2);

/**
 * Fix page and post links on dynamic hostnames (like Ngrok)
 */
add_filter('page_link', function($url, $post_id, $sample) {
    return gloservices_fix_url_host($url);
}, 99, 3);

add_filter('post_link', function($url, $post, $leavename) {
    return gloservices_fix_url_host($url);
}, 99, 3);

add_filter('post_type_link', function($url, $post, $leavename, $sample) {
    return gloservices_fix_url_host($url);
}, 99, 4);

/**
 * Rewrite all localhost URLs to the dynamic host (works for Ngrok and any tunneling)
 */
function gloservices_rewrite_localhost_url($url) {
    if (!defined('WP_HOME')) return $url;
    $current_host   = parse_url(WP_HOME, PHP_URL_HOST);
    $current_scheme = parse_url(WP_HOME, PHP_URL_SCHEME);
    // Only rewrite if we're not on localhost ourselves
    if ($current_host === 'localhost' || $current_host === '127.0.0.1') return $url;
    $url = preg_replace('#https?://localhost(/gloservices[^"]*?)#', $current_scheme . '://' . $current_host . '$1', $url);
    return $url;
}

add_filter('wp_redirect', function($location, $status) {
    return gloservices_rewrite_localhost_url($location);
}, 99, 2);

/**
 * Rewrite localhost URLs in nav menu item hrefs (links stored in the database)
 */
add_filter('nav_menu_link_attributes', function($atts, $item, $args, $depth) {
    if (!empty($atts['href'])) {
        $atts['href'] = gloservices_rewrite_localhost_url($atts['href']);
    }
    return $atts;
}, 99, 4);

/**
 * Disable canonical redirects when not on localhost to prevent redirect loops.
 *
 * Strategy:
 * 1. Use 'pll_check_canonical_url' filter (Polylang, fires before wp_safe_redirect)
 *    to rewrite localhost -> current host OR cancel redirect if we are already on the right URL.
 * 2. Use 'init' action to also remove WordPress core redirect_canonical early.
 * 3. Use 'wp_redirect' filter as a last-resort safety net.
 */

/**
 * =========================================================================
 * GLOSERVICES SEO OPTIMIZATIONS (GOOGLE & BING)
 * =========================================================================
 */

/**
 * Get dynamic localized SEO meta description for each page
 */
function gloservices_get_seo_description() {
    $lang = function_exists('pll_current_language') ? pll_current_language('slug') : 'fr';
    
    if (is_front_page()) {
        $desc = [
            'fr' => "Globuild - Bureau d'études BTP et ingénierie à Rabat, Maroc. Spécialiste des structures, VRD, ouvrages d'art, infrastructures et solutions digitales BTP.",
            'en' => "Globuild - Civil Engineering Firm & BTP Consultancy in Rabat, Morocco. Expert in structures, VRD, art structures, infrastructure & digital solutions.",
            'ar' => "Globuild - مكتب دراسات هندسية وبناء في الرباط، المغرب. متخصص في الهياكل، الطرق، المنشآت الفنية والحلول الرقمية.",
        ];
        return isset($desc[$lang]) ? $desc[$lang] : $desc['fr'];
    }

    if (is_page('about') || is_page_template('page-about.php')) {
        $desc = [
            'fr' => "Découvrez Globuild, bureau d'études en génie civil et BTP fort de plus de 10 ans d'expertise dans les projets de construction et d'ingénierie au Maroc.",
            'en' => "Discover Globuild, civil engineering firm with over 10 years of expertise in construction and engineering projects in Morocco.",
            'ar' => "تعرف على Globuild، مكتب دراسات الهندسة المدنية مع أكثر من 10 سنوات من الخبرة في مشاريع البناء والهندسة بالمغرب.",
        ];
        return isset($desc[$lang]) ? $desc[$lang] : $desc['fr'];
    }

    if (is_page('service') || is_page_template('page-service.php')) {
        $desc = [
            'fr' => "Nos services d'ingénierie BTP : infrastructures routières, ouvrages d'art, bâtiments, VRD, maîtrise d'œuvre (OPC) et solutions numériques sur-mesure.",
            'en' => "Our civil engineering services: road infrastructure, art structures, buildings, VRD, project management (OPC) & custom digital solutions.",
            'ar' => "خدماتنا الهندسية: البنية التحتية للطرق، المنشآت الفنية، المباني، الطرق والشبكات، وإدارة المشاريع والحلول الرقمية.",
        ];
        return isset($desc[$lang]) ? $desc[$lang] : $desc['fr'];
    }

    if (is_page('contact') || is_page_template('page-contact.php')) {
        $desc = [
            'fr' => "Contactez Globuild à Rabat, Maroc. Téléphone : +212 5 37 77 14 50. Demandez un devis ou une consultation pour vos projets BTP et ingénierie.",
            'en' => "Contact Globuild in Rabat, Morocco. Phone: +212 5 37 77 14 50. Request a quote or consultation for your civil engineering & construction projects.",
            'ar' => "اتصل بـ Globuild في الرباط، المغرب. هاتف: 50 14 77 37 5 212+. اطلب استشارة أو عرض سعر لمشاريعك البنائية والهندسية.",
        ];
        return isset($desc[$lang]) ? $desc[$lang] : $desc['fr'];
    }

    if (is_page('moyen') || is_page_template('page-moyen.php')) {
        $desc = [
            'fr' => "Nos moyens humains et matériels : des équipes d'ingénieurs qualifiés et des équipements technologiques de pointe pour vos projets BTP au Maroc.",
            'en' => "Our human and technical resources: qualified engineering teams and cutting-edge equipment for your construction projects in Morocco.",
            'ar' => "معداتنا ومواردنا البشرية: فرق هندسية مؤهلة وتقنيات متطورة لمشاريعك الهندسية بالمغرب.",
        ];
        return isset($desc[$lang]) ? $desc[$lang] : $desc['fr'];
    }

    if (is_page('projet') || is_page_template('page-projet.php')) {
        $desc = [
            'fr' => "Explorez les réalisations et projets de Globuild : études de structures, routes, ponts, aménagements urbains et modélisations BTP au Maroc.",
            'en' => "Explore Globuild portfolio & projects: structural engineering, roads, bridges, urban developments & digital BTP modeling in Morocco.",
            'ar' => "استكشف إنجازات ومشاريع Globuild: دراسات الهياكل، الطرق، الجسور، التهيئة الحضرية والنمذجة الهندسية بالمغرب.",
        ];
        return isset($desc[$lang]) ? $desc[$lang] : $desc['fr'];
    }

    if (is_singular()) {
        $excerpt = get_the_excerpt();
        if (!empty($excerpt)) {
            return wp_strip_all_tags($excerpt);
        }
    }

    return get_bloginfo('description');
}

/**
 * Output SEO Meta Tags, Open Graph, Twitter Cards, and Schema.org JSON-LD
 */
function gloservices_seo_meta_head() {
    $seo_desc = gloservices_get_seo_description();
    $page_title = wp_get_document_title();
    $canonical_url = is_singular() ? get_permalink() : (is_front_page() ? home_url('/') : get_pagenum_link());
    if (empty($canonical_url)) {
        $canonical_url = home_url($_SERVER['REQUEST_URI']);
    }
    $site_name = 'Globuild';
    $logo_url = get_template_directory_uri() . '/assets/img/logo-dark.png';
    $phone = get_option('gloservices_phone', '+212 5 37 77 14 50');
    $email = get_option('gloservices_email', 'contact@gloservices.ma');

    // Canonical link
    echo '<link rel="canonical" href="' . esc_url($canonical_url) . '" />' . "\n";

    // Open Graph Tags
    echo '<meta property="og:locale" content="' . esc_attr(get_locale()) . '" />' . "\n";
    echo '<meta property="og:type" content="' . (is_singular() ? 'article' : 'website') . '" />' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($page_title) . '" />' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($seo_desc) . '" />' . "\n";
    echo '<meta property="og:url" content="' . esc_url($canonical_url) . '" />' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr($site_name) . '" />' . "\n";
    echo '<meta property="og:image" content="' . esc_url($logo_url) . '" />' . "\n";

    // Twitter Card Tags
    echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($page_title) . '" />' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($seo_desc) . '" />' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url($logo_url) . '" />' . "\n";

    // Schema.org JSON-LD Structured Data
    $schema = [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'Organization',
                '@id' => home_url('/#organization'),
                'name' => 'Globuild',
                'url' => home_url('/'),
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => $logo_url
                ],
                'contactPoint' => [
                    '@type' => 'ContactPoint',
                    'telephone' => $phone,
                    'contactType' => 'customer service',
                    'email' => $email
                ],
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => '11 Rue Dayet Aoua, Agdal',
                    'addressLocality' => 'Rabat',
                    'addressCountry' => 'MA'
                ]
            ],
            [
                '@type' => 'LocalBusiness',
                '@id' => home_url('/#localbusiness'),
                'name' => 'Globuild - Bureau d\'études BTP & Ingénierie',
                'url' => home_url('/'),
                'image' => $logo_url,
                'telephone' => $phone,
                'email' => $email,
                'priceRange' => '$$$',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => '11 Rue Dayet Aoua, Agdal',
                    'addressLocality' => 'Rabat',
                    'addressCountry' => 'MA'
                ]
            ],
            [
                '@type' => 'WebSite',
                '@id' => home_url('/#website'),
                'url' => home_url('/'),
                'name' => 'Globuild',
                'publisher' => [
                    '@id' => home_url('/#organization')
                ]
            ]
        ]
    ];

    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>' . "\n";
}
add_action('wp_head', 'gloservices_seo_meta_head', 1);

