# Saudagar

An e-commerce web app consists of a customer storefront and an admin CMS. Built using Laravel, Litstack, Inertia, and Vue.

## Development

1. `docker-compose up -d`
2. `docker exec -it sa-php /bin/bash`
3. `cp .env.example .env` (First time only)
4. `composer install`
5. `php artisan key:generate` (First time only)
6. `php artisan migrate:fresh --seed`
7. App is live at http://localhost:8000/
