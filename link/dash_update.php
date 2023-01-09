<?php
include 'connect_database.php';
$id = $_POST['id'];
$image = $_POST['image'];
$about = $_POST['about'];
$email = $_POST['email'];
$password = $_POST['pass'];


$query = "UPDATE user1 SET profile_img='$image', about='$about' WHERE id='$id'";


if(mysqli_query($connect,$query)){
    echo "updated";
    header("Location:../dashboard.php");
}
else
{
    die("error".mysqli_connect_error());

}
?>