
    <header lang="en">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<nav class="navbar navbar-default navbar-inverse" role="navigation" style="background-color: #232f3e;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img  src="../img/simplelogo.png" alt=""></a>

    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                        <li class="dropdown">
          					<a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th-list"></span> Categories </a>
						  <ul class="dropdown-menu" id="categories-dp">
							
							<li><a href="#">Electronics</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Clothes</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Home and Garden</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Toys</a></li>
							 <li role="separator" class="divider"></li>
							<li><a href="#">Books and Comics</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Sports</a></li>
						  </ul>
						</li>
                        <li><a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-fire"></span> Special Offers</a></li>
                    
                        
					  </ul>

      <ul class="nav navbar-nav navbar-right">
      <li>
                    <a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Cart</a>
                	</li> 
       <?php
							   if(isset($_SESSION['username'])){
							   ?>
		  <li><a href="#"><span class="glyphicon glyphicon-user" ></span> <?php echo $_SESSION['username']; ?></a></li>
                           <?php
							   }else{?>
        
        <?php
		  }?>
       <?php if(!isset($_SESSION['auth']) || $_SESSION['auth'] == "0" ||
									!isset($_SESSION['username'])){

									?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">

								 <form class="form" method="post" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Username</label>
											 <input type="text" class="form-control" id="lusername" placeholder="Username" required oninvalid="this.setCustomValidity('Please complete this field')"
    							oninput="setCustomValidity('')">
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="lpass" placeholder="Password" required oninvalid="this.setCustomValidity('Please complete this field')"
    							oninput="setCustomValidity('')">
                                             <div class="help-block text-right"><a href="" style="color:aliceblue;">Forget the password ?</a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block" onclick="login()">Sign in</button>
										</div>

								 </form>
							</div>
							<div class="bottom text-center">
								New here ? <a href="registerPage.php"><b>Join Us</b></a>
							</div>
					 </div>
				</li>
			</ul>
        </li>
        <?php }else{?>
        <a id="btnLog"  class="btn btn-primary btn-md float-right" role="button" href="logout.php"><p>Log Out </p></a>
        <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



                    !--Register Modal--!
                    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel" style="color: black">Register</h4>
                                </div>
                                <div class="modal-body">
                                    <form id="login-nav" method="post">
                                       <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">@</span>
                                            <input type="text" class="form-control" placeholder="E-mail"  id="Remail" required oninvalid="this.setCustomValidity('Please complete this field')"
    							oninput="setCustomValidity('')">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">@</span>
                                            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" id="Rusername" required oninvalid="this.setCustomValidity('Please complete this field')"
    							oninput="setCustomValidity('')">
                                        </div>
                                        <div class="input-group">
                                            <p style="color:black;">Password:</p>
                                            <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required oninvalid="this.setCustomValidity('Please complete this field')"
    							oninput="setCustomValidity('')">
                                        </div>
                                        <div class="input-group">
                                            <p style="color:black;">Re-enter password:</p>
                                            <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" id="Rpass" required oninvalid="this.setCustomValidity('Please complete this field')"
    							oninput="setCustomValidity('')"
                                            >
                                        </div>


                                    </form>
                                    <div id="listDiv">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary" onclick="register();" dismiss="modal" value="submit">
                                  Register</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </div>
                    </div>

	<script  src="register.js"></script>
</header>
