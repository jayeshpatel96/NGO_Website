<?php 
session_start();
include_once('Admin/lib/dao.php');
include_once('Admin/lib/model.php');

$d = new dao();
$m = new model();


if (isset($_POST['adduserbtn'])) 
{
 	extract($_POST);

 	$imagetype=$_FILES["profile_photo"]['type'];
	$imagesize=$_FILES["profile_photo"]['size'];

	$img_arr=$_FILES['profile_photo'];

	move_uploaded_file($img_arr['tmp_name'],'images/user/'.$img_arr['name']);

	echo $profile_photo=$img_arr['name'];


 	$m->set_data('username',$username);
 	$m->set_data('email',$email);
 	$m->set_data('password',$password);
 	$m->set_data('profile_photo',$profile_photo);
 	$m->set_data('createdby',"User");
 	$m->set_data('flag',"0");
 	$m->set_data('roleid',"8");
 	$a =array(
 		'username'=>$m->get_data('username'),
 		'email'=>$m->get_data('email'),
 		'password'=>$m->get_data('password'),
 		'profile_photo'=>$m->get_data('profile_photo'),
 		'createdby'=>$m->get_data('createdby'),
 		'flag'=>$m->get_data('flag'),
 		'roleid'=>$m->get_data('roleid'),
 		);

 	$q=$d->insert("users",$a);

 	if($q>0) 
 	{
 		header('location:login.php');
	}
	else 
	{
		echo "Error";
	}
 }

 if(isset($_POST['donationdetails'])) 
{
 	extract($_POST);
 	

 	$m->set_data('name',$name);
 	$m->set_data('email',$email);
 	$m->set_data('mobile',$mobile);
 	$m->set_data('address',$address);
 	$m->set_data('donatefor',$donatefor);
 	$m->set_data('donate_type',$donateType);
 	$m->set_data('amount',$donateAmount);
 	$m->set_data('message',$message);
 	$a =array(
 		'name'=>$m->get_data('name'),
 		'email'=>$m->get_data('email'),
 		'mobile'=>$m->get_data('mobile'),
 		'address'=>$m->get_data('address'),
 		'donatefor'=>$m->get_data('donatefor'),
 		'donate_type'=>$m->get_data('donate_type'),
 		'amount'=>$m->get_data('amount'),
 		'message'=>$m->get_data('message'),
 		);

 	$q=$d->insert("donation",$a);

 	if($q>0) 
 	{
 		header('location:donation.php?success_message="Donation Successful"');
	}
	else 
	{
		echo "Error in Donation";
	}
 }



if (isset($_POST['edituser'])) {
 	extract($_POST);
 	

 	$imagetype=$_FILES["profile"]['type'];
	$imagesize=$_FILES["profile"]['size'];

	$img_arr=$_FILES['profile'];

	move_uploaded_file($img_arr['tmp_name'],'images/'.$img_arr['name']);

	$profile=$img_arr['name'];

	
 	$m->set_data('username',$username);
 	$m->set_data('email',$email);
 	$m->set_data('profile',$profile);
 	

 	$a =array(
 		
 		'username'=>$m->get_data('username'),
 		'email'=>$m->get_data('email'),
 		'profile'=>$m->get_data('profile'),
 		
 	) ;

 	$a1 =array(
 		
 		'username'=>$m->get_data('username'),
 		'email'=>$m->get_data('email'),
 		
 		
 	) ;
 
 	if($profile!="")
 	{
 	$q=$d->update("users",$a,"userId='$userId'");
 	$_SESSION['profile']= $profile;
 	}
 	else
 	{
 	$q=$d->update("users",$a1,"userId='$userId'");
 	}
 	if($q>0)
 	{
 		$_SESSION['username']= $username;
		$_SESSION['email']= $email;
		
		$_SESSION['userId']= $userId;
		header('location:index.php');
	}
	else {
		echo "Error";
	}
 }

if (isset($_POST['usercheck'])) 
{

 	extract($_POST);


	$q=$d->select("users","email='$email' AND password='$password'","");

 	$data=mysqli_fetch_array($q);

 	if($data>0)
 	{
		
		$_SESSION['username']= $data['username'];
		$_SESSION['email']= $data['email'];
		$_SESSION['profile_photo']= $data['profile_photo'];
		$_SESSION['userId']= $data['userId'];

		header('location:index.php');

	}	
	else 
	{
		
		header('location:login.php?msgError=Wrong Username or Email');
	}
 }



	

if (isset($_POST['feedbtn'])) {
 	extract($_POST);

 
	// if($rolename=="superadmin")
	// {
	// 	$flag='1';
	// }
	// else
	// {
	// 	$flag='0';
	// }


	
	$m->set_data('name',$name);
 	$m->set_data('email',$email);
 	$m->set_data('subject',$subject);
 	$m->set_data('message',$message);
 	$m->set_data('created_date',date("d-m-Y"));
 	// $m->set_data('flag',$flag);
 	$a =array(
 		'name'=>$m->get_data('name'),
 		'email'=>$m->get_data('email'),
 		'subject'=>$m->get_data('subject'),
 		'message'=>$m->get_data('message'),
 		//'flag'=>$m->get_data('flag'),
 		'created_date'=>$m->get_data('created_date'),
 		
 	) ;

 	$q=$d->insert("feedback",$a);
 	if($q>0) {
 		header('location:contact.php');
	}
	else {
		echo "Error";
	}
 }



if (isset($_POST['subbtn'])) {
 	extract($_POST);

	
	
	$m->set_data('email',$email);
	$m->set_data('status','0');
	$m->set_data('flag','0');
 	$m->set_data('created_date',date("d-m-Y"));
 	// 
 	$a =array(
 		'email'=>$m->get_data('email'),
 		'status'=>$m->get_data('status'),
 		'flag'=>$m->get_data('flag'),
 		'created_date'=>$m->get_data('created_date'),
 		
 	) ;

 	$q=$d->insert("subscribers",$a);
 	if($q>0) {
 		header('location:index.php');
	}
	else {
		echo "Error";
	}
 }


?>