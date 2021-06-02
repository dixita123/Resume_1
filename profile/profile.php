<?php
$con=new mysqli("localhost","root","","contact");
if ($conn->connect_error) {
    echo $conn->connect_error;
}else{
    $sql = "select * from contact";
    $res = $conn->query($sql);
}

$name=$_POST('name');
$email=$_POST('email');
$number=$_POST('number');
$subject=$_POST('subject');
$textarea=$_POST('textarea');



      if(isset($_POST['submit'])) { 
          $SQL = "INSERT INTO contact (id,name,email,number,subject,textarea) VALUES ('0','$name','$email','$number','$subject','$textarea')‌​"; 
          $result = mysql_query($SQL); 
      } 
?>