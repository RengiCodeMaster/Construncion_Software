<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "las variables ya ahn sido almacenadas";
?>
</body>
</html>