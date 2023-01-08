# WWW

## HTTP(S)

Internet est un gigantesque réseau d’ordinateurs. Il constitue le support physique d’un autre réseau, un réseau d’informations constitué par les milliards de documents dispersés sur des millions d’ordinateurs serveurs dans le monde et reliés les uns aux autres selon le principe de l’hypertexte, le World Wide Web.

Les ordinateurs connectés à Internet communiquent dans différentes langues, appelées protocoles, pour échanger des courriels, des fichiers, des messages de discussion…

L’un de ces protocoles s’appelle HTTP (pour Hyper Text Transfer Protocol). Le Web est la partie d’Internet où des documents (les pages Web) sont échangés via ce protocole. Vous pouvez savoir que vous naviguez sur le Web si l’URL du document consulté commence par **http://** ou **https://**.


## Page web

Une page Web est un document écrit en HTML partagé sur le Web.

On affiche ce type de documents avec un navigateur Web.

Pour accéder à une page Web, on peut soit :

* saisir son URL dans la barre d’adresse de son navigateur, comme http://ateliers.esad-pyrenees.fr/web/
* cliquez sur un lien, comme [celui-ci](http://ateliers.esad-pyrenees.fr/web/), qui a pour effet d’accéder à l’URL référencée par le lien.

Une autre forme à l’introduction ci-dessous peut se trouver ici : [Around the world in 80ms](http://alexmic.net/around-the-world-in-80ms/)


## Sites web

Un site est simplement un ensemble de pages Web situées sur un même domaine.

* Web **https://**
    * Site **ateliers.esad-pyrenees.fr**
        * Dossier **web/pages/ressources/html/**
            * Page **/index.html**
            * Page **/page2.html**
            * Page **/page3.html**

N. B. : Dans le cas précis de ce site, l’extension du fichier que l’on affiche est `.php` et pas `.html`. PHP est un langage qui s’exécute sur le serveur et qui renvoie au client (vous / votre navigateur) un document HTML.

## Ouvrir une page Web dans votre navigateur

En saisissant l’adresse de cette page dans un navigateur web, vous allez demander à un serveur (**ateliers.esad-pyrenees.fr**) web (**http://**) d’obtenir le document **web.php** situé dans le sous-dossier **web/pages/ressources/html/** (chemin).

1. le navigateur “parse” votre requête, pour en extraire les trois composantes principales (le protocole, le domaine et le chemin). Puisque vous n’avez pas saisi le protocole, le navigateur utilise par défaut https ou http).

2. Une fois repéré l’hôte (le serveur, signalé par l’apparition du premier /), le navigateur doit établir la correspondance entre **ateliers.esad-pyrenees.fr** et **178.32.130.57**, l’adresse IP du serveur de l’école. Il se met donc en relation avec le serveur DNS (Domain Name System, annuaire géant des noms de domaines sur internet) spécifié au nivau de votre système d’exploitation :  

    — Client « Salut DNS, connais-tu *ateliers.esad-pyrenees.fr* ? »  
    — DNS « Hi. ’t should be 178.32.130.57 »

    Pour en savoir plus sur les DNS, [lire une petite BD](https://howdns.works/ep1/) ou lire cette [conversation twitter](https://twitter.com/neonemesis/status/1281639974622896129).

3. Maintenant votre navigateur connait l’hôte, la page demandée et l’adresse IP à contacter. Il peut établir la connexion au niveau TCP (Transmission Control Protocol est un protocole de connexion au dessus d’IP ; il permet d’être sûr que rien ne se perde dans les communications entre le client et le serveur). Le navigateur ouvre donc une connexion TCP vers 178.32.130.57 sur le port 80 (port par défaut de http, 443 pour https):  

    — Client « J’aimerais me connecter à votre port 80 »  
    — Serveur « Bienvenue, vous pouvez vous connecter »  
    — Client « Ok, je suis connecté »

4. Une « Requête HTTP » est alors envoyée par le navigateur au serveur.
```
    GET http://ateliers.esad-pyrenees.fr/web/ HTTP/1.1
    Host: ateliers.esad-pyrenees.fr
    User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:70.0) Gecko/20100101 Firefox/70.0
    Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
    Accept-Language: fr,fr-FR;q=0.8,en;q=0.5,en-US;q=0.3
    Accept-Encoding: gzip, deflate
    Referer: http://ateliers.esad-pyrenees.fr/web/pages/ressources/html/web.php
    DNT: 1
    Connection: keep-alive
    Upgrade-Insecure-Requests: 1
```

    Plusieurs possibilités s’offrent alors au serveur :
    * La ressource demandée peut être un simple **fichier** (.html, .jpg, .pdf, .whatever ), auquel cas, il sera envoyé sans plus de cérémonie (code de réponse: 200). On passe alors directement à l’étape 6.  
    * Il se peut que le fichier n’existe pas et que le serveur n’ait aucune possibilité pour le générer ; c’est alors une réponse de code **404** qui sera envoyée au navigateur (Document not found).  
    * Il se peut que le serveur “plante” ; une erreur **500** (ou 5**) sera renvoyée.
    * Il se peut que l’utilisateur n’ait pas le droit d’accéder au fichier ; alors, le code **403** sera renvoyé (Forbidden). Le fichier peut avoir été déplacé ; si le serveur est au courant, il enverra une réponse **301** (Moved Permanently) ou **302** (redirection temporaire).  
    * Il se peut également que le serveur soit en mesure de “générer” la réponse ; nous avons alors affaire à un site **“dynamique”**. C’est le cas pour notre page …/web.php. On passe alors à l’étape 5.  


5. Il existe de très nombreux langages de programmation pour générer des pages web. Le cas le plus simple et le plus répandu est PHP. Le serveur a reçu une requête pour une page web qui correspond à un fichier php, qui contient du code que le serveur va demander au logiciel PHP d’exécuter.      
PHP va lire le fichier et faire ce qui est demandé. Il peut avoir à inclure d’autres fichiers, se connecter à une base de données ou à d’autres sites ou services web, déterminer l’heure qu’il est ou deviner l’âge du capitaine. PHP générera alors un fichier texte/html qui sera renvoyé au serveur, qui se chargera de la transmettre au client.

    Client — « Bonjour ÉSAD Pyrénées, j'aimerais le fichier web.php s'il vous plaît »  
    Serveur — « Houla… C’est compliqué, attendez une seconde »  
    Client — « D'accord, je vais attendre »  
    Serveur — « Hey, PHP, tu veux bien me générer cette page ? »  
    PHP — « Mff… Ok… (…) Voilà… »  
    Serveur – « Client, voici le HTML généré »  
    Client — « Bien reçu. Merci! »

6. Pour afficher web.php, le navigateur doit d’abord “parser” le texte reçu, et consrtuire le DOM (Document Object Model). Il s’agit d’interprêter le texte reçu et de construire un document qu’on pourrait représenter sous la forme d’un arbre, contenant des sections, des paragraphes, des liens, des images, des médias, etc. Puisque la page servie contint des liens vers d’autres resources (huit fichiers CSS et JS), la succession d’étapes 1 à 5 sera répétée sept fois. Au besoin, si le code HTML contient des erreurs, il va essayer de corriger le code défaillant pour afficher quand même le contenu.

7. Le navigateur fait alors de son mieux pour afficher la page, en compilant balises, texte, feuilles de style CSS, médias, etc. Il exécute également le code javascript directement inclus dans la page ou lié en tant que ressource externe.

Et voilà…


—

<small>Contenu adapté de [Jeremy Thomas](https://marksheet.io), sous [license CC BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/) et d’Antoine Arnaud / [iloth.net](https://iloth.net/2016/10/ce-quil-se-passe-quand-on-ouvre-une-page-web/).</small>
