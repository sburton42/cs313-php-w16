<?php
session_start();

$VISIT_KEY = "visitCount";

if (!isset($_SESSION[$VISIT_KEY]))
{
	$_SESSION[$VISIT_KEY] = 1;
}
else
{
	$_SESSION[$VISIT_KEY]++;
}

?>
<!DOCTYPE html>
<html>
<head>
</head>

<body>
	This is a php file.

<?php
	echo "You have visited this page " . $_SESSION[$VISIT_KEY] . " time(s).";
?>


</body>

</html>