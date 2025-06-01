# Miniature Cars

This is an ecommerce webapp written using the Symfony PHP framework, selling miniature cars.

## Database setup

The webapp expects a locally running MySQL server instance on port 3306, with root password `root` (the webapp will attempt to connect to the server as root). A database titled `ecommerce` is expected to exist.

If you wish to change any of these parameters (SQL server type (MySQL, Postgres, etc.), server port, server connection username, password, database name, etc.), you may do so my modifying the `DATABASE_URL` attribute in `.env`.

Once you have made the necessary modifications (either to your local MySQL server or to the `.env` file), run the following command in order to generate the tables necessary for the webapp:
```
php bin/console make:migration
```

## Running

Once the database is properly setup, run the following command to start the web server on local port 8000:
```
symfony server:start
```
