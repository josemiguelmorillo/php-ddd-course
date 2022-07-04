cd /application
composer install
./init --env="$env" --overwrite=All
exec "$@"