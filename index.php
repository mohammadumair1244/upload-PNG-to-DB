<?php

if (isset($_POST['upload'])) {

    $name = $_FILES["uploadFile"]["name"];
    $tempname = $_FILES["uploadFile"]["tmp_name"];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["uploadFile"]["name"]);
    $allowed_types = array('png');
    $ext = pathinfo($name, PATHINFO_EXTENSION);


    if (in_array($ext, $allowed_types)) {

            echo "Allowed";
            if (move_uploaded_file($tempname, $target_file)) {
                $con = mysqli_connect("localhost", "root", "", "geeksforgeeks");
                $query = "insert into images(name) values('" . $name . "')";
                mysqli_query($con, $query);
                echo "<h3>File Uploaded</h3>";
            } else {
                echo "<h3>failed to Upload File</h3>";
            }

        } 
        else 
        {
            echo "File Extension not Allowed";
        }
    
}
?>


<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body style="padding: 20px;">
    <form style="width: 50%;margin:40px auto" method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <input class="" type="file" name="uploadFile"><br><br>
            <button class="btn btn-primary" type="submit" name="upload">Upload</button>
            <br><br><br>
        </div>

    </form>

    <a href="multiple.php" style="color: white;"><button class="btn btn-success">Upload Multiple Files</button></a>
    <br><br> <a href="search.php" style="color: white;"><button class="btn btn-warning">Search by ID</button></a>
    <a href="view.php" style="color: white;"><button class="btn btn-warning">View All</button></a>

</body>

</html>