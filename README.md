# Examen1-OnixStore
# contenido de proyecto actualizado
## Pasos para ejecutar el proyecto

0. **Abrir Visual Studio Code y su terminal integrada**  
   - Abre Visual Studio Code.  
   - Abre la terminal integrada (menú **Terminal > Nueva Terminal** o atajo **Ctrl+j**).  
   - En esta terminal se ejecutarán todos los comandos siguientes.

1. **Clonar el repositorio:**
   ejecuta los comandos:
   git clone https://github.com/by-onix/Examen1-OnixStore.git
   cd Examen1-OnixStore

2. **instalar las dependencias **
    Ejecuta:
   composer install

3.**Crear la base de datos** 
Crea una base de datos vacía llamada `onixdb` en tu servidor de base de datos (por ejemplo, usando MySQL con phpMyAdmin o desde la consola).

4. **Copia el archivo de entorno:**
 Ejecuta:
 cp .env.example .env

5.**Configurar el archivo `.env`** 
Verifica que el archivo `.env` esté configurado para usar la base de datos `onixdb`, con las credenciales correctas:
 DB_DATABASE=onixdb
 DB_USERNAME=tu_usuario
 DB_PASSWORD=tu_contraseña

6. **Genera la clave de la aplicación:**
 Ejecuta:
 php artisan key:generate

7.**ejecutar migraciones** 
Ejecuta las migraciones para crear las tablas en la base de datos:
   php artisan migrate

8. **(Opcional) Ejecuta los seeders** 
si necesitas cargar los datos de prueba, ejecuta:
 php artisan db:seed

9. **Inicia el servidor de desarrollo**
 Ejecuta:
 php artisan serve


10.**Probar la API con Postman** 
 Usa Postman con la direccion del servidor para probar la API:
   
   -**Registro de usuario**
 Endpoint: - POST /api/register
   - JSON Body:
   ```
   {
     "name": "Tu Nombre",
     "email": "email@ejemplo.com",
     "password": "contraseña",
     "password_confirmation": "contraseña"
   }
   ```
 -**inicio de Sesion**
 Endpoint: - POST /api/login
   - JSON Body:
   ```
   {
     "email": "email@ejemplo.com",
     "password": "contraseña"
   }