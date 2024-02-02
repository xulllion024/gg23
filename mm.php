<?php
// Start the sesson
session_start(ss472);
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "go";
$_SESSION["favanimal"] = "cawool2";
echo "Session variables are set.";
?>

</body>
</html>
