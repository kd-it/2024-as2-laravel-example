#!/bin/sh -e

# DBがSQLiteになっているとき、/app/database/database.sqliteが無ければ事前に作成しておく
if grep -q 'DB_CONNECTION=sqlite' /app/.env; then
    if [ ! -e /app/database/database.sqlite ]; then
        touch /app/database/database.sqlite
    fi
fi

# サーバー立ち上げの前に必要な処理を入れる
composer install
php artisan key:generate
php artisan migrate --seed
# サーバーを立ち上げる
exec php artisan serve --host=0.0.0.0
