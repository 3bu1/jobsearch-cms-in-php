<?php 
	//echo isset($_POST['registerEmail'])."####";
include_once('database/Insert.php');
		include_once('database/Select.php');
$getAlpha = new Select;
if(isset($_POST['blabkey'])=='blabla'){
		
		$companydetails = array();
		$companydetails = $getAlpha->selectWhere("username", "email", $_POST['registerEmail']);
		//print_r($companydetails);
		
		if($companydetails>0){
		 //json_encode($companydetails);
		 session_start();
		 if(isset($companydetails)){//$_SESSION['fullName']=$companydetails; }
			echo json_encode($companydetails);
		}
		//$companydetails = json_encode(array('item' => $companydetails));
		//echo $companydetails;
}
}else if(isset($_POST['blabkey1'])=='blabla1'){
	$companydetails = array();
		$companydetails = $getAlpha->selectWhere("username", "email", $_POST['usrname']);
		//print_r($companydetails);
		
		if($companydetails>0 && $companydetails[0]['password']== $_POST['psw']){
		 //json_encode($companydetails);
		 session_start();
		 if(isset($companydetails[0]['fullName'])){$_SESSION['fullName']=$companydetails; 
			echo json_encode($companydetails);
		}else{
			echo "No Match Found";
		}
}
}
?>