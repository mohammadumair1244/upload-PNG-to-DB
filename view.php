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
            <img style='margin: 5px;width: 350px;height: 250px;' src="./upload/<?php echo $data['name']; ?>">
<?php
        }

?>
           
<br><br>

<a href="index.php" style="color: white;" ><button class="btn btn-primary btn-block">Main Menu</button></a>

