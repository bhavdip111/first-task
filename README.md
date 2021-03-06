## How to run this project

### Depends upon

- PHP 8 or higher
- NodeJS 10 or higher
- Composer

### Without Docker

1. Install composer dependencies

```
composer install
```

2. Install node dependencies

```
yarn install
or
npm install
```

3. Build frontend asset

```
yarn dev
or
npm run dev
```

4. Copy `.env.example` to `.env` and fill out the database informations

```
cp .env .env.example
```

5. Create database and update configuration in .env file

```
cp .env .env.example
```

6. Run key generate, migrations and seeders

```
php artisan key:generate

php artisan migrate --seed

or

php artisan migrate
php artisan db:seed
```

7. Run Laravel server

```
php artisan serve
```

You can access the project at `http://localhost:8000`


8. Run test cases

```
./vendor/bin/phpunit
```

9. Attached recorded demo file screen-recording.mp4


### With Docker

1. Run Laravel Sail

```
./vendor/bin/sail up -d
```

2. Run migrations and seeders

```
./vendor/bin/sail artisan migrate --seed
```

## How to run test cases

### Without Docker

```
./vendor/bin/phpunit
```

### With Docker

```
./vendor/bin/sail test
```
