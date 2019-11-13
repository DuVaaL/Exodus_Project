<?php

function getArticles()
{
    $pdo = db_connect();
    $req = $pdo->query('SELECT id, title, content, img, DATE_FORMAT(creation_date, \'%d/%m/%Y à %H:%i\') as creation_date_fr from articles order by creation_date DESC LIMIT 0, 10');

    return $req;
}

function getArticle($id_article)
{
    $pdo =  db_connect();
    $req = $pdo->prepare('SELECT id,title,content, all_content,img_in, date_format(creation_date, \' Mis à jour le %d/%m/%y à %H:%i\') as creation_date_fr from articles where id = ? ');
    $req->execute(array($_GET['id']));
    $article = $req->fetch();

    return $article ; 
}

function getComments($id_article)
{
  $pdo = db_connect();
  $req = $pdo->prepare('SELECT id,author,comments,email, date_format(comments_date, \'%d/%m/%y à %H:%i\') as comments_date_fr from comments where id_article = ? order by comments_date desc ');
  $req->execute(array($id_article));
  $comments = $req;

  return $comments ;
}

function getOther_page()
{
  $pdo = db_connect();
  $req = $pdo->query('SELECT * from articles order by creation_date desc');

   return $req;
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

function post_comment($id_article, $author, $comment, $email)
{
    $pdo = db_connect();
    $comments = $pdo->prepare('INSERT INTO comments(id_article, author, comments,email,comments_date) VALUES(?, ?, ?, ?, NOW())');
    $result= $comments->execute(array($id_article, $author, $comment, $email));

    return $result;
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