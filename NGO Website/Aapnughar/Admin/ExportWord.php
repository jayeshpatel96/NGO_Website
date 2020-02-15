<?php 
session_start();
include_once('lib/dao.php');
include_once('lib/model.php');
$d = new dao();
$m = new model();


?>
<table border="1">


				<thead>
								<h4>User Table</h4>

						<tr>
							<th>No.</th>
							<th>Role</th>
							<th>Name</th>
							<th>Address</th>
							<th>Gender</th>
							<th>Mobile</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i = 0;
						$q = $d->select("users,roletype","register.roleId=roletable.roleId AND register.activeflag=0","ORDER BY userid DESC");
						while ($data = mysqli_fetch_array($q))
						{
							extract($data);
							?>    <tr>
							<td><?php echo $i++; ?></td>
							<td><?php echo $roleType; ?></td>
							<td><?php echo $data['name']; ?></td>
							<td><?php echo $data['address']; ?></td>
							<td><?php echo $data['gender']; ?></td>           
							<td><?php echo $data['mobile']; ?></td>
							</tr>

							<?php } ?>
						</tbody>
					</table>

					<?php
	// $contents = strip_tags($contents);
					header("Content-Disposition: attachment; filename=Nc".date('d-m-y').".doc");
	// print $contents;

					?>