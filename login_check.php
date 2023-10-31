<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'student_data';

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection Error");
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $rollno = $_POST['rollno'];
    $pass = $_POST['password'];

    $sql = "select * from login_info where rollno='" . $rollno . "' and password= '" . $pass . "' ";

    $result = mysqli_query($data, $sql);
    $row = mysqli_fetch_array($result);
    if ($row['rollno'] === "$rollno" && $row['password'] === "$pass") {
       header("location: main-page/main.php");
        echo ' succesfull';
       
        exit();
    } else {
        header("location: index.php");
    }
}
