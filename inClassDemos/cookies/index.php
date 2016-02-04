<?php
$VISIT_KEY = "visitCount";

$visitCount = 0;

if (isset($_COOKIE[$VISIT_KEY]))
{
	$visitCount = $_COOKIE[$VISIT_KEY] + 1;
}

setcookie($VISIT_KEY, $visitCount, time() + 86400 * 30);
setcookie("username", "sburton");


?>
<!DOCTYPE html>
<html>
<head>
</head>

<body>
	This is a php file.

<?php
	echo "You have visited this page $visitCount times<br />";
	echo "That was: " . $_COOKIE[$VISIT_KEY];
?>


</body>

</html>