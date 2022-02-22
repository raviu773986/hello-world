<?php
$id=$_GET['id'];
//connecting to database
$conn=mysqli_connect("localhost","root","","record");
if(!$conn)
{
  die("sorry failed to connect to database...".mysqli_connect_error());
}
$sql="select * from notes where slno=$id";
$result=mysqli_query($conn,$sql);

    while($arr=mysqli_fetch_array($result))
    {
        $subject=$arr['subject'];
        $title=$arr['title'];
        $description=$arr['description'];

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
            <h2>Update Note</h2>
            <form  action="" method="post">
             <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="<?php echo "$subject"; ?>">
            </div>
             <div class="form-group">
                <label for="title">Note Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="<?php echo "$title"; ?>">
            </div>
            <div class="form-group">
                <label for="desc">Note Description</label>
                <textarea class="form-control" id="desc" name="desc" rows="3" placeholder="<?php echo" $description"; ?>"></textarea>
             </div>
            <button type="submit"  name="submit" class="btn btn-primary">Update Note</button>
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
    $id=$_GET['id'];
    $title=$_REQUEST['title'];
    $desc=$_REQUEST['desc'];
    echo $id;
   $conn=mysqli_connect("localhost","root","","record");
   $sql="update notes set slno='$id',title='$title',description='$desc' where slno=$id";
   $result=mysqli_query($conn,$sql);
    if($result)
     {
        echo "Record Updated..";

	//	header("location:edit_rest.php");
     }  
}
?>