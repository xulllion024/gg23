<?php
// Start the sesson
session_start(ss2);
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "go77";
$_SESSION["favanimal"] = "cawol2";
echo "Session variables are set.";
?>

</body>
</html>
