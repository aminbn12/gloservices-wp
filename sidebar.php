<?php
/**
 * Sidebar template
 *
 * @package Gloservices
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<aside class="sidebar">
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php else : ?>
        <div class="widget mb-4">
            <h5 class="widget-title mb-3"><?php _e('Recherche', 'gloservices'); ?></h5>
            <?php get_search_form(); ?>
        </div>
        <div class="widget mb-4">
            <h5 class="widget-title mb-3"><?php _e('Pages', 'gloservices'); ?></h5>
            <ul class="list-unstyled">
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Accueil', 'gloservices'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/about')); ?>"><?php _e('Qui sommes-nous', 'gloservices'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/mission')); ?>"><?php _e('Nos missions', 'gloservices'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/projet')); ?>"><?php _e('Projets', 'gloservices'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>"><?php _e('Contact', 'gloservices'); ?></a></li>
            </ul>
        </div>
    <?php endif; ?>
</aside>