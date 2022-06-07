<?php

include 'dbInsertConnection.php';

$sql="DELETE FROM CLINIC WHERE Clnc_Name =('$_POST[Clnc_Name]')";


include 'deleteClinicSuccess.php';

?>