`sudo docker run -it -v .:/var/www/html -v ~/.gitconfig:/.gitconfig -u $UID:$GID --rm --userns=host --entrypoint="" larueli/php-symfony-base-image:8.2 bash`

`COMPOSER_HOME=/tmp PLATFORM_PROJECT_ENTROPY=yes symfony new --webapp backend`

https://github.com/symfony-cli/symfony-cli/issues/316

https://github.com/symfony-cli/symfony-cli/blob/2ba4c375ecb314a65461a7100285e924a64773b0/util/util.go#L29

https://github.com/symfony-cli/symfony-cli/blob/2ba4c375ecb314a65461a7100285e924a64773b0/util/util.go#L33

https://github.com/symfony-cli/symfony-cli/blob/2ba4c375ecb314a65461a7100285e924a64773b0/util/cloud.go#L24

`sudo docker run -it -v .:/app -u $UID:$GID --rm --userns=host --entrypoint="" larueli/node-base-image:18 bash`

`pnpm create vite`

https://vitejs.dev/guide/

UID=${UID} GID=${GID} docker compose -f docker-compose.yml -f docker-compose.dev.yml


composer require api
composer require symfony/apache-pack
composer require webonyx/graphql-php
composer require gedmo/doctrine-extensions
