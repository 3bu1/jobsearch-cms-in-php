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
                                               <tr><th>galleryid</th>
<th>id</th>
<th>Image Name</th>
<th>usernameid</th>
<th>summary</th>
<th>Edit</th>
<th>Delete</th></tr>
                                              </thead>
							<?php
                                $projects = array();
                                $proobj = new Select;
                                $projects = $proobj->selectAll("gallery");
                                for($i = 0; $i<count($projects); $i++) {

                            ?>
                             <tr>
                                                   <tr><td><?php echo $projects[$i]['galleryid'] ?></td>
<td><?php echo $projects[$i]['id'] ?></td>
<td><?php echo $projects[$i]['Image Name'] ?></td>
<td><?php echo $projects[$i]['usernameid'] ?></td>
<td><?php echo $projects[$i]['summary'] ?></td>
<td>
           <a href="galleryUpdateForm.php?galleryid=<?php echo $projects[$i]['galleryid'] ?>">
                                                           Edit
                                                        </a>                    
                                                    </td>
                                                   
                               <td> <a href="deletegallery.php?id=<?php echo $projects[$i]['galleryid'] ?>">Delete</a></td></tr>
                                                <?php } ?>
                                            </table>
</body>
</html>
