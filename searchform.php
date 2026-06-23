<?php
/**
 * Custom search form
 *
 * @package Gloservices
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="input-group">
        <input type="search" class="form-control border-0" placeholder="<?php esc_attr_e('Rechercher...', 'gloservices'); ?>" value="<?php echo get_search_query(); ?>" name="s">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
    </div>
</form>