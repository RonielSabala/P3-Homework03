# Instrucciones para ejecutar el proyecto

_Requisitos_:

- MySQL

## 1. Conexión con la base de datos

Configura los datos de conexión en el archivo `config/db_config.php`.

## 2. Creación de la base de datos

Para ello, ejecuta el siguiente comando:

```bash
php config/install.php
```

## 3. Ejecución

Para iniciar el servidor PHP, ejecuta:

```bash
php -S localhost:1111 -t public
```

---

> ¡Esos fueron todos los pasos!
