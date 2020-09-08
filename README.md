
# Proyecto con roles y permisos
El siguiente listado muestra los usuarios para acceder la plataforma.
> Contraseña para todos los usuarios: 123456789
- cristianmarint@gmail.com (admin)
	- Todos los permisos
- coordinador@gmail.com
	- Gestionar Instructores
	- Gestionar Aprendices
	- Gestionar Cursos
	- Gestionar Permisos
- asistente@gmail.com
	- Gestionar Aprendices
- instructor@gmail.com
	- Gestionar Aprendices
	- Gestionar Cursos
	- Gestionar Calificaciones (Ver Calificaciones)
- estudiante@gmail.com
	- Ver Calificaciones
	---
Nuevos usuarios con rol admin son creados via website o con el comando
```
php artisan voyager:admin admin@mail.com --create
```
