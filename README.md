# lab crud standard
This repository presents a standard Laravel project for task management.

## Référence 

- https://github.com/labs-web/lab-crud-standard

### Travail à faire

- compléter le travail sur [`lab crud laravel basic`](https://github.com/Jalil-Betroji/lab-crud.git)
- Opérations CRUD pour les tâches
- Pagination
- Recherche (AJAX)
- Pattern Repository
- Affichage des projets
- Filtrer par projet
- Données d'exemple (jeux de test)

#### Process Workflow 

- Start by cloning lab

```bash
git clone https://github.com/labs-web/lab-crud-laravel-standard.git

```

- Install packages

```bash
composer install
```

- Next, create the .env file using the command:

```bash
cp .env.example .env
```
- Add the database name to the .env file.

- Migrate tables to the database:

```bash
php artisan migrate
```

- Populate the database with project information by creating a seeder and executing:

```bash
php artisan db:seed
```


- To view your project's progress locally, run this command:

```bash 
php artisan serve
```
