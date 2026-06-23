# Gloservices - Thème WordPress

Thème WordPress personnalisé pour **Gloservices Ingénierie**, bureau d'études techniques BTP/génie civil. Converti depuis un projet Laravel.

## 📋 Fonctionnalités

- ✅ **Multilingue** (FR/EN/AR) avec support RTL pour l'arabe
- ✅ **Bootstrap 5** + Owl Carousel + Wow.js + Lightbox
- ✅ **Custom Post Types** : Projets, Services, Équipe
- ✅ **Page d'options** pour configurer téléphone, email, réseaux sociaux, statistiques
- ✅ **Meta boxes** pour les membres d'équipe (fonction, réseaux sociaux) et services (icônes)
- ✅ **Formulaires** compatibles avec Contact Form 7
- ✅ **Widgets** : sidebar + 4 colonnes footer
- ✅ **Menu WordPress** personnalisable
- ✅ **Images responsive** avec tailles personnalisées

## 📁 Structure

```
gloservices-wp-theme/
├── style.css              ← En-tête du thème
├── functions.php          ← Configuration, CPT, scripts, styles
├── header.php             ← Topbar + Navbar + sélecteur de langue
├── footer.php             ← Footer + scripts JS
├── front-page.php         ← Page d'accueil (carousel, services, projets, équipe)
├── index.php              ← Blog (fallback)
├── page.php               ← Template page générique
├── page-about.php         ← Template "Qui sommes-nous"
├── page-mission.php       ← Template "Nos missions"
├── page-moyen.php         ← Template "Nos moyens"
├── page-projet.php        ← Template "Projets"
├── page-service.php       ← Template "Services"
├── page-roadstru.php      ← Template "Routes & Ouvrages"
├── page-contact.php       ← Template "Contact" (avec Google Maps)
├── single-project.php     ← Fiche projet individuelle
├── single-service.php     ← Fiche service individuelle
├── sidebar.php            ← Barre latérale
├── searchform.php         ← Formulaire de recherche
├── 404.php                ← Page d'erreur 404
├── assets/
│   ├── css/               ← Bootstrap + style.css + rtl.css
│   ├── js/                ← main.js + bootstrap.bundle
│   ├── img/               ← Toutes les images
│   └── lib/               ← Wow, Owl Carousel, Easing, Lightbox, etc.
└── languages/             ← Fichiers de traduction
```

## 🚀 Installation

### 1. Copier le thème
Copiez le dossier `gloservices-wp-theme` dans :
```
wp-content/themes/
```

### 2. Activer le thème
- Allez dans **Apparence > Thèmes**
- Activez le thème **Gloservices**

### 3. Créer les pages
Créez les pages suivantes avec les modèles correspondants :

| Page | Modèle (Template) | Slug |
|------|-------------------|------|
| Accueil | (définir comme page d'accueil) | - |
| Qui sommes-nous | Page About | about |
| Nos missions | Page Mission | mission |
| Nos moyens | Page Moyen | moyen |
| Projets | Page Projet | projet |
| Services | Page Service | service |
| Routes & Ouvrages | Page Roadstru | roadstru |
| Contact | Page Contact | contact |

### 4. Configurer la page d'accueil
- **Réglages > Lecture** > "Une page statique" > sélectionnez "Accueil"

### 5. Configurer le menu
- **Apparence > Menus** > créez un menu et assignez-le à "Menu Principal"

### 6. Configurer les options
- Allez dans **Gloservices** (menu admin) pour configurer :
  - Téléphone, email, adresse
  - Réseaux sociaux
  - Statistiques (clients, projets, travailleurs)

## 🌍 Multilingue avec Polylang

1. Installez le plugin **Polylang** (gratuit)
2. Ajoutez les langues : Français, English, العربية
3. Configurez **Réglages > Langues** :
   - Code URL : `/fr/`, `/en/`, `/ar/`
4. Traduisez les pages via l'interface Polylang
5. Le sélecteur de langue est automatiquement affiché dans la navbar

### RTL automatique
WordPress détecte automatiquement la langue arabe et ajoute `dir="rtl"`. Le fichier `rtl.css` ajuste automatiquement le layout.

## 📧 Formulaires avec Contact Form 7

1. Installez **Contact Form 7**
2. Créez deux formulaires :
   - Un formulaire de **contact** (ID: 1)
   - Un formulaire de **devis** (ID: 1 ou autre)
3. Le thème détecte automatiquement CF7 et l'utilise. Sinon, un formulaire HTML de secours est affiché.

## 📝 Gestion du contenu

### Projets
- **Projets** > Ajouter un projet
- Titre, description, image à la une
- Catégorie de projet (Solution Numérique, Développement Urbain, Infrastructure)

### Services
- **Services** > Ajouter un service
- Titre, description, image à la une
- Icône Font Awesome (ex: `fa fa-road`, `fa fa-hard-hat`)

### Équipe
- **L'équipe** > Ajouter un membre
- Nom (titre), description
- Fonction (meta box)
- Réseaux sociaux (Facebook, Twitter, Instagram)

## 🔧 Personnalisation

### Couleurs
Modifiez les variables CSS dans `assets/css/style.css` :
```css
:root {
    --primary: #your-color;
    --secondary: #your-color;
}
```

### Logo
**Apparence > Personnaliser > Identité du site** > Logo

## ✅ Notes

- Toutes les erreurs "Undefined function" affichées par l'IDE sont normales (fonctions WordPress non reconnues hors de WP)
- Les images sont incluses dans `assets/img/`
- Le thème utilise Bootstrap 5 (chargé en local)
- Compatible WordPress 6.0+

## 📄 Licence

MIT