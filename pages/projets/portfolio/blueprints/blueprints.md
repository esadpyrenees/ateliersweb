
# Blueprints

> Le terme *blueprint* désigne, en anglais, une reproduction d'un plan détaillé, ce que l'on appelle en dessin technique un dessin de définition. Le terme, signifiant littéralement « impression en bleu », provient d'un procédé d'imprimerie, la cyanotypie, puis la diazographie. — [wikipedia](https://fr.wikipedia.org/wiki/Blueprint)


## Modèle de données

Les *blueprints* permettent de déterminer le modèle de données de chaque type de page (quelles données pour quelle page). Ce modèle se traduira en champs de saisie dans le *panel*.

[↗ Documentation sur les blueprints @gerkirby](https://getkirby.com/docs/guide/blueprints/introduction)    
[↗ Exemples de blueprints @gerkirby](https://getkirby.com/docs/reference/panel/samples)

Dans le contexte du portfolio,  plusieurs scénarios peuvent être envisagés. NB: Les *wireframes* ci-dessous permettent d’imaginer des **structures de données** différentes ; ils n’impliquent pas (encore) de choix de mise en page.

### Scénario 1

- Une page d’accueil avec un projet à la une : un blueprint `home` 
- Des catégories : un blueprint `category`
- Une page projet : un blueprint `project`
- Une page à propos : un blueprint `about`

![kirby : scénario 1](scenario-1.svg)

[→ Voir les blueprints pour ce scénario](scenario-1/)

### Scénario 2

- Une page d’accueil avec la liste des projets : pas de blueprint nécessaire
- Une page projet de type “vidéo” : un blueprint `video`
- Une page projet de type “photo” : un blueprint `photo`
- Une page projet de type “galerie” : un blueprint `gallery`
- Une page projet de type “journal” : un blueprint `journal`, etc.

![kirby : scénario 2](scenario-2.svg)

[→ Voir les blueprints pour ce scénario](scenario-2/)



## Interface d’administration

Le *panel* de Kirby peut être personnalisé pour s'adapter à chaque projet. À cette fin, on utilise les *blueprints* pour configurer la mise en page des champs de formulaire.

*[YAML]: YAML Ain't Markup Language

Les *blueprints* sont des fichiers de configuration écrits en [YAML](https://fr.wikipedia.org/wiki/YAML) qui permettent de personnaliser le *panel*. Ils sont stockés dans le dossier `/site/blueprints`.
Ils peuvent être basés sur de simples *presets* ou être spécifiquement définis, de manière à concevoir des interfaces d’administrations complexes contenant onglets, colonnes et sections.

![Kirby admin tabs](tabs.svg)

Exemple de blueprint pour ce *layout* : 

```yaml
tabs:
  tab-1:
    label: Tab 1
    columns:
      - width : 2/3
        sections:
          main:
            type: fields
            headline: Informations
            fields :
              subtitle:
                label: Sous-titre
                type: text
              text:
                label: Texte
                type: textarea
      - width: 1/3
        sections:
          meta:
            type: fields
            headline: Fichiers
            fields :
              descrition:
                type: text
              keywords:
                type: tags
          files:
            type: files
            headline: Fichiers
  tab-2:
    label: Tab 2
    fields:
      truc:
        label: Truc
        type: text
  tab-3:
    label: Tab 3
    fields:
      bidule:
        label: Bidule
        type: text
```        