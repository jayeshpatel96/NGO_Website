<?php 
session_start();
include_once('lib/dao.php');
include_once('lib/model.php');

$d = new dao();
$m = new model();


if (isset($_POST['usercheck'])) {

 	extract($_POST);


	$q=$d->select("users","email='$email' AND password='$password'","");

 	$data=mysqli_fetch_array($q);

 	if($data>0)
 	{
		
		$_SESSION['username']= $data['username'];
		$_SESSION['email']= $data['email'];
		$_SESSION['profile_photo']= $data['profile_photo'];
		$_SESSION['flag']= $data['flag'];


		header('location:index.php');

	}	
	else 
	{
		
		header('location:login.php?msgError=Wrong Username or Email');
	}
 }

  if(isset($_GET['deleteimage'])) {
 	extract($_GET);

 
 	
  	$q=$d->delete("gallery","g_id='$deleteimage'");

  	if($q>0)
  	{
	 	header('location:viewimages.php');
	 }
	 else
	 {
	 	echo "Error";
	 }
 }




 if (isset($_POST['adduserbtn'])) {
 	extract($_POST);

 	$imagetype=$_FILES["profile_photo"]['type'];
	$imagesize=$_FILES["profile_photo"]['size'];

	$img_arr=$_FILES['profile_photo'];

	move_uploaded_file($img_arr['tmp_name'],'../images/user/'.$img_arr['name']);

	echo $profile_photo=$img_arr['name'];



	if($roleid=="1")
	{
		$flag='1';
	}
	else
	{
		$flag='0';
	}
	
	

	$m->set_data('username',$username);
 	$m->set_data('email',$email);
 	$m->set_data('password',$password);
 	$m->set_data('profile_photo',$profile_photo);
 	$m->set_data('createdby',$_SESSION['username']);
 	$m->set_data('flag',$flag);
 	$m->set_data('roleid',$roleid);

 	$a =array(
 		
 		'username'=>$m->get_data('username'),
 		'email'=>$m->get_data('email'),
 		'password'=>$m->get_data('password'),
 		'profile_photo'=>$m->get_data('profile_photo'),
 		'createdby'=>$m->get_data('createdby'),
 		'flag'=>$m->get_data('flag'),
 		'roleid'=>$m->get_data('roleid'),
 	) ;

 	$q=$d->insert("users",$a);
 	if($q>0) {
 		header('location:viewuser.php');
	}
	else {
		echo "Error";
	}
 }




 if (isset($_POST['updateuserbtn'])) {
 	extract($_POST);

 	$imagetype=$_FILES["profile_photo"]['type'];
	$imagesize=$_FILES["profile_photo"]['size'];

	$img_arr=$_FILES['profile_photo'];

	move_uploaded_file($img_arr['tmp_name'],'images/'.$img_arr['name']);

	echo $profile_photo=$img_arr['name'];



	if($roleid=="1")
	{
		$flag='1';
	}
	else
	{
		$flag='0';
	}
	
	

	$m->set_data('username',$username);
 	$m->set_data('email',$email);
 	$m->set_data('password',$password);
 	$m->set_data('profile_photo',$profile_photo);
 	$m->set_data('createdby',$_SESSION['username']);
 	$m->set_data('flag',$flag);
 	$m->set_data('roleid',$roleid);

 	$a =array(
 		
 		'username'=>$m->get_data('username'),
 		'email'=>$m->get_data('email'),
 		'password'=>$m->get_data('password'),
 		'profile_photo'=>$m->get_data('profile_photo'),
 		'createdby'=>$m->get_data('createdby'),
 		'flag'=>$m->get_data('flag'),
 		'roleid'=>$m->get_data('roleid'),
 	) ;

 	$q=$d->update("users",$a,"userId='$userId'");
 	
 	if($q>0)
 	{
		header('location:viewuser.php');
	}
	else {
		echo "Error";
	}
 
 	
 }


if (isset($_POST['addevent'])) {
 	extract($_POST);

 	$imagetype=$_FILES["event_photo"]['type'];
	$imagesize=$_FILES["event_photo"]['size'];

	$img_arr=$_FILES['event_photo'];

	move_uploaded_file($img_arr['tmp_name'],'../images/event/'.$img_arr['name']);

	$event_photo=$img_arr['name'];

	$m->set_data('title',$title);
 	$m->set_data('event_type',$event_type);
 	$m->set_data('phone',$phone);
 	$m->set_data('place',$place);
 	$m->set_data('date',$date);
 	$m->set_data('time',$time);
 	$m->set_data('event_photo',$event_photo);
 	$m->set_data('description',$description);

 	$a =array(
 		
 		'title'=>$m->get_data('title'),
 		'event_type'=>$m->get_data('event_type'),
 		'phone'=>$m->get_data('phone'),
 		'place'=>$m->get_data('place'),
 		'date'=>$m->get_data('date'),
 		'time'=>$m->get_data('time'),
 		'event_photo'=>$m->get_data('event_photo'),
 		'description'=>$m->get_data('description'),
 	) ;

 	$q=$d->insert("event",$a);
 	if($q>0) {
 		header('location:viewevent.php');
	}
	else {
		echo "Error";
	}
 }


if (isset($_POST['update_event'])) {
 	extract($_POST);

 	$imagetype=$_FILES["event_photo"]['type'];
	$imagesize=$_FILES["event_photo"]['size'];

	$img_arr=$_FILES['event_photo'];

	move_uploaded_file($img_arr['tmp_name'],'../images/event/'.$img_arr['name']);

	$event_photo=$img_arr['name'];

	$m->set_data('title',$title);
 	$m->set_data('event_type',$event_type);
 	$m->set_data('phone',$phone);
 	$m->set_data('place',$place);
 	$m->set_data('date',$date);
 	$m->set_data('time',$time);
 	$m->set_data('event_photo',$event_photo);
 	$m->set_data('description',$description);

 	$a =array(
 		
 		'title'=>$m->get_data('title'),
 		'event_type'=>$m->get_data('event_type'),
 		'phone'=>$m->get_data('phone'),
 		'place'=>$m->get_data('place'),
 		'date'=>$m->get_data('date'),
 		'time'=>$m->get_data('time'),
 		'event_photo'=>$m->get_data('event_photo'),
 		'description'=>$m->get_data('description'),
 	) ;

 
 	$q=$d->update("event",$a,"e_id='$e_id'");

 	if($q>0) {
 		header('location:viewevent.php');
	}
	else {
		echo "Error";
	}
 }

if (isset($_POST['addvolunteer'])) {
 	extract($_POST);

 	$imagetype=$_FILES["profile_photo"]['type'];
	$imagesize=$_FILES["profile_photo"]['size'];

	$img_arr=$_FILES['profile_photo'];

	move_uploaded_file($img_arr['tmp_name'],'../images/volunteer/'.$img_arr['name']);

	$profile_photo=$img_arr['name'];


	$m->set_data('name',$name);
 	$m->set_data('occupation',$occupation);
 	$m->set_data('about',$about);
 	$m->set_data('profile_photo',$profile_photo);
 	$m->set_data('education',$education);
 	$m->set_data('address',$address);
 	$m->set_data('mobile',$mobile);
 	$m->set_data('email',$email);

 	$a =array(
 		
 		'name'=>$m->get_data('name'),
 		'occupation'=>$m->get_data('occupation'),
 		'about'=>$m->get_data('about'),
 		'profile_photo'=>$m->get_data('profile_photo'),
 		'education'=>$m->get_data('education'),
 		'address'=>$m->get_data('address'),
 		'mobile'=>$m->get_data('mobile'),
 		'email'=>$m->get_data('email'),
 	) ;

 	$q=$d->insert("volunteer",$a);
 	if($q>0) 
 	{
 		header('location:viewvolunteer.php');
	}
	else
	{
		echo "Error";
	}
 }

 if (isset($_POST['updatevolunteer'])) {
 	extract($_POST);

 	$imagetype=$_FILES["profile_photo"]['type'];
	$imagesize=$_FILES["profile_photo"]['size'];

	$img_arr=$_FILES['profile_photo'];

	move_uploaded_file($img_arr['tmp_name'],'../images/volunteer/'.$img_arr['name']);

	$profile_photo=$img_arr['name'];


	$m->set_data('name',$name);
 	$m->set_data('occupation',$occupation);
 	$m->set_data('about',$about);
 	$m->set_data('profile_photo',$profile_photo);
 	$m->set_data('education',$education);
 	$m->set_data('address',$address);
 	$m->set_data('mobile',$mobile);
 	$m->set_data('email',$email);

 	$a =array(
 		
 		'name'=>$m->get_data('name'),
 		'occupation'=>$m->get_data('occupation'),
 		'about'=>$m->get_data('about'),
 		'profile_photo'=>$m->get_data('profile_photo'),
 		'education'=>$m->get_data('education'),
 		'address'=>$m->get_data('address'),
 		'mobile'=>$m->get_data('mobile'),
 		'email'=>$m->get_data('email'),
 	) ;

 	$q=$d->update("volunteer",$a,"v_id='$v_id'");
 	if($q>0) 
 	{
 		header('location:viewvolunteer.php');
	}
	else
	{
		echo "Error";
	}
 }


 if (isset($_POST['addimgbtn'])) {
 	extract($_POST);

 	$imagetype=$_FILES["photo"]['type'];
	$imagesize=$_FILES["photo"]['size'];

	$img_arr=$_FILES['photo'];

	move_uploaded_file($img_arr['tmp_name'],'images/gallery/'.$img_arr['name']);

	echo $photo=$img_arr['name'];
	

	$m->set_data('title',$title);
	$m->set_data('photo',$photo);
	$m->set_data('active_flag','0');
 	$m->set_data('created_date',date("d-m-Y"));
 	
 	$a =array(
 		'title'=>$m->get_data('title'),
 		'photo'=>$m->get_data('photo'),
 		'active_flag'=>$m->get_data('flag'),
 		'created_date'=>$m->get_data('created_date'),
 		
 	) ;

 	$q=$d->insert("gallery",$a);
 	if($q>0) {
 		header('location:viewimages.php');
	}
	else {
		echo "Error";
	}
 }


 if (isset($_POST['addrolebtn'])) {
 	extract($_POST);

 	$m->set_data('roleid',$roleid);
 	$m->set_data('rolename',$rolename);
 
 	$a =array(
 		'roleid'=>$m->get_data('roleid'),
 		'rolename'=>$m->get_data('rolename'), 		
 	) ;

 	$q=$d->insert("roletype",$a);
 	if($q>0) 
 	{
		header('location:viewrole.php');
	}
	else
	{
		echo "Error";
	}
 }



if (isset($_POST['addcompanybtn'])) {
 	extract($_POST);

 	$m->set_data('c_name',$c_name);
 	$m->set_data('email',$email);
 	$m->set_data('contact_no',$contact_no);
 	$m->set_data('address',$address);
 
 	$a =array(
 		'c_name'=>$m->get_data('c_name'),
 		'email'=>$m->get_data('email'),
 		'contact_no'=>$m->get_data('contact_no'),
 		'address'=>$m->get_data('address'),
 	) ;

 	$q=$d->insert("company_info",$a);
 	if($q>0) 
 	{
		header('location:viewcompany.php');
	}
	else
	{
		echo "Error";
	}
 }



 if (isset($_POST['updaterolebtn'])) {
 	extract($_POST);
 	print_r($_POST);
 	$m->set_data('rolename',$rolename);
 	
 	$a =array(
 		'rolename'=>$m->get_data('rolename'),	
 	) ;
 	
 
 	$q=$d->update("roletype",$a,"roleid='$roleid'");
 	if($q>0)
 	{
		header('location:viewrole.php');
	}
	else
	{
		echo "Error";
	}
 }




 


if (isset($_POST['updatecompanybtn'])) {
 	extract($_POST);
 	print_r($_POST);

 	$m->set_data('c_id',$c_id);
 	$m->set_data('c_name',$c_name);
 	$m->set_data('email',$email);
 	$m->set_data('contact_no',$contact_no);
 	$m->set_data('address',$address);

 	$a =array(
 		'c_id'=>$m->get_data('c_id'),
 		'c_name'=>$m->get_data('c_name'),
 		'email'=>$m->get_data('email'),
 		'contact_no'=>$m->get_data('contact_no'),
 		'address'=>$m->get_data('address'),
 	) ;
 
 	$q=$d->update("company_info",$a,"c_id='$c_id'");
 	if($q>0)
 	{
		header('location:viewcompany.php');
	}
	else {
		echo "Error";
	}
 }








if(isset($_GET['roleid'])) {
 	extract($_GET);
 	
 	$q=$d->delete("roletype","roleid='$roleid'");

 	if($q>0)
 	{
		header('location:viewrole.php');
	}
	else
	{
		echo "Error";
	}
 }


 if(isset($_GET['userId'])) {
 	extract($_GET);
 	
 	$q=$d->delete("users","userId='$userId'");

 	if($q>0)
 	{
		header('location:viewuser.php');
	}
	else
	{
		echo "Error";
	}
 }

  if(isset($_GET['f_id'])) {
 	extract($_GET);
 	
 	$q=$d->delete("feedback","f_id='$f_id'");

 	if($q>0)
 	{
		header('location:feedback.php');
	}
	else
	{
		echo "Error";
	}
 }




 if(isset($_GET['c_id'])) {
 	extract($_GET);
 	
 	$q=$d->delete("company_info","c_id='$c_id'");

 	if($q>0)
 	{
		header('location:viewcompany.php');
	}
	else
	{
		echo "Error";
	}
 }

  if(isset($_GET['donationdelete'])) {
 	extract($_GET);
 	
 	$q=$d->delete("donation","d_id='$donationdelete'");

 	if($q>0)
 	{
		header('location:donation.php');
	}
	else
	{
		echo "Error";
	}
 }

   if(isset($_GET['delete_event'])) {
 	extract($_GET);
 	
 	$q=$d->delete("event","e_id='$delete_event'");

 	if($q>0)
 	{
		header('location:viewevent.php');
	}
	else
	{
		echo "Error";
	}
 }


   if(isset($_GET['deletevolunteer'])) {
 	extract($_GET);
 	
 	$q=$d->delete("volunteer","v_id='$deletevolunteer'");

 	if($q>0)
 	{
		header('location:viewvolunteer.php');
	}
	else
	{
		echo "Error";
	}
 }

 ?>