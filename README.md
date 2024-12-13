# Task Manager App

Este es un proyecto en desarrollo de una aplicación de gestión de tareas construida con **React** para el frontend y **Laravel** para el backend. La aplicación incluye autenticación, gestión de tareas, y una funcionalidad premium con integración de **PayPal**.

---

## Funcionalidades

- **Autenticación de usuarios:** Registro e inicio de sesión.
- **Gestión de tareas:** Crear, leer, actualizar y eliminar tareas.
- **Estado de tareas:** Marcar tareas como completadas o pendientes.
- **Funcionalidad premium:** Acceso a características adicionales mediante integración con PayPal (en desarrollo).

---

## Capturas de Pantalla

### Página de Inicio de Sesión
![Captura de pantalla (668)](https://github.com/user-attachments/assets/6bacd6ae-94b6-477a-bb21-0585ad7dc95e)


### Panel de Gestión de Tareas
![Captura de pantalla (669)](https://github.com/user-attachments/assets/f8ddb490-a5a7-4507-806f-924d5952ab87)


### Funcionalidad Premium (PayPal)
![Captura de pantalla (670)](https://github.com/user-attachments/assets/d4b8bbd3-7162-4e23-8e06-9a7c32ff4df8)


### Proceso de Pago con PayPal
- Ingreso de correo electrónico en PayPal:
  ![Captura de pantalla (671)](https://github.com/user-attachments/assets/78bbc940-ec58-4feb-98ae-aaee3d455226)
  ![Captura de pantalla (672)](https://github.com/user-attachments/assets/a802f78b-358b-4ef9-bd4e-ef9150e5e144)



### Uso del API con Postman

#### Crendenciales ( 1|5iID68teA7PyTMoxvpzXhPbg2peyN0q48QxeQrsJc0fc64a7 )
![Captura de pantalla (682)](https://github.com/user-attachments/assets/0e741264-f914-453c-b832-4c40076f1326)

#### Obtener Tareas
![Captura de pantalla (675)](https://github.com/user-attachments/assets/51caa19a-5cc6-4f30-943f-72e91dc86b58)


#### Crear Tarea
![Captura de pantalla (676)](https://github.com/user-attachments/assets/f9dfd7a9-bfa3-482f-bded-4af043bedd67)


#### Actualizar Tarea
![Captura de pantalla (677)](https://github.com/user-attachments/assets/cc0dbd3b-6565-4a49-bf7f-0c960e229582)


#### Eliminar Tarea
![Captura de pantalla (679)](https://github.com/user-attachments/assets/1f14e2e3-3cae-4f74-a701-a876e8957cf9)


---

## Instalación y Configuración

### Requisitos Previos
- Node.js y npm
- PHP y Composer
- MySQL o cualquier base de datos compatible con Laravel

### Instalación

1. Clona el repositorio:
   ```bash
   git clone https://github.com/tuusuario/task-manager.git
   cd task-manager
   ```

2. Configura el backend:
   ```bash
   cd backend
   composer install
   cp .env.example .env
   php artisan key:generate
   php artisan migrate
   php artisan serve
   ```

3. Configura el frontend:
   ```bash
   cd frontend
   npm install
   npm start
   ```

---

## Uso del Proyecto

### Backend
El backend está configurado con Laravel y expone las siguientes rutas de la API:

- **GET** `/api/tasks`: Obtener todas las tareas.
- **POST** `/api/tasks`: Crear una nueva tarea.
- **PUT** `/api/tasks/{id}`: Actualizar una tarea existente.
- **DELETE** `/api/tasks/{id}`: Eliminar una tarea.

### Frontend
El frontend está construido con React y ofrece las siguientes vistas:
- **Inicio de sesión**
- **Panel de tareas**
- **Funcionalidad premium (en desarrollo)**

---

## Estado del Proyecto
El proyecto está en desarrollo. La funcionalidad básica está implementada, pero la integración con PayPal está en proceso.

---

## Contribuciones
Si deseas contribuir a este proyecto, por favor abre un *issue* o crea un *pull request* con tus sugerencias.

---

## Licencia
Este proyecto está licenciado bajo la [MIT License](LICENSE).

