<!DOCTYPE html>
<head>
<title>25thCraft</title>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="Resources/css/style.css">
<link type="text/css" rel="stylesheet"  href="Resources/css/responsive.css" />
<link type="text/css" rel="stylesheet"  href="Resources/css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css"
	href="Resources/css/bootstrap.min.css">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>
 <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

 
</head>
<body class="bgimage">
<div class="topspace"></div>
		
		<?php 
        include('externallink.php');

include('database/Insert.php');

include('database/update.php');

  $individualDetails = array();
  $getAlpha = new Select;

  if(isset($_GET['usernameid'])){

  $individualDetails = $getAlpha->selectWhere("username","usernameid", $_GET['usernameid']);

  }
if(isset($_POST['submit'])){


	
		$valuearry = array(htmlspecialchars($_POST['usernameid']),htmlspecialchars($_POST['id']),htmlspecialchars($_POST['fullName']),htmlspecialchars($_POST['email']),htmlspecialchars($_POST['dob']),htmlspecialchars($_POST['password']),htmlspecialchars($_POST['currentTime']),htmlspecialchars($_POST['profilePicture']),htmlspecialchars($_POST['fullAddress']),htmlspecialchars($_POST['city']),htmlspecialchars($_POST['phoneNumber']),htmlspecialchars($_POST['personalWebsite']),htmlspecialchars($_POST['languages']),htmlspecialchars($_POST['insearchofjob']),htmlspecialchars($_POST['experianceid']),htmlspecialchars($_POST['galleryid']),htmlspecialchars($_POST['skillid']));

        $updateobj = new update;
            
		$updateobj->updateAll("username","usernameid",$_POST['usernameid'], $valuearry);}?></head>
<body>
    <!-- start of navigation bar --> 
	
	
	<nav class="navbar navbar-default container navbar-inverse">
		<div class="container-fluid">
		
		
			<div class="navbar-header pull-left">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnavbar" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        
      </button>
      </div>
     
      
    
			
			
				<div class="collapse navbar-collapse" id="mainnavbar" aria-expanded="false">
				<ul class="nav navbar-nav">
					<li><a data-toggle="pill" href="Alljobs.html">All Jobs</a></li>
					<li><a data-toggle="pill" href="iitmjobs.html">IIT/IIM Jobs</a></li>
					<li><a data-toggle="pill" href="govtjobs.html">Govt. Jobs</a></li>
					<li><a data-toggle="pill" href="intjobs.html">International Jobs</a></li>
				</ul>
				</div>
			</div>
		
	</nav>
	
	
<!-- end of navigation bar --> 
    <div class="container">
<div class="row">
    <div  class="col-md-3 col-sm-12 col-xs-12" style="margin-top:20px;">
        <div class="right-nav right-nav-sp refine">
         <?php include("rightNav.php"); ?>
        </div>
    </div>
    
    <div class="col-md-6 col-sm-12 col-xs-12 xspt bodyFont">
        <div class="middle-content">
				

        <form action="usernameupdateForm.php" method="post" class='form-horizontal' id="userUpdate-form" novalidate="novalidate">

  <h2 class='text-capitalize userForm'>username Update Form</h2>
 <div class='form-group userM'>

 
      <input type='hidden' class='form-control' id='usernameid' placeholder='usernameid' value='<?php echo $individualDetails[0]['usernameid'] ?>'>



 

      <input type='hidden' class='form-control' id='id' placeholder='id' value='<?php echo $individualDetails[0]['id'] ?>'>

 

          <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 col-xs-12 text-capitalize' for='fullName' required >Full Name:</label>

    <div class='col-sm-10 col-md-6 col-xs-12'>

      <input type='text' class='form-control' id='fullName' placeholder='fullName'  value='<?php echo $individualDetails[0]['fullName'] ?>'>

    </div>

  </div>

  
    <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 text-capitalize' for='email'>Email:</label>

    <div class='col-sm-10 col-md-6'>
	
      <input type='text' class='form-control' id='email' placeholder='email'  value='<?php echo $individualDetails[0]['email'] ?>'>

    </div>

  </div>

  
    <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 text-capitalize' for='dob'>DOB:</label>

    <div class='col-sm-10 col-md-6'>
		
      <input type='text' class='form-control' id='dob'  placeholder='dob' value='<?php echo $individualDetails[0]['dob'] ?>'>

    </div>

  </div>

  
    <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 text-capitalize' for='password'>password:</label>

    <div class='col-sm-10 col-md-6'>

      <input type='password' class='form-control'  id='password' placeholder='password' value='<?php echo $individualDetails[0]['password'] ?>'>

    </div>

  </div>

  

      <input type='hidden' class='form-control' id='currentTime' placeholder='currentTime' value='<?php echo $individualDetails[0]['currentTime'] ?>'>

  


      <input type='hidden' class='form-control' id='profilePicture' placeholder='profilePicture' value='<?php echo $individualDetails[0]['profilePicture'] ?>'>


  
    <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 text-capitalize' for='fullAddress'>full Address:</label>

    <div class='col-sm-10 col-md-6'>

      <input type='text' class='form-control'  id='fullAddress' placeholder='fullAddress' value='<?php echo $individualDetails[0]['fullAddress'] ?>'>

    </div>

  </div>

  
    <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 text-capitalize' for='city'>city:</label>

    <div class='col-sm-10 col-md-6'>

      <input type='text' class='form-control'  id='city' placeholder='city' value='<?php echo $individualDetails[0]['city'] ?>'>

    </div>

  </div>

  
    <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 text-capitalize' for='phoneNumber'>phone Number:</label>

    <div class='col-sm-10 col-md-6'>

      <input type='text' class='form-control' id='phoneNumber' placeholder='phoneNumber' value='<?php echo $individualDetails[0]['phoneNumber'] ?>'>

    </div>

  </div>

  
    <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 text-capitalize' for='personalWebsite'>personal Website:</label>

    <div class='col-sm-10 col-md-6'>

      <input type='text' class='form-control'  id='personalWebsite' placeholder='personalWebsite' value='<?php echo $individualDetails[0]['personalWebsite'] ?>'>

    </div>

  </div>

  
    <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 text-capitalize' for='languages'>languages:</label>

    <div class='col-sm-10 col-md-6'>

      <input type='text' class='form-control' id='languages' placeholder='languages' value='<?php echo $individualDetails[0]['languages'] ?>'>

    </div>

  </div>

  
    <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 text-capitalize' for='insearchofjob'>insearch of job:</label>

    <div class='col-sm-10 col-md-6'>

      <input type='radio' name="insearchofjob" id='insearchofjob' placeholder='insearchofjob' checked <?php if($individualDetails[0]['insearchofjob'] == '1'){echo "checked";} ?> value='1'>Yes
      <input type='radio' name="insearchofjob" id='insearchofjob' placeholder='insearchofjob' <?php if($individualDetails[0]['insearchofjob'] == '0'){echo "checked";} ?> value='0'>No

    </div>

  </div>

  



      <input type='hidden' class='form-control' id='experianceid' placeholder='experianceid' value='<?php echo $individualDetails[0]['experianceid'] ?>'>



  

      <input type='hidden' class='form-control' id='galleryid' placeholder='galleryid' value='<?php echo $individualDetails[0]['galleryid'] ?>'>




      <input type='hidden' class='form-control' id='skillid' placeholder='skillid' value='<?php echo $individualDetails[0]['skillid'] ?>'>



  
  

 
 <div class='form-group userM'>      
  
      <div class='col-sm-offset-2 col-sm-10'>

        <button type='submit' class='btn btn-primary' id='usernamesubmit' >Submit</button>

      </div>

    </div>

</div>
     </form>
    
    </div>
    </div>
    </div>
    </div>

		<script>
$(document).ready(function(){
$('#usernamesubmit').click(function(event){
	  event.preventDefault();
	  
	  usernameid=$('#usernameid').val();
id=$('#id').val();
fullName=$('#fullName').val();
email=$('#email').val();
dob=$('#dob').val();
password=$('#password').val();
currentTime=$('#currentTime').val();
profilePicture=$('#profilePicture').val();
fullAddress=$('#fullAddress').val();
city=$('#city').val();
phoneNumber=$('#phoneNumber').val();
personalWebsite=$('#personalWebsite').val();
languages=$('#languages').val();
insearchofjob=$('#insearchofjob:checked').val();
alert(insearchofjob);
experianceid=$('#experianceid').val();
galleryid=$('#galleryid').val();
skillid=$('#skillid').val();

	  // alert(address);
	 $.post('usernameupdateForm.php',
	{
		 usernameid : usernameid,
id : id,fullName : fullName,
email : email,
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
			alert('succsessfully Updated'+data);
		
		});  }); });
		
		
		 $(function() {
			  $("#userUpdate-form").validate({
    
        // Specify the validation rules
        rules: {
            fullName: "required",
            email: {
                required: true,
                email: true
            },
			dob:"required",
            password: {
                required: true,
                minlength: 5
            },
            fullAddress:"required",
			city:"required",
			phoneNumber:"required",
			languages:"required",
			
        },
        
        // Specify the validation error messages
        messages: {
            fullName: "Please enter your full name",
            email: "Please enter a valid email address",
			dob: "please enter your date of birth",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
            },
            fullAddress: "please enter your address",
			city: "please enter your city",
			phoneNumber: "please enter your phone number",
			
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
		
		
		
		

 function initialize() {
  var options = {
  types: ['(cities)'],
  componentRestrictions: {country: "in"}
 };

 var input = document.getElementById('city');
 var autocomplete = new google.maps.places.Autocomplete(input, options);
   }
   google.maps.event.addDomListener(window, 'load', initialize);
</script>
		</body>
</html>
