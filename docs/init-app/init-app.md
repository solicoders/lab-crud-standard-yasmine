---
layout: default
chapitre: init-app
order: 5
---

# Initialisation de l'application



## Travail à faire

* Création d'un projet Laravel
* Installation d'AdminLTE

## Les étapes de l'installation d'AdminLTE

**2. Création d'un projet Laravel**

```bash
composer create-project laravel/laravel mon-projet
```

**3. Installation d'AdminLTE**

```bash
npm install admin-lte@3.1.0 @fortawesome/fontawesome-free
```

**4. Publication des assets d'AdminLTE**

```bash
php artisan vendor:publish --provider="AdminLTE\AdminLTEServiceProvider"
```

**5. Importation des CSS et JavaScript d'AdminLTE**

Dans `public/css/app.css`, importer les CSS d'AdminLTE et Font Awesome :

```css
@import 'admin-lte/plugins/fontawesome-free/css/all.min.css';
@import 'admin-lte/dist/css/adminlte.min.css';
```

Dans `public/js/app.js`, importer le JavaScript d'AdminLTE :

```javascript
import 'admin-lte/dist/js/adminlte';
```

**6. Installer les dépendances et construire les assets**

```bash
npm install
npm run dev
```

**Ressources utiles**

* Documentation d'AdminLTE : [https://adminlte.io/docs/3.1/](https://adminlte.io/docs/3.1/)
* Tutoriels Laravel : [https://laracasts.com/](https://laracasts.com/)
* Forum de la communauté Laravel : [https://laracasts.com/discuss](https://laracasts.com/discuss)




