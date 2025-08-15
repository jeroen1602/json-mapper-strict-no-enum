# json mapper strict mode doesn't allow enums

When using `bStrictObjectTypeChecking` mode, the default since `5.0.0`, backed enum values causes a
`JsonMapper_Exception`.

## Project structure.

Most of the code is boilerplate stuff to get php and autoloading to work. If you have php installed on your system then
you can just run `./composer.phar install` followed by `php ./index.php`.

You can also use the docker container using `docker compose up --build`. This will also run the index.php inside a
docker container.

The code that is interesting is inde the `src` folder. start with [Main.php](./src/Main.php)
