
<!DOCTYPE HTML>
<html>
<body>
<?php
	$beschrijfErr = $datumErr = $uiterlijkErr = $telnumErr = $woonplaatsErr = $addressErr = $voertuigErr = $ovragenErr = "";
	$beschrijf = $datum = $uiterlijk = $telnum = $comment = $woonplaats = $address = $voertuig = $ovragen =	"";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["beschrijf"])) {
	} else {
		$beschrijf = test_input($_POST["beschrijf"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$beschrijf)) {
			$beschrijfErr = "Only letters and white space allowed";
	 	}
	}

	if (empty($_POST["datum"])) {
			$datumErr = "datum is required";
		} else {
			$datum = test_input($_POST["datum"]);
		if (!filter_var($datum, FILTER_VALIDATE_datum)) {
		$datumErr = "Invalid datum format";
		}
	}

	if (empty($_POST["uiterlijk"])) {
		$uiterlijkErr = "uiterlijk is required";
		} else {
		$uiterlijk = test_input($_POST["uiterlijk"]);
		}
	}

	if (empty($_POST["telnum"])) {
	} else {
		$telnum = test_input($_POST["telnum"]);
	}



	if (empty($_POST["woonplaats"])) {
	} else {
		$woonplaats = test_input($_POST["woonplaats"]);
	}

	if (empty($_POST["address"])) {
		$addressErr = "address is required";
	} else {
		$address = test_input($_POST["address"]);
	}

	if (empty($_POST["voertuig"])) {
		} else {
			$voertuig = test_input($_POST["voertuig"]);
	}


	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>

<h1>Politie-anoniem</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	Beschrijf zo uitgebreid mogelijk de situatie waarover u wilt melden.<br>
	<textarea beschrijf="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
	<span class="error"> <?php echo $beschrijfErr;?></span><br><br>

	Op welke datum heeft dit woonplaatsgevonden of gaat dit gebeuren?<br>
	<textarea beschrijf="comment" rows="1" cols="40"><?php echo $comment;?></textarea><br><br>

	<h2>Weet u wie de dader is?</h2><br>

	Kunt u meer vertellen over deze persoon of personen ?<br>
	<input type="radio" beschrijf="uiterlijk" <?php if (isset($uiterlijk) && $uiterlijk=="ja") echo "checked";?> value="ja">ja<br>
	<input type="radio" beschrijf="uiterlijk" <?php if (isset($uiterlijk) && $uiterlijk=="nee") echo "checked";?> value="nee">nee<br><br>

	Weet u het telefoonnummer van de dader(s) ?<br>
	<input type="radio" beschrijf="telnum" <?php if (isset($telnum) && $telnum=="ja") echo "checked";?> value="ja">ja<br>
	<input type="radio" beschrijf="telnum" <?php if (isset($telnum) && $telnum=="nee") echo "checked";?> value="nee">nee<br><br>

	<h2>Weet u waar dit speelt?</h2><br>

	Woonplaats:<br> <textarea beschrijf="woonplaats" rows="1" cols="40"><?php echo $woonplaats;?></textarea><br><br>

	Weet u het adres ?<br>
	<input type="radio" beschrijf="address" <?php if (isset($address) && $address=="ja") echo "checked";?> value="ja">ja<br>
	<input type="radio" beschrijf="address" <?php if (isset($address) && $address=="nee") echo "checked";?> value="nee">nee<br>
	<input type="radio" beschrijf="address" <?php if (isset($address) && $address=="weet ik niet") echo "checked";?> value="weet ik niet">weet ik niet<br><br>

	<h2>Voertuigen</h2>

	Gebruikt de dader een voertuig ?<br>
	<input type="radio" beschrijf="voertuig" <?php if (isset($voertuig) && $voertuig=="ja") echo "checked";?> value="ja">ja<br>
	<input type="radio" beschrijf="voertuig" <?php if (isset($voertuig) && $voertuig=="nee") echo "checked";?> value="nee">nee<br><br>

	Heeft u nog overige vragen?<br>
	<textarea beschrijf="ovragen" rows="5" cols="40"><?php echo $ovragen;?></textarea><br><br>

	<input  action="index.php" type="submit" name="Verstuur" value="Verstuur">
</body>
</html>
