# Internet

## Un réseau géant d’ordinateurs

Internet et le web sont deux choses différentes. Internet est plus ancien, plus vaste et plus varié que le web.
Le web n’est qu’une partie d’internet, celle à laquelle on accède via le protocole http (ou https).

> Internet est le réseau informatique mondial accessible au public. C'est un réseau de réseaux, […] sans centre névralgique, composé de millions de réseaux aussi bien publics que privés, universitaires, commerciaux et gouvernementaux […]. L'information est transmise via Internet grâce à un ensemble standardisé de protocoles de transfert de données, qui permet des applications variées comme le courrier électronique, la messagerie instantanée, le pair-à-pair et le World Wide Web. C'est l'apparition de ce dernier qui a popularisé Internet.

> — [fr.wikipedia.org/wiki/Internet](https://fr.wikipedia.org/wiki/Internet)

Internet a été inventé dans les années 1960 pour connecter des ordinateurs à travers les États-Unis. De nos jours, des milliards d’appareils (ordinateurs, ordinateurs portables, téléphones mobiles, téléviseurs, réfrigérateurs, etc.) sont interconnectés. [Lire en ligne: D’Arpanet à Internet : une histoire des réseaux](https://interstices.info/dossier/darpanet-a-internet-une-histoire-des-reseaux/)

## Client et serveur

Habituellement, une connexion sur Internet est établie entre 2 ordinateurs uniquement:

- celui qui a l’information (le serveur)
- celui qui la veut (le client).

Un client est un programme qui peut prendre plusieurs formes:

- un navigateur Web (comme Firefox)
- un client mail (comme Outlook, Thunderbird)
- une application de messagerie (comme Whatsapp)
- un service de streaming vidéo (comme Netflix)

Chacun de ces programmes récupérera des informations sur un serveur, où quelque chose est stocké (un site web, vos emails, vos messages, vos films). Bien que les programmes clients envoient également des informations au serveur, ils ne les stockent généralement pas, contrairement aux serveurs.

Un serveur peut être considéré comme un ordinateur dédié toujours connecté à Internet, dont le seul but est de fournir du contenu.

Bien que tout périphérique connecté à Internet puisse être à la fois client et serveur, la plupart des périphériques que nous utilisons sont considérés comme des clients, car nous récupérons uniquement des données et n’en stockons durablement aucune.

## Adresse IP

Comme chaque maison a une adresse postale spécifique et unique, chaque ordinateur connecté à Internet se voit attribuer une adresse IP (Internet Protocol; inventé en 1973 par Vint Cerf), afin d’être identifié sur le réseau.

Une adresse IP ressemble généralement à une combinaison de 4 chiffres: `91.198.174.192` (dans la version 4 du protocole IP, IPV4) ou de chiffres et de lettres dans la version 6 : `2001:0db8:0000:85a3:0000:0000:ac1f:8001` (notation hexadécimale rendue nécessaire par l’accroissement exponentiel des besoins en adresses IP de l’[internet des objets](https://fr.wikipedia.org/wiki/Internet_des_objets))

## Domaines

Bien que les adresses IP permettent aux ordinateurs de se différencier grâce à leur unicité, elles sont difficiles à lire et à mémoriser.

C’est pourquoi les **domaines** ont été créés en 1985. Ils *associent* une adresse IP telle que `128.30.52.100` à une chaîne de texte telle que w3.org (le World Wide Web Consortium). En conséquence, les deux sont interchangeables: on peut accéder à https://128.30.52.100 ou https://w3.org et se retrouver sur le même site Web.

Un domaine a trois parties qui se lisent de droite à gauche:

- **Domaine de premier niveau** (ou TLD): il existe des domaines génériques (.com, .org, .net) et spécifiques à des pays (.us, .nl, .fr).
- **Nom de domaine** : un nom tel que wikipedia ou esad-pyrenees, pouvant inclure des lettres, des chiffres, mais pas d’espace ni de point.
- **Sous-domaine** (facultatif). Bien que cette troisième partie soit facultative, la plupart des sites Web utilisent www comme sous-domaine par défaut.

On peut penser aux domaines comme un moyen de nommer les ordinateurs connectés à Internet.

On n’achète pas de domaine, mais on le loue à celui qui gère le TLD qu’on a choisit. Les entreprises qui gèrent des domaines Internet sont appelées *registrars* de domaines. En France, [Gandi](https://www.gandi.net/) ou [OVH](https://www.ovh.com/fr/) sont parmi les *registrars* les plus connus.

## Protocoles

L’interconnexion de tous ces ordinateurs a pour but de leur permettre d’interagir les uns avec les autres. Tout comme les humains parlent dans différentes langues, les ordinateurs connectés à Internet utilisent différents protocoles.

Chacun d'eux a un but différent:

| Protocole | Usage |
| --- | --- |
| FTP | Transfert de fichiers |
| SMTP | Envoi d’e-mails |
| IMAP | Réception d’e-mails |
| IRC | Messagerie instantanée |
| HTTP | Navigation web |

## URL

Maintenant que nous avons vu ce que sont les domaines et les protocoles, nous pouvons créer une URL : un localisateur de ressources uniforme (Uniform Resource Locator).

Par exemple, l’URL de la page en cours est https://ateliers.esad-pyrenees.fr/web/pages/ressources/html/internet.php. Elle peut être divisée en plusieurs parties:

- **https://** est le protocole
- **ateliers.esad-pyrenees.fr** est le domaine (sous-domaine + domaine + tld)
- **/web/pages/ressources/html/internet.php** est le chemin vers la page

Cette URL est unique et définit

- *où* trouver quelque chose sur le web (ateliers.esad-pyrenees.fr/web/…)
- *comment l'ordinateur est censé le lire (https://)

Les URL peuvent être plus complexes. Vous pouvez lire sur l'anatomie d'une URL.

—

<small>Contenu librement adapté et largement emprunté à [Jeremy Thomas](https://marksheet.io), sous [license Creative Commons BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/). </small>
