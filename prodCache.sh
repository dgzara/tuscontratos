# Removemos la carpetas temporales
rm -r app/cache
rm -r app/logs
rm -r app/spool

# Creamos nuevamente las carpetas
mkdir app/cache
mkdir app/logs
mkdir app/spool

# Instalamos los assets
php app/console assets:install web --symlink
php app/console assetic:dump --env=prod --no-debug

# Limpiamos el cache
php app/console cache:clear --env=prod

# Actualizamos la base de datos
php app/console doctrine:schema:update --force

# Creamos los permisos
HTTPDUSER=`ps aux | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1`
setfacl -R -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX app/cache app/logs app/spool web/uploads web/media
setfacl -dR -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX app/cache app/logs app/spool web/uploads web/media
