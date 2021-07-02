<body bgcolor="#A239EA">
<?php 

require 'dbConnect.php';



echo "<h2 align='center' style='color:#F0D9E7;'>Eazy Now Hotel Booking Services</h2>";
echo "<table border='1' align='center' style='background:#FF94CC;color:#5C33F6;'>";
echo "<tr><th>Booking No.</th><th>Name</th><th>Contact</th><th>Hotel</th><th>Arrival</th><th>AC Rooms</th><th>NON-AC Rooms</th></tr>";
echo "<form action='insert.php' method='post'>";
echo "<tr>";
echo "<td><input type='submit' value='Insert' style='width:100%;'></td>";
echo "<td><input type='text' name='name'></td>";
echo "<td><input type='text' name='contact'></td>";
echo "<td><input type='date' name='arrival'></td>";

echo "<td>";
echo "<select name='hotel'>";
$query = "SELECT * FROM hotels";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<option value='".$row["name"]."'>".$row["name"]."</option>";
    }
}

echo "</select>";
echo "</td>";


echo "<td><input type='number' name='rooms_ac' value='0'></td>";
echo "<td><input type='number' name='rooms_nonac' value='0'></td>";
echo "</tr>"; 
echo "</form>"; 


$query = "SELECT * FROM booking";
$result = mysqli_query($con,$query);

if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["booking_id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["contact"]."</td>";
        echo "<td>".$row["hotel"]."</td>";
        echo "<td>".$row["arrival"]."</td>";
        echo "<td>".$row["rooms_ac"]."</td>";
        echo "<td>".$row["rooms_nonac"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<br><br>To add your hotel,<a href='hotel.php'>Click Here</a>";
}

?>
</body>






<!-- echo "<h2 align='center' style='color:#008888;'>Booking List</h2>";
echo "<table border='1' align='center' style='background:#ACF9B8;color:#008888;'>";
echo "<tr><th>Booking No.</th><th>Name</th><th>Contact</th><th>Hotel</th><th>Arrival</th><th>AC Rooms</th><th>NON-AC Rooms</th></tr>";
echo "<form action='insert.php' method='post'>";
echo "<tr>";
echo "<td><input type='submit' value='Insert' style='width:100%;'></td>";
echo "<td><input type='text' name='name'></td>";
echo "<td><input type='text' name='contact'></td>";
echo "<td><input type='date' name='arrival'></td>";


echo "<td><input type='text' name='hotel'></td>";

echo "<td><input type='number' name='rooms_ac' value='0'></td>";
echo "<td><input type='number' name='rooms_nonac' value='0'></td>";
echo "</tr>"; 
echo "</form>";  -->