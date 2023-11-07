<?php
require_once 'db.php';
require_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User($db);

    if ($user->register($username, $password)) {
        echo "Registration successful. <a href='login.php'>Login here</a>";
    } else {
        echo "Registration failed. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<head>
    <title>Register</title>
</head>
<body>


    <br><h1>Register</h1>

    

    <form method="post" action="login.php">
        <label>Username:</label>
        <input type="text"name="username" placeholder="Username" required>

        <label>Password:</label>
        <input type="password" name="password" placeholder="Password" required>

        <input type="submit"value="Register""Register">
        
    </form>
    
</body>
</html> 
