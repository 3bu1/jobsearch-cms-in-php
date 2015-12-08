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

  if(isset($_GET['experianceid'])){

  $individualDetails = $getAlpha->selectWhere("experiance","experianceid", $_GET['experianceid']);

  }
if(isset($_POST['submit'])){


	
		$valuearry = array(htmlspecialchars($_POST['experianceid']),htmlspecialchars($_POST['id']),htmlspecialchars($_POST['usernameid']),htmlspecialchars($_POST['ExpectedIncome']),htmlspecialchars($_POST['CurrentIncome']),htmlspecialchars($_POST['CurrentEmployer']),htmlspecialchars($_POST['CurrentPosition']),htmlspecialchars($_POST['PreviousEmployer']),htmlspecialchars($_POST['PreviousPosition']),htmlspecialchars($_POST['YearsofExperiance']),htmlspecialchars($_POST['Summury']));

        $updateobj = new update;
            
		$updateobj->updateAll("experiance","experianceid",$_POST['experianceid'], $valuearry);}?></head>
<body>

		<form action="experianceupdateForm.php" method="post" class='form-horizontal'>


<div class='container'>
  <h2 class='text-capitalize'>experiance Update Form</h2>
 <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3' for='experianceid'></label>

    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='experianceid' placeholder='experianceid' value='<?php echo $individualDetails['0']['experianceid'] ?>'>

    </div>

  </div>

       <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3' for='id'></label>

    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='id' placeholder='id' value='<?php echo $individualDetails[0]['id'] ?>'>

    </div>

  </div>  

          <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='usernameid'>usernameid:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='usernameid' placeholder='usernameid' value='<?php echo $individualDetails[0]['usernameid'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='ExpectedIncome'>ExpectedIncome:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='ExpectedIncome' placeholder='ExpectedIncome' value='<?php echo $individualDetails[0]['ExpectedIncome'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='CurrentIncome'>CurrentIncome:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='CurrentIncome' placeholder='CurrentIncome' value='<?php echo $individualDetails[0]['CurrentIncome'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='CurrentEmployer'>CurrentEmployer:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='CurrentEmployer' placeholder='CurrentEmployer' value='<?php echo $individualDetails[0]['CurrentEmployer'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='CurrentPosition'>CurrentPosition:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='CurrentPosition' placeholder='CurrentPosition' value='<?php echo $individualDetails[0]['CurrentPosition'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='PreviousEmployer'>PreviousEmployer:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='PreviousEmployer' placeholder='PreviousEmployer' value='<?php echo $individualDetails[0]['PreviousEmployer'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='PreviousPosition'>PreviousPosition:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='PreviousPosition' placeholder='PreviousPosition' value='<?php echo $individualDetails[0]['PreviousPosition'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='YearsofExperiance'>YearsofExperiance:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='YearsofExperiance' placeholder='YearsofExperiance' value='<?php echo $individualDetails[0]['YearsofExperiance'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='Summury'>Summury:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='Summury' placeholder='Summury' value='<?php echo $individualDetails[0]['Summury'] ?>'>

    </div>

  </div>

  
  

 
 <div class='form-group'>      
  
      <div class='col-sm-offset-2 col-sm-10'>

        <button type='submit' class='btn btn-default' id='experiancesubmit' >Submit</button>

      </div>

    </div>

</div>

                </form>

		<script>
$(document).ready(function(){
$('#experiancesubmit').click(function(event){
	  event.preventDefault();
	  
	  experianceid=$('#experianceid').val();
id=$('#id').val();
usernameid=$('#usernameid').val();
ExpectedIncome=$('#ExpectedIncome').val();
CurrentIncome=$('#CurrentIncome').val();
CurrentEmployer=$('#CurrentEmployer').val();
CurrentPosition=$('#CurrentPosition').val();
PreviousEmployer=$('#PreviousEmployer').val();
PreviousPosition=$('#PreviousPosition').val();
YearsofExperiance=$('#YearsofExperiance').val();
Summury=$('#Summury').val();

	  // alert(address);
	 $.post('experianceupdateForm.php',
	{
		 experianceid : experianceid,
id : id,usernameid : usernameid,
ExpectedIncome : ExpectedIncome,
CurrentIncome : CurrentIncome,
CurrentEmployer : CurrentEmployer,
CurrentPosition : CurrentPosition,
PreviousEmployer : PreviousEmployer,
PreviousPosition : PreviousPosition,
YearsofExperiance : YearsofExperiance,
Summury : Summury,
submit:'submit',
		 
	}
	,function(data,status){
			alert('succsessfully Updated');
		
		});  }); });

  </script>
		</body>
</html>
