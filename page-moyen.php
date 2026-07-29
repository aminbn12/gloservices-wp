<?php
/**
 * Template Name: Page Moyen (Nos Moyens)
 *
 * @package Gloservices
 */

get_header();
?>

<!-- Custom Premium CSS for Page Moyen -->
<style>
/* ============================================================
   NOS MOYENS - WORLD CLASS MODERN DESIGN SYSTEM
   ============================================================ */
.moyen-hero-banner {
    background: linear-gradient(135deg, #0F172A 0%, #1E293B 50%, #064E3B 100%);
    position: relative;
    padding: 90px 0 70px 0;
    overflow: hidden;
}
.moyen-hero-banner::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 80% 20%, rgba(16, 185, 129, 0.18) 0%, transparent 60%);
    pointer-events: none;
}
.moyen-hero-grid-pattern {
    position: absolute;
    inset: 0;
    background-image: radial-gradient(rgba(255, 255, 255, 0.08) 1px, transparent 1px);
    background-size: 24px 24px;
    opacity: 0.5;
    pointer-events: none;
}
.moyen-badge-pill {
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
.moyen-hero-title {
    font-family: var(--font-display);
    font-size: 3rem;
    font-weight: 800;
    color: #FFFFFF;
    line-height: 1.2;
    margin-bottom: 20px;
}
.moyen-hero-title span {
    background: linear-gradient(135deg, #10B981, #34D399);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.moyen-hero-lead {
    color: #94A3B8;
    font-size: 1.15rem;
    line-height: 1.8;
    max-width: 800px;
}

/* Key Stats Grid */
.moyen-stats-section {
    margin-top: -45px;
    position: relative;
    z-index: 10;
}
.moyen-stat-box {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 20px;
    padding: 28px 24px;
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.06);
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    height: 100%;
    display: flex;
    align-items: center;
    gap: 20px;
}
.moyen-stat-box:hover {
    transform: translateY(-8px);
    border-color: #10B981;
    box-shadow: 0 20px 40px rgba(16, 185, 129, 0.15);
}
.moyen-stat-icon {
    width: 60px;
    height: 60px;
    border-radius: 16px;
    background: linear-gradient(135deg, rgba(16, 185, 129, 0.12), rgba(14, 165, 233, 0.12));
    color: #10B981;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    flex-shrink: 0;
}
.moyen-stat-number {
    font-family: var(--font-display);
    font-size: 2.4rem;
    font-weight: 800;
    color: #0F172A;
    line-height: 1;
    margin-bottom: 4px;
}
.moyen-stat-label {
    font-size: 0.88rem;
    font-weight: 600;
    color: #64748B;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Category Cards */
.moyen-card-wrapper {
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    border-radius: 24px;
    padding: 36px;
    height: 100%;
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 4px 20px rgba(15, 23, 42, 0.03);
    position: relative;
    overflow: hidden;
}
.moyen-card-wrapper::before {
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
.moyen-card-wrapper:hover {
    transform: translateY(-8px);
    border-color: rgba(16, 185, 129, 0.3);
    box-shadow: 0 20px 45px rgba(15, 23, 42, 0.08);
}
.moyen-card-wrapper:hover::before {
    opacity: 1;
}
.moyen-card-icon-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 24px;
}
.moyen-card-icon {
    width: 54px;
    height: 54px;
    border-radius: 16px;
    background: #ECFDF5;
    color: #10B981;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
}
.moyen-card-tag {
    background: #F1F5F9;
    color: #475569;
    font-size: 0.75rem;
    font-weight: 700;
    padding: 4px 12px;
    border-radius: 20px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
.moyen-card-title {
    font-family: var(--font-display);
    font-size: 1.4rem;
    font-weight: 700;
    color: #0F172A;
    margin-bottom: 14px;
}
.moyen-card-desc {
    color: #64748B;
    font-size: 0.96rem;
    line-height: 1.7;
    margin-bottom: 24px;
}
.moyen-feature-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.moyen-feature-list li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    color: #334155;
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 12px;
}
.moyen-feature-list li i {
    color: #10B981;
    margin-top: 4px;
    font-size: 0.85rem;
    flex-shrink: 0;
}

/* Software Stack Grid */
.software-card-item {
    background: #F8FAFC;
    border: 1px solid #E2E8F0;
    border-radius: 16px;
    padding: 20px;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 16px;
    height: 100%;
}
.software-card-item:hover {
    background: #FFFFFF;
    border-color: #10B981;
    transform: translateY(-4px);
    box-shadow: 0 12px 25px rgba(16, 185, 129, 0.12);
}
.software-icon-badge {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: #ECFDF5;
    color: #059669;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    flex-shrink: 0;
}
.software-name {
    font-family: var(--font-display);
    font-size: 1rem;
    font-weight: 700;
    color: #0F172A;
    margin-bottom: 2px;
}
.software-category {
    font-size: 0.78rem;
    font-weight: 600;
    color: #10B981;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Quality Assurance Banner */
.quality-assurance-box {
    background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%);
    border-radius: 28px;
    padding: 48px;
    color: #FFFFFF;
    position: relative;
    overflow: hidden;
    box-shadow: 0 20px 50px rgba(15, 23, 42, 0.15);
}
.quality-assurance-box::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -10%;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(16, 185, 129, 0.25) 0%, transparent 70%);
    pointer-events: none;
}
.quality-title {
    font-family: var(--font-display);
    font-size: 1.8rem;
    font-weight: 800;
    color: #FFFFFF;
    margin-bottom: 16px;
}
.quality-desc {
    color: #94A3B8;
    font-size: 1.05rem;
    line-height: 1.8;
    margin-bottom: 28px;
}

.quality-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #10B981, #0EA5E9);
    color: #FFFFFF !important;
    padding: 7px 18px;
    border-radius: 30px;
    font-size: 0.82rem;
    font-weight: 800;
    font-family: var(--font-display);
    letter-spacing: 1.2px;
    box-shadow: 0 4px 18px rgba(16, 185, 129, 0.4);
}
.quality-badge-pill span,
.quality-badge-pill i {
    color: #FFFFFF !important;
}

/* Responsive adjustments */
@media (max-width: 991.98px) {
    .moyen-hero-title { font-size: 2.2rem; }
    .moyen-stats-section { margin-top: 0; padding-top: 30px; }
    .quality-assurance-box { padding: 32px 24px; }
}

@media (max-width: 575.98px) {
    .moyen-stat-box {
        padding: 16px 10px !important;
        gap: 8px !important;
        border-radius: 16px !important;
        flex-direction: column !important;
        text-align: center !important;
        justify-content: center !important;
    }
    .moyen-stat-icon {
        width: 44px !important;
        height: 44px !important;
        font-size: 1.1rem !important;
        border-radius: 12px !important;
    }
    .moyen-stat-number {
        font-size: 1.6rem !important;
        margin-bottom: 2px !important;
    }
    .moyen-stat-label {
        font-size: 0.7rem !important;
        line-height: 1.2 !important;
        letter-spacing: 0px !important;
    }
    .moyen-hero-title { font-size: 1.8rem !important; }
    .moyen-card-wrapper { padding: 24px 18px !important; }
}
</style>

<!-- Hero Banner Header Start -->
<section class="moyen-hero-banner">
    <div class="moyen-hero-grid-pattern"></div>
    <div class="container relative z-10">
        <div class="row align-items-center">
            <div class="col-lg-10 col-xl-9">
                <div class="moyen-badge-pill">
                    <i class="fas fa-microchip"></i>
                    <span><?php _e('POTENTIEL TECHNIQUE & LOGISTIQUE', 'gloservices'); ?></span>
                </div>
                <h1 class="moyen-hero-title">
                    <?php _e('Des moyens d\'ingénierie et des équipements de <span>haute précision</span>', 'gloservices'); ?>
                </h1>
                <p class="moyen-hero-lead">
                    <?php _e('Pour garantir la rigueur, l\'exactitude des calculs et le respect strict des délais sur chaque chantier, GLOBUILD s\'appuie sur un parc matériel moderne, des véhicules de supervision tout-terrain, une infrastructure informatique haute performance et des logiciels BIM sous licence officielle.', 'gloservices'); ?>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Hero Banner Header End -->

<!-- Key Stats Counter Section Start -->
<section class="moyen-stats-section pb-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-6 col-lg-3">
                <div class="moyen-stat-box">
                    <div class="moyen-stat-icon">
                        <i class="fas fa-truck-monster"></i>
                    </div>
                    <div>
                        <div class="moyen-stat-number">4</div>
                        <div class="moyen-stat-label"><?php _e('Véhicules Chantiers', 'gloservices'); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="moyen-stat-box">
                    <div class="moyen-stat-icon">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <div>
                        <div class="moyen-stat-number">8+</div>
                        <div class="moyen-stat-label"><?php _e('Stations DAO/CAO', 'gloservices'); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="moyen-stat-box">
                    <div class="moyen-stat-icon">
                        <i class="fas fa-cubes"></i>
                    </div>
                    <div>
                        <div class="moyen-stat-number">100%</div>
                        <div class="moyen-stat-label"><?php _e('Logiciels BIM Pro', 'gloservices'); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="moyen-stat-box">
                    <div class="moyen-stat-icon">
                        <i class="fas fa-print"></i>
                    </div>
                    <div>
                        <div class="moyen-stat-number">A0/A1</div>
                        <div class="moyen-stat-label"><?php _e('Reprographie A0', 'gloservices'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Key Stats Counter Section End -->

<!-- Main Equipment Categories Start -->
<section class="py-5 bg-light">
    <div class="container py-4">
        
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <span class="section-badge mb-2"><?php _e('NOTRE INFRASTRUCTURE', 'gloservices'); ?></span>
            <h2 class="section-main-title"><?php _e('Organisation matérielle & logistique', 'gloservices'); ?></h2>
            <p class="text-muted fs-6"><?php _e('Une répartition stratégique des ressources pour couvrir la conception en bureau d\'études et le contrôle sur le terrain.', 'gloservices'); ?></p>
        </div>

        <div class="row g-4">
            
            <!-- Card 1: Moyens Logistiques & Flotte -->
            <div class="col-lg-6">
                <div class="moyen-card-wrapper">
                    <div class="moyen-card-icon-head">
                        <div class="moyen-card-icon">
                            <i class="fas fa-car-side"></i>
                        </div>
                        <span class="moyen-card-tag"><?php _e('Mobilité & Supervision', 'gloservices'); ?></span>
                    </div>
                    <h3 class="moyen-card-title"><?php _e('Parc de véhicules de service & Chantiers', 'gloservices'); ?></h3>
                    <p class="moyen-card-desc">
                        <?php _e('La réactivité de nos ingénieurs et techniciens sur le terrain repose sur une flotte permanente de véhicules adaptés aux accès difficiles et aux déplacements inter-régionaux.', 'gloservices'); ?>
                    </p>
                    <ul class="moyen-feature-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <div><strong><?php _e('4 Véhicules de service permanents :', 'gloservices'); ?></strong> <?php _e('Mobilisés 24/7 pour le suivi de chantier, la maîtrise d\'œuvre et la topographie.', 'gloservices'); ?></div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <div><strong><?php _e('Capacité de projection rapide :', 'gloservices'); ?></strong> <?php _e('Intervention immédiate sur tout le territoire national marocain.', 'gloservices'); ?></div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <div><strong><?php _e('Équipements de sécurité embarqués :', 'gloservices'); ?></strong> <?php _e('EPI complets, outils de mesure itinérants et signalisation de chantier.', 'gloservices'); ?></div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 2: Bureau & Open Space Agdal -->
            <div class="col-lg-6">
                <div class="moyen-card-wrapper">
                    <div class="moyen-card-icon-head">
                        <div class="moyen-card-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <span class="moyen-card-tag"><?php _e('Siège & Workspace', 'gloservices'); ?></span>
                    </div>
                    <h3 class="moyen-card-title"><?php _e('Bureau d\'études équipé & Open-Space', 'gloservices'); ?></h3>
                    <p class="moyen-card-desc">
                        <?php _e('Nos locaux situés à Rabat Agdal sont spécialement aménagés pour favoriser la synergie multidisciplinaire entre ingénieurs structures, projeteurs VRD et architectes.', 'gloservices'); ?>
                    </p>
                    <ul class="moyen-feature-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <div><strong><?php _e('Adresse stratégique :', 'gloservices'); ?></strong> <?php _e('11 Rue Dayet Aoua, Agdal, Rabat (Accès rapide aux ministères et maîtres d\'ouvrage).', 'gloservices'); ?></div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <div><strong><?php _e('Salle de réunion multimédia :', 'gloservices'); ?></strong> <?php _e('Équipée pour les présentations de projets BIM, visioconférences et revues de plans.', 'gloservices'); ?></div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <div><strong><?php _e('Espace collaboratif digitalisé :', 'gloservices'); ?></strong> <?php _e('Réseau haut débit sécurisé avec stockage cloud centralisé et sauvegarde automatique.', 'gloservices'); ?></div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 3: Infrastructures Informatiques -->
            <div class="col-lg-6">
                <div class="moyen-card-wrapper">
                    <div class="moyen-card-icon-head">
                        <div class="moyen-card-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <span class="moyen-card-tag"><?php _e('Hardware & Calcul', 'gloservices'); ?></span>
                    </div>
                    <h3 class="moyen-card-title"><?php _e('Infrastructure informatique & Calcul lourd', 'gloservices'); ?></h3>
                    <p class="moyen-card-desc">
                        <?php _e('Des ordinateurs à haute puissance de calcul conçus pour exécuter sans ralentissement les simulations de structures complexes, les modélisations BIM 3D et les rendus graphiques.', 'gloservices'); ?>
                    </p>
                    <ul class="moyen-feature-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <div><strong><?php _e('3 Stations de travail fixes :', 'gloservices'); ?></strong> <?php _e('Processeurs Intel Core i9/Xeon, cartes graphiques dédiées Nvidia RTX et 64 Go RAM.', 'gloservices'); ?></div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <div><strong><?php _e('5 Ordinateurs portables renforcés :', 'gloservices'); ?></strong> <?php _e('Dédiés aux ingénieurs résidents et chefs de projet pour la saisie directe sur chantier.', 'gloservices'); ?></div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <div><strong><?php _e('Serveur de données & Sauvegarde NAS :', 'gloservices'); ?></strong> <?php _e('Protection continue des maquettes numériques et historique complet des versions.', 'gloservices'); ?></div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 4: Reprographie & Impression Grand Format -->
            <div class="col-lg-6">
                <div class="moyen-card-wrapper">
                    <div class="moyen-card-icon-head">
                        <div class="moyen-card-icon">
                            <i class="fas fa-print"></i>
                        </div>
                        <span class="moyen-card-tag"><?php _e('Édition & Reprographie', 'gloservices'); ?></span>
                    </div>
                    <h3 class="moyen-card-title"><?php _e('Atelier d\'impression & Plans d\'exécution', 'gloservices'); ?></h3>
                    <p class="moyen-card-desc">
                        <?php _e('Une chaîne d\'édition autonome intégrée permettant la production rapide et en haute résolution de l\'ensemble des dossiers d\'appel d\'offres (DCE) et plans de coffrage/ferraillage.', 'gloservices'); ?>
                    </p>
                    <ul class="moyen-feature-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <div><strong><?php _e('1 Traceur grand format couleur A0/A1 :', 'gloservices'); ?></strong> <?php _e('Impression jet d\'encre haute précision pour les plans d\'architecture et de voirie.', 'gloservices'); ?></div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <div><strong><?php _e('2 Imprimantes réseau multifonctions :', 'gloservices'); ?></strong> <?php _e('Impression et numérisation recto-verso haute vitesse pour les notes de calcul et CPT.', 'gloservices'); ?></div>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <div><strong><?php _e('Matériel de façonnage & Reliure :', 'gloservices'); ?></strong> <?php _e('Pliage automatique de plans et reliure thermique pour des dossiers techniques impeccables.', 'gloservices'); ?></div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Main Equipment Categories End -->

<!-- Software Stack Section Start -->
<section class="py-5 bg-white">
    <div class="container py-4">
        
        <div class="text-center mx-auto mb-5" style="max-width: 750px;">
            <span class="section-badge mb-2"><?php _e('LOGICIELS PRO DE CONCEРTION', 'gloservices'); ?></span>
            <h2 class="section-main-title"><?php _e('Suite logicielle d\'ingénierie & BIM', 'gloservices'); ?></h2>
            <p class="text-muted fs-6"><?php _e('Tous nos outils de calcul de structure, de modélisation 3D, de tracé routier et d\'hydraulique sont sous licence officielle mise à jour.', 'gloservices'); ?></p>
        </div>

        <div class="row g-3">
            
            <!-- Software 1: AutoCAD -->
            <div class="col-md-6 col-lg-4">
                <div class="software-card-item">
                    <div class="software-icon-badge">
                        <i class="fas fa-draw-polygon"></i>
                    </div>
                    <div>
                        <div class="software-name">AutoCAD 2024 / 2026</div>
                        <div class="software-category"><?php _e('Dessin & Conception DAO 2D/3D', 'gloservices'); ?></div>
                    </div>
                </div>
            </div>

            <!-- Software 2: Revit BIM -->
            <div class="col-md-6 col-lg-4">
                <div class="software-card-item">
                    <div class="software-icon-badge">
                        <i class="fas fa-cubes"></i>
                    </div>
                    <div>
                        <div class="software-name">Revit 2024 (BIM)</div>
                        <div class="software-category"><?php _e('Modélisation BIM & Maquette 3D', 'gloservices'); ?></div>
                    </div>
                </div>
            </div>

            <!-- Software 3: Robot Structural Analysis -->
            <div class="col-md-6 col-lg-4">
                <div class="software-card-item">
                    <div class="software-icon-badge">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <div>
                        <div class="software-name">Robot Structural Analysis</div>
                        <div class="software-category"><?php _e('Calcul Béton Armé & Charpente', 'gloservices'); ?></div>
                    </div>
                </div>
            </div>

            <!-- Software 4: Covadis -->
            <div class="col-md-6 col-lg-4">
                <div class="software-card-item">
                    <div class="software-icon-badge">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <div>
                        <div class="software-name">Covadis 18.1</div>
                        <div class="software-category"><?php _e('Topographie, VRD & Terrrassement', 'gloservices'); ?></div>
                    </div>
                </div>
            </div>

            <!-- Software 5: AutoPiste -->
            <div class="col-md-6 col-lg-4">
                <div class="software-card-item">
                    <div class="software-icon-badge">
                        <i class="fas fa-road"></i>
                    </div>
                    <div>
                        <div class="software-name">AutoPiste</div>
                        <div class="software-category"><?php _e('Conception & Tracé Routier', 'gloservices'); ?></div>
                    </div>
                </div>
            </div>

            <!-- Software 6: Mensura Genius -->
            <div class="col-md-6 col-lg-4">
                <div class="software-card-item">
                    <div class="software-icon-badge">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <div>
                        <div class="software-name">Mensura Genius 2026</div>
                        <div class="software-category"><?php _e('Infrastructures & Métrés 3D', 'gloservices'); ?></div>
                    </div>
                </div>
            </div>

            <!-- Software 7: EPANET -->
            <div class="col-md-6 col-lg-4">
                <div class="software-card-item">
                    <div class="software-icon-badge">
                        <i class="fas fa-tint"></i>
                    </div>
                    <div>
                        <div class="software-name">EPANET & HEC-RAS</div>
                        <div class="software-category"><?php _e('Hydraulique & Réseaux d\'Eau', 'gloservices'); ?></div>
                    </div>
                </div>
            </div>

            <!-- Software 8: MS Project -->
            <div class="col-md-6 col-lg-4">
                <div class="software-card-item">
                    <div class="software-icon-badge">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <div>
                        <div class="software-name">MS Project</div>
                        <div class="software-category"><?php _e('Planning & Gestion de Chantiers', 'gloservices'); ?></div>
                    </div>
                </div>
            </div>

            <!-- Software 9: Microsoft 365 Enterprise -->
            <div class="col-md-6 col-lg-4">
                <div class="software-card-item">
                    <div class="software-icon-badge">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <div>
                        <div class="software-name">Microsoft 365 Enterprise</div>
                        <div class="software-category"><?php _e('Bureautique & Rapports Techniques', 'gloservices'); ?></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- Software Stack Section End -->

<!-- References Carousel Start -->
<section class="references-section moyen-references-bubbles-section py-5">
    <div class="container">
        <div class="references-header text-center mb-5">
            <span class="references-label mb-2 d-inline-block"><?php _e('PARTENAIRES & CONFIANCE', 'gloservices'); ?></span>
            <h2 class="fw-bold display-6"><?php _e('Nos Références', 'gloservices'); ?></h2>
        </div>
        <div class="references-track moyen-bubbles-track">
            <?php if (function_exists('gloservices_vendor_carousel')) { gloservices_vendor_carousel(); } ?>
        </div>
    </div>
</section>
<!-- References Carousel End -->

<?php
get_footer();