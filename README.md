# NaSD (Neveld a Saját Dominikod)

### Quick navigation

* **[🏗 Building the application](#building_construction-building-the-application)**

# 🏗 Building the application

### Quick navigation

* [Prerequisites](#prerequisites)
* [Building Vue](#building-vue)
* [Building Laravel](#building-laravel)
* [Building C#](#building-c)

### Prerequisites

* [NodeJs (18.14.0 or higher)](https://nodejs.org/en/)
* [Docker](https://www.docker.com/) & [Docker-Compose](https://docs.docker.com/compose/)
* [Visual Studio (19 or higher)](https://visualstudio.microsoft.com/vs/older-downloads/)
* [.net 5.0](https://dotnet.microsoft.com/en-us/download/dotnet/5.0)

### Building Vue

###### Production

1. Open folder named `src/vue-Frontend`
2. Install node_modules `npm i`
3. Build application `npm run build`
4. Open project root directory
5. Copy `.env-example` to `.env`
6. Start docker `dokcer-compose up -d`

###### Devopment

1. Open folder named `src/vue-Frontend`
2. Install node_modules `npm i`
3. Build application `npm run dev`

### Building Laravel

###### Production

0. Requires [Vue Production](#production) to be done first
1. Open project root directory
2. Copy `.env-example` to `.env`
3. Run `docker-compose up -d`
4. Install vendor `docker compose exec app composer install`
5. Make key `docker compose exec app php artisan key:generate`
6. Link storage `docker compose exec app php artisan storage:link`
7. Migrate Database `docker compose exec app php artisan migrate --seed`

###### Devopment

1. Open project root directory
2. Copy `.env-example` to `./src/laravel-Backend/.env`
3. Open folder named `laravel-Backend`
4. Run `docker compose -f docker-compose.yml -f docker-compose.dev.yml  up -d`
5. Install vendor `docker compose exec app composer install`
6. Make key `docker compose exec app php artisan key:generate`
7. Link storage `docker compose exec app php artisan storage:link`
8. Migrate Database `docker compose exec app php artisan migrate --seed`

### Building C#

###### Production

0. Requires [Laravel Productions](#production-1) to be done first
1. Open folder named `csharp-Admin`
2. Open `.sln` in `Visual Studio 19`
3. Left to the `Start` button there is a `dropdown menu` select `Release`
4. Press `Start`

###### Devopment

0. Requires [Laravel Devopment](#devopment-1) to be done first
1. Open folder named `csharp-Admin`
2. Open `.sln` in `Visual Studio 19`
3. Left to the `Start` button there is a `dropdown menu` select `Debug`
4. Press `Start`
