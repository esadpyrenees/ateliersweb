# Scénario 2

- Une page d’accueil avec la liste des projets : pas de blueprint nécessaire
- Une page projet de type “vidéo” : un blueprint `video`
- Une page projet de type “photo” : un blueprint `photo`
- Une page projet de type “galerie” : un blueprint `gallery`
- Une page projet de type “journal” : un blueprint `journal`, etc.
- \+ une page “projets” pour ranger les projets : un blueprint `projects`

## Site
`/site/blueprints/site.yml`

```yml
title: Site
sections:
  pages:
    type: pages
    templates: 
      - home
      - projects
      - about
```

## Projets
`/site/blueprints/pages/projects.yml`

```yml
title: Projets
sections:
  pages:
    type: pages
    templates: 
      - video
      - photo
      - gallery
      - journal
```


## Projet vidéo
`/site/blueprints/pages/video.yml`

```yml
title: Vidéo

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
      embed_service:
        label: Plateforme
        type: select
        width: 1/4
        default: youtube
        options:
          - youtube
          - vimeo
      embed_url:
        label: URL 
        type: url
        width: 3/4
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
```
## Projet photo
`/site/blueprints/pages/photo.yml`

```yml
title: Photo

columns:
  - width: 2/3        
    sections:
      infos:
        type: fields
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
      images: 
        type: files
        layout: cards
        template: image
      
  - width: 1/3
    fields:
      cover:
        label: Couverture
        help: Image pour la vignette
        type: files
        max: 1
```


## Gallery
`/site/blueprints/pages/gallery.yml`

```yml
title: Galerie
columns:
  - width: 2/3     
    fields:
      blocs:
        label: Blocs
        type: structure
        fields:
          image:
            label: Image
            type: files
            multiple: false
          text:
            label: Texte
            type: textarea
          width:
            label: Largeur
            type: select
            default: size-1
            options: 
              - size-1
              - size-2        
  - width: 1/3
    fields:
      cover:
        label: Couverture
        help: Image pour la vignette
        type: files
        max: 1
```



## Journal
`/site/blueprints/pages/journal.yml`

```yml
title: Journal

columns:
  - width: 2/3     
    fields:
      content:
        label: Contenu
        type: textarea
        # type: editor 
        #       ↑ nécessite le plugin https://github.com/getkirby/editor
  - width: 1/3
    fields:
      cover:
        label: Couverture
        help: Image pour la vignette
        type: files
        max: 1
```