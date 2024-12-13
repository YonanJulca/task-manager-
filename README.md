# Task Manager App

Este proyecto es un sistema de gestión de tareas desarrollado con **Laravel** para el backend y **React** para el frontend. Actualmente, se encuentra en proceso de desarrollo, específicamente con problemas relacionados con la integración de pagos Premium mediante PayPal.

## Características principales

- **Autenticación de usuarios**: Inicio de sesión y cierre de sesión.
- **Gestión de tareas**: Crear, leer, actualizar y eliminar tareas.
- **Estados de tareas**: Marcar tareas como completadas o pendientes.
- **Funciones Premium**: En proceso de implementación con PayPal Sandbox.

## Capturas de pantalla

### Inicio de sesión
![Login](https://github.com/tu-usuario/task-manager-app/blob/main/screenshots/login.png)

### Panel principal (Dashboard)
![Dashboard](https://github.com/tu-usuario/task-manager-app/blob/main/screenshots/dashboard.png)

### Función Premium
![Premium Feature](https://github.com/tu-usuario/task-manager-app/blob/main/screenshots/premium-feature.png)

### Proceso de pago con PayPal
![PayPal Payment](https://github.com/tu-usuario/task-manager-app/blob/main/screenshots/paypal-payment.png)
![PayPal Credit Card](https://github.com/tu-usuario/task-manager-app/blob/main/screenshots/paypal-credit-card.png)

### Pruebas en Postman
#### Actualización de una tarea
![Postman PUT](https://github.com/tu-usuario/task-manager-app/blob/main/screenshots/postman-put.png)

#### Obtención de tareas
![Postman GET](https://github.com/tu-usuario/task-manager-app/blob/main/screenshots/postman-get.png)

#### Creación de una tarea
![Postman POST](https://github.com/tu-usuario/task-manager-app/blob/main/screenshots/postman-post.png)

#### Eliminación de una tarea
![Postman DELETE](https://github.com/tu-usuario/task-manager-app/blob/main/screenshots/postman-delete.png)

## Instalación

1. Clona el repositorio:
   ```bash
   git clone https://github.com/tu-usuario/task-manager-app.git
   ```

2. Ve al directorio del backend e instala las dependencias:
   ```bash
   cd task-manager-backend
   composer install
   ```

3. Configura el archivo `.env` con tus credenciales de base de datos y PayPal.

4. Ejecuta las migraciones:
   ```bash
   php artisan migrate
   ```

5. Inicia el servidor de desarrollo:
   ```bash
   php artisan serve
   ```

6. Ve al directorio del frontend e instala las dependencias:
   ```bash
   cd ../task-manager-frontend
   npm install
   ```

7. Inicia el servidor de desarrollo del frontend:
   ```bash
   npm start
   ```

## Tecnologías utilizadas

- **Backend**: Laravel 9
- **Frontend**: React
- **Base de datos**: MySQL
- **Autenticación**: Sanctum
- **Pagos**: PayPal Sandbox

## Futuras mejoras

- Solución de problemas con la integración de PayPal Premium.
- Implementación de notificaciones en tiempo real con WebSockets.
- Mejora de la interfaz de usuario con diseño responsivo.

## Contribuciones

Este proyecto está abierto a contribuciones. Si deseas colaborar, por favor, haz un fork del repositorio, realiza tus cambios en una rama y envía un pull request.

## Licencia

Este proyecto está bajo la Licencia MIT.

