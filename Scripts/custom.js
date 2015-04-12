$( document ).ready(function() {

//Funkcija za odabiranje jezika, pomocu postavljanja cookija.
$( ".chooseLanguage" ).on( "click", function() {
	var l = $(this).attr('data-lang');
//	$.cookie('language', l, { expires : (jQuery.now() + (10 * 365 * 24 * 60 * 60)) });
	$.cookie('language', l, { expires : 60 });
	location.reload();
});

});

