<div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 

</div>


<?php

    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "geeksforgeeks";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }



    $sql="SELECT * FROM images ";
    $result=mysqli_query($conn,$sql) or die("Query Failed");

        while($data=mysqli_fetch_assoc($result)){ 
         ?> 
         <div style="border:1px solid grey;padding:15px;width :370px;display:inline-block;margin :0" class="justify-content-center mx-auto" >
            <img style='width: 350px;height: 250px;' src="./upload/<?php echo $data['name']; ?>"><br>
            <a style="padding:10px 0px;display:block;margin :0;text-align: center" href="./upload/<?php echo $data['name']; ?>" Download><button class="btn btn-primary mx-auto">Download</button></a> 
        </div>

<?php
        }
      

?>
           
<br><br>

<a href="index.php" style="color: white;" ><button class="btn btn-primary btn-block">Main Menu</button></a>

