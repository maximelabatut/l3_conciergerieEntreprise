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