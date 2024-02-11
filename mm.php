<?php
// Start the sesson
session_start(ss);
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "77";
$_SESSION["favanimal"] = "coowol2";
echo "Session variables are set.";
?>

</body>
</html>
