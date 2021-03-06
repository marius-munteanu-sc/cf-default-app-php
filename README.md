# CF Default App PHP

The default PHP app that will be pushed into the Swisscom Application Cloud if no source code is provided.

## Run locally

1. Install [PHP](https://secure.php.net/manual/en/install.php)
1. Run `php -S localhost:3000 -t htdocs`
1. Visit [http://localhost:3000](http://localhost:3000)

## Run in the cloud

1. Install the [cf CLI](https://github.com/cloudfoundry/cli#downloads)
1. Run `cf push --random-route`
1. Visit the given URL

## Create ZIP

1. Run `zip -r php_app.zip htdocs`
