<?php
	//variabler
    $validUsername = "Ada";
    $validPassword = "Lovelace";
    //svar för att visa om inloggningen lyckats eller ej
    $answer = "error";
    $loginInfo = "not logged in ...";

    //starta sessionen för att senare kunna minnas att användaren är inloggad
    session_start();

    //hantera inloggning
	if (isset($_POST['element-username']) && $_POST['element-username'] == $validUsername)
	{
		//usernamne ok
		if (isset($_POST['element-password']) && $_POST['element-password'] == $validPassword)
		{
			//usernamne and password ok
			$answer = "inloggningen lyckades";
			//kom ihåg att användaren är inloggad
			$_SESSION['isLoggedIn'] = "Yes";
		}
		else
		{
			//the password is wrong, but the usernamne is valid
			$answer = "felaktigt lösenord";
		}
	}
	else
	{
		//username not valid
		$answer = "felaktigt användarnamn";
	}
	//is logged in?
	if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == "Yes")
	{
		$loginInfo = "logged in as " . $validUsername;
	}
	else
	{
		$loginInfo = "not logged in";
	}

?>

<!DOCTYPE html><!-- HTML5 --> 
<html lang='sv'><!-- Talsyntes på svenska -->
  	<head> 
  
      	<meta charset='utf-8' />  <!-- för att få å, ä och ö m.m. --> 
      	<title>Webbutveckling</title> <!-- Syns i fliken -->
      	<link rel='stylesheet' href='style.css'/> <!-- Länk till stildokument -->
  	</head> 
  	<body><!--sidans innehåll--> 
  		<p>
  		    <!-- infoga texten som finns i variabeln $answer här -->
			<?php echo($answer); ?> 
		</p> 
		<p>
		    <!-- infoga texten som finns i variabeln $loginInfo här -->
			<?= $loginInfo ?>
		</p> 
		<p>
			Innehållet i vektorn $_POST visas nedan, 
			men det är bara för felsökning och i undervisningssyfte.
		</p>
		<p>
			<?= var_dump($_POST); ?>
		</p>     
		<p>
			<a href="testsida.php">Testsida</a>
		</p> 
  	</body> 
</html>