function ins(id)
{
	if ( document.getElementById(id).style.display == "none" )
	{
		document.getElementById(id).style.display = "block";
		document.getElementById('tog').value = "Annuler";

	}
	else
	{
		document.getElementById(id).style.display = "none";
		document.getElementById('tog').value = "S'inscrire";
	}
}

function deco(x)
{
	var a = document.getElementById(x);
	old = a.innerHTML;
	a.innerHTML="<a href='/Connect/logout'> Se d&eacute;connecter ?</a>";
}

function leavedeco(x)
{
	var e = document.getElementById(x);
	if (!old)
	{
		old = e.innerHTML;
	}
	e.innerHTML=old;
}

function verifsupp()
{
	return confirm("Supprimer ?");
}

function loading()
{
	document.getElementById('loading').style.display="block";
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