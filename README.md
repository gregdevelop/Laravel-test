<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Prueba Técnica - Desarrollador Junior PHP / Laravel

## Duración
1 hora.

## Instrucciones
Por favor, sigue las instrucciones de la prueba a continuación. Asegúrate de completar todos los pasos y sube tu código a un repositorio como un pull request.

---

## Secciones de la Prueba

### 1. Fundamentos de PHP

Crea una función en PHP que reciba un array de números y devuelva el promedio de esos números. Si el array está vacío, debe devolver un mensaje de error.

#### Instrucciones:
1. Crea una función llamada `calcularPromedio` que reciba un array de números.
2. Si el array está vacío, devuelve un mensaje de error.
3. Si el array contiene números, devuelve el promedio de esos números.
4. Muestra el resultado en una vista sencilla donde puedas ingresar números y ver el resultado.

---

### 2. Laravel: CRUD Básico

#### Tarea:
Crea una aplicación Laravel para gestionar un listado de tareas (To-Do List). La aplicación debe incluir:

- **Modelos:**
    - Un modelo llamado `Task` con los campos:
        - `title` (string, obligatorio).
        - `status` (booleano, por defecto `false`).

- **Controlador:**
    - Implementa las operaciones CRUD:
        - Crear una nueva tarea.
        - Ver todas las tareas.
        - Cambiar el estado de una tarea a "completada" (no es necesario eliminar).

- **Rutas:**
    - Define las rutas necesarias en `routes/web.php`.

- **Validación:**
    - Asegúrate de validar el campo `title` como obligatorio.

#### Instrucciones:
1. Crea el modelo `Task` y la migración correspondiente.
2. Crea un controlador `TaskController` para las operaciones CRUD.
3. Define las rutas para las operaciones Crear y Ver.
4. Valida que el campo `title` sea obligatorio al crear tareas.
5. Muestra una vista sencilla para crear tareas y ver el listado de tareas (puedes reciclar vistas si es necesario).

---

### 3. Query test

#### Instrucciones:
1. Escribe en este README, seguido de este texto, una consulta en SQL para encontrar todos los usuarios que tienen más de 5 tareas completadas organizandola cronologicamente de la tarea creada más actual a la más antigua.
2. Explica brevemente cómo funciona la consulta.

---

### 4. Uso de Git

#### Instrucción:
Sube el proyecto via pull request en GitHub y realiza al menos dos commits.

---

**¡Buena suerte!**
