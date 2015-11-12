<!DOCTYPE html>
<head>
<title></title>

		
		<?php 
        include('externallink.php');

include('database/Insert.php');

if(isset($_POST['submit'])){

		$valuearry = array(htmlspecialchars($_POST['experianceid']),htmlspecialchars($_POST['id']),htmlspecialchars($_POST['usernameid']),htmlspecialchars($_POST['Expected Income']),htmlspecialchars($_POST['Current Income']),htmlspecialchars($_POST['Current Employer']),htmlspecialchars($_POST['Current Position']),htmlspecialchars($_POST['Previous Employer']),htmlspecialchars($_POST['Previous Position']),htmlspecialchars($_POST['Years of Experiance']),htmlspecialchars($_POST['Summury']));

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

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='Expected Income'>Expected Income:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='Expected Income' placeholder='Expected Income'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='Current Income'>Current Income:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='Current Income' placeholder='Current Income'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='Current Employer'>Current Employer:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='Current Employer' placeholder='Current Employer'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='Current Position'>Current Position:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='Current Position' placeholder='Current Position'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='Previous Employer'>Previous Employer:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='Previous Employer' placeholder='Previous Employer'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='Previous Position'>Previous Position:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='Previous Position' placeholder='Previous Position'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='Years of Experiance'>Years of Experiance:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='Years of Experiance' placeholder='Years of Experiance'>

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
Expected Income=$('#Expected Income').val();
Current Income=$('#Current Income').val();
Current Employer=$('#Current Employer').val();
Current Position=$('#Current Position').val();
Previous Employer=$('#Previous Employer').val();
Previous Position=$('#Previous Position').val();
Years of Experiance=$('#Years of Experiance').val();
Summury=$('#Summury').val();

	  // alert(address);
	 $.post('experianceInsertForm.php',
	{
		 experianceid : experianceid,
id : id,usernameid : usernameid,
Expected Income : Expected Income,
Current Income : Current Income,
Current Employer : Current Employer,
Current Position : Current Position,
Previous Employer : Previous Employer,
Previous Position : Previous Position,
Years of Experiance : Years of Experiance,
Summury : Summury,
submit:'submit',
		 
	}
	,function(data,status){
		alert('succsessfully Inserted');
		
		});  }); });

  </script>
		</body>
</html>
