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

  if(isset($_GET['skillid'])){

  $individualDetails = $getAlpha->selectWhere("skill","skillid", $_GET['skillid']);

  }
if(isset($_POST['submit'])){


	
		$valuearry = array(htmlspecialchars($_POST['skillid']),htmlspecialchars($_POST['id']),htmlspecialchars($_POST['usernameid']),htmlspecialchars($_POST['Primary Skills']),htmlspecialchars($_POST['Secondary Skills']),htmlspecialchars($_POST['Courses']),htmlspecialchars($_POST['Highest Degree']),htmlspecialchars($_POST['Department']));

        $updateobj = new update;
            
		$updateobj->updateAll("skill","skillid",$_POST['skillid'], $valuearry);}?></head>
<body>

		<form action="skillupdateForm.php" method="post" class='form-horizontal'>


<div class='container'>
  <h2 class='text-capitalize'>skill Update Form</h2>
 <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3' for='skillid'></label>

    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='skillid' placeholder='skillid' value='<?php echo $individualDetails[0]['skillid'] ?>'>

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

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='Primary Skills'>Primary Skills:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='Primary Skills' placeholder='Primary Skills' value='<?php echo $individualDetails[0]['Primary Skills'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='Secondary Skills'>Secondary Skills:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='Secondary Skills' placeholder='Secondary Skills' value='<?php echo $individualDetails[0]['Secondary Skills'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='Courses'>Courses:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='Courses' placeholder='Courses' value='<?php echo $individualDetails[0]['Courses'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='Highest Degree'>Highest Degree:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='Highest Degree' placeholder='Highest Degree' value='<?php echo $individualDetails[0]['Highest Degree'] ?>'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='Department'>Department:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='Department' placeholder='Department' value='<?php echo $individualDetails[0]['Department'] ?>'>

    </div>

  </div>

  
  

 
 <div class='form-group'>      
  
      <div class='col-sm-offset-2 col-sm-10'>

        <button type='submit' class='btn btn-default' id='skillsubmit' >Submit</button>

      </div>

    </div>

</div>

                </form>

		<script>
$(document).ready(function(){
$('#skillsubmit').click(function(event){
	  event.preventDefault();
	  
	  skillid=$('#skillid').val();
id=$('#id').val();
usernameid=$('#usernameid').val();
Primary Skills=$('#Primary Skills').val();
Secondary Skills=$('#Secondary Skills').val();
Courses=$('#Courses').val();
Highest Degree=$('#Highest Degree').val();
Department=$('#Department').val();

	  // alert(address);
	 $.post('skillupdateForm.php',
	{
		 skillid : skillid,
id : id,usernameid : usernameid,
Primary Skills : Primary Skills,
Secondary Skills : Secondary Skills,
Courses : Courses,
Highest Degree : Highest Degree,
Department : Department,
submit:'submit',
		 
	}
	,function(data,status){
			alert('succsessfully Updated');
		
		});  }); });

  </script>
		</body>
</html>
