<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $mobile_number = $_POST['mobile_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];
    // $password = md5($password);

    // Check if passwords match
    if ($password !== $repeat_password) {
        echo "<script>alert('Password Not Matched'); window.history.back();</script>";
        exit();
    }

    // Check if email already exists
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $resultEmail = $conn->query($checkEmail);
    if ($resultEmail->num_rows > 0) {
        echo "<script>alert('Email Address Already Exists!'); window.history.back();</script>";
        exit();
    }

    // Check if mobile number already exists
    $checkMobile = "SELECT * FROM users WHERE mobile_number='$mobile_number'";
    $resultMobile = $conn->query($checkMobile);
    if ($resultMobile->num_rows > 0) {
        echo "<script>alert('Mobile Number Already Registered!\\nPlease Registered with another Mobile Number'); window.history.back();</script>";
        exit();
    }

    // Insert user into the database
    $insertQuery = "INSERT INTO users (firstName, lastName, mobile_number, email, password, repeat_password)
                    VALUES ('$firstName', '$lastName', '$mobile_number', '$email', '$password', '$repeat_password')";
    if ($conn->query($insertQuery) === TRUE) {
        echo "<script>alert('You have registered successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
   
if(isset($_POST['signIn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $password = md5($password);
   
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['password'] === $password) {
        session_start();
        $_SESSION['email'] = $row['email'];
        $_SESSION['last_activity'] = time();
        echo "<script>alert('You have logged in successfully!'); window.location.href='homepage.php';</script>";
        exit();
    } else {
        echo "<script>alert('You have typed the wrong password, please type the correct password'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('No account found with this email and password. Please register first.'); window.history.back();</script>";
}
}

?>
