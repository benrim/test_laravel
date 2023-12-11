

## Prérequis

Avant de commencer, assurez-vous d'avoir installé les outils suivants sur votre machine :

- PHP (version 8 ou supéeieure)
- Composer
- Git
- PHPMyAdmin
- éditeur de code (exemple Visual code)

## Installation

1. Clonage du dépôt : 
    
    git clone <URL_du_dépôt>
    cd nom_du_projet
  

2. Installer les dépendances : 
    
    composer install
 
3. Avec PHPMyAdmin créé une nouvelle base de données
    

4. Configurer le fichier d'environnement :
    - Dupliquez le fichier `.env.example` et renommez la copie en `.env` :
	cp .env.example .env
    - Lancez le projet :
	code .
    - Ouvrez le fichier `.env` et configurez les paramètres, tels que la connexion à la base de données saisir le meme nom de la base dans l'étape 3, et,  APP_URL=http://localhost:8000.


5. Générer la clé d'application :
    
    php artisan key:generate
   

6. Migrer la base de données :
   
    php artisan migrate
    

7. Installer Voyager (si nécessaire) :
    
    php artisan voyager:install
   

8. Lancer le serveur local :
    
    php artisan serve
   
   Accédez à l'application dans le navigateur à l'adresse -----> http://127.0.0.1:8000

## Accéder au Backoffice Voyager

Pour accéder au backoffice Voyager, ajoutez `/admin` à l'URL de votre application -----> http://127.0.0.1:8000/admin 

Identifiants du compte administrateur :
Nom d'utilisateur : admin
Adresse e-mail : admin@admin.com
Mot de passe : admin
