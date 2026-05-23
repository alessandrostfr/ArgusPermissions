# Uso del sistema

## Flujo básico

1. Crear permisos.
2. Crear roles.
3. Asociar permisos a roles.
4. Asignar roles a usuarios.
5. Proteger acciones con Gates o Policies.

## Comprobar permisos en controladores

```php
Gate::authorize('haveaccess', 'role.index');
```

También puede usarse:

```php
$this->authorize('haveaccess', 'role.edit');
```

## Comprobar permisos en Blade

```php
@can('haveaccess', 'role.create')
    <a href="{{ route('role.create') }}" class="btn btn-primary">
        Crear rol
    </a>
@endcan
```

## Rol con acceso completo

El campo `full-access` permite que un rol tenga autorización global.

Valor esperado:

```text
yes
no
```

Si un usuario tiene un rol con `full-access = yes`, `havePermission()` devuelve `true` directamente.

## Permisos sobre el propio usuario

`UserPolicy` permite separar permisos globales de permisos sobre el propio usuario.

Ejemplo conceptual:

```php
$this->authorize('update', [$user, ['user.edit', 'userown.edit']]);
```

Esto permite:

- `user.edit`: editar cualquier usuario;
- `userown.edit`: editar solo el usuario autenticado.
