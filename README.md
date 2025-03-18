# My Backend-Frontend Project for the evaluation of a mathematical expression

Ce projet combine un backend Laravel et un frontend Vue.js pour évaluer des expressions mathématiques parenthèsées.

This project combines a Laravel backend and a frontend Vue.js to evaluate parenthesized mathematical expressions.

## Installation of tools and project implementations

1. Installing PHP >= 8
    $ sudo apt update
    $ sudo apt install php php-cli php-fpm php-mysql php-pgsql php-curl php-json php-mbstring
    $ php-xml php-zip

2. Installing Composer to manage PHP dependencies
    $ curl -sS https://getcomposer.org/installer | php
    $ sudo mv composer.phar /usr/local/bin/composer

3. Installation and configuration of MySQL for database management
    $ sudo apt install mysql-server
    $ sudo mysql_secure_installation

4. Installing Nginx
    $ sudo apt install nginx php-fpm

5. Installing Node.js and npm (for Vue.js)
    $ curl -fsSL https://deb.nodesource.com/setup_18.x | sudo -E bash -
    $ sudo apt install nodejs

6. CLI View Installation
    $ sudo npm install -g @vue/cli

7. Creation of backend project
    $ mkdir manage_parent_express
    $ cd manage_parent_express
    $ composer create-project laravel/laravel backend
    $ cd backend

8. Creating a remote repository on GitHub
9. Cloning the project
   $ git clone https://github.com/malko1278/manage_parent_express.git

10. Configuring the API
    $ php artisan make:controller ExpressionController
    Added the function to evaluate the mathematical expression;
    Definition of the access route to the function;
    - Problems encountered in the configuration:
      Non-existence of some files:
      * routes/api.php;
      * app/Providers/RouteServiceProvider.php;
      * Added the "providers" tables, the "Laravel Framework Service Providers" and the "middleware" in "config/app.php": They were absent;
      * Creation in "app/Http/Middleware/" of the file "VerifyCsrfToken.php";
    Creation of the representation model of a mathematical expression with the addition of "ExpressionHelper" and "Expression";
    Creation of the mathematical expression model in the database.
    $ php artisan make:model Expression -m
    Adding the necessary fields in the migrations file;
    Execution of the migration
    $ php artisan migrate

11. Testing the API
    $ php artisan serve

12. Creation of frontend project
    $ cd manage_parent_express
    $ vue create frontend
    $ cd frontend
    $ npm install axios

13. Configuring views
    Addition of the necessary components of the user interface:
    Problem Solving:
    - Creation of the "defineConfig" file and addition of its instructions;

14. Starting the Vue.js project
    $ npm run serve


15. Saving the project in the github repository
