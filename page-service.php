<?php
/**
 * Template Name: Page Service
 *
 * @package Gloservices
 */

get_header();
?>

<!-- Custom Styling for Page Service -->
<style>
/* ============================================================
   PAGE SERVICE - WORLD CLASS MODERN DESIGN SYSTEM
   ============================================================ */
.service-hero-banner {
    background: linear-gradient(135deg, #0F172A 0%, #1E293B 50%, #064E3B 100%);
    position: relative;
    padding: 90px 0 70px 0;
    overflow: hidden;
}
.service-hero-banner::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 85% 20%, rgba(16, 185, 129, 0.18) 0%, transparent 60%);
    pointer-events: none;
}
.service-hero-grid-pattern {
    position: absolute;
    inset: 0;
    background-image: radial-gradient(rgba(255, 255, 255, 0.08) 1px, transparent 1px);
    background-size: 24px 24px;
    opacity: 0.5;
    pointer-events: none;
}
.service-badge-pill {
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
.service-hero-title {
    font-family: var(--font-display);
    font-size: 3rem;
    font-weight: 800;
    color: #FFFFFF;
    line-height: 1.2;
    margin-bottom: 20px;
}
.service-hero-title span {
    background: linear-gradient(135deg, #10B981, #34D399);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.service-hero-lead {
    color: #94A3B8;
    font-size: 1.15rem;
    line-height: 1.8;
    max-width: 820px;
}

/* Service Premium Cards Grid */
.service-box-card {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 24px;
    padding: 36px 30px;
    height: 100%;
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 4px 20px rgba(15, 23, 42, 0.03);
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow: hidden;
}
.service-box-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, #10B981, #0EA5E9);
    opacity: 0;
    transition: opacity 0.35s ease;
}
.service-box-card:hover {
    transform: translateY(-8px);
    border-color: rgba(16, 185, 129, 0.3);
    box-shadow: 0 20px 45px rgba(15, 23, 42, 0.09);
}
.service-box-card:hover::before {
    opacity: 1;
}
.service-card-icon-wrap {
    width: 64px;
    height: 64px;
    border-radius: 18px;
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(14, 165, 233, 0.1));
    color: #10B981;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.6rem;
    margin-bottom: 24px;
    transition: all 0.35s ease;
}
.service-box-card:hover .service-card-icon-wrap {
    background: linear-gradient(135deg, #10B981, #059669);
    color: #FFFFFF;
    transform: scale(1.05);
}
.service-card-h3 {
    font-family: var(--font-display);
    font-size: 1.35rem;
    font-weight: 700;
    color: #0F172A;
    margin-bottom: 14px;
    line-height: 1.35;
}
.service-card-p {
    color: #64748B;
    font-size: 0.95rem;
    line-height: 1.7;
    margin-bottom: 24px;
}
.service-btn-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #10B981;
    font-weight: 700;
    font-size: 0.9rem;
    text-decoration: none;
    transition: gap 0.3s ease, color 0.3s ease;
}
.service-btn-link:hover {
    gap: 12px;
    color: #059669;
}

/* Workflow Step Section */
.workflow-step-card {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 20px;
    padding: 30px 24px;
    height: 100%;
    position: relative;
    transition: all 0.3s ease;
}
.workflow-step-card:hover {
    border-color: #10B981;
    box-shadow: 0 15px 35px rgba(16, 185, 129, 0.12);
    transform: translateY(-5px);
}
.workflow-num {
    font-family: var(--font-display);
    font-size: 2.2rem;
    font-weight: 800;
    background: linear-gradient(135deg, #10B981, #0EA5E9);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 12px;
}
.workflow-title {
    font-family: var(--font-display);
    font-size: 1.15rem;
    font-weight: 700;
    color: #0F172A;
    margin-bottom: 10px;
}
.workflow-desc {
    color: #64748B;
    font-size: 0.9rem;
    line-height: 1.6;
    margin: 0;
}

/* Quote Section Overhaul */
.quote-section-bg {
    background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%);
    border-radius: 28px;
    padding: 50px 40px;
    color: #FFFFFF;
    position: relative;
    overflow: hidden;
}
.quote-section-bg::before {
    content: '';
    position: absolute;
    bottom: -30%;
    left: -10%;
    width: 350px;
    height: 350px;
    background: radial-gradient(circle, rgba(16, 185, 129, 0.2) 0%, transparent 70%);
    pointer-events: none;
}
/* White Input Background Design System for Quote Form */
.quote-section-bg .form-control,
.quote-section-bg .form-select,
.quote-section-bg input[type="text"],
.quote-section-bg input[type="email"],
.quote-section-bg input[type="tel"],
.quote-section-bg textarea,
.quote-section-bg select,
.quote-input-custom,
.quote-select-custom {
    background-color: #FFFFFF !important;
    border: 1.5px solid #E2E8F0 !important;
    color: #0F172A !important;
    border-radius: 14px !important;
    padding: 14px 18px !important;
    font-size: 0.95rem !important;
    font-weight: 500 !important;
    box-shadow: 0 4px 12px rgba(15, 23, 42, 0.05) !important;
    transition: all 0.3s ease !important;
}

.quote-section-bg .form-control::placeholder,
.quote-section-bg textarea::placeholder,
.quote-input-custom::placeholder {
    color: #64748B !important;
    opacity: 0.9 !important;
}

.quote-section-bg .form-control:focus,
.quote-section-bg .form-select:focus,
.quote-section-bg input:focus,
.quote-section-bg textarea:focus,
.quote-section-bg select:focus,
.quote-input-custom:focus,
.quote-select-custom:focus {
    background-color: #FFFFFF !important;
    border-color: #10B981 !important;
    box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.25) !important;
    color: #0F172A !important;
    outline: none !important;
}

.quote-section-bg select option,
.quote-select-custom option {
    background-color: #FFFFFF !important;
    color: #0F172A !important;
    padding: 10px !important;
}

/* Gradient Badge for ETUDE & DEVIS GRATUIT */
.gradient-degrade-badge {
    background: linear-gradient(135deg, #10B981 0%, #0EA5E9 50%, #6366F1 100%) !important;
    color: #FFFFFF !important;
    border: 1px solid rgba(255, 255, 255, 0.25) !important;
    box-shadow: 0 8px 25px rgba(16, 185, 129, 0.45) !important;
    padding: 8px 20px !important;
    border-radius: 30px !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 8px !important;
}
.gradient-degrade-badge span,
.gradient-degrade-badge i {
    color: #FFFFFF !important;
    font-weight: 800 !important;
    letter-spacing: 1.2px !important;
}

@media (max-width: 991.98px) {
    .service-hero-title { font-size: 2.2rem; }
    .quote-section-bg { padding: 30px 20px; }
}

/* RTL ARABIC SPECIFIC OVERRIDES FOR QUOTE FORM & ICONS */
body.rtl .quote-section-bg,
html[dir="rtl"] .quote-section-bg {
    text-align: right !important;
    direction: rtl !important;
}
body.rtl .quote-section-bg .gradient-degrade-badge,
html[dir="rtl"] .quote-section-bg .gradient-degrade-badge {
    flex-direction: row-reverse !important;
}
body.rtl .quote-input-custom,
html[dir="rtl"] .quote-input-custom {
    text-align: right !important;
    direction: rtl !important;
}
body.rtl .quote-select-custom,
body.rtl .form-select,
html[dir="rtl"] .quote-select-custom,
html[dir="rtl"] .form-select {
    text-align: right !important;
    direction: rtl !important;
    background-position: left 0.85rem center !important;
    padding-left: 2.5rem !important;
    padding-right: 1.1rem !important;
}
body.rtl .quote-section-bg .btn i.fa-paper-plane,
html[dir="rtl"] .quote-section-bg .btn i.fa-paper-plane {
    transform: scaleX(-1) !important;
    margin-right: 8px !important;
    margin-left: 0 !important;
}

/* Ensure Back-to-Top Floating Button always points straight UP in RTL */
body.rtl .back-to-top .fa-chevron-right:before,
html[dir="rtl"] .back-to-top .fa-chevron-right:before {
    content: "\f054" !important;
}
body.rtl .back-to-top,
html[dir="rtl"] .back-to-top {
    transform: none !important;
}
</style>

<!-- Hero Banner Header Start -->
<section class="service-hero-banner">
    <div class="service-hero-grid-pattern"></div>
    <div class="container relative z-10">
        <div class="row align-items-center">
            <div class="col-lg-10 col-xl-9">
                <div class="service-badge-pill">
                    <i class="fas fa-cubes"></i>
                    <span><?php _e('SERVICES & EXPERTISE TECHNIQUE', 'gloservices'); ?></span>
                </div>
                <h1 class="service-hero-title">
                    <?php echo gloservices_translate('L\'alliance de l\'ingénierie de précision et des <span>solutions digitales BTP</span>'); ?>
                </h1>
                <p class="service-hero-lead">
                    <?php _e('Du tracé routier à la modélisation BIM 3D, de la maîtrise d\'œuvre sur chantier aux logiciels sur-mesure, GLOBUILD apporte une valeur ajoutée décisive à chaque étape de vos projets de construction et d\'aménagement.', 'gloservices'); ?>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Hero Banner Header End -->

<!-- Main Services Grid Start -->
<section class="py-5 bg-light">
    <div class="container py-4">
        
        <div class="text-center mx-auto mb-5" style="max-width: 750px;">
            <span class="section-badge mb-2"><?php _e('NOS DOMAINES D\'INTERVENTION', 'gloservices'); ?></span>
            <h2 class="section-main-title"><?php _e('Des prestations clés en main pour vos projets', 'gloservices'); ?></h2>
            <p class="text-muted fs-6"><?php _e('Une gamme complète d\'études techniques et de conseils spécialisés pour maîtres d\'ouvrage publics et privés.', 'gloservices'); ?></p>
        </div>

        <div class="row g-4">
            
            <?php
            $services_query = new WP_Query([
                'post_type'      => 'service',
                'posts_per_page' => -1,
            ]);

            if ($services_query->have_posts()) :
                while ($services_query->have_posts()) : $services_query->the_post();
                    $icon = get_post_meta(get_the_ID(), '_service_icon', true) ?: 'fas fa-road';
            ?>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box-card">
                        <div>
                            <div class="service-card-icon-wrap">
                                <i class="<?php echo esc_attr($icon); ?>"></i>
                            </div>
                            <h3 class="service-card-h3"><?php the_title(); ?></h3>
                            <p class="service-card-p"><?php echo wp_trim_words(get_the_excerpt(), 22); ?></p>
                        </div>
                        <div>
                            <a class="service-btn-link" href="<?php the_permalink(); ?>">
                                <span><?php _e('Découvrir la prestation', 'gloservices'); ?></span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                $static_services = [
                    [
                        'title' => __('Infrastructures Routières & Ponts', 'gloservices'),
                        'desc'  => __('Études de tracé routier, dimensionnement de chaussées, carrefours, ponts et viaducs en conformité avec les directives techniques.', 'gloservices'),
                        'icon'  => 'fas fa-road'
                    ],
                    [
                        'title' => __('Ouvrages d\'Art & Structure Béton', 'gloservices'),
                        'desc'  => __('Calculs de structures en béton armé et charpente métallique aux Eurocodes et RPS 2000 avec notes de calcul certifiées.', 'gloservices'),
                        'icon'  => 'fas fa-drafting-compass'
                    ],
                    [
                        'title' => __('Bâtiments & Ingénierie BIM 3D', 'gloservices'),
                        'desc'  => __('Conception architecturale et technique, synthèse BIM sous Revit et optimisation énergétique des bâtiments.', 'gloservices'),
                        'icon'  => 'fas fa-building'
                    ],
                    [
                        'title' => __('VRD & Hydraulique Urbaine', 'gloservices'),
                        'desc'  => __('Aménagement urbain, réseaux d\'assainissement, adduction d\'eau potable (AEP) et traitement des eaux pluviales sous Covadis & EPANET.', 'gloservices'),
                        'icon'  => 'fas fa-city'
                    ],
                    [
                        'title' => __('Solutions Numériques & Logiciels BTP', 'gloservices'),
                        'desc'  => __('Développement d\'outils digitaux sur-mesure, plateformes web de suivi de chantier et automatisation des calculs d\'ingénierie.', 'gloservices'),
                        'icon'  => 'fas fa-laptop-code'
                    ],
                    [
                        'title' => __('Assistance Maîtrise d\'Ouvrage & OPC', 'gloservices'),
                        'desc'  => __('Pilotage, coordination de chantier, contrôle qualité, suivi budgétaire et accompagnement jusqu\'à la réception des travaux.', 'gloservices'),
                        'icon'  => 'fas fa-tasks'
                    ],
                ];

                foreach ($static_services as $service) :
            ?>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box-card">
                        <div>
                            <div class="service-card-icon-wrap">
                                <i class="<?php echo esc_attr($service['icon']); ?>"></i>
                            </div>
                            <h3 class="service-card-h3"><?php echo esc_html($service['title']); ?></h3>
                            <p class="service-card-p"><?php echo esc_html($service['desc']); ?></p>
                        </div>
                        <div>
                            <a class="service-btn-link" href="<?php echo esc_url(home_url('/contact/')); ?>">
                                <span><?php _e('Découvrir la prestation', 'gloservices'); ?></span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
                endforeach;
            endif;
            ?>

        </div>

    </div>
</section>
<!-- Main Services Grid End -->

<!-- Workflow / Process Section Start -->
<section class="py-5 bg-white">
    <div class="container py-4">
        
        <div class="text-center mx-auto mb-5" style="max-width: 750px;">
            <span class="section-badge mb-2"><?php _e('NOTRE DÉMARCHE QUALITÉ', 'gloservices'); ?></span>
            <h2 class="section-main-title"><?php _e('Comment nous accompagnons vos projets', 'gloservices'); ?></h2>
            <p class="text-muted fs-6"><?php _e('Une méthodologie rigoureuse garantissant l\'exactitude des études et la maîtrise des coûts.', 'gloservices'); ?></p>
        </div>

        <div class="row g-4">
            <div class="col-sm-6 col-lg-3">
                <div class="workflow-step-card">
                    <div class="workflow-num">01</div>
                    <h4 class="workflow-title"><?php _e('Diagnostic & Audit', 'gloservices'); ?></h4>
                    <p class="workflow-desc"><?php _e('Analyse approfondie des besoins, relevés de terrain, contrôles géotechniques et étude de faisabilité.', 'gloservices'); ?></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="workflow-step-card">
                    <div class="workflow-num">02</div>
                    <h4 class="workflow-title"><?php _e('Conception & BIM', 'gloservices'); ?></h4>
                    <p class="workflow-desc"><?php _e('Modélisation 3D, calculs de structure aux normes RPS 2000 / Eurocodes et dimensionnement VRD.', 'gloservices'); ?></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="workflow-step-card">
                    <div class="workflow-num">03</div>
                    <h4 class="workflow-title"><?php _e('Édition des Plans DCE', 'gloservices'); ?></h4>
                    <p class="workflow-desc"><?php _e('Production des dossiers d\'exécution (A0/A1), métrés détaillés, CPT et estimations financières.', 'gloservices'); ?></p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="workflow-step-card">
                    <div class="workflow-num">04</div>
                    <h4 class="workflow-title"><?php _e('Suivi & Maîtrise d\'Œuvre', 'gloservices'); ?></h4>
                    <p class="workflow-desc"><?php _e('Supervision sur le terrain, suivi des travaux, visa des plans et réception de l\'ouvrage.', 'gloservices'); ?></p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Workflow / Process Section End -->

<!-- Feature / Why Choose Us Section Start -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-badge mb-2"><?php _e('EXCELLENCE & RIGUEUR', 'gloservices'); ?></span>
                <h2 class="section-main-title mb-4"><?php _e('Pourquoi faire confiance à GLOBUILD pour vos études BTP ?', 'gloservices'); ?></h2>
                <p class="text-secondary mb-4" style="line-height: 1.8;">
                    <?php _e('Nous combinons une solide expérience en génie civil à l\'utilisation des dernières technologies BIM et numériques pour offrir des solutions d\'ingénierie durables, sécurisées et économiquement optimisées.', 'gloservices'); ?>
                </p>
                
                <div class="row g-4">
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <div class="btn-sm-square bg-success text-white rounded-circle me-3" style="width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-check-circle fs-5"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold text-dark"><?php _e('100% BIM Ready', 'gloservices'); ?></h6>
                                <small class="text-muted"><?php _e('Maquette 3D Revit', 'gloservices'); ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <div class="btn-sm-square bg-success text-white rounded-circle me-3" style="width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-shield-alt fs-5"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold text-dark"><?php _e('Normes RPS 2000', 'gloservices'); ?></h6>
                                <small class="text-muted"><?php _e('Calculs Parasismiques', 'gloservices'); ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <div class="btn-sm-square bg-success text-white rounded-circle me-3" style="width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-truck-monster fs-5"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold text-dark"><?php _e('Réactivité Terrain', 'gloservices'); ?></h6>
                                <small class="text-muted"><?php _e('Flotte 24/7 Maroc', 'gloservices'); ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <div class="btn-sm-square bg-success text-white rounded-circle me-3" style="width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <i class="fas fa-code-branch fs-5"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold text-dark"><?php _e('Pôle IT Dédié', 'gloservices'); ?></h6>
                                <small class="text-muted"><?php _e('Logiciels Métier', 'gloservices'); ?></small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="col-lg-6">
                <div class="position-relative rounded-3 overflow-hidden shadow-lg" style="min-height: 400px;">
                    <img class="img-fluid w-100 h-100" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/feature.jpg" style="object-fit: cover; min-height: 420px;" alt="<?php esc_attr_e('Ingénierie BTP Globuild', 'gloservices'); ?>" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature / Why Choose Us Section End -->

<!-- Quote & Proposal Form Section Start -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="quote-section-bg">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <div class="gradient-degrade-badge mb-3">
                        <i class="fas fa-file-invoice"></i>
                        <span><?php echo esc_html(gloservices_translate('ÉTUDE & DEVIS GRATUIT')); ?></span>
                    </div>
                    <h3 class="text-white fw-bold display-6 mb-3"><?php echo esc_html(gloservices_translate('Obtenez une proposition technique sur-mesure')); ?></h3>
                    <p class="text-light opacity-75 leading-relaxed mb-0">
                        <?php echo esc_html(gloservices_translate('Transmettez-nous les éléments clés de votre projet. Nos ingénieurs analyseront votre besoin sous 24h et vous proposeront une offre d\'études adaptée.')); ?>
                    </p>
                </div>
                
                <div class="col-lg-7">
                    <form action="<?php echo esc_url(home_url('/contact')); ?>" method="post">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" name="quote_name" class="form-control quote-input-custom" placeholder="<?php echo esc_attr(gloservices_translate('Votre Nom complet')); ?>" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" name="quote_email" class="form-control quote-input-custom" placeholder="<?php echo esc_attr(gloservices_translate('Votre Email professionnel')); ?>" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" name="quote_mobile" class="form-control quote-input-custom" placeholder="<?php echo esc_attr(gloservices_translate('Numéro de Téléphone')); ?>" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select name="quote_service" class="form-select quote-select-custom">
                                    <option selected><?php echo esc_html(gloservices_translate('Sélectionner un Service')); ?></option>
                                    <option value="btp"><?php echo esc_html(gloservices_translate('Ingénierie Civile (BTP)')); ?></option>
                                    <option value="it"><?php echo esc_html(gloservices_translate('Solutions Numériques (IT)')); ?></option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea name="quote_note" class="form-control quote-input-custom" placeholder="<?php echo esc_attr(gloservices_translate('Description succincte du projet (localisation, délai, contraintes...)')); ?>" rows="3"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5 fw-bold shadow-lg" type="submit">
                                    <span><?php echo esc_html(gloservices_translate('Soumettre')); ?></span>
                                    <i class="fas fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Quote & Proposal Form Section End -->

<!-- References Start -->
<div class="references-section wow fadeInUp py-5" data-wow-delay="0.1s">
    <div class="container">
        <div class="references-header text-center mb-5">
            <span class="section-badge"><?php _e('Ils nous font confiance', 'gloservices'); ?></span>
            <h2 class="section-main-title mt-2"><?php _e('Nos Références', 'gloservices'); ?></h2>
        </div>
        <div class="references-track">
            <?php gloservices_vendor_carousel(); ?>
        </div>
    </div>
</div>
<!-- References End -->

<?php
get_footer();