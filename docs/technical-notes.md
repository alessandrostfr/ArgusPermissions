# Notas técnicas

## Por qué no es todavía un paquete Composer

Aunque la idea original era crear una base reutilizable para permisos, este repo está montado como aplicación Laravel completa, no como paquete.

Se puede ver en que el proyecto incluye:

- `artisan`;
- `app/`;
- `resources/views`;
- `routes/web.php`;
- migraciones propias;
- auth de Laravel;
- frontend con Laravel Mix.

Para convertirlo en paquete haría falta separar:

```text
src/
config/
database/migrations/
routes/
ServiceProvider
composer.json como package
```

## Correcciones aplicadas en este polish

### Relaciones Eloquent

Se corrige:

```php
withTimesTamps()
```

por:

```php
withTimestamps()
```

en las relaciones many-to-many.

### Ruta de usuarios

Se corrige:

```php
'crete'
```

por:

```php
'create'
```

en el `Route::resource('/user', ...)`.

### Listener de registro

Se unifica la configuración de `Registered::class` para no declarar dos veces la misma clave del array.

### Ruta `/test`

Se elimina la ruta temporal de pruebas porque exponía lógica interna de permisos y no aporta valor al repo público.

## Riesgos pendientes

- No hay cobertura real de tests RBAC.
- Laravel 7 está obsoleto para nuevos proyectos.
- El sistema usa strings de permisos manuales.
- La interfaz es básica.
- Faltan capturas limpias para portfolio.
