<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="indexstyle.css">
</head>
<body>
    <div class="loginbox">
        <h1> Login </h1>
        <form action="index.php" method="post">
            <input type="text" placeholder="Username" name="username" class="field">
            <br>
            <input type="password" placeholder="Password" name="password" class="field">
            <br>
            <input type="submit" value="Login" name="login" class="submit">
        </form>
    </div>

    <div class="loginbox">
        <b>Login Info [For Demonstration Purposes Only]</b>
        <p>Username: xianshizukana || Pass: xian123</p>
        <p>Username: archaicfate || Pass: fate123</p>
        <p>Username: letris || Pass: letris123</p>
        <p>Username: sofiee || Pass: sofie123</p>
    </div>
    
</body>
</html>

<?php
    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(!empty([$_POST["username"] && $_POST["password"]])){
            if($username == "xianshizukana" && $password == "xian123"){
                $SESSION["username"] = "XianShizukana";
                header("Location: datapage/datareport.php");
            } else if($username == "archaicfate" && $password == "fate123"){
                $SESSION["username"] = "archaicfate";
                header("Location: datapage/datareport.php");
            } else if($username == "letris" && $password == "letris123"){
                $SESSION["username"] = "letris";
                header("Location: datapage/datareport.php");
            } else if($username == "sofiee" && $password == "sofie123"){
                $SESSION["username"] = "sofiee";
                header("Location: datapage/datareport.php");
            } else {
                echo "<script>alert('Invalid Username / Password!')</script>";
            }
        }
    }
?>
