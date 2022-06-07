<?php

include 'dbInsertConnection.php';

$sql="DELETE FROM PATIENT WHERE Pat_ID =('$_POST[Pat_ID]')";


include 'deletePatientSuccess.php';

?>