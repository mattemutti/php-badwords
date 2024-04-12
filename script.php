<?php

$paragrafo = $_GET["parag"];
$badWord = $_GET["word"];

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

	<div>
		<p>
			<?= $paragrafo . strlen($paragrafo) ?>
		</p>
		<h3>La lunghezza del paragrafo è di: <?= strlen($paragrafo) ?> caratteri</h3>
	</div>
	<h3>Paragrafo Oscurato</h3>
	<div>
		<p>
			<?= str_replace($badWord, "***", $paragrafo) ?>
		</p>
		<h3>La lunghezza del paragrafo è di: <?= strlen($paragrafo) ?> caratteri</h3>

	</div>
	
</body>
</html>