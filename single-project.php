<?php
/**
 * Single project template
 *
 * @package Gloservices
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown"><?php _e('Détails du Projet', 'gloservices'); ?></h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Accueil', 'gloservices'); ?></a></li>
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo esc_url(home_url('/projet')); ?>"><?php _e('Projets', 'gloservices'); ?></a></li>
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
                    
                    <h2 class="mb-3"><?php the_title(); ?></h2>
                    
                    <div class="mb-3">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'project_category');
                        if ($terms && !is_wp_error($terms)) {
                            echo '<p class="text-primary mb-2">';
                            foreach ($terms as $term) {
                                echo '<span class="badge bg-primary me-2">' . esc_html($term->name) . '</span>';
                            }
                            echo '</p>';
                        }
                        ?>
                    </div>
                    
                    <?php if (has_excerpt()) : ?>
                        <div class="project-subtitle mb-4" style="font-size: 1.1rem; font-weight: 500; color: var(--gray-600); line-height: 1.6; border-left: 4px solid var(--primary); padding-left: 16px; font-style: italic;">
                            <?php echo get_the_excerpt(); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="content text-dark" style="line-height: 1.8; font-size: 1.05rem;">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light p-4 rounded">
                        <?php
                        $client = get_post_meta(get_the_ID(), '_project_client', true);
                        $year = get_post_meta(get_the_ID(), '_project_year', true) ?: get_the_date('Y');
                        $cost = get_post_meta(get_the_ID(), '_project_cost', true);
                        ?>
                        <h5 class="text-primary mb-3"><?php _e('Informations', 'gloservices'); ?></h5>
                        <?php if ($client) : ?>
                            <p><strong><?php _e('Client :', 'gloservices'); ?></strong> <?php echo esc_html(gloservices_translate($client)); ?></p>
                        <?php endif; ?>
                        <p><strong><?php _e('Année :', 'gloservices'); ?></strong> <?php echo esc_html($year); ?></p>
                        <?php if ($cost) : ?>
                            <p><strong><?php _e('Budget :', 'gloservices'); ?></strong> <?php echo esc_html($cost); ?></p>
                        <?php endif; ?>
                        <p><strong><?php _e('Catégorie :', 'gloservices'); ?></strong> 
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'project_category');
                            if ($terms && !is_wp_error($terms)) {
                                $names = wp_list_pluck($terms, 'name');
                                echo esc_html(implode(', ', $names));
                            } else {
                                _e('Non classé', 'gloservices');
                            }
                            ?>
                        </p>
                        <a href="<?php echo esc_url(home_url('/projet')); ?>" class="btn btn-primary rounded-pill py-2 px-4 mt-3"><?php _e('Retour aux projets', 'gloservices'); ?></a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php
get_footer();