<!DOCTYPE html>
<head>
<title></title>

		
		<?php 
        include('externallink.php');

include('database/Insert.php');

if(isset($_POST['submit'])){

		$valuearry = array(htmlspecialchars($_POST['experianceid']),htmlspecialchars($_POST['id']),htmlspecialchars($_POST['usernameid']),htmlspecialchars($_POST['ExpectedIncome']),htmlspecialchars($_POST['CurrentIncome']),htmlspecialchars($_POST['CurrentEmployer']),htmlspecialchars($_POST['CurrentPosition']),htmlspecialchars($_POST['PreviousEmployer']),htmlspecialchars($_POST['PreviousPosition']),htmlspecialchars($_POST['YearsofExperiance']),htmlspecialchars($_POST['Summury']));

		Insertrow("experiance",$valuearry);}?></head>
<body>

		<form action="experianceInsertForm.php" method="post" class='form-horizontal'>

<div class='container'>
  <h2 class='text-capitalize'>experiance Form</h2>
 <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3' for='experianceid'></label>

    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='experianceid' placeholder='experianceid' >

    </div>

  </div>

       <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3' for='id'></label>

    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='id' placeholder='id'>

    </div>

  </div>  

          <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='usernameid'>usernameid:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='usernameid' placeholder='usernameid'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='ExpectedIncome'>ExpectedIncome:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='ExpectedIncome' placeholder='ExpectedIncome'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='CurrentIncome'>CurrentIncome:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='CurrentIncome' placeholder='CurrentIncome'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='CurrentEmployer'>CurrentEmployer:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='CurrentEmployer' placeholder='CurrentEmployer'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='CurrentPosition'>CurrentPosition:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='CurrentPosition' placeholder='CurrentPosition'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='PreviousEmployer'>PreviousEmployer:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='PreviousEmployer' placeholder='PreviousEmployer'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='PreviousPosition'>PreviousPosition:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='PreviousPosition' placeholder='PreviousPosition'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='YearsofExperiance'>YearsofExperiance:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='YearsofExperiance' placeholder='YearsofExperiance'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='Summury'>Summury:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='Summury' placeholder='Summury'>

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
	 $.post('experianceInsertForm.php',
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
		alert('succsessfully Inserted');
		
		});  }); });

  </script>
		</body>
</html>
