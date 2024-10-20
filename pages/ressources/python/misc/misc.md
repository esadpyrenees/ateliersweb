# Trucs divers en Python 

Des scripts python d’exemple, largement commentés, plutôt naïfs et pas très performants.
    
### Compter les mots

```python
"""
Un script python qui prend un texte et compte les mots qu’il contient.
En sortie, une “phrase” qui contient les mots les plus fréquents, 
répétés autant de fois qu’ils sont contenus dans le texte initial.
… avec beaucoup plus de commentaires que de code.
"""

# depuis le module python “collections”, importer Counter (qui sait compter les mots)
from collections import Counter

# initialiser une liste pour stocker tous les mots du texte
words = []
# ouvrir le fichier qui contient tout (on le nomme “f”)
with open("tools.txt", "r") as f:
  # lire chaque ligne
  lines = f.readlines()
  # pour chaque ligne…
  for line in lines:
    # on supprime les caractères qui ne nous intéressent pas (“\n” est un saut de ligne)…
    for ch in [':', '-', '.', ',', "http", 'https', 'www', '\n']:
      # en les remplaçant par une espace
      line = line.replace(ch," ")
    # on ajoute à la liste des mots une liste de mots créée en coupant la ligne à chaque espace
    words += line.split(' ')  

# deux choses : on filtre la liste selon les mots plus longs que 4 caractères, 
# et on transforme chaque mot en bas de casse (cette notation étrange est une “liste de compréhension” 🙃)
words = [word.lower() for word in words if len(word) > 4]

# La magie de Count, qui prend en paramètre une liste de mots 
# et de “most_common” qui les range en fonction de leur fréquence
counted_words = Counter(words).most_common()

# counted_words contient une liste ordonnée de “groupes” contenant:
# - le mot (en position 0)
# - son nombre d’occurences (en position 1)

# on supprime de counted_words les mots dont le nombre d’occurences n’est pas au moins de 2
# (grâce à une “liste de compréhension”, à nouveau)
counted_words = [w for w in counted_words if w[1] > 1]

# on crée une “phrase” vide
phrase = ""
# pour chaque mot de counted_words…
for word in counted_words:
  # on ajoute le mot à la phrase, autant de fois qu’il est présent:
  # par ex. phrase = phrase + (mot + espace) × 3 
  phrase += (word[0] + " ") * word[1]

# on affiche la phrase
print(phrase)

# ou on la stocke dans un fichier
with open("tools_sorted.txt", "w") as f:
  f. write(phrase)
```
[Télécharger l’exemple](count.zip)
