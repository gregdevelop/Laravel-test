<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Prueba Técnica - Desarrollador Junior PHP / Laravel

## Duración
2 horas.

## Instrucciones
Por favor, sigue las instrucciones de la prueba a continuación. Asegúrate de completar todos los pasos y sube tu código a un repositorio como un pull request.

---

## Secciones de la Prueba

### Test 1

Usando este proyecto, crea una función en PHP que reciba un array de números y devuelva el promedio de esos números. Si el array está vacío, debe devolver un mensaje de error.

#### Instrucciones:
1. Crea una función llamada `calcularPromedio` que reciba un array de números.
2. Si el array está vacío, devuelve un mensaje de error.
3. Si el array contiene números, devuelve el promedio de esos números.
4. Muestra el resultado en una vista sencilla donde se pueda ingresar números y ver el resultado.

---

### Test 2

Usando este proyecto, crea una aplicación Laravel para gestionar un listado de tareas (To-Do List). La aplicación debe incluir:

- **Modelos:**
    - Un modelo llamado `Task` con los campos:
        - `title` (string, obligatorio).
        - `status` (booleano, por defecto `false`).

- **Controlador:**
    - Implementa las operaciones CRUD:
        - Crear una nueva tarea.
        - Ver todas las tareas.
        - Cambiar el estado de una tarea a "completada".
        - Eliminar tarea.

- **Validación:**
    - Asegúrate de validar el campo `title` como obligatorio.

#### Instrucciones:
1. Crea el modelo `Task` y el controlador `TaskController` para las operaciones CRUD.
3. Define las rutas.
4. Valida que el campo `title` sea obligatorio al crear tareas.
5. Muestra una vista sencilla para crear tareas y ver el listado de tareas (puedes reciclar vistas si es necesario). En la vista se debera acceder a las opciones de crear, ver, actualizar o eliminar tareas.

---

### 3. Query test

#### Instrucciones:
1. Escribe en este README, seguido de este texto, una consulta en SQL para encontrar todos los usuarios que tienen más de 5 tareas completadas organizandola cronologicamente de la tarea creada más actual a la más antigua.
2. Explica brevemente cómo funciona la consulta.

SELECT u.id, u.name, COUNT(t.id) AS completed_tasks
FROM users u
JOIN tasks t ON u.id = t.user_id
WHERE t.status = 1
GROUP BY u.id, u.name
HAVING COUNT(t.id) > 5
ORDER BY MAX(t.created_at) DESC;

Esta consulta encuentra a los usuarios con más de 5 tareas completadas. Primero, une las tablas users y tasks, luego filtra solo las tareas completadas (t.status = 1). Agrupa los resultados por usuario, cuenta cuántas tareas tiene cada uno y asegura que sean más de 5. Finalmente, ordena los usuarios por la tarea más reciente.
---

### 4. Uso de Git

#### Instrucción:
Sube el proyecto via pull request en GitHub y realiza al menos dos commits.

---

**¡Buena suerte!**
