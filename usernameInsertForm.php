<!DOCTYPE html>
<head>
<title></title>

		
		<?php 
        include('externallink.php');

include('database/Insert.php');

if(isset($_POST['submit'])){

		$valuearry = array(htmlspecialchars($_POST['usernameid']),htmlspecialchars($_POST['id']),htmlspecialchars($_POST['fullName']),htmlspecialchars($_POST['email']),htmlspecialchars($_POST['dob']),htmlspecialchars($_POST['password']),htmlspecialchars($_POST['currentTime']),htmlspecialchars($_POST['profilePicture']),htmlspecialchars($_POST['fullAddress']),htmlspecialchars($_POST['city']),htmlspecialchars($_POST['phoneNumber']),htmlspecialchars($_POST['personalWebsite']),htmlspecialchars($_POST['languages']),htmlspecialchars($_POST['insearchofjob']),htmlspecialchars($_POST['experianceid']),htmlspecialchars($_POST['galleryid']),htmlspecialchars($_POST['skillid']));

		Insertrow("username",$valuearry);}?>
		
		</head>
<body>

		<form action="usernameInsertForm.php" method="post" class='form-horizontal'>

<div class='container'>
  <h2 class='text-capitalize'>username Form</h2>


      <input type='hidden' class='form-control' id='usernameid' placeholder='usernameid' >

      <input type='hidden' class='form-control' id='id' placeholder='id'>



          <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='fullName'>fullName:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='fullName'  placeholder='fullName' required />

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='email'>email:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='email' placeholder='email' required />

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='dob' >dob:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='date' class='form-control' id='dob' placeholder='dob' required>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='password' >password:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='password' class='form-control' id='password' placeholder='password' required>

    </div>

  </div>

  
 

      <input type='hidden' class='form-control' id='currentTime' placeholder='currentTime'>




      <input type='hidden' class='form-control' id='profilePicture' placeholder='profilePicture'>



  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='fullAddress'>fullAddress:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='fullAddress' placeholder='fullAddress' >

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='city'>city:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='city' placeholder='city' required>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='phoneNumber'>phoneNumber:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='phoneNumber' placeholder='phoneNumber' required>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='personalWebsite'>personalWebsite:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='personalWebsite' placeholder='personalWebsite'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='languages'>languages:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='languages' placeholder='languages'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='insearchofjob'>insearchofjob:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='radio' class='' id='insearchofjob' name="insearchofjob" value='1' >Yes
	  <input type='radio' class='' id='insearchofjob' name="insearchofjob" value='0'>No

    </div>

  </div>



      <input type='hidden' class='form-control' id='experianceid' placeholder='experianceid'>



  


      <input type='hidden' class='form-control' id='galleryid' placeholder='galleryid'>




      <input type='hidden' class='form-control' id='skillid' placeholder='skillid'>



  
  

 
 <div class='form-group'>      
  
      <div class='col-sm-offset-2 col-sm-10'>

        <button type='submit' class='btn btn-default' id='usernamesubmit' >Submit</button>

      </div>

    </div>

</div>

                </form>

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
insearchofjob=$('#insearchofjob').val();
experianceid=$('#experianceid').val();
galleryid=$('#galleryid').val();
skillid=$('#skillid').val();

	  // alert(address);
	 $.post('usernameInsertForm.php',
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
		alert('succsessfully Inserted');
		
		});  }); });

  </script>
		</body>
</html>
