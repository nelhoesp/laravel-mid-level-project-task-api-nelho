# Proyecto Laravel Intermedio (Nelho Espinoza)

## Requisitos del sistema

Para ejecutar este proyecto Laravel, se tienen que cumplir los siguientes requisitos:

### Software y versiones mínimas

```bash
PHP: 8.2.12
Composer: 2.8.6
Laravel: 12
Node.js: 18+
npm: 10.9.2
```

## Instalación paso a paso

### 1. Clonar el repositorio

```bash
git clone https://github.com/nelhoesp/laravel-mid-level-project-task-api-nelho.git
cd laravel-mid-level-project-task-api-nelho
```

### 2. Instalar dependencias de PHP y de Javascript

```bash
composer install
npm install
```

### 3. Configurar el archivo .env

```bash
cp .env.example .env
```

### 4. Si el archivo database/database.sqlite no existe, crearlo:

```bash
touch database/database.sqlite
```

### 5. Ejecutar migraciones y seeders

```bash
php artisan migrate --seed
```

### 6. Levantar el servidor de desarrollo

```bash
php artisan serve
```

Estará disponible (por defecto) en:

```bash
http://127.0.0.1:8000/
```

