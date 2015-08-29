# Instalamos los assets
php app/console assets:install web --symlink
php app/console assetic:dump --env=dev --no-debug
