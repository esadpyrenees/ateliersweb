# Les listes en Python 
    

## Création d'une liste
```python
beatles = ["John", "Paul", "George", "Ringo"]

# `range` est une fonction native qui permet de créer des listes (presque) à partir de nombres 
print(range(10))  # de 0 à 10 (n’inclue pas 10!)
print(range(5, 10))  # de 5 à 10 (n’inclue pas 10!)
print(range(1, 19, 3)) # de 1 à 19, par pas de 3
```

### Connaître sa longueur (le nombre d’éléments qu’elle contient)
La fonction `len` : 
```python
print( len(beatles) )
# affiche 4
```

### Transformation d'une chaîne de caractères en liste

La fonction `split` : 
```python
text = "Faire du design c’est utiliser des matériaux et des processus."
words = text.split()
print(words)
# affiche :
# ['Faire', 'du', 'design', 'c’est', 'utiliser', 'des', 'matériaux', 'et', 'des', 'processus.']
```

### Transformer une liste en chaîne de caractères (le contraire…)

La fonction `join`. Avec `join`, commencer par le texte que à utiliser pour joindre les différents éléments de la liste (une espace, un caractère…):

```python
"*".join(words)
# affiche :
#   'Faire*du*design*c’est*utiliser*des*matériaux*et*des*processus.'
```

## Inversion d’une liste

Python possède une fonction appelée `reverse` qui modifie la liste et inverse son ordre.

```python
words = "Faire du design c’est utiliser des matériaux et des processus".split()
words.reverse()
print(words)
# affiche :
# ['processus', 'des', 'et', 'matériaux', 'des', 'utiliser', 'c’est', 'design', 'du', 'Faire']
```
La fonction `reverse` permet de parcourir une liste dans l’ordre inverse, en laissant la liste originale inchangée.

```python
for word in reversed(words) :
    print(word)
# affiche
# processus des et matériaux des utiliser c’est design du Faire
# La liste originale reste inchangée :
print(words)
# affiche 
# ['Faire', 'du', 'design', 'c’est', 'utiliser', 'des', 'matériaux', 'et', 'des', 'processus']
```

Voici un exemple illustrant la capacité de Python à traiter une chaîne de caractères comme une liste de lettres (et à l’inverser) :

```python
name = "László Moholy-Nagy"
print("".join(reversed(name)))
# affiche :
# ygaN-ylohoM ólzsáL
```

## Réduire une liste

### Accéder à un seul élément
On utilise l’index (la position de l’élément dans la liste), en commençant à 0 : 
```python
print(words[1]) # L’élément à la position 1
# affiche :
# du
print(words[0]) # Le premier élément
# Faire
print(words[-1]) # Le dernier élément
# processus
```

### Sélectionner une plage (un sous-ensemble)
En Python, le « découpage de liste » (_slicing_) est une pratique courante. Pour accéder à une plage d'éléments dans une liste, on peut utiliser les deux points `:`.
Avec cet opérateur, on peut spécifier où commencer le découpage, où le terminer, et spécifier le « pas ». 

```python
print(words[1:5]) # les mots de la position 1 (inclusif) à 5 (exclusif)
# affiche :
# ['du', 'design', 'c’est', 'utiliser']
print(words[0:6:2])
# ['Faire', 'design', 'utiliser']  # les mots de la position 0 (inclusif) à 6 (exclusif), tous les deux mots
print(words[::2])
# ['Faire', 'design', 'utiliser', 'matériaux', 'des'] # un mot sur deux
```

## Faire quelque chose avec chaque élément

Utilisez une boucle `for` :

```python
for word in words :
    print(word)
```

Pour connaître l’index (l’itération courante), utiliser `enumerate`:

```python
for word, index in enumerate(words) :
    print(word, index)
# affiche
# 0 Faire 1 du 2 design 3 c’est 4 utiliser 5 des 6 matériaux 7 et 8 des 9 processus

```

### Filtrer une liste
Utiliser une boucle `for` + une instruction `if` :
```python
words_longs = []
for word in words :
    if len(word) > 2:
        words_longs.append(word)
print(words_longs)
# affiche 
# ['Faire', 'design', 'c’est', 'utiliser', 'des', 'matériaux', 'des', 'processus']
```
Ou bien utiliser les « listes de compréhension » :
```python
words_longs = [word for word in words if len(word) > 3]
print(words_longs)
# affiche 
# ['Faire', 'design', 'c’est', 'utiliser', 'matériaux', 'processus']
```

## Assembler deux listes
Utiliser l’opérateur "+" (ne modifie pas les listes ):
```python
english_words = "Design is the organization of materials and processes".split()
words_and_english_words = english_words + words
print(words_and_english_words)
# affiche 
# ['Design', 'is', 'the', 'organization', 'of', 'materials', 'and', 'processes', 'Faire', 'du', 'design', 'c’est', 'utiliser', 'des', 'matériaux', 'et', 'des', 'processus']
```


Alternativement, utiliser la fonction `extend`, qui modifie une liste en y ajoutant la seconde liste.
```python
english_words.extend(words)
print(english_words)
# affiche 
# ['Design', 'is', 'the', 'organization', 'of', 'materials', 'and', 'processes', 'Faire', 'du', 'design', 'c’est', 'utiliser', 'des', 'matériaux', 'et', 'des', 'processus']
```


### Faire une copie (de sauvegarde) d’une liste

Attention : assigner une liste à un autre nom de variable n’en crée pas une copie. On crée seulement une autre référence au même objet.
```python
another_english_words = english_words
another_english_words.append("something")
print(another_english_words)
# affiche :
# ['Design', 'is', 'the', 'organization', 'of', 'materials', 'and', 'processes', 'something']
print(english_words)
# ['Design', 'is', 'the', 'organization', 'of', 'materials', 'and', 'processes', 'something']

```

Utiliser la fonction `list`:

```python
backup = list(english_words)
english_words.reverse()
print(english_words)
# affiche
# ['processes', 'and', 'materials', 'of', 'organization', 'the', 'is', 'Design']
print(backup)
# affiche
# ['Design', 'is', 'the', 'organization', 'of', 'materials', 'and', 'processes']
```

Cela peut être aussi fait avec le « découpage » (slicing, très _pythonique_ ;) :

```python
backup = english_words[:]
english_words.reverse()
print(english_words)
# affiche
# ['processes', 'and', 'materials', 'of', 'organization', 'the', 'is', 'Design']
print(backup)
# affiche
# ['Design', 'is', 'the', 'organization', 'of', 'materials', 'and', 'processes']
```


—

<small>Contenu adapté de [Manetta Berends – XPUB](https://pzwiki.wdka.nl/mediadesign/ListBasics).</small>
