
<?php
$name = $_POST['name'];
$phone_no = $_POST['phone_no'];
$gender = $_POST['gender'];
$Message=$_POST['Message'];
if($_SERVER['REQUEST_METHOD']=='POST'){
$data = array("NAME:$name\n,PHONE_NUMBER:$phone_no\n,Feedback:$Message\n,GENDER:$gender\n");
$file = fopen("webdata.csv","a");
fputcsv($file,$data);
fclose($file);
header("Location: successfullmessage.html");
exit();
}
else{
    header("Location: feedback.html");
    exit();
}
?>