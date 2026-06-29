<?php
/**
 * Template Name: Page Moyen (Nos Moyens)
 *
 * @package Gloservices
 */

get_header();
?>
<style>
/* ============================================================
   NOS MOYENS PREMIUM DESIGN STYLING
   ============================================================ */
.moyen-card {
    background: #F8FAFC !important;
    border: 1px solid rgba(16, 185, 129, 0.08) !important;
    border-radius: 24px !important;
    padding: 32px !important;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02), 0 2px 4px -1px rgba(0, 0, 0, 0.01) !important;
}
.moyen-card:hover {
    background: var(--white) !important;
    border-color: var(--primary) !important;
    transform: translateY(-6px) !important;
    box-shadow: 0 20px 25px -5px rgba(16, 185, 129, 0.1), 0 10px 10px -5px rgba(16, 185, 129, 0.04) !important;
}
.moyen-section-title {
    font-family: 'Outfit', sans-serif !important;
    font-size: 1.6rem !important;
    font-weight: 700 !important;
    border-bottom: 2px solid rgba(16, 185, 129, 0.1) !important;
    padding-bottom: 12px !important;
    margin-bottom: 24px !important;
}
.moyen-list li {
    font-size: 1rem !important;
    line-height: 1.6 !important;
}
.moyen-list li i {
    margin-top: 5px !important;
}
.stat-card-moyen {
    background: #F8FAFC !important;
    border: 1px solid rgba(16, 185, 129, 0.08) !important;
    border-radius: 20px !important;
    padding: 24px !important;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
}
.stat-card-moyen:hover {
    background: var(--white) !important;
    border-color: var(--primary) !important;
    transform: translateY(-6px) !important;
    box-shadow: 0 20px 25px -5px rgba(16, 185, 129, 0.08), 0 10px 10px -5px rgba(16, 185, 129, 0.03) !important;
}
.stat-card-moyen .num {
    font-family: 'Outfit', sans-serif !important;
    font-size: 3rem !important;
    font-weight: 800 !important;
    color: var(--primary) !important;
    background: linear-gradient(135deg, var(--primary) 0%, #059669 100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
    margin-bottom: 8px !important;
}
.stat-card-moyen .label {
    font-size: 0.95rem !important;
    font-weight: 600 !important;
}
.software-badge {
    display: inline-flex !important;
    align-items: center !important;
    gap: 8px !important;
    background: #ECFDF5 !important;
    color: #065F46 !important;
    border: 1px solid rgba(16, 185, 129, 0.15) !important;
    padding: 10px 20px !important;
    border-radius: 14px !important;
    font-weight: 600 !important;
    transition: all 0.3s ease !important;
    font-size: 0.95rem !important;
    box-shadow: 0 2px 4px rgba(16, 185, 129, 0.02) !important;
}
.software-badge:hover {
    background: var(--primary) !important;
    color: var(--white) !important;
    transform: translateY(-3px) !important;
    box-shadow: 0 8px 16px rgba(16, 185, 129, 0.2) !important;
    border-color: var(--primary) !important;
}

/* ============================================================
   RTL / ARABIC SPECIFIC STYLING OVERRIDES
   ============================================================ */
@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap');
body.rtl, body.rtl p, body.rtl span, body.rtl h1, body.rtl h2, body.rtl h3, body.rtl h4, body.rtl h5, body.rtl h6, body.rtl a, body.rtl li, body.rtl strong, body.rtl div:not(.fa):not(.fas):not(.far):not(.fab) {
    font-family: 'Cairo', sans-serif !important;
}
body.rtl .fa, body.rtl .fas, body.rtl .far, body.rtl .fab, body.rtl i {
    font-family: "Font Awesome 5 Free", "Font Awesome 5 Brands", "FontAwesome", sans-serif !important;
}
body.rtl .moyen-list {
    padding-right: 0 !important;
}
body.rtl .moyen-list li i {
    transform: rotate(180deg) !important;
}
body.rtl .rounded {
    border-left: none !important;
    border-right: 4px solid var(--primary) !important;
}
</style>


<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown"><?php _e('Nos Moyens', 'gloservices'); ?></h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Accueil', 'gloservices'); ?></a></li>
                <li class="breadcrumb-item text-white active" aria-current="page"><?php _e('Nos Moyens', 'gloservices'); ?></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Intro Section Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <span class="section-badge"><?php _e('RESSOURCES & LOGISTIQUE', 'gloservices'); ?></span>
                <h2 class="section-main-title mb-4"><?php _e('Des moyens matériels et numériques à la pointe de l\'ingénierie', 'gloservices'); ?></h2>
                <p class="text-dark leading-relaxed mb-0" style="font-size: 1.08rem; line-height: 1.8;">
                    <?php _e('Afin de garantir la qualité et la fiabilité de ses prestations, GLOBUILD dispose d\'un ensemble de moyens matériels et numériques adaptés aux exigences des missions d\'études et de suivi des travaux. Le bureau est équipé de postes de travail fixes et portables dédiés aux activités de conception, de modélisation, de dimensionnement et de production graphique ainsi que de moyens d\'impression et de reprographie permettant l\'édition des dossiers techniques et plans d\'exécution.', 'gloservices'); ?>
                </p>
            </div>
        </div>

        <!-- Moyens Logistiques -->
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <h3 class="moyen-section-title"><i class="fa fa-truck-moving"></i> <?php _e('Moyens Logistiques', 'gloservices'); ?></h3>
            <p class="text-muted mb-4"><?php _e('La mobilité de nos équipes d\'études et de maîtrise d\'œuvre sur le terrain est au cœur de notre réactivité.', 'gloservices'); ?></p>
            
            <div class="row g-4">
                <div class="col-lg-6 col-md-12">
                    <div class="moyen-card d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="btn-sm-square bg-primary text-white rounded-circle me-3" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fa fa-car"></i>
                                </div>
                                <h4 class="mb-0 text-dark"><?php _e('Parc de véhicules de service', 'gloservices'); ?></h4>
                            </div>
                            <p class="text-muted">
                                <?php _e('GLOBUILD dispose des moyens logistiques nécessaires pour assurer les déplacements des équipes, les visites de terrain et le suivi des chantiers. Notre flotte permanente est adaptée aux déplacements routiers et chantiers d\'envergure.', 'gloservices'); ?>
                            </p>
                            <ul class="moyen-list mt-3">
                                <li><i class="fa fa-chevron-right"></i> <strong class="text-dark"><?php _e('Véhicules de service :', 'gloservices'); ?></strong> <?php _e('4 véhicules de service sont à la disposition permanente de nos équipes pour le suivi des chantiers.', 'gloservices'); ?></li>
                                <li><i class="fa fa-chevron-right"></i> <strong class="text-dark"><?php _e('Véhicules d\'appoint :', 'gloservices'); ?></strong> <?php _e('Mobilité renforcée selon la charge des opérations.', 'gloservices'); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-12">
                    <div class="moyen-card d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="btn-sm-square bg-primary text-white rounded-circle me-3" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fa fa-building"></i>
                                </div>
                                <h4 class="mb-0 text-dark"><?php _e('Bureau équipé en open space', 'gloservices'); ?></h4>
                            </div>
                            <p class="text-muted">
                                <?php _e('Nos locaux sont aménagés pour accueillir les activités de conception, de coordination et de gestion des projets dans des conditions optimales d\'ergonomie et de collaboration.', 'gloservices'); ?>
                            </p>
                            <ul class="moyen-list mt-3">
                                <li><i class="fa fa-map-marker-alt"></i> <strong class="text-dark"><?php _e('Adresse :', 'gloservices'); ?></strong> <?php _e('11 Rue Dayet Aoua, Agdal, Rabat', 'gloservices'); ?></li>
                                <li><i class="fa fa-laptop-house"></i> <strong class="text-dark"><?php _e('Espace de travail :', 'gloservices'); ?></strong> <?php _e('Aménagement moderne propice à la synergie d\'équipe et aux réunions techniques.', 'gloservices'); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Moyens Informatiques -->
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.3s">
            <h3 class="moyen-section-title"><i class="fa fa-laptop"></i> <?php _e('Moyens Informatiques', 'gloservices'); ?></h3>
            <p class="text-muted mb-4"><?php _e('Une infrastructure informatique puissante et dédiée à la production graphique rapide et aux calculs complexes.', 'gloservices'); ?></p>
            
            <div class="moyen-stats-grid">
                <div class="stat-card-moyen">
                    <div class="num">3</div>
                    <div class="label"><?php _e('Stations de Travail Fixes', 'gloservices'); ?></div>
                </div>
                <div class="stat-card-moyen">
                    <div class="num">5</div>
                    <div class="label"><?php _e('Ordinateurs Portables', 'gloservices'); ?></div>
                </div>
                <div class="stat-card-moyen">
                    <div class="num">1</div>
                    <div class="label"><?php _e('Traceur Grand Format', 'gloservices'); ?></div>
                </div>
                <div class="stat-card-moyen">
                    <div class="num">2</div>
                    <div class="label"><?php _e('Imprimantes Réseau', 'gloservices'); ?></div>
                </div>
            </div>
        </div>

        <!-- Logiciels & Outils Techniques -->
        <div class="mb-5 wow fadeInUp" data-wow-delay="0.4s">
            <h3 class="moyen-section-title"><i class="fa fa-tools"></i> <?php _e('Logiciels & Outils Techniques', 'gloservices'); ?></h3>
            <p class="text-muted mb-4"><?php _e('Les études sont réalisées à l\'aide de logiciels professionnels sous licence pour assurer une précision optimale et la conformité BIM.', 'gloservices'); ?></p>
            
            <div class="software-badges-grid">
                <span class="software-badge"><i class="fa fa-file-code"></i> AutoCAD 2022</span>
                <span class="software-badge"><i class="fa fa-cube"></i> Revit 2024 (BIM)</span>
                <span class="software-badge"><i class="fa fa-calculator"></i> Robot Structural Analysis 2026</span>
                <span class="software-badge"><i class="fa fa-road"></i> AutoPiste</span>
                <span class="software-badge"><i class="fa fa-draw-polygon"></i> Mensura Genius 2026</span>
                <span class="software-badge"><i class="fa fa-map-marked"></i> Covadis 18.1</span>
                <span class="software-badge"><i class="fa fa-water"></i> EPANET (Hydraulique)</span>
                <span class="software-badge"><i class="fa fa-calendar-alt"></i> MS Project</span>
                <span class="software-badge"><i class="fa fa-file-word"></i> Microsoft Office Suite</span>
            </div>
        </div>
        
        <!-- Organisation humaine footer note -->
        <div class="mt-5 p-4 rounded bg-primary-light text-dark wow fadeInUp" data-wow-delay="0.5s" style="border-left: 4px solid var(--primary); background-color: var(--primary-light);">
            <p class="mb-0" style="font-size: 0.95rem; line-height: 1.6;">
                <i class="fa fa-info-circle text-primary me-2"></i>
                <?php _e('Cette plateforme technique permet la production de plans, notes de calcul, métrés, estimations, plannings et rapports de suivi conformes aux exigences des maîtres d\'ouvrage et aux standards de l\'ingénierie moderne.', 'gloservices'); ?>
            </p>
        </div>
    </div>
</div>
<!-- Intro Section End -->

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