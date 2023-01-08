start:
	@echo "Start up"
	docker-compose up -d
stop:
	@echo "Stop"
	docker-compose stop
install:
	@echo "Install Requirements"
	docker-compose exec php composer install --no-progress --prefer-dist --optimize-autoloader
ssh-php:
	@echo "Login to php terminal"
	docker-compose exec php bash
ssh-web:
	@echo "Login to web terminal"
	docker-compose exec web sh
ssh-db:
	@echo "Login to db terminal"
	docker-compose exec mariadb bash
ssh-mongodb:
	@echo "Login to db terminal"
	docker-compose exec mongodb bash
update-composer:
	@echo "Update composer"
	docker-compose exec php composer self-update

