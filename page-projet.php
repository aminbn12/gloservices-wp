<?php
/**
 * Template Name: Page Projet (Projets)
 *
 * @package Gloservices
 */

get_header();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown"><?php _e('Projets', 'gloservices'); ?></h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Accueil', 'gloservices'); ?></a></li>
                <li class="breadcrumb-item text-white active" aria-current="page"><?php _e('Projets', 'gloservices'); ?></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <span class="section-badge"><?php _e('RÉALISATIONS', 'gloservices'); ?></span>
            <h2 class="section-main-title mb-4"><?php _e('Des projets d\'envergure menés avec rigueur et excellence', 'gloservices'); ?></h2>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*"><?php _e('Tous', 'gloservices'); ?></li>
                    <li class="mx-2" data-filter=".first"><?php _e('Solution Numérique', 'gloservices'); ?></li>
                    <li class="mx-2" data-filter=".second"><?php _e('Développement Urbain', 'gloservices'); ?></li>
                    <li class="mx-2" data-filter=".third"><?php _e('Infrastructures Routières', 'gloservices'); ?></li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
            <?php
            $projects_query = new WP_Query([
                'post_type'      => 'project',
                'posts_per_page' => -1,
            ]);

            if ($projects_query->have_posts()) :
                $categories = ['first', 'second', 'third'];
                $counter = 0;
                while ($projects_query->have_posts()) : $projects_query->the_post();
                    $cat_class = $categories[$counter % 3];
                    $img_url = get_the_post_thumbnail_url(get_the_ID(), 'gloservices-600x400');
                    if (!$img_url) {
                        $post_id = get_the_ID();
                        $post_title = get_the_title();
                        $img_num = ($counter % 6) + 1;
                        if ($post_id === 70 || stripos($post_title, 'Route Nationale 6') !== false) {
                            $img_num = 4;
                        } elseif ($post_id === 73 || stripos($post_title, 'Audit Technique') !== false) {
                            $img_num = 3;
                        }
                        $img_url = get_template_directory_uri() . '/assets/img/img-600x400-' . $img_num . '.jpg';
                    }

                    // Get project category dynamically
                    $terms = get_the_terms(get_the_ID(), 'project_category');
                    $cat_name = '';
                    if (!empty($terms) && !is_wp_error($terms)) {
                        $term = array_shift($terms);
                        $cat_name = $term->name;
                        $slug = strtolower($term->slug);
                        if (strpos($slug, 'num') !== false || strpos($slug, 'digital') !== false || strpos($slug, 'sol') !== false) {
                            $cat_class = 'first';
                        } elseif (strpos($slug, 'urb') !== false || strpos($slug, 'dev') !== false) {
                            $cat_class = 'second';
                        } elseif (strpos($slug, 'rout') !== false || strpos($slug, 'infra') !== false || strpos($slug, 'pont') !== false) {
                            $cat_class = 'third';
                        }
                    } else {
                        // Fallback mapping
                        if ($cat_class === 'first') {
                            $cat_name = __('Solution Numérique', 'gloservices');
                        } elseif ($cat_class === 'second') {
                            $cat_name = __('Développement Urbain', 'gloservices');
                        } else {
                            $cat_name = __('Infrastructures Routières', 'gloservices');
                        }
                    }
            ?>
                <div class="col-lg-4 col-md-6 portfolio-item <?php echo esc_attr($cat_class); ?>">
                    <div class="project-card-modern">
                        <div class="project-img-wrap">
                            <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>">
                            <span class="project-badge-glass"><?php echo esc_html($cat_name); ?></span>
                            <div class="project-content-overlay">
                                <div class="project-text">
                                    <h3 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 8px;"><?php the_title(); ?></h3>
                                    <?php
                                    $client = get_post_meta(get_the_ID(), '_project_client', true);
                                    $year = get_post_meta(get_the_ID(), '_project_year', true) ?: get_the_date('Y');
                                    $cost = get_post_meta(get_the_ID(), '_project_cost', true);
                                    ?>
                                    <?php if ($client) : ?>
                                        <p class="mb-1 text-white-50" style="font-size: 0.8rem; font-weight: 500;">
                                            <strong><?php _e('Client :', 'gloservices'); ?></strong> <?php echo esc_html(gloservices_translate($client)); ?>
                                        </p>
                                    <?php endif; ?>
                                    <p class="mb-1 text-white-50" style="font-size: 0.8rem; font-weight: 500;">
                                        <strong><?php _e('Année :', 'gloservices'); ?></strong> <?php echo esc_html($year); ?>
                                        <?php if ($cost) : ?>
                                            | <strong><?php _e('Budget :', 'gloservices'); ?></strong> <?php echo esc_html($cost); ?>
                                        <?php endif; ?>
                                    </p>
                                    <p class="mb-0 mt-2 text-white-50" style="font-size: 0.78rem; line-height: 1.4;">
                                        <?php echo wp_trim_words(get_the_excerpt(), 12); ?>
                                    </p>
                                </div>
                                <div class="project-actions mt-3">
                                    <a class="action-btn-circle" href="<?php the_permalink(); ?>" title="<?php esc_attr_e('Voir le projet', 'gloservices'); ?>"><i class="fas fa-arrow-right"></i></a>
                                    <a class="action-btn-circle" href="<?php echo esc_url($img_url); ?>" data-lightbox="portfolio" title="<?php esc_attr_e('Agrandir', 'gloservices'); ?>"><i class="fas fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                    $counter++;
                endwhile;
                wp_reset_postdata();
            else :
                $static_projects = [
                    [
                        'title' => 'Trémie sous la voie ferrée à Sidi Bernoussi',
                        'cat_class' => 'third',
                        'cat_name' => __('Infrastructures Routières', 'gloservices'),
                        'client' => 'Casa Aménagements',
                        'year' => '2025',
                        'cost' => '140 000 MAD',
                        'desc' => 'Construction d\'une trémie ferroviaire sécurisée et aménagement des voies.',
                        'image' => 'img-600x400-1.jpg'
                    ],
                    [
                        'title' => 'Aménagement du boulevard Azbane',
                        'cat_class' => 'third',
                        'cat_name' => __('Infrastructures Routières', 'gloservices'),
                        'client' => 'Casa Aménagements',
                        'year' => '2025',
                        'cost' => '300 000 MAD',
                        'desc' => 'Construction d\'une trémie et aménagement des voies de circulation.',
                        'image' => 'img-600x400-2.jpg'
                    ],
                    [
                        'title' => 'Route Nationale 6 (Dar Essakah - Sidi Allal Bahraoui)',
                        'cat_class' => 'third',
                        'cat_name' => __('Infrastructures Routières', 'gloservices'),
                        'client' => 'Direction de l\'Équipement de Rabat',
                        'year' => '2023-2025',
                        'cost' => '800 000 MAD',
                        'desc' => 'Élargissement, renforcement et aménagement de la route nationale.',
                        'image' => 'img-600x400-4.jpg'
                    ],
                    [
                        'title' => 'Audit Technique & Gestion Digitale de Maintenance',
                        'cat_class' => 'first',
                        'cat_name' => __('Solution Numérique', 'gloservices'),
                        'client' => 'Crédit Agricole du Maroc',
                        'year' => '2025',
                        'cost' => '200 000 MAD',
                        'desc' => 'Audit et mise en place d\'une gestion assistée de la maintenance multi-technique.',
                        'image' => 'img-600x400-3.jpg'
                    ],
                    [
                        'title' => 'Centre d\'affaires Crédit Agricole à Hay Riad',
                        'cat_class' => 'second',
                        'cat_name' => __('Développement Urbain', 'gloservices'),
                        'client' => 'Crédit Agricole du Maroc',
                        'year' => '2024',
                        'cost' => '60 000 MAD',
                        'desc' => 'Aménagement intérieur et technique du centre d\'affaires.',
                        'image' => 'img-600x400-5.jpg'
                    ],
                    [
                        'title' => 'Complexes résidentiels El Menzah (17 Zaer Park)',
                        'cat_class' => 'second',
                        'cat_name' => __('Développement Urbain', 'gloservices'),
                        'client' => 'Société IVDER Holding',
                        'year' => '2022',
                        'cost' => '75 000 MAD',
                        'desc' => 'Études techniques de structure et suivi des travaux pour complexes résidentiels.',
                        'image' => 'img-600x400-6.jpg'
                    ]
                ];
                foreach ($static_projects as $idx => $project) :
                    $img_url = get_template_directory_uri() . '/assets/img/' . $project['image'];
            ?>
                <div class="col-lg-4 col-md-6 portfolio-item <?php echo esc_attr($project['cat_class']); ?>">
                    <div class="project-card-modern">
                        <div class="project-img-wrap">
                            <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($project['title']); ?>">
                            <span class="project-badge-glass"><?php echo esc_html($project['cat_name']); ?></span>
                            <div class="project-content-overlay">
                                <div class="project-text">
                                    <h3 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 8px;"><?php echo esc_html(gloservices_translate($project['title'])); ?></h3>
                                    <p class="mb-1 text-white-50" style="font-size: 0.8rem; font-weight: 500;">
                                        <strong><?php _e('Client :', 'gloservices'); ?></strong> <?php echo esc_html(gloservices_translate($project['client'])); ?>
                                    </p>
                                    <p class="mb-1 text-white-50" style="font-size: 0.8rem; font-weight: 500;">
                                        <strong><?php _e('Année :', 'gloservices'); ?></strong> <?php echo esc_html($project['year']); ?> | <strong><?php _e('Budget :', 'gloservices'); ?></strong> <?php echo esc_html($project['cost']); ?>
                                    </p>
                                    <p class="mb-0 mt-2 text-white-50" style="font-size: 0.78rem; line-height: 1.4;">
                                        <?php echo esc_html(gloservices_translate($project['desc'])); ?>
                                    </p>
                                </div>
                                <div class="project-actions mt-3">
                                    <a class="action-btn-circle" href="<?php echo esc_url(home_url('/contact')); ?>" title="<?php esc_attr_e('Nous contacter', 'gloservices'); ?>"><i class="fas fa-envelope"></i></a>
                                    <a class="action-btn-circle" href="<?php echo esc_url($img_url); ?>" data-lightbox="portfolio" title="<?php esc_attr_e('Agrandir', 'gloservices'); ?>"><i class="fas fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</div>
<!-- Projects End -->

<!-- References Start -->
<div class="references-section wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="references-header">
            <span class="references-label"><?php _e('Ils nous font confiance', 'gloservices'); ?></span>
            <h2><?php _e('Nos Références', 'gloservices'); ?></h2>
        </div>
        <div class="references-track">
            <?php gloservices_vendor_carousel(); ?>
        </div>
    </div>
</div>
<!-- References End -->

<?php
get_footer();