<?php 
session_start();
include_once('lib/dao.php');
include_once('lib/model.php');

$d = new dao();
$m = new model();

	extract($_POST);


	
	$q=$d->select("users","username like '%$searchuser%'","");

 	$data=mysqli_fetch_array($q);
 	$i=1;

 	

	 ?>


<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

 <tr>
      												<td><?php echo $i++; ?></td>
                                                    <td><?php echo $data['userId']; ?></td>
                                                    <td><?php echo $data['username']; ?></td>
                                                    <td><?php echo $data['email']; ?></td>
                                                    <td><img src="images/<?php echo $data['profile']; ?>" height="100px" width="100px"></td>

                                                    <?php 
                                                        if($_SESSION['flag']=='1')
                                                        {
                                                    ?>
                                                    <td>
                                                    <a class="btn btn-primary" href="updateuser.php?userId=<?php echo $userId; ?>">Edit</a>
                                                    <a class="btn btn-danger" href="controller.php?userId=<?php echo $userId; ?>">Delete</a></td>
                                                        <?php 
                                                        } 
                                                        else
                                                        {
                                                        ?>
                                                            <td>
                                                    <a class="btn btn-primary" href="updateuser.php?userId=<?php echo $userId; ?>" disabled="disabled">Edit</a>
                                                    <a class="btn btn-danger" href="controller.php?userId=<?php echo $userId; ?>" disabled="disabled">Delete</a></td>
                                                       <?php }
                                                        ?>

                                                </tr>

</body>
</html>


	
	