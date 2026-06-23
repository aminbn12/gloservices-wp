<?php
/**
 * Template Name: Page Moyen (Nos Moyens)
 *
 * @package Gloservices
 */

get_header();
?>

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
                                <li><i class="fa fa-chevron-right"></i> <strong class="text-dark"><?php _e('4 Véhicules Permanents :', 'gloservices'); ?></strong> <?php _e('Audi Q5, Jeep Renegade, VW Passat, Dacia Logan.', 'gloservices'); ?></li>
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