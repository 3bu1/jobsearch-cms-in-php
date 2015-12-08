<!DOCTYPE html>
<head>
<title></title>
</head>
<body>

		
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

		<form action="usernameupdateForm.php" method="post" class='form-horizontal'>


<div class='container'>
  <h2 class='text-capitalize'>username Update Form</h2>
 <div class='form-group'>

 
      <input type='hidden' class='form-control' id='usernameid' placeholder='usernameid' value='<?php echo $individualDetails[0]['usernameid'] ?>'>



 

      <input type='hidden' class='form-control' id='id' placeholder='id' value='<?php echo $individualDetails[0]['id'] ?>'>

 

          <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='fullName' required >fullName:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='fullName' placeholder='fullName' value='<?php echo $individualDetails[0]['fullName'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='email'>email:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='email' placeholder='email' value='<?php echo $individualDetails[0]['email'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='dob'>dob:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='dob' placeholder='dob' value='<?php echo $individualDetails[0]['dob'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='password'>password:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='password' class='form-control' id='password' placeholder='password' value='<?php echo $individualDetails[0]['password'] ?>'>

    </div>

  </div>

  

      <input type='hidden' class='form-control' id='currentTime' placeholder='currentTime' value='<?php echo $individualDetails[0]['currentTime'] ?>'>

  


      <input type='hidden' class='form-control' id='profilePicture' placeholder='profilePicture' value='<?php echo $individualDetails[0]['profilePicture'] ?>'>


  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='fullAddress'>fullAddress:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='fullAddress' placeholder='fullAddress' value='<?php echo $individualDetails[0]['fullAddress'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='city'>city:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='city' placeholder='city' value='<?php echo $individualDetails[0]['city'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='phoneNumber'>phoneNumber:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='phoneNumber' placeholder='phoneNumber' value='<?php echo $individualDetails[0]['phoneNumber'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='personalWebsite'>personalWebsite:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='personalWebsite' placeholder='personalWebsite' value='<?php echo $individualDetails[0]['personalWebsite'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='languages'>languages:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='languages' placeholder='languages' value='<?php echo $individualDetails[0]['languages'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='insearchofjob'>insearchofjob:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='radio' name="insearchofjob" id='insearchofjob' placeholder='insearchofjob'<?php if($individualDetails[0]['insearchofjob'] == '1'){echo "checked";} ?> value='1'>Yes
      <input type='radio' name="insearchofjob" id='insearchofjob' placeholder='insearchofjob' <?php if($individualDetails[0]['insearchofjob'] == '0'){echo "checked";} ?> value='0'>No

    </div>

  </div>

  



      <input type='hidden' class='form-control' id='experianceid' placeholder='experianceid' value='<?php echo $individualDetails[0]['experianceid'] ?>'>



  

      <input type='hidden' class='form-control' id='galleryid' placeholder='galleryid' value='<?php echo $individualDetails[0]['galleryid'] ?>'>




      <input type='hidden' class='form-control' id='skillid' placeholder='skillid' value='<?php echo $individualDetails[0]['skillid'] ?>'>



  
  

 
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

  </script>
		</body>
</html>
