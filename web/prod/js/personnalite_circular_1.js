$(document).ready(function()
{
    
    var button = $("#cn-button");
    var wrapper = $("#cn-wrapper");

    button.unbind().on("click", function(e)
    {
        if(wrapper.hasClass("opened-nav"))
        {
            $(this).html("Découvrir");
            wrapper.removeClass("opened-nav");
        }else
        {
            $(this).html("Fermer");
            wrapper.addClass("opened-nav");
        }
        
        e.preventDefault();
        return false;
    });
 
});