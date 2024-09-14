# Definir cores
GREEN := \033[0;32m
RED := \033[0;31m
YELLOW := \033[1;33m
RESET := \033[0m

# Mensagens
STARTING := $(GREEN)Starting...$(RESET)
COMPLETED := $(GREEN)Completed!$(RESET)
ERROR := $(RED)Error!$(RESET)
TASK := $(YELLOW)Running task:$(RESET)

# Targets
.PHONY: all up down restart build logs clean

all: up

up:
	@echo "$(TASK) Starting containers"
	@docker compose up -d
	@echo "$(COMPLETED) Containers are up and running"

down:
	@echo "$(TASK) Stopping and removing containers"
	@docker compose down
	@echo "$(COMPLETED) Containers stopped and removed"

restart: down up

build:
	@echo "$(TASK) Building images"
	@docker compose build
	@echo "$(COMPLETED) Images built"

logs:
	@echo "$(TASK) Displaying logs"
	@docker compose logs -f

clean: down
	@echo "$(TASK) Cleaning up unused resources"
	@docker volume prune -f
	@docker network prune -f
	@docker rmi -f $$(docker images -q)
	@docker system prune -f
	@echo "$(COMPLETED) Cleanup completed"
