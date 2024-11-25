# Ctrl + alt + print

Gabarit minimaliste pour générer un document imprimé avec _paged.js_ ET un affichage écran.

> Le polyfill _paged.js_ transforme la totalité du document pour en prévisualiser l’impression.

↑ Dans le contexte d’un projet _web + print_, pour plus de simplicité, on fera volontiers une entorse au principe du _single source publishing_ en créeant deux documents HTML ; l’un pour l’affichage écran, l’autre pour l’impression (qui incluera l’appel javascript au polyfill _paged.js_ et aux feuilles de style nécessaires, à la fois l’interface et les styles personnalisés pour le _print_).


