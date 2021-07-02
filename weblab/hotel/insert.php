<?php

require 'dbConnect.php';

$name = $_POST['name'];
$contact = $_POST['contact'];
$hotel = $_POST['hotel'];
$arrival = strval($_POST['arrival']);
$rooms_ac = $_POST['rooms_ac'];
$rooms_nonac = $_POST['rooms_nonac'];


$ac_rooms_nos = 0;
$nonac_rooms_nos = 0;


# getting room avaliablity from db
$query = "SELECT * FROM hotels where name='".$hotel."'";

$result = mysqli_query($con,$query);

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $ac_rooms_nos = $row['ac_nos'];
        $nonac_rooms_nos = $row['nonac_nos'];
    }
}


#if rooms available then registers
if(($ac_rooms_nos>$rooms_ac)&&($nonac_rooms_nos>$rooms_nonac))
{
    #insertion
    $query = "INSERT INTO booking(name,contact,hotel,arrival,rooms_ac,rooms_nonac) VALUES ('".$name."','".$contact."','".$hotel."','".$arrival."',".$rooms_ac.",".$rooms_nonac.")";

    $result = mysqli_query($con,$query);

    if($result)
    {
        echo "<script>alert('Room booking successful registered successfully !')</script>";
    }
    else
    {
        echo "<script>alert('Database insertion failed! Please try again')</script>";
    }
}
else
{
    echo "<script>alert('Not Enough Rooms available.')</script>";
}

echo "<a href='index.php'>Go Back to Lising Page</a>";

?>