<html>
<head>
    <meta charset="utf-8">
    <title> <?= $title ?>  </title>
    <link rel="stylesheet" href="../public/style.css">
    <link rel="icon" href="../public/img/logomoac.png">
    <link rel="stylesheet" href="../public/bootstrap-grid.css">
    <link rel="stylesheet" href="../public/bootstrap.css">
    <link rel="stylesheet" href="../public/fontawesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="hightech, android, smartphone">
</head>

<body>
    <div id="main-bloc" class="container-fluid ">
        <div class="row">
            <?php require('../header.php'); ?>
        </div>
    </div>

    <div id="main_page">
        <div class="container" >
          <div class="row">
              <ul class="all_items" >
                  <div class="pic_1" >
                      <li >
                     <div class="large-item " >
                            <a href="#">
                             <div class="box_img_1" >
                                 
                                  <h3 class="title_item"> Migrer chez Apple ? </h3>
                             </div>
                            </a>
                     </div>
                      
                      </li>
                      <li >
                     <div class="large-item " >
                            <a href="#">
                             <div class="box_img_2" >
                                 
                                  <h3 class="title_item"> Les Airpods valent'ils vraiment la peine ? </h3>
                             </div>
                            </a>
                     </div>
                      
                      </li>
                  </div>
                  <div class="pic_2" >
                      <li >
                     <div class="large-item " >
                            <a href="#">
                             <div class="box_img_3" >
                                 
                                  <h3 class="title_item"> setups : Mes coups de coeur de la semaine </h3>
                             </div>
                            </a>
                     </div>
                      
                      </li>
                      <li >
                     <div class="large-item " >
                            <a href="#">
                             <div class="box_img_4" >
                                 
                                  <h3 class="title_item"> Gadgets Hightech </h3>
                             </div>
                            </a>
                     </div>
                      
                      </li>
                  </div>
                  
              </ul>
          </div>
      </div>
       
        <div class="container" style="margin-top : 20px;">
            <div class="row">
                <div class="sections" >
                    <section id="contents"> 
                         <div class="head">
                            <h2 class="title-content" id="Actu" >Dernières Actus</h2>
                        </div>
                            <div class="line-up"></div>
                                <?= $content; ?>
                         <div class="more-article" >
                            <a href=""><h4>Plus d'articles</h4></a>
                        </div>
                    </section>
                </div>
            </div>
        </div> 
        
    </div>
    
        <?php require('../footer.php'   ); ?>
        
    <script type="text/javascript" src="../public/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../public/js/main.js"></script>
</body>

</html>
