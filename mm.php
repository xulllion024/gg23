<?php
// Start the session
session_start(s2);
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolorq"] = "groteen";
$_SESSION["favanimal"] = "cawwt";
echo "Session variables are set.";
?>

</body>
</html>
