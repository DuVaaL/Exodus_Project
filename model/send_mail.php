<?php
try {
	$pdo = new PDO('mysql:host=sql304.byethost.com;dbname=b7_24770145_Exodus;charset=utf8','b7_24770145','Agentcodybanks21',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$header = "MIME Version 1.0\r\n";
	$header.='From:"Exodus"<exodus@proton.com>'."\n";
	$header.='Content-Type:text/html; charset="uft-8"'."\n";
	$header.='Content-Transfer-Encoding: 8bit';

	$subject = "News de la journée !";

	$message = '<html>
				<body>
					<div align="center"><br>
						<p>
							Apple licencie du personnel dans son département publicitaire plus d\'info <a href ="https://www.macg.co/aapl/2019/11/lagence-de-pub-dapple-licencie-50-personnes-109635"> Cliquer ici </a>  
						</p>	
					</div>
				</body>
			</html>';
	$req = $pdo->query('SELECT email from newsletter ');
	while ($mail = $req->fetch()) {
		// Please specify your Mail Server - Example: mail.example.com.
ini_set("SMTP", "momoabir25@yahoo.fr");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

// Please specify the return address to use
ini_set('Ngounou', 'ngounoukenhem@gmail.com');
	}

} catch (Exception $e) {
	die('Une Erreur ' .$e->getMessage());
}