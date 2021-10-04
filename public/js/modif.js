$(document).ready(function() {
    $(".company").click(function() {
            var contenu_avant = $(this).text();
            var id_bdd = $(this).attr("id");
            var champ_bdd = $(this).attr("name");

            $(this).blur(function() {
                var contenu_apres = $(this).text();
                 parametre='id='+id_bdd+'&champ='+champ_bdd+'&contenu='+contenu_apres ;
                    $.ajax({
                        url: "/php/updateCompanies.php",
                        type: "POST",
                        data: parametre,
                        success: function(html) {}
                    });
            });
    });

    $(".typeDocuments").click(function() {
        var contenu_avant = $(this).text();
        var id_bdd = $(this).attr("id");
        var champ_bdd = $(this).attr("name");

        $(this).blur(function() {
            var contenu_apres = $(this).text();
            parametre='id='+id_bdd+'&champ='+champ_bdd+'&contenu='+contenu_apres ;
            $.ajax({
                url: "/php/updateTypeDocuments.php",
                type: "POST",
                data: parametre,
                success: function(html) {}
            });
        });
    });

    $(".settings").click(function() {
        var contenu_avant = $(this).text();
        var id_bdd = $(this).attr("id");
        var champ_bdd = $(this).attr("name");

        $(this).blur(function() {
            var contenu_apres = $(this).text();
            parametre='id='+id_bdd+'&champ='+champ_bdd+'&contenu='+contenu_apres ;
            $.ajax({
                url: "/php/updateSettings.php",
                type: "POST",
                data: parametre,
                success: function(html) {}
            });
        });
    });
});