<?php

include 'dbInsertConnection.php';

$sql="INSERT INTO CLINIC (Clnc_Name, Clnc_Area, Clnc_Tel, Clnc_Supervzr, No_Of_Patients) VALUES
('$_POST[formClnc_Name]', '$_POST[formClnc_Area]', '$_POST[formClnc_Tel]','$_POST[formClnc_Supervzr]','$_POST[formNo_Of_Patients]')";


include 'deleteClinicSuccess.php';



?>


