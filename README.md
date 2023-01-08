# A Docker-based installer for PHP 8.2 applications with HTTPS support.

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
Start application:   
```console
make start
```
Composer Install:
```console
make install
```
Update Composer:      
```console
make update-composer
```
Login to docker container:   
```console
make ssh-php
make ssh-web
make ssh-mariadb
make ssh-mongodb
```
## License
PHP 8.2 Docker is available under the MIT License.

