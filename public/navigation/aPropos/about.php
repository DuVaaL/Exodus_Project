<html>
<head>
    <meta charset="utf-8">
    <title> A Propos </title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="LogoMoac.png">
    <link rel="stylesheet" href="bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="hightech, android, smartphone">
    
    <style>
        p.upp,li {
            font-family: "Kano";
            font-size: 20px;
            line-height: normal; 
            margin-bottom: 37px;
        }
        body{
            height: 400px;
        }
        
        span{
            color: #2ecc71;
        }
        p,ul{
            margin-left: 5px;
        }
        
        footer{
            height: 220;
        }
        
        
        
         
        @media screen and (min-width : 412px) and (max-width : 415px)
        {
            footer {
                height: 360;
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
                height: 370;
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
                height: 370;
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
                margin-left: 30%;
            }
            
            .newletter p{
                text-align :  center;
            }
        }
        
        @media screen and (min-width : 318px) and (max-width : 322px)
        {
             footer {
                height: 350;
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
                 margin-left: 30%;

            }
            
            .newletter p{
                text-align :  center;
            }
            
           h2.title-contact{
                font-size: 25px;
            }
        }
    </style>
    
</head>

<body>
    <div id="main-bloc" class="container-fluid ">
        <div class="row">
            <header class=" col-12  ">
                <div class="logo"><a href="index.php">Exodus</a></div>
                <ul>
                    <li class="button  show_menu "> + </li>
                </ul>
                <div class="nav-menu">
                    <ul>
                        <li><a href="/projets/exodus/index.php">Accueil</a></li>
                        <li><a href="/projets/exodus/index.php#Actu">Actu</a></li>
                        <li><a href="#">A Propos</a></li>
                        <li><a href="/projets/exodus/public/navigation/contact/contact.php">Contact</a></li>
                    </ul>

                </div>

            </header>
        </div>
    </div>
            <p class="upp"> <span>Exodus</span> accompagne le présent vers l’avenir en proposant chaque jour des articles centrés sur les technologies nouvelles. Parce que la société, l’économie, l’innovation, la science et la politique ont été révolutionnées par le numérique, Le monde a besoin d’un média de référence, jeune, connecté et ambitieux, pour comprendre ces questions.</p>   
            <p class="upp"><span>Exodus</span> 
            Lancé en 2019, veut rapidement imposer comme un site de référence sur l’actualité High Tech, d’Android et d'Apple.</p> 
            
            <p class="upp"><span>Exodus</span> est un groupe média indépendant edité par <span>Dark Code</span>. Nous sommes situés A Douala, Cameroun.</p>
            <p class="upp">Nos projets et notre volonté d’innover sont autant d’occasions pour notre équipe de se confronter à des challenges (fortes audiences, SEO, e-commerce, premium), de progresser et de développer une réelle expertise web, dans une ambiance détendue.</p>
            <p class="upp"><strong>Nous avons UN objectif :</strong></p>
            
                <ul>
                    <li>Fournir le meilleur service possible à nos lecteurs.</li>
                </ul>
    
        <footer>
            <div class="container" >
                <div class="row" >
                   <div class="more-information">
                        <h4>exodus</h4>
                     <div class="footer-nav-list" >
                        <ul class="footer-nav" >
                            <li><a href="/projets/exodus/public/navigation/auteurs/author.php">Integrer l'équipe</a></li>
                            <li><a href="/projets/exodus/public/navigation/contact/contact.php">Contact</a></li>
                            <li><a href="#">A Propos</a></li>
                            <li><a href="/projets/exodus/public/navigation/aPropos/about.php">Mentions légales</a></li>
                        </ul>
                     </div>
                   </div>
                </div>
            </div>    
            <div class="item-newletter" >
               <div class="newletter" >
                    <p>Restez au courant de l'actu à travers notre Newletter </p>
                <label for="email"> <input type="email" name="email" placeholder="email" > </label>
                <input type="submit" value="Envoyer">
               </div>
            </div>
            <p class="copyright"> Exodus &copy; 2019 - Exodus, Tous Droits Réservés. </p>
        </footer>
        
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>