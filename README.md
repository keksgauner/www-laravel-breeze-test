# www-laravel-login-test

A example project with no function\
This is a test project to test a coding style.\
This project has no function and should not be used in any way.

# Building Panel Assets

```sh
/bin/bash -c "$(curl -fsSL https://php.new/install/linux)"

composer install --no-dev --optimize-autoloader

php artisan key:generate --force
php artisan migrate --seed --force

npm install && npm run build

npm run dev
```
