# Instalamos los assets
php app/console assets:install web --symlink
php app/console assetic:dump --env=dev --no-debug
php app/console assetic:dump --env=prod --no-debug

# Limpiamos el cache
php app/console cache:clear
php app/console cache:clear --env=prod

# Creamos los permisos
HTTPDUSER=`ps aux | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1`
setfacl -R -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX app/cache app/logs web/media web/upload
setfacl -dR -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX app/cache app/logs web/media web/upload
