<?php
// Start the sesson
session_start(ss);
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "g77";
$_SESSION["favanimal"] = "cooawol2";
echo "Session variables are set.";
?>

</body>
</html>
