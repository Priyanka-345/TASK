<?php
require_once 'config.php';
$Username = $_POST['username'];
$Password = $_POST['password'];
$Email = $_POST['email'];
$rno = $_POST['id'];
$Message = $_POST['msg'];

$insert = "insert into form(username , password,email,id,Msg) values ('$Username','$Password','$Email','$rno','$Message')";
$run_query = mysqli_query($conn,$insert);
if($run_query)
{
    echo 'registered sucessfully';
}
else
{
    echo 'not success';
}
 

?>
