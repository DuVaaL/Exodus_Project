<?php
require('model/model.php');

function listArticles()
{
	$posts = getArticles();
	require('view/listArticlesView.php');
}

function other_page()
{
	$page = getOther_page();
	require('view/allArticlesView.php');
}

function article()
{
	$post_article = getArticle($_GET['id']);
	$posts_comments = getComments($_GET['id']);

	require('view/listPostComments.php');
}

function add_comment($id_article, $author, $comment, $email)
{
    $result = post_comment($id_article, $author, $comment, $email);

    if ($result === true) {
        
        header('Location: index.php?action=article&id=' . $id_article);
    }
    else {
       die('Impossible d\'ajouter le commentaire !');
    }
}