# lumen.test #

This is the a test exam for Laravel using Lumen PHP Framework (Lumen (8.2.4) (Laravel Components ^8.0))

## Installation: ##

### Step 1.

> To run this project, you must have PHP >= 7.3 installed, OpenSSL PHP Extension, PDO PHP Extension, Mbstring PHP Extension as a prerequisite

Install Composer (if not yet installed)

```bash
cd ~
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php --install-dir=/bin --filename=composer
php -r "unlink('composer-setup.php'); //remove the php file" 
composer -v
```

Cloning this repository to your local environment and install all Composer dependencies.

```bash
cd /var/www/
git clone git@github.com:achilezweb/lumen.test.git
cd lumen.test && composer install
cp .env.example .env
php artisan key:generate
```

### Step 2.

Next, create a new database and reference its name and username/password within the project's `.env` file. In the example below, we've named the database "lumen"

```
APP_URL=https://lumen.test

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lumen
DB_USERNAME=root
DB_PASSWORD=
```

### Step 3.

Lets run/import the database by running

```
$ php artisan migrate
```

### Step 4. 

Access the site using a browser (i.e. Chrome, Firefox, Safari etc.) `https://lumen.test`. 
```
BASE_URL: https://lumen.test
```


