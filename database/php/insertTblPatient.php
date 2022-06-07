<?php

include 'dbInsertConnection.php';

$sql="INSERT INTO PATIENT (Pat_sName, Pat_fName, BirtDate, AMKA, TEL, Addr_Road, Addr_No, Addr_City) VALUES
('$_POST[formPat_sName]', '$_POST[formPat_fName]', '$_POST[formBirthDate]','$_POST[formAMKA]','$_POST[formTEL]','$_POST[formAddr_Road]','$_POST[formAddr_No]','$_POST[formAddr_City]')";

include 'deletePatientSuccess.php';

?>


