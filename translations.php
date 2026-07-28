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
        
        // ===== CAROUSEL SLIDE 2 =====
        'TECHNOLOGIES INNOVANTES' => array('en' => 'INNOVATIVE TECHNOLOGIES', 'ar' => 'تقنيات مبتكرة'),
        'POUR LE BTP' => array('en' => 'FOR CONSTRUCTION', 'ar' => 'للإنشاءات'),
        'Logiciels de modélisation BIM, outils de gestion de projet et plateformes de suivi en temps réel pour optimiser vos chantiers.' => array('en' => 'BIM modeling software, project management tools and real-time monitoring platforms to optimize your construction sites.', 'ar' => 'برامج نمذجة BIM، أدوات إدارة المشاريع ومنصات المتابعة الفورية لتحسين مواقع البناء.'),
        
        // ===== CAROUSEL SLIDE 3 =====
        'EXPERTISE & SAVOIR-FAIRE' => array('en' => 'EXPERTISE & KNOW-HOW', 'ar' => 'خبرة واحترافية'),
        'DEPUIS 2010' => array('en' => 'SINCE 2010', 'ar' => 'منذ 2010'),
        'Plus d\'une décennie d\'expertise en génie civil, structures, VRD et gestion de projet pour des réalisations d\'excellence.' => array('en' => 'Over a decade of expertise in civil engineering, structures, utilities and project management for outstanding achievements.', 'ar' => 'أكثر من عقد من الخبرة في الهندسة المدنية والهياكل والمرافق وإدارة المشاريع لإنجازات متميزة.'),

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
        'RÉALISATIONS & RÉFÉRENCES' => array('en' => 'PROJECTS & REFERENCES', 'ar' => 'الإنجازات والمراجع'),
        'NOS PARTENAIRES' => array('en' => 'OUR PARTNERS', 'ar' => 'شركاؤنا'),
        'Ils nous font confiance pour leurs projets. Nos partenaires s\'appuient sur notre expertise technique pour concrétiser leurs idées. Ensemble, nous formons une équipe soudée, engagée dans la réussite de chaque chantier. Découvrez ceux qui choisissent de travailler avec nous !' => array(
            'en' => 'They trust us for their projects. Our partners rely on our technical expertise to make their ideas a reality. Together, we form a cohesive team dedicated to the success of every site. Discover those who choose to work with us!',
            'ar' => 'إنهم يثقون بنا في مشاريعهم. يعتمد شركاؤنا على خبرتنا الفنية لتحقيق أفكارهم. معاً، نُشكل فريقاً متماسكاً مكرساً لنجاح كل مشروع. اكتشف من يختارون العمل معنا!'
        ),
        'Nos Projets' => array('en' => 'Our Projects', 'ar' => 'مشاريعنا'),
        'Des projets d\'envergure menés avec rigueur et excellence' => array('en' => 'Major projects executed with rigor and excellence', 'ar' => 'مشاريع كبرى تم تنفيذها بدقة وتميز'),
        'Découvrez nos références majeures en génie civil, infrastructures routières, ouvrages d\'art et solutions numériques BTP.' => array('en' => 'Discover our major references in civil engineering, road infrastructure, engineering structures, and digital construction solutions.', 'ar' => 'اكتشف أبرز مراجعنا في الهندسة المدنية، البنية التحتية الطرقية، المنشآت الفنية والحلول الرقمية للبناء.'),
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
        
        // ===== NOTRE APPROCHE =====
        'Notre Approche' => array('en' => 'Our Approach', 'ar' => 'نهجنا'),
        'Une méthodologie rigoureuse pour vos projets' => array('en' => 'A Rigorous Methodology for Your Projects', 'ar' => 'منهجية صارمة لمشاريعكم'),
        '1/' => array('en' => '1/', 'ar' => '١/'),
        '2/' => array('en' => '2/', 'ar' => '٢/'),
        '3/' => array('en' => '3/', 'ar' => '٣/'),
        '4/' => array('en' => '4/', 'ar' => '٤/'),
        'ÉTUDES & INVESTIGATIONS' => array('en' => 'STUDIES & INVESTIGATIONS', 'ar' => 'الدراسات والتحقيقات'),
        'Analyse approfondie du site, études de faisabilité techniques et environnementales, et investigations géotechniques préalables.' => array('en' => 'In-depth site analysis, technical and environmental feasibility studies, and prior geotechnical investigations.', 'ar' => 'تحليل عميق للموقع، دراسات الجدوى التقنية والبيئية، والتحقيقات الجيوتقنية الأولية.'),
        'CONCEPTION TECHNIQUE' => array('en' => 'TECHNICAL DESIGN', 'ar' => 'التصميم التقني'),
        'Élaboration des avant-projets (APS/APD), calculs de structures détaillés, métrés estimatifs et établissement des dossiers de consultation.' => array('en' => 'Preparation of preliminary designs (APS/APD), detailed structural calculations, quantity estimates, and tender documentation.', 'ar' => 'إعداد التصاميم الأولية والتفصيلية، الحسابات الهيكلية الدقيقة، حساب الكميات وإعداد ملفات الاستشارة.'),
        'RÉALISATION & SUIVI' => array('en' => 'EXECUTION & MONITORING', 'ar' => 'التنفيذ والمتابعة'),
        'Assistance technique au maître d\'ouvrage, suivi rigoureux de l\'exécution des travaux de construction et coordination de chantier.' => array('en' => 'Technical assistance to project owner, rigorous monitoring of construction works execution, and site coordination.', 'ar' => 'المساعدة التقنية لصاحب المشروع، المتابعة الدقيقة لتنفيذ الأشغال وتنسيق الموقع.'),
        'RÉCEPTION DES OUVRAGES' => array('en' => 'PROJECT RECEPTION', 'ar' => 'استلام المنشآت'),
        'Contrôle final de conformité réglementaire, assistance lors des opérations préalables à la réception et mise en service des installations.' => array('en' => 'Final regulatory compliance check, assistance during pre-reception operations, and commissioning of facilities.', 'ar' => 'المراقبة النهائية للمطابقة التنظيمية، المساعدة في عمليات الاستلام والأشغال والتسليم.'),
        'Personnalisé' => array('en' => 'Customized', 'ar' => 'مخصص'),
        'Réactif' => array('en' => 'Responsive', 'ar' => 'سريع الاستجابة'),
        'Qualité' => array('en' => 'Quality', 'ar' => 'الجودة'),
        'Optimisation' => array('en' => 'Optimization', 'ar' => 'التحسين'),

        'Nos Engagements :' => array('en' => 'Our Commitments:', 'ar' => 'التزاماتنا:'),
        'Nos Engagements' => array('en' => 'Our Commitments', 'ar' => 'التزاماتنا'),
        'Garantir la performance, la sécurité et la durabilité' => array('en' => 'Ensuring Performance, Safety, and Sustainability', 'ar' => 'ضمان الأداء والأمان والاستدامة'),
        'Les piliers fondamentaux qui guident l\'ensemble de nos interventions d\'ingénierie et de conseil BTP.' => array('en' => 'The fundamental pillars guiding all our engineering and construction consulting services.', 'ar' => 'الركائز الأساسية التي توجه جميع تدخلاتنا الهندسية والاستشارية في مجال البناء.'),
        'Expertise Pluridisciplinaire' => array('en' => 'Multidisciplinary Expertise', 'ar' => 'خبرة متعددة التخصصات'),
        'GLOBUILD combine des compétences variées en structures, VRD et bâtiment pour offrir des solutions complètes et pérennes.' => array('en' => 'GLOBUILD combines diverse skills in structures, utilities, and building to offer comprehensive and sustainable solutions.', 'ar' => 'تجمع غلوسيرفسيس بين مهارات متنوعة في الهياكل والطرق والمباني لتقديم حلول متكاملة ومستدامة.'),
        'Innovation & Technologie' => array('en' => 'Innovation & Technology', 'ar' => 'الابتكار والتكنولوجيا'),
        'Modélisation 3D avancée, outils de calcul de pointe et audits digitaux pour optimiser chaque phase de la conception.' => array('en' => 'Advanced 3D modeling, cutting-edge calculation tools, and digital audits to optimize every design phase.', 'ar' => 'نمذجة ثلاثية الأبعاد متقدمة وأدوات حسابية متطورة وتدقيق رقمي لتحسين كل مرحلة من مراحل التصميم.'),
        'Respect des Délais & Budget' => array('en' => 'Deadline & Budget Compliance', 'ar' => 'احترام المواعيد والميزانية'),
        'Planification rigoureuse et suivi continu pour assurer la livraison de vos ouvrages dans le strict respect de vos exigences.' => array('en' => 'Rigor plan and continuous monitoring to ensure the delivery of your projects in strict compliance with your requirements.', 'ar' => 'تخطيط دقيق ومتابعة مستمرة لضمان تسليم منشآتك مع الالتزام التام بمتطلباتك.'),
        'Accompagnement & Éco-Conception' => array('en' => 'Tailored Support & Eco-Design', 'ar' => 'المواكبة والتصميم البيئي'),
        'Présence proactive à vos côtés de la faisabilité au parfait achèvement, engagés envers la durabilité environnementale.' => array('en' => 'Proactive support by your side from feasibility to completion, committed to environmental sustainability.', 'ar' => 'تواجد استباقي بجانبكم من الجدوى حتى الإنجاز التام، مع الالتزام بالاستدامة البيئية.'),
        'Optimiser les coûts et améliorer la qualité' => array('en' => 'Optimize costs and improve quality', 'ar' => 'تحسين التكاليف ورفع الجودة'),
        'Offrir un service personnalisé' => array('en' => 'Offer personalized service', 'ar' => 'تقديم خدمة مخصصة'),
        'Respecter les délais' => array('en' => 'Respect deadlines', 'ar' => 'احترام المواعيد النهائية'),
        'Nos Valeurs :' => array('en' => 'Our Values:', 'ar' => 'قيمنا:'),
        'Efficacité' => array('en' => 'Efficiency', 'ar' => 'الكفاءة'),
        'Créativité' => array('en' => 'Creativity', 'ar' => 'الإبداع'),
        'Transparence' => array('en' => 'Transparency', 'ar' => 'الشفافية'),

        // ===== TÉMOIGNAGES / TESTIMONIALS =====
        'Témoignages' => array('en' => 'Testimonials', 'ar' => 'آراء العملاء'),
        'Ce que disent nos partenaires' => array('en' => 'What Our Partners Say', 'ar' => 'ما يقوله شركاؤنا'),
        'Promoteur immobilier' => array('en' => 'Real Estate Developer', 'ar' => 'منعش عقاري'),
        'Chef de projet industriel' => array('en' => 'Industrial Project Manager', 'ar' => 'مدير مشروع صنعتی'),
        'Directeur Technique' => array('en' => 'Technical Director', 'ar' => 'مدير تقني'),
        'Partenaire' => array('en' => 'Partner', 'ar' => 'شريك'),
        'GLOBUILD a su transformer notre vision en réalité avec une précision incroyable. Leur expertise pluridisciplinaire et leur réactivité ont fait toute la différence. Un partenaire de confiance pour des projets complexes !' => array('en' => 'GLOBUILD successfully transformed our vision into reality with incredible precision. Their multidisciplinary expertise and responsiveness made all the difference. A trusted partner for complex projects!', 'ar' => 'تمكنت غلوسيرفسيس من تحويل رؤيتنا إلى واقع بدقة مذهلة. خبرتهم متعددة التخصصات واستجابتهم السريعة أحدثت كل الفارق. شريك موثوق للمشاريع المعقدة!'),
        'De l\'étude d\'avant-projet à l\'assistance technique sur le chantier, le professionnalisme de GLOBUILD a garanti un strict respect de nos contraintes budgétaires et calendaires.' => array('en' => 'From pre-project study to technical assistance on site, GLOBUILD professionalism guaranteed strict adherence to our budget and schedule constraints.', 'ar' => 'من دراسة ما قبل المشروع إلى المساعدة التقنية في الموقع، ضمنت احترافية غلوسيرفسيس الاحترام التام لقيودنا المالية والزمنية.'),
        'Un accompagnement sur mesure exceptionnel. Leur expertise multidisciplinaire intégrée permet de résoudre efficacement les interfaces techniques complexes entre voirie et réseaux.' => array('en' => 'Exceptional tailored support. Their integrated multidisciplinary expertise effectively resolves complex technical interfaces between roads and networks.', 'ar' => 'مواكبة مخصصة واستثنائية. تتيح خبرتهم متعددة التخصصات حل التوافقات التقنية المعقدة بين الطرق والشبكات بفعالية.'),

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
        'Téléphone' => array('en' => 'Phone', 'ar' => 'الهاتف'),
        'E-mail' => array('en' => 'Email', 'ar' => 'البريد الإلكتروني'),
        'Localisation' => array('en' => 'Location', 'ar' => 'الموقع'),
        'Appelez-nous' => array('en' => 'Call us', 'ar' => 'اتصل بنا'),
        'Écrivez-nous' => array('en' => 'Write to us', 'ar' => 'راسلنا'),
        'Rendez-nous visite' => array('en' => 'Visit us', 'ar' => 'زورونا'),

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
        'Infrastructures & VRD' => array(
            'en' => 'Infrastructure & Utilities (VRD)',
            'ar' => 'البنية التحتية والشبكات المختلفة (VRD)'
        ),
        'Maîtrise d\'œuvre, études routières, réseaux divers (assainissement, eau potable, électricité).' => array(
            'en' => 'Project management, road studies, diverse networks (sanitation, drinking water, electricity).',
            'ar' => 'إدارة المشاريع، دراسات الطرق، الشبكات المختلفة (التطهير، الماء الشروب، الكهرباء).'
        ),
        'Bâtiments & Génie Civil' => array(
            'en' => 'Buildings & Civil Engineering',
            'ar' => 'المباني والهندسة المدنية'
        ),
        'Études de structures, béton armé, charpente métallique, fluides et coordination technique.' => array(
            'en' => 'Structural engineering, reinforced concrete, steel frames, fluids and technical coordination.',
            'ar' => 'دراسات الهياكل، الخرسانة المسلحة، الهياكل المعدنية، السوائل والتنسيق التقني.'
        ),
        'Créé en 2018,' => array(
            'en' => 'Established in 2018,',
            'ar' => 'تأسست في عام 2018،'
        ),
        'GLOBUILD SARL est un bureau d\'études techniques et d\'ingénierie intervenant dans les secteurs des infrastructures, des ouvrages d\'art, du bâtiment, des aménagements urbains et des réseaux divers.' => array(
            'en' => 'GLOBUILD SARL is a technical engineering consultancy firm operating in the infrastructure, art structures, building, urban planning, and diverse networks sectors.',
            'ar' => 'شركة غلوبيلد ذ.م.م (GLOBUILD SARL) هي مكتب دراسات تقنية وهندسة يتدخل في قطاعات البنية التحتية، المنشآت الفنية، المباني، التهيئة الحضرية والشبكات المختلفة.'
        ),
        'Son organisation repose sur une approche intégrée permettant de couvrir l\'ensemble du cycle de vie des projets, depuis les études préliminaires et les investigations techniques jusqu\'au suivi de l\'exécution des travaux et aux opérations de réception.' => array(
            'en' => 'Its structure relies on an integrated approach covering the entire project life cycle, from preliminary studies and technical investigations to construction monitoring and handover operations.',
            'ar' => 'تعتمد هيكلتها على نهج متكامل يغطي دورة حياة المشاريع بالكامل، بدءًا من الدراسات الأولية والتحريات التقنية إلى متابعة تنفيذ الأشغال وعمليات التسليم.'
        ),
        'Chez GLOBUILD, nous mettons notre expertise au service de solutions durables et innovantes, pensées pour répondre aux exigences d\'aujourd\'hui tout en anticipant celles de demain.' => array(
            'en' => 'At GLOBUILD, we put our expertise at the service of sustainable and innovative solutions, designed to meet today\'s requirements while anticipating tomorrow\'s.',
            'ar' => 'في غلوبيلد، نضع خبرتنا في خدمة حلول مستدامة ومبتكرة، مصممة لتلبية متطلبات اليوم وتوقع متطلبات الغد.'
        ),
        'L\'ingénierie au service du' => array(
            'en' => 'Engineering at the service of',
            'ar' => 'الهندسة في خدمة'
        ),
        'développement' => array(
            'en' => 'development',
            'ar' => 'التنمية'
        ),
        'et de la' => array(
            'en' => 'and',
            'ar' => 'و'
        ),
        'performance' => array(
            'en' => 'performance',
            'ar' => 'الأداء'
        ),
        'Notre signature est la conception sur mesure, l\'exécution rigoureuse et le suivi client pour des projets d\'infrastructures et de bâtiments durables.' => array(
            'en' => 'Our signature is tailor-made design, rigorous execution and client follow-up for sustainable infrastructure and building projects.',
            'ar' => 'بصمتنا هي التصميم المصمم خصيصًا، التنفيذ الصارم ومتابعة العملاء لمشاريع البنية التحتية والمباني المستدامة.'
        ),
        'Notre Approche' => array(
            'en' => 'Our Approach',
            'ar' => 'منهجيتنا'
        ),
        '1/' => array(
            'en' => '1/',
            'ar' => '1/'
        ),
        '2/' => array(
            'en' => '2/',
            'ar' => '2/'
        ),
        '3/' => array(
            'en' => '3/',
            'ar' => '3/'
        ),
        '4/' => array(
            'en' => '4/',
            'ar' => '4/'
        ),
        'ÉTUDES & INVESTIGATIONS' => array(
            'en' => 'STUDIES & INVESTIGATIONS',
            'ar' => 'الدراسات والتحريات'
        ),
        'Analyse approfondie du site, études de faisabilité techniques et environnementales, et investigations géotechniques préalables.' => array(
            'en' => 'In-depth site analysis, technical and environmental feasibility studies, and preliminary geotechnical investigations.',
            'ar' => 'تحليل عميق للموقع، دراسات الجدوى التقنية والبيئية، والتحريات الجيوتقنية الأولية.'
        ),
        'CONCEPTION TECHNIQUE' => array(
            'en' => 'TECHNICAL DESIGN',
            'ar' => 'التصميم التقني'
        ),
        'Élaboration des avant-projets (APS/APD), calculs de structures détaillés, métrés estimatifs et établissement des dossiers de consultation.' => array(
            'en' => 'Preparation of preliminary drafts (APS/APD), detailed structural calculations, estimated quantity surveys and preparation of consultation files.',
            'ar' => 'إعداد التصاميم الأولية (APS/APD)، حسابات الهياكل التفصيلية، كشوف التقدير وإعداد ملفات الاستشارة.'
        ),
        'RÉALISATION & SUIVI' => array(
            'en' => 'EXECUTION & MONITORING',
            'ar' => 'التنفيذ والمتابعة'
        ),
        'Assistance technique au maître d\'ouvrage, suivi rigoureux de l\'exécution des travaux de construction et coordination de chantier.' => array(
            'en' => 'Technical assistance to the owner, rigorous monitoring of construction works execution and site coordination.',
            'ar' => 'المساعدة التقنية لصاحب المشروع، المتابعة الصارمة لتنفيذ أعمال البناء وتنسيق الورش.'
        ),
        'RÉCEPTION DES OUVRAGES' => array(
            'en' => 'PROJECT HANDOVER',
            'ar' => 'تسليم المنشآت'
        ),
        'Contrôle final de conformité réglementaire, assistance lors des opérations préalables à la réception et mise en service des installations.' => array(
            'en' => 'Final regulatory compliance control, assistance during pre-handover operations and commissioning of facilities.',
            'ar' => 'الرقابة النهائية على المطابقة التنظيمية، المساعدة في العمليات السابقة للتسليم وتشغيل المنشآت.'
        ),
        'Personnalisé' => array(
            'en' => 'Customized',
            'ar' => 'مخصص'
        ),
        'Réactif' => array(
            'en' => 'Responsive',
            'ar' => 'متجاوب'
        ),
        'Qualité' => array(
            'en' => 'Quality',
            'ar' => 'الجودة'
        ),
        'Optimisation' => array(
            'en' => 'Optimization',
            'ar' => 'التحسين'
        ),
        'Témoignages' => array(
            'en' => 'Testimonials',
            'ar' => 'آراء شركائنا'
        ),
        'Ce que disent nos partenaires' => array(
            'en' => 'What Our Partners Say',
            'ar' => 'ما يقوله شركاؤنا'
        ),
        'Nous avons collaboré avec GLOBUILD pour la conception technique de notre nouveau siège administratif, et nous sommes extrêmement satisfaits de la rigueur et de la réactivité de l\'équipe d\'ingénieurs.' => array(
            'en' => 'We collaborated with GLOBUILD for the technical design of our new administrative headquarters, and we are extremely satisfied with the rigor and responsiveness of the engineering team.',
            'ar' => 'لقد تعاونا مع غلوبيلد في التصميم التقني لمقرنا الإداري الجديد، ونحن راضون للغاية عن دقة وتجاوب فريق المهندسين.'
        ),
        'Promoteur immobilier' => array(
            'en' => 'Real estate developer',
            'ar' => 'منعش عقاري'
        ),
        'De l\'étude d\'avant-projet à l\'assistance technique sur le chantier, le professionnalisme de GLOBUILD a garanti un strict respect de nos contraintes budgétaires et calendaires.' => array(
            'en' => 'From the preliminary draft study to technical assistance on site, GLOBUILD\'s professionalism guaranteed strict respect for our budgetary and scheduling constraints.',
            'ar' => 'من دراسة المشروع الأولية إلى المساعدة التقنية في الورش، ضمنت احترافية غلوبيلد الاحترام الصارم لقيودنا المالية والزمنية.'
        ),
        'Chef de projet industriel' => array(
            'en' => 'Industrial project manager',
            'ar' => 'مدير مشاريع صناعية'
        ),
        'Un accompagnement sur mesure exceptionnel. Leur expertise multidisciplinaire intégrée permet de résoudre efficacement les interfaces techniques complexes entre voirie et réseaux.' => array(
            'en' => 'Exceptional tailor-made support. Their integrated multidisciplinary expertise effectively resolves complex technical interfaces between roads and networks.',
            'ar' => 'مواكبة متميزة ومخصصة. خبرتهم المتكاملة متعددة التخصصات تسمح بحل التداخلات التقنية المعقدة بين الطرق والشبكات بشكل فعال.'
        ),
        'Directeur Technique' => array(
            'en' => 'Technical Director',
            'ar' => 'المدير التقني'
        ),
        'Ils nous font confiance' => array(
            'en' => 'They Trust Us',
            'ar' => 'يثقون بنا'
        ),
        'LES FAITS' => array(
            'en' => 'THE FACTS',
            'ar' => 'الأرقام والحقائق'
        ),
        'Nos Engagements' => array(
            'en' => 'Our Commitments',
            'ar' => 'التزاماتنا'
        ),
        'Expertise pluridisciplinaire' => array(
            'en' => 'Multidisciplinary Expertise',
            'ar' => 'خبرة متعددة التخصصات'
        ),
        'GLOBUILD combine des compétences variées pour offrir des solutions techniques complètes et intégrées.' => array(
            'en' => 'GLOBUILD combines diverse skills to deliver comprehensive and integrated technical solutions.',
            'ar' => 'تجمع غلوبيلد بين مهارات متنوعة لتقديم حلول تقنية كاملة ومتكاملة.'
        ),
        'Innovation & Technique' => array(
            'en' => 'Innovation & Technique',
            'ar' => 'الابتكار والتقنية'
        ),
        'Nous utilisons des outils et technologies modernes pour optimiser chaque phase de la conception.' => array(
            'en' => 'We use modern tools and technologies to optimize every design phase.',
            'ar' => 'نستخدم أدوات وتقنيات حديثة لتحسين كل مرحلة من مراحل التصميم.'
        ),
        'Accompagnement sur mesure' => array(
            'en' => 'Tailored Accompaniment',
            'ar' => 'مواكبة مخصصة'
        ),
        'À l\'écoute de vos besoins, nous garantissons qualité, respect des délais et maîtrise des budgets.' => array(
            'en' => 'Attentive to your needs, we guarantee quality, respect for deadlines and budget control.',
            'ar' => 'نصغي لاحتياجاتكم، ونضمن الجودة واحترام الآجال والتحكم في الميزانيات.'
        ),
        'RESSOURCES & LOGISTIQUE' => array(
            'en' => 'RESOURCES & LOGISTICS',
            'ar' => 'الموارد والخدمات اللوجستية'
        ),
        'Des moyens matériels et numériques à la pointe de l\'ingénierie' => array(
            'en' => 'State-of-the-art material and digital resources',
            'ar' => 'وسائل مادية ورقمية في طليعة الهندسة'
        ),
        'Afin de garantir la qualité et la fiabilité de ses prestations, GLOBUILD dispose d\'un ensemble de moyens matériels et numériques adaptés aux exigences des missions d\'études et de suivi des travaux. Le bureau est équipé de postes de travail fixes et portables dédiés aux activités de conception, de modélisation, de dimensionnement et de production graphique ainsi que de moyens d\'impression et de reprographie permettant l\'édition des dossiers techniques et plans d\'exécution.' => array(
            'en' => 'To guarantee the quality and reliability of its services, GLOBUILD has a set of material and digital resources adapted to the requirements of study and work monitoring missions. The office is equipped with fixed and portable workstations dedicated to design, modeling, sizing and graphic production activities, as well as printing and reprography resources for printing technical files and execution plans.',
            'ar' => 'لضمان جودة وموثوقية خدماتها، تتوفر غلوبيلد على مجموعة من الوسائل المادية والرقمية الملائمة لمتطلبات مهام الدراسات وتتبع الأشغال. المكتب مجهز بمحطات عمل ثابتة ومحمولة مخصصة لأنشطة التصميم والنمذجة والحساب والإنتاج الرسومي، بالإضافة إلى وسائل الطباعة والاستنساخ لطبع الملفات التقنية وتصاميم التنفيذ.'
        ),
        'Moyens Logistiques' => array(
            'en' => 'Logistics Resources',
            'ar' => 'الوسائل اللوجستية'
        ),
        'La mobilité de nos équipes d\'études et de maîtrise d\'œuvre sur le terrain est au cœur de notre réactivité.' => array(
            'en' => 'The mobility of our study and project management teams in the field is at the heart of our responsiveness.',
            'ar' => 'تنقل فرق الدراسات وإدارة المشاريع ميدانياً هو جوهر سرعة استجابتنا.'
        ),
        'Parc de véhicules de service' => array(
            'en' => 'Service vehicle fleet',
            'ar' => 'أسطول سيارات الخدمة'
        ),
        'GLOBUILD dispose des moyens logistiques nécessaires pour assurer les déplacements des équipes, les visites de terrain et le suivi des chantiers. Notre flotte permanente est adaptée aux déplacements routiers et chantiers d\'envergure.' => array(
            'en' => 'GLOBUILD has the logistics resources to ensure team mobility, field visits and site monitoring. Our permanent fleet is adapted to road travel and major construction sites.',
            'ar' => 'تتوفر غلوبيلد على الوسائل اللوجستية اللازمة لتأمين تنقلات الفرق والزيارات الميدانية وتتبع الأشغال. أسطولنا الدائم ملائم للتنقلات عبر الطرق والأوراش الكبرى.'
        ),
        'Véhicules de service :' => array(
            'en' => 'Service vehicles:',
            'ar' => 'سيارات الخدمة:'
        ),
        '4 véhicules de service sont à la disposition permanente de nos équipes pour le suivi des chantiers.' => array(
            'en' => '4 service vehicles are at the permanent disposal of our teams for site monitoring.',
            'ar' => '4 سيارات خدمة تحت التصرف الدائم لفرقنا لمتابعة الأوراش.'
        ),
        'Véhicules d\'appoint :' => array(
            'en' => 'Backup vehicles:',
            'ar' => 'سيارات إضافية:'
        ),
        'Mobilité renforcée selon la charge des opérations.' => array(
            'en' => 'Reinforced mobility according to operational workload.',
            'ar' => 'تنقل معزز حسب ضغط العمليات.'
        ),
        'Bureau équipé en open space' => array(
            'en' => 'Open space office',
            'ar' => 'مكتب مجهز بفضاء مفتوح'
        ),
        'Nos locaux sont aménagés pour accueillir les activités de conception, de coordination et de gestion des projets dans des conditions optimales d\'ergonomie et de collaboration.' => array(
            'en' => 'Our offices are designed to host design, coordination and project management activities under optimal ergonomic and collaborative conditions.',
            'ar' => 'تمت تهيئة مكاتبنا لاستقبال أنشطة التصميم والتنسيق وإدارة المشاريع في ظروف ملائمة من حيث بيئة العمل والتعاون.'
        ),
        'Adresse :' => array(
            'en' => 'Address:',
            'ar' => 'العنوان:'
        ),
        '11 Rue Dayet Aoua, Agdal, Rabat' => array(
            'en' => '11 Dayet Aoua Street, Agdal, Rabat',
            'ar' => '11 زنقة ضاية عوا، أكدال، الرباط'
        ),
        'Espace de travail :' => array(
            'en' => 'Workspace:',
            'ar' => 'فضاء العمل:'
        ),
        'Aménagement moderne propice à la synergie d\'équipe et aux réunions techniques.' => array(
            'en' => 'Modern layout conducive to team synergy and technical meetings.',
            'ar' => 'تهيئة حديثة ملائمة لانسجام الفريق والاجتماعات التقنية.'
        ),
        'Moyens Informatiques' => array(
            'en' => 'IT Resources',
            'ar' => 'الوسائل المعلوماتية'
        ),
        'Une infrastructure informatique puissante et dédiée à la production graphique rapide et aux calculs complexes.' => array(
            'en' => 'A powerful IT infrastructure dedicated to fast graphic production and complex calculations.',
            'ar' => 'بنية تحتية معلوماتية قوية مخصصة للإنتاج الرسومي السريع والحسابات المعقدة.'
        ),
        'Stations de Travail Fixes' => array(
            'en' => 'Fixed Workstations',
            'ar' => 'محطات عمل ثابتة'
        ),
        'Ordinateurs Portables' => array(
            'en' => 'Laptops',
            'ar' => 'حواسيب محمولة'
        ),
        'Traceur Grand Format' => array(
            'en' => 'Large Format Plotter',
            'ar' => 'آلة طبع من الحجم الكبير (Plotter)'
        ),
        'Imprimantes Réseau' => array(
            'en' => 'Network Printers',
            'ar' => 'طابعات شبكية'
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
    $extra = array(
        'Voir le projet' => array('en' => 'View Project', 'ar' => 'عرض المشروع'),
        'Agrandir' => array('en' => 'Enlarge', 'ar' => 'تكبير'),
        'Sidebar' => array('en' => 'Sidebar', 'ar' => 'الشريط الجانبي'),
        'Widgets de la barre latérale.' => array('en' => 'Sidebar widgets.', 'ar' => 'مربعات الشريط الجانبي.'),
        'Footer Colonne %d' => array('en' => 'Footer Column %d', 'ar' => 'تذييل العمود %d'),
        'Widgets du footer, colonne %d.' => array('en' => 'Footer widgets, column %d.', 'ar' => 'مربعات التذييل، العمود %d.'),
        'Projet' => array('en' => 'Project', 'ar' => 'المشروع'),
        'Ajouter un projet' => array('en' => 'Add Project', 'ar' => 'إضافة مشروع'),
        'Ajouter un nouveau projet' => array('en' => 'Add New Project', 'ar' => 'إضافة مشروع جديد'),
        'Modifier le projet' => array('en' => 'Edit Project', 'ar' => 'تعديل المشروع'),
        'Nouveau projet' => array('en' => 'New Project', 'ar' => 'مشروع جديد'),
        'Rechercher des projets' => array('en' => 'Search Projects', 'ar' => 'البحث عن مشاريع'),
        'Aucun projet trouvé' => array('en' => 'No projects found', 'ar' => 'لم يتم العثور على مشاريع'),
        'Aucun projet dans la corbeille' => array('en' => 'No projects in trash', 'ar' => 'لا توجد مشاريع في سلة المهملات'),
        'Ajouter un service' => array('en' => 'Add Service', 'ar' => 'إضافة خدمة'),
        'Ajouter un nouveau service' => array('en' => 'Add New Service', 'ar' => 'إضافة خدمة جديدة'),
        'Modifier le service' => array('en' => 'Edit Service', 'ar' => 'تعديل الخدمة'),
        'Nouveau service' => array('en' => 'New Service', 'ar' => 'خدمة جديدة'),
        'Voir le service' => array('en' => 'View Service', 'ar' => 'عرض الخدمة'),
        'Rechercher des services' => array('en' => 'Search Services', 'ar' => 'البحث عن خدمات'),
        'Aucun service trouvé' => array('en' => 'No services found', 'ar' => 'لم يتم العثور على خدمات'),
        'Aucun service dans la corbeille' => array('en' => 'No services in trash', 'ar' => 'لا توجد خدمات في سلة المهملات'),
        "L'équipe" => array('en' => 'The Team', 'ar' => 'الفريق'),
        'Membre' => array('en' => 'Member', 'ar' => 'عضو'),
        'Ajouter un membre' => array('en' => 'Add Member', 'ar' => 'إضافة عضو'),
        'Ajouter un nouveau membre' => array('en' => 'Add New Member', 'ar' => 'إضافة عضو جديد'),
        'Modifier le membre' => array('en' => 'Edit Member', 'ar' => 'تعديل العضو'),
        'Nouveau membre' => array('en' => 'New Member', 'ar' => 'عضو جديد'),
        'Voir le membre' => array('en' => 'View Member', 'ar' => 'عرض العضو'),
        'Rechercher des membres' => array('en' => 'Search Members', 'ar' => 'البحث عن أعضاء'),
        'Aucun membre trouvé' => array('en' => 'No members found', 'ar' => 'لم يتم العثور على أعضاء'),
        'Aucun membre dans la corbeille' => array('en' => 'No members in trash', 'ar' => 'لا توجد أعضاء في سلة المهملات'),
        'Catégories de projet' => array('en' => 'Project Categories', 'ar' => 'فئات المشاريع'),
        'Catégorie' => array('en' => 'Category', 'ar' => 'الفئة'),
        'Rechercher des catégories' => array('en' => 'Search Categories', 'ar' => 'البحث عن الفئات'),
        'Toutes les catégories' => array('en' => 'All Categories', 'ar' => 'جميع الفئات'),
        'Modifier la catégorie' => array('en' => 'Edit Category', 'ar' => 'تعديل الفئة'),
        'Mettre à jour' => array('en' => 'Update', 'ar' => 'تحديث'),
        'Ajouter une catégorie' => array('en' => 'Add Category', 'ar' => 'إضافة فئة'),
        'Nouvelle catégorie' => array('en' => 'New Category', 'ar' => 'فئة جديدة'),
        'Catégories' => array('en' => 'Categories', 'ar' => 'الفئات'),
        'Informations du membre' => array('en' => 'Member Information', 'ar' => 'معلومات العضو'),
        'Icône du service' => array('en' => 'Service Icon', 'ar' => 'أيقونة الخدمة'),
        'Informations du projet' => array('en' => 'Project Information', 'ar' => 'معلومات المشروع'),
        'Client' => array('en' => 'Client', 'ar' => 'العميل'),
        'Année de réalisation' => array('en' => 'Year of Completion', 'ar' => 'سنة الإنجاز'),
        'Budget / Coût' => array('en' => 'Budget / Cost', 'ar' => 'الميزانية / التكلفة'),
        'Facebook URL' => array('en' => 'Facebook URL', 'ar' => 'رابط فيسبوك'),
        'Twitter URL' => array('en' => 'Twitter URL', 'ar' => 'رابط تويتر'),
        'Instagram URL' => array('en' => 'Instagram URL', 'ar' => 'رابط إنستغرام'),
        'Icône Font Awesome' => array('en' => 'Font Awesome Icon', 'ar' => 'أيقونة فونت أوسم'),
        'Ex: fa fa-road, fa fa-hard-hat, fa fa-lightbulb' => array('en' => 'Ex: fa fa-road, fa fa-hard-hat, fa fa-lightbulb', 'ar' => 'مثال: fa fa-road, fa fa-hard-hat, fa fa-lightbulb'),
        'Gloservices Options' => array('en' => 'Gloservices Options', 'ar' => 'خيارات غلوسيرفيس'),
        'Gloservices' => array('en' => 'Gloservices', 'ar' => 'غلوسيرفيس'),
        'Gloservices - Options du thème' => array('en' => 'Gloservices - Theme Options', 'ar' => 'غلوسيرفيس - خيارات القالب'),
        'Téléphone' => array('en' => 'Phone', 'ar' => 'الهاتف'),
        'Email' => array('en' => 'Email', 'ar' => 'البريد الإلكتروني'),
        'Adresse' => array('en' => 'Address', 'ar' => 'العنوان'),
        'Heures d\'ouverture' => array('en' => 'Opening Hours', 'ar' => 'ساعات العمل'),
        'LinkedIn URL' => array('en' => 'LinkedIn URL', 'ar' => 'رابط لينكد إن'),
        'YouTube URL' => array('en' => 'YouTube URL', 'ar' => 'رابط يوتيوب'),
        'Clients satisfaits' => array('en' => 'Satisfied Clients', 'ar' => 'العملاء الراضون'),
        'Projets réalisés' => array('en' => 'Completed Projects', 'ar' => 'المشاريع المنجزة'),
        'Travailleurs experts' => array('en' => 'Expert Workers', 'ar' => 'العمال الخبراء'),
        'Les Faits' => array('en' => 'The Facts', 'ar' => 'الحقائق'),

        // ===== PAGE MOYENS (NOS MOYENS) =====
        'POTENTIEL TECHNIQUE & LOGISTIQUE' => array('en' => 'TECHNICAL & LOGISTICAL POTENTIAL', 'ar' => 'الإمكانيات التقنية واللوجستية'),
        'Des moyens d\'ingénierie et des équipements de <span>haute précision</span>' => array('en' => 'High-precision <span>engineering resources</span> and equipment', 'ar' => 'إمكانيات هندسية ومعدات <span>عالية الدقة</span>'),
        'Pour garantir la rigueur, l\'exactitude des calculs et le respect strict des délais sur chaque chantier, GLOBUILD s\'appuie sur un parc matériel moderne, des véhicules de supervision tout-terrain, une infrastructure informatique haute performance et des logiciels BIM sous licence officielle.' => array('en' => 'To guarantee rigour, precise calculations, and strict deadline compliance on every project, GLOBUILD relies on modern equipment, all-terrain supervision vehicles, high-performance IT infrastructure, and licensed BIM software.', 'ar' => 'لضمان الدقة في الحسابات والالتزام التام بالمواعيد النهائية في كل موقع، يعتمد غلوبيلد على أسطول حديث، مركبات إشراف لجميع التضاريس، بنية تحتية معلوماتية عالية الأداء وبرامج BIM برخص رسمية.'),
        'Véhicules Chantiers' => array('en' => 'Site Vehicles', 'ar' => 'مركبات الموقع'),
        'Stations DAO/CAO' => array('en' => 'CAD/BIM Stations', 'ar' => 'محطات التصميم والنمذجة'),
        'Logiciels BIM Pro' => array('en' => 'Licensed BIM Tools', 'ar' => 'برامج نمذجة مرخصة'),
        'Reprographie A0' => array('en' => 'A0 Large Plotter', 'ar' => 'طابعة خرائط A0'),
        'NOTRE INFRASTRUCTURE' => array('en' => 'OUR INFRASTRUCTURE', 'ar' => 'بنيتنا التحتية'),
        'Organisation matérielle & logistique' => array('en' => 'Material & Logistical Organization', 'ar' => 'التنظيم المادي واللوجستي'),
        'Une répartition stratégique des ressources pour couvrir la conception en bureau d\'études et le contrôle sur le terrain.' => array('en' => 'Strategic resource allocation covering in-office engineering design and on-site field supervision.', 'ar' => 'توزيع استراتيجي للموارد لتغطية التصميم في المكتب الهندسي والمراقبة الميدانية.'),
        'Mobilité & Supervision' => array('en' => 'Mobility & Supervision', 'ar' => 'التنقل والإشراف'),
        'Parc de véhicules de service & Chantiers' => array('en' => 'Service Vehicle Fleet & Site Mobility', 'ar' => 'أسطول مركبات الخدمة والمواقع'),
        'La réactivité de nos ingénieurs et techniciens sur le terrain repose sur une flotte permanente de véhicules adaptés aux accès difficiles et aux déplacements inter-régionaux.' => array('en' => 'The responsiveness of our field engineers rests on a permanent fleet of vehicles suited for difficult terrain and inter-regional travel.', 'ar' => 'تعتمد استجابة مهندسينا وفنيينا في الميدان على أسطول دائم من المركبات المناسبة للتضاريس الصعبة والتنقلات بين الجهات.'),
        '4 Véhicules de service permanents :' => array('en' => '4 Permanent service vehicles:', 'ar' => '4 مركبات خدمة دائمة:'),
        'Mobilisés 24/7 pour le suivi de chantier, la maîtrise d\'œuvre et la topographie.' => array('en' => 'Mobilized 24/7 for site supervision, project management, and topography.', 'ar' => 'مجندة على مدار الساعة لمتابعة المواقع والإشراف الهندسي والطبوغرافيا.'),
        'Capacité de projection rapide :' => array('en' => 'Rapid deployment capacity:', 'ar' => 'قدرة على الانتشار السريع:'),
        'Intervention immédiate sur tout le territoire national marocain.' => array('en' => 'Immediate response capability across all regions of Morocco.', 'ar' => 'تدخل فوري في جميع أنحاء التراب الوطني المغربي.'),
        'Équipements de sécurité embarqués :' => array('en' => 'Onboard safety equipment:', 'ar' => 'معدات السلامة المدمجة:'),
        'EPI complets, outils de mesure itinérants et signalisation de chantier.' => array('en' => 'Complete PPE, mobile measuring tools, and construction site signage.', 'ar' => 'معدات حماية شخصية كاملة، أدوات قياس متنقلة وتشوير المواقع.'),
        'Siège & Workspace' => array('en' => 'Headquarters & Workspace', 'ar' => 'المقر ومساحة العمل'),
        'Bureau d\'études équipé & Open-Space' => array('en' => 'Equipped Engineering Office & Open-Space', 'ar' => 'مكتب دراسات مجهز ومساحة مفتوحة'),
        'Nos locaux situés à Rabat Agdal sont spécialement aménagés pour favoriser la synergie multidisciplinaire entre ingénieurs structures, projeteurs VRD et architectes.' => array('en' => 'Our premises in Rabat Agdal are specially designed to foster multidisciplinary synergy between structural engineers, VRD designers, and architects.', 'ar' => 'مكاتبنا الكائنة بأكدال الرباط مجهزة خصيصاً لتعزيز التكامل بين مهندسي الهياكل والشبكات والمهندسين المعماريين.'),
        'Adresse stratégique :' => array('en' => 'Strategic address:', 'ar' => 'عنوان استراتيجي:'),
        '11 Rue Dayet Aoua, Agdal, Rabat (Accès rapide aux ministères et maîtres d\'ouvrage).' => array('en' => '11 Rue Dayet Aoua, Agdal, Rabat (Fast access to ministries and key clients).', 'ar' => '11 زنقة ضاية عوا، أكدال، الرباط (وصول سريع للوزارات والمؤسسات).'),
        'Salle de réunion multimédia :' => array('en' => 'Multimedia conference room:', 'ar' => 'قاعة اجتماعات متعددة الوسائط:'),
        'Équipée pour les présentations de projets BIM, visioconférences et revues de plans.' => array('en' => 'Equipped for BIM project presentations, video conferencing, and plan reviews.', 'ar' => 'مجهزة لعروض مشاريع BIM، المحادثات المرئية ومراجعة التصاميم.'),
        'Espace collaboratif digitalisé :' => array('en' => 'Digitalized collaborative space:', 'ar' => 'مساحة تعاونية رقمية:'),
        'Réseau haut débit sécurisé avec stockage cloud centralisé et sauvegarde automatique.' => array('en' => 'High-speed secured network with centralized cloud storage and automated backups.', 'ar' => 'شبكة عالية السرعة مع تخزين سحابي مركزي ونسخ احتياطي تلقائي.'),
        'Hardware & Calcul' => array('en' => 'Hardware & Heavy Computing', 'ar' => 'البنية المعلوماتية والحساب المكثف'),
        'Infrastructure informatique & Calcul lourd' => array('en' => 'IT Infrastructure & Heavy Computing', 'ar' => 'البنية التحتية المعلوماتية والحساب الهيكلي'),
        'Des ordinateurs à haute puissance de calcul conçus pour exécuter sans ralentissement les simulations de structures complexes, les modélisations BIM 3D et les rendus graphiques.' => array('en' => 'High-performance computing workstations designed to smoothly execute complex structural simulations, 3D BIM modeling, and graphic renderings.', 'ar' => 'أجهزة حاسوب ذات قدرة حسابية عالية صممت لتشغيل محاكاة الهياكل المعقدة، نمذجة BIM ثلاثية الأبعاد والعروض التوضيحية.'),
        '3 Stations de travail fixes :' => array('en' => '3 High-performance desktop workstations:', 'ar' => '3 محطات عمل مكتبية عالية الأداء:'),
        'Processeurs Intel Core i9/Xeon, cartes graphiques dédiées Nvidia RTX et 64 Go RAM.' => array('en' => 'Intel Core i9/Xeon processors, dedicated Nvidia RTX graphics cards, and 64 GB RAM.', 'ar' => 'معالجات Intel Core i9/Xeon، بطاقات شاشة Nvidia RTX و 64 جيجابايت ذاكرة عشوائية.'),
        '5 Ordinateurs portables renforcés :' => array('en' => '5 Heavy-duty laptops:', 'ar' => '5 أجهزة حاسوب محمولة قوية:'),
        'Dédiés aux ingénieurs résidents et chefs de projet pour la saisie directe sur chantier.' => array('en' => 'Dedicated to resident engineers and project managers for real-time site data entry.', 'ar' => 'مخصصة للمهندسين المقيمين ومدراء المشاريع للإدخال المباشر في الموقع.'),
        'Serveur de données & Sauvegarde NAS :' => array('en' => 'Data server & NAS backup system:', 'ar' => 'خادم البيانات ونظام النسخ الاحتياطي:'),
        'Protection continue des maquettes numériques et historique complet des versions.' => array('en' => 'Continuous protection of digital models and complete version history tracking.', 'ar' => 'حماية مستمرة للنماذج الرقمية وسجل كامل لجميع التعديلات.'),
        'Édition & Reprographie' => array('en' => 'Printing & Large Format Editing', 'ar' => 'الطباعة والنسخ الخرائطي'),
        'Atelier d\'impression & Plans d\'exécution' => array('en' => 'Printing Workshop & Execution Plans', 'ar' => 'ورشة الطباعة وتصاميم التنفيذ'),
        'Une chaîne d\'édition autonome intégrée permettant la production rapide et en haute résolution de l\'ensemble des dossiers d\'appel d\'offres (DCE) et plans de coffrage/ferraillage.' => array('en' => 'An integrated printing workshop enabling fast, high-resolution production of tender documents and structural execution drawings.', 'ar' => 'سلسلة طباعة متكاملة تتيح الإنتاج السريع عالي الدقة لملفات طلبات العروض وتصاميم الخرسانة والحديد.'),
        '1 Traceur grand format couleur A0/A1 :' => array('en' => '1 A0/A1 Color large-format plotter:', 'ar' => '1 طابعة خرائط ملونة عالية الدقة A0/A1:'),
        'Impression jet d\'encre haute précision pour les plans d\'architecture et de voirie.' => array('en' => 'High-precision inkjet printing for architectural and road engineering drawings.', 'ar' => 'طباعة دقيقة عالي الجودة لتصاميم الهندسة المعمارية والطرق.'),
        '2 Imprimantes réseau multifonctions :' => array('en' => '2 Heavy-duty network multifunction printers:', 'ar' => '2 طابعات شبكية متعددة الوظائف:'),
        'Impression et numérisation recto-verso haute vitesse pour les notes de calcul et CPT.' => array('en' => 'High-speed double-sided printing and scanning for calculation notes and technical specs.', 'ar' => 'طباعة وكسح ضوئي سريع مزدوج لمذكرات الحساب ودفاتر الشروط.'),
        'Matériel de façonnage & Reliure :' => array('en' => 'Folding & Binding equipment:', 'ar' => 'معدات طي الخرائط والتجليد:'),
        'Pliage automatique de plans et reliure thermique pour des dossiers techniques impeccables.' => array('en' => 'Automated plan folding and thermal binding for professional technical dossiers.', 'ar' => 'طي أوتوماتيكي للتصاميم وتجليد حراري لملفات فنية متكاملة.'),
        'LOGICIELS PRO DE CONCEРTION' => array('en' => 'PROFESSIONAL DESIGN SOFTWARE STACK', 'ar' => 'حزمة برامج التصميم Merx'),
        'Suite logicielle d\'ingénierie & BIM' => array('en' => 'Engineering & BIM Software Stack', 'ar' => 'حزمة برامج الهندسة ونمذجة المباني BIM'),
        'Tous nos outils de calcul de structure, de modélisation 3D, de tracé routier et d\'hydraulique sont sous licence officielle mise à jour.' => array('en' => 'All our structural calculation, 3D modeling, road design, and hydraulics tools run on official updated licenses.', 'ar' => 'جميع أدوات حساب الهياكل، النمذجة ثلاثية الأبعاد، تصميم الطرق والهيدروليك تعمل برخص رسمية محينة.'),
        'Dessin & Conception DAO 2D/3D' => array('en' => '2D/3D CAD Drawing & Design', 'ar' => 'الرسم والتصميم الهندسي ثنائي وثلاثي الأبعاد'),
        'Modélisation BIM & Maquette 3D' => array('en' => 'BIM Modeling & 3D Building Models', 'ar' => 'نمذجة BIM والمجسمات ثلاثية الأبعاد'),
        'Calcul Béton Armé & Charpente' => array('en' => 'Reinforced Concrete & Steel Structure Analysis', 'ar' => 'حساب الخرسانة المسلحة والهياكل المعدنية'),
        'Topographie, VRD & Terrrassement' => array('en' => 'Topography, VRD & Earthworks', 'ar' => 'الطبوغرافيا، الطرق والتجهيزات والأعمال الترابية'),
        'Conception & Tracé Routier' => array('en' => 'Road Geometry & Alignment Design', 'ar' => 'تصميم وتخطيط الطرق'),
        'Infrastructures & Métrés 3D' => array('en' => 'Infrastructure & 3D Quantity Surveying', 'ar' => 'البنية التحتية وقياس الكميات ثلاثية الأبعاد'),
        'Hydraulique & Réseaux d\'Eau' => array('en' => 'Hydraulics & Water Supply Networks', 'ar' => 'الهيدروليك وشبكات المياه'),
        'Planning & Gestion de Chantiers' => array('en' => 'Project Scheduling & Site Management', 'ar' => 'التخطيط وإدارة المواقع'),
        'Bureautique & Rapports Techniques' => array('en' => 'Office Suite & Technical Reporting', 'ar' => 'المكتبات التقنية والتقارير الهندسي'),
        'ENGAGEMENT DE QUALITÉ' => array('en' => 'QUALITY COMMITMENT', 'ar' => 'التزام الجودة'),
        'Une plateforme technique au service des exigences les plus strictes' => array('en' => 'A technical platform serving the strictest engineering standards', 'ar' => 'منصة تقنية في خدمة أكثر المتطلبات صرامة'),
        'Nos équipements et logiciels sous licence permettent la production de notes de calcul certifiées, de métrés précis et de plans d\'exécution conformes aux normes marocaines (RPS 2000, NM) et aux Eurocodes.' => array('en' => 'Our equipment and licensed software enable the production of certified calculation notes, accurate quantities, and execution drawings compliant with Moroccan standards (RPS 2000, NM) and Eurocodes.', 'ar' => 'تتيح معداتنا وبرامجنا المرخصة إنتاج مذكرات حساب معتمدة، قياسات دقيقة وتصاميم تنفيذية مطابقة للمواصفات المغربية (RPS 2000, NM) واليوروكود.'),
        'Demander une étude technique' => array('en' => 'Request a Technical Proposal', 'ar' => 'طلب دراسة تقنية'),
        'PARTENAIRES & CONFIANCE' => array('en' => 'PARTNERS & TRUST', 'ar' => 'الشركاء والثقة'),

        // ===== PAGE SERVICE =====
        'L\'alliance de l\'ingénierie de précision et des solutions digitales BTP' => array('en' => 'The alliance of precision engineering and digital construction solutions', 'ar' => 'الجمع بين الهندسة عالية الدقة والحلول الرقمية للبناء'),
        'L\'alliance de l\'ingénierie de precision et des solutions digitales BTP' => array('en' => 'The alliance of precision engineering and digital construction solutions', 'ar' => 'الجمع بين الهندسة عالية الدقة والحلول الرقمية للبناء'),
        'L\'alliance de l\'ingénierie de précision et des <span>solutions digitales BTP</span>' => array('en' => 'The alliance of precision engineering and <span>digital construction solutions</span>', 'ar' => 'الجمع بين الهندسة عالية الدقة و<span>الحلول الرقمية للبناء</span>'),
        'L\'alliance de l\'ingénierie de precision et des <span>solutions digitales BTP</span>' => array('en' => 'The alliance of precision engineering and <span>digital construction solutions</span>', 'ar' => 'الجمع بين الهندسة عالية الدقة و<span>الحلول الرقمية للبناء</span>'),
        'Du tracé routier à la modélisation BIM 3D, de la maîtrise d\'œuvre sur chantier aux logiciels sur-mesure, GLOBUILD apporte une valeur ajoutée décisive à chaque étape de vos projets de construction et d\'aménagement.' => array('en' => 'From road design to 3D BIM modeling, from site supervision to custom software, GLOBUILD brings decisive value to every stage of your construction projects.', 'ar' => 'من تصميم الطرق إلى نمذجة BIM ثلاثية الأبعاد، ومن الإشراف الميداني إلى البرمجيات المخصصة، يقدم غلوبيلد قيمة مضافة حاسمة لكل مرحلة من مشاريعكم.'),
        'NOS DOMAINES D\'INTERVENTION' => array('en' => 'OUR FIELDS OF EXPERTISE', 'ar' => 'مجالات تدخلنا'),
        'Des prestations clés en main pour vos projets' => array('en' => 'Turnkey services for your projects', 'ar' => 'خدمات متكاملة لمشاريعكم'),
        'Une gamme complète d\'études techniques et de conseils spécialisés pour maîtres d\'ouvrage publics et privés.' => array('en' => 'A comprehensive range of technical studies and engineering consultancy for public and private clients.', 'ar' => 'مجموعة كاملة من الدراسات التقنية والاستشارات المتخصصة للمؤسسات والقطاع الخاص.'),
        'Infrastructures Routières & Ponts' => array('en' => 'Road Infrastructures & Bridges', 'ar' => 'البنية التحتية للطرق والجسور'),
        'Études de tracé routier, dimensionnement de chaussées, carrefours, ponts et viaducs en conformité avec les directives techniques.' => array('en' => 'Road alignment studies, pavement sizing, intersections, bridges, and viaducts in compliance with technical guidelines.', 'ar' => 'دراسات تخطيط الطرق، قياس سمك الأرصفة، المفترقات، الجسور والمنشآت الفنية وفقاً للمعايير التقنية.'),
        'Ouvrages d\'Art & Structure Béton' => array('en' => 'Civil Engineering Structures & Concrete', 'ar' => 'المنشآت الفنية وهياكل الخرسانة'),
        'Calculs de structures en béton armé et charpente métallique aux Eurocodes et RPS 2000 avec notes de calcul certifiées.' => array('en' => 'Reinforced concrete and steel structure calculations according to Eurocodes and RPS 2000 with certified calculation notes.', 'ar' => 'حسابات هياكل الخرسانة المسلحة والمعدنية وفقاً لليوروكود وRPS 2000 مع مذكرات حساب معتمدة.'),
        'Bâtiments & Ingénierie BIM 3D' => array('en' => 'Buildings & 3D BIM Engineering', 'ar' => 'المباني وهندسة BIM ثلاثية الأبعاد'),
        'Conception architecturale et technique, synthèse BIM sous Revit et optimisation énergétique des bâtiments.' => array('en' => 'Architectural and technical design, BIM coordination in Revit, and building energy optimization.', 'ar' => 'التصميم المعماري والتقني، التنسيق عبر BIM ببرنامج Revit والتحسين الطاقي للمباني.'),
        'VRD & Hydraulique Urbaine' => array('en' => 'Utilities (VRD) & Urban Hydraulics', 'ar' => 'الطرق والشبكات والهيدروليك الحضري'),
        'Aménagement urbain, réseaux d\'assainissement, adduction d\'eau potable (AEP) et traitement des eaux pluviales sous Covadis & EPANET.' => array('en' => 'Urban planning, sewerage networks, drinking water supply (AEP), and stormwater management using Covadis & EPANET.', 'ar' => 'التهيئة الحضرية، شبكات التطهير، التزويد بالماء الصالح للشرب ومعالجة مياه الأمطار عبر Covadis وEPANET.'),
        'Solutions Numériques & Logiciels BTP' => array('en' => 'Digital Solutions & Construction Software', 'ar' => 'الحلول الرقمية وبرمجيات الإنشاءات'),
        'Développement d\'outils digitaux sur-mesure, plateformes web de suivi de chantier et automatisation des calculs d\'ingénierie.' => array('en' => 'Development of custom digital tools, site tracking web platforms, and engineering calculation automation.', 'ar' => 'تطوير أدوات رقمية مخصصة، منصات إلكترونية لمتابعة المواقع وأتمتة الحسابات الهندسية.'),
        'Assistance Maîtrise d\'Ouvrage & OPC' => array('en' => 'Client Advisory (AMO) & Site Coordination (OPC)', 'ar' => 'مساعدة صاحب المشروع والتنسيق الميداني'),
        'Pilotage, coordination de chantier, contrôle qualité, suivi budgétaire et accompagnement jusqu\'à la réception des travaux.' => array('en' => 'Site coordination, quality control, budget monitoring, and assistance through final work handover.', 'ar' => 'القيادة، التنسيق الميداني، مراقبة الجودة، تتبع الميزانية والمرافقة حتى التسليم النهائي.'),
        'Découvrir la prestation' => array('en' => 'Discover Service', 'ar' => 'اكتشف الخدمة'),
        'NOTRE DÉMARCHE QUALITÉ' => array('en' => 'OUR QUALITY METHODOLOGY', 'ar' => 'منهجيتنا في الجودة'),
        'Comment nous accompagnons vos projets' => array('en' => 'How we support your projects', 'ar' => 'كيف نرافق مشاريعكم'),
        'Une méthodologie rigoureuse garantissant l\'exactitude des études et la maîtrise des coûts.' => array('en' => 'A rigorous methodology ensuring accurate studies and cost control.', 'ar' => 'منهجية صارمة تضمن دقة الدراسات والتحكم في التكاليف.'),
        'Diagnostic & Audit' => array('en' => 'Diagnostic & Assessment', 'ar' => 'التشخيص والتدقيق'),
        'Analyse approfondie des besoins, relevés de terrain, contrôles géotechniques et étude de faisabilité.' => array('en' => 'Thorough needs analysis, field surveys, geotechnical checks, and feasibility study.', 'ar' => 'تحليل عميق للاحتياجات، المسوحات الميدانية، الفحوصات الجيوتقنية ودراسة الجدوى.'),
        'Conception & BIM' => array('en' => 'Design & BIM Modeling', 'ar' => 'التصميم ونمذجة BIM'),
        'Modélisation 3D, calculs de structure aux normes RPS 2000 / Eurocodes et dimensionnement VRD.' => array('en' => '3D modeling, structural calculations based on RPS 2000 / Eurocodes, and VRD sizing.', 'ar' => 'النمذجة ثلاثية الأبعاد، حساب الهياكل وفق RPS 2000 / اليوروكود وتصميم الشبكات.'),
        'Édition des Plans DCE' => array('en' => 'Execution Plans & DCE Edition', 'ar' => 'إصدار تصاميم التنفيذ وملفات العروض'),
        'Production des dossiers d\'exécution (A0/A1), métrés détaillés, CPT et estimations financières.' => array('en' => 'Production of execution drawings (A0/A1), detailed quantity surveys, technical specs, and financial estimates.', 'ar' => 'إنتاج ملفات التنفيذ A0/A1، قياس الكميات التفصيلي، دفتر الشروط والتقديرات المالية.'),
        'Suivi & Maîtrise d\'Œuvre' => array('en' => 'Site Supervision & Project Oversight', 'ar' => 'المتابعة والإشراف الميداني'),
        'Supervision sur le terrain, suivi des travaux, visa des plans et réception de l\'ouvrage.' => array('en' => 'On-site supervision, construction tracking, drawing validation, and final handover.', 'ar' => 'الإشراف الميداني، متابعة الأشغال، المصادقة على التصاميم وتسلم المنشأة.'),
        'EXCELLENCE & RIGUEUR' => array('en' => 'EXCELLENCE & RIGOR', 'ar' => 'التميز والصرامة'),
        'Pourquoi faire confiance à GLOBUILD pour vos études BTP ?' => array('en' => 'Why trust GLOBUILD for your engineering studies?', 'ar' => 'لماذا تضعون ثقتكم في غلوبيلد لدراساتكم الهندسية؟'),
        'Nous combinons une solide expérience en génie civil à l\'utilisation des dernières technologies BIM et numériques pour offrir des solutions d\'ingénierie durables, sécurisées et économiquement optimisées.' => array('en' => 'We combine solid civil engineering experience with the latest BIM and digital technologies to deliver sustainable, safe, and cost-optimized solutions.', 'ar' => 'نجمع بين الخبرة الصلبة في الهندسة المدنية وأحدث تقنيات BIM الرقمية لتقديم حلول هندسية مستدامة، آمنة ومحسنة اقتصادياً.'),
        '100% BIM Ready' => array('en' => '100% BIM Ready', 'ar' => 'جاهزية 100% لنظام BIM'),
        'Maquette 3D Revit' => array('en' => 'Revit 3D Model', 'ar' => 'مجسمات Revit ثلاثية الأبعاد'),
        'Normes RPS 2000' => array('en' => 'RPS 2000 Standards', 'ar' => 'معايير RPS 2000'),
        'Calculs Parasismiques' => array('en' => 'Seismic Calculations', 'ar' => 'حسابات الوقاية من الزلازل'),
        'Réactivité Terrain' => array('en' => 'Field Responsiveness', 'ar' => 'استجابة ميدانية سرعة'),
        'Flotte 24/7 Maroc' => array('en' => '24/7 Morocco Fleet', 'ar' => 'أسطول 24/7 في المغرب'),
        'Pôle IT Dédié' => array('en' => 'Dedicated IT Division', 'ar' => 'قسم رقمي متخصص'),
        'Logiciels Métier' => array('en' => 'Custom Software', 'ar' => 'برمجيات متخصصة'),
        'ETUDE & DEVIS GRATUIT' => array('en' => 'FREE STUDY & QUOTE', 'ar' => 'دراسة وعرض سعر مجاني'),
        'ÉTUDE & DEVIS GRATUIT' => array('en' => 'FREE STUDY & QUOTE', 'ar' => 'دراسة وعرض سعر مجاني'),
        'Étude & Devis gratuit' => array('en' => 'Free Study & Quote', 'ar' => 'دراسة وعرض سعر مجاني'),
        'Obtenez une proposition technique sur-mesure' => array('en' => 'Get a customized technical proposal', 'ar' => 'احصل على عرض تقني مخصص'),
        'Transmettez-nous les éléments clés de votre projet. Nos ingénieurs analyseront votre besoin sous 24h et vous proposeront une offre d\'études adaptée.' => array('en' => 'Send us your project details. Our engineers will analyze your requirements within 24h and provide a tailored study proposal.', 'ar' => 'أرسلوا لنا العناصر الأساسية لمشروعكم. سيقوم مهندسونا بتحليل طلبكم في غضون 24 ساعة وتقديم عرض مخصص.'),
        'Une question urgente ?' => array('en' => 'Urgent question?', 'ar' => 'سؤال عاجل؟'),
        'Votre Nom complet' => array('en' => 'Your Full Name', 'ar' => 'اسمكم الكامل'),
        'Votre Email professionnel' => array('en' => 'Your Professional Email', 'ar' => 'بريدكم الإلكتروني المهني'),
        'Numéro de Téléphone' => array('en' => 'Phone Number', 'ar' => 'رقم الهاتف'),
        'Sélectionner le Domaine' => array('en' => 'Select Sector', 'ar' => 'اختر المجال'),
        'Description succincte du projet (localisation, délai, contraintes...)' => array('en' => 'Brief project description (location, timeframe, constraints...)', 'ar' => 'وصف مختصر للمشروع (الموقع، الأجل، الإكراهات...)'),
        'Envoyer ma demande' => array('en' => 'Send Request', 'ar' => 'إرسال الطلب'),
        'Soumettre' => array('en' => 'Submit', 'ar' => 'إرسال'),
        'Votre Nom' => array('en' => 'Your Name', 'ar' => 'اسمكم الكامل'),
        'Votre Email' => array('en' => 'Your Email', 'ar' => 'البريد الإلكتروني المهني'),
        'Votre Mobile' => array('en' => 'Your Mobile', 'ar' => 'رقم الهاتف'),
        'Note Spéciale' => array('en' => 'Special Note', 'ar' => 'وصف مختصر للمشروع'),
        'Sélectionner un Service' => array('en' => 'Select Service', 'ar' => 'اختر الخدمة'),
        'Ingénierie Civile (BTP)' => array('en' => 'Civil Engineering (BTP)', 'ar' => 'الهندسة المدنية (BTP)'),
        'Solutions Numériques (IT)' => array('en' => 'Digital Solutions (IT)', 'ar' => 'الحلول الرقمية (IT)'),
        'Tous les projets' => array('en' => 'All Projects', 'ar' => 'جميع المشاريع'),
        'Tous les Projets' => array('en' => 'All Projects', 'ar' => 'جميع المشاريع'),
        'Tous Les Projets' => array('en' => 'All Projects', 'ar' => 'جميع المشاريع')
    );

    foreach ($extra as $key => $trans) {
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
    if (empty($text)) {
        return $text;
    }

    $lang = 'fr';
    if (isset($_SERVER['REQUEST_URI']) && (strpos($_SERVER['REQUEST_URI'], '/ar/') !== false || strpos($_SERVER['REQUEST_URI'], 'service-ar') !== false)) {
        $lang = 'ar';
    } elseif (isset($_SERVER['REQUEST_URI']) && (strpos($_SERVER['REQUEST_URI'], '/en/') !== false || strpos($_SERVER['REQUEST_URI'], 'service-en') !== false)) {
        $lang = 'en';
    } elseif (function_exists('pll_current_language')) {
        $lang = pll_current_language('slug') ?: 'fr';
    } elseif (isset($_GET['lang'])) {
        $lang = sanitize_text_field($_GET['lang']);
    } else {
        $locale = get_locale();
        if (strpos($locale, 'ar') === 0) {
            $lang = 'ar';
        } elseif (strpos($locale, 'en') === 0) {
            $lang = 'en';
        }
    }

    $clean_key = trim($text);
    $translations = gloservices_get_translations($lang);

    if (isset($translations[$clean_key])) {
        return $translations[$clean_key];
    }

    foreach ($translations as $k => $v) {
        if (strcasecmp($k, $clean_key) === 0) {
            return $v;
        }
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

/**
 * Intercept Contact Form 7 HTML elements to translate placeholders & buttons dynamically
 */
add_filter('wpcf7_form_elements', function($content) {
    if (function_exists('gloservices_translate')) {
        $content = preg_replace_callback('/placeholder=["\']([^"\']+)["\']/', function($m) {
            return 'placeholder="' . esc_attr(gloservices_translate($m[1])) . '"';
        }, $content);
        $content = preg_replace_callback('/value=["\'](Soumettre|Envoyer|Envoyer ma demande)["\']/', function($m) {
            return 'value="' . esc_attr(gloservices_translate($m[1])) . '"';
        }, $content);
    }
    return $content;
});