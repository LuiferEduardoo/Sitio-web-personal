# Sitio Web Personal - Claude Context

## Descripción del Proyecto

Sitio web personal construido con arquitectura **monorepo** que combina:
- **Frontend**: ReactJS 18.2 con Vite
- **Backend**: Laravel 10.8 API con Sanctum para autenticación
- **Base de datos**: MySQL

## Tecnologías Principales

### Frontend
- React 18.2, React Router DOM 6.9, Vite
- Tailwind CSS 3.3 (con preflight desactivado)
- Material-UI 5.14, Emotion
- Axios 1.4, Crypto-JS, React Markdown
- Sonner (notificaciones), Moment.js

### Backend
- Laravel 10.8, PHP 8.1+
- Laravel Sanctum (autenticación)
- MySQL

## Scripts Disponibles

### Frontend (desde raíz del proyecto)
```bash
npm start          # Inicia servidor de desarrollo React (puerto 3000)
npm run build      # Construye para producción
```

### Backend (desde /api)
```bash
php artisan serve            # Inicia servidor Laravel (puerto 8001)
php artisan migrate          # Ejecuta migraciones
php artisan migrate:fresh    # Reinicia base de datos
php artisan tinker           # Consola interactiva
composer dump-autoload       # Regenera autoload
```

## Estructura de Directorios

```
/
├── api/                     # Backend Laravel
│   ├── app/
│   │   ├── Http/Controllers/    # Controladores API
│   │   ├── Models/              # Modelos Eloquent
│   │   ├── Services/            # Lógica de negocio
│   │   └── Helpers/             # Helpers globales
│   ├── database/migrations/     # Migraciones
│   ├── routes/                  # Rutas API
│   └── .env                     # Configuración backend
│
├── src/                     # Frontend React
│   ├── components/              # Componentes reutilizables
│   ├── pages/                   # Páginas principales
│   ├── router/                  # Configuración rutas
│   ├── services/                # Cliente HTTP API
│   └── utils/                   # Utilidades
│
├── public/                  # Archivos estáticos
└── tailwind.config.js      # Configuración Tailwind
```

## Variables de Entorno Clave

### Frontend (.env)
```env
REACT_APP_API_WEB_SITE=http://localhost:8001/v1
REACT_APP_API_KEY=example
REACT_APP_SECRET_KEY=thisIsSecretKey
REACT_APP_API_SERVICE_IMAGE=http://localhost:8000/api
```

### Backend (api/.env)
```env
DB_CONNECTION=mysql
DB_HOST=192.241.146.58
DB_DATABASE=PERSONAL_WEBSITE
DB_USERNAME=root
DB_PASSWORD=RviMnU[)|Ym72.{yw^9t

IMAGE_SERVICE=http://127.0.0.1:8000/api
```

## Sistema de Rutas

### Frontend (React Router)
- **Públicas**: `/`, `/portfolio/*`, `/blog/*`, `/contact`
- **Privadas**: `/login`, `/administration-panel/*`

### Backend (Laravel API)
```
POST /v1/email           # Contacto
POST /v1/login           # Autenticación
GET  /v1/skills/{id}     # Habilidades
GET  /v1/projects/{id}   # Proyectos
GET  /v1/blogposts/{id}  # Blog posts

# Rutas privadas (auth:sanctum)
GET    /v1/user
POST   /v1/skills/create
PUT    /v1/skills/{id}
DELETE /v1/skills/{id}
# (CRUD completo para cada recurso)
```

## Convenciones de Código

### Nomenclatura
- **PascalCase**: Componentes React, clases PHP
- **camelCase**: Funciones JavaScript, métodos PHP
- **snake_case**: Tablas y columnas SQL
- **kebab-case**: Rutas URL, archivos CSS

### Patrones
- **Componentes funcionales** con hooks
- **async/await** para código asíncrono
- **CSS Modules** para estilos aislados
- **Lazy loading** para componentes pesados
- **Service Layer** en backend para lógica de negocio

### Autenticación
- Tokens JWT con Laravel Sanctum
- Encriptación de tokens con Crypto-JS
- Sesiones con cookies

## Funcionalidades Principales

### Gestión de Contenido (CMS)
- Blog posts con categorías
- Portafolio de proyectos
- Habilidades técnicas
- Sistema de categorías jerárquico

### Sistema de Imágenes
- Subida múltiple con FormData
- Servicio de imágenes separado (puerto 8000)
- Asociación dinámica con entidades

### Autenticación
- Panel de administración
- CRUD completo para todos los recursos
- Control de visibilidad y estado

## Notas Importantes

1. **Tailwind CSS**: Preflight desactivado para evitar conflictos con Material-UI
2. **Servidores**: Frontend (3000), Backend API (8001), Servicio imágenes (8000)
3. **Helpers autoload**: Los helpers en `app/Helpers/` se cargan automáticamente vía composer
4. **Rutas API**: Todas las rutas usan prefijo `/v1`
5. **Imágenes**: El servicio de imágenes es un servidor separado que maneja el almacenamiento

## Desarrollo

### Iniciar proyecto completo
```bash
# Terminal 1 - Backend
cd api && php artisan serve

# Terminal 2 - Frontend
npm start
```

### Problemas comunes
- **Error CORS**: Verificar configuración en `api/config/cors.php`
- **Imagen no carga**: Asegurar servicio de imágenes corriendo en puerto 8000
- **Autenticación falla**: Limpiar cookies y verificar tokens en localStorage

## Testing

No hay tests configurados actualmente. El proyecto usa PHPUnit (Laravel) pero no hay tests implementados.
