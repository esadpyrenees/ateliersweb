
# Kirby


*[CMS]: Content management system (système de gestion de contenu)

Contrairement à de nombreux CMS, Kirby est un CMS sans base de données. Les informations sont stockées sous la forme d’une arborescence de dossiers et de fichiers. Il est  simple à mettre en œuvre, à publier en ligne, et très flexible. 

Les principes de son fonctionnement sont néanmoins assez similaires à la plupart des outils alternatifs (Wordpress, Indexhibit, Grav…).

### Licence

On peut tester Kirby gratuitement mais sa mise en ligne nécessite l’achat d’une licence. Les étudiants peuvent bénéficier d’un [tarif réduit](https://getkirby.com/buy#students).

## À quoi ça sert ?

Kirby est un gestionnaire de contenu. Il permet d’administrer (mettre à jour, augmenter, modifier) le **contenu** d’un site web. 

Les CMS offrent également des fonctionnalités qui facilitent la conception de sites web dès qu’ils dépassent plusieurs pages, notamment lorsque de nombreuses pages de même type doivent être créées (ce qui est souvent le cas d’un portfolio).

Ils disposent généralement d’une interface d’administration en ligne, accessible avec un identifiant et un mot de passe qui permet que chaque mise à jour ne demande pas d’écrire du code, de redimensionner et uploader des images ou de modifier dans chaque fichier HTML le menu de navigation.

Ils permettent ainsi à des utilisateurs sans accès au code (les clients du/de la développeur·se) d’administrer eux-mêmes un site internet.

Ils permettent de séparer les opérations de gestion de la forme et du contenu, laissant au designer la responsabilité de la forme et au commanditaire celle du contenu.

[Notabene](#notabene)…

## Fonctionnement

![Fonctionnement de Kirby](kirby.svg)


## Structure générale

| dossier | description  |
| --- | --- |
| `/content` | Le contenu du site  |
| `/site` | Le dossier du projet. Il contient les templates, la configuration, les plugins et les *blueprints*. |
| `/assets` | Un dossier qui contient les fichiers CSS, javascript et les images statiques (logo, icônes). |
| `/kirby`| L'application Kirby. On n’y touche pas… |
| `/media` | Dossier géré par Kirby qui contient les images publiques et les vignettes. On n’y touche pas… |

## Contenu

Le contenu (textes, images, vidéos…) du site est stocké sous la forme d’une arborescence de dossier et de fichiers dans le dossier `/content`. Ce contenu est directement éditable et manipulable grâce à un éditeur de texte et l’explorateur de fichiers. 

Kirby propose une interface d’administration, accessible à l’adresse http://localhost/portfolio/panel qui rend l’édition du contenu beaucoup plus confortable.

## Le *panel* et les *blueprints*

Cette interface (le *panel*) est entièrement personnalisable grâce aux *blueprints*.

Les *blueprints* permettent deux choses : ils décrivent le *modèle de données* des pages et déterminent la structure de l’interface du *panel*. La structure (~ le modèle) de données permet de spécifier quelles informations sont nécessaires pour chaque type de page (la page “à propos” contiendra un texte d’intro, une adresse e-mail, un pdf pour le CV, une liste de réseaux sociaux ; la page “projets” contiendra une liste des projets ; la page “projet” contiendra un texte, une série d’images, une date, etc.)


[→ Structurer les données](../blueprints/){.bigbutton}

*[RTFM]: Read the fucking manual

## *RTFM*

Kirby possède une documentation précise et extensive : un [guide de démarrage](https://getkirby.com/docs/guide), un “[livre de recettes](https://getkirby.com/docs/cookbook)” pour accomplir les taches les plus fréquentes, un [guide de référence](https://getkirby.com/docs/reference) pour tous les termes, méthodes et fonctions du CMS, un [forum](https://forum.getkirby.com/) très actif, un riche [écosystème de plugins](https://getkirby.com/plugins) et de [thèmes](https://www.getkirby-themes.com/).

Pour aller plus loin dans la découverte des principes de fonctionnement de Kirby, [lire *Kirby in a nutshell*](https://getkirby.com/docs/cookbook/setup/kirby-in-a-nutshell)

## Notabene {#notabene}

En 2020, de nouvelles manières de concevoir et de développer des sites ont le vent en poupe. L’ère des gros moteurs de gestion de contenu (Drupal, Joomla, Typo3 ou même Wordpress) s’essoufle peu à peu.

Ces moteurs ont comme principal défaut de demander beaucoup de ressources aux serveurs et sont soumis à de fréquents et nombreux problèmes de sécurité. 

L’obsolescence rapide des outils et des versions des langages, tout comme la question des performances (≈ rapidité d’affichage des sites) favorise l’émergence de nouveaux outils, plus résilients. 

Kirby et quelques autres CMS *flatfiles* (Grav) fonctionnent avec des fichiers texte, du markdown et des médias bruts qui simplifient la mise à jour et la transition vers un nouveau CMS. 

Aujourd’hui émergent de nouveaux outils, notamment des générateurs de sites statiques, ([Jeckyll](https://jekyllrb.com/), [Hugo](https://gohugo.io/), [Eleventy](https://www.11ty.dev/)) et des logiques de déploiement ([Forestry.io](https://forestry.io/), [Github](https://pages.github.com/), [Netlify](https://netlify.com)) qui seront sans doute le futur de la gestion de contenus sur le web.