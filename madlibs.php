<?php 

function test_input($data) {
	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
}


if(isset($_POST['submit'])){
	$test = 0;
	for ($i=1; $i<8; $i++) { 
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
	if($test == 7){
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
			<a href="madlibs.php"><h1>Onkunde</h1></a>
		</nav>
		<div class="form">
			<h1>Onkunde</h1>
			<form method="post">
				<p>Wat zou je graag kunnen?</p>
				<input type="text" name="vraag1" value="<?php  echo $vraag[1]?>">
				<p class="error"><?php echo $err[1] ?></p>
				<p>Met welke persoon kun je goed opschieten?</p>
				<input type="text" name="vraag2" value="<?php  echo $vraag[2]?>">
				<p class="error"><?php echo $err[2] ?></p>
				<p>Wat is je favoriete getal?</p>
				<input type="text" name="vraag3" value="<?php  echo $vraag[3]?>">
				<p class="error"><?php echo $err[3] ?></p>
				<p>Wat heb je altijd bij als je op vakantie gaat?</p>
				<input type="text" name="vraag4" value="<?php  echo $vraag[4]?>">
				<p class="error"><?php echo $err[4] ?></p>
				<p>Wat is je beste persoonlijke eigenschap?</p>
				<input type="text" name="vraag5" value="<?php  echo $vraag[5]?>">
				<p class="error"><?php echo $err[5] ?></p>
				<p>Wat is je slechtste persoonlijke eigenschap</p>
				<input type="text" name="vraag6" value="<?php  echo $vraag[6]?>">
				<p class="error"><?php echo $err[6] ?></p>
				<p>Wat is het ergste dat je kan overkomen?</p>
				<input type="text" name="vraag7" value="<?php  echo $vraag[7]?>">
				<p class="error"><?php echo $err[7] ?></p>
				<input id="button" type="submit" name="submit">
			</form>
		</div>
		<div class="result">
			<p class="presult">Er zijn veel mensen die niet kunnen <?php echo $vraag[1]?>. Neem nou <?php echo $vraag[2] ?>. Zelfs met de hulp van een <?php echo $vraag[4] ?> of zelfs <?php echo $vraag[3]; ?> kan 
		<?php echo $vraag[2]  ?> niet <?php echo $vraag[1] ?> Dat heeft niet te maken met een gebrek aan <?php echo $vraag[5] ?>, maar met een te veel aan <?php echo $vraag[6] ?>. Te veel <?php echo $vraag[6] ?> leidt tot <?php echo $vraag[7] ?> en dat is niet goed als je wilt <?php echo $vraag[1] ?>. Helaas voor <?php echo $vraag[2] ?>.</p>

		</div>
		<footer>
			<p>Deze website is gemaakt door Robin Kuiphof 03/03/2021</p>
		</footer>
	</div>
</body>
</html>

