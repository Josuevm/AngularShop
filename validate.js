function validatePUFORM(){
	
	
	
	
	var pickupA = document.getElementById('pickup').value;
	var pickdate = document.getElementById('pickdate').value;
	var returndate = document.getElementById('returndate').value;
	
	var xhr = new XMLHttpRequest();

      xhr.open("POST", "validatePUForm.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhr.onreadystatechange = function (){
                    if(xhr.readyState === 4 && xhr.status === 200){
                        var data = xhr.responseText;
						renderHTML(data);
						alert(data);
                       }
                } 
	 xhr.send("pickdate="+pickdate+"&returndate="+returndate);
	
		
	
}

function renderHTML(data){
    var htmlstring = "<div id='subError' class='alert alert-danger' style='height:20px;'> <p style='display: flex;margin: 0 auto;'>"+data+"</p></div>";
    document.getElementById("errorDiv").insertAdjacentHTML("beforeend", htmlstring);
}

function validateDate(){
	
}

function validateEmpty(){
	
}

function validateEmail(str){
	var pattern = "^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$";
	alert(str.match(pattern));
	if(str.match(pattern)){
	   	alert("c mamó"); 
	   }else{
		   alert("no c mamó"); 
	   }
	
   
}

function validatePass(){
	
}