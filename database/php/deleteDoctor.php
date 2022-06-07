<?php

include 'dbInsertConnection.php';

$sql="DELETE FROM DOCTOR WHERE Dr_Reg_No =('$_POST[Dr_Reg_No]')";


include 'deleteDoctorSuccess.php';

?>