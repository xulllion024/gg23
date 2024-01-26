<?php
// Start the sesson
session_start(ss4472);
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "gt";
$_SESSION["favanimal"] = "cawl2";
echo "Session variables are set.";
?>

</body>
</html>
