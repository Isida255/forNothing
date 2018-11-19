<?php
$host="localhost";
$username="root";
$password="";
$databasename="posts";

$connect=mysqli_connect($host,$username,$password,$databasename);
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['edit_row']))
{
 $row=$_POST['row_id'];
 $name=$_POST['name_val'];
 $age=$_POST['age_val'];

 $query="UPDATE user_detail set name='$name',age='$age' where id='$row'";
 mysqli_query($connect,$query);
 echo "success";
 exit();
}

if(isset($_POST['delete_row']))
{
 $row_no=$_POST['row_id'];
 $query="DELETE FROM user_detail where id='$row_no'";
 mysqli_query($connect,$query);
 echo "success";
 exit();
}

if(isset($_POST['insert_row']))
{
 $name=$_POST['name_val'];
 $age=$_POST['age_val'];
 mysqli_query("insert into user_detail values('','$name','$age')");
 echo mysqli_insert_id();
 exit();
}
?>