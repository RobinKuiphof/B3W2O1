<?php 

function test_input($data) {
	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
}


if(isset($_POST['submit'])){
	$test = 0;
	for ($i=11; $i<19; $i++) { 
		$vraag[$i] = test_input($_POST['vraag'.$i]);

		if(empty($vraag[$i])){
			$err[$i] = "Please answer the question";
		}	
		elseif(!preg_match('/^[a-zA-Z0-9\s]+$/', $vraag[$i])){
			$err[$i] = "Can only contain letters, numbers and white spaces";
		}
		else{
			$test = ($test+1);
		}
	}
	if($test == 8){
		echo '<style>form{display:none;}</style>';
		echo '<style> div.result{display:inline-block;}</style>';
		echo '<style> div.page{	height:300px;}</style>';
	}
}


?>



 
<!DOCTYPE html>
<html>
<head>
	<title>Mad Libs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="page">

		<nav>
			<a href="paniek.php"><h1>Er heerst paniek...</h1></a>
			<a href="madlibs.php"><h1>Ontkunde</h1></a>
		</nav>

		<div class="form">
			<h1>Paniek</h1>
			<form method="post">
				<p>Welk dier zou je nooit als huisdier willen hebben?</p>
				<input type="text" name="vraag11">
				<p class="error"><?php echo $err[11] ?></p>
				<p>Wie is de belangerijkste persoon in je leven?</p>
				<input type="text" name="vraag12">
				<p class="error"><?php echo $err[12] ?></p>
				<p>In welk land zou je graag willen wonen?</p>
				<input type="text" name="vraag13">
				<p class="error"><?php echo $err[13] ?></p>
				<p>Wat doe je als je je verveelt</p>
				<input type="text" name="vraag14">
				<p class="error"><?php echo $err[14] ?></p>
				<p>Met welk speelgoed speelde je als kind het meest?</p>
				<input type="text" name="vraag15">
				<p class="error"><?php echo $err[15] ?></p>
				<p>Bij welke docent spijbelde je het liefst?</p>
				<input type="text" name="vraag16">
				<p class="error"><?php echo $err[16] ?></p>
				<p>Als je € 100.000,- had, wat zou je dan kopen?</p>
				<input type="text" name="vraag17">
				<p class="error"><?php echo $err[17] ?></p>
				<p>Wat is je favoriete bezigheid?</p>
				<input type="text" name="vraag18">
				<p class="error"><?php echo $err[18] ?></p>
				<input id="button" type="submit" name="submit">
			</form>	


			<div class="result">
				<p class="presult">Er heerst paniek in het het koninkrijk <?php echo $vraag[13] ?>. Koning <?php echo $vraag[16] ?> is ten einde raad en als je koning <?php echo $vraag[16] ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $vraag[12] ?> <br> "<?php echo $vraag[12] ?> Het is een ramp! Het is een schande!" <br> "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?" <br> "Mijn <?php echo $vraag[11]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $vraag[15] ?> voor hem gekocht!" <br> "Ja, da's leuk en aardig, maar hoe moet ik in tussentijd <?php echo $vraag[18] ?> leren?" "Maar Sire, daar kunt u toch uw <?php echo $vraag[17] ?> voor gebruiken" <br> "<?php echo $vraag[12]; ?>, Je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had" <br> "<?php echo $vraag[14]; ?>, Sire"</p>

		</div>
		<footer>
			<p>Deze website is gemaakt door Robin Kuiphof 03/03/2021</p>
		</footer>
	</div>
</body>
</html>


