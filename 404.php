<?php
/**
 * 404 error page
 *
 * @package Gloservices
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown"><?php _e('404', 'gloservices'); ?></h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Accueil', 'gloservices'); ?></a></li>
                <li class="breadcrumb-item text-white active" aria-current="page"><?php _e('Page non trouvée', 'gloservices'); ?></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="container-xxl py-5">
    <div class="container text-center">
        <h1 class="display-1 text-primary mb-4">404</h1>
        <h2 class="mb-4"><?php _e('Page non trouvée', 'gloservices'); ?></h2>
        <p class="mb-4"><?php _e('Désolé, la page que vous recherchez n\'existe pas ou a été déplacée.', 'gloservices'); ?></p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary rounded-pill py-3 px-5"><?php _e('Retour à l\'accueil', 'gloservices'); ?></a>
    </div>
</div>

<?php
get_footer();