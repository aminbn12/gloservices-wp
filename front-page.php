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
    $slides_query = new WP_Query([
        'post_type'      => 'hero_slide',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC'
    ]);
    
    $slides_content = [];
    $slides_meta = [];
    
    if ($slides_query->have_posts()) {
        $counter = 1;
        while ($slides_query->have_posts()) {
            $slides_query->the_post();
            $badge_icon = get_post_meta(get_the_ID(), '_hero_badge_icon', true) ?: 'fa-hard-hat';
            $badge_text = get_post_meta(get_the_ID(), '_hero_badge_text', true) ?: get_the_title();
            $highlight_text = get_post_meta(get_the_ID(), '_hero_highlight_text', true);
            $video_url = get_post_meta(get_the_ID(), '_hero_video_url', true);
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: '';
            
            $btn1_text = get_post_meta(get_the_ID(), '_hero_btn1_text', true) ?: __('Découvrir', 'gloservices');
            $btn1_url = get_post_meta(get_the_ID(), '_hero_btn1_url', true) ?: gloservices_get_translated_page_url('about');
            $btn2_text = get_post_meta(get_the_ID(), '_hero_btn2_text', true) ?: __('Nous contacter', 'gloservices');
            $btn2_url = get_post_meta(get_the_ID(), '_hero_btn2_url', true) ?: gloservices_get_translated_page_url('contact');
            
            $slides_content[$counter] = [
                'badge_icon' => $badge_icon,
                'badge_text_fr' => $badge_text,
                'badge_text_en' => $badge_text,
                'badge_text_ar' => $badge_text,
                'title_fr' => get_the_title(),
                'title_en' => get_the_title(),
                'title_ar' => get_the_title(),
                'highlight_fr' => $highlight_text,
                'highlight_en' => $highlight_text,
                'highlight_ar' => $highlight_text,
                'desc_fr' => get_the_excerpt(),
                'desc_en' => get_the_excerpt(),
                'desc_ar' => get_the_excerpt(),
            ];
            
            $slides_meta[$counter] = [
                'video_url' => $video_url,
                'image_url' => $image_url,
                'is_video'  => !empty($video_url),
                'btn1_text' => $btn1_text,
                'btn1_url'  => $btn1_url,
                'btn2_text' => $btn2_text,
                'btn2_url'  => $btn2_url,
            ];
            $counter++;
        }
        wp_reset_postdata();
    } else {
        // Fallback static array
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
    }
    
    $total_slides = count($slides_content);
    for ($i = 1; $i <= $total_slides; $i++) : 
        $slide = $slides_content[$i];
        if (!empty($slides_meta)) {
            $meta = $slides_meta[$i];
            $video_url = $meta['video_url'];
            $image_url = $meta['image_url'];
            $is_video  = $meta['is_video'];
            $btn1_text = $meta['btn1_text'];
            $btn1_url  = $meta['btn1_url'];
            $btn2_text = $meta['btn2_text'];
            $btn2_url  = $meta['btn2_url'];
        } else {
            $video_url = esc_url(get_template_directory_uri() . '/assets/video/carousel-' . $i . '.mp4');
            $image_url = esc_url(get_template_directory_uri() . '/assets/img/carousel-' . $i . '.jpg');
            $is_video = ($i === 1);
            $btn1_text = __('Découvrir', 'gloservices');
            $btn1_url  = gloservices_get_translated_page_url('about');
            $btn2_text = __('Nous contacter', 'gloservices');
            $btn2_url  = gloservices_get_translated_page_url('contact');
        }
    ?>
    <div class="hero-slide position-relative" data-dot="<?php if ($is_video) : ?><video src='<?php echo $video_url; ?>#t=0.1' muted playsinline preload='metadata'></video><?php else : ?><img src='<?php echo $image_url; ?>' alt='Slide <?php echo $i; ?>'><?php endif; ?>" <?php if ($is_video) : ?>data-video-src="<?php echo $video_url; ?>"<?php endif; ?> data-slide-index="<?php echo $i; ?>">
        <?php if ($is_video) : ?>
        <video loop muted playsinline class="hero-video" preload="auto">
            <source src="<?php echo $video_url; ?>" type="video/mp4">
        </video>
        <?php else : ?>
        <div class="hero-bg-image" style="background-image: url('<?php echo $image_url; ?>');"></div>
        <?php endif; ?>
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-10 col-lg-8 hero-content">
                    <div class="hero-badge">
                        <i class="fas <?php echo esc_attr($slide['badge_icon']); ?>"></i>
                        <span class="badge-text" data-fr="<?php echo esc_attr($slide['badge_text_fr']); ?>" data-en="<?php echo esc_attr($slide['badge_text_en']); ?>" data-ar="<?php echo esc_attr($slide['badge_text_ar']); ?>">
                            <?php echo esc_html(gloservices_translate($slide['badge_text_fr'])); ?>
                        </span>
                    </div>
                    <?php $hero_tag = ($i === 1) ? 'h1' : 'h2'; ?>
                    <<?php echo $hero_tag; ?> class="hero-title h1">
                        <span class="title-text" data-fr="<?php echo esc_attr($slide['title_fr']); ?>" data-en="<?php echo esc_attr($slide['title_en']); ?>" data-ar="<?php echo esc_attr($slide['title_ar']); ?>">
                            <?php echo esc_html(gloservices_translate($slide['title_fr'])); ?>
                        </span>
                        <br>
                        <span class="highlight highlight-text" data-fr="<?php echo esc_attr($slide['highlight_fr']); ?>" data-en="<?php echo esc_attr($slide['highlight_en']); ?>" data-ar="<?php echo esc_attr($slide['highlight_ar']); ?>">
                            <?php echo esc_html(gloservices_translate($slide['highlight_fr'])); ?>
                        </span>
                    </<?php echo $hero_tag; ?>>
                    <p>
                        <span class="desc-text" data-fr="<?php echo esc_attr($slide['desc_fr']); ?>" data-en="<?php echo esc_attr($slide['desc_en']); ?>" data-ar="<?php echo esc_attr($slide['desc_ar']); ?>">
                            <?php echo esc_html(gloservices_translate($slide['desc_fr'])); ?>
                        </span>
                    </p>
                    <div class="hero-buttons">
                        <a href="<?php echo esc_url($btn1_url); ?>" class="btn btn-primary"><?php echo esc_html($btn1_text); ?> <i class="fas fa-arrow-right"></i></a>
                        <a href="<?php echo esc_url($btn2_url); ?>" class="btn btn-outline"><?php echo esc_html($btn2_text); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endfor; ?>
</div>
<!-- Hero Carousel End -->

<!-- Hero Scroll Reminder Arrow Indicator -->
<div class="hero-scroll-wrapper text-center">
    <a href="#stats-section" class="hero-scroll-reminder" id="heroScrollReminder" title="<?php echo esc_attr(gloservices_translate('Découvrir Globuild')); ?>">
        <div class="scroll-reminder-circle">
            <i class="fas fa-chevron-down"></i>
        </div>
    </a>
</div>

<!-- Stats Bar Start -->
<div class="stats-bar wow fadeIn" id="stats-section" data-wow-delay="0.1s">
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
                <h3 class="stat-counter" data-target="<?php echo esc_attr(get_option('gloservices_stats_workers', '15')); ?>">0</h3>
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
                    <img class="position-absolute img-fluid w-100 h-100" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/about.jpg" style="object-fit: cover;" alt="<?php esc_attr_e('Bureau d\'études BTP Globuild Rabat', 'gloservices'); ?>" loading="lazy">
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
                    <a href="<?php echo esc_url(gloservices_get_translated_page_url('about')); ?>" class="btn btn-primary rounded-pill py-3 px-5 mt-3"><?php _e('En savoir plus', 'gloservices'); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class="services-blueprint" id="services-section">
    <!-- Blueprint grid background -->
    <div class="blueprint-grid"></div>

    <!-- Decorative architectural SVG elements -->
    <div class="blueprint-decorations">
        <!-- Protractor / compass arc (top-right) -->
        <svg class="deco-protractor" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="0" cy="200" r="160" stroke="rgba(16,185,129,0.12)" stroke-width="0.5" stroke-dasharray="4 6"/>
            <circle cx="0" cy="200" r="120" stroke="rgba(16,185,129,0.08)" stroke-width="0.5" stroke-dasharray="2 4"/>
            <circle cx="0" cy="200" r="80" stroke="rgba(16,185,129,0.06)" stroke-width="0.5"/>
            <?php for ($a = 0; $a <= 90; $a += 15) : $rad = deg2rad($a); $x1 = cos($rad)*155; $y1 = 200-sin($rad)*155; $x2 = cos($rad)*165; $y2 = 200-sin($rad)*165; ?>
            <line x1="<?php echo $x1; ?>" y1="<?php echo $y1; ?>" x2="<?php echo $x2; ?>" y2="<?php echo $y2; ?>" stroke="rgba(16,185,129,0.15)" stroke-width="0.5"/>
            <?php endfor; ?>
        </svg>

        <!-- Dimension lines (bottom-left) -->
        <svg class="deco-dimensions" viewBox="0 0 300 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="20" y1="180" x2="280" y2="180" stroke="rgba(16,185,129,0.1)" stroke-width="0.5" stroke-dasharray="6 3"/>
            <line x1="20" y1="175" x2="20" y2="185" stroke="rgba(16,185,129,0.15)" stroke-width="0.5"/>
            <line x1="280" y1="175" x2="280" y2="185" stroke="rgba(16,185,129,0.15)" stroke-width="0.5"/>
            <line x1="40" y1="40" x2="40" y2="160" stroke="rgba(16,185,129,0.08)" stroke-width="0.5" stroke-dasharray="4 4"/>
            <line x1="35" y1="40" x2="45" y2="40" stroke="rgba(16,185,129,0.12)" stroke-width="0.5"/>
            <line x1="35" y1="160" x2="45" y2="160" stroke="rgba(16,185,129,0.12)" stroke-width="0.5"/>
        </svg>

        <!-- Crosshairs scattered -->
        <svg class="deco-cross deco-cross-1" viewBox="0 0 20 20" fill="none"><line x1="10" y1="0" x2="10" y2="20" stroke="rgba(16,185,129,0.15)" stroke-width="0.5"/><line x1="0" y1="10" x2="20" y2="10" stroke="rgba(16,185,129,0.15)" stroke-width="0.5"/><circle cx="10" cy="10" r="4" stroke="rgba(16,185,129,0.1)" stroke-width="0.5"/></svg>
        <svg class="deco-cross deco-cross-2" viewBox="0 0 20 20" fill="none"><line x1="10" y1="0" x2="10" y2="20" stroke="rgba(16,185,129,0.12)" stroke-width="0.5"/><line x1="0" y1="10" x2="20" y2="10" stroke="rgba(16,185,129,0.12)" stroke-width="0.5"/><circle cx="10" cy="10" r="4" stroke="rgba(16,185,129,0.08)" stroke-width="0.5"/></svg>
        <svg class="deco-cross deco-cross-3" viewBox="0 0 20 20" fill="none"><line x1="10" y1="0" x2="10" y2="20" stroke="rgba(16,185,129,0.1)" stroke-width="0.5"/><line x1="0" y1="10" x2="20" y2="10" stroke="rgba(16,185,129,0.1)" stroke-width="0.5"/><circle cx="10" cy="10" r="4" stroke="rgba(16,185,129,0.07)" stroke-width="0.5"/></svg>

        <!-- Angle mark (mid-left) -->
        <svg class="deco-angle" viewBox="0 0 100 100" fill="none">
            <path d="M10 90 L10 30 L70 90" stroke="rgba(16,185,129,0.1)" stroke-width="0.5" fill="none"/>
            <path d="M10 70 A20 20 0 0 1 30 90" stroke="rgba(16,185,129,0.15)" stroke-width="0.5" fill="none"/>
        </svg>
    </div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <span class="section-badge mb-2"><?php _e('SERVICES & EXPERTISE', 'gloservices'); ?></span>
            <h2 class="blueprint-title mb-4"><?php _e('L\'alliance de l\'ingénierie de précision et de l\'innovation digitale', 'gloservices'); ?></h2>
        </div>
        <div class="services-archi-grid">
            <?php
            $services_query = new WP_Query([
                'post_type'      => 'service',
                'posts_per_page' => 6,
            ]);

            if ($services_query->have_posts()) :
                $delays = ['0.1s', '0.2s', '0.3s', '0.15s', '0.25s', '0.35s'];
                $counter = 0;
                while ($services_query->have_posts()) : $services_query->the_post();
            ?>
                <div class="service-archi-card wow fadeInUp" data-wow-delay="<?php echo esc_attr($delays[$counter % 6]); ?>">
                    <!-- Accent line top -->
                    <div class="archi-card-accent"></div>

                    <!-- Drawing Canvas instead of icon -->
                    <div class="archi-drawing-canvas">
                        <?php 
                        $service_post_id = get_the_ID();
                        $service_slug = get_post_field('post_name');
                        if (function_exists('pll_get_post')) {
                            $fr_post_id = pll_get_post($service_post_id, 'fr');
                            if ($fr_post_id) {
                                $service_slug = get_post_field('post_name', $fr_post_id);
                            }
                        }
                        echo gloservices_get_service_drawing($service_slug); 
                        ?>
                    </div>

                    <!-- Content -->
                    <div class="archi-card-content">
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                        <a class="archi-learn-more" href="<?php the_permalink(); ?>"><?php _e('Lire la suite', 'gloservices'); ?> <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>

                    <!-- Technical corner marks -->
                    <div class="corner-mark corner-tl"></div>
                    <div class="corner-mark corner-tr"></div>
                    <div class="corner-mark corner-bl"></div>
                    <div class="corner-mark corner-br"></div>
                </div>
            <?php
                    $counter++;
                endwhile;
                wp_reset_postdata();
            else :
                $static_services = [
                    ['infrastructures_service', 'infrastructures_desc', 'infrastructures'],
                    ['ouvrages_art_service', 'ouvrages_art_desc', 'ouvrages-dart'],
                    ['batiments_service', 'batiments_desc', 'batiments'],
                    ['vrd_service', 'vrd_desc', 'voirie-reseaux-divers'],
                    ['solutions_digitales_service', 'solutions_digitales_desc', 'solutions-digitales'],
                    ['gestion_projet_service', 'gestion_projet_desc', 'gestion-de-projet-opc'],
                ];
                $delays = ['0.1s', '0.2s', '0.3s', '0.15s', '0.25s', '0.35s'];
                foreach ($static_services as $idx => $service) :
            ?>
                <div class="service-archi-card wow fadeInUp" data-wow-delay="<?php echo esc_attr($delays[$idx]); ?>">
                    <div class="archi-card-accent"></div>
                    
                    <!-- Drawing Canvas instead of icon -->
                    <div class="archi-drawing-canvas">
                        <?php echo gloservices_get_service_drawing($service[2]); ?>
                    </div>
                    
                    <div class="archi-card-content">
                        <h4><?php _e($service[0], 'gloservices'); ?></h4>
                        <p><?php _e($service[1], 'gloservices'); ?></p>
                        <a class="archi-learn-more" href="<?php echo esc_url(gloservices_get_translated_page_url('contact')); ?>"><?php _e('Lire la suite', 'gloservices'); ?> <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                    <div class="corner-mark corner-tl"></div>
                    <div class="corner-mark corner-tr"></div>
                    <div class="corner-mark corner-bl"></div>
                    <div class="corner-mark corner-br"></div>
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
                    <img class="position-absolute img-fluid w-100 h-100" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/feature.jpg" style="object-fit: cover;" alt="<?php esc_attr_e('Ingénierie de précision et solutions BTP Globuild', 'gloservices'); ?>" loading="lazy">
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
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
            <?php
            $projects_query = new WP_Query([
                'post_type'      => 'project',
                'posts_per_page' => 6,
                'lang'           => 'fr',
            ]);

            if ($projects_query->have_posts()) :
                $categories = ['first', 'second', 'third', 'first', 'second', 'third'];
                $counter = 0;
                while ($projects_query->have_posts()) : $projects_query->the_post();
                    $fr_id = get_the_ID();
                    $display_id = $fr_id;
                    if (function_exists('pll_current_language') && function_exists('pll_get_post')) {
                        $current_lang = pll_current_language('slug') ?: 'fr';
                        if ($current_lang !== 'fr') {
                            $tr_id = pll_get_post($fr_id, $current_lang);
                            if ($tr_id) {
                                $display_id = $tr_id;
                            }
                        }
                    }

                    $cat_class = $categories[$counter % 3];
                    $img_url = gloservices_get_project_image_url($display_id, 'gloservices-600x400');

                    // Get project category dynamically
                    $terms = get_the_terms($display_id, 'project_category');
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
                        <div class="project-img-wrap project-gallery-slideshow" data-interval="7000">
                            <?php 
                            $gallery_urls = gloservices_get_project_gallery_urls($display_id, $img_url);
                            $is_first = true;
                            foreach ($gallery_urls as $g_url) :
                            ?>
                                <img src="<?php echo esc_url($g_url); ?>" alt="<?php echo esc_attr(get_the_title($display_id)); ?>" class="project-slideshow-img<?php echo $is_first ? ' active' : ''; ?>">
                            <?php 
                                $is_first = false;
                            endforeach; 
                            ?>
                            <span class="project-badge-glass"><?php echo esc_html($cat_name); ?></span>
                            <div class="project-content-overlay">
                                <div class="project-text">
                                    <h3 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 8px;"><?php echo esc_html(get_the_title($display_id)); ?></h3>
                                    <?php
                                    $client = get_post_meta($display_id, '_project_client', true);
                                    $year = get_post_meta($display_id, '_project_year', true) ?: get_the_date('Y', $display_id);
                                    $cost = get_post_meta($display_id, '_project_cost', true);
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
                                        <?php
                                        $display_post = get_post($display_id);
                                        $display_excerpt = $display_post ? $display_post->post_excerpt : '';
                                        if (!$display_excerpt && $display_post) {
                                            $display_excerpt = wp_strip_all_tags($display_post->post_content);
                                        }
                                        echo wp_trim_words($display_excerpt, 12);
                                        ?>
                                    </p>
                                </div>
                                <div class="project-actions mt-3">
                                    <a class="action-btn-circle" href="<?php echo esc_url(get_permalink($display_id)); ?>" title="<?php esc_attr_e('Voir le projet', 'gloservices'); ?>"><i class="fas fa-arrow-right"></i></a>
                                    <a class="action-btn-circle" href="<?php echo esc_url($img_url); ?>" data-lightbox="portfolio" data-title="<?php echo esc_attr(get_the_title($display_id)); ?>" title="<?php echo esc_attr(get_the_title($display_id)); ?>"><i class="fas fa-search-plus"></i></a>
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
                                    <a class="action-btn-circle" href="<?php echo esc_url(gloservices_get_translated_page_url('contact')); ?>" title="<?php esc_attr_e('Nous contacter', 'gloservices'); ?>"><i class="fas fa-envelope"></i></a>
                                    <a class="action-btn-circle" href="<?php echo esc_url($img_url); ?>" data-lightbox="portfolio" data-title="<?php echo esc_attr(gloservices_translate($project['title'])); ?>" title="<?php echo esc_attr(gloservices_translate($project['title'])); ?>"><i class="fas fa-search-plus"></i></a>
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
            <div class="quote-image" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/quote.jpg');" role="img" aria-label="<?php esc_attr_e('Demande de devis projet ingénierie Globuild', 'gloservices'); ?>">
            </div>
            <div class="quote-form-wrap">
                <div class="quote-tag"><i class="fa fa-file-invoice"></i> <?php _e('Devis Gratuit', 'gloservices'); ?></div>
                <h3><?php _e('Obtenez un Devis Personnalisé', 'gloservices'); ?></h3>
                <p class="quote-desc"><?php _e('Contactez-nous pour obtenir un devis sur mesure pour votre projet. Notre équipe vous répondra rapidement.', 'gloservices'); ?></p>
                
                <?php if (isset($_GET['quote_success']) && $_GET['quote_success'] == '1') : ?>
                    <div class="alert alert-success alert-dismissible fade show mb-4 border-0 shadow-sm" role="alert" style="background-color: rgba(16, 185, 129, 0.1); color: #047857; border-radius: 12px; padding: 12px 18px;">
                        <i class="fas fa-check-circle me-2"></i>
                        <strong><?php _e('Demande de devis transmise !', 'gloservices'); ?></strong> <?php _e('Nous analysons votre demande et vous répondrons sous 24h.', 'gloservices'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <?php if (isset($_GET['quote_error'])) : 
                    $error_msg = __('Une erreur est survenue lors de l\'envoi de votre demande.', 'gloservices');
                    if ($_GET['quote_error'] === 'empty_fields') {
                        $error_msg = __('Veuillez renseigner toutes les informations requises.', 'gloservices');
                    } elseif ($_GET['quote_error'] === 'invalid_email') {
                        $error_msg = __('Veuillez saisir une adresse e-mail valide.', 'gloservices');
                    } elseif ($_GET['quote_error'] === 'security') {
                        $error_msg = __('Session expirée ou erreur de sécurité. Veuillez réessayer.', 'gloservices');
                    } elseif ($_GET['quote_error'] === 'file_too_large') {
                        $error_msg = __('Le fichier joint est trop volumineux. La taille maximale est de 5 Mo.', 'gloservices');
                    } elseif ($_GET['quote_error'] === 'invalid_file_type') {
                        $error_msg = __('Format de fichier non valide. Seuls les formats PDF, JPG, JPEG et PNG sont acceptés.', 'gloservices');
                    } elseif (in_array($_GET['quote_error'], array('upload_error', 'upload_failed'))) {
                        $error_msg = __('Erreur lors du téléchargement du fichier. Veuillez réessayer.', 'gloservices');
                    } elseif ($_GET['quote_error'] === 'file_count_exceeded') {
                        $error_msg = __('Vous ne pouvez pas télécharger plus de 4 fichiers.', 'gloservices');
                    } elseif ($_GET['quote_error'] === 'total_size_exceeded') {
                        $error_msg = __('La taille totale des fichiers dépasse 20 Mo.', 'gloservices');
                    }
                ?>
                    <div class="alert alert-danger alert-dismissible fade show mb-4 border-0 shadow-sm" role="alert" style="background-color: rgba(239, 68, 68, 0.1); color: #B91C1C; border-radius: 12px; padding: 12px 18px;">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        <strong><?php _e('Erreur !', 'gloservices'); ?></strong> <?php echo esc_html($error_msg); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <?php
                // Contact Form 7 DESACTIVÉ - utilisation du formulaire HTML natif traduit
                ?>
                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="quote-form" enctype="multipart/form-data" novalidate>
                    <input type="hidden" name="action" value="gloservices_quote_form">
                    <?php wp_nonce_field('gloservices_quote', 'gloservices_quote_nonce'); ?>
                    <div class="row g-2">
                        <div class="col-12 col-sm-6">
                            <input type="text" name="quote_name" placeholder="<?php esc_attr_e('Votre Nom', 'gloservices'); ?>" required>
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" name="quote_email" placeholder="<?php esc_attr_e('Votre Email', 'gloservices'); ?>" required>
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="text" name="quote_mobile" placeholder="<?php esc_attr_e('Votre Mobile', 'gloservices'); ?>" required>
                        </div>
                        <div class="col-12 col-sm-6">
                            <select name="quote_service" class="form-select">
                                <option selected><?php _e('Sélectionner un Service', 'gloservices'); ?></option>
                                <option value="btp"><?php _e('Ingénierie Civile (BTP)', 'gloservices'); ?></option>
                                <option value="it"><?php _e('Solutions Numériques (IT)', 'gloservices'); ?></option>
                            </select>
                        </div>
                        <div class="col-12">
                            <textarea name="quote_note" placeholder="<?php esc_attr_e('Note Spéciale', 'gloservices'); ?>" rows="3" required></textarea>
                        </div>
                        <div class="col-12">
                            <div class="quote-file-wrap text-start mb-2">
                                <label class="d-block small text-muted mb-1"><?php _e('Ajouter des plans ou documents (Optionnel - Max 4 fichiers, PDF/JPG/PNG, Max 20 Mo au total)', 'gloservices'); ?></label>
                                <div class="custom-file-upload-container">
                                    <button type="button" class="custom-file-trigger-btn">
                                        <i class="fas fa-plus me-1"></i>
                                        <span class="custom-file-btn-text"><?php _e('Choisir un fichier', 'gloservices'); ?></span>
                                    </button>
                                    <div class="hidden-inputs-container d-none">
                                        <input type="file" name="quote_file[]" class="custom-file-input-hidden" accept=".pdf,.jpg,.jpeg,.png">
                                    </div>
                                    <div class="selected-files-list mt-2"></div>
                                </div>
                            </div>
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

<!-- Partners Section Start -->
<div class="partners-grid-section py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="partners-bg-layer"></div>
    <div class="container py-4">
        <!-- Centered Section Badge -->
        <div class="text-center mb-4">
            <span class="section-badge"><?php echo esc_html(gloservices_translate('Ils nous font confiance')); ?></span>
        </div>

        <!-- Section Header -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-4 mb-3 mb-lg-0">
                <h2 class="partners-main-title m-0"><?php echo esc_html(gloservices_translate('NOS PARTENAIRES')); ?></h2>
            </div>
            <div class="col-lg-8">
                <p class="partners-desc-text m-0">
                    <?php echo esc_html(gloservices_translate('Nos partenaires s\'appuient sur notre expertise technique pour concrétiser leurs idées. Ensemble, nous formons une équipe soudée, engagée dans la réussite de chaque chantier. Découvrez ceux qui choisissent de travailler avec nous !')); ?>
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
            ['num' => 15, 'name' => 'UNIVERS BAT',                    'logo' => 'vendor-15.jpg'],
            ['num' => 16, 'name' => 'RABAT REGION MOBILITE',          'logo' => 'vendor-16.jpg'],
            ['num' => 17, 'name' => 'RABAT REGION AMENAGEMENTS',      'logo' => 'vendor-17.jpg'],
            ['num' => 18, 'name' => 'MEDZ',                           'logo' => 'vendor-18.jpg'],
            ['num' => 19, 'name' => 'IRIS',                           'logo' => 'vendor-19.png'],
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