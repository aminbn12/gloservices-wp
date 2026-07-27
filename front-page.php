<?php
/**
 * Front page template (Homepage)
 *
 * @package Gloservices
 */

get_header();

/**
 * Helper function to return high-quality architectural CAD vector drawings (SVGs) for services
 */
function gloservices_get_service_drawing($slug) {
    // Normalize slug (in case Polylang appends lang codes)
    $clean_slug = preg_replace('/-(fr|en|ar)$/', '', strtolower($slug));
    
    $svg_start = '<svg class="archi-svg-drawing" viewBox="0 0 200 140" fill="none" xmlns="http://www.w3.org/2000/svg">';
    // Common background crosshairs / reference grid markings inside the canvas
    $svg_common = '
        <line x1="0" y1="70" x2="200" y2="70" stroke="rgba(16,185,129,0.04)" stroke-width="0.5" stroke-dasharray="2 4"/>
        <line x1="100" y1="0" x2="100" y2="140" stroke="rgba(16,185,129,0.04)" stroke-width="0.5" stroke-dasharray="2 4"/>
        <circle cx="100" cy="70" r="50" stroke="rgba(16,185,129,0.02)" stroke-width="0.5" fill="none"/>
    ';
    $svg_end = '</svg>';
    
    switch ($clean_slug) {
        case 'infrastructures':
            // Pont Suspendu / Bridge
            $drawing = '
                <!-- Pillars -->
                <line x1="45" y1="35" x2="45" y2="120" stroke="#10B981" stroke-width="1.5" />
                <line x1="45" y1="35" x2="35" y2="120" stroke="rgba(16,185,129,0.4)" stroke-width="0.75" />
                <line x1="155" y1="35" x2="155" y2="120" stroke="#10B981" stroke-width="1.5" />
                <line x1="155" y1="35" x2="165" y2="120" stroke="rgba(16,185,129,0.4)" stroke-width="0.75" />
                <line x1="45" y1="65" x2="155" y2="65" stroke="rgba(16,185,129,0.3)" stroke-width="0.75" />
                <line x1="45" y1="90" x2="155" y2="90" stroke="rgba(16,185,129,0.3)" stroke-width="0.75" />
                
                <!-- Suspension cables -->
                <path d="M10,45 Q45,110 100,110" stroke="#34D399" stroke-width="1.25" fill="none" />
                <path d="M100,110 Q155,110 190,45" stroke="#34D399" stroke-width="1.25" fill="none" />
                <path d="M10,40 Q45,105 100,105" stroke="rgba(52,211,153,0.3)" stroke-width="0.75" fill="none" />
                <path d="M100,105 Q155,105 190,40" stroke="rgba(52,211,153,0.3)" stroke-width="0.75" fill="none" />
                
                <!-- Deck -->
                <line x1="10" y1="95" x2="190" y2="95" stroke="#10B981" stroke-width="1.75" />
                
                <!-- Hangers -->
                <line x1="25" y1="70" x2="25" y2="95" stroke="#34D399" stroke-width="0.5" />
                <line x1="70" y1="105" x2="70" y2="95" stroke="#34D399" stroke-width="0.5" />
                <line x1="90" y1="110" x2="90" y2="95" stroke="#34D399" stroke-width="0.5" />
                <line x1="110" y1="110" x2="110" y2="95" stroke="#34D399" stroke-width="0.5" />
                <line x1="130" y1="105" x2="130" y2="95" stroke="#34D399" stroke-width="0.5" />
                <line x1="175" y1="70" x2="175" y2="95" stroke="#34D399" stroke-width="0.5" />
                
                <!-- Anchorages -->
                <polygon points="5,95 15,95 10,110" fill="rgba(16,185,129,0.2)" stroke="#10B981" stroke-width="0.5" />
                <polygon points="185,95 195,95 190,110" fill="rgba(16,185,129,0.2)" stroke="#10B981" stroke-width="0.5" />

                <!-- Annotations -->
                <g class="tech-annotation">
                    <line x1="10" y1="122" x2="190" y2="122" stroke="#10B981" stroke-width="0.75" stroke-dasharray="3 3"/>
                    <path d="M15,119 L10,122 L15,125 M185,119 L190,122 L185,125" stroke="#10B981" stroke-width="0.75" fill="none" />
                    <text x="100" y="118" fill="#334155" font-size="8" font-family="monospace" font-weight="600" text-anchor="middle">L = 145.00m</text>
                    <text x="49" y="32" fill="#334155" font-size="7" font-family="monospace" font-weight="600">H = 32.5m</text>
                </g>
            ';
            break;
            
        case 'ouvrages-dart':
            // Pont en arc / Tunnel
            $drawing = '
                <!-- Foundation supports -->
                <rect x="15" y="105" width="20" height="20" fill="rgba(16,185,129,0.15)" stroke="#10B981" stroke-width="0.75" />
                <rect x="165" y="105" width="20" height="20" fill="rgba(16,185,129,0.15)" stroke="#10B981" stroke-width="0.75" />
                
                <!-- Arch curves -->
                <path d="M25,105 A75,70 0 0,1 175,105" stroke="#10B981" stroke-width="2" fill="none" />
                <path d="M35,105 A65,60 0 0,1 165,105" stroke="#34D399" stroke-width="1.25" fill="none" />
                <path d="M25,110 A75,75 0 0,1 175,110" stroke="rgba(16,185,129,0.2)" stroke-width="0.75" fill="none" stroke-dasharray="3 3" />
                
                <!-- Deck -->
                <line x1="10" y1="45" x2="190" y2="45" stroke="#10B981" stroke-width="1.5" />
                
                <!-- Spandrel Columns / Struts -->
                <line x1="50" y1="45" x2="50" y2="82" stroke="#34D399" stroke-width="0.75" />
                <line x1="75" y1="45" x2="75" y2="52" stroke="#34D399" stroke-width="0.75" />
                <line x1="100" y1="45" x2="100" y2="40" stroke="#34D399" stroke-width="0.75" />
                <line x1="125" y1="45" x2="125" y2="52" stroke="#34D399" stroke-width="0.75" />
                <line x1="150" y1="45" x2="150" y2="82" stroke="#34D399" stroke-width="0.75" />

                <!-- Annotations -->
                <g class="tech-annotation">
                    <!-- Radius centerpoint line -->
                    <line x1="100" y1="105" x2="60" y2="65" stroke="#334155" stroke-width="0.75" stroke-dasharray="2 2" />
                    <circle cx="100" cy="105" r="2" fill="#10B981" />
                    <path d="M63,65 L60,65 L60,68" stroke="#334155" stroke-width="0.75" fill="none" />
                    <text x="80" y="85" fill="#334155" font-size="8" font-family="monospace" font-weight="600" transform="rotate(-45 80 85)">R = 45.0m</text>
                    <text x="105" y="38" fill="#334155" font-size="7" font-family="monospace" font-weight="600">CL = 100%</text>
                </g>
            ';
            break;
            
        case 'batiments':
            // Structure metallique / Skyscraper facade
            $drawing = '
                <!-- Foundation -->
                <line x1="20" y1="120" x2="180" y2="120" stroke="#10B981" stroke-width="2" />
                <rect x="45" y="120" width="10" height="5" fill="rgba(16,185,129,0.5)" stroke="#10B981" stroke-width="0.5" />
                <rect x="95" y="120" width="10" height="5" fill="rgba(16,185,129,0.5)" stroke="#10B981" stroke-width="0.5" />
                <rect x="145" y="120" width="10" height="5" fill="rgba(16,185,129,0.5)" stroke="#10B981" stroke-width="0.5" />
                
                <!-- Vertical Beams (Columns) -->
                <line x1="50" y1="20" x2="50" y2="120" stroke="#10B981" stroke-width="1.75" />
                <line x1="100" y1="20" x2="100" y2="120" stroke="#10B981" stroke-width="1.75" />
                <line x1="150" y1="20" x2="150" y2="120" stroke="#10B981" stroke-width="1.75" />
                
                <!-- Horizontal Beams (Floors) -->
                <line x1="50" y1="30" x2="150" y2="30" stroke="#10B981" stroke-width="1.25" />
                <line x1="50" y1="60" x2="150" y2="60" stroke="#10B981" stroke-width="1.25" />
                <line x1="50" y1="90" x2="150" y2="90" stroke="#10B981" stroke-width="1.25" />
                
                <!-- Wind Bracing (X-Patterns) -->
                <line x1="50" y1="30" x2="100" y2="60" stroke="rgba(52,211,153,0.4)" stroke-width="0.75" />
                <line x1="100" y1="30" x2="50" y2="60" stroke="rgba(52,211,153,0.4)" stroke-width="0.75" />
                <line x1="100" y1="60" x2="150" y2="90" stroke="rgba(52,211,153,0.4)" stroke-width="0.75" />
                <line x1="150" y1="60" x2="100" y2="90" stroke="rgba(52,211,153,0.4)" stroke-width="0.75" />
                <line x1="50" y1="90" x2="100" y2="120" stroke="rgba(52,211,153,0.4)" stroke-width="0.75" />
                <line x1="100" y1="90" x2="50" y2="120" stroke="rgba(52,211,153,0.4)" stroke-width="0.75" />

                <!-- Annotations -->
                <g class="tech-annotation">
                    <!-- Elevation indicators (triangles and text) -->
                    <path d="M35,30 L40,30 L37.5,26 Z" fill="#10B981" />
                    <text x="12" y="33" fill="#334155" font-size="7" font-family="monospace" font-weight="600">N3:+9.00</text>
                    
                    <path d="M35,60 L40,60 L37.5,56 Z" fill="#10B981" />
                    <text x="12" y="63" fill="#334155" font-size="7" font-family="monospace" font-weight="600">N2:+6.00</text>
                    
                    <path d="M35,90 L40,90 L37.5,86 Z" fill="#10B981" />
                    <text x="12" y="93" fill="#334155" font-size="7" font-family="monospace" font-weight="600">N1:+3.00</text>
                    
                    <!-- Axis names -->
                    <circle cx="50" cy="132" r="5" stroke="#10B981" stroke-width="0.75" fill="none" />
                    <text x="50" y="134.5" fill="#334155" font-size="6" font-family="monospace" font-weight="600" text-anchor="middle">A</text>
                    
                    <circle cx="100" cy="132" r="5" stroke="#10B981" stroke-width="0.75" fill="none" />
                    <text x="100" y="134.5" fill="#334155" font-size="6" font-family="monospace" font-weight="600" text-anchor="middle">B</text>
                    
                    <circle cx="150" cy="132" r="5" stroke="#10B981" stroke-width="0.75" fill="none" />
                    <text x="150" y="134.5" fill="#334155" font-size="6" font-family="monospace" font-weight="600" text-anchor="middle">C</text>
                </g>
            ';
            break;
            
        case 'voirie-reseaux-divers':
            // Coupe de voirie / VRD Pipes
            $drawing = '
                <!-- Ground profile (road, curb, sidewalk) -->
                <path d="M10,48 L65,48 L65,44 L80,44 L140,46 L155,44 L155,48 L190,48" stroke="#10B981" stroke-width="1.75" fill="none" />
                <!-- Sub layers -->
                <path d="M10,54 L65,54 L65,50 L80,50 L140,52 L155,50 L155,54 L190,54" stroke="rgba(16,185,129,0.3)" stroke-width="0.75" fill="none" stroke-dasharray="2 2" />
                
                <!-- Undergound pipe EP (Stormwater) -->
                <circle cx="70" cy="95" r="14" stroke="#34D399" stroke-width="1.5" fill="none" />
                <line x1="59" y1="95" x2="81" y2="95" stroke="rgba(52,211,153,0.3)" stroke-width="0.5" />
                <line x1="70" y1="84" x2="70" y2="106" stroke="rgba(52,211,153,0.3)" stroke-width="0.5" />
                
                <!-- Underground pipe EU (Sewage) -->
                <circle cx="120" cy="85" r="8" stroke="#10B981" stroke-width="1" fill="none" />
                
                <!-- Underground cable conduit -->
                <circle cx="155" cy="75" r="4" stroke="#10B981" stroke-width="0.75" fill="none" />
                <circle cx="163" cy="75" r="4" stroke="#10B981" stroke-width="0.75" fill="none" />

                <!-- Annotations -->
                <g class="tech-annotation">
                    <!-- Dimension lines and arrows -->
                    <line x1="70" y1="48" x2="70" y2="78" stroke="#10B981" stroke-width="0.75" stroke-dasharray="2 2" />
                    <line x1="120" y1="46" x2="120" y2="74" stroke="#10B981" stroke-width="0.75" stroke-dasharray="2 2" />
                    
                    <text x="70" y="117" fill="#334155" font-size="7" font-family="monospace" font-weight="600" text-anchor="middle">EP Ø400 i=0.5%</text>
                    <text x="120" y="103" fill="#334155" font-size="7" font-family="monospace" font-weight="600" text-anchor="middle">EU Ø200</text>
                    <text x="160" y="66" fill="#334155" font-size="6" font-family="monospace" font-weight="600">ELEC</text>
                </g>
            ';
            break;
            
        case 'solutions-digitales':
            // 3D Isometric building model (BIM wireframe)
            $drawing = '
                <!-- Base Grid (Isometric) -->
                <path d="M40,80 L100,110 L160,80" stroke="rgba(16,185,129,0.15)" stroke-width="0.5" fill="none" />
                <path d="M40,80 L100,50 L160,80" stroke="rgba(16,185,129,0.15)" stroke-width="0.5" fill="none" />
                
                <!-- Box Left Face -->
                <polygon points="60,95 100,115 100,65 60,45" stroke="#10B981" stroke-width="1.5" fill="rgba(16,185,129,0.05)" />
                <!-- Box Right Face -->
                <polygon points="100,115 140,95 140,45 100,65" stroke="#10B981" stroke-width="1.5" fill="rgba(16,185,129,0.05)" />
                <!-- Box Top Face -->
                <polygon points="60,45 100,65 140,45 100,25" stroke="#34D399" stroke-width="1" fill="rgba(52,211,153,0.05)" />
                
                <!-- Internal structural lines -->
                <line x1="60" y1="45" x2="100" y2="115" stroke="rgba(52,211,153,0.3)" stroke-width="0.5" />
                <line x1="140" y1="45" x2="100" y2="115" stroke="rgba(52,211,153,0.3)" stroke-width="0.5" />
                
                <!-- Joint dots -->
                <circle cx="60" cy="45" r="2.5" fill="#34D399" />
                <circle cx="100" cy="25" r="2.5" fill="#34D399" />
                <circle cx="140" cy="45" r="2.5" fill="#34D399" />
                <circle cx="100" cy="65" r="2.5" fill="#10B981" />
                <circle cx="60" cy="95" r="2.5" fill="#10B981" />
                <circle cx="100" cy="115" r="2.5" fill="#10B981" />
                <circle cx="140" cy="95" r="2.5" fill="#10B981" />

                <!-- Annotations -->
                <g class="tech-annotation">
                    <!-- Coordinate info tag -->
                    <rect x="5" y="10" width="45" height="15" rx="2" stroke="#10B981" stroke-width="0.75" fill="rgba(16,185,129,0.1)" />
                    <text x="10" y="20" fill="#334155" font-size="6" font-family="monospace" font-weight="600">BIM-MOD</text>
                    
                    <text x="145" y="30" fill="#334155" font-size="6" font-family="monospace" font-weight="600">X: 124.0</text>
                    <text x="145" y="38" fill="#334155" font-size="6" font-family="monospace" font-weight="600">Y: 285.5</text>
                    <text x="145" y="46" fill="#334155" font-size="6" font-family="monospace" font-weight="600">Z:  98.1</text>
                </g>
            ';
            break;
            
        case 'gestion-de-projet-opc':
            // Planning Gantt / Compas de dessin
            $drawing = '
                <!-- Gantt Rows -->
                <rect x="30" y="25" width="45" height="8" rx="2" fill="#10B981" />
                <rect x="80" y="38" width="55" height="8" rx="2" fill="#34D399" />
                <rect x="140" y="51" width="30" height="8" rx="2" fill="#059669" />
                
                <!-- dependency arrow line -->
                <path d="M75,29 L78,29 L78,42 L80,42" stroke="rgba(16,185,129,0.5)" stroke-width="0.75" fill="none" />
                <path d="M135,42 L138,42 L138,55 L140,55" stroke="rgba(16,185,129,0.5)" stroke-width="0.75" fill="none" />
                
                <!-- Timeline divider lines (Gantt background grid) -->
                <line x1="30" y1="18" x2="30" y2="70" stroke="rgba(16,185,129,0.1)" stroke-width="0.5" />
                <line x1="80" y1="18" x2="80" y2="70" stroke="rgba(16,185,129,0.1)" stroke-width="0.5" />
                <line x1="140" y1="18" x2="140" y2="70" stroke="rgba(16,185,129,0.1)" stroke-width="0.5" />
                
                <!-- Compass Overlay -->
                <!-- Pivot leg -->
                <line x1="90" y1="115" x2="90" y2="85" stroke="rgba(16,185,129,0.5)" stroke-width="1.5" />
                <!-- Pen leg -->
                <line x1="90" y1="85" x2="135" y2="105" stroke="rgba(16,185,129,0.5)" stroke-width="1.5" />
                <circle cx="90" cy="85" r="2.5" fill="#10B981" />
                
                <!-- Arc drawn by compass -->
                <path d="M110,115 A45,45 0 0,1 135,105" stroke="#10B981" stroke-width="1" stroke-dasharray="3 3" />

                <!-- Annotations -->
                <g class="tech-annotation">
                    <line x1="95" y1="15" x2="95" y2="70" stroke="#10B981" stroke-width="0.75" />
                    <polygon points="92,15 98,15 95,19" fill="#10B981" />
                    <text x="100" y="27" fill="#334155" font-size="7" font-family="monospace" font-weight="600">J45: Valide</text>
                    
                    <text x="30" y="12" fill="#334155" font-size="7" font-family="monospace" font-weight="600">W1</text>
                    <text x="80" y="12" fill="#334155" font-size="7" font-family="monospace" font-weight="600">W2</text>
                    <text x="140" y="12" fill="#334155" font-size="7" font-family="monospace" font-weight="600">W3</text>
                </g>
            ';
            break;
            
        default:
            // Plan d'architecte (Plan de sol)
            $drawing = '
                <!-- Outer Walls -->
                <rect x="35" y="20" width="130" height="95" stroke="#10B981" stroke-width="2" fill="none" />
                <!-- Inner Partition Wall -->
                <line x1="95" y1="20" x2="95" y2="115" stroke="#10B981" stroke-width="1.5" />
                <line x1="95" y1="70" x2="165" y2="70" stroke="#10B981" stroke-width="1.5" />
                
                <!-- Door swing -->
                <path d="M95,50 A20,20 0 0,1 75,70" stroke="#34D399" stroke-width="1" fill="none" />
                <line x1="95" y1="50" x2="95" y2="70" stroke="#34D399" stroke-width="1" />
                <line x1="95" y1="70" x2="75" y2="70" stroke="#34D399" stroke-width="1" />

                <!-- Annotations -->
                <g class="tech-annotation">
                    <text x="65" y="45" fill="#ffffff" font-size="7" font-family="monospace" font-weight="600" text-anchor="middle">S1</text>
                    <text x="130" y="45" fill="#ffffff" font-size="7" font-family="monospace" font-weight="600" text-anchor="middle">S2</text>
                    <text x="130" y="95" fill="#ffffff" font-size="7" font-family="monospace" font-weight="600" text-anchor="middle">S3</text>
                    <text x="100" y="130" fill="#ffffff" font-size="8" font-family="monospace" font-weight="600" text-anchor="middle">S_Total = 85.50m²</text>
                </g>
            ';
            break;
    }
    
    return $svg_start . $svg_common . $drawing . $svg_end;
}

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
            $btn1_url = get_post_meta(get_the_ID(), '_hero_btn1_url', true) ?: home_url('/about');
            $btn2_text = get_post_meta(get_the_ID(), '_hero_btn2_text', true) ?: __('Nous contacter', 'gloservices');
            $btn2_url = get_post_meta(get_the_ID(), '_hero_btn2_url', true) ?: home_url('/contact');
            
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
            $btn1_url  = home_url('/about');
            $btn2_text = __('Nous contacter', 'gloservices');
            $btn2_url  = home_url('/contact');
        }
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
                    <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-primary rounded-pill py-3 px-5 mt-3"><?php _e('En savoir plus', 'gloservices'); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class="services-blueprint">
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
            <span class="blueprint-badge"><i class="fas fa-drafting-compass me-2"></i><?php _e('SERVICES & EXPERTISE', 'gloservices'); ?></span>
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
                        <a class="archi-learn-more" href="<?php echo esc_url(home_url('/contact')); ?>"><?php _e('Lire la suite', 'gloservices'); ?> <i class="fa fa-arrow-right ms-2"></i></a>
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
                    <li class="active" data-filter="*"><i class="fas fa-layer-group me-2"></i><?php _e('Tous les projets', 'gloservices'); ?></li>
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
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/quote.jpg" alt="<?php esc_attr_e('Demande de devis projet ingénierie Globuild', 'gloservices'); ?>" loading="lazy">
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