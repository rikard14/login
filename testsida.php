<?php
	session_start();
?>
<!DOCTYPE html><!-- HTML5 --> 
  <html lang='sv'><!-- Talsyntes på svenska -->
      <head> 
      
          <meta charset='utf-8' />  <!-- för att få å, ä och ö m.m. --> 
          <title>Webbutveckling</title> <!-- Syns i fliken -->
          <link rel='stylesheet' href='style.css'/> <!-- Länk till stildokument -->
      </head> 
      <body><!--sidans innehåll--> 
      <?php var_dump($_SESSION) ?>
          <a href="login.php">gå till login.php</a>
      </body> 
  </html>