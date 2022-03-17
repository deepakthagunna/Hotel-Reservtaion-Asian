<?php
function check_login($conn)
{
if(isset($_SESSION['fname']))
{

$id = $_SESSION['fname'];
$query = "select * from asmt_project where fname ='$id' limit 1";
$result = mysqli_query($conn,$query);

if ($result && mysqli_num_rows($result) > 0 )
 {
	$user_data= mysqli_fetch_assoc($result);
	return $user_data;
}

}

header("location : login.php");
die;
}

?>