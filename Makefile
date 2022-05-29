include srcs/.env

COMPOSE_FILE	= ./srcs/docker-compose.yml
VOLUMES			= $(shell docker volume ls -q)

all: up host

host:
	echo "127.0.0.1 imannouc.42.fr" | sudo tee -a /etc/hosts

up: $(DATA_DIR)
	docker-compose -f $(COMPOSE_FILE) up --build -d

down:
	docker-compose -f $(COMPOSE_FILE) down

nginx:
	docker-compose -f $(COMPOSE_FILE) exec $@ /bin/sh

wordpress:
	docker-compose -f $(COMPOSE_FILE) exec $@ /bin/sh

mariadb:
	docker-compose -f $(COMPOSE_FILE) exec $@ /bin/sh

clean: down

$(DATA_DIR):
	mkdir -p $(DATA_DIR)/db-data $(DATA_DIR)/wp-data

re: clean up
