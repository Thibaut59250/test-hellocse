Clone git
Composer install
Npm install
A la raçine, ajouter un .env :

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:Y3zIL2pnLOok8kcRFxzcj9ubtajDdkbCjf1e9BKSWRE=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=thibaut
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

Php artisan migrate
Aller sur son SGBD et effectuer la requete suivante
INSERT INTO `stars` (`id`, `nom`, `description`, `url_photo`) VALUES
	(5, 'Tom Holland', 'Acteur actuel de Spider-Man', 'placeholder-user.jpg'),
	(6, 'Zendaya', 'Actuelle actrice, jouant le rôle de la copine de Spider-Man', 'placeholder-user.jpg'),
	(7, 'Robert Downey Jr', 'Acteur de Iron-man ( RIP )', 'placeholder-user.jpg'),
	(8, 'Christopher Nolan', 'Réalisateur à succès dont le magnifique "Interstellar"', 'placeholder-user.jpg'),
	(11, 'NOM', 'DESCRIPTION', 'placeholder-user.jpg');

Php artisan storage :link

Sélectionner une image quelconque sur internet en jpg, la mettre dans storage/app/public et la renommer placeholder-user.jpg


TEST DE L’APPLI :
Vue utilisateur lambbda : raçine du site
Pour le backoffice se rendre sur /register et se créer un compte ( il va rediriger sur /home qui ne marche pas, c’est le AUTH automatique de laravel que je n’ai pas réglé )
url backoffice : admin-star

je n’ai pas géré les images par manque de temps
