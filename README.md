

## DEPLOYING
### 🏠 [Requirements](Requirements)
<ul>
	<li>php 8.0 and above</li>
	<li>composer version 2 </li>
	<li>Mysql live database </li>
    <li>Mysql test database </li>
    <li>If using docker - You will only need docker and docker compose installed</li>
</ul>

## Setting up and Running the API

### ✨ [Clone](Clone the repo)

```sh
  git clone https://github.com/Mangweli/donation-platform.git
  cd donation-platform
```

### ✨ [Dependancies](Install Dependancies)

```sh
  composer install
```

### ✨ [env](Environment Variables)

> Copy `.env.example` to `.env`

```sh
  cp .env.example .env 
```
edit .env file and enter your environment variables

### ✨ [Artisan](Run Artisan Commands)

```sh
  Run php artisan optimize:clear 
  Run php artisan migrate
  Run php artisan serve
```

(Optional)
## Run tests

```sh
php artisan test or composer test
```

## DEPLOYING WITH DOCKER
### 🏠 [Requirements](Requirements)

> Docker and docker compose Installed on your machine

## Setting up and Running the API

### ✨ [Clone](Clone the repo)

```sh
  git clone https://github.com/Mangweli/donation-platform.git
  cd matcher
```

### ✨ [env](Environment Variables)

> Copy `.env.example` to `.env`

```sh
  cp .env.example .env 
```
<ul>
	<li>Edit .env file and enter your environment variables</li>
	<li>Make sure DB_HOST is changed to matcher-mysql-db and DB_HOST_TEST changed to matcher-mysql-db-test</li>
</ul>

## Docker Commands

<p>Run the below command to bring all the services up</p>

```sh
docker-compose up -d

```
(Optional)
## Run Tests
```sh
docker exec -it matcher-app bash
php artisan test or composer test

```
<p>Similarly you can just run</p>

```sh
docker-compose exec -T matcher-app  php artisan test or docker-compose exec -T matcher-app  composer test
```
## Running the App

<p>The app will be live on 127.0.0.1:8081</p>
<p>This can be accessed through any  browsers or any api simulation app</p>

## Tech stack

<p>Laravel - php</p>
<p>Mysql for database management</p>
<p>Nginx as webserver</p>



