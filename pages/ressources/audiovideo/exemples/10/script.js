var bing = "Tout su tout blanc corps nu blanc un mètre jambes collées comme cousues. Lumières chaleur sol blanc un mère carré jamais vu. Murs blancs un mètre sur deux plafond blanc un mètre carré jamais vu. Corps nu blanc fixe seuls les yeux à peine. Traces fouillis gris pâle presque blanc sur blanc. Mains pendues ouvertes creux face pieds blancs talons joints angle droit. Lumière chaleur faces blanches rayonnantes. Corps nu blanc fixe hop fixe ailleurs. Traces fouillis signes sans sens gris pâle presque blanc. Corps nu blanc fixe invisible blanc sur blanc. Seuls les yeux à peine bleu pâle presque blanc. Tête boule bien haute yeux bleu pâle presque blanc fixe face silence dedans. Brefs murmures à peine presque jamais tous sus. Traces fouillis signes sans sens gris pâle presque blanc sur blanc. Jambes collées comme cousues talons joints angle droit. Traces seules inachevées données noires gris pâle presque blanc sur blanc. Lumière chaleur murs blancs rayonnants un mètre sur deux. Corps nu blanc fixe un mètre hop fixe ailleurs. Traces fouillis signes sans sens gris pâle presque blanc. Pieds blancs invisibles talons joints angle droit. Yeux seuls inachevés donnés bleus bleu pâle presque blanc. Murmure à peine presque jamais une seconde peut-être pas seul. Donné rose à peine corps nu blanc fixe un mètre blanc sur blanc invisible. Lumière chaleur murmures à peine presque jamais toujours les mêmes tous sus. Mains blanches invisibles pendues ouvertes creux face. Corps nu blanc fixe un mètre hop fixe ailleurs. Seuls les yeux à peine bleu pâle presque blanc fixe face. Murmure à peine presque jamais une seconde peut-être une issue. Tête boule bien haute yeux bleu pâle presque blanc bing murmure bing silence. Bouche comme cousue fil blanc invisible. Bing peut-être une nature une seconde presque jamais ça de mémoire presque jamais. Murs blancs chacun sa trace fouillis signes sans sens gris pâle presque blanc. Lumière chaleur tout su tout blanc invisibles rencontres des faces. Bing murmure à peine presque jamais une seconde peut-être un sens ça de mémoire presque jamais. Pieds blancs invisibles talons joints angle droit hop ailleurs sans son. Mains pendues ouvertes creux face jambes collées comme cousues. Tête boule bien haute yeux bleu pâle presque blanc fixe face silence dedans. Hop ailleurs où de tout temps sinon su que non. Seuls les yeux seuls inachevés donnés bleus trous bleu pâle presque blanc seule couleur fixe face. Tout su tout blanc faces blanches rayonnantes bing murmure à peine presque jamais une seconde temps sidéral ça de mémoire presque jamais. Corps nu blanc fixe un mètre hop fixe ailleurs blanc sur blanc invisible cœur souffle sans son. Seuls les yeux donnés bleus bleu pâle presque blanc fixe face seule couleur seuls inachevés. Invisibles rencontres des faces une seule rayonnante blanche à l’infini sinon su que non. Nez oreilles trous blancs bouche fil blanc comme cousue invisible. Bing murmures à peine presque jamais une seconde toujours les mêmes tous sus. Donné rose à peine corps nu blanc fixe invisible tout su dehors dedans. Bing peut-être une nature une seconde avec image même temps un peu moins bleu et blanc au vent. Plafond blanc rayonnant un mètre carré jamais vu bing peut-être par là une issue une seconde bing silence. Traces seules inachevées données noires fouillis gris signes sans sens gris pâle presque blanc toujours les mêmes. Bing peut-être pas seul une seconde avec image toujours la même même temps un peu moins ça de mémoire presque jamais bing silence. Tombés roses à peine ongles blancs achevés. Longs cheveux tombés blancs invisibles achevés. Invisibles cicatrices même blanc que les chairs blessées roses à peine jadis. Bing image à peine presque jamais une seconde temps sidéral bleu et blanc au vent. Tête boule bien haute nez oreilles trous blancs bouche fil blanc comme cousue invisible achevée. Seuls les yeux donnés bleus fixe face bleu pâle presque blanc seule couleur seuls inachevés. Lumière chaleur faces blanches rayonnantes une seule rayonnante blanche à l’infini sinon su que non. Bing une nature à peine presque jamais une seconde avec image même temps un peu moins toujours la même bleu et blanc au vent. Traces fouillis gris pâle yeux trous bleu pâle presque blanc fixe bing face bing peut-être un sens presque jamais bing silence. Blanc nu un mètre fixe hop fixe ailleurs sans son jambes collées comme cousues talons joints angle droit mains pendues ouvertes creux face. Tête boule bien haute yeux trous bleu pâle presque blanc fixe face silence dedans hop ailleurs où de tout temps sinon su que non. Bing peut-être pas seul une seconde avec image même temps un peu moins œil noir et blanc mi-clos longs cils suppliant ça de mémoire presque jamais. Au loin temps éclair tout blanc achevé tout jadis hop éclair murs blancs rayonnants sans traces yeux couleur dernière hop blancs achevés. Hop fixe dernier ailleurs jambes collées comme cousues talons joints angle droit mains pendues ouvertes creux face tête boule bien haute yeux blancs invisibles fixe face achevés. Donné rose à peine un mètre invisible nu blanc tout su dehors dedans achevé. Plafond blanc jamais vu bing jadis à peine presque jamais une seconde sol blanc jamais vu peut-être par là. Bing jadis à peine peut-être un sens une nature une seconde presque jamais bleu et blanc au vent ça de mémoire plus jamais. Faces blanches sans traces une seule rayonnante blanche à l’infini sinon su que non. Lumière chaleur tout su tout blanc cœur souffle sans son. Tête boule bien haute yeux blancs fixe face vieux bing murmure dernier peut-être pas seul une seconde œil embu noir et blanc mi-clos longs cils suppliant bing silence hop achevé."

var mots = bing.split(' ');

$body = $('body');

for(var i=0; i<100; i++){
	var e = $("<div class='mot'>" + mots[Math.floor(Math.random() * mots.length)] + "</div>");
    $body.append(e);
}




  
  var $mots = $('.mot');
  // $('body > :last-child').after($mots);
  //$mots.remove();
  
  var wh = $(window).height(),
      ww = $(window).width();
  $mots.each(function(){
    $this = $(this);
    var w = $this.width(),
        h = $this.height(),
        l = Math.round(Math.random()*(ww-w)),
        t = Math.round(Math.random()*(wh-h)),
        f = Math.round(Math.random()*40) + 20;
    $this.css({
      'left':l+'px',
      'top':t+'px',
      'font-size':f+'%'
    });
  });
