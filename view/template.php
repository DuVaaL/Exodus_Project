<html>
<head>
    <meta charset="utf-8">
    <title> <?= $title ?>  </title>
    <link rel="stylesheet" href="public/style.css">
    <link rel="icon" href="public/img/logomoac.png">
    <link rel="stylesheet" href="public/bootstrap-grid.css">
    <link rel="stylesheet" href="public/bootstrap.css">
    <link rel="stylesheet" href="public/fontawesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="hightech, android, smartphone">

    <style>
        a img{
            background-position: center;
            background-size: 240px 170px;
        }

   @media screen and (min-width : 358px) and (max-width : 362px)
    {
      footer
      {
        height: 510;
      }
    }
    @media screen and (min-width : 374px) and (max-width : 398px)
    {
      footer
      {
        height: 500;
      }
    }

     @media screen and (min-width : 412px) and (max-width : 415px)
    {
      .text-box .post-title a{
          font-size: 27px;
      }

      footer
      {
        height: 510;
      }
    }

    @media screen and (min-width : 318px) and (max-width : 322px)
    {

      footer{
        height: 530;
      }
    }

    </style>
</head>

<body>
    <div id="main-bloc" class="container-fluid ">
        <div class="row">
            <?php require('header.php'); ?>
        </div>
    </div>

    <div id="main_page">
        <div class="container" >
          <div class="row">
             <div class="head1">
                  <h2 class="title-content" id="Actu" >Tendances</h2>
               </div>
              <ul class="all_items" >
                  <div class="pic_1" >
                      <li >
                     <div class="large-item " >
                            <a href="../exodus/public/trends/les_telephones_pliables.php">
                             <div class="box_img_1" >
                                 
                                  <h3 class="title_item"> L'ére des Smartphones pliables</h3>
                             </div>
                            </a>
                     </div>
                      
                      </li>
                      <li >
                     <div class="large-item " >
                            <a href="../exodus/public/trends/l_intelligence_artificielle.php">
                             <div class="box_img_2" >
                                 
                                  <h3 class="title_item"> L'intelligence artificielle ? </h3>
                             </div>
                            </a>
                     </div>
                      
                      </li>
                  </div>
                  <div class="pic_2" >
                      <li >
                     <div class="large-item " >
                            <a href="../exodus/public/trends/guide_comment_choisir_son_smartphone.php">
                             <div class="box_img_3" >
                                 
                                  <h3 class="title_item">Guide Smartphone Comment choisir ?</h3>
                             </div>
                            </a>
                     </div>
                      
                      </li>
                      <li >
                     <div class="large-item " >
                            <a href="../exodus/public/trends/la_5g.php">
                             <div class="box_img_4" >
                                 
                                  <h3 class="title_item"> Les réseaux de données 5G</h3>
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
                    </section>
                </div>
            </div>
        </div> 
        
    </div>
    
        <?php require('footer.php'   ); ?>
        
    <script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="public/js/main.js"></script>
</body>

</html>
