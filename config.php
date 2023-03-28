<?php 
session_start();
date_default_timezone_set("Asia/Dhaka");

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "cmail_db";

$conn = new mysqli($hostname, $username, $password,$dbname);

if($conn->connect_error){
    die('Connection Faild: '.$conn->connect_error);
}

// if($conn->query("drop database haboltabol") == true){
//     echo "query Success";
// }else{
//     echo "query Failed: ".$conn->error;
// }


$TBL_USERS = 'users';
$TBL_MAILS = 'mails';


echo password_hash('12345', PASSWORD_DEFAULT);

if (password_verify('12345', '$2y$10$w1iHTRmraZcSTTZ5j4eDRun3Xl1hL8LxRx5OFC0XGGSWM3zj8oyKe')) {
    echo "Match";
}else{
    echo "not Match";
}

echo md5('12345');