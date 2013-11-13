$(document).ready(function()
{
    $(".date").unbind("click").click(function()
    {

       $("#form_du").val($(this).data("date-debut") || "");
       $("#form_au").val($(this).data("date-fin") || "");

    });
    
    
    $(".load_details").unbind("click").click(function(e)
    {
        var $dialog = $("#dialog_details").modal("show");
        var $titre = $dialog.find(".modal-title");
        var $contenu = $dialog.find(".modal-body");
        
        $titre.html("Chargement en cours...");
        $contenu.html('<i class="fa fa-spinner fa-spin fa-2x"></i> Veuillez patienter');

        $.post($(this).data("href")).done(function(msg)
        {       
            $titre.html(msg.titre);
            $contenu.html(msg.contenu);
        });

        e.preventDefault();
        return false;
    });


    $(".reset").unbind("click").click(function(e)
    {
        $("#form_du, #form_au, #form_mot_clefs").val("");
        $("#form_types_manifestation, #form_themes, #form_communes").selectpicker('deselectAll');
        e.preventDefault();
        return false;
    });
});