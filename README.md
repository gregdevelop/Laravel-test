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
3. Query de SQL normal.

#### Consulta SQL para Usuarios con más de 5 Tareas Completadas

SELECT users.id AS user_id, users.name AS user_name, COUNT(tasks.id) AS completed_tasks_count
FROM users
JOIN tasks ON users.id = tasks.user_id
WHERE tasks.status = true
GROUP BY users.id, users.name
HAVING COUNT(tasks.id) > 5
ORDER BY MAX(tasks.created_at) DESC;

Selección de columnas:

1. users.id AS user_id: Selecciona el ID del usuario.
2. users.name AS user_name: Selecciona el nombre del usuario.
3. COUNT(tasks.id) AS completed_tasks_count: Calcula el número de tareas completadas (status = true) por cada usuario.

Unión de tablas:

4. La consulta usa JOIN para unir las tablas users y tasks a través de la relación users.id = tasks.user_id, asegurando que cada tarea esté vinculada a su usuario correspondiente.

5. WHERE tasks.status = true: Filtra las tareas para incluir solo aquellas que están completadas (status = true).

Agrupación y conteo:

6. GROUP BY users.id, users.name: Agrupa los resultados por usuario para calcular el conteo de tareas completadas por cada usuario.

Filtrado por cantidad de tareas:

7. HAVING COUNT(tasks.id) > 5: Filtra a los usuarios que tienen más de 5 tareas completadas.

Orden cronológico:

8. ORDER BY MAX(tasks.created_at) DESC: Ordena a los usuarios en base a la fecha más reciente en que una de sus tareas fue completada, de la más nueva a la más antigua.

---

### 4. Uso de Git

#### Instrucción:
Sube el proyecto via pull request en GitHub y realiza al menos dos commits.

---

**¡Buena suerte!**
