<?php

$paragrafo = $_GET["parag"];
$badWord = $_GET["word"];
$lenghtParagGenerate= strlen(str_replace($badWord, "***", $paragrafo));

//echo $paragrafo;
//echo $badWord;
//strlen($paragrafo)

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CheckBox</title>
</head>
<body>

	<h1>Paragrafo Originale</h1>
	<div>
		<textarea name="" id="" cols="30" rows="10"><?= $paragrafo ?></textarea>
		<h3>La lunghezza del paragrafo è di: <?= strlen($paragrafo) ?> caratteri</h3>
	</div>
	<h2>Paragrafo Oscurato</h2>
	<div>
		<textarea name="" id="" cols="30" rows="10"><?= str_replace($badWord, "***", $paragrafo) ?></textarea>
		<h3>La lunghezza del paragrafo è di: <?= $lenghtParagGenerate ?> caratteri</h3>
	</div>
			

	
</body>
</html>