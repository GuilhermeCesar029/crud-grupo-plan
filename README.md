## 🚀 API

```
$ git clone https://github.com/GuilhermeCesar029/crud-grupo-plan.git
$ cd crud-grupo-plan/api
$ composer install
$ php artisan key:generate
$ cp .env.example .env
```
```
Crie uma base de dados com o nome de of eletro e modifique o arquivo .env 
```
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=eletro
DB_USERNAME=root
DB_PASSWORD=
```
```
$ php artisan migrate
$ php artisan serve
```

## APP
```
$ cd crud-grupo-plan/vue-app
$ npm install
$ npm run serve
```
