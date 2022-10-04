# Les chaînes de caractères en Python 
    
## Créer une chaîne de caractères (`string`)    

```python
words = "Design is the organization of materials and processes"
```

### Compter le nombre de caractères, ou le nombre d’occurences d’un mot
Utiliser `len` et `count` :
```python
print(len(words), "caractères")
# affiche:
# 53 caractères

# Texte de Formes Vives : http://www.formes-vives.org/atelier/?post/Hypotheses
hypotheses = "Hypothèses de travail — 1. Nous prenons la politique comme champ d’action ; pour développer notre pratique, nous nous lions à des organisations sociales et politiques qui toutes cherchent à mettre en œuvre l’exigence démocratique et l’enrichissement du bien commun vécu.Notre implication vise à mettre en avant les qualités qui sont propres à ces organisations en y introduisant une réflexion d’ensemble sur la communication et un langage artistique. — 2. Il ne s’agit pas de tendre à rendre visible et morale la politique mais de résister au commerce compétitif, matérialiste, abrutissant et chaotique des visibilités.Les mouvements sociaux et politiques ne peuvent pas user des logiques du marketing pour communiquer. — 3. Cela débute par la construction d’une résistance aux formes de la communication oppressante, aiguisées par les dominants. Par participer aux « productions de réseaux critiques, rassemblant des ‹ intellectuels spécifiques › dans un véritable intellectuel collectif capable de définir lui-même les objets et les fins de sa réflexion et de son action, bref, autonome. Cet intellectuel collectif peut et doit remplir d’abord des fonctions négatives, critiques, en travaillant à produire et à disséminer des instruments de défense contre la domination symbolique. »Ces instruments doivent nuire à la légitimité des dominants, de leur personnel politique et de leurs communicants. Pour enrayer leur partage professionnel des savoirs sur l’art social, il s’agit de commencer par déconstruire les invisibles tautologies et les dogmes abrutissants qu’ils entretiennent, qu’ils nous inculquent et qui les confortent — non pas de manière intentionnelle et machiavélique mais par bêtise endurcie.Pour notre part nous étudierons les présupposés de leur système de communication et établirons sur leurs cendres nos présupposés. — 4. La communication, dans sa forme dominante actuelle, se borne à être l’arbre des mots d’ordre. C’est « un ensemble de mots d’ordre. Quand on vous informe, on vous dit ce que vous êtes censés devoir croire […]. On ne vous demande pas de croire mais de vous comportez comme si vous croyiez […]. Ce qui revient à dire que l’information est exactement le système de contrôle. » — 5. L’éthique de la communication ne dépend pas uniquement des intentions déclarées et des fins recherchées. En eux-mêmes, les moyens ne sont à aucun moment neutres.Les stratégies et techniques qu’emploient la propagande et la publicité ont pour tâche d’abolir tout espace critique, tout espace de pensée et de jugement. L’annihilation de la distance, même quand on promeut le bonheur ou la vertu, c’est le viol des foules. « La bonne distance ou la place du spectateur est une question politique. La violence réside dans la violation systématique de la distance. Cette violation résulte des stratégies spectaculaires qui brouillent volontairement ou non la distinction des espaces et des corps pour produire un continuum confus où s’égare toute chance d’altérité. » — 6. Aussi, le système de la communication pour masse, par sa logique et ses moyens, rompt et a toujours rompu l’exigence démocratique. — 7. Résister à l’idiome de la communication tel que le capitalisme l’a créé in-nihilo — la publicité s’est développée à partir de l’accaparement des techniques de propagande et l’expropriation du mot communication — c’est avoir le courage de mépriser radicalement notre culture du verbe déterministe, de la diffusion de masse, du beau marchand et du motif du « bonheur à venir ». Cette culture qui est celle qui domine notre écosystème et préside aux intérêts capitalistes. — 8. Communiquer signifie mettre en commun, partager un sentiment ou une idée ; communiquer est une pratique dont dépend l’idéal démocratique ; communiquer est alors une nécessité politique. — 9. Une communication visuelle est une action qui se détermine par la forme esthétique choisie, par la manière d’assumer ses conditions de possibilités, ainsi que par la place qu’elle donne au spectateur — après Rancière, nous le nommerons traducteur.Les mots et les visibilités sont des objets. Le graphisme est l’art de les composer, soit le cheminement sensible pour les mettre en commun.Les images sont des relations entre des objets et des sujets. Elles attendent dans le visible que des regards les sollicitent, regards attirés par l’écart et le plaisir qu’elles réussiraient à ouvrir. — 10. De la découverte d’une visibilité ou d’un texte, un traducteur ne passe pas à une compréhension du monde et de celle-ci à une décision d’action.« Le scepticisme présent [sur la capacité politique des images] est le résultat d’un excès de foi. Il est né de la croyance déçue en une ligne droite entre perception, affection, compréhension et action. Une confiance nouvelle dans la capacité des images suppose la critique de ce schéma stratégique. Les images […] ne fournissent pas des armes pour les combats. Elles contribuent à dessiner des configurations nouvelles du visible, du dicible et du pensable, et, par là même, un paysage nouveau du possible. Mais elles le font à condition de ne pas anticiper leur sens ni leur effet. »Aussi nous évacuons la volonté abrutissante de transmission d’un message et affirmons la traduction, le passage, le mouvement, l’adaptation comme la véritable et indépassable action de celles et ceux qui lisent, regardent, écoutent… — 11. Les images, du fait de l’altérité qu’elles ouvrent, dépassent ce à quoi les communicants cherchent à les réduire. Les traiter seulement sous un angle symbolique, c’est-à-dire les déterminer en terme de signes, revient à les courber sous les mots.La prévalence du langage verbal sur le langage visuel (« Au début était le Verbe ») est une pure croyance.« Le voir précède le mot. » — 12. « Parce qu’un objet est dit médiatique, c’est-à-dire produit par des techniques de communication, on s’imagine naïvement qu’il est dans la médiation, et du même coup on lui donne une valeur symbolique. On fabrique même une science de cette médiation en la réduisant à des stratégies et des techniques de communication. C’est oublier que la caractéristique fondamentale de l’image, c’est son immédiateté, sa résistance primitive à la médiation. On a pris l’habitude d’appeler médiatique tout ce qui s’adresse à un public par la voie d’un canal et l’on en induit que tout est canalisable. L’image ne l’est pas. Elle déborde largement le canal et s’en va envahir par ses propres ruses les corps et les esprits que nos canalisateurs croyaient maîtriser. L’image, pas sa présence insistante, passionnelle et silencieuse, ne se tient que par la parole donnée par le plaisir de voir, offerte en lui. » — 13. Le graphisme, art de la composition et de la mise en partage des mots et des visibilités, doit se défaire de son orgueil rationaliste, objectiviste, aveugle et glacial, il doit en découdre avec cet insupportable oxymore qu’est la communication efficace.Se détourner des idées d’efficacité et de justesse c’est enfin faire confiance à l’image pour ce qu’elle peut être et donc c’est faire confiance au spectateur, lui rendre sa liberté de traducteur.« Il n’y a pas d’image juste, il y a juste des images. » — 14. L’objet de la communication ne doit pas être de transférer la politique dans l’éloignement spatial et temporel et d’en faire le problème d’experts. Au contraire, une communication politique doit être elle même un lieu, une mise en pratique de la politique. — 15. Si nous sommes submergés de discours, nous sommes pauvres en images ; les organisations politiques et sociales se refusent à l’idée d’en produire.Il faut du courage pour que des femmes et des hommes s’aventurent dans la création et la diffusion d’images, pour qu’ils s’adressent à l’imaginaire, à la puissance critique de leurs voisins traducteurs, pour qu’ils ouvrent le partage du sens dans leur communauté. — 16. Avec nos traducteurs, nous commencerons et finirons par ouvrir ces trois questions.Que vois-tu ? Qu’en penses-tu ? Qu’en fais-tu ?Leur rendre leur liberté c’est les encourager à y répondre et surtout c’est ne jamais chercher à y répondre à leur place. — 17. La nécessité de la communication doit intégrer la richesse du langage artistique. L’artiste doit prendre place dans l’élaboration de productions et de dispositifs de communication. — 18. Il y a autant de langages graphiques qu’il y a de graphistes. Déclarer cela c’est dire qu’il ne faut qu’aucun graphiste puisse se mettre à la place d’un autre pour que la communication ne devienne une marchandise sans valeur, insipide et stérile. (à revoir)Dans une masse, les individus sont équivalents et interchangeables. Dans un peuple, les individus sont singuliers. Une création populaire est l’œuvre qui se crée à partir de la singularité de son auteur et de ses conditions de possibilité. — 19. Il y a toujours une part d’autorité quand on crée une visibilité, quand on décide de ses formes, de ses mots, de ses supports… C’est intrinsèque à chaque objet produit ; il renvoie à la voix et à l’intelligence de son auteur ; aussi nous considérons que tous ceux qui contribuent à une création en sont responsables. — 20. Composer des formes, des textes, ou les deux ensemble, dans le but de les rendre visibles, est un travail qui est à considérer d’un point de vue de traducteur ; nous déterminons la place qu’il peut occuper ; nous fermons le sens ou créons l’intrigue, sommes explicateurs ou peut-être complices. — 21. À l’intérieur même du processus de création, c’est-à-dire dans notre travail, notre capacité à établir une relation de confiance prédétermine la qualité future de l’expression graphique.Cette confiance repose sur une mise en discussion équilibrée de nos opinions personnelles. Pour cela, nous plaçons notre pratique non pas sous la logique verticale de la commande mais sous celle, horizontale, de la collaboration. — 22. Nos collaborations relèvent de choix sensibles.Avant de réfléchir ensemble, il faut nous rencontrer, nous découvrir et, peut-être, nous apprécier. Nos affinités et nos volontés doivent déborder le clientélisme des uns (prestataires) et les croyances en stratégie des autres (clients).Pour inscrire une spontanéité et un sentiment de liberté dans notre coexistence, nous devrons commencer par assouvir notre individuel et primordial désir de reconnaissance. Cela se tisse, doucement, intuitivement, par les plaisirs qu’apportent une conversation animée, un repas amical, une bonne ambiance de travail, un lieu agréable, la participation à des formes de culture… (« Ce type de biens — biens collectifs non marchands — se caractérise par le fait qu’on ne peut en jouir qu’à condition d’en jouir à plusieurs. ») — 23. Pour qu’il y ait collaboration, nous devons reconnaître la stricte égalité des intelligences des personnes en présence — ce que Rancière pose comme la condition de la démocratie — ainsi que la différence affirmative de nos savoir-faire. — 24. Le graphiste n’est ni un prophète ni un maître à penser. En tant que chercheur, il doit écouter, chercher et inventer, cela pour au mieux assister en fournissant des instruments.Les instruments à fournir doivent permettre et l’action et l’évaluation. S’ils nous permettent de communiquer ils doivent en même temps guider nos critiques, nos auto-critiques. (Dans le but de faire progresser qualitativement nos productions. Dans le but de se défaire progressivement des présupposés du marketing et de la propagande.) — 25. Nous avons toujours en tête notre propre faillibilité. Conserver la possibilité de se tromper c’est se réserver le droit de continuer d’apprendre.C’est aussi, toujours et malgré tout, se faire confiance, c’est-à-dire se laisser surprendre. De ce plaisir, discipliné par nos savoir-faire, porté par nos savoirs, ne peuvent qu’émerger des formes elles-mêmes généreuses. — 26. Le sens d’une création graphique est, en premier lieu, déterminé par ceux qui s’en saisissent et par son contexte. Aussi, le discours qu’elle contient peut être dépassé par le sens qu’elle produit.Nos mots et nos visibilités prennent sens et valeur d’usage à partir du vécu fondamental — le sentiment d’exister avec les autres dans un même monde. C’est la communauté des traducteurs qui créera ou pas une image, une relation avec une visibilité. — 27. Nous économisons nos forces et nos moyens pour ne produire que ce qui convient au partage. C’est prendre en compte la globalité des moyens mis à disposition, se détourner des automatismes et faire des choix sensibles. Préférer les petites choses et les infimes départs, ce que Jean-Christophe Bailly nomme utopia povera. — 28. Nous préférons chuchoter les choses importantes quand tout autour sont criées des futilités. Nous préférons prendre soin de l’indéterminé quand tout est déjà fort et efficace. Nous prenons plaisir à diffuser des formes tordues et flottantes quand tous les tristes clament le bonheur plat et lisse. — 29. Prendre en considération l’existence de multiples pratiques de communication c’est par exemple prêter attention à des expressions modestes, accidentelles, fragiles. C’est par exemple se soucier des productions d’amateurs, distinguer leurs choix singuliers de leurs choix par défaut (qui généralement sont la dérivation de productions des dominants) et, pourquoi pas, les déplacer, les reprendre. — 30. Nous nous occuperons des interstices. Rendre précieux le commun est sans doute une fin en soi. Nous essaierons d’éviter de répondre aux attentes artificielles et de participer au chaos mécanisé de la publicité et de la propagande. Parce que chaque visibilité publicitaire et propagandiste renforce et met en valeur toutes les autres. Parce que le capitalisme est une hydre insatiable.Rappelons-nous que déterminer les moyens (stratégies et techniques) c’est prendre position.S’éloigner du spectaculaire commence sans doute en produisant de l’espace — pour l’intelligence. — 31. Nous nous départons de l’immédiat permanent qui est le temps des médias dominants, de la politique-spectacle, des entreprises gargantuesques.Fuyions en avant. Prenons possession du temps, pour le vivre réellement, pour y imposer notre pratique. Penser le rapport au temps qu’implique nos actes de communication c’est penser notre rapport avec les traducteurs, globaliser notre approche, agrandir l’espace de la création.Prendre du temps est aussi l’unique manière de permettre la création collective — et donc une vraie responsabilité collective vis-à-vis de nos productions. — 32. Nous avons une pratique, professionnelle, artistique. Notre résistance y est féconde. Nous ne séparons pas militantisme et métier. Nous prenons position ici et maintenant.Nous cherchons a constamment faire progresser notre compréhension de nos choix et nécessités politiques.Politiser nos pratiques, prendre en compte et agir sur notre conditionnement social, signifie qu’il nous faut concevoir notre dignité, prendre la mesure de notre capacité intellectuelle et décider de son usage. De cela dépend notre liberté. Nous la nommons émancipation.Que-ce que je vois ? Qu’est-ce que j’en pense ? Qu’est-ce que j’en fais ? Et ainsi à l’infini. — 33. Il faut que tous puissent avoir leur mot à dire et disent leur mot, s’expriment et demandent à être exprimé, contrôlent ce que le collectif dit, ce qu’il fait, ce qu’il leur fait faire.Tendre à une organisation du travail par laquelle l’émancipation a le droit de cité, dans des conditions de plaisir, est indépassable pour pouvoir publier du bien commun. — 34. « Notre être psychique est fait de l’étoffe de la vie sociale et de la culture dans laquelle nous sommes immergés ainsi que de nos relations avec les autres. »Il n’y a pas d’organisation idéale face à cela, mais il y a des façons d’être et de faire qui trompent les contradictions les plus pernicieuses et insufflent l’exigence démocratique.De très nombreuses pratiques expérimentales et fougueuses ont pris corps dans les disciplines de l’architecture, du théâtre, de la danse, de la psychanalyse, de la pédagogie, du graphisme… sur des temps limités ; à des échelles réduites ; dans des proportions humaines. Nous les étudions pour prendre l’ampleur de leur pertinence contemporaine. — 35. Les idées s’améliorent. Le sens des créations y participe. Le plagiat est nécessaire. La progression l’implique. Il serre de près la production d’un auteur, se sert de ses instruments, délaisse une idée arrêtée, la remplace par l’idée ardente.Aussi les études et les hypothèses que nous proposons pourront peut-être être reprises par d’autres. Pour que se développe la pratique d’une communication politique, la mise en partage, en échange et en archive de travaux (ceux de nos pairs et les nôtres) permet d’établir une sphère de références. — 36. « La politique ne dessine pas plus que le contour, ou les contours pluriels, d’une indétermination dans l’ouverture de laquelle des affirmations peuvent avoir lieu. La politique n’affirme pas, elle fait droit aux exigences de l’affirmation. Elle ne porte pas le ‹ sens › ou la ‹ valeur ›, elle rend possible qu’ils trouvent place, et que cette place ne soit pas celle d’une signification achevée, réalisée et réifiée, qui pourrait se revendiquer comme figure accomplie du politique. »« La politique participe à reconfigurer le partage du sensible, introduit des sujets et des objets nouveaux, rend visible ce qui ne l’était pas et fait entendre comme parleurs ceux qui n’étaient perçus que comme animaux bruyants. »La communication politique telle que nous la recherchons découle de cette définition. — 37. Nous voulons tout dire, montrer, faire entendre et puis surtout, avec la création de ces visibilités, nous voulons mobiliser l’imaginaire, la plaisir et la parole des traducteurs. — 38. Développer la création et la circulation des singularités, des savoirs et des savoir-faire, c’est-à-dire de la culture, la partager pour qu’elle ne soit pas le privilège incorporé de quelques uns, c’est bien sûr nourrir la puissance d’imaginaire des luttes mais c’est surtout participer à l’idéal démocratique."
print( hypotheses.count("politique"))
# affiche : 
# 20
print( hypotheses.count("action"))
# 7
```

### Par quoi elle débute, par quoi elle finit
Utiliser `startswith` et `endswith` :
```python
print(words.endswith("processes"))
# affiche:
# True
print(words.startswith("Design"))
# True
```

### Casse

On peut agir sur la casse : 

```python
# upper() transforme la chaine en capitales
print(words.upper())
# affiche
# DESIGN IS THE ORGANIZATION OF MATERIALS AND PROCESSES

# lower() transforme la chaine en bas de casse
print(words.lower())
# design is the organization of materials and processes

# title transforme le premier caractère de chaque mot en capitale et le reste en bas de casse
print(words.title())
# Design Is The Organization Of Materials And Processes

# la chaîne originale ne change pas
print(words)
# Design is the organization of materials and processes
```

### Formatter une chaîne

Pour intégrer des valeurs variables à une chaîne de caractères fixe, on peut utiliser `format`, avec un seul paramètre : 

```python
num = hypotheses.count("politique")
print( "Le texte Hypothèses de travail du collectif Formes Vives contient {} fois le mot « politique »".format(num))
# affiche:
# Le texte Hypothèses de travail du collectif Formes Vives contient 20 fois le mot « politique »
```

Utiliser `format` avec plusieurs paramètres : 

```python
print("Hello, my name is {} and I am {} years old!".format("John", 18))
# Hello, my name is John and I am 18 years old!
```
Utiliser `format` avec des paramètres nommés : 

```python
print("Hello, my name is {name} and I am {age} years old!".format(age=18, name="John"))
# Hello, my name is John and I am 18 years old!
```
Utiliser un dictionnaire (`dict`). On utilise alors l’opérateur "**" pour “décompresser” (_unpack_) les valeurs.
```python
import datetime
introduction = 'My name is {first_name} {last_name} aka the {aka}, and I am {age} years old.'
date = datetime.date.today()
year = date.year
full_name = {
    'first_name': 'Tony',
    'last_name': 'Hawk',
    'aka': 'Birdman',
    'age': year - 1968
}
print(introduction.format(**full_name))
# Affiche 
# My name is Tony Hawk aka the Birdman, and I am 54 years old.
```
Depuis Python 3.6, on peut utiliser les « _f-strings_ », en préfixant la chaîne par `f` :
```python
name = "Tony"
age = 54
print( f"Hello, {name}. You are {age}." )
# Affiche 
# Hello, Tony. You are 54.
```

