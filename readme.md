## Laravel Blog


#### Prerequisites
- php 7.0 or higher
- [composer](https://getcomposer.org/)
- mysql 5.6 or higher

#### Install guide
- Clone this repo
```
git clone https://github.com/picepice/laravelblog.git
```
- Navigate to the project folder
```
cd laravelblog
```

Install all composer dependencies
```
composer install
```

- Create Database on mysql
- Rename .env.example to .env
- Fillup the .env file

- run migration
```
php artisan migrate
```

- Run php artisan serve
```
php artisan serve
```
- Then access your localhost server at `http://localhost:8080/`