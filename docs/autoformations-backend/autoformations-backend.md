---
layout: default
chapitre: autoformations-backend
order: 10
---
# autoformations-backend

![autoformations-backend](/lab-crud-standard-yasmine/autoformations-backend/images/backend.jpg)*Figure:backend*{:width="1000px"}
<!-- note -->
Dans la section dédiée aux Autoformations, nous élaborerons une plateforme pour la gestion efficace des Autoformations, démontrant ainsi notre expertise en Laravel. Cette démarche nous permettra de mettre en pratique nos compétences en développement back-end, tout en garantissant une approche professionnelle et efficace dans la gestion de nos Autoformations .

## Les commands 



Création de namespace Autoformations dans controller et le fichier AutoformationController

```bash
php artisan make:controller autoformations\autoformationController
```

Création de namespace Autoformations dans model et le fichier Autoformations avec le migration

```bash
php artisan make:model autoformations\autoformation -m
```

Création de namespace Autoformations dans request et le fichier AutoformationRequest pour valider les inputs

```bash
php artisan make:request autoformations\autoformationRequest
```

Création de repositories dossier

```bash
mkdir Repositories
```

Création de fichier de AppBaseRepository.php

```bash
echo > AppBaseRepository.php
```

Création de fichier de AutoformationsRepository.php

```bash
echo > autoformationRepository.php
```

Création de AutoformationsSeeder seeder

```bash
php artisan make:seeder autoformations/autoformationsSeeder
```

Command pour inserer Autoformations info sur base donnée en utilisant seeders

```bash
php artisan db:seed --class=Database\Seeders\autoformations\AutoformationsSeeder
```

<!-- new slide -->