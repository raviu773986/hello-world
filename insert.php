 <?php
// $name=$_REQUEST['nm'];
// $class=$_REQUEST['class'];
// $mobile=$_REQUEST['mob'];
// $pass=$_REQUEST['pwd'];
// $password=sha1($pass);


// $conn=mysqli_connect("localhost","root","","testflask");
// if(!$conn)
// {
//     Echo "Sorry not connected";
// }
// $sql="insert into teacher(tname,class,mobile,password,created) values('$name','$class','$mobile','$password',now())";
// $result=mysqli_query($conn,$sql);
// if($result)
// {
//     echo " Data successfully inserted";
   
// }
?>


<?php
$host="localhost";
$user="root";
$password="";
$database="record";
$conn=mysqli_connect($host,$user,$password,$database);
if(!$conn)
{
    echo " not connected";
}

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);
$name = $mydata['name'];
$class = $mydata['class'];
$sub = $mydata['subject'];
$mobile=$mydata['mobile'];
$pass = $mydata['password'];
$password=sha1($pass);

if(!empty($name) && !empty($class) && !empty($sub) && !empty($mobile) && !empty($password)){
    $sql="insert into teacher(tname,class,subject,mobile,password,created) values('$name','$class','$sub','$mobile','$password',now())";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "data inserted";
    }
    else
    {
        echo "not inserted";
    }

}
else
{
    echo "fill all details";
}

?>

