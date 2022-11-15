# Caractères spéciaux

⚡ Cliquer sur les boutons pour copier leur valeur dans le presse-papier.

## Apostrophe courbe et guillemets
| Nom | Entité | HTML | CSS | Unicode | Commentaire |
|---|---|---|---|---|---|
| <button> <strong>’</strong> </button> | <button>&<span>rsquo;</span></button> | <button>&<span>#8217;</span></button> | <button>\2019</button> | <button>U+2019</button> | Apostrophe courbe |
| <button> <strong>«</strong> </button> | <button>&<span>laquo;</span></button> | <button>&<span>#171;</span></button> | <button>\00AB</button> | <button>U+00AB</button> | Guillemet français ouvrant |
| <button> <strong>»</strong> </button> | <button>&<span>raquo;</span></button> | <button>&<span>#187;</span></button> | <button>\00BB</button> | <button>U+00BB</button> | Guillemet français fermant |
| <button> <strong>“</strong> </button> | <button>&<span>ldquo;</span></button> | <button>&<span>#8220;</span></button> | <button>\201C</button> | <button>U+201C</button> | Guillemet anglais ouvrant |
| <button> <strong>”</strong> </button> | <button>&<span>rdquo;</span></button> | <button>&<span>#8221;</span></button> | <button>\201D</button> | <button>U+201S</button> | Guillemet anglais fermant |


## Les espaces

| Nom | Entité | HTML | CSS | Unicode | Commentaire |
|---|---|---|---|---|---|
| <button>Hair<strong> </strong>Space</button> | <button>&amp;<span>hairsp;</span></button> | <button>&amp;<span>#8202;</span></button> | <button>\200A</button> | <button>U+200A</button> |  La plus petite |
| <button>Thin<strong> </strong>Space</button> | <button>&amp;<span>thinsp;</span></button> | <button>&amp;<span>#8201;</span></button> | <button>\2009</button> | <button>U+2009</button> | Espace fine |
| <button>Narrow No-break<strong> </strong>Space</button> |  | <button>&amp;<span>#8239;</span></button> | <button>\202F</button> | <button>U+202F</button> | Espace fine insécable |
| <button>Normal<strong> </strong>Space</button> |  | <button>&amp;<span>#32;</span></button> | <button>\0020</button> | <button>U+0020</button> | Espace mot |
| <button>No-break<strong>&nbsp;</strong>Space</button> | <button>&amp;<span>nbsp;</span></button> | <button>&amp;<span>#160;</span></button> | <button>\00A0</button> | <button>U+00A0</button> | Espace mot insécable |
| <button>Six-per-em<strong> </strong>Space</button> |  | <button>&amp;<span>#8198;</span></button> | <button>\2006</button> | <button>U+2006</button> | 1/6 du corps |
| <button>Four-per-em<strong> </strong>Space</button> | <button>&amp;<span>emsp14;</span></button> | <button>&amp;<span>#8197;</span></button> | <button>\2005</button> | <button>U+2005</button> | 1/4 du corps |
| <button>Three-per-em<strong> </strong>Space</button> | <button>&amp;<span>emsp13;</span></button> | <button>&amp;<span>#8196;</span></button> | <button>\2004</button> | <button>U+2004</button> | 1/3 du corps | 
| <button>En<strong> </strong>Space</button>          | <button>&amp;<span>ensp;</span></button> | <button>&amp;<span>#8194;</span></button> | <button>\2002</button> | <button>U+2002</button> | 1/2 du corps  |
| <button>Em<strong> </strong>Space</button>          | <button>&amp;<span>emsp;</span></button> | <button>&amp;<span>#8195;</span></button> | <button>\2003</button> | <button>U+2003</button> | Identique au corps |
| <button>Figure<strong> </strong>Space</button>      | <button>&amp;<span>numsp;</span></button> | <button>&amp;<span>#8199;</span></button> | <button>\2007</button> | <button>U+2007</button> | Largeur d’un chiffre tabulaire |
| <button>Punctuation<strong> </strong>Space</button> | <button>&amp;<span>puncsp;</span></button> | <button>&amp;<span>#8200;</span></button> | <button>\2008</button> | <button>U+2008</button> | Même largeur que le point |

Pour aller plus loin : lire [Espaces unicode et navigateurs web](https://fvsch.com/espaces-unicode/) ou [Whitespaces](https://kirillbelyaev.com/s/).

## Utilisation

Les entités HTML (`&hairsp;`) ou le code HTML (`&#8202;`) peut être copié et collé dans un document HTML. Le code CSS peut être inséré dans un pseudo-element CSS ainsi:
```css
.citation::before { content: "«\202F"; }
.citation::after { content: "\202F»"; }
```
L’exemple ci-dessus automatise l’ajout de guillements français suivis (ou précédés) d’espaces fines insécables aux éléments dont la `class` est _citation_.

Rappelons qu’en composition française, on utilise des espaces (fines) insécables avant : ; ! ? » et après «. Pas d’espace avant le point, la virgule ou les points de suspension, ni après une parenthèse ouvrante ou avant une parenthèse fermante.

## Caractères utiles

<div class="utils">↪↩←↑→↓↔↕↖↗↘↙↜↝↢↣↤↦↥↧↯↰↱↲↴↳↵↶↷⇤⇥⇦⇨⇩⇧×±∞≈~≠¹²³½¼¾·•●⁂∴∵※☜☞☝☟✔★☆☼☂☺☹✄✌✎♪♫☂☀☼☁⚡❄☭</div>   

Aller plus loin avec [Unilist](https://unilist.raphaelbastide.com/) de Raphaël Bastide.