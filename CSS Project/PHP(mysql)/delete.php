<?php
require("register_base.php");

$id=$_GET['id'];

$result=mysqli_query($con,"DELETE FROM login WHERE id='$id'");

header("Location:principle.php");

?>