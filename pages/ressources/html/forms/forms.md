# Formulaires

Lorsque l’on navigue sur le Web, l’interaction d’un utilisateur consiste principalement à cliquer sur des liens pour naviguer de page en page. Mais il est également possible de lui proposer de saisir des informations ou d’interagir avec la page grace à des éléments de formulaires. Par exemple :

* inscription et connexion à un site Web
* saisie d’informations personnelles (nom, adresse, carte de crédit…)
* filtrer un contenu (en utilisant des listes déroulantes, des cases à cocher…)
* effectuer une recherche
* uploader des fichiers

Pour répondre à ces besoins, HTML fournit des contrôles de formulaire interactifs:

* saisie de texte (pour une ou plusieurs lignes)
* boutons radio
* cases à cocher
* listes déroulantes
* widgets d’upload
* boutons de soumission

Ces contrôles utilisent différentes balises HTML, mais la plupart d’entre eux utilisent la balise `<input>`. Comme il s’agit d’un élément à fermeture automatique, le type d’entrée est défini par son attribut type:
```html
<!-- Entrée de texte -->
<input type="text">
<!-- Case à cocher -->
<input type="checkbox">
<!-- Bouton radio -->
<input type="radio">
```


### L’élément de formulaire

`<form>` est un élément de niveau bloc qui définit une partie interactive d’une page Web. En conséquence, tous les contrôles de formulaire (tels que `<input>`, `<textarea>` ou `<button>`) devraient apparaître dans un élément `<form>`.

Deux attributs HTML sont requis:

* L’`action`, qui contient une adresse qui définit où les informations du formulaire seront envoyées
* La `method`, qui peut être GET ou POST définit comment les informations du formulaire seront envoyées.

Généralement, les informations de formulaire sont envoyées à un serveur. La manière dont ces données seront ensuite traitées dépasse le cadre de ce tutoriel.

Un formulaire est un ensemble d’éléments de saisie qui effectuent une seule opération. Pour un formulaire de connexion, on pet avoir trois éléments:

* une entrée email `<input type="email">`
* une entrée de mot de passe `<input type="password">`
* un bouton d’envoi `<input type="submit">`

Ces trois éléments HTML sont inclus dans un seul `<form action="login" method="POST">`.

### Les entrées de texte : `<input>` et `<textarea>`

Presque tous les formulaires requièrent une saisie textuelle de la part des utilisateurs pour leur permettre de saisir leur nom, leur adresse électronique, leur mot de passe, leur adresse…  Les contrôles de formulaire texte se déclinent en différentes variantes:

<style>
input, textarea, select { width: 10em; padding:.15em; .5em; font-family:inherit; font-size:inherit }
label { display:block }
input[type=radio], input[type=checkbox]{ width:auto}
</style>

| Type | Rendu  | Spécificité |
| --- | --- | --- |
| text | <input type="text"> | permet tout type de caractères |
| email | <input type="email"> | peut afficher un avertissement si un email invalide est entré |
| password | <input type="password"> | affiche les caratères sous forme de points |
| number | <input type="number"> | permet d’utiliser les touches du clavier (haut / bas) |
| tel | <input type="tel"> | peut déclencher un remplissage automatique. |
| search | <input type="search"> | affiche une icône spécifique |
| range | <input type="range"> | affiche un *slider* |
| color | <input type="color"> | affiche un sélecteur de couleur |
| textarea | <textarea></textarea> | peut être redimensionné |

Bien que ces entrées soient très similaires et permettent aux utilisateurs de saisir tout type de texte (même une entrée erronée), leur type fournit une sémantique spécifique à l’entrée, en définissant le type d’information qu’il est supposé contenir.

Les navigateurs peuvent ensuite modifier légèrement l’interface d’un contrôle pour augmenter son interactivité ou indiquer le type de contenu attendu.

[Voir l’exemple de plus de champs de formulaire](forms/)

### Placeholders

Les entrées de texte peuvent afficher un texte de substitution, qui disparaîtra dès que du texte aura été saisi.

<input type = "text" placeholder = "Entrez votre nom">


### Les `<label>`

Étant donné que les éléments de formulaire ne sont pas très descriptifs, ils sont généralement précédés d’une étiquette, un `<label>`.
```html
<label for="your-email"> Email </label>
<input type="email" id="your-email">
```

Bien que les attributs `placeholder` puissent fournir des indications sur le contenu attendu, les étiquettes ont l’avantage de rester visibles à tout moment et peuvent être utilisées avec d’autres types de contrôles de formulaire, tels que les cases à cocher ou les boutons radio. En cliquant sur l’étiquette, le “focus” est placé sur le champ et le curseur de texte est placé à l’intérieur.

### Cases à cocher

Les cases à cocher sont des contrôles de formulaire n’ayant que deux états: cochée ou décochée. Ils permettent à l’utilisateur de dire "Oui" ou "Non" à quelque chose.

Comme il peut être difficile de cliquer sur une petite case à cocher, il est recommandé d’envelopper  la case à cocher et sa description d’un `<label>`.
```html
<label>
  <input type="checkbox"> Je suis d’accord
</label>
```
<label>
  <input type="checkbox"> Je suis d’accord
</label>

### Boutons radio

On peut présenter à l’utilisateur une liste d’options à choisir en utilisant des boutons radio.

Pour que ce contrôle de formulaire fonctionne, le code HTML doit regrouper une liste de boutons radio. Ceci est réalisé en utilisant la même valeur pour l’attribut `name`:
```html
<p>État civil </p>
<label>
    <input type="radio" name="status" value="single"> Célibataire
</label>
<label>
    <input type="radio" name="status" value="married"> Marié
</label>
<label>
    <input type="radio" name="status" value="divorced"> Divorcé
</label>
<label>
    <input type="radio" name="status" value="widowed"> Veuf
</label>
```
<p>État civil </p>
<label>
    <input type="radio" name="status" value="single"> Célibataire
</label>
<label>
    <input type="radio" name="status" value="married"> Marié
</label>
<label>
    <input type="radio" name="status" value="divorced"> Divorcé
</label>
<label>
    <input type="radio" name="status" value="widowed"> Veuf
</label>

Etant donné que tous les boutons radio utilisent la même valeur pour leur attribut name (dans ce cas, la valeur "status"), la sélection d’une option désélectionne toutes les autres. Les boutons radio sont dits mutuellement exclusifs.

### Menus déroulants : `<select>`

Si le nombre d’options à choisir est trop important, on peut utiliser les menus déroulants `<select>`. Ils fonctionnent comme des boutons radio. Seule leur mise en page est différente.
```html
<select>
  <option>Janvier </option>
  <option>Février </option>
  <option>Mars </option>
  <option>Avril </option>
  <option>Mai </option>
  <option>Juin </option>
  <option>Juillet </option>
  <option>Août </option>
  <option>Septembre </option>
  <option>Octobre </option>
  <option>Novembre </option>
  <option>Décembre </option>
</select>
```

<select>
  <option>Janvier </option>
  <option>Février </option>
  <option>Mars </option>
  <option>Avril </option>
  <option>Mai </option>
  <option>Juin </option>
  <option>Juillet </option>
  <option>Août </option>
  <option>Septembre </option>
  <option>Octobre </option>
  <option>Novembre </option>
  <option>Décembre </option>
</select>




—

<small>Contenu adapté de [Jeremy Thomas](https://marksheet.io), sous [license CC BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/). </small>
