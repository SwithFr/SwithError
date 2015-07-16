#Un petit (très petit) gestionnaire d'erreur 
J'ai développé ce petit package pour le lier à mon framework et gerer ainsi plus simplement les erreurs.
De plus j'ai pensé que je pourais avoir à m'en servir ailleurs qu'au sein du framework, c'est pour quoi
j'ai préféré en faire un package indépendant.

##Installation
###avec composer
    "require": {
        "swith/error": "dev-master"
    }
    
Ou avec la commande 

    composer require swith/error:dev-master
    
###sans composer
Importez simplement les fichier `SwithError.php` et `errorLayout.php dans votre projet.

##Utilisation
Exemple d'utilisation 

    require('path/to/SwithError.php');
    $error = new SwithError\SwithError($params, $statusCode); //$statusCode est par defaut à 404
    $error->display();

Vous pouvez precisez plusieurs parametres
    
    $error = new SwithError\SwithError([
        "title" => "Page introuvable", //par defaut "Une erreur est survenue"
        "message" => "La page que vous demandez est introuvable"
    ]);
    
##Aperçu
![Apeçu d'une erreur](http://grab.by/IT06)

##Todo
- Style
- Personnaliser le style
- Commenter
- Ajouter des headers
- Ajouter des parametes