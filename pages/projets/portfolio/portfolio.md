# Portfolio



Ce projet propose de découvrir les bases de l’utilisation de systèmes de gestion de contenus appliquées à la création d’un portfolio simple. Le projet est basé sur le CMS \[CMS: Content management system (système de gestion de contenu)\] open-source (mais non gratuit) [Kirby](https://getkirby.com/).

Les différentes version du code source du projet sont téléchargeables ici:
[↗ github.com/jbidoret](https://github.com/jbidoret/portfolio/) {.bigbutton}

Pour les plus aventureux·ses, il est aussi possible d’utiliser **git**. Soit en ligne de commande (dans un terminal), soit via une application ([Github Desktop](https://desktop.github.com/) ou [Sourcetree](https://www.sourcetreeapp.com/)). 
```
# Allez dans le dossier racine de votre serveur de développement, par exemple :
cd /Applications/MAMP/htdocs/
# Puis “clonez” le dépôt :
git clone https://github.com/jbidoret/portfolio.git
# Ou, pour la version Nouveaux médias :
git clone https://github.com/jbidoret/portfolio/tree/newmedias.git
```


## Prérequis

* Un serveur de développement : [MAMP](http://mamp.info/) ou [XAMPP](https://www.apachefriends.org/index.html) ;    
<small>MAMP ou XAMPP permettent d’installer sur un mac ou un pc un “serveur de développement” qui reproduit les conditions et la structure logicielle d’un “vrai” serveur web. En démarrant l’application, on lance plusieurs programmes (Apache, PHP, MySQL) qui permettent de “servir” des sites web localement (http://localhost).</small>

* Un hébergeur : [Alwaysdata](https://alwaysdata.com/) ou [OVH](https://ovh.com) ;    
<small>NB: les étudiants de l’ÉSAD Pyrénées peuvent créer un compte Alwaysdata gratuit à partir d’[ici](https://alws.link/gyB4xU46). De nombreux hébergeurs existent, commerciaux ou associatifs. Alwaysdata fournit très un bon service, mais est comparativement plus cher que d’autres (OVH, Gandi, 1&1, Amen…).</small>
* Un client FTP ([Cyberduck](https://cyberduck.io/), [FileZilla](https://filezilla-project.org/)) ;    
<small>Un client FTP est un logiciel qui permet de se connecter de manière sécurisée à un (vrai) serveur web pour y déposer les fichiers d’un site, afin de le publier en ligne.</small>
* Un éditeur de code : [VS Code](https://code.visualstudio.com/) ou [Atom](https://atom.io/) ;
* Un navigateur récent : [Firefox](https://www.mozilla.org/fr/firefox/) ou [Chrome](https://www.google.fr/chrome/).

## Installation

Télécharger et décompresser le zip, et déplacez les fichiers à l’intérieur 
du dossier `htdocs` de MAMP (ou du dossier racine de votre serveur de développement, s’il est configuré différemment).

Vous pourrez ensuite :
1. afficher un finder (explorateur) contenant les fichiers
2. ouvrir l’ensemble du dossier `htdocs/portfolio` dans votre éditeur
3. accéder au site dans votre navigateur (http://localhost/portfolio/ ou http://localhost:8888/portfolio/)
4. accéder à l’interface d’administration du site dans un autre onglet (http://localhost/portfolio/panel/ ou http://localhost:8888/portfolio/panel/)
5. ouvrir un onglet avec le [guide de Kirby](https://getkirby.com/docs/guide) et un autre avec la [référence](https://getkirby.com/docs/reference). NB : la documentation de Kirby est très précise et permet de résoudre la plupart des problèmes. À défaut, aller chercher dans le [forum](https://forum.getkirby.com/) ou y poser vos questions.


[→ Démarrer avec Kirby](kirby/){.bigbutton}


## Exemples

* Une sélection de portfolios par en ligne [Stéphane Elbaz sur are.na](https://www.are.na/stephane-elbaz/portfolio--12).
* Le filtre “portfolio” sur [hoverstat.es](https://www.hoverstat.es/archive/)