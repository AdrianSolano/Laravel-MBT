# MainBattleTank

MainBattleTank(MBT) es una aplicacion desarrollada durante el curso de Desarrollo web en Entorno Servidor



### Instalación del proyecto

Despues de instalar el stack de desarrollo, se clona el repositorio:

```
git clone https://github.com/AdrianSolano/Laravel-MBT.git
```

Entrar al directorio e instalar dependencias Backend:

```
composer install
```

Crear en el servidor **MySql** la base de dato con nombre **'mbtdb'** . Asimismo configurar un usuario (nombre y contraseña) con permisos suficiente de acceso a dichas bases de datos.

Renombrar el archivo **.env.example** a **.env** cumplimentando los datos de acceso al SGBD:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mbtdb
DB_USERNAME=usuario_mysql
DB_PASSWORD=password_mysql
```

Generar la clave de cifrado:

```
php artisan key:generate
```

Lanzar las migraciones, cargando los datos de la base de datos con las seeds(--seed);

```
php artisan migrate --seed
```

Configurar en el **.env** los datos de acceso a un servicio de envío de email:

```
MAIL_DRIVER=log
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```

Llegados a este punto la aplicación ya deberia funcionar y ser operativa desde la url <http://laravel-mbt.test>.