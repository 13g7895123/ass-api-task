setup:
	@make build
	@make up 
	@make composer-update
build:
	docker-compose build --no-cache --force-rm
stop:
	docker-compose stop
up:
	docker-compose up -d
composer-update:
	docker exec ass-api-task bash -c "composer update"
	docker exec ass-api-task bash -c "php artisan key:generate"
data:
	docker exec ass-api-task bash -c "php artisan migrate"
	docker exec ass-api-task bash -c "php artisan db:seed"
key:
	docker exec ass-api-task bash -c "php artisan key:generate"
p:
	docker exec ass-api-task bash -c "chmod -R 757 storage"
	docker exec ass-api-task bash -c "chmod -R 757 database"
	docker exec ass-api-task bash -c "chmod -R 757 app"
bash:
	docker exec -it ass-api-task bash
