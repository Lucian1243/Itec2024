<?php 
session_start();
if(isset($_SESSION['name'])){
    if($_SESSION['usertype']=="user"){
        header("location:user.php");

    }
    else{
        header("location:admin.php");
    }
    
}
?>

<?php


if(isset($_POST['login'])){
    include "Connection.php";
    $username = mysqli_real_escape_string($conn, $_POST['account']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    $sql = "SELECT * FROM users WHERE Username = '$username' or email='$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if($row){
        if(password_verify($password, $row["Password"])){
            $sql = "SELECT * FROM users WHERE Username='$username' OR Email='$username'";
            $r = mysqli_fetch_array(mysqli_query($conn, $sql));
            session_start();
            $_SESSION['name'] = $r['Username'];
            $_SESSION['usertype'] = $r['usertype'];
            if ($_SESSION['usertype'] == 'developer') {

                    header('location:admin.php');               
            }else{
                    header('location:user.php');
        
            
        }
    }
    }
    else{
        echo '<script>
            alert("Invalid username/email or password!");
            window.location.href = login.php;
        </script>';
    }

}
?>
<!-- <html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <form name="form" action="login.php" method="POST">
            <label for="user">Username/Email:</label><br>
            <input type="text" id="account" name="account"required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="pass" name="pass"required><br><br>
            <input type="submit" id="btn" value="LogIn"name="login"/><br>
        </form>
            <a href="index.php">Register</a>

        <script src="script.js" type="text/javascript"></script>
    </body>
</html> -->