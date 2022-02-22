<?php
session_start();
include "layoutt.php";
$color=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2 align="center"> DIsplaying Students Data</h2> <br> <hr>
      <table border="5px" align="center" cellspacing="20px" cellpadding="10px">  
          <tr bgcolor="grey">
            <th>ID</th>
            <th>Name</th>
            <th>Class</th>
            <th>Mobile</th>
            <th>Email</th>  
            <th>Delete</th>  
            <th>Update</th>  
          </tr>
  
               <?php
                    $conn=mysqli_connect("localhost","root","","record");
                    $sql="select * from stud";
                    $result=mysqli_query($conn,$sql);
                   // $cc=mysqli_num_rows($result);
                      while($arr=mysqli_fetch_array($result))
                      {
                        $id=$arr['id'];
                        $name=$arr['name'];
                        $class=$arr['class'];
                        $mobile=$arr['mobile'];
                        $email=$arr['email'];
                        $password=$arr['password'];
                        
                ?>    
                  <tr>
                        <td><?php echo" $id" ; ?></td>
                        <td><?php echo" $name" ; ?></td>
                        <td><?php echo" $class" ; ?></td>
                        <td><?php echo" $mobile" ; ?></td>
                        <td><?php echo" $email" ; ?></td>
                        <td><button><a href="sdelete.php?id=<?php echo $arr['id']; ?>" style="text-decoration:none;" >DELETE</a></button></td>
                        <td><button><a href="sedit.php?id=<?php echo $arr['id']; ?>" style="text-decoration:none;" >UPDATE</a></button></td>
                  </tr
                    
                <?php } ?>
     </table>
    
  </body>
</html>

<!-- 
<td><a href="updt.php?id=<//?php echo $arr['slno']; ?>">update</a></td>
 <td><button><a href="delete.php?id=<//?php echo $arr['slno']; ?>" style="text-decoration:none;" >Delete</a></button></td> -->