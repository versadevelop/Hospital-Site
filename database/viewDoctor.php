<html>
    <head><title>Special SQL hospital selector</title></head>
    <head><title>Special SQL hospital selector</title></head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/hospital.css" />

<link rel="shortcut icon" type="image/png" href="favicon.png"/>
</head>
    <div class="box_2">
    <img src="images/image.jpg" alt="Special SQL hospital selector" >
    <br>
    </head>

</html>
<?php

include 'php/menu.php';

include 'php/dbInsertConnection.php';

$sql = "SELECT * FROM room";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> ". $row["Temperature"] . " " . $row["Humidity"] .  "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

include 'forms/formDltDoctor.php';
?> 
<div>


