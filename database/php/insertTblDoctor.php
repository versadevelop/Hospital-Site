<?php

include 'dbInsertConnection.php';

$sql="INSERT INTO DOCTOR (Dr_sName, Dr_fName, Dr_Reg_Date, Dr_Srvc_Years, Specialty) VALUES
('$_POST[Dr_sName]', '$_POST[Dr_fName]', '$_POST[Dr_Reg_Date]','$_POST[Dr_Srvc_Years]','$_POST[Specialty]')";

include 'deleteDoctorSuccess.php';

?>


