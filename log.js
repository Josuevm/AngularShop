var logDiv = document.getElementById("userlog");
function login(){
	var lusername = document.getElementById("lusername").value;
  	var lpass = document.getElementById("lpass").value;
	
	let xhr = new XMLHttpRequest();

      xhr.open("POST", "login.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

      xhr.send("lusername="+lusername+"&lpass="+lpass);
    
}
