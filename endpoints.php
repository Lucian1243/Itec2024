<?php

include("connection.php");
session_start();
if (!isset($_SESSION['name'])) {
    header("location:login.php");
    exit;
}

if ($_SESSION['usertype'] == "user") {
    header("location:denied.php");
    exit;
}

if (isset($_POST['insert'])) {
    $app = mysqli_real_escape_string($conn, $_POST['app']);
    $endpoints = array(
        mysqli_real_escape_string($conn, $_POST['end1']),
        mysqli_real_escape_string($conn, $_POST['end2']),
        mysqli_real_escape_string($conn, $_POST['end3']),
        mysqli_real_escape_string($conn, $_POST['end4']),
        mysqli_real_escape_string($conn, $_POST['end5']),
        mysqli_real_escape_string($conn, $_POST['end6']),
        mysqli_real_escape_string($conn, $_POST['end7'])
    );
    $logoapp = mysqli_real_escape_string($conn, $_POST['UrlImageApp']);
    // Insert data into the database
    $sql = "INSERT INTO apps(AppName,AppUrl,AppStatus,endpoint1, endpoint2, endpoint3, endpoint4, endpoint5, endpoint6, endpoint7,UrlLogoApp) 
    VALUES('$app','$app',0,
    '{\"URL\":\"$endpoints[0]\",\"Status\":0}',
    '{\"URL\":\"$endpoints[1]\",\"Status\":0}',
    '{\"URL\":\"$endpoints[2]\",\"Status\":0}',
    '{\"URL\":\"$endpoints[3]\",\"Status\":0}',
    '{\"URL\":\"$endpoints[4]\",\"Status\":0}',
    '{\"URL\":\"$endpoints[5]\",\"Status\":0}',
    '{\"URL\":\"$endpoints[6]\",\"Status\":0}',
    '$logoapp'
    )";
    $result = mysqli_query($conn, $sql);
    if ($_SESSION['usertype'] == "developer") {
        header("location:admin.php");
        exit;
    }
}
?>

