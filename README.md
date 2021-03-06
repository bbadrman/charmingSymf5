# SITE_NAME

SITE_NAME website with docker, drupal 9.2, Apache, MySQL and phpmyadmin.


## Main Configuration

### Configure docker containers

In docker >> docker-compose.yml find replace test by project name and change all the port for web, db & phpmyadmin.


### Install Dependencies :

```
docker-compose exec web bash
composer install
```


### Configure Xdebug

1. In PhpStorm go to: File | Settings | PHP | Debug, in Xdebug >> Debug port enter the port number (9010 for example).
2. Click on ADD Configurations (next phone symbole):
  - In left of pop-up window click on + and choose PHP Remote Debug;
  - Enter Name: Localhost (for example);
  - Check: Filter debug connection by IDE key;
  - In Server click in: ...;
  - In left off the pop-up window click on +;
  - Enter Localhost for Name (for example);
  - Enter Localhost for Host,
  - Enter the port number (check the web port in docker-compose);
  - Select Use path mappings;
  - in Project files >> got to your project root path >> next src enter: /var/www/html;
  - Click: Apply.
3. Download the [Xdebug helper](https://chrome.google.com/webstore/detail/xdebug-helper/eadndfjplgieldjbigjakmdgkmoaaaoc) (Google Chrome extension) and in options >> IDE key copy "PHPSTORM".
4. Back in Run/Debug Configuration in IDE key(session id) enter the copied IDE key (PHPSTORM) then click Apply.
5. In Menu >> Run >> select : Break at first line in PHP scripts.
6. Click on the phone symbole until it change to green and in browser click on Xdebug helper until it change to green also
7. Go to your home page website and click f5 to refresh.
8. Finally, in Run >> uncheck : Break at first line in PHP scripts.


### Configuring the Database :

The database connection information is stored as an environment variable called DATABASE_URL. 
For development, you can find and customize this inside app >> .env:

```
# to use mysql:
DATABASE_URL="mysql://yassine:123456@db:3306/my_cabinet_db?serverVersion=8.0.27"
```


### Installing Doctrine :

```
composer require symfony/orm-pack
composer require --dev symfony/maker-bundle
```


### Install the Profiler

`composer require --dev symfony/profiler-pack`


### Adding Rewrite Rules

The easiest way is to install the apache Symfony pack by executing the following command: `composer require symfony/apache-pack`
> Note: for more information check: [web server configuration](https://symfony.com/doc/current/setup/web_server_configuration.html).


## Main Tasks

To do ...

## to install asset 
  "composer require symfony/asset"
  **************************************************

  # Tutoriels, Amiti?? & Symfony5

Eh bien salut! Ce r??f??rentiel contient le code et le script
pour les [Tutoriels Symfony5](https://symfonycasts.com/tracks/symfony) sur SymfonyCasts.

## Installer

Si vous venez de t??l??charger le code, f??licitations !!

Pour le faire fonctionner, suivez ces ??tapes :

**T??l??charger les d??pendances de Composer**

Assurez-vous que [Composer est install??](https://getcomposer.org/download/)
puis ex??cutez:

```
installation du compositeur
```

Vous devrez peut-??tre ??galement ex??cuter `php composer.phar install`, selon
sur la fa??on dont vous avez install?? Composer.

**D??marrer le serveur Web Symfony**

Vous pouvez utiliser Nginx ou Apache, mais le serveur Web local de Symfony
fonctionne encore mieux.

Pour installer le serveur web local Symfony, suivez
Instructions "T??l??charger le client Symfony" trouv??es
ici??: https://symfony.com/download - il vous suffit de le faire
une fois sur votre syst??me.

Ensuite, pour d??marrer le serveur Web, ouvrez un terminal, d??placez-vous dans le
projet et ex??cutez??:

```
Symfony servir
```

(Si c'est la premi??re fois que vous utilisez cette commande, vous pouvez voir un
erreur que vous devez d'abord ex??cuter `symfony server:ca:install`).

Maintenant, consultez le site ?? `https://localhost:8000`

Amusez-vous!

## Vous avez des id??es, des commentaires ou un probl??me???

Si vous avez des suggestions ou des questions, n'h??sitez pas ??
ouvrir un probl??me sur ce r??f??rentiel ou commenter le cours
lui-m??me. On regarde les deux :).

## Merci!

Et comme toujours, merci beaucoup pour votre soutien et votre participation
faisons ce que nous aimons !

<3 Vos amis chez SymfonyCasts

## install webpack encore :
  'composer require encore'

## Problem:An exception has been thrown during the rendering of a template ("Asset manifest file "/var/www/html/public/build/manifest.json" does not exist.").

soulition : comment out the json_manifest_path by adding '#' in front of it and add '~' after 'assets:'
exemple: framework:
    assets: ~
        #json_manifest_path: '%kernel.project_dir%/public/build/manifest.json'