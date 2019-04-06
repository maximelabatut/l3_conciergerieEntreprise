// début barre de navigation
function collapseNavbar() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
}

$(window).scroll(collapseNavbar);
$(document).ready(collapseNavbar);

$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

$('.navbar-collapse ul li a').click(function() {
    $(this).closest('.collapse').collapse('toggle');
});
//fin barre de navigation
//fonction de verification d'authentification

function login()
{
    var login = document.getElementById('loginConciergerie').value;
	var password = document.getElementById('passwordConciergerie').value;
			
      if (password != "" & login != "") {
        if ( hex_md5( password ) == "7f3b46dde26b500829d789c0e4adea7c" & login == "salarie") // mdp : salarie123456!
    	{
			location.reload();
    	    window.open("pages_statiques/salarie.html","_blank");
        }
		else if ( hex_md5( password ) == "bcf76871a21ed47d6f29f81ac1146286" & login == "client" ) // mdp : client123456! 
		{
			location.reload();
			window.open("pages_statiques/client.html","_blank");
		}
		else if ( hex_md5( password ) == "d3b8145ed59941d8bc36f59f8e23d101" & login == "prestataire") // mdp : prestataire123456! 
		{
			location.reload();
			window.open("pages_statiques/prestataire.html","_blank");
		}
		else if ( hex_md5( password ) == "abbd8a2138d059ecb2e923405e9ea244" & login == "administrateur") // mdp : administrateur123456! 
		{
			location.reload();
			window.open("pages_statiques/administrateur.html","_blank");
		}
        else
        {
            alert( "Login ou Mot de passe incorrecte !");
			location.reload();
        }
            }
    }
function afficher_cacher(id)
{
	if(document.getElementById(id).style.visibility=="hidden")
	{
		document.getElementById(id).style.visibility="visible";
		document.getElementById('bouton_texte').innerHTML='Cliquez ici pour cacher le formulaire d\'ajout un service.';
	}
	else
	{
		document.getElementById(id).style.visibility="hidden";
		document.getElementById('bouton_texte').innerHTML='Cliquez ici pour ajouter un service.';
	}
	return true;
}

 $(document).ready(function() {
 
    $('.faq_question').click(function() {
 
        if ($(this).parent().is('.open')){
            $(this).closest('.faq').find('.faq_answer_container').animate({'height':'0'},500);
            $(this).closest('.faq').removeClass('open');
 
            }else{
                var newHeight =$(this).closest('.faq').find('.faq_answer').height() +'px';
                $(this).closest('.faq').find('.faq_answer_container').animate({'height':newHeight},500);
                $(this).closest('.faq').addClass('open');
            }
 
    });
 
});

 $(document).ready(function() {
 
    $('.serviceFormQues').click(function() {
 
        if ($(this).parent().is('.open')){
            $(this).closest('.serviceForm').find('.service_form_container').animate({'height':'0'},500);
            $(this).closest('.serviceForm').removeClass('open');
 
            }else{
                var newHeight =$(this).closest('.serviceForm').find('.service_answer').height() +'px';
                $(this).closest('.serviceForm').find('.service_form_container').animate({'height':newHeight},500);
                $(this).closest('.serviceForm').addClass('open');
            }
 
    });
 
});