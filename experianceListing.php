<!DOCTYPE html>
<head>
<title></title>
</head>
<body>

		
		<?php 
        
include('externallink.php');

include('database/Insert.php');

?>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class='table table-striped table-bordered table-condensed'>
                                              <thead>
                                               <tr><th>experianceid</th>
<th>id</th>
<th>usernameid</th>
<th>ExpectedIncome</th>
<th>CurrentIncome</th>
<th>CurrentEmployer</th>
<th>CurrentPosition</th>
<th>PreviousEmployer</th>
<th>PreviousPosition</th>
<th>YearsofExperiance</th>
<th>Summury</th>
<th>Edit</th>
<th>Delete</th></tr>
                                              </thead>
							<?php
                                $projects = array();
                                $proobj = new Select;
                                $projects = $proobj->selectAll("experiance");
                                for($i = 0; $i<count($projects); $i++) {

                            ?>
                             <tr>
                                                   <tr><td><?php echo $projects[$i]['experianceid'] ?></td>
<td><?php echo $projects[$i]['id'] ?></td>
<td><?php echo $projects[$i]['usernameid'] ?></td>
<td><?php echo $projects[$i]['ExpectedIncome'] ?></td>
<td><?php echo $projects[$i]['CurrentIncome'] ?></td>
<td><?php echo $projects[$i]['CurrentEmployer'] ?></td>
<td><?php echo $projects[$i]['CurrentPosition'] ?></td>
<td><?php echo $projects[$i]['PreviousEmployer'] ?></td>
<td><?php echo $projects[$i]['PreviousPosition'] ?></td>
<td><?php echo $projects[$i]['YearsofExperiance'] ?></td>
<td><?php echo $projects[$i]['Summury'] ?></td>
<td>
           <a href="experianceUpdateForm.php?experianceid=<?php echo $projects[$i]['experianceid'] ?>">
                                                           Edit
                                                        </a>                    
                                                    </td>
                                                   
                               <td> <a href="deleteexperiance.php?id=<?php echo $projects[$i]['experianceid'] ?>">Delete</a></td></tr>
                                                <?php } ?>
                                            </table>
</body>
</html>
