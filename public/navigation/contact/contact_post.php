<?php
try
    {
     $pdo = new PDO('mysql:host=localhost;dbname=exodus;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		 $insert = $pdo->prepare('INSERT INTO contact_form(name,email,object,message) values(?,?,?,?)');
		  $suggest = $insert->execute(array($_POST['name'],$_POST['email'],$_POST['object'],$_POST['message']));

		  header("location: contact.php");
    }
    catch(Exception $e)
    {
        die("une erreur " .$e->getMessage());
     }
 
