# A Docker-based installer for symfony6.2 applications with HTTPS support.

This is a start point, not sll Symfony bundles are installed.
Symfony application are created using 
```console
composer create-project symfony/skeleton:"6.2.*" my_project_directory
```
In this version `Doctrine` are not installed or configured   
Start the application then type https://localhost:4433 in browser
The local domain in Nginx configuration `my-app.local` to access it from any browser, add 127.0.0.1 my-app.local in hosts file, 

## Installed Services
- PHP8.2-fpm
- Nginx
- MariaDB 
- MongoDB
- Mailcatcher

## Installed PHP extensions
- Default extensions installed by PHP8.2-fpm plus
- bcmath
- gd with free-type and jpeg
- intl
- mysqli
- pdo_mysql
- soap
- zip
- xdebug 3.2.0
- mongodb

## Commands

Start application:   
```console
make start
```

Stop application:
```console
make stop
```

Composer Install:
```console
make install
```

Update Composer:      
```console
make update-composer
```

Login to docker containers:   
```console
make ssh-php
make ssh-web
make ssh-mariadb
make ssh-mongodb
```
## License
PHP 8.2 Docker is available under the MIT License.

