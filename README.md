# Mokum Boot | CRM | Laravel Own

A Customer relationship management system for Mokum Boot

## Installation

Use git to clone the directory.

```bash
git clone https://github.com/2102760/Eindproject-Jaar--fbbc432a/tree/Laravel-Custom

chmod -R 755 storage/* bootstrap/cache/

cp .env.example .env

composer install --no-dev --optimize-autoloader

# Only run the command below if you are installing this CRM for the first time
php artisan key:generate --force
```

Write the database credentials in the environment file (.env)

```bash
php artisan migrate
```

## License
[MPL 2.0](https://choosealicense.com/licenses/mpl-2.0/)
