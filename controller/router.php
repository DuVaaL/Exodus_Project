<?php
require('controller.php');
if (isset($_GET['action'])) 
{
	if ($_GET['action'] == 'listArticles' ) {
			listArticles();
		}	

	elseif ($_GET['action'] == 'article') 
	{
			if (isset($_GET['id']) and $_GET['id'] > 0) {
				article();
			} else
			{
				echo('Erreur pas d\'identifiant envoyé :(');
			}
	}	
}else
{
	listArticles();
}