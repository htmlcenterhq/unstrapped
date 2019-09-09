# Docker for Wordpress dev

Simple Wordpress dev environment powered by containers and docker-compose.

## Setup

Install [docker-compose](https://docs.docker.com/compose/) on your dev machine. Start the dev environment:

    docker-compose up -d

WordPress dev site will be available at:

    http://localhost:8000

Destroy the environment once finished:

    docker-compose down             # keep the data stored on linked volumes
    docker-compose down --volumes   # remove the data stored on linked volumes

Useful docker-compose commands

    docker-compose logs -f
    docker-compose ps
    docker exec -it $(docker-compose ps -q wordpress) ls -l /var/www/html
    docker exec -i $(docker-compose ps -q mysql) mysql -uwordpress -pwordpress wordpress < data.sql
