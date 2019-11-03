<html>
<head>
    <meta charset="utf-8">
    <title> Login </title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" href="../img/LogoMoac.png">
    <link rel="stylesheet" href="../bootstrap-grid.css">
    <link rel="stylesheet" href="../bootstrap.css">
    <link rel="stylesheet" href="public/fontawesome.min.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="hightech, android, smartphone">
    
    <style>
        
        h1,h2,label{
            color: #2ecc71;
        }
        
        form{
            margin-bottom: 100px;
            margin-top: 20px;
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
            footer {
                height: 500;
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
            
            .newletter{
                margin-top: 17px;
            }
        }
        
        @media screen and (min-width : 374px) and (max-width : 398px)
        {
            footer {
                height: 490;
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
                height: 490;
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
            
            .input-field label[for=login_name], .input-field label[for=login_pseudo],.input-field label[for=login_email]{
               margin-left: 47px;
            }
        }
        
        @media screen and (min-width : 318px) and (max-width : 322px)
        {
             footer {
                height: 520;
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
            
            .input-field label[for=login_name]{
                margin-left: 47px;
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
         <h1>Connectez vous !</h1>
        
        <div id="contact-form">
    <form action="login_post.php" method="post">
         <div class="input-field">
            <input name="login_name" type="text" required>
            <label for="login_name">Votre pseudo*</label>
        </div>  
        <div class="input-field">
            <input name="login_pwd" type="password" required>
            <label for="login_pwd">Votre Mot de passe *</label>
           </div>
            
            <input type="submit" value="Se connecter" >
            
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
                    <p class="upp" >Restez au courant de l'actu à travers notre Newletter </p>
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