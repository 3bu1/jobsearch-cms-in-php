   <div class="page-container headerBackground ">
    <div class="container-fluid">
      <div class="page-bg ">
        <div class="col-sm-4"><h2 ><a class="standardBlue" href="#"><img src="images/logo.jpg" width="50%" height="auto"/></a></h2></div>
         <div class="col-sm-8 text-right"><h2 ><form class="form-inline PB10" role="search">
        <div class="col-xs-8 col-sm-11 noPadding">
          <input type="text" class="form-control" placeholder="City">
        </div>
        <div class="col-xs-4 col-sm-1 noPadding"><button type="submit" class="btn btn-default">Submit</button></div>
      </form></h2></div>
      </div>
    </div>
  </div>
   
  
  
    


<nav class="navbar navbar-inverse noBorderRadius noBorder noMargin">
  <div class="container-fluid">
    <h2 class="noBorder noMargin"><div class="navbar-header pull-left">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
    </div></h2>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	
       <li class="active"> <a data-toggle="pill" href="#home">FILM JOBS</a></li>
        <li><a data-toggle="pill" href="#NEWS"   <?php if(isset($_SESSION['fullName'])){?> style="cursor:not-allowed" <?php } ?> >NEWS</a></li>
        <li><a data-toggle="pill" href="#PHOTOGRAPHY">PHOTOGRAPHY</a></li>
        <!--<li><a data-toggle="pill" href="#INSTRUMENTS">RENT A CAMERA</a></li>-->
        <li><a data-toggle="pill" href="#WHYUS"  <?php if(isset($_SESSION['fullName'])){?> style="cursor:not-allowed"<?php } ?>>WHY US</a></li>
        <li><a data-toggle="pill" href="#CONTACT"  <?php if(isset($_SESSION['fullName'])){?> style="cursor:not-allowed"<?php } ?>>CONTACT US</a></li>
     
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><?php if(isset($_SESSION['fullName'])){?> <a href="index.php" id="myBtn"class=" dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> MyAccount</a>
<ul class="dropdown-menu">
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li> 
          </ul>
		<?php }else{?><a href="#" id="myBtn"><span class="glyphicon glyphicon-user"></span> Login</a><?php } ?></li>
        <li><a href="#" class="myBtnreg"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
      </ul>
    </div>
  </div>
</nav>
