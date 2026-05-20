# Sistema de Reservas de Hotel

Este es el repositorio central del proyecto. Todas las nuevas funciones deben integrarse hacia la rama `develop`.

## Requisitos Previos
* PHP >= 8.2
* Composer
* MySQL o PostgreSQL

## Pasos para la Instalación

1. **Clonar el repositorio y entrar a la carpeta:**

```bash
git clone https://github.com/itspao529/hotel-reservas.git
cd hotel-reservas
```

2. **Instalar las dependencias de PHP con Composer:**

```bash
composer install
```

3. **Crear el archivo de configuración de entorno:**

```bash
cp .env.example .env
```

(Abre el archivo `.env` creado y configura el nombre de tu base de datos, usuario y contraseña).

4. **Generar la clave de seguridad de la aplicación:**

```bash
php artisan key:generate
```

5. **Ejecutar las migraciones y los datos de prueba (Seeders):**

```bash
php artisan migrate --seed
```

6. **Iniciar el servidor local:**

```bash
php artisan serve
```