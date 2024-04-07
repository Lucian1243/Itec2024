<?php
include("connection.php");
session_start();
if (!isset($_SESSION['name'])) {
    header("location:login.php");
    exit;
}
$sql = "SELECT * FROM apps";
$result = mysqli_query($conn, $sql);


$r = mysqli_fetch_array(mysqli_query($conn, $sql));
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $endpoint1_data = json_decode($row['endpoint1'], true);
    $endpoint2_data = json_decode($row['endpoint2'], true);
    $endpoint3_data = json_decode($row['endpoint3'], true);
    $endpoint4_data = json_decode($row['endpoint4'], true);
    $endpoint5_data = json_decode($row['endpoint5'], true);
    $endpoint6_data = json_decode($row['endpoint6'], true);
    $endpoint7_data = json_decode($row['endpoint7'], true);
    
}

$endpoints = array(
    
    $app = $r['AppUrl'],
    $end1= $endpoint1_data['URL'],
    $end2= $endpoint2_data['URL'],
    $end3= $endpoint3_data['URL'],
    $end4= $endpoint4_data['URL'],
    $end5= $endpoint5_data['URL'],
    $end6= $endpoint6_data['URL'],
    $end7= $endpoint7_data['URL'],
);

echo '<div class="' . $i . '"></div>';

//     if (!$result) {
//         echo "Error: " . mysqli_error($conn);
//         exit;
//     }

//     function getStatusForEndpointAndHour($conn, $endpoint, $hour) {
//     $query = "SELECT Status FROM endpoint_status WHERE Endpoint = '$endpoint' AND Hour = '$hour'";
//     $result = mysqli_query($conn, $query);
//     if (!$result) {
//         echo "Error retrieving status: " . mysqli_error($conn);
//         return "N/A";
//     }
//     if (mysqli_num_rows($result) > 0) {
//         $row = mysqli_fetch_assoc($result);
//         return $row['Status'];
//     } else {
//         return "200";
//     }
// }


    // echo "Overall App Status for each hour:<br>";
 
    // $currentHour = date('Y-m-d H:00:00');
    // for ($i = 0; $i < 12; $i++) {
    //     $hour = date('Y-m-d H:00:00', strtotime("-$i hours", strtotime($currentHour)));
    //     echo "<h2>Status for Hour: $hour</h2>";

    //     $overall_statuses = array();

    //     foreach ($endpoints as $key => $endpoint) {
    //         if (!empty($endpoint)) {
    //             $status = getStatusForEndpointAndHour($conn, $endpoint, $hour);
    //             echo "Endpoint $endpoint at Hour $hour returned status: $status<br>";
    //             if ($status !== "200" && $status !== "302") {
    //                 $overall_statuses[$hour] = "Unstable";
    //             } else {
    //                 if (!isset($overall_statuses[$hour]) || $overall_statuses[$hour] === "Stable") {
    //                     $overall_statuses[$hour] = "Stable";
    //                 }
    //             }
    //         } else {
    //             echo "Endpoint at position $key is not set<br>";
    //         }
    //     }

    //     echo "Overall App Status for Hour $hour: ";
    //     echo isset($overall_statuses[$hour]) ? $overall_statuses[$hour] : "Stable";
    //     echo "<br>";
    // }

?>
<h1>Successful!</h1>
