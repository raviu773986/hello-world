<!-- <?php
	// session_start();
    // include "nav.php";
	// if(isset($_SESSION["name"]))
	// 	{
    //         $name=$_SESSION['name'];
    //     }
        
 ?>

    <body>
    <br><br>
    <table border="5px" align="center" cellspacing="20px" cellpadding="10px" width="500px">
        <form method="post" >
        <tr>
        <td colspan="2"> <h2>Update Your Details</h2></td> <br><br>
    </tr>
        <tr> 
            <td> Student Name: <input type="text" id="name" name="nm" placeholder="Enter your name" minlength="3" maxlength="20" required />
        <tr>
        <tr>
            <td>Class: <input type="text"  id="cls" name="class"  required /> 
        </tr>
        <tr>
            <td>Mobile: <input type="text"  id="mobl" name="mob" pattern="[9876][0-9]{9}" required /> 
        </tr>
        <tr>
            <td> Email:<input type="email"  id="email" name="eml" pattern="[a-z 0-9]+@[a-z  0-9]+.[a-z]{2,4}"/>
        </tr>
        <tr>
            <td> password: <input type="password" id="pass" name="pwd"/>
        </tr>
        <tr>
            <td> <input type="submit" name="Submit" Value="update" /> </td>
        </tr>
        </form>
    </table>
    </body>

    <?php
    // if(isset($_POST["Submit"]))
    // {
    //     // $id=$_REQUEST['id'];
    //     // echo $id;
    //     $nm=$_REQUEST['nm'];
    //     $class=$_REQUEST['class'];
    //     $mobile=$_REQUEST['mob'];
    //     $email=$_REQUEST['eml'];
    //     $pass=$_REQUEST['pwd'];
    //     $password=sha1($pass);
    //     echo $nm;
    //     echo $class;

    
    // // $sql="update notes set slno='$id',title='$title',description='$desc' where slno=$id";
    //     $sql="UPDATE `stud` SET `name`='$name',`class`='$class',`mobile`='$mobile,`email`='$email',`password`='$password', WHERE name='$name'";
    //    // $sql="update stud set name='$name',class='$class',mobile='$mobile',email='$email',password='$password' where name='$name'";
    //     $result=mysqli_query($conn,$sql);
    //     if($result)
    //     {
    //         echo " Record updated";
        
         //}
    // }
    // echo $name;
    ?> -->


<?php
	session_start();
    include "nav.php";
	if(isset($_SESSION["name"]))
		{
            $nm=$_SESSION['name'];
        }
//connecting to database
$conn=mysqli_connect("localhost","root","","record");
$sql="SELECT * from stud where name='$nm'";
$result=mysqli_query($conn,$sql);
while($arr=mysqli_fetch_array($result))
{
    $id=$arr['id'];
    $name=$arr['name'];
    $class=$arr['class'];
    $phone=$arr['mobile'];
    $email=$arr['email'];
    $password=$arr['password'];

        ?>
        <!doctype html>
          <html lang="en">
            <head>
              <!-- Required meta tags -->
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

              <!-- Bootstrap CSS -->
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            </head>
            <body>
         <div class="container my-4">
            <h2>Update Details</h2>
            <form  method="post">
             <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="title" name="nm" placeholder="<?php echo "$name"; ?>">
            </div>
             <div class="form-group">
                <label for="cl">Class</label>
                <input type="text" class="form-control" id="cl" name="class" placeholder="<?php echo "$class"; ?>">
            </div>
             <div class="form-group">
                <label for="phn">Mobile</label>
                <input type="text" class="form-control" id="phn" name="phone" placeholder="<?php echo "$phone"; ?>">
            </div>
             <div class="form-group">
                <label for="eml">Email</label>
                <input type="text" class="form-control" id="eml" name="email" placeholder="<?php echo "$email"; ?>">
            </div>
             <div class="form-group">
                <label for="pwd">Password</label>
                <input type="text" class="form-control" id="pwd" name="password" placeholder="<?php echo "$password"; ?>">
            </div>

            <button type="submit"  name="submit" class="btn btn-primary">Update Details</button>
            <button><a href="welcome.php" style="text-decoration:none;">See Results</a></button>
          </form>
         </div> <hr>
        </body>
      </html>

        <?php
    }
?>
  <?php

if(isset($_REQUEST['submit']))
{
    $name=$_POST['nm'];
    $class=$_POST['class'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $password=sha1($pass);

 //   $conn=mysqli_connect("localhost","root","","record");
    $sql="update stud set id='$id',name='$name',class='$class',phoneno='$phone',email='$email', password='$password', where name=$name";

    if(mysqli_query($conn,$sql))
    {
        echo "record Updated";
    }
}
?>
