<?php
/**
 * Main index template (fallback)
 *
 * @package Gloservices
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown"><?php _e('Blog', 'gloservices'); ?></h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Accueil', 'gloservices'); ?></a></li>
                <li class="breadcrumb-item text-white active" aria-current="page"><?php _e('Blog', 'gloservices'); ?></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article <?php post_class('blog-item mb-5'); ?>>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="blog-img mb-4">
                                    <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded']); ?>
                                </div>
                            <?php endif; ?>
                            <h2 class="mb-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="d-flex align-items-center mb-3">
                                <span class="check-list-icon me-2"><i class="fa fa-calendar"></i></span>
                                <small class="me-3"><?php echo get_the_date(); ?></small>
                                <span class="check-list-icon me-2"><i class="fa fa-user"></i></span>
                                <small><?php the_author(); ?></small>
                            </div>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary rounded-pill py-2 px-4"><?php _e('Lire la suite', 'gloservices'); ?></a>
                        </article>
                    <?php endwhile; ?>
                    
                    <div class="pagination">
                        <?php
                        echo paginate_links([
                            'prev_text' => __('&laquo; Précédent', 'gloservices'),
                            'next_text' => __('Suivant &raquo;', 'gloservices'),
                        ]);
                        ?>
                    </div>
                <?php else : ?>
                    <p><?php _e('Aucun article trouvé.', 'gloservices'); ?></p>
                <?php endif; ?>
            </div>
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();