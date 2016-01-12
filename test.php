<!DOCTYPE html>
<html>
	<head>
	</head>

	<body>
		<div>
			This is a pretty awesome page.<br />

<?php

	$name = "Br. Burton";

	echo "\nThis is coming from php...<br />\n";
	echo "Hello, $name. Do you like dollar signs (\$)?<br />\n";

	for ($i = 0; $i < 10; $i++)
	{
?>
	<div>This is a div</div>

<?php
	}

?>

		</div>
	</body>
</html>