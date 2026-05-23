# ArgusPermissions

Sistema de roles y permisos construido con Laravel.

Este proyecto nació como una forma de entender e implementar un flujo RBAC completo en Laravel: usuarios, roles, permisos, gates, policies, middlewares de autenticación y pantallas CRUD para administrar el acceso dentro de una aplicación web.

No es un paquete Composer moderno listo para instalar en producción. Es un proyecto legacy de aprendizaje técnico, pero conserva una idea útil: una base reutilizable para montar permisos en proyectos Laravel tradicionales.

## Qué permite hacer

- Registrar e iniciar sesión con el sistema de autenticación de Laravel.
- Crear, editar, consultar y eliminar roles.
- Crear permisos con `name`, `slug` y descripción.
- Relacionar permisos con roles.
- Asignar roles a usuarios.
- Proteger rutas y acciones con Gates y Policies.
- Diferenciar permisos globales de permisos sobre el propio usuario.
- Usar un rol con acceso completo mediante el campo `full-access`.

## Stack

- PHP 7.2+
- Laravel 7
- Blade
- Bootstrap 4
- Laravel UI
- Eloquent ORM
- MySQL
- Laravel Gates & Policies
- Laravel Mix

## Estructura principal

```text
app/
├── ArgusPermission/
│   ├── Models/
│   │   ├── Permission.php
│   │   └── Role.php
│   └── Traits/
│       └── UserTrait.php
├── Http/Controllers/
│   ├── RoleController.php
│   └── UserController.php
├── Policies/
│   └── UserPolicy.php
└── Providers/
    ├── AuthServiceProvider.php
    └── EventServiceProvider.php

database/
├── migrations/
│   ├── create_roles_table
│   ├── create_role_user_table
│   ├── create_permissions_table
│   └── create_permission_role_table
└── seeds/
    └── ArgusPermissionsInfoSeeder.php
```

## Cómo funciona

La idea central es sencilla:

1. Un usuario puede tener uno o varios roles.
2. Un rol puede tener muchos permisos.
3. Cada permiso se identifica con un `slug`, por ejemplo `role.index` o `user.edit`.
4. El trait `UserTrait` añade al modelo `User` la relación con roles y el método `havePermission()`.
5. `AuthServiceProvider` registra un Gate llamado `haveaccess`.
6. Los controladores y vistas usan ese Gate para permitir o bloquear acciones.

Ejemplo conceptual:

```php
Gate::authorize('haveaccess', 'role.index');
```

Y en Blade:

```php
@can('haveaccess', 'role.create')
    <a href="{{ route('role.create') }}">Crear rol</a>
@endcan
```

## Funcionalidades implementadas

### Gestión de roles

La aplicación incluye un CRUD para roles:

- listado de roles;
- creación;
- edición;
- detalle;
- eliminación;
- asignación de permisos;
- soporte para rol con acceso completo.

### Gestión de usuarios

Incluye gestión básica de usuarios:

- listado;
- detalle;
- edición;
- asignación de roles;
- eliminación;
- restricciones mediante Policy.

### Gates y Policies

El proyecto combina dos enfoques de autorización:

- `Gate::define('haveaccess', ...)` para comprobar permisos concretos por slug;
- `UserPolicy` para comprobar acciones sobre usuarios, incluyendo permisos sobre el propio usuario.

## Instalación local

Clona el repositorio:

```bash
git clone https://github.com/alessandrostfr/ArgusPermissions.git
cd ArgusPermissions
```

Instala dependencias PHP:

```bash
composer install
```

Instala dependencias frontend:

```bash
npm install
npm run dev
```

Crea el archivo de entorno:

```bash
cp .env.example .env
php artisan key:generate
```

Configura la base de datos en `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=argus_permissions
DB_USERNAME=root
DB_PASSWORD=
```

Ejecuta migraciones y seeders:

```bash
php artisan migrate --seed
```

Levanta el servidor:

```bash
php artisan serve
```

La app quedará disponible normalmente en:

```text
http://127.0.0.1:8000
```

## Validación rápida

Después de aplicar cambios o clonar el proyecto:

```bash
composer install
npm install
npm run dev
php artisan migrate:fresh --seed
php artisan route:list
php artisan test
```

## Estado del proyecto

Este repo se mantiene como proyecto técnico legacy. No intenta competir con soluciones modernas como paquetes RBAC mantenidos para Laravel, sino mostrar una implementación propia de roles y permisos desde cero.

Estado actual:

- base funcional de RBAC;
- documentación profesional añadida;
- correcciones menores aplicadas sobre relaciones Eloquent y rutas;
- pendiente de capturas si se decide usarlo como repo destacado;
- pendiente de migración a paquete Composer si algún día se quiere convertir en una librería real.

## Limitaciones conocidas

- Está basado en Laravel 7 y PHP 7.2+.
- No está empaquetado como librería Composer.
- Los tests son mínimos.
- La interfaz es simple y basada en Bootstrap 4.
- No está actualizado a Laravel 10/11/12.
- Algunas decisiones responden a una etapa temprana de aprendizaje y no a una arquitectura actual de producción.

## Próximas mejoras posibles

- Convertirlo en paquete Composer instalable.
- Añadir tests de Feature para roles, permisos y Policies.
- Añadir capturas reales al README.
- Actualizar a una versión moderna de Laravel.
- Añadir middleware específico por permiso.
- Añadir comandos Artisan para instalar migraciones, seeders y configuración.
- Mejorar la UI de administración.

## Autor

Proyecto desarrollado por **Alessandro Staiano Fernández** como parte de su aprendizaje y portfolio técnico en desarrollo web.

- GitHub: [@alessandrostfr](https://github.com/alessandrostfr)
- LinkedIn: [alessandrostfr](https://www.linkedin.com/in/alessandrostfr/)
