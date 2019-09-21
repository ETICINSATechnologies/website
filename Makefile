build:	check
	docker-compose build

up:
	docker-compose up -d

down:
	docker-compose down -v

restore-data:
	./provisioning/restore_data.sh

prod-logs:
	docker-compose logs -f

check:
	./provisioning/check_environment.sh

prod: down build up
