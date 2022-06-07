function validateForm(){
	var vname=document.getElementById("formClnc_Name");
	var namesize=vname.value.length;
	
	var area=document.getElementById("formClnc_Area").value;
	var vadress=document.getElementById("formClnc_Area");
	
	var vtel=document.getElementById("formClnc_Tel");
	var telsize=vtel.value.length;
	
	var vsprvzr=document.getElementById("formClnc_Supervzr");
	var sprvzrsize=vsprvzr.value.length;
	
		var vpat=document.getElementById("formNo_Of_Patients");
	var patsize=vpat.value.length;
	
		if (namesize===0) {
		alert("Δεν ορίσατε ονοματεπώνυμό. ");
			vname.focus();
			return false;
		}
		if (namesize==1) {
		alert("Το ονοματεπώνυμό σας δεν μπορεί να αποτελείται από μόνο 1 χαρακτήρα");
		vname.focus();
		return false;}

	
		if (area==="") {
		alert("Δεν ορίσατε διεύθυνση.");
		vadress.focus();
		return false;	
		}
	
		if (telsize===0) {
		alert("Δεν ορίσατε τηλέφωνο. ");
		vtel.focus();
		return false;
		}
		
	
		
		if (telsize<8) {
		alert("Το τηλέφωνο σας δεν μπορεί είναι μικρότερο από 10");
		vtel.focus();
		return false;}
			

	
			
		if (sprvzrsize===0) {
		alert("Δεν ορίσατε υπεύθυνο. ");
			vsprvzr.focus();
			return false;
		}
		
			if (patsize<0) {
		alert("Αρνητικοί αριθμοί δεν είναι αποδεκτοί ");
			vpat.focus();
			return false;
		}
		
		
		
		
        
	
	return true;		
		

}

