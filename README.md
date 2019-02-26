# PHP - Docker
A small PHP MVC module with Docker. This will spin up Nginx, php-fpm & MySQL to quickly get you up and running.

## Development

Code lives in `public` folder which is also the document root.

## Running Docker environment locally

```bash
docker-compose up
```

## Accessing the PHP application locally in the browser

http://localhost:9090

## Checking if containers are running

```bash
docker ps -a
```

## Removing all the containers

```bash
docker rm -f $(docker ps -a -q)
```

## Connecting to the local database

```bash
docker exec -it smarty-mysql mysql -u smarty -D smarty -psmarty
```
