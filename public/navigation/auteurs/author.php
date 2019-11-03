<html>

<head>
    <meta charset="utf-8">
    <title> Integrer l'équipe </title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="LogoMoac.png">
    <link rel="stylesheet" href="bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="public/fontawesome.min.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="hightech, android, smartphone">

    <style>
        p.upp {
            font-family: "Product";
            font-size: 25px;
            line-height: normal;
            margin-bottom: 37px;
            margin-left: 20px;
            position: absolute;
            top: 30%;
            left: 40%;
            right: 50%;
        }

        h1 {
            color: #2ecc71;
            margin: 15px 5px;
        }

        footer {
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
        }
        
            
        @media screen and (min-width : 412px) and (max-width : 415px)
        {
            footer {
                height: 350;
            }
            
            footer a, .newletter p{
                font-family: "Product";
            }
            
            
            footer input[type=email]{
            text-align: center;
            background-color: rgb(248,248,248);
            margin: 0 5%;
            height: 25px;
            width: 350px;
              }
    
            footer input[type=submit]{
                width: 150px;
                margin-left: 30%;
            }
            
            .newletter p{
                text-align :  center;
            }
        }
        
        @media screen and (min-width : 374px) and (max-width : 398px)
        {
            footer {
                height: 320;
                text-align: center;
            }
            
            footer input[type=email]{
            text-align: center;
            background-color: rgb(248,248,248);
            margin: 0 5%;
            height: 25px;
            width: 340px;
              }
    
            footer input[type=submit]{
                width: 150px;
                margin-left: 30%;
            }
            
            .newletter p{
                text-align :  center;
            }
        }
        
        @media screen and (min-width : 358px) and (max-width : 362px)
        {
            footer {
                height: 320;
                text-align: center;
            }
            
            footer input[type=email]{
            text-align: center;
            background-color: rgb(248,248,248);
            margin: 0 5%;
            height: 25px;
            width: 320px;
              }
    
            footer input[type=submit]{
                width: 150px;
                margin-left: 20%;
            }
            
            .newletter p{
                text-align :  center;
            }
        }
        
        @media screen and (min-width : 318px) and (max-width : 322px)
        {
             footer {
                height: 310;
                  text-align: center;
            }
            
            footer input[type=email]{
            text-align: center;
            background-color: rgb(248,248,248);
            margin: 0 5%;
            height: 25px;
            width: 300px;
              }
    
            footer input[type=submit]{
                width: 140px;
                 margin-left: 20%;

            }
            
            .newletter p{
                text-align :  center;
            }
        }

    </style>

</head>

<body>
    <div id="main-bloc" class="container-fluid ">
        <div class="row">
            <header class=" col-12  ">
                <div class="logo"><a href="/projets/exodus/">Exodus</a></div>
                <ul>
                    <li class="button  show_menu "> + </li>
                </ul>
                <div class="nav-menu">
                    <ul>
                        <li><a href="/projets/exodus/index.php">Accueil</a></li>
                        <li><a href="/projets/exodus/index.php#Actu">Actu</a></li>
                        <li><a href="/projets/exodus/public/navigation/aPropos/about.php">A Propos</a></li>
                        <li><a href="/projets/exodus/public/navigation/contact/contact.php">Contact</a></li>
                    </ul>

                </div>

            </header>
        </div>
    </div>


    <h1>Intégrer l'équipe</h1>
    <p class="upp">A vénir...</p>

    <footer>
        <div class="container">
            <div class="row">
                <div class="more-information">
                    <h4>exodus</h4>
                    <div class="footer-nav-list">
                        <ul class="footer-nav">
                            <li><a href="/projets/exodus/public/navigation/auteurs/author.php">Integrer l'équipe</a></li>
                            <li><a href="/projets/exodus/public/navigation/contact/contact.php">Contact</a></li>
                            <li><a href="/projets/exodus/public/navigation/aPropos/about.php">A Propos</a></li>
                            <li><a href="/projets/exodus/public/navigation/aPropos/about.php">Mentions légales</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-newletter">
            <div class="newletter">
                <p>Restez au courant de l'actu à travers notre Newletter </p>
                <label for="email"> <input type="email" name="email" placeholder="email"> </label>
                <input type="submit" value="Envoyer">
            </div>
        </div>
        <p class="copyright"> Exodus &copy; 2019 - Exodus, Tous Droits Réservés. </p>
    </footer>

    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
</body>

</html>
