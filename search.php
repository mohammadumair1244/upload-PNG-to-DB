<div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <label >ID: </label>
        <input type="text" name="id">
        <input class="btn btn-info" type="submit" name="btnn" value="Search">
    </form>
    

</div>

<?php

if(isset($_POST['btnn'])){
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "geeksforgeeks";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

    $id=$_POST['id'];

    $sql="SELECT * FROM images WHERE id=$id";
    $result=mysqli_query($conn,$sql) or die("Query Failed");

        if($data=mysqli_fetch_assoc($result)){ 
         ?>   
            <img id="pic" style='margin: 5px;width: 350px;height: 250px;' src="./upload/<?php echo $data['name']; ?>">
            <script>
                var imag=document.getElementById("pic");
                console.log(imag. getAttribute("src"));
                console.log(imag.src);
            </script>

            
<?php

   

    }
}
?>
<!-- <a href="dbimage.php"><button class="btn btn-primary">Download </button></a> -->
           
<br><br>

<a href="index.php" style="color: white;" ><button class="btn btn-primary btn-block">Main Menu</button></a>
