<?php
require('../model/model.php');

function listArticles()
{	
	$trendss = getTrends();
	$posts = getArticles();

	require('../view/listArticlesView.php');
}

function article()
{
	$post_article = getArticle($_GET['id']);
	$posts_comments = getComments($_GET['id']);

	require('../view/listPostComments.php');
}