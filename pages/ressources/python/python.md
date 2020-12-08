# Python
    
[Python for Designers](http://pythonfordesigners.com) est une introduction à Python pour les designers, produite par Roberto Arista, qui utilise Drawbot (pour Mac OSX seulement…).

[Drawbot](http://www.drawbot.com/) est un outil open source pour MacOS développé par [Just van Rossum](https://twitter.com/justvanrossum), [Erik van Blokland](http://letterror.com/) et [Frederik Berlaen](https://typemytype.com) dédié à l’utilisation de Python dans l’objectif de production de graphiques 2D fixes ou animés. C’est un outil particulièrement adapté à l’expérimentation avec les fontes variables.

[Flat](https://xxyxyz.org/flat/) et [Even](https://xxyxyz.org/even/) sont deux outils open source (et *cross-platform*) développés par Juraj Sukop permettant de manipuler des formes vectorielles et du texte en Python.
    
La documentation ci-dessous est une traduction française, légèrement modifiée de l’[introduction à Python de Drawbot](https://www.drawbot.com/content/courseware.html).

### Snippets

Le code des exemples ci-dessous est exécutable depuis la ligne de commande ou dans Drawbot.

Les exemples sont [téléchargeables](examples.zip). Dans le dossier décompressé, exécutez `python test.py` depuis la ligne de commande.

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
print(0.5 + 12)  # :)

print("Soustractions")
print(12 - 8)
print(12 - 25)

print("Multiplications")
print(12 * 8)
print(12 * -25)

print("Divisions")
print(12 / 2)
print(11 / 2)
print(11 // 2) # Division entière
print(11 % 2)  # Modulo (le “reste” de la division)

print("Puissances")
print(2 ** 8)
print(10 ** 2)
print(2 ** 0.5)

print("Une erreur:")
print(1 / 0) # On ne peut pas diviser par zéro…
```

## Chaînes de caractères {#strings}

Les “chaînes” contiennent du texte, une séquence de lettres successives.

```py
print('Ceci est une "chaîne de caractères"')
print("Ceci est une 'chaîne de caractères'")
print("Ceci est une \"chaîne de caractères\"") # Les caractères délimiteurs sont “échappés”

print("une chaîne de caractères, " + "une autre chaîne de caractères")

a = "une chaîne"
b = "une autre chaîne"

print(a + " " + b)

print("Dix " * 10)

print("Les caractères non-ascii devraient fonctionner :")
print("Åbenrå © Ђ ק")
print("Et maintenant, une erreur :")
print("many " * 10.0)
# la multiplication de chaînes de caractères 
# exige un nombre entier ; un flottant qui se trouverait  
# être un nombre entier ne fonctionne pas
```

## Variables {#variables}

Les variables sont similaires à des boîtes de rangement, elles doivent avoir un nom et contenir quelque chose. 

```py
a = 12
b = 15
c = a * b
CAP = "une chaîne"

print(c)

print(CAP)

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

y = 102
# Ceci produit donc une erreur
print(Y)
```

## Listes  {#lists}

Les listes sont des séquences de choses, comme une chaîne est une séquence de lettres. Mais les listes peuvent contenir des éléments tels que des chiffres, des variables et d'autres listes. 

```py
# Voici une liste ('list' – équivalent d’array dans d’autres languages)
alist = [1, -2, "abcdefg", 4, 50]
print(alist)
alist.append(1234)
print(alist)

# Récupérer un élément d’une liste:
print(alist[0])  # le premier élément
print(alist[1])  # le second

# les nombres négatifs permettent de parcourir la liste depuis la fin
print(alist[-1])  # le dernier élément
print(alist[-2])  # l’avant-dernier

print("nested lists:")
print([1, 2, 3, ["a", "b", "c"]])
print([1, 2, 3, ["a", ["deeper"]]])

# Attention : assigner une liste à un autre nom de variable 
# n’en crée pas une copie. On crée seulement une autre référence au même objet
anotherlist = alist
anotherlist.append(-9999)
print(anotherlist)
print(alist)
acopy = list(alist)
acopy.append(9999)
print(acopy)
print(alist)

# Les chaînes sont aussi des séquences qui peuvent être parcourues comme des listes
astring = "abcdefg"
print(astring[2])
print(astring[-1])  # depuis la fin

print("Récupérer des “tranches” ('slices') d’une liste")
print(alist)
print(alist[2:5])

# `range` est une fonction native qui permet de créer des listes à partir de nombres 
print(range(10))  # de 0 à 10 (n’inclue pas 10!)
print(range(5, 10))  # de 5 à 10 (n’inclue pas 10!)
print(range(1, 19, 3)) # de 1 à 19, par pas de 3

```

## Boucles {#loops}
Les boucles sont utilisées pour passer d'une liste à l'autre et examiner chacun des éléments. Les boucles sont un moyen puissant et rapide de travailler avec de nombreux éléments.

``` py
print("Bouclons autour de cette liste :")
alist = [1, -2, "abcdefg", 4, 50]
print(alist)
for item in alist:
    # ceci est le corps ('body') de la boucle
    print(item)
    # D’autres lignes peuvent suivre à la condition de les indenter de manière cohérente.
    # En Python, les espaces en début de ligne sont signifiants
    
print("Parcourir une suite de nombres")
for item in range(10):
    print(item)

print("Parcourir une suite de nombres, en faisant des 'maths'")
for i in range(10):
    print(i, i * 0.5)

print("Boucles imbriquées")
for x in range(1, 5):  # outer loop
    print("---")
    for y in range(x, x + 5):  # inner loop
        print(x, y, x * y)

print("Trois boucles imbriquées")
for x in range(2):
    for y in range(2):
        for z in range(2):
            print(x, y, z)

print("Trois boucles imbriquées avec un compteur")
count = 1
for x in range(2):
    for y in range(2):
        for z in range(2):
            print(x, y, z, count)
            count = count + 1
            # alternativement à 'count = count + 1', on peut écrire :
            # count += 1
```            

## Fonctions {#functions}

Les fonctions sont de petits programmes dans le programme. Plutôt que répêter le même code plusieurs fois, on peut écrire une fonction et ré-utiliser le code dans différentes parties du programme global.

``` py
# Déclarer une fonction:
def myfunction():
    print("hello!")

# Exécuter la fonction:
myfunction()

# Une erreur commune : oublier de l’exécuter
myfunction   # les parenthèses manquent…

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

def anotherfunc(x, y):
    # calling add2numbers function:
    return add2numbers(x, y)

print(anotherfunc(1, 2))
```
## Conditions

Parfois, un programme doit répondre à des valeurs ou à des situations particulières. Par exemple, « si une variable vaut 4, alors faire ceci. Si ce n’est pas le cas, continuer ». 


```py
# comparisons

# let's define some variables
a = 12
b = 20
print(a, b)

print("Est-ce que a et b sont égaux ?")
print(a == b)

print("Est-ce que a et b sont différents ? ")
print(a != b)

print("Est-ce que a est supérieur à b ?")
print(a > b)

print("Est-ce que a est inférieur à b ?")
print(a < b)

print("Est-ce que a est supérieur ou égal à b ?")
print(a >= b)

print("Est-ce que a est inférieur ou égal à b ?")
print(a <= b)

result = a < b
print("Le résultat est :")
print(result)

print("Ce résultat est une valeur 'booléenne'")
print("La valeur True :")
print(True)
print("La valeur False :")
print(False)

if a < b:
    print("a est inférieur à b")

if a > b:
    print("a est supérieur à b")

print("if/else")
if a < b:
    print("A")
else:
    print("B")

print("if/elif/else")
if a > b:
    print("A")
elif a == 12:
    print("B")
else:
    print("C")

print("if/elif/elif/.../else")
if a > b:
    print("A")
elif a == 10:
    print("B 10")
elif a == 11:
    print("B 11")
elif a == 12:
    print("B 12")
elif a == 13:
    print("B 13")
else:
    print("C")

# Logique booléenne
if a > 15 and b > 15:
    print("a et b sont supérieurs à 15")
else:
    print("L’un ou l’autre de a et b n’est pas supérieur à 15")

if a > 15 or b > 15:
    print("a OU b est supérieur à 15")
else:
    print("Ni a ni b n’est supérieur à 15")

print("Un résultat :")
print(a > 15 or b > 15)

# On peut inverser une valeur booléene
print("Pas vrai")
print(not True)
print("Pas  False")
print(not False)
print("Pas pas False")
print(not not False)
print("Pas pas pas False :)")
print(not not not False)

# On peut grouper les sous-expressions en utilisant des parenthèses:
if (a > b and b == 13) or b == 25:
    print("...")
if a > b and (b == 13 or b == 25):
    print("...")

# On peut imbriquer les parenthèses:
#if a > b and (b == 13 or (b == 25 and a == 12)):
#   ...
```

## Aléatoire {#random}

On peut faire plein de trucs avec les nombres aléatoires

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