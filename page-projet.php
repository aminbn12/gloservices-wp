<?php
/**
 * Template Name: Page Projet (Projets)
 *
 * @package Gloservices
 */

get_header();
?>

<!-- Custom Styling for Page Projet Enhancements -->
<style>
/* ============================================================
   PAGE PROJET - WORLD CLASS MODERN DESIGN SYSTEM
   ============================================================ */
.projet-hero-banner {
    background: linear-gradient(135deg, #0F172A 0%, #1E293B 50%, #064E3B 100%);
    position: relative;
    padding: 85px 0 65px 0;
    overflow: hidden;
}
.projet-hero-banner::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 80% 20%, rgba(16, 185, 129, 0.18) 0%, transparent 60%);
    pointer-events: none;
}
.projet-hero-grid-pattern {
    position: absolute;
    inset: 0;
    background-image: radial-gradient(rgba(255, 255, 255, 0.08) 1px, transparent 1px);
    background-size: 24px 24px;
    opacity: 0.5;
    pointer-events: none;
}
.projet-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(16, 185, 129, 0.15);
    border: 1px solid rgba(16, 185, 129, 0.3);
    color: #34D399;
    padding: 6px 16px;
    border-radius: 30px;
    font-size: 0.82rem;
    font-weight: 700;
    font-family: var(--font-display);
    letter-spacing: 1px;
    margin-bottom: 20px;
}
.projet-hero-title {
    font-family: var(--font-display);
    font-size: 2.9rem;
    font-weight: 800;
    color: #FFFFFF;
    line-height: 1.2;
    margin-bottom: 20px;
}
.projet-hero-title span {
    background: linear-gradient(135deg, #10B981, #34D399);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.projet-hero-lead {
    color: #94A3B8;
    font-size: 1.12rem;
    line-height: 1.8;
    max-width: 820px;
}

/* Stat Box Cards inside Hero Header */
.projet-stat-card {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 18px;
    padding: 20px;
    text-align: center;
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}
.projet-stat-card:hover {
    background: rgba(16, 185, 129, 0.1);
    border-color: rgba(16, 185, 129, 0.4);
    transform: translateY(-4px);
}
.projet-stat-num {
    font-family: var(--font-display);
    font-size: 2.2rem;
    font-weight: 800;
    color: #34D399;
    line-height: 1;
    margin-bottom: 6px;
}
.projet-stat-label {
    color: #CBD5E1;
    font-size: 0.85rem;
    font-weight: 600;
    margin: 0;
}

/* Project Methodology Cards */
.method-step-card {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 20px;
    padding: 28px 24px;
    height: 100%;
    transition: all 0.35s ease;
    position: relative;
    overflow: hidden;
}
.method-step-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: linear-gradient(180deg, #10B981, #0EA5E9);
    opacity: 0;
    transition: opacity 0.35s ease;
}
.method-step-card:hover {
    border-color: rgba(16, 185, 129, 0.3);
    box-shadow: 0 15px 35px rgba(15, 23, 42, 0.08);
    transform: translateY(-5px);
}
.method-step-card:hover::before {
    opacity: 1;
}
.method-num {
    font-family: var(--font-display);
    font-size: 2rem;
    font-weight: 800;
    background: linear-gradient(135deg, #10B981, #0EA5E9);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 12px;
}
.method-title {
    font-family: var(--font-display);
    font-size: 1.15rem;
    font-weight: 700;
    color: #0F172A;
    margin-bottom: 10px;
}
.method-desc {
    color: #64748B;
    font-size: 0.9rem;
    line-height: 1.6;
    margin: 0;
}

/* Project Consultation CTA Banner */
.projet-cta-banner {
    background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%);
    border-radius: 24px;
    padding: 44px 36px;
    color: #FFFFFF;
    position: relative;
    overflow: hidden;
}
.projet-cta-banner::before {
    content: '';
    position: absolute;
    right: -10%;
    top: -20%;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(16, 185, 129, 0.22) 0%, transparent 70%);
    pointer-events: none;
}

@media (max-width: 991.98px) {
    .projet-hero-title { font-size: 2.1rem; }
    .projet-cta-banner { padding: 30px 20px; }
}

body.rtl .projet-cta-banner {
    text-align: right !important;
    direction: rtl !important;
}
</style>

<!-- Hero Banner Header Start -->
<section class="projet-hero-banner">
    <div class="projet-hero-grid-pattern"></div>
    <div class="container relative z-10">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <div class="projet-badge-pill">
                    <i class="fas fa-layer-group"></i>
                    <span><?php echo esc_html(gloservices_translate('PORTEFEUILLE DE RÉALISATIONS')); ?></span>
                </div>
                <h1 class="projet-hero-title">
                    <?php echo gloservices_translate('Des ouvrages d\'exception et des <span>projets d\'ingénierie durables</span>'); ?>
                </h1>
                <p class="projet-hero-lead">
                    <?php echo esc_html(gloservices_translate('Découvrez nos références majeures à travers le Maroc, alliant ingénierie de précision, normes parasismiques et modélisation BIM 3D.')); ?>
                </p>
            </div>
            
            <div class="col-lg-4">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="projet-stat-card">
                            <div class="projet-stat-num">150+</div>
                            <p class="projet-stat-label"><?php echo esc_html(gloservices_translate('Projets Livrés')); ?></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="projet-stat-card">
                            <div class="projet-stat-num">100%</div>
                            <p class="projet-stat-label"><?php echo esc_html(gloservices_translate('Conformité RPS 2000')); ?></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="projet-stat-card">
                            <div class="projet-stat-num">14+</div>
                            <p class="projet-stat-label"><?php echo esc_html(gloservices_translate('Partenaires Majeurs')); ?></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="projet-stat-card">
                            <div class="projet-stat-num">10+</div>
                            <p class="projet-stat-label"><?php echo esc_html(gloservices_translate('Villes Couvertes')); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Banner Header End -->

<!-- Projects Grid Section Start -->
<div class="container-xxl py-5">
    <div class="container py-4">
        
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <span class="section-badge"><?php _e('RÉALISATIONS & RÉFÉRENCES', 'gloservices'); ?></span>
            <h2 class="section-main-title mt-3 mb-4"><?php _e('Des projets d\'envergure menés avec rigueur et excellence', 'gloservices'); ?></h2>
            <p class="text-muted" style="font-size: 1.05rem; line-height: 1.7;"><?php _e('Découvrez nos références majeures en génie civil, infrastructures routières, ouvrages d\'art et solutions numériques BTP.', 'gloservices'); ?></p>
        </div>

        <!-- Category Filter Tabs -->
        <div class="row mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-0" id="portfolio-flters">
                    <li class="active" data-filter="*"><i class="fas fa-layer-group me-2"></i><?php echo esc_html(gloservices_translate('Tous les projets')); ?></li>
                    <li data-filter=".first"><i class="fas fa-laptop-code me-2"></i><?php _e('Solution Numérique', 'gloservices'); ?></li>
                    <li data-filter=".second"><i class="fas fa-city me-2"></i><?php _e('Développement Urbain', 'gloservices'); ?></li>
                    <li data-filter=".third"><i class="fas fa-road me-2"></i><?php _e('Infrastructures Routières', 'gloservices'); ?></li>
                </ul>
            </div>
        </div>

        <!-- Projects Cards Grid -->
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
                                <a href="<?php echo esc_url($img_url); ?>" data-lightbox="portfolio" data-title="<?php echo esc_attr(get_the_title()); ?>" class="btn-project-zoom" title="<?php echo esc_attr(get_the_title()); ?>"><i class="fas fa-search-plus"></i></a>
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
                                <a href="<?php echo esc_url($img_url); ?>" data-lightbox="portfolio" data-title="<?php echo esc_attr(gloservices_translate($project['title'])); ?>" class="btn-project-zoom" title="<?php echo esc_attr(gloservices_translate($project['title'])); ?>"><i class="fas fa-search-plus"></i></a>
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
<!-- Projects Grid Section End -->

<!-- Methodology / Process Section Start -->
<section class="py-5 bg-white">
    <div class="container py-4">
        
        <div class="text-center mx-auto mb-5" style="max-width: 750px;">
            <span class="section-badge mb-2"><?php echo esc_html(gloservices_translate('EXCELLENCE & IMPACT')); ?></span>
            <h2 class="section-main-title"><?php echo esc_html(gloservices_translate('Notre méthodologie de conduite de projet')); ?></h2>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="method-step-card">
                    <div class="method-num">01</div>
                    <h4 class="method-title"><?php echo esc_html(gloservices_translate('Études & Diagnostic')); ?></h4>
                    <p class="method-desc"><?php echo esc_html(gloservices_translate('Relevés topographiques, études géotechniques et analyse approfondie des contraintes du site.')); ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="method-step-card">
                    <div class="method-num">02</div>
                    <h4 class="method-title"><?php echo esc_html(gloservices_translate('Calculs & Modélisation')); ?></h4>
                    <p class="method-desc"><?php echo esc_html(gloservices_translate('Dimensionnement sous Robot Structural, tracé sous Covadis et maquette numérique BIM 3D sous Revit.')); ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="method-step-card">
                    <div class="method-num">03</div>
                    <h4 class="method-title"><?php echo esc_html(gloservices_translate('Contrôle & Maîtrise d\'Œuvre')); ?></h4>
                    <p class="method-desc"><?php echo esc_html(gloservices_translate('Suivi rigoureux sur chantier, respect des délais, contrôle qualité des matériaux et réception.')); ?></p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Methodology / Process Section End -->

<!-- Call to Action Banner Start -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="projet-cta-banner">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <span class="badge bg-success px-3 py-2 rounded-pill mb-3 fw-bold" style="font-size: 0.8rem; letter-spacing: 1px;">
                        <i class="fas fa-hard-hat me-2"></i><?php echo esc_html(gloservices_translate('VOUS AVEZ UN PROJET D\'INFRASTRUCTURE OU DE BÂTIMENT ?')); ?>
                    </span>
                    <h3 class="text-white fw-bold display-6 mb-2"><?php echo esc_html(gloservices_translate('Discutons de vos besoins avec nos ingénieurs')); ?></h3>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-success rounded-pill py-3 px-5 fw-bold shadow-lg">
                        <span><?php echo esc_html(gloservices_translate('Demander une étude projet')); ?></span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call to Action Banner End -->

<!-- Partners Section Start -->
<div class="partners-grid-section py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="partners-bg-layer"></div>
    <div class="container py-4">
        <!-- Section Header -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-4 mb-3 mb-lg-0">
                <h2 class="partners-main-title m-0"><?php echo esc_html(gloservices_translate('NOS PARTENAIRES')); ?></h2>
            </div>
            <div class="col-lg-8">
                <p class="partners-desc-text m-0">
                    <?php echo esc_html(gloservices_translate('Ils nous font confiance pour leurs projets. Nos partenaires s\'appuient sur notre expertise technique pour concrétiser leurs idées. Ensemble, nous formons une équipe soudée, engagée dans la réussite de chaque chantier. Découvrez ceux qui choisissent de travailler avec nous !')); ?>
                </p>
            </div>
        </div>

        <!-- Globuild Globe Orbit Partners Layout -->
        <?php
        $partners = [
            ['num' => 1,  'name' => 'CID',                            'logo' => 'vendor-1.jpg'],
            ['num' => 2,  'name' => 'GROUPE MOJAZINE',                 'logo' => 'vendor-2.jpg'],
            ['num' => 3,  'name' => 'TGCC',                           'logo' => 'vendor-3.jpg'],
            ['num' => 4,  'name' => 'MINISTÈRE DE L\'ÉQUIPEMENT',       'logo' => 'vendor-4.jpg'],
            ['num' => 5,  'name' => 'S.N.L TRAVAUX',                   'logo' => 'vendor-5.jpg'],
            ['num' => 6,  'name' => 'GENERALE ROUTIERE',              'logo' => 'vendor-6.jpg'],
            ['num' => 7,  'name' => 'L.P.E.E',                        'logo' => 'vendor-7.jpg'],
            ['num' => 8,  'name' => 'REDAL',                          'logo' => 'vendor-8.jpg'],
            ['num' => 9,  'name' => 'TOTALENERGIES',                  'logo' => 'vendor-9.jpg'],
            ['num' => 10, 'name' => 'COLAS RAIL',                     'logo' => 'vendor-10.png'],
            ['num' => 11, 'name' => 'GCR',                            'logo' => 'vendor-11.png'],
            ['num' => 12, 'name' => 'AUTOROUTES DU MAROC',            'logo' => 'vendor-12.png'],
            ['num' => 13, 'name' => 'AMDL',                           'logo' => 'vendor-13.png'],
            ['num' => 14, 'name' => 'CRÉDIT AGRICOLE DU MAROC',        'logo' => 'vendor-14.png'],
        ];
        $total = count($partners);
        ?>

        <div class="globuild-partners-orbit-container">
            <!-- Decorative Orbit Concentric Rings -->
            <div class="globuild-orbit-ring inner-ring"></div>
            <div class="globuild-orbit-ring outer-ring"></div>

            <!-- Central Globuild Sphere Core Badge -->
            <div class="globuild-orbit-center">
                <div class="center-pulse-glow"></div>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon-circle.png" alt="Globuild Logo Core" class="center-brand-logo">
                <span class="center-brand-tag">GLOBUILD</span>
                <div class="center-tooltip">
                    <span class="center-tooltip-text">BUILD THE FUTURE</span>
                </div>
            </div>

            <!-- 14 Radial Partner Nodes arranged in Globuild Sphere shape -->
            <div class="globuild-orbit-nodes">
                <?php foreach ($partners as $index => $partner) : 
                    $img_url = get_template_directory_uri() . '/assets/img/' . $partner['logo'];
                ?>
                    <div class="orbit-partner-node" style="--index: <?php echo $index; ?>; --total: <?php echo $total; ?>;">
                        <div class="orbit-partner-node-inner">
                            <span class="node-number"><?php echo sprintf('%02d', $partner['num']); ?></span>
                            <div class="node-logo-wrapper">
                                <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($partner['name']); ?>" loading="lazy">
                            </div>
                            <div class="node-tooltip">
                                <span class="tooltip-num">#<?php echo $partner['num']; ?></span>
                                <span class="tooltip-name"><?php echo esc_html($partner['name']); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- Partners Section End -->

<?php
get_footer();