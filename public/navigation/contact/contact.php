<html>
<head>
    <meta charset="utf-8">
    <title> Contact </title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="LogoMoac.png"    >
    <link rel="stylesheet" href="bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="public/fontawesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="hightech, android, smartphone">
    
    <style>
             p.upp {
            font-family: "Product";
            font-size: 20px;
            line-height: normal; 
            margin-bottom: 37px;
            margin-left: 5px;
        }
        
        h1,h2,label{
            color: #2ecc71;
        }
        
        input,textarea,select{
            margin: 5px;
            border-right: none;
            border-top: none;
            border-bottom: 0.5px solid #2ecc71; 
            border-left:  0.5px solid #2ecc71;
        }
        .input-field{
            margin: 5px;
        }
        
        input[type=submit]{
            color: white;
            background-color: #2ecc71;
            border: none;
            margin-top: 21px;
            
        }
        footer{
            height: 240;
        }
        
        @media screen and (min-width : 412px) and (max-width : 415px)
        {
            h1{
                font-size: 30px;
            }
             p.upp{
                font-size: 17px;
             }

            h2.title-contact{
                font-size: 20px;
            }
            footer {
                height: 485;
            }

            footer .footer-nav li{
                margin: 0;
                padding: 0;
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
            h1{
                font-size: 30px;
            }
             p.upp{
                font-size: 17px;
             }

            h2.title-contact{
                font-size: 20px;
            }

            footer {
                height: 485;
            }

            footer .footer-nav li{
                margin: 0;
                padding: 0;
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
            h1{
                font-size: 30px;
            }
             p.upp{
                font-size: 17px;
             }

            h2.title-contact{
                font-size: 20px;
            }
            footer {
                height: 485;
            }
            
            footer .footer-nav li{
                margin: 0;
                padding: 0;
            }
    
            footer input[type=email]{
            text-align: center;
            background-color: rgb(248,248,248);
            margin: 0 3%;
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
            h1{
                font-size: 30px;
            }
             p.upp{
                font-size: 17px;
             }

            h2.title-contact{
                font-size: 20px;
            }
             footer {
                height: 515;
            }

            footer .footer-nav li{
                    margin: 0;
                    padding: 0;
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
                <div class="logo"><a href="/projets/exodus/index.php">Exodus</a></div>
                <ul>
                    <li class="button  show_menu "> + </li>
                </ul>
                <div class="nav-menu">
                    <ul>
                        <li><a href="http://localhost/projets/exodus">Accueil</a></li>
                        <li><a href="http://localhost/projets/exodus/index.php#Actu">Actu</a></li>
                        <li><a href="http://localhost/projets/exodus/public/navigation/apropos/about.php">A Propos</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>

                </div>

            </header>
        </div>
    </div>
         <h1>Contactez Nous</h1>
    
        <h2 class="title-contact">Une info à nous partager ?</h2>
        <p class="upp" >Si vous avez une information à nous partager, un témoignage à nous transmettre ou simplement repéré dans l'actualité quelque chose que nous avons manqué, n'hésitez pas à nous contacter. Si vous souhaitez joindre une personne de l'équipe en particulier.</p>
        
        <h2>Formulaire</h2>
        
        <div id="contact-form">
    <form action="contact_post.php" method="post">
        <div class="input-field">
            <input name="name" type="text" required>
            <label for="contact_name">Votre nom *</label>
        </div>
        <div class="input-field">
            <input name="email" type="email" required>
            <label for="contact_email">Votre adresse mail *</label>
           </div>
        <div class="input-field">
            <select class="browser-default" name="object" >
                <option value="" selected disabled>Objet du message *</option>
                <option value="Question">Question</option>
                <option value="Suggestion d’article">Suggestion d’article, de sujet</option>
                <option value="Presentation de projet">Présentation de projet</option>
                <option value="Relations presse">Relations presse</option>
                <option value="Publicité">Publicité/partenariats</option>
                <option value="Bug">Bug !</option>
                <option value="Orthographe et grammaire">Orthographe et grammaire</option>
            </select>

        </div>

        <div class="input-field">
            <textarea name="message" rows="5" cols="40" ></textarea>
            <label for="contact_message">Votre message *</label>
        </div>
            
            <input type="submit" value="Envoyer Mon message" >
            
    </form>
</div>       
            
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