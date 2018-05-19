/*########################################
*			TOGGLE MENU 
########################################*/

	jQuery(document).ready(function() { 
	
		$('a#toggler-left').click(function(){
			jQuery.cookie('left-hide', 'yep'); 
			jQuery.cookie('left-hide', 'nope'); 
			  //$('#toggle').hide();
			var shouldShow = jQuery.cookie('left-hide') == 'yep';
			if( shouldShow ) { 
			jQuery('#toggle').show();
			} else { 
				jQuery('#toggle').hide();
			} 
		});
		
		$('a#toggler-right').click(function(){
			jQuery.cookie('right-hide', 'yep'); 
			jQuery.cookie('right-hide', 'nope'); 
			  //$('#toggle').hide();
			var shouldShow = jQuery.cookie('right-hide') == 'yep';
			if( shouldShow ) { 
			jQuery('#toggle').show();
			} else { 
				jQuery('#toggle').hide();
			} 
		});

	});

/*########################################
*			COOKIES 
########################################*/
/*
// on load() on ferme le slide 
$( "#toggle" ).slideUp(0);

//boutin slide sur #navshoutbox du div module-mini-shoutbox
 $( "#Nav-Shoutbox" ).click(function() {
  $( "#toggle" ).slideToggle(600);
return false;
});
*/


function sendCookie(name, value)
{
	var date = new Date();
	date.setMonth(date.getMonth() + 1); //1 mois de validité.
	document.cookie = name + '=' + value + '; expires = ' + date.toGMTString() + '; path =/';
 
}
 
//Récupère la valeur du cookie.
function getCookieHeader(name) 
{
	start = document.cookie.indexOf(name + "=")
	if( start >= 0 ) 
	{
		start += name.length + 1;
		end = document.cookie.indexOf(';', start);
 
		if( end < 0 ) 
			end = document.cookie.length;
		return document.cookie.substring(start, end);
	}
	return 1;
}
