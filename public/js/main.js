$(document).ready(function()
{
	// object "show_menu" in Menu
	$('.show_menu').click(function()
	{
		//object "nav-menu" to show menu
		$('.nav-menu').slideToggle();
        $('#main_page').slideToggle();
	});

	//object "Show last article"
	$('#Actu').click(function()
	{
		$('.nav-menu').slideUp();
	});
    
    
})