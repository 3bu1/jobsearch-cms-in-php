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
                                               <tr><th>usernameid</th>
<th>id</th>
<th>fullName</th>
<th>email</th>
<th>dob</th>
<th>password</th>
<th>currentTime</th>
<th>profilePicture</th>
<th>fullAddress</th>
<th>phoneNumber</th>
<th>personalWebsite</th>
<th>languages</th>
<th>experianceid</th>
<th>galleryid</th>
<th>skillid</th>
<th>Edit</th>
<th>Delete</th></tr>
                                              </thead>
							<?php
                                $projects = array();
                                $proobj = new Select;
                                $projects = $proobj->selectAll("username");
                                for($i = 0; $i<count($projects); $i++) {

                            ?>
                             <tr>
                                                   <tr><td><?php echo $projects[$i]['usernameid'] ?></td>
<td><?php echo $projects[$i]['id'] ?></td>
<td><?php echo $projects[$i]['fullName'] ?></td>
<td><?php echo $projects[$i]['email'] ?></td>
<td><?php echo $projects[$i]['dob'] ?></td>
<td><?php echo $projects[$i]['password'] ?></td>
<td><?php echo $projects[$i]['currentTime'] ?></td>
<td><?php echo $projects[$i]['profilePicture'] ?></td>
<td><?php echo $projects[$i]['fullAddress'] ?></td>
<td><?php echo $projects[$i]['phoneNumber'] ?></td>
<td><?php echo $projects[$i]['personalWebsite'] ?></td>
<td><?php echo $projects[$i]['languages'] ?></td>
<td><?php echo $projects[$i]['experianceid'] ?></td>
<td><?php echo $projects[$i]['galleryid'] ?></td>
<td><?php echo $projects[$i]['skillid'] ?></td>
<td>
           <a href="usernameUpdateForm.php?usernameid=<?php echo $projects[$i]['usernameid'] ?>">
                                                           Edit
                                                        </a>                    
                                                    </td>
                                                   
                               <td> <a href="deleteusername.php?id=<?php echo $projects[$i]['usernameid'] ?>">Delete</a></td></tr>
                                                <?php } ?>
                                            </table>
</body>
</html>
