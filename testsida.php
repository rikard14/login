<?php
	//för att ha tillgång till den globala variabeln $_SESSION['isLoggedIn']
	session_start();
?>
<!DOCTYPE html><!-- HTML5 --> 
 <html lang='sv'><!-- Talsyntes på svenska -->
    <head>
        <meta charset='utf-8' />  <!-- för att få å, ä och ö m.m. --> 
        <title>Demo inloggad</title> <!-- Syns i fliken -->
        <link rel='stylesheet' href='style.css'/> <!-- Länk till stildokument -->
    </head> 
    <body><!--sidans innehåll--> 
    	<p>
    		Utskrift av den globala variabeln $_SESSION följer.
    	</p>
      	<?php var_dump($_SESSION) ?>
        <a href="login.php">gå till login.php</a>
    </body> 
</html>