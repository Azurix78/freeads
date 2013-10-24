function verifsupp()
{
	return confirm("Supprimer ?");
}


$('#alert').click(function(){
	$('#alert').fadeOut();
});

$(window).load(function (e) {
    adaptiveheight($('#message'));
});

$("#message").keyup(function (e) {
    adaptiveheight(this);
});



function adaptiveheight(a) {
    $(a).height(0);
    var scrollval = $(a)[0].scrollHeight;
    $(a).height(scrollval);
    if (parseInt(a.style.height) > $(window).height() - 30) {
        $(document).scrollTop(parseInt(a.style.height));
    }
}
function show_annonce(id)
{
	window.location = "/Annonces/lire/"+id;
}

function show_message(id)
{
	window.location = "/Messagerie/lire/"+id;
}