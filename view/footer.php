<?php 
     try
    {$pdo = new PDO('mysql:host=sql304.byethost.com;dbname=b7_24770145_Exodus;charset=utf8','b7_24770145','Agentcodybanks21',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
   if (isset($_POST['email']) and $_POST['email'] != null) 
     {
        $requser=$pdo->prepare('INSERT INTO newsletter(email, date_inscription) VALUES( ?,NOW())');
                     $requser->execute(array($_POST['email']));
                    $message = "Vous êtes inscrit à la newletter ! ";
      }
      else { $message = 'Vous n\'êtes pas encore inscrit ! allez y'; }
    } catch(Exception $e)
        {
            die("une erreur " .$e->getMessage());
         }
?>

<footer>
            <div class="container" >
                <div class="row" >
                   <div class="more-information">
                        <h4>exodus</h4>
                     <div class="footer-nav-list" >
                        <ul class="footer-nav" >
                            <li><a href="/join_us">Integrer l'equipe</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/about">A Propos</a></li>
                            <li><a href="/about">Mentions légales</a></li>
                        </ul>
                     </div>
                   </div>
                </div>
            </div>    
            <div class="item-newletter" >
                <form action="" method="post">
                   <div class="newletter" >
                        <p>Restez au courant de l'actu à travers notre Newletter </p> <?php echo '<font color ="red">' . $message .'</font>' ; ?>
                    <label for="email"> <input type="email" name="email" placeholder="email" > </label>
                    <input type="submit" value="Envoyer"><br>
                   </div>
                </form>
            </div>
            <p class="copyright"> Exodus &copy; 2019 - Exodus, Tous Droits Réservés. </p>
</footer>
