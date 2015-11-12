<!DOCTYPE html>
<head>
<title></title>

		
		<?php 
        include('externallink.php');

include('database/Insert.php');

if(isset($_POST['submit'])){

		$valuearry = array(htmlspecialchars($_POST['galleryid']),htmlspecialchars($_POST['id']),htmlspecialchars($_POST['Image Name']),htmlspecialchars($_POST['usernameid']),htmlspecialchars($_POST['summary']));

		Insertrow("gallery",$valuearry);}?></head>
<body>

		<form action="galleryInsertForm.php" method="post" class='form-horizontal'>

<div class='container'>
  <h2 class='text-capitalize'>gallery Form</h2>
 <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3' for='galleryid'></label>

    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='galleryid' placeholder='galleryid' >

    </div>

  </div>

       <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3' for='id'></label>

    <div class='col-sm-10 col-md-5'>

      <input type='hidden' class='form-control' id='id' placeholder='id'>

    </div>

  </div>  

          <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='Image Name'>Image Name:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='Image Name' placeholder='Image Name'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='usernameid'>usernameid:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='usernameid' placeholder='usernameid'>

    </div>

  </div>

  
    <div class='form-group'>

    <label class='control-label col-sm-2 col-md-3 text-capitalize' for='summary'>summary:</label>

    <div class='col-sm-10 col-md-5'>

      <input type='text' class='form-control' id='summary' placeholder='summary'>

    </div>

  </div>

  
  

 
 <div class='form-group'>      
  
      <div class='col-sm-offset-2 col-sm-10'>

        <button type='submit' class='btn btn-default' id='gallerysubmit' >Submit</button>

      </div>

    </div>

</div>

                </form>

		<script>
$(document).ready(function(){
$('#gallerysubmit').click(function(event){
	  event.preventDefault();
	  
	  galleryid=$('#galleryid').val();
id=$('#id').val();
Image Name=$('#Image Name').val();
usernameid=$('#usernameid').val();
summary=$('#summary').val();

	  // alert(address);
	 $.post('galleryInsertForm.php',
	{
		 galleryid : galleryid,
id : id,Image Name : Image Name,
usernameid : usernameid,
summary : summary,
submit:'submit',
		 
	}
	,function(data,status){
		alert('succsessfully Inserted');
		
		});  }); });

  </script>
		</body>
</html>
