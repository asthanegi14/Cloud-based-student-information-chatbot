<?php
date_default_timezone_set('Asia/Kolkata');
include('database.inc.php');

$txt = $_POST['txt'];
$added_on = date('Y-m-d h:i:s');
$sql = "INSERT INTO `message` (`messages`, `added_on`, `type`) VALUES ('$txt', '$added_on', 'user');";
mysqli_query($con,$sql);

$sql = "SELECT `reply` FROM `queries` WHERE `questions` LIKE '%$txt%';";

$res=mysqli_query($con,$sql);
mysqli_num_rows($res);
if(mysqli_num_rows($res)>0){
    while( $row=mysqli_fetch_assoc($res))
    {
         echo $row['reply'];
    }
}
else{
    echo $html = "SORRY!! No related data found!!  you can visit the official website of our college
    https://www.gehu.ac.in/  paste it in chrome";
}
?>
