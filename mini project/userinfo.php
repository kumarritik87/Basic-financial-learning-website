<?php

$con = mysqli_connect('localhost','root');
if($con){
    echo "connection successful";

} else{
    echo "No connection";

}  

mysqli_select_db($con,'customerinformation');

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Message = $_POST['Message'];

$query = " insert into userinfodata (Name,Email,Phone,Message)
values( '$Name','$Email','$Phone',' $Message')" ; 

echo "$query";

mysqli_query($con, $query);



?>