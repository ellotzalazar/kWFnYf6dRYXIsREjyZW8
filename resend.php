<?php
	require 'dbcon.php';
	require 'email.php';
	$username = base64_decode($_GET['src']);
	$data = fetchData($conn,"SELECT * FROM members WHERE username = '$username'");
	$row = $data->fetch_array();
	if(!empty($row))
	{
		$link = 'http://ellotzero.x10host.com/';
		$src = $link.'success.php?user='.$_GET['src'];
		Email::sendConfirmation($src,$row['email'], $username,$link);
	}
	
?>
<script>
	alert('You have successfully resend your email confirmation.');
	window.location = 'success.php?src=<?php echo $_GET['src']?>';
</script>