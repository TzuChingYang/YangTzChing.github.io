<!DOCTYPE html>
<html>
<head>
    <title> Registration info </title>
    <style>

    </style>
</head>

<body>

<?php
// define variables and set to empty values
$usernameErr = $emailErr = $genderErr = $passwordErr = $birthdayErr = $colorErr = $agreementErr = "";
$username = $email = $gender = $password = $birthday = $color = $agreement = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $usernameErr = "Userbame is required";
    } else {
        $username = $_POST["username"];
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = $_POST["password"];
    }

    if (empty($_POST["birthday"])) {
        $birthdayErr = "Birthday is required";
    } else {
        $birthday = $_POST["birthday"];
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = $_POST["gender"];
    }

    if (empty($_POST["color"])) {
        $colorErr = "Color is required";
    } else {
        $color = $_POST["color"];
    }

    if (empty($_POST["agreement"])) {
        $agreementErr = "Agreement is required";
    } else {
        $agreement = $_POST["agreement"];
    }
}
?>


<h2> Username: </h2><?php echo $username?> <br>
<h2> Password: </h2><?php echo $password?> <br>
<h2> Birthday: </h2><?php echo $birthday?> <br>
<h2> Email: </h2><?php echo $email?> <br>
<h2> Gender: </h2><?php echo $gender?> <br>
<h2> Color: </h2><?php echo $color?> <br>
<h2> Agreement: </h2><?php echo $agreement?> <br>

</body>
</html>