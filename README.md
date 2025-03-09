## Instalación | Documentación | Configuraciones

## Instalación

Antes de comenzar, asegúrese de tener instalados los siguientes componentes:

- PHP (versión compatible con Laravel)
- Composer
- Node.js y npm
- MySQL o el sistema de base de datos que usará

1. Instalar las dependencias de PHP:
    ```bash
    composer install
    ```
2. Copiar el archivo de configuración .env y generar la clave de aplicación:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

3. Configurar la base de datos en el archivo `.env`:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nombre_de_DB
    DB_USERNAME=nombre_de_USER
    DB_PASSWORD=contraseña_de_BD
    ```

    **Nota:** Asegúrese de ingresar el nombre correcto de la base de datos, el usuario y la contraseña.

4. Limpiar y cachear la configuración:

    ```bash
    php artisan config:cache
    php artisan config:clear
    php artisan cache:clear
    ```

5. Instalar dependencias de Node.js:

    ```bash
    npm install
    ```

6. Compilar los assets:
    ```bash
    npm run dev
    ```

## Ejecución del Proyecto

Para iniciar el servidor de Laravel, ejecute:

```bash
php artisan serve
```

El proyecto estará disponible en `http://localhost:8000/`

## Documentación
