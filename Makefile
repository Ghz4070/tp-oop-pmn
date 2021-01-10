.SILENT:
.PHONY: help start install reload cs cs-display
.DEFAULT_GOAL = help

DOCKER_RUN=@docker run
PORT?=8080
PWD: pwd
VOLUME=-v $(PWD):/app

COM_COLOR   = \033[0;34m
OBJ_COLOR   = \033[0;36m
OK_COLOR    = \033[0;32m
ERROR_COLOR = \033[0;31m
WARN_COLOR  = \033[0;33m
NO_COLOR    = \033[m

## —— Php & Apache ———————————————————————————————————————————————————————————————
start:	## Lancer le container docker (PORT=[customPort])
	echo "Lancement ... $(OK_COLOR)http://localhost:$(PORT)$(NO_COLOR)"
	$(DOCKER_RUN) -v $(PWD):/var/www/html --rm -p $(PORT):80 php:apache

## —— Composer ———————————————————————————————————————————————————————————————

install: ## Installer les dependances
	echo "$(OK_COLOR)Install dependances ...$(NO_COLOR)"
	$(DOCKER_RUN) --rm $(VOLUME) composer install

reload: ## Actualiser l'autoload
	echo "$(OK_COLOR)Refresh ...$(NO_COLOR)"
	$(DOCKER_RUN) --rm $(VOLUME) composer dump-autoload -o

## —— Php cs fixer ———————————————————————————————————————————————————————————————

cs: ## Formatage du php cs fixer
	echo "$(OK_COLOR)Fixing ...$(NO_COLOR)"
	$(DOCKER_RUN) $(VOLUME) phpqa/php-cs-fixer fix src

cs-display: ## Visualiser les erreurs
	echo "$(OK_COLOR)Display error ...$(NO_COLOR)"
	$(DOCKER_RUN) $(VOLUME) phpqa/php-cs-fixer fix --dry-run src

## —— Help 🛠️️ ———————————————————————————————————————————————————————————————
help: ## Liste des commandes
	@grep -E '(^[a-zA-Z0-9_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}{printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'
