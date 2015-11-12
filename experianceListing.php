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
<th>Expected Income</th>
<th>Current Income</th>
<th>Current Employer</th>
<th>Current Position</th>
<th>Previous Employer</th>
<th>Previous Position</th>
<th>Years of Experiance</th>
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
<td><?php echo $projects[$i]['Expected Income'] ?></td>
<td><?php echo $projects[$i]['Current Income'] ?></td>
<td><?php echo $projects[$i]['Current Employer'] ?></td>
<td><?php echo $projects[$i]['Current Position'] ?></td>
<td><?php echo $projects[$i]['Previous Employer'] ?></td>
<td><?php echo $projects[$i]['Previous Position'] ?></td>
<td><?php echo $projects[$i]['Years of Experiance'] ?></td>
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
