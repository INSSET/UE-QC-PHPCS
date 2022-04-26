## Validateur de formulaire
*Ceci est un exercice ne pas utiliser en production !*  

Pour la contrainte que vous dévez implémenter vous devez rendre 3 fichiers : 
{ la classe, le formulaire d'exemple, le fichier de contrainte 
allant avec l'exemple }.  

    |
    |_ conf
    |   |_ conf-exemple.json
    |_ public
    |   |_ exemple
    |   |   |_ form_exemple.html
    |   |_ ...
    |_src
    |   |_ UPJV
    |   |   |_ Validator
    |   |   |   |_ votre-contrainte.php
    
Votre code doit passer le test qc.yml pour pouvoir être pusher

Pour tester, publier le repertoire public avec un serveur web. Exemple avec 
le serveur interne à php

    php -S 0.0.0.0:8000 -t public

Pour lancer les tests qui sont à mettre dans le repertoire test/units

    php utils/phpunit.phar --bootstrap src/autoload.php test/units/

Pour générer un rapport de couverture de test, l'extension xdebug doit être
installée et configurée. La configuration peut se faire au lancement de php
avec l'argument -d, voir exemple ci-dessous qui fonctionne avec le code du
dépôt :

     php -d  xdebug.mode=coverage utils/phpunit.phar --coverage-html test/html --bootstrap src/autoload.php test/units/

### Exemple de lancement d'un container docker
Construction de l'image puis lancement du container à partir de cette image 
votre code est monté dans le répertoire /code du container

    docker build -t php/phpcs .
    docker run --rm -ti -v `pwd`:/code php/phpcs /bin/bash