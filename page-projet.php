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
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <span class="section-badge"><?php _e('RÉALISATIONS & RÉFÉRENCES', 'gloservices'); ?></span>
            <h2 class="section-main-title mt-3 mb-4"><?php _e('Des projets d\'envergure menés avec rigueur et excellence', 'gloservices'); ?></h2>
            <p class="text-muted" style="font-size: 1.05rem; line-height: 1.7;"><?php _e('Découvrez nos références majeures en génie civil, infrastructures routières, ouvrages d\'art et solutions numériques BTP.', 'gloservices'); ?></p>
        </div>

        <div class="row mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-0" id="portfolio-flters">
                    <li class="active" data-filter="*"><i class="fas fa-layer-group me-2"></i><?php _e('Tous les projets', 'gloservices'); ?></li>
                    <li data-filter=".first"><i class="fas fa-laptop-code me-2"></i><?php _e('Solution Numérique', 'gloservices'); ?></li>
                    <li data-filter=".second"><i class="fas fa-city me-2"></i><?php _e('Développement Urbain', 'gloservices'); ?></li>
                    <li data-filter=".third"><i class="fas fa-road me-2"></i><?php _e('Infrastructures Routières', 'gloservices'); ?></li>
                </ul>
            </div>
        </div>

        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.4s">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);
            $projects_query = new WP_Query([
                'post_type'      => 'project',
                'posts_per_page' => 9,
                'paged'          => $paged,
            ]);

            if ($projects_query->have_posts()) :
                $categories = ['first', 'second', 'third'];
                $counter = 0;
                while ($projects_query->have_posts()) : $projects_query->the_post();
                    $cat_class = $categories[$counter % 3];
                    $img_url = gloservices_get_project_image_url(get_the_ID(), 'gloservices-600x400');

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
                    $client = get_post_meta(get_the_ID(), '_project_client', true);
                    $year = get_post_meta(get_the_ID(), '_project_year', true) ?: get_the_date('Y');
                    $cost = get_post_meta(get_the_ID(), '_project_cost', true);
            ?>
                <div class="col-lg-4 col-md-6 portfolio-item <?php echo esc_attr($cat_class); ?>">
                    <div class="project-card-v2">
                        <div class="project-img-box">
                            <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>">
                            <span class="project-badge-tag"><?php echo esc_html($cat_name); ?></span>
                            <div class="corner-mark corner-tl"></div>
                            <div class="corner-mark corner-tr"></div>
                            <div class="corner-mark corner-bl"></div>
                            <div class="corner-mark corner-br"></div>
                        </div>
                        <div class="project-body-content">
                            <h3 class="project-card-title"><?php the_title(); ?></h3>
                            <div class="project-meta-pills">
                                <?php if ($client) : ?>
                                    <span class="project-meta-pill"><i class="fas fa-building me-1"></i><?php echo esc_html(gloservices_translate($client)); ?></span>
                                <?php endif; ?>
                                <span class="project-meta-pill"><i class="fas fa-calendar-alt me-1"></i><?php echo esc_html($year); ?></span>
                                <?php if ($cost) : ?>
                                    <span class="project-meta-pill"><i class="fas fa-coins me-1"></i><?php echo esc_html($cost); ?></span>
                                <?php endif; ?>
                            </div>
                            <p class="project-excerpt-text"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
                            <div class="project-card-footer">
                                <a href="<?php the_permalink(); ?>" class="btn-project-cta"><?php _e('Détails du Projet', 'gloservices'); ?> <i class="fas fa-arrow-right ms-2"></i></a>
                                <a href="<?php echo esc_url($img_url); ?>" data-lightbox="portfolio" class="btn-project-zoom" title="<?php esc_attr_e('Agrandir', 'gloservices'); ?>"><i class="fas fa-search-plus"></i></a>
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
                        'id' => 64,
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
                        'id' => 67,
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
                        'id' => 70,
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
                        'id' => 73,
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
                        'id' => 76,
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
                        'id' => 79,
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
                $total_static = count($static_projects);
                $per_page = 9;
                $offset = ($paged - 1) * $per_page;
                $page_static_projects = array_slice($static_projects, $offset, $per_page);
                foreach ($page_static_projects as $idx => $project) :
                    $img_url = get_template_directory_uri() . '/assets/img/' . $project['image'];
                    $proj_link = isset($project['id']) ? get_permalink($project['id']) : home_url('/contact');
            ?>
                <div class="col-lg-4 col-md-6 portfolio-item <?php echo esc_attr($project['cat_class']); ?>">
                    <div class="project-card-v2">
                        <div class="project-img-box">
                            <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($project['title']); ?>">
                            <span class="project-badge-tag"><?php echo esc_html($project['cat_name']); ?></span>
                            <div class="corner-mark corner-tl"></div>
                            <div class="corner-mark corner-tr"></div>
                            <div class="corner-mark corner-bl"></div>
                            <div class="corner-mark corner-br"></div>
                        </div>
                        <div class="project-body-content">
                            <h3 class="project-card-title"><?php echo esc_html(gloservices_translate($project['title'])); ?></h3>
                            <div class="project-meta-pills">
                                <span class="project-meta-pill"><i class="fas fa-building me-1"></i><?php echo esc_html(gloservices_translate($project['client'])); ?></span>
                                <span class="project-meta-pill"><i class="fas fa-calendar-alt me-1"></i><?php echo esc_html($project['year']); ?></span>
                                <span class="project-meta-pill"><i class="fas fa-coins me-1"></i><?php echo esc_html($project['cost']); ?></span>
                            </div>
                            <p class="project-excerpt-text"><?php echo esc_html(gloservices_translate($project['desc'])); ?></p>
                            <div class="project-card-footer">
                                <a href="<?php echo esc_url($proj_link); ?>" class="btn-project-cta"><?php _e('Détails du Projet', 'gloservices'); ?> <i class="fas fa-arrow-right ms-2"></i></a>
                                <a href="<?php echo esc_url($img_url); ?>" data-lightbox="portfolio" class="btn-project-zoom" title="<?php esc_attr_e('Agrandir', 'gloservices'); ?>"><i class="fas fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>

        <?php
        $total_pages = 1;
        if (isset($projects_query) && $projects_query->have_posts()) {
            $total_pages = $projects_query->max_num_pages;
        } elseif (isset($total_static) && $total_static > 9) {
            $total_pages = ceil($total_static / 9);
        }

        if ($total_pages > 1) :
        ?>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <div class="custom-pagination">
                        <?php
                        $page_links = paginate_links([
                            'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                            'format'    => '?paged=%#%',
                            'current'   => max(1, $paged),
                            'total'     => $total_pages,
                            'prev_text' => '<i class="fas fa-chevron-left"></i>',
                            'next_text' => '<i class="fas fa-chevron-right"></i>',
                            'type'      => 'array',
                        ]);
                        if (!empty($page_links)) {
                            foreach ($page_links as $link) {
                                echo $link;
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
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