<?php
 session_start();
 if (isset($_POST["user"]) && isset($_POST["password"])) {
    if ($_POST["user"] == "admin" && $_POST["password"] == "admin") {
        $_SESSION["user"] = $_POST["user"];
        $_SESSION["password"] = $_POST["password"];
        header("Location: Lat3_4a.php");
        exit;
    } else {
        echo "User atau password salah";
    }
 }
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Login</title>
 </head>
 <body>
 <form action="login.php" method="post">
 <p> User: <input type="text" name="user"> </p>
 <p> Password: <input type="password" name="password"> </p>
 <input type="submit" value="Login" name="submit">
 </form>
 </body>
</html>