<?php
session_start();
include "layout.php";
?>
<?php
$id=$_REQUEST['id'];
echo $id;
//connecting to database
$conn=mysqli_connect("localhost","root","","record");
if(!$conn)
{
  die("sorry failed to connect to database...".mysqli_connect_error());
}
else{
  echo "connection successfull...";
}

  $sql="delete from stud where id='$id'";
  $result= mysqli_query($conn, $sql); 
  
  if($result)
  {
    echo "record deleted";
    //header("location: layout.php");
  }
  else
  {
      echo "No such record";
  }


?>