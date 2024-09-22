<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "students";

$conn = mysqli_connect($server, $user, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user (userid, First_name, Last_name, class_id, email) VALUES
(36045, 'นพดล', 'ละดาดก', 610, '36045@bpk.ac.th'),
(36046, 'สมชาย', 'สมุทร', 610, '36046@bpk.ac.th'),
(36047, 'จันทร์จิรา', 'กลิ่นหอม', 610, '36047@bpk.ac.th')";

if (mysqli_query($conn, $sql)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>
