<?php
session_start();
include("index.html");


// Set session timeout duration (in seconds)
$timeout_duration = 120;
// 1500 second time means 15 lakh millisecond or 25 minute timeout = (1 second = 1000 millisecond)

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

// Check if the session has timed out
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
    session_unset();     // Unset $_SESSION variables
    session_destroy();   // Destroy the session
    echo "<script>alert('Session timed out due to inactivity.'); window.location.href='index.php';</script>";
    exit();
}

// Update last activity time
$_SESSION['last_activity'] = time();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="htmlfile.css">
    <script>
        // JavaScript to handle automatic logout after 1 minute of inactivity
        let timeout;

        function startTimer() {
            // Set timeout for 1 minute (60000 milliseconds)
            timeout = setTimeout(function() {
                alert('Session timed out due to inactivity.');
                window.location.href = 'logout.php';
            }, 120000);
        }

        function resetTimer() {
            clearTimeout(timeout);
            startTimer();
        }

        // Start the timer when the page loads
        window.onload = startTimer;

        // Reset the timer on any user activity
        // document.onmousemove = resetTimer;
        // document.onkeypress = resetTimer;
    </script>
</head>


<body>
    <!-- <script src="script.js"></script> -->

    <!-- <h1>Welcome to the Homepage</h1> -->
    <p>This is a secure area.</p>
    <a class="logout_botton_code" href="logout.php">Logout</a><br><br>
</body>

<style>
    .logout_botton_code {
    /* padding-left: 50%;
    border : 1px solid black; */
    background-color: #4CAF50;
    border: 2px solid #4CAF50;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    transition: background-color 0.3s, border-color 0.3s;
    }

    .logout_button_code:hover {
    /* background-color: white; */
    color: black;
    border-color: #4CAF50;
    }
</style>


</html>
