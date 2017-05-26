

function register() {
                var Rusername = document.getElementById("Rusername").value;
                var Remail = document.getElementById("Remail").value;
				var Rpass = document.getElementById("Rpass").value;
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "register.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                
				xhr.send("Rusername="+Rusername+"&Remail="+Remail+"&Rpass="+Rpass);
            }