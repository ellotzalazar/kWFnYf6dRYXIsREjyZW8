<?php
/* session_start(); */
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { 
	
	?>
<script>
window.location = "index.php";
</script>
<?php
} elseif(isset($_SESSION['status']) && $_SESSION['status'] == 'not confirmed'){
	require_once 'dbcon.php';
	$user = fetchData($conn,"SELECT * FROM members WHERE member_id = '".$_SESSION['id']."' ;");
	

	$row = $user->fetch_array();
	if($row['status'] == 'not confirmed'){
?>
<script>
window.location = "success.php?src=<?= base64_encode($row['username']) ?>";
</script>

<?php
		}
		exit;
	}
$session_id=$_SESSION['id'];
?>