<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Badwords</title>
</head>
<body>

	<label for="">Inserisci il testo</label>
	<Form action="script.php" method="GET">
		<div>
			<textarea name="parag" id="paragraf" cols="30" rows="10"></textarea>
		</div>

		<!-- <input type="text" name="parag" placeholder="Inserisci paragrafo"> -->
		<label for="">Inserisci la parola da oscurare</label>
		<div>
			<input type="text" name="word" placeholder="Parola da oscurare">
		</div>
		<button type="submit">Check</button>
</Form>
	
</body>
</html>