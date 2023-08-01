<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "rh";
$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['pw'];
    $sql = "SELECT * FROM users WHERE username = '$username' AND motdepasse= '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        
        echo"<script language=\"javascript\">";
        echo"alert('welcome')";
        echo"</script>";
        $user = null;
        while ($row = mysqli_fetch_assoc($result)) {
            $user =  $row["id"];
        }
        header("location:php/index.php?email=".$username);
    } else {
        echo"<script language=\"javascript\">";
        echo"alert('incorrect username or password!!')";
        echo"</script>";
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="script.js"></script>

</head>

<body>
    <div class="login-container">
        <section class="login" id="login">
            <header>
                <h2>Admin Panel</h2>
                <h4 style="margin: 0 auto;">Login</h4>
            </header>
            <form class="login-form" action="#" method="post">
                <input type="text" class="login-input" name="username" placeholder="User" required autofocus/>
                <input type="password" class="login-input" name="pw" placeholder="Password" required/>
                <div class="submit-container">
                    <button type="submit" name="login"  class="login-button">SIGN IN</button>
                </div>
            </form>
        </section>
    </div>

</body>

</html>

</html>