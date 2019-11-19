<html>
<head>
    <meta charset="utf-8">
    <title> <?= $title ?>  </title>
    <link rel="stylesheet" href="/public/style.css">
    <link rel="icon" href="/public/img/LogoMoac.png">
    <link rel="stylesheet" href="/public/bootstrap-grid.css">
    <link rel="stylesheet" href="/public/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="hightech, android, iphone, smartphone">
</head>

<body>
    <div id="main-bloc" class="container-fluid ">
        <div class="row">
            <?php require('header.php'); ?>
        </div>
    </div>

    <div id="main_page">
        <div class="container" style="margin-top : 20px;">
            <div class="row">
                <div class="sections" >
                    <section id="contents"> 
                         <div class="head">
                            <h2 class="title-content" id="Actu" > Tous les articles </h2>
                        </div>
                            <div class="line-up"></div>
                                <?= $content; ?>
                    </section>
                </div>
            </div>
        </div> 
        
    </div>
    
        <?php require('footer.php'); ?>
        
    <script type="text/javascript" src="/public/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/public/js/main.js"></script>
</body>

</html>




<?php
//  function afficheImage($id)
//  { 
//   $sql = "SELECT * FROM articles WHERE id=".$id; 
//   $res = mysql_query($sql); 
//   WHILE ($image = mysql_fetch_assoc($res))
//   { 
//     echo "<IMG SRC='".$image['url'].$image['name'].".jpg'>"; 
//   } 
// } 
?>


