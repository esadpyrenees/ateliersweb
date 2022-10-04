# Python
    
[Python for Designers](http://pythonfordesigners.com) est une introduction à Python pour les designers, produite par Roberto Arista, qui utilise Drawbot (Mac OS seulement).

[Drawbot](http://www.drawbot.com/) est un outil open source pour MacOS développé par [Just van Rossum](https://twitter.com/justvanrossum), [Erik van Blokland](http://letterror.com/) et [Frederik Berlaen](https://typemytype.com) dédié à l’utilisation de Python dans l’objectif de production de graphiques 2D fixes ou animés. C’est un outil particulièrement adapté à l’expérimentation avec la typographie, et notamment avec les fontes variables. [Drawbot Skia](https://github.com/justvanrossum/drawbot-skia), en cours de développement, est une tentative de porter Drawbot pour Windows et Linux.

[Flat](https://xxyxyz.org/flat/) et [Even](https://xxyxyz.org/even/) sont deux outils open source (et *cross-platform*) permettant de manipuler des formes vectorielles et du texte en Python.
    
La documentation ci-dessous est une traduction française, progressivement modifiée, de l’[introduction à Python de Drawbot](https://www.drawbot.com/content/courseware.html).

### Snippets

Le code des exemples ci-dessous est exécutable depuis la ligne de commande (ou dans Drawbot).
Il est également possible (souhaitable) de copier/coller le contenu des snippets dans un fichier `test.py` et de demander à Puython d’exécuter ce fichier en saisissant `python test.py` depuis la ligne de commande.

## Types de données {#types}

Python permet de manipuler différents types de données :
* des nombres : `int`, `float`
* des « booléens » : `bool` (vrai ou faux)
* du texte : `str`
* des collections or­données de données : `list`, `tuple`
* des collections non or­données `set`, `dict`
* l’absence de données `None`

## Nombres et maths {#numbers}

Python, comme tout langage de programmation, sait manipuler des nombres ; les soustraire, les diviser, les multiplier…

``` py
# -*- coding: utf8 -*-
# déclaration de l’encodage uniquement nécessaire avec Python < 3

# Ceci est un commentaire

print("Quelques nombres simples :")
print(12)  # Ceci est un nommbre entier (int)
print(12.5)  # Ceci est un nombre décimal ou flottant (float)

print("Aditions")
print(12 + 13)  # Donne un entier
print(12 + 0.5)  # Donne un flottant

print("Soustractions")
print(12 - 8)

print("Multiplications")
print(12 * 8)

print("Divisions")
print(12 / 2)
print(11 // 2) # Division entière
print(11 % 2)  # Modulo (le “reste” de la division)

print("Puissances")
print(2 ** 8) # « 2 puissance 8 », 256 (2 × 2 × 2 × 2 × 2 × 2 × 2 × 2)
  
print("Une erreur:")
print(1 / 0) # On ne peut pas diviser par zéro…
```

## Chaînes de caractères {#strings}

Les “chaînes” contiennent du texte, une séquence de lettres successives. En Python 3, les chaînes de caractères sont encodées en utf-8, on peut donc utiliser accents, diacritiques et caractères non latins.

```py
print('Ceci est une "chaîne de caractères"')
print("Ceci est une 'chaîne de caractères'")
print("Ceci est une \"chaîne de caractères\"") # Les caractères délimiteurs sont “échappés”

print("une chaîne de caractères, " + "une autre chaîne de caractères")

a = "une chaîne"
b = "une autre chaîne"

print(a + " " + b)

print("Dix " * 10)

print("Åbenrå © Ђ ק")
```

## Variables {#variables}

Les variables sont similaires à des boîtes de rangement, elles doivent avoir un nom et contenir quelque chose. 

```py
num_a = 12
num_b = 15
num_c = a * b
string = "une chaîne"

# le nom des variables  ne peut pas commencer par un chiffre
# 1a = 12
# mais ils peuvent en contenir (ailleurs qu’au début)
a1 = 12
# Les titrets bas, ou underscores sont permis:
_a = 12
a_ = 13
# En Python, tout est un objet. On peut “re-lier” le nom 'a' à un nouvel objet :
a = a + 12
# Le nom des variables est sensible à la casse
# Ainsi,
x = 12
# est une variable différente de
X = 13
print(x)
print(X)
```

## Listes  {#lists}

Les listes sont des séquences de choses, comme une chaîne est une séquence de lettres. Mais les listes peuvent contenir des éléments tels que des chiffres, des variables et d'autres listes. 

```py
# Voici une liste ('list' – équivalent d’array dans d’autres languages)
alist = [1, -2, "abcdefg", 4, 50]
print(alist)
alist.append(1234)
print(alist)
# affiche [1, -2, 'abcdefg', 4, 50, 1234]

# Récupérer un élément d’une liste:
print(alist[0])  # le premier élément
print(alist[1])  # le second

# les nombres négatifs permettent de parcourir la liste depuis la fin
print(alist[-1])  # le dernier élément
print(alist[-2])  # l’avant-dernier

# Listes imbriquées 
print([1, 2, 3, ["a", "b", "c"]])
print([1, 2, 3, ["a", ["deeper"]]])
```
[Aller plus loin avec les listes](lists).

## Boucles {#loops}
Les boucles sont utilisées pour passer d’une liste à l’autre et examiner chacun des éléments. Les boucles sont un moyen puissant et rapide de travailler avec de nombreux éléments.

``` py
for item in alist:
    # ceci est le corps ('body') de la boucle
    print(item)
    # D’autres lignes peuvent suivre à la condition de les indenter de manière cohérente.
    # En Python, les espaces en début de ligne sont signifiants
    
# Parcourir une suite de nombres
for item in range(10):
    print(item)

# Parcourir une suite de nombres, en faisant des 'maths'
for i in range(10):
    print(i, i * 0.5)

# Boucles imbriquées
for x in range(1, 5):  # outer loop
    print("---")
    for y in range(x, x + 5):  # inner loop
        print(x, y, x * y)
```            

## Fonctions {#functions}

Les fonctions sont de petits programmes dans le programme. Plutôt que répêter le même code plusieurs fois, on peut écrire une fonction et ré-utiliser le code dans différentes parties du programme global.

``` py
# Déclarer une fonction:
def myfunction():
    print("hello!")

# Exécuter la fonction:
myfunction()

# Déclarer une fonction qui demande un 'argument' (ou 'paramètre')
def mysecondfunction(x, y):
    print("hello!")
    print(x, y)

# Exécuter la fonction en lui transmettant deux arguments
mysecondfunction(123, 456)

def add2numbers(x, y):
    # On peut accéder aux variables 'globales'
    print(aglobalvariable)
    result = x + y
    return result

aglobalvariable = "Salut !"
thereturnedvalue = add2numbers(1, 2)
print(thereturnedvalue)
# 'result' était un nom local au sein de la fonction 'add2number', il n’est donc pas visible à l’extérieur.
# La ligne suivante causerait une erreur :
# print(result)
```
## Comparaisons et conditions {#conditions}

Parfois, un programme doit répondre à des valeurs ou à des situations particulières. Par exemple, « si une variable vaut 4, alors faire ceci. Si ce n’est pas le cas, continuer ». 
### Comparaison
Une comparaison entre deux valeurs renvoie toujours un « booléen » (True ou False).
```py
# Comparaisons
a = 12
b = 20

# Est-ce que a et b sont égaux ?
print(a == b)
# Est-ce que a et b sont différents ? 
print(a != b)
# Est-ce que a est supérieur à b ?
print(a > b)
# Est-ce que a est inférieur à b ?
print(a < b)
# Est-ce que a est supérieur ou égal à b ?
print(a >= b)
# Est-ce que a est inférieur ou égal à b ?
print(a <= b)
# Le résultat est une valeur 'booléenne' 
result = a < b
print(result)
# affiche : 
# True
```

### Conditions
Si, ou si et sinon (`if`, `elif`, `else`) permettent d’évaluer des conditions (sous la forme de booléens) pour prendre des décisions :
```py
# Conditions
if a < b:
    print("a est inférieur à b")

# Si / sinon
if a < b:
    print("a est inférieur à b")
else:
    print("a est supérieur à b")

# Si, ou si, sinon 
if a > b:
    print("a est inférieur à b")
elif a == 12:
    print("a vaut douze")
else:
    print("a est supérieur à b et ne vaut pas douze")

# Logique booléenne
if a > 15 and b > 15:
    print("a et b sont supérieurs à 15")
else:
    print("L’un ou l’autre de a et b n’est pas supérieur à 15")

if a > 15 or b > 15:
    print("a OU b est supérieur à 15")
else:
    print("Ni a ni b n’est supérieur à 15")

print(a > 15 or b > 15)
# affiche :
# True

# On peut grouper les sous-expressions en utilisant des parenthèses:
if (a > b and b == 13) or b == 25:
    print("...")
if a > b and (b == 13 or b == 25):
    print("...")
```

## Aléatoire {#random}

On peut faire plein de trucs chouettes avec les nombres aléatoires.

``` py
from random import random, randint
# En python, certains modules (la plupart) doivent être importés explicitement
# Drawbot en intègre de nombreux par défaut (dont random et randint)

# La fonction random() retourne un nombre pseudo-aléatoire entre zéro et un
print("Un nombre aléatoire entre 0.0 et 1.0")
print(random())

# La fonction randint() retourne un nombre pseudo-aléatoire dans les limites qu’on lui donne
print("Un nombre aléatoire entre 0 et 4")
print(randint(0, 4))
print("Un nombre aléatoire entre 10 and 20")
print(randint(10, 20))

# Utiliser un nombre aléatoire pour faire des choses différentes
# things.
print("Choisit aléatoirement entre A et B, 6 fois")
for i in range(6):
    if random() > 0.5:
        print("A")
    else:
        print("B")
```