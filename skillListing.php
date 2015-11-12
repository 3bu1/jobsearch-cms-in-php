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
                                               <tr><th>skillid</th>
<th>id</th>
<th>usernameid</th>
<th>Primary Skills</th>
<th>Secondary Skills</th>
<th>Courses</th>
<th>Highest Degree</th>
<th>Department</th>
<th>Edit</th>
<th>Delete</th></tr>
                                              </thead>
							<?php
                                $projects = array();
                                $proobj = new Select;
                                $projects = $proobj->selectAll("skill");
                                for($i = 0; $i<count($projects); $i++) {

                            ?>
                             <tr>
                                                   <tr><td><?php echo $projects[$i]['skillid'] ?></td>
<td><?php echo $projects[$i]['id'] ?></td>
<td><?php echo $projects[$i]['usernameid'] ?></td>
<td><?php echo $projects[$i]['Primary Skills'] ?></td>
<td><?php echo $projects[$i]['Secondary Skills'] ?></td>
<td><?php echo $projects[$i]['Courses'] ?></td>
<td><?php echo $projects[$i]['Highest Degree'] ?></td>
<td><?php echo $projects[$i]['Department'] ?></td>
<td>
           <a href="skillUpdateForm.php?skillid=<?php echo $projects[$i]['skillid'] ?>">
                                                           Edit
                                                        </a>                    
                                                    </td>
                                                   
                               <td> <a href="deleteskill.php?id=<?php echo $projects[$i]['skillid'] ?>">Delete</a></td></tr>
                                                <?php } ?>
                                            </table>
</body>
</html>
