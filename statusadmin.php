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

    $sql = "INSERT INTO apps(AppName,AppUrl,AppStatus,endpoint1, endpoint2, endpoint3, endpoint4, endpoint5, endpoint6, endpoint7) 
    VALUES('$app','$app','Stable',
    '{\"URL\":\"$endpoints[0]\",\"Status\":\"200\"}',
    '{\"URL\":\"$endpoints[1]\",\"Status\":\"200\"}',
    '{\"URL\":\"$endpoints[2]\",\"Status\":\"200\"}',
    '{\"URL\":\"$endpoints[3]\",\"Status\":\"200\"}',
    '{\"URL\":\"$endpoints[4]\",\"Status\":\"200\"}',
    '{\"URL\":\"$endpoints[5]\",\"Status\":\"200\"}',
    '{\"URL\":\"$endpoints[6]\",\"Status\":\"200\"}'
    )";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    function getStatusForEndpointAndHour($conn, $endpoint, $hour) {
    $query = "SELECT Status FROM endpoint_status WHERE Endpoint = '$endpoint' AND Hour = '$hour'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "Error retrieving status: " . mysqli_error($conn);
        return "N/A";
    }
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row['Status'];
    } else {
        return "200";
    }
}


    echo "Overall App Status for each hour:<br>";

    $currentHour = date('Y-m-d H:00:00');
    for ($i = 0; $i < 12; $i++) {
        $hour = date('Y-m-d H:00:00', strtotime("-$i hours", strtotime($currentHour)));
        echo "<h2>Status for Hour: $hour</h2>";

        $overall_statuses = array();

        foreach ($endpoints as $key => $endpoint) {
            if (!empty($endpoint)) {
                $status = getStatusForEndpointAndHour($conn, $endpoint, $hour);
                echo "Endpoint $endpoint at Hour $hour returned status: $status<br>";
                if ($status !== "200" && $status !== "302") {
                    $overall_statuses[$hour] = "Unstable";
                } else {
                    if (!isset($overall_statuses[$hour]) || $overall_statuses[$hour] === "Stable") {
                        $overall_statuses[$hour] = "Stable";
                    }
                }
            } else {
                echo "Endpoint at position $key is not set<br>";
            }
        }

        echo "Overall App Status for Hour $hour: ";
        echo isset($overall_statuses[$hour]) ? $overall_statuses[$hour] : "Stable";
        echo "<br>";
    }
}
?>
<h1>Successful!</h1>
