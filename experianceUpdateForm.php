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
  <script src="lib/jquery/jquery-1.3.2.js" type="text/javascript">
        </script>
        <script src="javascripts/jquery.validate.js" type="text/javascript">
        </script>

 
</head>
<body class="bgimage">
<div class="topspace"></div>

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

		<form action="experianceupdateForm.php" method="post" class='form-horizontal'>



  <h2 class='text-capitalize userForm'>experience Update Form</h2>
 <!--<div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-3' for='experianceid'></label>

    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='experianceid' placeholder='experianceid' value='<?php echo $individualDetails['0']['experianceid'] ?>'>

    </div>

  </div>-->

      <!-- <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-3' for='id'></label>

    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='id' placeholder='id' value='<?php echo $individualDetails[0]['id'] ?>'>

    </div>

  </div>  -->

          <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 col-xs-12 text-capitalize' for='usernameid'>username id:</label>

    <div class='col-sm-10 col-md-6 col-xs-12'>

      <input type='text' class='form-control' id='usernameid' placeholder='usernameid' value='<?php echo $individualDetails[0]['usernameid'] ?>'>

    </div>

  </div>

  
    <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 text-capitalize' for='ExpectedIncome'>Expected Income:</label>

    <div class='col-sm-10 col-md-6'>

      <input type='text' class='form-control' id='ExpectedIncome' placeholder='ExpectedIncome' value='<?php echo $individualDetails[0]['ExpectedIncome'] ?>'>

    </div>

  </div>

  
    <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 text-capitalize' for='CurrentIncome'>Current Income:</label>

    <div class='col-sm-10 col-md-6'>

      <input type='text' class='form-control' id='CurrentIncome' placeholder='CurrentIncome' value='<?php echo $individualDetails[0]['CurrentIncome'] ?>'>

    </div>

  </div>

  
    <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 text-capitalize' for='CurrentEmployer'>Current Employer:</label>

    <div class='col-sm-10 col-md-6'>

      <input type='text' class='form-control' id='CurrentEmployer' placeholder='CurrentEmployer' value='<?php echo $individualDetails[0]['CurrentEmployer'] ?>'>

    </div>

  </div>

  
    <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 text-capitalize' for='CurrentPosition'>Current Position:</label>

    <div class='col-sm-10 col-md-6'>

      <input type='text' class='form-control' id='CurrentPosition' placeholder='CurrentPosition' value='<?php echo $individualDetails[0]['CurrentPosition'] ?>'>

    </div>

  </div>

  
    <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 text-capitalize' for='PreviousEmployer'>Previous Employer:</label>

    <div class='col-sm-10 col-md-6'>

      <input type='text' class='form-control' id='PreviousEmployer' placeholder='PreviousEmployer' value='<?php echo $individualDetails[0]['PreviousEmployer'] ?>'>

    </div>

  </div>

  
    <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 text-capitalize' for='PreviousPosition'>Previous Position:</label>

    <div class='col-sm-10 col-md-6'>

      <input type='text' class='form-control' id='PreviousPosition' placeholder='PreviousPosition' value='<?php echo $individualDetails[0]['PreviousPosition'] ?>'>

    </div>

  </div>

  
    <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 text-capitalize' for='YearsofExperiance'>Years of Experiance:</label>

    <div class='col-sm-10 col-md-6'>

      <input type='text' class='form-control' id='YearsofExperiance' placeholder='YearsofExperiance' value='<?php echo $individualDetails[0]['YearsofExperiance'] ?>'>

    </div>

  </div>

  
    <div class='form-group userM'>

    <label class='control-label col-sm-2 col-md-4 text-capitalize' for='Summury'>Summary:</label>

    <div class='col-sm-10 col-md-6'>

      <input type='text' class='form-control' id='Summury' placeholder='Summury' value='<?php echo $individualDetails[0]['Summury'] ?>'>

    </div>

  </div>

  
  

 
 <div class='form-group userM'>      
  
      <div class='col-sm-offset-2 col-sm-10'>

        <button type='submit' class='btn btn-primary' id='experiancesubmit' >Submit</button>

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
  <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
                jQuery("#usernameid").validate({
                    expression: "if (if (VAL) return true; else return false;",
                    message: "Please enter the required field"
                });
				jQuery("#ExpectedIncome").validate({
                    expression: "if (if (VAL) return true; else return false;",
                    message: "Please enter the required field"
                });
				jQuery("#CurrentIncome").validate({
                    expression: "if (if (VAL) return true; else return false;",
                    message: "Please enter the required field"
                });
				jQuery("#CurrentEmployer").validate({
                    expression: "if (if (VAL) return true; else return false;",
                    message: "Please enter the required field"
                });
				jQuery("#CurrentPosition").validate({
                    expression: "if (if (VAL) return true; else return false;",
                    message: "Please enter the required field"
                });
				jQuery("#PreviousEmployer").validate({
                    expression: "if (if (VAL) return true; else return false;",
                    message: "Please enter the required field"
                });
				jQuery("#PreviousPosition").validate({
                    expression: "if (if (VAL) return true; else return false;",
                    message: "Please enter the required field"
                });
				jQuery("#YearsofExperiance").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Should be a number"
                });
				jQuery("#Summury").validate({
                    expression: "if (if (VAL) return true; else return false;",
                    message: "Please enter the required field"
                });
				
                
            });
            /* ]]> */
        </script>
		</body>
</html>
