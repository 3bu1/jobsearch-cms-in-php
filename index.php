<!DOCTYPE html>
<html lang="en">
<head>
  <title>25thCraft</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery-1.11.1.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
function msieversion() {
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");

            if (parseInt(ua.substring(msie + 5, ua.indexOf(".", msie))) > 0)      // If Internet Explorer, return version number
                //alert("Best Viewd in Google chrome and IE 8+");
            
            return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)));
        }

if ( msieversion() <= 9 )
	alert("Please open in Chrome, Firefox or Internet Explorer 9 and above to access complete functionality")
     // document.write ( "This is Internet Explorer "+msieversion() );
</script>
<?php 
if(isset($_POST['blabkey'])=='blabla'){
	//echo isset($_POST['registerEmail'])."####";
include_once('database/Insert.php');
		include_once('database/Select.php');
$getAlpha = new Select;
		$companydetails = array();
		$companydetails = $getAlpha->selectWhere("username", "email", $_POST['registerEmail']);
		//print_r($companydetails);
		echo json_encode($companydetails);
		//$companydetails = json_encode(array('item' => $companydetails));
		//echo $companydetails;
}
?>

<link rel="stylesheet" id="apt-style-css" href="css/style.css" type="text/css" media="all">
  
</head>
<body>

<div class="container-fluid noMargin noPadding">
  <div class="row content noMargin">
  
   <div class="page-container headerBackground ">
    <div class="container-fluid">
      <div class="page-bg ">
        <div class="col-sm-4"><h2 ><a class="standardBlue" href="#">25thCraft.com</a></h2></div>
         <div class="col-sm-8 text-right"><h2 ><form class="form-inline PB10" role="search">
        <div class="col-xs-8 col-sm-11 noPadding">
          <input type="text" class="form-control" placeholder="Skill/City/Rental Instruments">
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
        <li><a data-toggle="pill" href="#NEWS">NEWS</a></li>
        <!--<li><a data-toggle="pill" href="#PHOTOGRAPHY">PHOTOGRAPHY</a></li>-->
        <!--<li><a data-toggle="pill" href="#INSTRUMENTS">RENT A CAMERA</a></li>-->
        <li><a data-toggle="pill" href="#WHYUS">WHY US</a></li>
        <li><a data-toggle="pill" href="#CONTACT">CONTACT US</a></li>
     
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" id="myBtn"><span class="glyphicon glyphicon-user"></span> Login</a></li>
        <li><a href="#" class="myBtnreg"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="noPadding noMargin contentPanel tab-content" id="mainPanel">


<div class="tab-pane fade in active" id="home">
    <div class="col-sm-6 col-md-8 noMargin noPadding hidden-xs">
     <div class="col-sm-12 noMargin noPadding tab-pane fade in active" id="home"><img src="images/DecisionMakers.jpg"  width"100%" height="auto"></div>
         </div>
    
    <div class="col-sm-6 col-md-4 sidenav ">
    <div class="contentPanel">
     <div id="home" class="MT20 ">
     <p class="contR col-sm-6 noPadding">Search by Craft</p>
     <ul class="list-group col-sm-6  noPadding">
  <li class="list-group-item"><a href="">DIRECTION DEPARTMENT<span class="badge">(1200+)</span> </a></li>
  <li class="list-group-item"><a href="">EDITING DEPARTMENT<span class="badge">(544+)</span> </a></li> 
  <li class="list-group-item"><a href="">EXIBHITOR<span class="badge">(320+)</span> </a></li> 
  <li class="list-group-item"><a href="">FIELD PUBLICITY<span class="badge">(1200+)</span> </a></li>
  <li class="list-group-item"><a href="">FILM DISTIBUTOR <span class="badge">(544+)</span> </a></li> 
  <li class="list-group-item"><a href="">FILM PROCESSING LAB<span class="badge">(320+)</span> </a></li> 
  <li class="list-group-item"><a href="">MAKE UP DEPARTMENT<span class="badge">(1200+)</span> </a></li>
  <li class="list-group-item"><a href="">MEDIA PUBLICITY<span class="badge">(544+)</span> </a></li> 
  <li class="list-group-item"><a href="">MUSIC DEPARTMENT<span class="badge">(320+)</span> </a></li> 
  <li class="list-group-item"><a href="">OUTDOOR UNIT<span class="badge">(1200+)</span> </a></li>
  <li class="list-group-item"><a href="">PROCESSING LAB<span class="badge">(544+)</span> </a></li> 
  <li class="list-group-item"><a href="">PUBLICITY DESIGNER<span class="badge">(320+)</span> </a></li> 
   <li class="list-group-item"><a href="">COSTUME <br>
DEPARTMENT <span class="badge">(443+)</span></a></li> 
</ul>
<ul class="list-group col-sm-6  noPadding">
  <li class="list-group-item"><a href="">PRODUCER <span class="badge">(1113+)</span>  </a></li>
  <li class="list-group-item"><a href="">SETS AND LOCATIONS <span class="badge">(1315+)</span>  </a></li> 
  <li class="list-group-item"><a href="">SOUND/MIXING <br>
DEPARTMENT <span class="badge">(1113+)</span>  </a></li> 
    <li class="list-group-item"><a href="">STILL DEPARTMENT <span class="badge">(1113+)</span>  </a></li>
  <li class="list-group-item"><a href="">STORY DEPARTMENT <span class="badge">(1553+)</span>  </a></li> 
  <li class="list-group-item"><a href="">STUNT/FIGHT <br>
DEPARTMENT <span class="badge">(1113+)</span>  </a></li> 
    <li class="list-group-item"><a href="">ADMINISTRATIVE <br>
DEPARTMENT <span class="badge">(123+)</span>  </a></li>
  <li class="list-group-item"><a href="">ART DEPARTMENT <span class="badge">(1333+)</span>  </a></li> 
  <li class="list-group-item"><a href="">ARTISTS <span class="badge">(311+)</span>  </a></li> 
    <li class="list-group-item"><a href="">CHOREOGRAPHER <span class="badge">(213+)</span>  </a></li>
  <li class="list-group-item"><a href="">CINEMATOGRAPHER <span class="badge">(1008+)</span>  </a></li> 
 
</ul>
    </div>
    
      </div>
      </div>
    </div>
    <div class="tab-pane fade in" id="NEWS">
    <div class="col-sm-6 col-md-8 noMargin noPadding hidden-xs">
     <div class="col-sm-12 noMargin noPadding" ><img src="images/ContractsDatabase.jpg"  width"100%" height="auto"></div>
         </div>
    
    <div class="col-sm-6 col-md-4 sidenav ">
    <div class="contentPanel">
     <div id="home" class="MT20">
      <p class="contR col-sm-5 noPadding">FILM NEWS</p>
     <div class="MT20">
     <h4><a href="">Powerstar Meets Cricket Star</a></h4>
     <p>Here's a memorable moment of two stars from two entirely different professional worlds meeting each other and exchanging pleasantries.</p>
     </div>
     <div class="MT20">
     <h4><a href="">Manchu Lakshmi For Angry Indian Goddesses</a></h4>
     <p>We don't see Indian goddesses or any particular goddess getting angry on people or anyone, but right now Manchu Lakshmi is showing those goddesses to her friends and other fraternity from Telugu Film Industry.</p>
     </div>
     <div class="MT20">
     <h4><a href="">One Flop Lead Him Into Title Confusion</a></h4>
     <p>Hype and hoopla around title always wins first day audiences and any slight disappointment in content leads to disastrous results. Hero Ram is right now struck in the web of confusion, when it comes to naming his next film.</p>
     </div>
     
    </div>
    
      </div>
      </div>
    </div>
    <div class="tab-pane fade in" id="WHYUS">
    <div class="col-sm-6 col-md-8 noMargin noPadding hidden-xs">
     <div class="col-sm-12 noMargin noPadding" ><img src="images/whyus.jpg"  width"100%" height="auto"></div>
         </div>
    
    <div class="col-sm-6 col-md-4 sidenav ">
    <div class="contentPanel">
     <div id="home" class="MT20">
      <p class="contR col-sm-5 noPadding">WHO WE ARE</p>
     
     <div class="MT20">
<p>     25thcraft is a global community — and so is our staff. We're headquartered in <strong>HYDERABAD</strong> and <strong>BANGALORE</strong>, but the collaborative and global nature of our work means we have staffers, advisors and volunteers worldwide.</p>
<div class="MT20">
     <h4><a href="">Our organization</a></h4>
     <p>Our mission, history, team, and more</p>
     </div>
     <div class="MT20">
     <h4><a href="">Programs & Initiatives</a></h4>
     <p>Details about 25thcraft's world-changing initiatives</p>
     </div>
     <div class="MT20">
     <h4><a href="">Our partners</a></h4>
     <p>Learn how you can partner with us</p>
     </div>
     <div class="MT20">
     <h4><a href="">25thcraft Blog</a></h4>
     <p>Updates from 25thcraft and highlights from our global community</p>
     </div>
     </div>
     
    </div>
    
      </div>
      </div>
    </div>
    <div class="tab-pane fade in" id="CONTACT">
    <div class="col-sm-6 col-md-8 noMargin noPadding hidden-xs">
     <div class="col-sm-12 noMargin noPadding" ><img src="images/contact-us.jpg"  width"100%" height="auto"></div>
         </div>
    
    <div class="col-sm-6 col-md-4 sidenav ">
    <div class="contentPanel">
     <div id="home" class="MT20">
      <p class="contR col-sm-5 noPadding">CONTACT US</p>
     
     <div class="MT20">
<form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Name">Name:</label>
    <div class="col-sm-10"> 
      <input type="Text" class="form-control" id="Name" placeholder="Your Name">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="Name">Message:</label>
    <div class="col-sm-10"> 
    <textarea class="form-control" placeholder="Type Your Message Here"></textarea>
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
<div class="MT20">
     <h4><a href="">Headquarters</a></h4>
     <p>25thcraft,250 Hudson St.,Suite 1002,New York, NY 10013</p>
     </div>
     <div><div class="MT20 col-sm-6 noPadding">
     <h4><a href="">E-mail</a></h4>
     <p>sales@25thcraft.com</p>
     <p>contact@25thcraft.com</p>
    
     </div>
     <div class="MT20  col-sm-6 noPadding">
     <h4><a href="">Call Us </a></h4>
     <p>Tel: +917760808111</p>
<p>Fax: 212.227.6395</p>
     </div></div>
     
     </div>
     
    </div>
    
      </div>
      </div>
    </div>
    </div>
  </div>
  </div>
</div>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog " >
    
      <!-- Modal content-->
      <div class="modal-content col-sm-12 noPadding floatNone">
        <div class="modal-header" style="padding:15px 20px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body col-sm-7" style="padding:10px 20px;">
          <form role="form" class="form-inline">
            <div class="form-group MT20">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group MT20">
              <label for="psw"><span class="glyphicon glyphicon-eye-close"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password">
            </div>
<div class="clearfix MT20"></div>
            <div class="checkbox  ">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-default standardBlueBackground noBorder"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-body col-sm-5" style="padding:10px 20px;">
          <form role="form" class="form-inline">
            <div class="form-group MT20">
              
            <img src="images/sign-in-facebook.png" width="95%" height="auto" style="margin-left:5px;"> </div>
            <div class="form-group MT20">
              
            <img src="images/sign-in-with-google.png" width="100%" height="auto"> </div><br>

            
              
          </form>
        </div>
<div class="clearfix"></div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
   <div class="modal fade col-sm-12" id="myModalReg" role="dialog">
    
    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content col-sm-10">
          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Register with 25thcraft.com</h4>
              <p>Please Register to get connect with 20000+ jobs across india.
                You will instantly receive hundreds of passionate job post,  
                or go back to our <a href="./index.php">main site</a>.</p>
            </div>
          
            <div class="modal-body">
              		<form action="#" method="post" class='form-horizontal' id="userformsubmit">


  
 

          <div class='form-group MT10'>
<div class="col-xs-12">
    <label class='control-label'  for='fullName'>Full Name:</label>

    <div class='input-group'>

      <input type='text' class='form-control' id='fullName' placeholder='Full Name' required >
<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
    </div>
</div>
  </div>

  
    <div class='form-group MT10'>
<div class="col-xs-12">
    <label class='text-capitalize' for='email' >Email:</label>

    <div class='input-group'>

      <input type='email' class='form-control' id='registerEmail' placeholder='email' required >
<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
    </div>
</div>
  </div>

  
   

  
    <div class='form-group MT10'>
<div class="col-xs-12">
    <label class='text-capitalize' for='password'>Password:</label>

    <div class='input-group'>

      <input type='password' class='form-control' id='password' placeholder='password' required >
<span class="input-group-addon"><span class="glyphicon glyphicon-eye-close"></span></span>
    </div>
</div>
  </div>


  
    <div class='form-group MT10'>
<div class="col-xs-12">
    <label class='text-capitalize' for='city'>city:</label>

    <div class='input-group'>

      <input type='text' class='form-control' id='city' placeholder='city' required >
<span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
    </div>
</div>
  </div>

   
                
    <div class='form-group MT10'>

 <div class="col-xs-12">
                        <label for="InputProvince">Telephone*</label>
                        <div class="input-group">
                        <input type="tel" class="form-control" id='phoneNumber'  placeholder="Enter Telephone" required >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span> 
                    </div>
    
</div>
  </div>
  <div class='form-group MT20'>      
  
      <div class='col-sm-offset-2 col-sm-10'>

        <button type='submit'  class="btn btn-success pull-right" id='usernamesubmit' >Submit</button>

      </div>

    </div>
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3' for='usernameid'></label>

    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='usernameid' placeholder='usernameid' >

    </div>

  </div>

       <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3' for='id'></label>

    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='id' placeholder='id'>

    </div>

  </div>  
 <div class='form-group'>



    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='dob' placeholder='dob'>

    </div>

  </div>
  
    <div class='form-group'>



    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='currentTime' placeholder='currentTime' >

    </div>

  </div>

  
    <div class='form-group'>

  

    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='profilePicture' placeholder='profilePicture'>

    </div>

  </div>

  
    <div class='form-group'>



    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='fullAddress' placeholder='fullAddress'>

    </div>

  </div>
  
    <div class='form-group'>



    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='personalWebsite' placeholder='personalWebsite' >

    </div>

  </div>

  
    <div class='form-group'>



    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='languages' placeholder='languages'>

    </div>

  </div>

  
    <div class='form-group'>



    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='insearchofjob' placeholder='insearchofjob'>

    </div>

  </div>

  
    <div class='form-group'>



    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='experianceid' placeholder='experianceid'>

    </div>

  </div>

  
    <div class='form-group'>



    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='galleryid' placeholder='galleryid'>

    </div>

  </div>

  
    <div class='form-group'>



    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='skillid' placeholder='skillid'>

    </div>

  </div>

  
  

 
 



                </form>

	<script>
$(document).ready(function(){
$('#userformsubmit').submit(function(event){
	
	  
	  usernameid=$('#usernameid').val();
id=$('#id').val();
fullName=$('#fullName').val();

registerEmail = $('#registerEmail').val();
dob=$('#dob').val();
password=$('#password').val();
currentTime=$('#currentTime').val();
profilePicture=$('#profilePicture').val();
fullAddress=$('#fullAddress').val();
city=$('#city').val();
phoneNumber=$('#phoneNumber').val();
personalWebsite=$('#personalWebsite').val();
languages=$('#languages').val();
insearchofjob=$('#insearchofjob').val();
experianceid=$('#experianceid').val();
galleryid=$('#galleryid').val();
skillid=$('#skillid').val();

	  // alert(address);
	 $.post('usernameInsertForm.php',
	{
		 usernameid : usernameid,
id : id,fullName : fullName,
email : registerEmail,
dob : dob,
password : password,
currentTime : currentTime,
profilePicture : profilePicture,
fullAddress : fullAddress,
city : city,
phoneNumber : phoneNumber,
personalWebsite : personalWebsite,
languages : languages,
insearchofjob : insearchofjob,
experianceid : experianceid,
galleryid : galleryid,
skillid : skillid,
submit:'submit',
		 
	}
	,function(data,status){
		alert('succsessfully Inserted');
		
		});  }); 
		
		$("#registerEmail").change(function(){
			
			registerEmail = $('#registerEmail').val();
			alert(registerEmail);
			$.post('index.php',
	{
		 blabkey : 'blabla',
registerEmail : registerEmail,

}
	,function(data,status){
		alert(data.item);
		var obj = jQuery.parseJSON(data.item);
		alert(obj.fullName);
		}); 
		});
		
		});

  </script>
            
                
              </div><!---modal-body--->
          </div>
       </div>

  </div>
<div id="footer" class="container ">
    <nav class="navbar navbar-default navbar-fixed-bottom navBarLineHeight ">
        <div class="navbar-inner navbar-content-center">
          <p class="col-md-6  noMargin  text-left" >20<?php echo date("y"); ?> &copy; 25thcraft.com</p>
  <p class="col-md-6 text-right noMargin " >Powered By: <a href="thejointservices.com" style="color:#FFF">TheJointServices.com</a></p>

        </div>
    </nav>
</div>
</body>
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
	$(".myBtnreg").click(function(){
        $("#myModalReg").modal();
    });
	
});
</script>
</html>
