#!bin/bash

GREEN='\033[0;32m'
BLUE='\033[0;34m'

# docker-compose run --rm php composer update --prefer-dist
# docker-compose run --rm php composer install  

google-chrome http://localhost:8888/index.php?
echo -e "${BLUE}projeto disponivel em: ${GREEN}http://localhost:8888/index.php?${NC}"

