<form method="POST" action="">
        <input type="text" name="down_id">
        <button class="btn btn-primary" name='down'>Download </button>
    </form>  


<?php

if(isset($_POST['down'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "geeksforgeeks";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $down_id=$_POST['down_id'];
    $sql="SELECT * FROM images WHERE id=$down_id";
    $result=mysqli_query($conn,$sql) or die("Query Failed");

    if($data=mysqli_fetch_assoc($result)){
        ?>
        <img id="pic" style='margin: 5px;width: 350px;height: 250px;' src="./upload/<?php echo $data['name']; ?>">

        <a href="./upload/<?php echo $data['name']; ?>" Download>Download</a> 
    
    <?php    
    }
      }


      
?>