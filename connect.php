<?php
$name=$_POST['fname'];
$mail=$_POST['mailid'];
$number=$_POST['phone'];
$msg=$_POST['msg'];
$conn=mysqli_connect('localhost','root','manalisql','contact');
if(!$conn){
    die('connection failed '.mysqli_connect_error());
}
else
{
//    $sql="INSERT INTO `info` (`Name`,`Email`,`Phone`,`Message`) VALUES ('$name','$mail','$number','$msg')";
   $sql="insert into info(Name,Email,Phone,Message) values($name,$mail,$number,$msg)";
   $result=mysqli_query($conn,$sql);
   if($result)
   echo "Success";
   else
   echo "fail";
   mysqli_error($conn);
}
?>