<<<<<<< HEAD
# The Metin2 Website

This is a replica of the old Metin2 website in the pre-2014 era, made in Laravel. Still very much a work in progress,
it aims to be the management centre for the Metin2 stack.

## What works

-   Registering a new account
-   Account login

## What's unfinished

-   User management
-   Complete multilanguage system & English translations
-   Item-Shop with Stripe integration
-   Populating the database tables with the minimum information to start the server
-   Admin panel (which would allow you to post news, customize the navbar, etc. and also manage ingame actions such as bans)
-   Docker image
-   Ranking (with cache system for fast search)
-   Adding Grotto & DC landing pages
-   Converting Flash-based media players to HTML5.

## Development

### Image Building

To build the image, checkout the repo and run either of the following build statements

```shell
docker build -t metin2/web:test -f docker/image/prod/apache.Dockerfile .
# or
docker build -t metin2/web:test -f docker/image/prod/frankenphp.Dockerfile .
```

If you want to use this image in your deploy project, ensure to update the `WEB_IMAGE` variable in your `.env` to `metin2/web:test`.

### Testing Migrations

To test newly added migrations, use a temporary docker container that attaches to your existing deploy network.

```shell
docker run --env-file .env --network deploy_default --rm metin2/web:test "php artisan migrate"
```

Ensure that the rollback of your migration is also working as expected.
Adapt the `--step` parameter according to the number of migration files you added.

```shell
docker run --env-file .env --network deploy_default --rm metin2/web:test "php artisan migrate:rollback --step=1"
```
=======
# website_-youssef_for_m2
this is for test 
>>>>>>> 360ee871016d8e2566b9dd99930283648a56914e
