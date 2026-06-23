<?php
/**
 * Single service template
 *
 * @package Gloservices
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown"><?php _e('Service', 'gloservices'); ?></h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Accueil', 'gloservices'); ?></a></li>
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo esc_url(home_url('/service')); ?>"><?php _e('Services', 'gloservices'); ?></a></li>
                <li class="breadcrumb-item text-white active" aria-current="page"><?php the_title(); ?></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="container-xxl py-5">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <div class="row g-5">
                <div class="col-lg-8">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="mb-4">
                            <?php the_post_thumbnail('full', ['class' => 'img-fluid rounded']); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="d-flex align-items-center mb-3">
                        <?php
                        $icon = get_post_meta(get_the_ID(), '_service_icon', true);
                        if ($icon) :
                        ?>
                            <div class="counter-icon me-3">
                                <i class="<?php echo esc_attr($icon); ?> text-white"></i>
                            </div>
                        <?php endif; ?>
                        <h2 class="mb-0"><?php the_title(); ?></h2>
                    </div>
                    
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light p-4 rounded">
                        <h5 class="text-primary mb-3"><?php _e('Besoin d\'aide ?', 'gloservices'); ?></h5>
                        <p><?php _e('Contactez-nous pour plus d\'informations sur ce service.', 'gloservices'); ?></p>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary rounded-pill py-2 px-4"><?php _e('Nous contacter', 'gloservices'); ?></a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php
get_footer();