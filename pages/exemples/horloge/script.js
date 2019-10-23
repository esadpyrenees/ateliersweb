$(function(){

    // quelle heure est il ?
    var now = new Date();

    // calcul du décalage horaire
    var now_hours = now.getHours();
    var now_utc = now.getUTCHours();
    var fuseau = (now_hours - now_utc) * 60;

    // initialisation
    var apidata = false;

    /*------------------------------------------- */
    // utilitaires

    // transforme un nombre situé sur une échelle min/max sur une autre échelle
    Number.prototype.map = function (in_min, in_max, out_min, out_max) {
        return (this - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
    }

    // convertit une date UTC en minutes depuis minuit
    var utcdate_to_minutes = function(utcdate){
        return utcdate.getHours() * 60 + utcdate.getMinutes() + fuseau;
    }

    /*------------------------------------------- */
    // détermine le texte et les couleurs, chaque seconde
    var paintItGrey = function(data){
        // toutes les secondes, on recalcule now
        now = new Date();
        // à partir des dates/heures UTC reçues (sunset et sunrise)
        // on traduit ces heures en minutes depuis minuit
        var sunrise = utcdate_to_minutes(new Date(data.results.sunrise) );
        var sunset = utcdate_to_minutes(new Date(data.results.sunset) );
        var now_minutes = utcdate_to_minutes( now ) - fuseau;

        var night_length = 1440 - sunset + sunrise;

        if(now_minutes < sunrise){
            // matin
            var color = now_minutes.map(sunrise - night_length, sunrise, 0, 255);
        } else if(now_minutes > sunset) {
            // soir
            var color = now_minutes.map(sunset, sunset + night_length, 0, 255);
        } else  {
            // jour
            var color = now_minutes.map(sunrise, sunset, 0, 255);
        }

        var grey = Math.floor(color);
        var i_grey = 255 - grey;

        $('body').css({
            'background':'rgb(' + grey + ',' + grey + ',' + grey + ')',
            'color':'rgb(' + i_grey + ',' + i_grey + ',' + i_grey + ')'
        })

        // affiche 02:25:05 et pas 2:25:5
        var h = now.getHours() < 10 ? '0' + now.getHours() : now.getHours();
        var m = now.getMinutes() < 10 ? '0' + now.getMinutes() : now.getMinutes();
        var s = now.getSeconds() < 10 ? '0' + now.getSeconds() : now.getSeconds();
        $('p').html(h + ":" + m + ":" + s)

    }

    /*------------------------------------------- */
    // fonction qui rafraichit l’affichage toutes les secondes
    setInterval(function(){
        // uniquement si on a reçu les données
        if(apidata) {
            paintItGrey(apidata);
        }
    }, 1000);

    /*------------------------------------------- */
    // initialisation, en appelant l’api
    $.ajax({
        url : 'http://api.sunrise-sunset.org/json?lat=43.295100&lng=-0.370797&formatted=0',
        success : function(data, statut){
            apidata = data;
        },
       error: function(){
           $('p').html('I FAIL');
       }
    });

})
