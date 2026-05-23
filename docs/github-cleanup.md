# Limpieza del repo en GitHub

Después de subir este polish, conviene limpiar el repo público.

## 1. Revisar rama principal

El contenido bueno debería estar en:

```text
master
```

Si GitHub sigue usando `master` como rama default y el contenido está ahí, no hace falta cambiarla.

## 2. Añadir descripción

En la portada del repo, añade una descripción como:

```text
Sistema RBAC en Laravel para roles, permisos y autorización con Gates y Policies.
```

## 3. Añadir topics

Topics recomendados:

```text
laravel
php
rbac
roles
permissions
authorization
blade
eloquent
portfolio
```

## 4. Revisar ramas antiguas

Las ramas tipo Dependabot antiguas pueden eliminarse si no contienen trabajo manual.

Antes de borrar una rama, comprueba que:

- no es `master`;
- no contiene commits propios importantes;
- solo es una rama automática antigua de dependencias.

## 5. Pull requests antiguas

Si hay PRs antiguos de Dependabot:

- ciérralos si ya no aplican;
- no los merges automáticamente;
- no actualices dependencias a ciegas en un proyecto Laravel 7 legacy.

## 6. Pins

De momento este repo puede quedar público y documentado, pero no necesariamente como pin principal.

Pins fuertes recomendados:

1. Nexus Predictor
2. Job Search CRM Showcase
3. Argus Gym Showcase
4. Lidl Offers Scraper
5. ArgusPermissions, solo si después de verlo en GitHub suma visualmente
