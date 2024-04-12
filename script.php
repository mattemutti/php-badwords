<?php

$paragrafo = $_GET["parag"];
$badWord = $_GET["word"];

//echo $paragrafo;
echo $badWord;
strlen($paragrafo)


// str_replace(porzioneDaModificare, conCosa, stringa) - sostituisce una porzione di una stringa con un nuovo valore 


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CheckBox</title>
</head>
<body>

	<p>
		<?= $paragrafo . strlen($paragrafo) ?>
	</p>
		
	<h3>La lunghezza del paragrafo è di: <?= strlen($paragrafo) ?> caratteri</h3>
	
</body>
</html>