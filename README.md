## Project Overview

This project is a Laravel-based simple application. Laravel is a web application framework with expressive, elegant syntax. 

- Create a table in a MySQL DB called “sermons" with 3 columns: id, title, and description. Use the data supplied by this [feed](https://stagingapi.elevationchurch.org/v2/wordpress/ec/getSermonsList).
- Create a LARAVEL API (using passport or JWT for authentication) application with an endpoint "/sermons/list". This API should read the records in the "sermons" table and return the data in JSON format.
- Create an ANOTHER LARAVEL application (not an api) that will list the sermon records in an HTML table (pagination would be great) consuming the endpoint "/sermons/list" from the API application created in step 2.

## Installing and Setting up

To run this project, you need to first install PHP 7.1 using follow command\
`$ sudo apt-get install php7.1 `\
Composer is a prerequisite to run any Laravel application. You should be able to install it using \
`$ sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer`\
Finally, to run this project, navigate to the top of this repository, and run\
`$ php artisan serve --port=8080`


## References

- [Restful Laravel API tutorial](https://www.toptal.com/laravel/restful-laravel-api-tutorial)
- [Build your first CRUD app with Laravel and MySQL](https://www.freecodecamp.org/news/laravel-5-7-tutorial-build-your-first-crud-app-with-laravel-and-mysql-15cbd06c6cef/)


