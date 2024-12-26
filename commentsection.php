<?php
if($_POST['submit']){
$email = $_POST['email'];
$message = $_POST['comment'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "test";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if( $conn){
    $INSERT = "INSERT Into commentsection values (NULL, '$email', '$comment') ";
    $res = mysqli_query($conn,$INSERT);
if($res)
{
    echo "<script> alert('Your response sent successfully');</script>";
}
else{
    echo "Fail to send your response";
}
}
}
?>