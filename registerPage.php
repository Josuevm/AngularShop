<?php
session_start();
$_SESSION['pickup'] = null;
$_SESSION['pickupDate']= null;
$_SESSION['pickupHour'] = null;
$_SESSION['returnDiferentLocation'] = null;
$_SESSION['returndate'] = null;
$_SESSION['returnHour'] = null;
$_SESSION['reservation'] = null;
$_SESSION['fname'] = null;
$_SESSION['lname']= null;
$_SESSION['email'] = null;
$_SESSION['pnumber'] = null;

?>

<html>
	<head>
		<title>My Shop - Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="mainJavaScript.js" type="text/javascript"></script>
        <script src="https://www.w3schools.com/lib/w3data.js"></script>
        <script src="validate.js"></script>
        <script src="cars.js"></script>

        <script
                src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="myshop.css">
        
        !-- AngularJS --!
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.js"></script>
	</head>
	<body>
		!--Header--!
        <div class="container">
            <div class="row">
               <?php
          		include("header.php");
        		?>
            </div>
        </div>
        
        <div class="container">
            <div class="row" id="spaceRow">
            </div>
        </div>
        
        <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="">
                <div class="">
                    	<h2 class="text-center">Create an Account</h2>

                </div>
                <div class="panel-body">
                 
                    <fieldset>
                      	<div class="form-group">
                            <input class="form-control input-lg" placeholder="Username" name="username" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control input-lg" placeholder="E-mail Address" name="email" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control input-lg" placeholder="Password" name="password" value="" type="password">
                        </div>
                        <div class="form-group">
                            <input class="form-control input-lg" placeholder="Confirm Password" name="password" value="" type="password">
                        </div>
                        
                        <input class="btn btn-lg btn-primary btn-block" value="Register" type="submit">
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>
		
		
		
		<div class="container">
        <div class="row" id="spaceRow">
        </div>
    </div>
    <?php
      include("footer.php");
    ?>
    
    
    <script>
        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();
        });

        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').focus()
        })
    </script>

	<script  src="register.js"></script>
   <script  src="log.js"></script>

   <script>
	   $('#login-nav input[type=text]').on('change invalid', function() {
    var textfield = $(this).get(0);


    textfield.setCustomValidity('');

    if (!textfield.validity.valid) {
      textfield.setCustomValidity('Please complete this field');
    }
});
		</script>

   <script>
	   $('#normalform input[type=text]').on('change invalid', function() {
    var textfield = $(this).get(0);

    textfield.setCustomValidity('');

    if (!textfield.validity.valid) {
      textfield.setCustomValidity('Please complete this field');
    }
});
		</script>
   <script>
		$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });</script>
	</body>
</html>