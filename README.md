# Technical test

### Launch project
`docker-compose up`
`docker exec -it testproject sh -c "bin/console doctrine:schema:create"`
`docker exec -it testproject sh -c "bin/console doctrine:fixtures:load"`

### URLs
#### List/search products
```
curl http://localhost:8888/products
curl http://localhost:8888/products?page=1&limit=20
```

### Launch shell
`docker exec -it testproject bash`
`docker exec -it testproject sh -c "bin/console"`

### Tooling commands
#### CS Fixer with docker:
`docker exec -it testproject sh -c "vendor/bin/php-cs-fixer fix --config .php-cs-fixer.dist.php"`

#### CS Fixer locally:
`api/vendor/bin/php-cs-fixer fix --config api/.php-cs-fixer.dist.php`

#### PHPStan
`docker exec -it testproject sh -c "vendor/bin/phpstan"`

#### PHPStan locally:
`api/vendor/bin/phpstan --configuration=api/phpstan.dist.neon`