<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolorq"] = "green";
$_SESSION["favanimal"] = "cawwt";
echo "Session variables are set.";
?>

</body>
</html>
