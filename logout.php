<?php
// session_destroy();
// header("location: index.php");
?>



<?php
session_start();
session_unset();     // Unset $_SESSION variables
session_destroy();   // Destroy the session
header("Location: index.php"); // Redirect to the login page
exit();
?>
