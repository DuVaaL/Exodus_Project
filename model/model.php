<?php

function getArticles()
{
    $pdo = db_connect();
    $req = $pdo->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM articles ORDER BY creation_date DESC LIMIT 0, 10');

    return $req;
}

function getArticle($id_article)
{
    $pdo =  db_connect();
    $req = $pdo->prepare('SELECT id,title,content, all_content, date_format(creation_date, \' Mis à jour le %d/%m/%y à %hH/%iMin/%ss\') as creation_date_fr from articles where id = ? ');
    $req->execute(array($_GET['id']));
    $article = $req->fetch();

    return $article ; 
}

function getComments($id_article)
{
  $pdo = db_connect();
  $req = $pdo->prepare('SELECT id,author,comments,email, date_format(comments_date, \'%d/%m/%y à %hH/%iMin/%ss\') as comments_date_fr from comments where id_article = ? order by comments_date desc ');
  $req->execute(array($id_article));
  $comments = $req;

  return $comments ;
}

function getTrends()
{
    $pdo = db_connect();
    $req = $pdo->query('SELECT id_trend, title, content FROM trends ORDER BY id_trend ');

    return $req;
}

function getTrend($id_trend)
{
    $pdo =  db_connect();
    $req = $pdo->prepare('SELECT id,title,content from trends where id = ? ');
    $req->execute(array($_GET['id']));
    $trend = $req->fetch();

    return $trend ; 
}
  

function db_connect()
{
  try
    {
     $pdo = new PDO('mysql:host=localhost;dbname=exodus;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        return $pdo ;
    }
    catch(Exception $e)
    {
        die("une erreur " .$e->getMessage());
     }
}