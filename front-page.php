<?php
/**
 * Front page template (Homepage)
 *
 * @package Gloservices
 */

get_header();
?>

<!-- Hero Carousel Start -->
<style>
.hero-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;
}
.hero-carousel .owl-dot video {
    width: 80px !important;
    height: 50px !important;
    object-fit: cover !important;
    border-radius: 6px !important;
    border: 2px solid rgba(255,255,255,0.4) !important;
    opacity: 0.6;
    transition: all 0.3s ease;
    display: block;
}
.hero-carousel .owl-dot:hover video,
.hero-carousel .owl-dot:focus video {
    opacity: 1 !important;
    transform: scale(1.1);
    border-color: var(--white) !important;
}
.hero-carousel .owl-dot.active video {
    opacity: 1 !important;
    border-color: var(--primary) !important;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
}
</style>
<div class="owl-carousel hero-carousel position-relative">
    <?php
    $slides_content = [
        1 => [
            'badge_icon' => 'fa-hard-hat',
            'badge_text_fr' => 'Bureau d\'études BTP',
            'badge_text_en' => 'Civil Engineering Firm',
            'badge_text_ar' => 'مكتب دراسات هندسية',
            'title_fr' => 'DÉCOUVREZ NOS SOLUTIONS',
            'title_en' => 'DISCOVER OUR SOLUTIONS',
            'title_ar' => 'اكتشف حلولنا',
            'highlight_fr' => 'CLÉS EN MAIN',
            'highlight_en' => 'TURNKEY',
            'highlight_ar' => 'المتكاملة',
            'desc_fr' => 'Notre bureau d\'études BTP vous accompagne de la conception à la réalisation de vos projets, en passant par la modélisation, l\'automatisation et la gestion de chantier.',
            'desc_en' => 'Our civil engineering firm accompanies you from design to completion, through modeling, automation and site management.',
            'desc_ar' => 'يرافقكم مكتبنا الهندسي من التصميم إلى الإنجاز، عبر النمذجة والأتمتة وإدارة المواقع.',
            'anim_class' => 'fadeInUp',
        ],
        2 => [
            'badge_icon' => 'fa-laptop-code',
            'badge_text_fr' => 'Solutions Digitales',
            'badge_text_en' => 'Digital Solutions',
            'badge_text_ar' => 'الحلول الرقمية',
            'title_fr' => 'TECHNOLOGIES INNOVANTES',
            'title_en' => 'INNOVATIVE TECHNOLOGIES',
            'title_ar' => 'تقنيات مبتكرة',
            'highlight_fr' => 'POUR LE BTP',
            'highlight_en' => 'FOR CONSTRUCTION',
            'highlight_ar' => 'للإنشاءات',
            'desc_fr' => 'Logiciels de modélisation BIM, outils de gestion de projet et plateformes de suivi en temps réel pour optimiser vos chantiers.',
            'desc_en' => 'BIM modeling software, project management tools and real-time monitoring platforms to optimize your construction sites.',
            'desc_ar' => 'برامج نمذجة BIM، أدوات إدارة المشاريع ومنصات المتابعة الفورية لتحسين مواقع البناء.',
            'anim_class' => 'fadeInRight',
        ],
        3 => [
            'badge_icon' => 'fa-drafting-compass',
            'badge_icon' => 'fa-cogs',
            'badge_text_fr' => 'Ingénierie de Précision',
            'badge_text_en' => 'Precision Engineering',
            'badge_text_ar' => 'هندسة دقيقة',
            'title_fr' => 'EXPERTISE & SAVOIR-FAIRE',
            'title_en' => 'EXPERTISE & KNOW-HOW',
            'title_ar' => 'خبرة واحترافية',
            'highlight_fr' => 'DEPUIS 2010',
            'highlight_en' => 'SINCE 2010',
            'highlight_ar' => 'منذ 2010',
            'desc_fr' => 'Plus d\'une décennie d\'expertise en génie civil, structures, VRD et gestion de projet pour des réalisations d\'excellence.',
            'desc_en' => 'Over a decade of expertise in civil engineering, structures, utilities and project management for outstanding achievements.',
            'desc_ar' => 'أكثر من عقد من الخبرة في الهندسة المدنية والهياكل والمرافق وإدارة المشاريع لإنجازات متميزة.',
            'anim_class' => 'fadeInLeft',
        ],
    ];
    
    for ($i = 1; $i <= 3; $i++) : 
        $video_url = esc_url(get_template_directory_uri() . '/assets/video/carousel-' . $i . '.mp4');
        $image_url = esc_url(get_template_directory_uri() . '/assets/img/carousel-' . $i . '.jpg');
        $is_video = ($i === 1);
        $slide = $slides_content[$i];
    ?>
    <div class="hero-slide position-relative" data-dot="<?php if ($is_video) : ?><video src='<?php echo $video_url; ?>#t=0.1' muted playsinline preload='metadata'></video><?php else : ?><img src='<?php echo $image_url; ?>' alt='Slide <?php echo $i; ?>'><?php endif; ?>" <?php if ($is_video) : ?>data-video-src="<?php echo $video_url; ?>"<?php endif; ?> data-slide-index="<?php echo $i; ?>">
        <?php if ($is_video) : ?>
        <video autoplay loop muted playsinline class="hero-video" preload="auto">
            <source src="<?php echo $video_url; ?>" type="video/mp4">
        </video>
        <?php else : ?>
        <div class="hero-bg-image" style="background-image: url('<?php echo $image_url; ?>');"></div>
        <?php endif; ?>
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-10 col-lg-8 hero-content">
                    <div class="hero-badge wow fadeInUp" data-wow-delay="0.2s">
                        <i class="fas <?php echo esc_attr($slide['badge_icon']); ?>"></i>
                        <span class="badge-text" data-fr="<?php echo esc_attr($slide['badge_text_fr']); ?>" data-en="<?php echo esc_attr($slide['badge_text_en']); ?>" data-ar="<?php echo esc_attr($slide['badge_text_ar']); ?>">
                            <?php echo esc_html(gloservices_translate($slide['badge_text_fr'])); ?>
                        </span>
                    </div>
                    <h1 class="wow <?php echo esc_attr($slide['anim_class']); ?>" data-wow-delay="0.3s">
                        <span class="title-text" data-fr="<?php echo esc_attr($slide['title_fr']); ?>" data-en="<?php echo esc_attr($slide['title_en']); ?>" data-ar="<?php echo esc_attr($slide['title_ar']); ?>">
                            <?php echo esc_html(gloservices_translate($slide['title_fr'])); ?>
                        </span>
                        <br>
                        <span class="highlight highlight-text" data-fr="<?php echo esc_attr($slide['highlight_fr']); ?>" data-en="<?php echo esc_attr($slide['highlight_en']); ?>" data-ar="<?php echo esc_attr($slide['highlight_ar']); ?>">
                            <?php echo esc_html(gloservices_translate($slide['highlight_fr'])); ?>
                        </span>
                    </h1>
                    <p class="wow fadeInUp" data-wow-delay="0.4s">
                        <span class="desc-text" data-fr="<?php echo esc_attr($slide['desc_fr']); ?>" data-en="<?php echo esc_attr($slide['desc_en']); ?>" data-ar="<?php echo esc_attr($slide['desc_ar']); ?>">
                            <?php echo esc_html(gloservices_translate($slide['desc_fr'])); ?>
                        </span>
                    </p>
                    <div class="hero-buttons wow fadeInUp" data-wow-delay="0.5s">
                        <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-primary"><?php _e('Découvrir', 'gloservices'); ?> <i class="fas fa-arrow-right"></i></a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline"><?php _e('Nous contacter', 'gloservices'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endfor; ?>
</div>
<!-- Hero Carousel End -->

<!-- Stats Bar Start -->
<div class="stats-bar wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-smile-beam fa-lg"></i>
                </div>
                <h3 class="stat-counter has-plus" data-target="<?php echo esc_attr(get_option('gloservices_stats_customers', '100')); ?>">0</h3>
                <p><?php _e('Clients Satisfaits', 'gloservices'); ?></p>
            </div>
            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-hard-hat fa-lg"></i>
                </div>
                <h3 class="stat-counter" data-target="<?php echo esc_attr(get_option('gloservices_stats_projects', '30')); ?>">0</h3>
                <p><?php _e('Projets Réalisés', 'gloservices'); ?></p>
            </div>
            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-user-tie fa-lg"></i>
                </div>
                <h3 class="stat-counter" data-target="<?php echo esc_attr(get_option('gloservices_stats_workers', '12')); ?>">0</h3>
                <p><?php _e('Travailleurs Experts', 'gloservices'); ?></p>
            </div>
        </div>
    </div>
</div>
<!-- Stats Bar End -->

<!-- About Start -->
<div class="container-fluid about-parallax-wrapper overflow-hidden my-5 px-lg-0">
    <div class="parallax-bg" data-speed="0.3" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/archiback.jpg');"></div>
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 d-flex flex-column align-self-stretch wow slideInLeft" data-wow-delay="0.1s" style="min-height: 500px; padding: 20px;">
                <div class="position-relative flex-grow-1" style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg);">
                    <img class="position-absolute img-fluid w-100 h-100" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/about.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow slideInLeft" data-wow-delay="0.1s">
                <div class="p-lg-5 pe-lg-0">
                    <span class="section-badge"><?php _e('À propos', 'gloservices'); ?></span>
                    <h2 class="section-main-title mb-4"><?php _e('Plus de 10 ans d\'expérience dans la construction et les solutions numériques', 'gloservices'); ?></h2>
                    <p><?php _e('Avec plus d\'une décennie d\'expertise dans le domaine du génie civil et de la construction, nous offrons des services de conseil et de gestion de projet de haute qualité. Nous sommes également spécialisés dans le développement de solutions numériques innovantes pour le secteur de la construction.', 'gloservices'); ?></p>
                    <p><span class="check-list-icon"><i class="fa fa-check-circle"></i></span><?php _e('Expertise confirmée en génie civil', 'gloservices'); ?></p>
                    <p><span class="check-list-icon"><i class="fa fa-check-circle"></i></span><?php _e('Solutions numériques avancées pour la construction', 'gloservices'); ?></p>
                    <p><span class="check-list-icon"><i class="fa fa-check-circle"></i></span><?php _e('L\'engagement pour la qualité et l\'innovation', 'gloservices'); ?></p>
                    <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-primary rounded-pill py-3 px-5 mt-3"><?php _e('En savoir plus', 'gloservices'); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class="container-fluid services py-5">
    <div class="container">
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <span class="section-badge"><?php _e('SERVICES & EXPERTISE', 'gloservices'); ?></span>
            <h2 class="section-main-title mb-4"><?php _e('L\'alliance de l\'ingénierie de précision et de l\'innovation digitale', 'gloservices'); ?></h2>
        </div>
        <div class="services-grid-bento">
            <?php
            $services_query = new WP_Query([
                'post_type'      => 'service',
                'posts_per_page' => 6,
            ]);

            if ($services_query->have_posts()) :
                $delays = ['0.1s', '0.3s', '0.5s', '0.1s', '0.3s', '0.5s'];
                $counter = 0;
                while ($services_query->have_posts()) : $services_query->the_post();
                    $icon = get_post_meta(get_the_ID(), '_service_icon', true) ?: 'fas fa-road';
                    $is_featured = ($counter === 1 || $counter === 2 || $counter === 5);
                    $bento_class = $is_featured ? 'service-card-bento featured' : 'service-card-bento';
            ?>
                <div class="<?php echo esc_attr($bento_class); ?> wow fadeInUp" data-wow-delay="<?php echo esc_attr($delays[$counter % 6]); ?>">
                    <div class="icon-wrap">
                        <i class="<?php echo esc_attr($icon); ?>"></i>
                    </div>
                    <div class="card-content">
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo wp_trim_words(get_the_excerpt(), $is_featured ? 30 : 18); ?></p>
                        <a class="learn-more" href="<?php the_permalink(); ?>"><?php _e('Lire la suite', 'gloservices'); ?><i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            <?php
                    $counter++;
                endwhile;
                wp_reset_postdata();
            else :
                $static_services = [
                    ['infrastructures_service', 'infrastructures_desc', 'fas fa-road'],
                    ['ouvrages_art_service', 'ouvrages_art_desc', 'fas fa-drafting-compass'],
                    ['batiments_service', 'batiments_desc', 'fas fa-building'],
                    ['vrd_service', 'vrd_desc', 'fas fa-city'],
                    ['solutions_digitales_service', 'solutions_digitales_desc', 'fas fa-laptop-code'],
                    ['gestion_projet_service', 'gestion_projet_desc', 'fas fa-tasks'],
                ];
                $delays = ['0.1s', '0.3s', '0.5s', '0.1s', '0.3s', '0.5s'];
                foreach ($static_services as $idx => $service) :
                    $is_featured = ($idx === 1 || $idx === 2 || $idx === 5);
                    $bento_class = $is_featured ? 'service-card-bento featured' : 'service-card-bento';
            ?>
                <div class="<?php echo esc_attr($bento_class); ?> wow fadeInUp" data-wow-delay="<?php echo esc_attr($delays[$idx]); ?>">
                    <div class="icon-wrap">
                        <i class="<?php echo esc_attr($service[2]); ?>"></i>
                    </div>
                    <div class="card-content">
                        <h4><?php _e($service[0], 'gloservices'); ?></h4>
                        <p><?php _e($service[1], 'gloservices'); ?></p>
                        <a class="learn-more" href="<?php echo esc_url(home_url('/contact')); ?>"><?php _e('Lire la suite', 'gloservices'); ?><i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Feature Section -->
<div class="container-fluid about-parallax-wrapper overflow-hidden my-5 px-lg-0">
    <div class="parallax-bg" data-speed="0.3" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/archiback.jpg');"></div>
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow slideInRight" data-wow-delay="0.1s">
                <div class="p-lg-5 ps-lg-0">
                    <span class="section-badge"><?php _e('Pourquoi nous choisir !', 'gloservices'); ?></span>
                    <h2 class="section-main-title mb-4"><?php _e('Solutions d\'Ingénierie et Numériques Complètes', 'gloservices'); ?></h2>
                    <p class="mb-4 pb-2"><?php _e('Nous fournissons des solutions de pointe pour les projets de génie civil. Notre expertise va de la conception structurelle aux outils numériques avancés pour la gestion de projet. Nous garantissons qualité, innovation et durabilité dans chaque projet que nous entreprenons.', 'gloservices'); ?></p>
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center feature-item">
                                <div class="feature-icon-box me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div>
                                    <p class="mb-0"><?php _e('Haute Qualité', 'gloservices'); ?></p>
                                    <h5 class="mb-0"><?php _e('Services', 'gloservices'); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center feature-item">
                                <div class="feature-icon-box me-3">
                                    <i class="fa fa-user-check text-white"></i>
                                </div>
                                <div>
                                    <p class="mb-0"><?php _e('Expert', 'gloservices'); ?></p>
                                    <h5 class="mb-0"><?php _e('Professionnels', 'gloservices'); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center feature-item">
                                <div class="feature-icon-box me-3">
                                    <i class="fa fa-drafting-compass text-white"></i>
                                </div>
                                <div>
                                    <p class="mb-0"><?php _e('Consultation', 'gloservices'); ?></p>
                                    <h5 class="mb-0"><?php _e('Gratuite', 'gloservices'); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center feature-item">
                                <div class="feature-icon-box me-3">
                                    <i class="fa fa-headphones text-white"></i>
                                </div>
                                <div>
                                    <p class="mb-0"><?php _e('Support Client', 'gloservices'); ?></p>
                                    <h5 class="mb-0"><?php _e('24/7', 'gloservices'); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 d-flex flex-column align-self-stretch wow slideInRight" data-wow-delay="0.1s" style="min-height: 500px; padding: 20px;">
                <div class="position-relative flex-grow-1" style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg);">
                    <img class="position-absolute img-fluid w-100 h-100" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/feature.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

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
                'posts_per_page' => 6,
            ]);

            if ($projects_query->have_posts()) :
                $categories = ['first', 'second', 'third', 'first', 'second', 'third'];
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
        <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.3s">
            <a href="<?php echo esc_url(gloservices_translated_page_url('projet')); ?>" class="btn btn-primary rounded-pill py-3 px-5">
                <?php _e('Voir plus de projets', 'gloservices'); ?> <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</div>
<!-- Projects End -->

<!-- Quote Start -->
<div class="quote-section py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="quote-card">
            <div class="quote-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/quote.jpg" alt="">
            </div>
            <div class="quote-form-wrap">
                <div class="quote-tag"><i class="fa fa-file-invoice"></i> <?php _e('Devis Gratuit', 'gloservices'); ?></div>
                <h3><?php _e('Obtenez un Devis Personnalisé', 'gloservices'); ?></h3>
                <p class="quote-desc"><?php _e('Contactez-nous pour obtenir un devis sur mesure pour votre projet. Notre équipe vous répondra rapidement.', 'gloservices'); ?></p>
                <?php
                // Contact Form 7 DESACTIVÉ - utilisation du formulaire HTML natif traduit
                ?>
                <form action="<?php echo esc_url(home_url('/contact')); ?>" method="post" class="quote-form">
                    <div class="row g-2">
                        <div class="col-12 col-sm-6">
                            <input type="text" name="quote_name" placeholder="<?php esc_attr_e('Votre Nom', 'gloservices'); ?>" required>
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" name="quote_email" placeholder="<?php esc_attr_e('Votre Email', 'gloservices'); ?>" required>
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="text" name="quote_mobile" placeholder="<?php esc_attr_e('Votre Mobile', 'gloservices'); ?>">
                        </div>
                        <div class="col-12 col-sm-6">
                            <select name="quote_service" class="form-select">
                                <option selected><?php _e('Sélectionner un Service', 'gloservices'); ?></option>
                                <option value="btp"><?php _e('Ingénierie Civile (BTP)', 'gloservices'); ?></option>
                                <option value="it"><?php _e('Solutions Numériques (IT)', 'gloservices'); ?></option>
                            </select>
                        </div>
                        <div class="col-12">
                            <textarea name="quote_note" placeholder="<?php esc_attr_e('Note Spéciale', 'gloservices'); ?>" rows="3"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary rounded-pill py-3 px-5" type="submit"><?php _e('Soumettre', 'gloservices'); ?><i class="fas fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->

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