<!DOCTYPE html>
<html>
<head>
</head>

<body>
<?php

$name = $_POST["name"];
$name = htmlspecialchars($name);

echo "Welcome: $name";

?>

</body>
</html>