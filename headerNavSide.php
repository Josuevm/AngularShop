<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
				<li><a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Categories </a>
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
            	
             	<li><a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Cart</a></li>
               <?php
							   if(isset($_SESSION['username'])){
							   ?>
				<li><a href="#"><?php echo $_SESSION['username']; ?></a></li>
                           <?php
							   }else{?>
        <li><p class="navbar-text">Already have an account?</p></li>
        <?php
		  }?>
       <?php if(!isset($_SESSION['auth']) || $_SESSION['auth'] == "0" ||
									!isset($_SESSION['username'])){

									?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Login</a>
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
								New here ? <a href="#" data-toggle="modal" data-target="#registerModal"><b>Join Us</b></a>
							</div>
					 </div>
				</li>
			</ul>
        </li>
        <?php }else{?>
        <li><a href="logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Log Out</a></li>
        <?php } ?>
                
            </ul>
            <form class="navbar-form navbar-right" action="#" method="GET">
           		<div class="input-group">
              <div class="input-group-btn search-panel">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span id="search_concept">Filter by</span> <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#contains">Contains</a></li>
                    <li><a href="#its_equal">It's equal</a></li>
                    <li><a href="#greather_than">Greather than ></a></li>
                    <li><a href="#less_than">Less than </a></li>
                    <li class="divider"></li>
                    <li><a href="#all">Anything</a></li>
                  </ul>
              </div>
              <input type="hidden" name="search_param" value="all" id="search_param">
              <input type="text" class="form-control" name="x" placeholder="Search products...">
              <span class="input-group-btn">
                  <button class="btn btn-default" type="button" style="height: 34px;"><span class="glyphicon glyphicon-search"></span></button>
              </span>
          </div>
            </form>
        </div>
    </div>
</nav>

<div id="wrapper" class="toggled">
    <div class="container-fluid">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
              	<li class="sidebar-brand">
                    <br>
                </li>
                <li class="sidebar-brand">
                    <a href="#" class="navbar-brand">
                        <span class="glyphicon glyphicon-user" aria-hidden="true">
                        	<?php if(isset($_SESSION['username'])){
							?>
                         <?php echo '</span>   '. $_SESSION['username'].'</a>'
							?>
                    	
                    	<?php }else{ ?>
								</span> Profile
								</a>
							<?php }?>
                </li>
                <?php if(isset($_SESSION['username'])){
							?>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
                </li>
                 <li>
                    <a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> My Cart</a>
                </li>                
                
                <li>
                    <a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> WishList</a>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Payment Methods</a>
                </li>
                
                <li>
                    <a href="#"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Shippin Info</a>
                </li>
              	
                <?php }else{ ?>
                <?php }?>
            </ul>
        </div>