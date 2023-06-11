# Description

This is a basic Crud Api of warehouse management systems of cars 



## Server Requirements and installation
The Laravel framework has a few system requirements. You should ensure that your web server has the following minimum PHP version and extensions:

* PHP >= 8.1
* Ctype PHP Extension
*cURL PHP Extension
*DOM PHP Extension
*Fileinfo PHP Extension
* Filter PHP Extension
* Hash PHP Extension
* Mbstring PHP Extension
* OpenSSL PHP Extension
* PCRE PHP Extension
* PDO PHP Extension
* Session PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

```bash
composer install --optimize-autoloader --no-dev
```
```bash
php artisan config:cache
```


```bash
php artisan event:cache
```


```bash
php artisan route:cache
```
The debug option in your config/app.php configuration file determines how much information about an error is actually displayed to the user. By default, this option is set to respect the value of the APP_DEBUG environment variable, which is stored in your application's .env file.

In your production environment, this value should always be false

## PostMan collection
check the postman api Folder and import the json file into post man to add the collection in postman app
