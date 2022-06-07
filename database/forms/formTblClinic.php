<!DOCTYPE html>
<html>

<head> 

<title> hospital </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"
href="css/hospital.css" />

<script src="js/clinicsCheck.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/grey.js"></script>
<link rel="shortcut icon" type="image/png" href="favicon.png"/>

</head>


<body> 



<div class="box"><h1>Εγγραφή</h1>


<form name="reg_form" action="php/insertTblClinic.php" onSubmit="return validateForm()" method="post">   

<div class="formtext">Δώστε το ονομα της κλινικής:<br></div>
<div><input id="formClnc_Name" name="formClnc_Name" type="text" placeholder="ονομα κλινικής"> 
</div><br><br>
 

<div class="formtext">Δώστε την περιοχή της κλινικής:<br></div>
<div><input id="formClnc_Area" name="formClnc_Area" type="text" placeholder="formClnc_Area"> <br><br>

<div class="formtext">Δώστε το τηλέφωνο:<br></div>
<div><input id="formClnc_Tel" name="formClnc_Tel" type="text" placeholder="formClnc_Tel"> <br><br>

<div class="formtext">Υπεύθυνος:<br></div>
<div><input id="formClnc_Supervzr" name="formClnc_Supervzr" type="text" placeholder="formClnc_Supervzr"> <br><br>

<div class="formtext">Αριθμό ασθενών:<br></div>
<div><input id="formNo_Of_Patients" name="formNo_Of_Patients" type="text" placeholder="formNo_Of_Patients"> <br><br>




<input type="submit" value="Υποβολή" >
</form>
</div>
</body>
</html>