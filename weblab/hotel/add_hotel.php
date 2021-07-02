<?php

require 'dbConnect.php';

$name = $_POST['name'];
$location = $_POST['location'];
$ac = $_POST['ac'];
$nonac = $_POST['nonac'];
$ac_nos = $_POST['ac_nos'];
$nonac_nos = $_POST['nonac_nos'];

                                                                                                                                                                                     
#insertion
$query = "INSERT INTO hotels(name,location,ac,nonac,ac_nos,nonac_nos) VALUES ('".$name."','".$location."',".$ac.",".$nonac.",".$ac_nos.",".$nonac_nos.")";

$result = mysqli_query($con,$query);

if($result)
{
    echo "<script>alert('Hotel Registration successful registered successfully !')</script>";
}
else
{
    echo "<script>alert('Database insertion failed! Please try again')</script>";
}


echo "<a href='hotel.php'>Go Back to Lising Page</a>";

?>