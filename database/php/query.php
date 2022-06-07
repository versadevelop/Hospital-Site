<?php

include 'dbInsertConnection.php';

$table= $_POST['tableNew'];
$sql = $_POST['sqlNew'];
$query = "SHOW COLUMNS FROM $table" ;
$quantity = $_POST['quantityNew']; 
$statement = $_POST['statementNew'];
$column = $_POST['columnNew'];
$value = $_POST['valueNew'];
$command = $_POST['commandNew'];
$Two = $_POST['twoNew'];


$result = mysqli_query($dbc, $query);




$numberOfRows = mysqli_num_rows($result);
if ($numberOfRows > 0) {

$values = mysqli_query($dbc, "$command $quantity $Two $table $statement $column $value");

echo "Αποτέλεσμα";

echo "<br><br>";



while ($rowr = mysqli_fetch_row($values)){
    for ($j=0;$j<$numberOfRows;$j++){
        print $csv_output = $rowr[$j].", ";
        }
    echo "<br>";
    }
}

else



echo "<br>";



exit;