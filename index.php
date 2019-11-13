<?php
require('controller/controller.php');
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
    elseif ($_GET['action'] == 'otherPage') 
    {
            other_page();
    }
     elseif ($_GET['action'] == 'addComment') {
        if (isset($_GET['id']) and $_GET['id'] > 0) {
            if (!empty($_POST['author']) and !empty($_POST['comment']) and !empty($_POST['email'])) {
                add_comment($_GET['id'], $_POST['author'], $_POST['comment'], $_POST['email']);
            }
            else {
                echo 'Une Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            echo 'Erreur : aucun identifiant d\'article envoyé';
        }
    }

} else
{
    listArticles();
}