<?php 
session_start();
include_once('lib/dao.php');
include_once('lib/model.php');
$d = new dao();
$m = new model();

$contents="userId,username,email,createdby,updatedby\n";
$q=$d->select("users","");
while ($row=mysqli_fetch_array($q)){
	$contents.=$row['userId'].",";
	$contents.=$row['username'].",";
	$contents.=$row['email'].",";
	$contents.=$row['createdby'].",";
	$contents.=$row['updatedby'].",\n";
}
	$contents = strip_tags($contents);
	header("Content-Disposition: attachment; filename=Nc".date('d-m-y').".csv");
	print $contents;

?>