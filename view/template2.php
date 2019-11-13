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
      .sections #contents{
        font-family: "Product";
      }

      section{
        width: 95%;
        margin: auto;
        text-align: justify;
        position: relative;
      }

      a, a:hover{
        text-decoration: none;
        color: #2ecc71;
      }

      input,textarea{
            margin: 5px;
            border-right: none;
            border-top: none;
            border-bottom: 0.5px solid #2ecc71; 
            border-left:  0.5px solid #2ecc71;
            outline: none;
        }

        input[type=submit]{
          background-color: #2ecc71 ;
          border: 0.5px solid #2ecc71;
        }


@media screen and (min-width : 358px) and (max-width : 362px)
{
  footer
  {
    height: 510;
  }

  #contents{
    width: 342;
   }

   textarea{
    width: 295;
   }
   #contents img{
    margin: 0%;
    width: 330;
    height: 255;
   }
}


@media screen and (min-width : 374px) and (max-width : 398px)
{

  footer
  {
    height: 510;
  }
  #contents{
    width: 370;
   }

   #contents img{
      width: 340;
      height: 266;
      margin-left: 0;
    }
    #contents h2{
        font-size: 20px;
        text-align: center;
    }

    #contents img{
      width: 340;
      height: 265;
      margin-left: 0;
    }
    
    textarea{
      width: 330;
    }  
}

@media screen and (min-width : 412px) and (max-width : 415px)
{

  footer
  {
    height: 510;
  }

   #contents{
    padding: 0;
    margin: 0;
    width: 408;
   }

    #contents h2{
        font-size: 22px;
        text-align: center;
    }

    #contents img{
      width: 348;
      height: 261;
      margin-left: 5%;
    }
    
    textarea{
      width: 325;
    }      
}

@media screen and (min-width : 318px) and (max-width : 322px)
{

  footer{
    height: 530;
  }
  #contents{
    width: 310;
   }

   #contents img{
      width: 290;
      height: 266;
      margin-left: 0;
    }
    #contents h2{
        font-size: 16px;
        text-align: center;
    }

    #contents img{
      width: 340;
      height: 265;
      margin-left: 0;
    }
    
    textarea{
      width: 330;
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
       
        <div class="container order" style="margin-top : 20px;">
            <div class="row">
                <div class="sections" >
                    <section id="contents"> 
                                <?= $content; ?>
                    </section>
                </div>
            </div>
        </div> 
    
        <?php require('footer.php' ); ?>
        
    <script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="public/js/main.js"></script>
</body>

</html>
