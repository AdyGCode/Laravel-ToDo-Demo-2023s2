

Create new project

open shell (#1)

curl -s "https://laravel.build/laravel-todo-demo?with=mariadb,minio,mailpit,redis,memcached,meilisearch,soketi" | bash

cd laravel-todo-demo

sail up


New shell (#2)

sail composer require laravel/breeze --dev
sail artisan breeze:install blade --pest
sail composer require laravel/livewire

sail artisan breeze:install 

New shell (#3)

cd laravel-todo-demo

sail npm install && sail npm update && sail npm run dev


Back to Shell #2

execute the following

sail artisan vendor:publish --tag=laravel-errors
sail artisan vendor:publish --tag=laravel-mail 
sail artisan vendor:publish --tag=laravel-notifications
sail artisan vendor:publish --tag=laravel-pagination
sail artisan vendor:publish --tag=sanctum-config
sail artisan vendor:publish --tag=sanctum-migrations
sail artisan vendor:publish --tag="sail-docker" 
sail artisan vendor:publish --tag="sail-database" 
sail artisan vendor:publish --tag="sail" 
sail artisan vendor:publish --tag="livewire" 
sail artisan vendor:publish --tag="livewire:config" 
sail artisan vendor:publish --tag="livewire:pagination"


Create Migrations
sail artisan make:model Priority -ars
sail artisan make:model Status -ars
sail artisan make:model Item -ars
sail artisan make:model Project -ars
sail artisan make:model ItemProject --migration --seeder
sail artisan make:model ProjectUser --migration --seeder


Priorty Model/Migration Outline

| field        | type   | size | other notes | fillable |
|--------------|--------|------|-------------|----------|
| name         | string | 32   |             | *        |
| description  | string | 255  |             | *        |

Status Model/Migration Outline

| field        | type   | size | other notes | fillable |
|--------------|--------|------|-------------|----------|
| name         | string | 32   |             | *        |
| description  | string | 255  |             | *        |

Project Model/Migration Outline

| field       | type        | size | other notes | fillable |
|-------------|-------------|------|-------------|----------|
| name        | string      | 32   |             | *        |
| description | string      | 255  |             | *        |
| user_id     | foreign id  |      |             | *        |

ItemProject Model/Migration Outline

| field      | type        | size | other notes | fillable |
|------------|-------------|------|-------------|----------|
| item_id    | foreign id  | 32   |             | *        |
| project_id | string      | 255  |             | *        |

ProjectUser Model/Migration Outline

| field      | type        | size | other notes | fillable |
|------------|-------------|------|-------------|----------|
| user_id    | foreign id  | 32   |             | *        |
| project_id | string      | 255  |             | *        |


Seed Data

All seed data - see the seeders.
[DatabaseSeeder.php](database%2Fseeders%2FDatabaseSeeder.php)
[ItemProjectSeeder.php](database%2Fseeders%2FItemProjectSeeder.php)
[ItemSeeder.php](database%2Fseeders%2FItemSeeder.php)
[PrioritySeeder.php](database%2Fseeders%2FPrioritySeeder.php)
[ProjectSeeder.php](database%2Fseeders%2FProjectSeeder.php)
[UserSeeder.php](database%2Fseeders%2FUserSeeder.php)
[StatusSeeder.php](database%2Fseeders%2FStatusSeeder.php)



