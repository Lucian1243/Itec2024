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

    include ("connection.php");
    if(isset($_POST['submit'])){

        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);

    }

    $sql="SELECT * FROM users WHERE Username='$username'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql="SELECT * FROM users WHERE Email='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if($count_user == 0 & $count_email == 0){
        if($password==$cpassword){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(Username, Email, Password) VALUES('$username','$email','$hash')";
            // echo"'$username','$email','$hash'";
            $result = mysqli_query($conn, $sql);
            if($result){
                $sql = "SELECT * FROM users WHERE Username='$username'";
                $r = mysqli_fetch_array(mysqli_query($conn, $sql));
                session_start();
                $_SESSION['name'] = $r['Username'];
                $_SESSION['usertype'] = $r['usertype'];
                if($r['usertype']=="user"){
                    header("location:user.php");
            
                }
                else{
                    header("location:admin.php");
                }
            }
        }
        else{
            echo '<script>
                alert("Passwords do not match");
                window.location.href = "index.php";
            </script>';
        }

    }
    else{
        if($count_user > 0){
            echo '<script>
                window.location.href="index.php";
                alert("Username already exists!");
            </script>';
        }
        if($count_email > 0){
            echo '<script>
                window.location.href="index.php";
                alert("Email already exists!");
            </script>;';
    }
    }
?>