<?php
// Start the session
session_start(ss2);
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolorq"] = "gotwen";
$_SESSION["favanimal"] = "cawwt2";
echo "Session variables are set.";
?>

</body>
</html>
