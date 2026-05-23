# Setup local

## Requisitos

- PHP compatible con Laravel 7.
- Composer.
- Node.js/NPM compatible con Laravel Mix 5.
- MySQL o MariaDB.
- Extensión PHP PDO MySQL.

## Instalación

```bash
git clone https://github.com/alessandrostfr/ArgusPermissions.git
cd ArgusPermissions

composer install
npm install
npm run dev

cp .env.example .env
php artisan key:generate
```

Configura `.env`:

```env
APP_NAME=ArgusPermissions
APP_ENV=local
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=argus_permissions
DB_USERNAME=root
DB_PASSWORD=
```

Crea la base de datos y ejecuta:

```bash
php artisan migrate:fresh --seed
php artisan serve
```

## Validación

```bash
php artisan route:list
php artisan test
```

## Problemas frecuentes

### `APP_KEY` vacío

Ejecuta:

```bash
php artisan key:generate
```

### Error de conexión a MySQL

Revisa:

- que MySQL esté arrancado;
- que la base de datos exista;
- usuario y contraseña en `.env`.

### Frontend sin compilar

Ejecuta:

```bash
npm install
npm run dev
```
