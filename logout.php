<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
session_unset();

session_destroy();

header("Location: http://127.0.0.1/Construncion_Software/index.php");
?>

</body>
</html>     