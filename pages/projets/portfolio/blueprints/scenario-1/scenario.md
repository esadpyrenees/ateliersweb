# Scénario 1

- Une page d’accueil avec un projet à la une : un blueprint `home` 
- Des catégories : un blueprint `category`
- Une page projet : un blueprint `project`
- Une page à propos : un blueprint `about`

## Site
`/site/blueprints/site.yml`

```yml
title: Site
sections:
  pages:
    type: pages
    templates: 
      - home
      - category
      - about
```

## Accueil
`/site/blueprints/pages/home.yml`

```yml
title: Home
fields:
  a_la_une:
    label: Projet à la une
    type: pages
    multiple: false
    query: site.index.filterBy("template", "project")
  text:
    label: Texte d’introduction
    type: textarea    
```


## Catégorie
`/site/blueprints/pages/category.yml`

```yml
title: Catégorie
sections:
  pages:
    type: pages
    template: project
```


## Projet
`/site/blueprints/pages/project.yml`

```yml
title: Projet

status:
  draft: Brouillon
  listed: Publié

columns:
  - width: 2/3        
    fields:
      subtitle:
        label: Sous-titre
        type: text
        width: 3/4
      year:
        label: Année
        type: number
        width: 1/4
      text:
        label: Texte
        type: textarea
        size: medium
  - width: 1/3
    fields:
      cover:
        label: Couverture
        help: Image pour la vignette
        type: files
        max: 1        
      gallery:
        label: Galerie
        type: files
        template: image
```


## À propos
`/site/blueprints/pages/about.yml`

```yml
title: À propos

options:
  url: false
  delete: false

columns:
  - width: 1/2
    fields:
      text:
        label: Text
        type: textarea
        size: huge

  - width: 1/2
    fields:
      email:
        label: Email
        type: email
      social:
        label: Sur le web
        type: structure
        fields:
          platform:
            label: Platforme
            type: text
            width: 1/2
          url:
            label: URL
            type: url
            width: 1/2
```