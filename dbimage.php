<form action="<?php $_SERVER['PHP_SELF'] ?>">
    <input type="submit" value="Download" name="download">
</form>




<?php
$conn = mysqli_connect("localhost", "root", "", "geeksforgeeks");

$sql = "SELECT * FROM images";
$result = mysqli_query($conn, $sql) or die("Query Failed");

if ($data = mysqli_fetch_assoc($result)) {

if (isset($_POST['download'])) {
    $image_name = $data['name'];
    $image_path = "./upload/$image_name";
    header("Content-type: image/jpeg");
    header("Content-Disposition: attachment; filename=$image_name");
    readfile($image_path);
}
}
?>