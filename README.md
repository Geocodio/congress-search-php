# PHP Congress Search Sample App

This sample application was designed to demonstrate how to integrate the Geocodio API with a PHP application utilizing our [first-party PHP library](https://github.com/Geocodio/geocodio-library-php). You can examine the code to see how the API calls were implemented.

It allows users to input an address and retrieve the Congressional district data for that address, including basic information for each of their federal-level legislators. 

To get started, clone and open the repo. Dependencies should already be installed, but to make sure they are up to date, run:

`composer install`

You may want to double check the `composer.json` to ensure that the following packages are required:
`"illuminate/collections", "geocodio/geocodio-library-php", "vlucas/phpdotenv"`

Once you've installed all your dependencies, spin up a PHP server. 

`php -S localhost:8000`

Go to `localhost:8000` in your browser and the application should load. Enter an address into the search bar at the top of the screen, click "Search" and your results will appear.