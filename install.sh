docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd)":/var/www/html \
    -w /var/www/html \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs

sailAlias="alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'"
if grep -Fxq "${sailAlias}" ~/.bashrc
then
    echo "Sail already has alias"
else
    echo "${sailAlias}" >> ~/.bashrc
    echo "Sail has been aliased in ~/bashrc"
fi

cp .env.example .env
