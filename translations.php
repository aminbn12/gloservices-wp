<?php
/**
 * Gloservices - Multi-language translations
 * 
 * This file contains all translatable strings for FR, EN, AR.
 * Loaded automatically by the theme based on Polylang current language.
 *
 * @package Gloservices
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get all translations for a given language code.
 */
function gloservices_get_translations($lang = 'fr') {
    $all = array(
        // ===== HEADER / TOPBAR =====
        'Chargement...' => array('en' => 'Loading...', 'ar' => 'جار التحميل...'),
        'Menu Principal' => array('en' => 'Main Menu', 'ar' => 'القائمة الرئيسية'),
        'Menu Footer' => array('en' => 'Footer Menu', 'ar' => 'قائمة التذييل'),
        'Accueil' => array('en' => 'Home', 'ar' => 'الرئيسية'),
        'Contact' => array('en' => 'Contact', 'ar' => 'اتصل بنا'),
        'Qui sommes-nous' => array('en' => 'About Us', 'ar' => 'من نحن'),
        'Services' => array('en' => 'Services', 'ar' => 'الخدمات'),
        'Nos moyens' => array('en' => 'Our Equipment', 'ar' => 'معداتنا'),
        'Projets' => array('en' => 'Projects', 'ar' => 'المشاريع'),
        'Road Structure' => array('en' => 'Road Structure', 'ar' => 'هياكل الطرق'),

        // ===== CAROUSEL =====
        'DÉCOUVREZ NOS SOLUTIONS "CLÉS EN MAIN"' => array('en' => 'DISCOVER OUR TURNKEY SOLUTIONS', 'ar' => 'اكتشف حلولنا الجاهزة'),
        'DÉCOUVREZ NOS SOLUTIONS' => array('en' => 'DISCOVER OUR SOLUTIONS', 'ar' => 'اكتشف حلولنا'),
        'CLÉS EN MAIN' => array('en' => 'TURNKEY', 'ar' => 'المتكاملة'),
        'Notre bureau d\'études BTP vous accompagne de la conception à la réalisation de vos projets, en passant par la modélisation, l\'automatisation et la gestion de chantier. Gloservices vous propose également des solutions digitales sur mesure.' => array('en' => 'Our civil engineering firm accompanies you from design to completion. Gloservices also offers customized digital solutions.', 'ar' => 'يرافقكم مكتبنا الهندسي من التصميم إلى الإنجاز ويقدم حلولاً رقمية مخصصة.'),
        'Notre bureau d\'études BTP vous accompagne de la conception à la réalisation de vos projets, en passant par la modélisation, l\'automatisation et la gestion de chantier. Gloservices vous propose également des solutions digitales sur mesure pour optimiser vos processus et améliorer la performance de vos projets.' => array('en' => 'Our engineering firm accompanies you from design to project completion. Gloservices offers customized digital solutions to optimize your processes.', 'ar' => 'يرافقكم مكتبنا الهندسي من التصميم إلى الإنجاز ويقدم حلولاً رقمية مخصصة.'),
        'Lire la suite' => array('en' => 'Read More', 'ar' => 'اقرأ المزيد'),
        'En savoir plus' => array('en' => 'Learn More', 'ar' => 'اعرف المزيد'),

        // ===== STATS =====
        'Clients Satisfaits' => array('en' => 'Happy Clients', 'ar' => 'عملاء راضون'),
        'Projets Réalisés' => array('en' => 'Projects Completed', 'ar' => 'مشاريع منجزة'),
        'Travailleurs Experts' => array('en' => 'Expert Workers', 'ar' => 'عمال خبراء'),

        // ===== ABOUT (home section) =====
        'À propos' => array('en' => 'About Us', 'ar' => 'من نحن'),
        'Plus de 10 ans d\'expérience dans la construction et les solutions numériques' => array('en' => 'Over 10 years of experience in construction and digital solutions', 'ar' => 'أكثر من 10 سنوات خبرة في البناء والحلول الرقمية'),
        'Avec plus d\'une décennie d\'expertise dans le domaine du génie civil et de la construction, nous offrons des services de conseil et de gestion de projet de haute qualité. Nous sommes également spécialisés dans le développement de solutions numériques innovantes pour le secteur de la construction.' => array('en' => 'With over a decade of expertise in civil engineering, we offer high-quality consulting and project management services. We are specialized in innovative digital solutions for construction.', 'ar' => 'مع أكثر من عقد من الخبرة في الهندسة المدنية، نقدم استشارات وإدارة مشاريع عالية الجودة وحلولاً رقمية مبتكرة.'),
        'Expertise confirmée en génie civil' => array('en' => 'Proven expertise in civil engineering', 'ar' => 'خبرة مثبتة في الهندسة المدنية'),
        'Solutions numériques avancées pour la construction' => array('en' => 'Advanced digital solutions for construction', 'ar' => 'حلول رقمية متقدمة للبناء'),
        'L\'engagement pour la qualité et l\'innovation' => array('en' => 'Commitment to quality and innovation', 'ar' => 'الالتزام بالجودة والابتكار'),

        // ===== SERVICES =====
        'SERVICES & EXPERTISE' => array('en' => 'Services & Expertise', 'ar' => 'الخدمات والخبرات'),
        'Nos Services' => array('en' => 'Our Services', 'ar' => 'خدماتنا'),
        'L\'alliance de l\'ingénierie de précision et de l\'innovation digitale' => array('en' => 'The alliance of precision engineering and digital innovation', 'ar' => 'الجمع بين الهندسة الدقيقة والابتكار الرقمي'),
        'Explorez nos projets d\'ingénierie civile et de solutions numériques' => array('en' => 'Explore our civil engineering and digital solutions projects', 'ar' => 'استكشف مشاريعنا في الهندسة المدنية والحلول الرقمية'),
        'infrastructures_service' => array('fr' => 'Infrastructures', 'en' => 'Infrastructures', 'ar' => 'البنية التحتية'),
        'infrastructures_desc' => array('fr' => 'Études et conception des routes, autoroutes, voiries et réseaux divers.', 'en' => 'Studies and design of roads, highways, pathways and diverse networks.', 'ar' => 'دراسات وتصميم الطرق، الطرق السريعة والممرات والشبكات المختلفة.'),
        'ouvrages_art_service' => array('fr' => 'Ouvrages d\'art', 'en' => 'Art Structures', 'ar' => 'المنشآت الفنية'),
        'ouvrages_art_desc' => array('fr' => 'Conception et suivi de ponts, viaducs et ouvrages complexes.', 'en' => 'Design and supervision of bridges, viaducts and complex structures.', 'ar' => 'تصميم ومتابعة الجسور والقناطر والمنشآت المعقدة.'),
        'batiments_service' => array('fr' => 'Bâtiments', 'en' => 'Buildings', 'ar' => 'المباني'),
        'batiments_desc' => array('fr' => 'Ingénierie des structures et génie civil pour tous types de bâtiments.', 'en' => 'Structural engineering and civil engineering for all types of buildings.', 'ar' => 'الهندسة الإنشائية والهندسة المدنية لجميع أنواع المباني.'),
        'vrd_service' => array('fr' => 'Voirie & Réseaux Divers', 'en' => 'Voirie & Diverse Networks', 'ar' => 'الطرق والشبكات المختلفة'),
        'vrd_desc' => array('fr' => 'Études et conception des voiries, réseaux et aménagements urbains.', 'en' => 'Studies and design of pathways, networks and sustainable urban developments.', 'ar' => 'دراسات وتصميم الطرق والشبكات والتهيئة الحضرية المستدامة.'),
        'solutions_digitales_service' => array('fr' => 'Solutions Digitales', 'en' => 'Digital Solutions', 'ar' => 'الحلول الرقمية'),
        'solutions_digitales_desc' => array('fr' => 'Développement d\'outils numériques pour le suivi de chantier et l\'optimisation des projets.', 'en' => 'Development of digital tools for site management and project optimization.', 'ar' => 'تطوير الأدوات الرقمية لإدارة المواقع وتحسين المشاريع.'),
        'gestion_projet_service' => array('fr' => 'Gestion de Projet & OPC', 'en' => 'Project Management & OPC', 'ar' => 'إدارة المشاريع والتنسيق'),
        'gestion_projet_desc' => array('fr' => 'Assistance technique, maîtrise d\'œuvre et planification complète des opérations.', 'en' => 'Technical assistance, project management and complete operations planning.', 'ar' => 'المساعدة التقنية وإدارة المشاريع والتخطيط الكامل للعمليات.'),

        // ===== WHY CHOOSE US =====
        'Pourquoi nous choisir !' => array('en' => 'Why Choose Us!', 'ar' => 'لماذا تختارنا!'),
        'Solutions d\'Ingénierie et Numériques Complètes' => array('en' => 'Complete Engineering and Digital Solutions', 'ar' => 'حلول هندسية ورقمية متكاملة'),
        'Nous fournissons des solutions de pointe pour les projets de génie civil. Notre expertise va de la conception structurelle aux outils numériques avancés pour la gestion de projet. Nous garantissons qualité, innovation et durabilité dans chaque projet que nous entreprenons.' => array('en' => 'We provide cutting-edge solutions for civil engineering projects. We guarantee quality, innovation and sustainability in every project.', 'ar' => 'نقدم حلولاً متطورة لمشاريع الهندسة المدنية. نضمن الجودة والابتكار والاستدامة في كل مشروع.'),
        'Haute Qualité' => array('en' => 'High Quality', 'ar' => 'جودة عالية'),
        'Expert' => array('en' => 'Expert', 'ar' => 'خبير'),
        'Professionnels' => array('en' => 'Professionals', 'ar' => 'محترفون'),
        'Consultation' => array('en' => 'Consultation', 'ar' => 'استشارة'),
        'Gratuite' => array('en' => 'Free', 'ar' => 'مجانية'),
        'Support Client' => array('en' => 'Customer Support', 'ar' => 'دعم العملاء'),

        // ===== PROJECTS =====
        'RÉALISATIONS' => array('en' => 'Portfolio', 'ar' => 'إنجازاتنا'),
        'Nos Projets' => array('en' => 'Our Projects', 'ar' => 'مشاريعنا'),
        'Des projets d\'envergure menés avec rigueur et excellence' => array('en' => 'Major projects executed with rigor and excellence', 'ar' => 'مشاريع كبرى تم تنفيذها بدقة وتميز'),
        'Découvrez Nos Projets en Ingénierie Civile et Solutions Numériques' => array('en' => 'Discover Our Civil Engineering and Digital Solutions Projects', 'ar' => 'اكتشف مشاريعنا في الهندسة المدنية والحلول الرقمية'),
        'Client :' => array('en' => 'Client:', 'ar' => 'الزبون:'),
        'Année :' => array('en' => 'Year:', 'ar' => 'السنة:'),
        'Budget :' => array('en' => 'Budget:', 'ar' => 'الميزانية:'),
        'Nous contacter' => array('en' => 'Contact Us', 'ar' => 'اتصل بنا'),
        'Tous' => array('en' => 'All', 'ar' => 'الكل'),
        'Solution Numérique' => array('en' => 'Digital Solution', 'ar' => 'حل رقمي'),
        'Développement Urbain' => array('en' => 'Urban Development', 'ar' => 'تطوير حضري'),
        'Infrastructures Routières' => array('en' => 'Road Infrastructures', 'ar' => 'البنية التحتية للطرق'),
        'Projet %d' => array('en' => 'Project %d', 'ar' => 'مشروع %d'),
        'Voir plus de projets' => array('en' => 'View more projects', 'ar' => 'عرض المزيد من المشاريع'),

        // ===== QUOTE =====
        'Devis Gratuit' => array('en' => 'Free Quote', 'ar' => 'عرض سعر مجاني'),
        'Obtenez un Devis Gratuit' => array('en' => 'Get a Free Quote', 'ar' => 'احصل على عرض سعر مجاني'),
        'Obtenez un Devis Personnalisé' => array('en' => 'Get a Customized Quote', 'ar' => 'احصل على عرض سعر مخصص'),
        'Contactez-nous pour obtenir un devis sur mesure pour votre projet. Notre équipe vous répondra rapidement.' => array('en' => 'Contact us to get a tailored quote for your project. Our team will respond quickly.', 'ar' => 'اتصل بنا للحصول على عرض سعر مخصص لمشروعك. سيرد فريقنا بسرعة.'),
        'Contactez-nous pour obtenir un devis personnalisé pour votre projet. Notre équipe vous répondra dans les plus brefs délais.' => array('en' => 'Contact us to get a personalized quote. Our team will respond promptly.', 'ar' => 'اتصل بنا للحصول على عرض سعر مخصص. سيرد فريقنا قريباً.'),
        'Votre Nom' => array('en' => 'Your Name', 'ar' => 'اسمك'),
        'Votre Email' => array('en' => 'Your Email', 'ar' => 'بريدك الإلكتروني'),
        'Votre Mobile' => array('en' => 'Your Phone', 'ar' => 'هاتفك'),
        'Sélectionner un Service' => array('en' => 'Select a Service', 'ar' => 'اختر خدمة'),
        'Ingénierie Civile (BTP)' => array('en' => 'Civil Engineering (BTP)', 'ar' => 'الهندسة المدنية (BTP)'),
        'Solutions Numériques (IT)' => array('en' => 'Digital Solutions (IT)', 'ar' => 'الحلول الرقمية (IT)'),
        'Service 1' => array('en' => 'Service 1', 'ar' => 'الخدمة 1'),
        'Service 2' => array('en' => 'Service 2', 'ar' => 'الخدمة 2'),
        'Service 3' => array('en' => 'Service 3', 'ar' => 'الخدمة 3'),
        'Note Spéciale' => array('en' => 'Special Note', 'ar' => 'ملاحظة خاصة'),
        'Soumettre' => array('en' => 'Submit', 'ar' => 'إرسال'),

        // ===== TEAM =====
        'Membre de l\'Équipe' => array('en' => 'Team Member', 'ar' => 'عضو الفريق'),
        'Membres Expérimentés de l\'Équipe' => array('en' => 'Experienced Team Members', 'ar' => 'أعضاء الفريق ذوو الخبرة'),
        'Membre %d' => array('en' => 'Member %d', 'ar' => 'عضو %d'),
        'Fonction' => array('en' => 'Position', 'ar' => 'المنصب'),

        // ===== REFERENCES =====
        'RÉFÉRENCES' => array('en' => 'REFERENCES', 'ar' => 'المراجع'),

        // ===== PAGE ABOUT QUI SOMMES-NOUS =====
        'Années d\'expérience' => array('en' => 'Years of experience', 'ar' => 'سنوات من الخبرة'),
        'Construction de bâtiments' => array('en' => 'Building construction', 'ar' => 'بناء المباني'),
        'Outils numériques' => array('en' => 'Digital tools', 'ar' => 'الأدوات الرقمية'),
        'Technologies numériques avancées' => array('en' => 'Advanced digital technologies', 'ar' => 'التقنيات الرقمية المتقدمة'),
        'Qualité supérieure' => array('en' => 'Superior quality', 'ar' => 'جودة فائقة'),
        'Gloservices INGENIERIE' => array('en' => 'Gloservices INGENIERIE', 'ar' => 'غلوسيرفسيس الهندسية'),
        'Gloservices INGENIERIE est un bureau d\'études techniques pluridisciplinaires réunissant :' => array('en' => 'Gloservices INGENIERIE is a multidisciplinary technical design office bringing together:', 'ar' => 'غلوسيرفسيس الهندسية هو مكتب دراسات تقنية متعدد التخصصات يضم:'),
        'Ingénierie de structure' => array('en' => 'Structural engineering', 'ar' => 'الهندسة الإنشائية'),
        'Ingénierie des routes et des réseaux' => array('en' => 'Roads and networks engineering', 'ar' => 'هندسة الطرق والشبكات'),
        'Ingénierie des fluides et thermique' => array('en' => 'Fluid and thermal engineering', 'ar' => 'هندسة الموائع والحراريات'),
        'Ingénierie électrique' => array('en' => 'Electrical engineering', 'ar' => 'الهندسة الكهربائية'),
        'Ingénierie environnementale' => array('en' => 'Environmental engineering', 'ar' => 'الهندسة البيئية'),
        'Métré et suivi des travaux' => array('en' => 'Quantity surveying and works monitoring', 'ar' => 'الكميات ومتابعة الأشغال'),
        'Forte d\'une solide expérience dans les domaines de l\'aménagement du territoire, de l\'infrastructure et du BTP, notre entité à taille humaine participe à des projets d\'envergure de la phase de conception à l\'exécution.' => array('en' => 'With solid experience in land planning, infrastructure and construction, our human-sized entity participates in major projects from design to execution.', 'ar' => 'بفضل خبرتنا في التهيئة الترابية والبنية التحتية والبناء، نشارك في مشاريع كبرى من التصميم إلى التنفيذ.'),
        'Gloservices INGENIERIE a pour objectif de fournir une ingénierie de haute qualité avec une approche de développement durable et de prendre plaisir à créer et partager des projets.' => array('en' => 'Gloservices INGENIERIE aims to provide high-quality engineering with a sustainable development approach.', 'ar' => 'تهدف غلوسيرفسيس الهندسية لتقديم هندسة عالية الجودة بنهج التنمية المستدامة.'),
        'Notre équipe est animée par les valeurs suivantes :' => array('en' => 'Our team is driven by the following values:', 'ar' => 'فريقنا مدفوع بالقيم التالية:'),
        'Service (au client, au projet, à la planète)' => array('en' => 'Service (to client, to project, to planet)', 'ar' => 'الخدمة (للعميل، للمشروع، للكوكب)'),
        'Approche humaine (écoute, communication, humilité)' => array('en' => 'Human approach (listening, communication, humility)', 'ar' => 'النهج الإنساني (الاستماع، التواصل، التواضع)'),
        'Qualité (souci du détail, rigueur et pragmatisme)' => array('en' => 'Quality (attention to detail, rigor and pragmatism)', 'ar' => 'الجودة (الاهتمام بالتفاصيل، الدقة والواقعية)'),
        'Responsabilité (engagement, reconnaissance de ses limites et de son potentiel)' => array('en' => 'Responsibility (commitment, recognition of limits and potential)', 'ar' => 'المسؤولية (الالتزام، الاعتراف بالحدود والإمكانات)'),
        'En pratique :' => array('en' => 'In practice:', 'ar' => 'عملياً:'),
        'Gestion transversale des projets pour la synergie' => array('en' => 'Cross-functional project management for synergy', 'ar' => 'الإدارة العرضية للمشاريع لتحقيق التآزر'),
        'Intégration et partage de nouvelles compétences' => array('en' => 'Integration and sharing of new skills', 'ar' => 'دمج ومشاركة المهارات الجديدة'),
        'Croissance maîtrisée au service de la vision et des valeurs de Gloservices INGENIERIE' => array('en' => 'Controlled growth serving the vision and values of Gloservices INGENIERIE', 'ar' => 'نمو مضبوط في خدمة رؤية وقيم غلوسيرفسيس'),
        'Curiosité et créativité pour proposer des solutions techniques ou méthodologiques innovantes' => array('en' => 'Curiosity and creativity to offer innovative technical or methodological solutions', 'ar' => 'الفضول والإبداع لتقديم حلول تقنية أو منهجية مبتكرة'),
        'Un environnement de travail en cohérence avec nos valeurs' => array('en' => 'A work environment consistent with our values', 'ar' => 'بيئة عمل متسقة مع قيمنا'),
        'Nos Engagements :' => array('en' => 'Our Commitments:', 'ar' => 'التزاماتنا:'),
        'Optimiser les coûts et améliorer la qualité' => array('en' => 'Optimize costs and improve quality', 'ar' => 'تحسين التكاليف ورفع الجودة'),
        'Offrir un service personnalisé' => array('en' => 'Offer personalized service', 'ar' => 'تقديم خدمة مخصصة'),
        'Respecter les délais' => array('en' => 'Respect deadlines', 'ar' => 'احترام المواعيد النهائية'),
        'Nos Valeurs :' => array('en' => 'Our Values:', 'ar' => 'قيمنا:'),
        'Efficacité' => array('en' => 'Efficiency', 'ar' => 'الكفاءة'),
        'Créativité' => array('en' => 'Creativity', 'ar' => 'الإبداع'),
        'Transparence' => array('en' => 'Transparency', 'ar' => 'الشفافية'),

        // ===== PAGE MOYEN =====
        'Nos Moyens' => array('en' => 'Our Resources', 'ar' => 'إمكانياتنا'),
        'Avant Études' => array('en' => 'Pre-Study Phase', 'ar' => 'مرحلة ما قبل الدراسات'),
        'Investigations et Identification des terrains pour projets immobiliers' => array('en' => 'Site investigations for real estate projects', 'ar' => 'التحقيقات وتحديد الأراضي للمشاريع العقارية'),
        'Assistance au Maître d\'Ouvrage, MOD et Maître d\'Œuvre' => array('en' => 'Assistance to Project Owner and Project Management', 'ar' => 'المساعدة لصاحب المشروع وإدارة المشاريع'),
        'Élaboration d\'un compte d\'exploitation' => array('en' => 'Operating account preparation', 'ar' => 'إعداد حساب الاستغلال'),
        'Étude technico-économique' => array('en' => 'Technico-economic study', 'ar' => 'دراسة تقنية اقتصادية'),
        'Étude de rentabilité' => array('en' => 'Profitability study', 'ar' => 'دراسة الجدوى الاقتصادية'),
        'Étude de Faisabilité' => array('en' => 'Feasibility study', 'ar' => 'دراسة الجدوى'),
        'Conseil et expertise technique' => array('en' => 'Technical consulting and expertise', 'ar' => 'الاستشارات والخبرة التقنية'),
        'En Phase Études' => array('en' => 'Study Phase', 'ar' => 'مرحلة الدراسات'),
        'Étude préliminaire et avant projet sommaire (APS)' => array('en' => 'Preliminary study and sketch design (APS)', 'ar' => 'دراسة أولية وتصميم مبدئي'),
        'Avant projet détaillé (APD)' => array('en' => 'Detailed preliminary design (APD)', 'ar' => 'تصميم تفصيلي مبدئي'),
        'Projet d\'exécution (PE)' => array('en' => 'Execution project (PE)', 'ar' => 'مشروع التنفيذ'),
        'Dossiers de consultation des entreprises' => array('en' => 'Company consultation files', 'ar' => 'ملفات استشارة الشركات'),
        'Cahier des charges et bordereau des prix (DCE)' => array('en' => 'Specifications and price schedule (DCE)', 'ar' => 'دفتر الشروط وجدول الأثمان'),
        'Assistance à l\'attribution des marchés (AMT)' => array('en' => 'Contract award assistance (AMT)', 'ar' => 'المساعدة في إسناد الصفقات'),
        'En Phase Travaux' => array('en' => 'Construction Phase', 'ar' => 'مرحلة الأشغال'),
        'Organisation du chantier' => array('en' => 'Site organization', 'ar' => 'تنظيم الموقع'),
        'Élaboration des plannings' => array('en' => 'Schedule preparation', 'ar' => 'إعداد الجداول الزمنية'),
        'Surveillance et contrôle de la qualité des travaux' => array('en' => 'Quality monitoring and control of works', 'ar' => 'مراقبة جودة الأشغال'),
        'Suivi des coûts et du budget global' => array('en' => 'Cost and budget monitoring', 'ar' => 'متابعة التكاليف والميزانية'),
        'Suivi du respect des délais' => array('en' => 'Deadline compliance monitoring', 'ar' => 'متابعة احترام المواعيد'),
        'Réceptions des ouvrages exécutés' => array('en' => 'Reception of completed works', 'ar' => 'استلام الأشغال المنفذة'),
        'Prise des attachements et vérification des décomptes' => array('en' => 'Attachments and statement verification', 'ar' => 'أخذ الملحقات والتحقق من الحسابات'),
        'Ordonnancement, Pilotage et Coordination (OPC)' => array('en' => 'Scheduling, Management and Coordination (OPC)', 'ar' => 'الجدولة والقيادة والتنسيق'),
        'Après Travaux' => array('en' => 'Post-Construction', 'ar' => 'ما بعد الأشغال'),
        'Élaboration des plans de récolement' => array('en' => 'As-built plan preparation', 'ar' => 'إعداد مخططات إتمام البناء'),
        'Élaboration des rétro-plannings' => array('en' => 'Retro-planning preparation', 'ar' => 'إعداد الجداول الزمنية الراجعة'),
        'Moyens Humains' => array('en' => 'Human Resources', 'ar' => 'الموارد البشرية'),
        'Gérant : Ingénieur d\'état génie civil' => array('en' => 'Manager: State Engineer in Civil Engineering', 'ar' => 'المدير: مهندس دولة في الهندسة المدنية'),
        'Ingénieur d\'état génie civil hydraulique, chef de projet' => array('en' => 'State Engineer in Hydraulic Civil Engineering, Project Manager', 'ar' => 'مهندس دولة في الهندسة المدنية الهيدروليكية، مدير مشروع'),
        'Ingénieur d\'état lots techniques (CFO et CFA)' => array('en' => 'State Engineer in Technical Packages (CFO and CFA)', 'ar' => 'مهندس دولة في الحزم التقنية'),
        '2 projeteurs et techniciens' => array('en' => '2 designers and technicians', 'ar' => '2 مصممين وتقنيين'),
        'Moyens Matériels' => array('en' => 'Material Resources', 'ar' => 'الموارد المادية'),
        '3 Ordinateurs de bureau' => array('en' => '3 Desktop computers', 'ar' => '3 حواسيب مكتبية'),
        '3 Ordinateurs portables' => array('en' => '3 Laptops', 'ar' => '3 حواسيب محمولة'),
        'Traceur et imprimantes' => array('en' => 'Plotter and printers', 'ar' => 'راسم وطابعات'),
        'Logiciel de calcul de structure' => array('en' => 'Structural calculation software', 'ar' => 'برنامج حساب الهياكل'),
        'Logiciel de dessin DAO / CAO : AUTOCAD et VRD COVADIS' => array('en' => 'CAD software: AUTOCAD and VRD COVADIS', 'ar' => 'برامج التصميم: أوتوكاد وكوفاديس'),
        'Logiciels de calcul géotechnique : GEOSLOPE et PLAXIS' => array('en' => 'Geotechnical software: GEOSLOPE and PLAXIS', 'ar' => 'برامج جيوتقنية: جيوسلوب وبلاكسيس'),
        'Logiciel hydraulique : EPANET' => array('en' => 'Hydraulic software: EPANET', 'ar' => 'برنامج هيدروليكي: إي بانيت'),
        'Logiciels de tracé routier, topographie, terrassement et VRD' => array('en' => 'Road layout, topography, earthworks software', 'ar' => 'برامج تخطيط الطرق والطبوغرافيا والحفريات'),
        'Logiciels de calcul des lots techniques' => array('en' => 'Technical package calculation software', 'ar' => 'برامج حساب الحزم التقنية'),
        'Calculs du bilan et schéma électrique BT MT : CANECO' => array('en' => 'Balance and electrical diagram software: CANECO', 'ar' => 'حسابات التوازن والمخطط الكهربائي: كانيكو'),
        'Gestion de Projets :' => array('en' => 'Project Management:', 'ar' => 'إدارة المشاريع:'),
        'MS Project' => array('en' => 'MS Project', 'ar' => 'إم إس بروجكت'),
        'MS VISIO' => array('en' => 'MS VISIO', 'ar' => 'إم إس فيزيو'),
        'MS Office' => array('en' => 'MS Office', 'ar' => 'إم إس أوفيس'),
        'Logiciels bureautiques : Word, Excel et PowerPoint' => array('en' => 'Office software: Word, Excel and PowerPoint', 'ar' => 'برامج مكتبية: وورد وإكسل وباوربوينت'),

        // ===== PAGE ROADSTRU =====
        'Routes & Ouvrages' => array('en' => 'Roads & Structures', 'ar' => 'الطرق والمنشآت'),
        'Routes, Ponts et Ouvrages d\'Art' => array('en' => 'Roads, Bridges and Civil Engineering Structures', 'ar' => 'الطرق والجسور والمنشآت الفنية'),
        'Routes et signalisation' => array('en' => 'Roads and signage', 'ar' => 'الطرق واللافتات'),
        'Pistes Rurales' => array('en' => 'Rural Roads', 'ar' => 'المسالك القروية'),
        'Transport urbain' => array('en' => 'Urban Transport', 'ar' => 'النقل الحضري'),
        'Étude et dimensionnement des ouvrages d\'art' => array('en' => 'Study and design of structures', 'ar' => 'دراسة وتصميم المنشآت الفنية'),
        'Métré et évaluation' => array('en' => 'Quantity surveying and evaluation', 'ar' => 'الكميات والتقييم'),
        'Suivi des travaux de construction' => array('en' => 'Construction works monitoring', 'ar' => 'متابعة أشغال البناء'),
        'Prestations assurées' => array('en' => 'Services Provided', 'ar' => 'الخدمات المقدمة'),
        'Conception et dimensionnement des ouvrages de franchissement' => array('en' => 'Design and sizing of crossing structures', 'ar' => 'تصميم وأبعاد منشآت العبور'),
        'Étude et conception des routes et pistes rurales' => array('en' => 'Study and design of roads and rural tracks', 'ar' => 'دراسة وتصميم الطرق والمسالك القروية'),
        'Élaboration des plans d\'exécution : profils en long et en travers…' => array('en' => 'Execution plans: longitudinal and cross sections...', 'ar' => 'مخططات التنفيذ: المقاطع الطولية والعرضية...'),
        'Métré et évaluation des travaux' => array('en' => 'Quantity surveying and work evaluation', 'ar' => 'الكميات وتقييم الأشغال'),
        'Élaboration des DCE' => array('en' => 'Preparation of DCE', 'ar' => 'إعداد ملفات الاستشارة'),
        'Suivi et contrôle des travaux' => array('en' => 'Works monitoring and control', 'ar' => 'متابعة ومراقبة الأشغال'),

        // ===== PAGE SERVICE =====
        'Explorez nos projets d\'ingénierie civile et de solutions numériques' => array('en' => 'Explore our civil engineering and digital solutions projects', 'ar' => 'استكشف مشاريعنا في الهندسة المدنية والحلول الرقمية'),
        'Nous fournissons des solutions de pointe pour les projets de génie civil. Notre expertise va de la conception structurelle aux outils numériques avancés pour la gestion de projet.' => array('en' => 'We provide cutting-edge solutions for civil engineering projects. Our expertise ranges from structural design to digital tools for project management.', 'ar' => 'نقدم حلولاً متطورة لمشاريع الهندسة المدنية من التصميم الإنشائي إلى الأدوات الرقمية.'),
        'Besoin d\'aide ?' => array('en' => 'Need help?', 'ar' => 'هل تحتاج مساعدة؟'),
        'Contactez-nous pour plus d\'informations sur ce service.' => array('en' => 'Contact us for more information about this service.', 'ar' => 'اتصل بنا لمزيد من المعلومات حول هذه الخدمة.'),
        'Nous contacter' => array('en' => 'Contact Us', 'ar' => 'اتصل بنا'),
        'Lire la suite' => array('en' => 'Read More', 'ar' => 'اقرأ المزيد'),
        'Service' => array('en' => 'Service', 'ar' => 'الخدمة'),

        // ===== PAGE CONTACT =====
        'Contactez-nous' => array('en' => 'Contact Us', 'ar' => 'اتصل بنا'),
        'N\'hésitez pas à nous contacter' => array('en' => "Don't hesitate to contact us", 'ar' => 'لا تتردد في الاتصال بنا'),
        'Une question, un projet, une demande de devis ? Contactez-nous et notre équipe vous répondra dans les plus brefs délais.' => array('en' => 'A question, a project, a quote request? Contact us and our team will respond promptly.', 'ar' => 'سؤال، مشروع، طلب عرض سعر؟ اتصل بنا وسيرد فريقنا قريباً.'),
        'Sujet' => array('en' => 'Subject', 'ar' => 'الموضوع'),
        'Votre message' => array('en' => 'Your message', 'ar' => 'رسالتك'),
        'Message' => array('en' => 'Message', 'ar' => 'الرسالة'),
        'Envoyer le message' => array('en' => 'Send Message', 'ar' => 'إرسال الرسالة'),
        'Notre Emplacement' => array('en' => 'Our Location', 'ar' => 'موقعنا'),

        // ===== SINGLE PROJECT =====
        'Détails du Projet' => array('en' => 'Project Details', 'ar' => 'تفاصيل المشروع'),
        'Informations' => array('en' => 'Information', 'ar' => 'معلومات'),
        'Date :' => array('en' => 'Date:', 'ar' => 'التاريخ:'),
        'Catégorie :' => array('en' => 'Category:', 'ar' => 'التصنيف:'),
        'Non classé' => array('en' => 'Uncategorized', 'ar' => 'غير مصنف'),
        'Retour aux projets' => array('en' => 'Back to projects', 'ar' => 'العودة إلى المشاريع'),

        // ===== SEARCH =====
        'Rechercher...' => array('en' => 'Search...', 'ar' => 'بحث...'),
        'Recherche' => array('en' => 'Search', 'ar' => 'بحث'),
        'Pages' => array('en' => 'Pages', 'ar' => 'الصفحات'),
        'Nos missions' => array('en' => 'Our Missions', 'ar' => 'مهامنا'),

        // ===== FOOTER =====
        '11 Rue Dayet Aoua, Agdal, Rabat' => array('en' => '11 Dayet Aoua Street, Agdal, Rabat', 'ar' => '11 شارع دايت عوا، أكدال، الرباط'),
        'Informations de Contact' => array('en' => 'Contact Information', 'ar' => 'معلومات الاتصال'),
        'Liens Rapides' => array('en' => 'Quick Links', 'ar' => 'روابط سريعة'),
        'Horaires d\'Ouverture' => array('en' => 'Opening Hours', 'ar' => 'ساعات العمل'),
        'Lundi - Vendredi : 09h00 - 18h00' => array('en' => 'Monday - Friday: 09:00 AM - 06:00 PM', 'ar' => 'الإثنين - الجمعة: 09:00 - 18:00'),
        'Samedi : 09h00 - 12h00' => array('en' => 'Saturday: 09:00 AM - 12:00 PM', 'ar' => 'السبت: 09:00 - 12:00'),
        'Dimanche : Fermé' => array('en' => 'Sunday: Closed', 'ar' => 'الأحد: مغلق'),
        'Tous droits réservés.' => array('en' => 'All rights reserved.', 'ar' => 'جميع الحقوق محفوظة.'),
        'Développé par' => array('en' => 'Developed by', 'ar' => 'طور بواسطة'),
        'Bureau d\'études d\'ingénierie et de solutions numériques. Nous façonnons le futur de la construction.' => array('en' => 'Engineering and digital solutions firm. We shape the future of construction.', 'ar' => 'مكتب دراسات هندسية وحلول رقمية. نحن نشكل مستقبل البناء.'),
        
        // ===== ADDED TRANSLATIONS (Hero, Footer, 404, Blog, etc.) =====
        'Bureau d\'études BTP' => array('en' => 'Civil Engineering Firm', 'ar' => 'مكتب دراسات الهندسة المدنية (BTP)'),
        'Découvrir' => array('en' => 'Discover', 'ar' => 'اكتشف'),
        '24/7' => array('en' => '24/7', 'ar' => '24/7'),
        'Ils nous font confiance' => array('en' => 'They Trust Us', 'ar' => 'شركاؤنا'),
        'Nos Références' => array('en' => 'Our References', 'ar' => 'مراجعنا'),
        'Liens rapides' => array('en' => 'Quick Links', 'ar' => 'روابط سريعة'),
        'Galerie' => array('en' => 'Gallery', 'ar' => 'معرض الصور'),
        'Conçu par' => array('en' => 'Designed by', 'ar' => 'تصميم'),
        'Assistance au Maître d\'Ouvrage, MOD et Maître d\'œuvre' => array('en' => 'Assistance to Project Owner and Project Management', 'ar' => 'المساعدة لصاحب المشروع وإدارة المشاريع'),
        'Gloservices INGENIERIE adapte ses prestations aux demandes et aux exigences des clients' => array('en' => 'Gloservices INGENIERIE adapts its services to the requests and requirements of clients', 'ar' => 'تكيّف غلوسيرفسيس الهندسية خدماتها وفقًا لطلبات ومتطلبات العملاء'),
        '404' => array('en' => '404', 'ar' => '404'),
        'Page non trouvée' => array('en' => 'Page Not Found', 'ar' => 'الصفحة غير موجودة'),
        'Désolé, la page que vous recherchez n\'existe pas ou a été déplacée.' => array('en' => 'Sorry, the page you are looking for does not exist or has been moved.', 'ar' => 'عذرًا، الصفحة التي تبحث عنها غير موجودة أو تم نقلها.'),
        'Retour à l\'accueil' => array('en' => 'Back to Home', 'ar' => 'العودة إلى الرئيسية'),
        'Blog' => array('en' => 'Blog', 'ar' => 'المدونة'),
        '&laquo; Précédent' => array('en' => '&laquo; Previous', 'ar' => '&laquo; السابق'),
        'Suivant &raquo;' => array('en' => 'Next &raquo;', 'ar' => 'التالي &raquo;'),
        'Aucun article trouvé.' => array('en' => 'No articles found.', 'ar' => 'لم يتم العثور على أي مقالات.'),

        // ===== ABOUT & MOYENS EXTRACTED BROCHURE STRINGS =====
        'L\'ingénierie au service du développement et de la performance' => array(
            'en' => 'Engineering at the service of development and performance',
            'ar' => 'الهندسة في خدمة التنمية والأداء'
        ),
        'Créé en 2018, GLOBUILD SARL est un bureau d\'études techniques et d\'ingénierie intervenant dans les secteurs des infrastructures, des ouvrages d\'art, du bâtiment, des aménagements urbains et des réseaux divers. Le bureau assure des missions d\'études, de maîtrise d\'œuvre, d\'assistance à maîtrise d\'ouvrage et d\'ordonnancement, pilotage et coordination pour le compte de maîtres d\'ouvrage publics et privés.' => array(
            'en' => 'Created in 2018, GLOBUILD SARL is a technical study and engineering office operating in the sectors of infrastructure, civil engineering structures, buildings, urban development, and utilities. The office performs design studies, construction supervision, project owner assistance, and scheduling, coordination, and management for public and private clients.',
            'ar' => 'تأسس مكتب GLOBUILD SARL في عام 2018، وهو مكتب دراسات تقنية وهندسية يعمل في قطاعات البنية التحتية، المنشآت الفنية، المباني، التهيئة الحضرية والشبكات المختلفة. يقدم المكتب مهام الدراسات، وإدارة المشاريع، ومساعدة صاحب المشروع، والجدولة والتنسيق والإدارة لصالح عملاء القطاعين العام والخاص.'
        ),
        'Son organisation repose sur une approche intégrée permettant de couvrir l\'ensemble du cycle de vie des projets, depuis les études préliminaires et les investigations techniques jusqu\'au suivi de l\'exécution des travaux et aux opérations de réception. Cette organisation garantit la maîtrise des contraintes techniques, financières et calendaires ainsi que la conformité des ouvrages aux exigences réglementaires et normatives applicables.' => array(
            'en' => 'Its organization is based on an integrated approach covering the entire project lifecycle, from preliminary studies and technical investigations to work supervision and final acceptance. This organization guarantees control of technical, financial, and schedule constraints, as well as compliance of structures with applicable regulatory and normative requirements.',
            'ar' => 'يعتمد تنظيمه على نهج متكامل يغطي دورة حياة المشاريع بأكملها، بدءًا من الدراسات الأولية والتحقيقات التقنية حتى متابعة تنفيذ الأشغال وعمليات الاستلام. يضمن هذا التنظيم التحكم في القيود التقنية والمالية والزمنية بالإضافة إلى مطابقة المنشآت للمتطلبات التنظيمية والمعيارية المعمول بها.'
        ),
        'Infrastructures' => array(
            'en' => 'Infrastructures',
            'ar' => 'البنية التحتية'
        ),
        'Ouvrages d\'art' => array(
            'en' => 'Art Structures',
            'ar' => 'المنشآت الفنية'
        ),
        'Bâtiments' => array(
            'en' => 'Buildings',
            'ar' => 'المباني'
        ),
        'Aménagements & VRD' => array(
            'en' => 'Developments & Utilities',
            'ar' => 'التهيئة والشبكات (VRD)'
        ),
        'À propos de GLOBUILD' => array(
            'en' => 'About GLOBUILD',
            'ar' => 'حول غلوبيلد'
        ),
        'NOTRE APPROCHE' => array(
            'en' => 'OUR APPROACH',
            'ar' => 'نهجنا'
        ),
        'Une prise en charge globale et intégrée' => array(
            'en' => 'A comprehensive and integrated management',
            'ar' => 'تكفل كامل ومتكامل'
        ),
        'Concevoir aujourd\'hui les infrastructures de demain à travers un cycle complet de suivi.' => array(
            'en' => 'Designing today the infrastructures of tomorrow through a complete monitoring cycle.',
            'ar' => 'تصميم بنية الغد التحتية اليوم من خلال دورة متابعة كاملة.'
        ),
        'ÉTUDES' => array(
            'en' => 'STUDIES',
            'ar' => 'الدراسات'
        ),
        'Analyse, faisabilité et conception' => array(
            'en' => 'Analysis, feasibility and design',
            'ar' => 'التحليل، الجدوى والتصميم'
        ),
        'CONCEPTION' => array(
            'en' => 'DESIGN',
            'ar' => 'التصميم'
        ),
        'Avant-projets et études détaillées' => array(
            'en' => 'Preliminary and detailed designs',
            'ar' => 'التصاميم الأولية والتفصيلية'
        ),
        'RÉALISATION' => array(
            'en' => 'REALIZATION',
            'ar' => 'الإنجاز'
        ),
        'Assistance technique et suivi de chantier' => array(
            'en' => 'Technical assistance and site supervision',
            'ar' => 'المساعدة التقنية ومتابعة الورش'
        ),
        'RÉCEPTION' => array(
            'en' => 'ACCEPTANCE',
            'ar' => 'الاستلام'
        ),
        'Contrôle, essais et mise en service' => array(
            'en' => 'Control, testing and commissioning',
            'ar' => 'الرقابة، الاختبارات والتشغيل'
        ),
        'NOTRE ENGAGEMENT' => array(
            'en' => 'OUR COMMITMENT',
            'ar' => 'التزامنا'
        ),
        'Garantir la performance et la durabilité' => array(
            'en' => 'Guaranteeing performance and durability',
            'ar' => 'ضمان الأداء والاستدامة'
        ),
        'Excellence technique et innovation' => array(
            'en' => 'Technical excellence and innovation',
            'ar' => 'التميز التقني والابتكار'
        ),
        'Utilisation des dernières technologies et méthodes d\'ingénierie pour des ouvrages durables.' => array(
            'en' => 'Use of the latest technologies and engineering methods for durable structures.',
            'ar' => 'استخدام أحدث التقنيات وأساليب الهندسة لإنشاء منشآت متينة.'
        ),
        'Respect des délais et maîtrise des coûts' => array(
            'en' => 'Respecting deadlines and cost control',
            'ar' => 'احترام الآجال والتحكم في التكاليف'
        ),
        'Un suivi rigoureux du planning et du budget pour garantir la rentabilité de vos investissements.' => array(
            'en' => 'Rigorous scheduling and budget tracking to guarantee the profitability of your investments.',
            'ar' => 'متابعة دقيقة للجدول الزمني والميزانية لضمان ربحية استثماراتكم.'
        ),
        'Accompagnement de la conception à la réception' => array(
            'en' => 'Support from design to acceptance',
            'ar' => 'المرافقة من التصميم إلى الاستلام'
        ),
        'Un interlocuteur unique à chaque phase de votre projet pour une coordination parfaite.' => array(
            'en' => 'A single contact point at each phase of your project for perfect coordination.',
            'ar' => 'مخاطب واحد في كل مرحلة من مشروعكم لتنسيق مثالي.'
        ),
        'Qualité, sécurité et durabilité' => array(
            'en' => 'Quality, safety and durability',
            'ar' => 'الجودة، السلامة والاستدامة'
        ),
        'Conformité absolue aux normes réglementaires avec une approche éco-responsable intégrée.' => array(
            'en' => 'Absolute compliance with regulatory standards with an integrated eco-friendly approach.',
            'ar' => 'الامتثال المطلق للمعايير التنظيمية مع نهج متكامل صديق للبيئة.'
        ),
        'RESSOURCES & LOGISTIQUE' => array(
            'en' => 'RESOURCES & LOGISTICS',
            'ar' => 'الموارد واللوجستيات'
        ),
        'Des moyens matériels et numériques à la pointe de l\'ingénierie' => array(
            'en' => 'Cutting-edge material and digital resources in engineering',
            'ar' => 'موارد مادية ورقمية متطورة في مجال الهندسة'
        ),
        'Afin de garantir la qualité et la fiabilité de ses prestations, GLOBUILD dispose d\'un ensemble de moyens matériels et numériques adaptés aux exigences des missions d\'études et de suivi des travaux. Le bureau est équipé de postes de travail fixes et portables dédiés aux activités de conception, de modélisation, de dimensionnement et de production graphique ainsi que de moyens d\'impression et de reprographie permettant l\'édition des dossiers techniques et plans d\'exécution.' => array(
            'en' => 'To guarantee the quality and reliability of its services, GLOBUILD has a set of material and digital resources adapted to the requirements of study missions and construction supervision. The office is equipped with fixed and laptop computer workstations dedicated to design, modeling, sizing, and graphic production, as well as printing and reprography equipment for publishing technical files and execution plans.',
            'ar' => 'من أجل ضمان جودة وموثوقية خدماته، يتوفر مكتب GLOBUILD على مجموعة من الوسائل المادية والرقمية المتوافقة مع متطلبات مهام الدراسات ومتابعة الأشغال. تم تجهيز المكتب بمحطات عمل ثابتة ومحمولة مخصصة لأنشطة التصميم والنمذجة والقياس والإنتاج الرسومي بالإضافة إلى وسائل الطباعة والنسخ لإنتاج الملفات التقنية ومخططات التنفيذ.'
        ),
        'Moyens Logistiques' => array(
            'en' => 'Logistical Means',
            'ar' => 'الوسائل اللوجستية'
        ),
        'La mobilité de nos équipes d\'études et de maîtrise d\'œuvre sur le terrain est au cœur de notre réactivité.' => array(
            'en' => 'The mobility of our study and construction supervision teams in the field is at the heart of our responsiveness.',
            'ar' => 'تنقل فرق الدراسة ومتابعة الأشغال في الميدان هو جوهر استجابتنا.'
        ),
        'Parc de véhicules de service' => array(
            'en' => 'Service vehicles fleet',
            'ar' => 'أسطول مركبات الخدمة'
        ),
        'GLOBUILD dispose des moyens logistiques nécessaires pour assurer les déplacements des équipes, les visites de terrain et le suivi des chantiers. Notre flotte permanente est adaptée aux déplacements routiers et chantiers d\'envergure.' => array(
            'en' => 'GLOBUILD has the logistical means to ensure team travel, site visits and work supervision. Our permanent fleet is adapted to roads and large-scale projects.',
            'ar' => 'غلوبيلد تتوفر على الوسائل اللوجستية اللازمة لضمان تنقلات الفرق وزيارات الميدان ومتابعة الأشغال. أسطولنا الدائم متوافق مع الطرق والمشاريع الكبرى.'
        ),
        '4 Véhicules Permanents :' => array(
            'en' => '4 Permanent Vehicles:',
            'ar' => '4 مركبات دائمة:'
        ),
        'Audi Q5, Jeep Renegade, VW Passat, Dacia Logan.' => array(
            'en' => 'Audi Q5, Jeep Renegade, VW Passat, Dacia Logan.',
            'ar' => 'أودي Q5، جيب رينيجيد، فولكس فاجن باسات، داتشيا لوغان.'
        ),
        'Véhicules d\'appoint :' => array(
            'en' => 'Backup vehicles:',
            'ar' => 'مركبات إضافية:'
        ),
        'Mobilité renforcée selon la charge des opérations.' => array(
            'en' => 'Enhanced mobility according to operation loads.',
            'ar' => 'تنقل معزز حسب ضغط العمليات.'
        ),
        'Bureau équipé en open space' => array(
            'en' => 'Fully equipped open-space office',
            'ar' => 'مكتب مجهز بفضاء مفتوح'
        ),
        'Nos locaux sont aménagés pour accueillir les activités de conception, de coordination et de gestion des projets dans des conditions optimales d\'ergonomie et de collaboration.' => array(
            'en' => 'Our offices are layout to accommodate design, coordination and project management under optimal collaboration and ergonomic conditions.',
            'ar' => 'مكاتبنا مهيأة لاستيعاب أنشطة التصميم والتنسيق وإدارة المشاريع في ظروف تعاونية وصحية مثالية.'
        ),
        'Adresse :' => array(
            'en' => 'Address:',
            'ar' => 'العنوان:'
        ),
        'Espace de travail :' => array(
            'en' => 'Workspace:',
            'ar' => 'فضاء العمل:'
        ),
        'Aménagement moderne propice à la synergie d\'équipe et aux réunions techniques.' => array(
            'en' => 'Modern layouts promoting team synergy and technical meetings.',
            'ar' => 'تصميم حديث يعزز العمل المشترك بين الفريق والاجتماعات التقنية.'
        ),
        'Moyens Informatiques' => array(
            'en' => 'IT Resources',
            'ar' => 'الوسائل المعلوماتية'
        ),
        'Une infrastructure informatique puissante et dédiée à la production graphique rapide et aux calculs complexes.' => array(
            'en' => 'A powerful IT infrastructure dedicated to fast graphic production and complex structural calculations.',
            'ar' => 'بنية تحتية معلوماتية قوية مخصصة للإنتاج الرسومي السريع والحسابات المعقدة.'
        ),
        'Stations de Travail Fixes' => array(
            'en' => 'Fixed Workstations',
            'ar' => 'محطات عمل ثابتة'
        ),
        'Ordinateurs Portables' => array(
            'en' => 'Laptops',
            'ar' => 'أجهزة كمبيوتر محمولة'
        ),
        'Traceur Grand Format' => array(
            'en' => 'Large Format Plotter',
            'ar' => 'طابعة خرائط كبيرة (Traceur)'
        ),
        'Imprimantes Réseau' => array(
            'en' => 'Network Printers',
            'ar' => 'طابعات شبكية'
        ),
        'Logiciels & Outils Techniques' => array(
            'en' => 'Software & Technical Tools',
            'ar' => 'البرامج والأدوات التقنية'
        ),
        'Les études sont réalisées à l\'aide de logiciels professionnels sous licence pour assurer une précision optimale et la conformité BIM.' => array(
            'en' => 'Studies are performed using professional licensed software to ensure optimal accuracy and BIM compliance.',
            'ar' => 'تنجز الدراسات باستخدام برمجيات مهنية مرخصة لضمان الدقة المثالية والتوافق مع الـ BIM.'
        ),
        'Cette plateforme technique permet la production de plans, notes de calcul, métrés, estimations, plannings et rapports de suivi conformes aux exigences des maîtres d\'ouvrage et aux standards de l\'ingénierie moderne.' => array(
            'en' => 'This technical platform enables the production of plans, calculations, quantity surveys, estimates, planning and progress reports in compliance with client requirements and modern engineering standards.',
            'ar' => 'تتيح هذه المنصة التقنية إنتاج المخططات، دفاتر الحسابات، الكشوف، التقديرات، الجداول الزمنية وتقارير المتابعة المطابقة لمتطلبات أرباب العمل ومعايير الهندسة الحديثة.'
        ),
    );

    $result = array();
    foreach ($all as $key => $trans) {
        if ($lang === 'fr') {
            if (isset($trans['fr'])) {
                $result[$key] = $trans['fr'];
            }
        } else {
            if (isset($trans[$lang])) {
                $result[$key] = $trans[$lang];
            }
        }
    }
    return $result;
}

/**
 * Translate a string from French to the current language.
 */
function gloservices_translate($text) {
    static $translations = null;
    static $current_lang = null;

    $lang = 'fr';
    if (function_exists('pll_current_language')) {
        $lang = pll_current_language('slug') ?: 'fr';
    }

    if (empty($text)) {
        return $text;
    }

    if ($translations === null || $current_lang !== $lang) {
        $current_lang = $lang;
        $translations = gloservices_get_translations($lang);
    }

    if (isset($translations[$text])) {
        return $translations[$text];
    }

    return $text;
}

/**
 * Hook into WordPress gettext filter for automatic translation
 */
add_filter('gettext', function($translated, $original, $domain) {
    if ($domain === 'gloservices') {
        $translated = gloservices_translate($original);
    }
    return $translated;
}, 10, 3);