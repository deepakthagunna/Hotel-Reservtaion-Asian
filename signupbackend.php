<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup</title>
</head>
<body>

<?php

$FirstName =$_POST['fname'];
$LastName = $_POST['lname'];
$Email_Address = $_POST['email'];
$Country = $_POST['country'];
$Address = $_POST['address'];
$Password= $_POST['password'];



$conn = mysqli_connect('localhost','root','','asmt_project');
$query = "insert into signup (fname,lname,email,password,country,address) values ('$FirstName','$LastName','$Email_Address','$Password', '$Country','$Address')";
$query_result = mysqli_query($conn,$query);



if ($query_result) {
	echo "Data Inserted Succesfully";
	// code...
}else{
	echo "Sorry Try Again.... BullHsit";
}



?>

</body>
</html>