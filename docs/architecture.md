# Arquitectura

ArgusPermissions es una aplicación Laravel 7 completa que implementa un sistema RBAC sencillo usando Eloquent, Gates y Policies.

## Componentes principales

```text
Usuarios
   │
   ├── role_user
   │       │
   │       └── Roles
   │              │
   │              ├── permission_role
   │              │       │
   │              │       └── Permissions
   │              │
   │              └── full-access
   │
   └── UserPolicy
```

## Modelos

### `User`

El modelo `User` usa `UserTrait`, que añade:

- relación many-to-many con roles;
- método `havePermission($permission)`.

### `Role`

Representa un grupo de permisos. Puede tener:

- `name`;
- `slug`;
- `description`;
- `full-access`.

Cuando `full-access` es `yes`, el usuario con ese rol se considera autorizado para cualquier permiso registrado.

### `Permission`

Representa una acción concreta dentro de la aplicación. El proyecto usa slugs como:

```text
role.index
role.create
role.edit
role.destroy
user.index
user.edit
userown.edit
```

## Gates

`AuthServiceProvider` registra el Gate principal:

```php
Gate::define('haveaccess', function (User $user, $permission) {
    return $user->havePermission($permission);
});
```

Esto permite proteger rutas, controladores y vistas sin duplicar lógica.

## Policies

`UserPolicy` gestiona permisos sobre usuarios. Por ejemplo:

- un permiso global para ver/editar usuarios;
- un permiso limitado para ver/editar solo el propio usuario.

## Base de datos

Tablas principales:

```text
users
roles
permissions
role_user
permission_role
```

Relaciones:

- `users` ↔ `roles`: many-to-many.
- `roles` ↔ `permissions`: many-to-many.

## Interfaz

La UI está hecha con Blade y Bootstrap. Incluye vistas para:

- roles;
- usuarios;
- auth;
- mensajes de estado;
- layout principal.
