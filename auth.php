<?php
// session_start();
	if(!isset($_SESSION["uname"]) || (trim($_SESSION['uname']) == '') || ( $_SESSION['pt_id'] !=1))
	{
		header("Location:dasboard.php");
	}
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
<script>
window.location = "dasboard.php";
</script>
<?php
}
$session_id=$_SESSION['id'];


	
?>