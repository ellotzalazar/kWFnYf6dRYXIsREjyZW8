<pre><?php

	require 'dbcon.php';

	$id = $_REQUEST['code'];
	$row = fetchData($conn,"SELECT sch.*,member.contact_no
								FROM schedule sch
									LEFT JOIN members member
										ON member.member_id = sch.member_id
								WHERE
									sch.id = $id
							");
	
	$data = $row->fetch_assoc();

	$contact_no = $data['contact_no'];
	$code = $data['code'];
	$message = $code.' is your Sterling Digital confirmation code #sterlingDigital.';


	require_once 'admin/sms/sendMessageFunction.php';

	$sms = new SendMessage;

	$sms_data = $sms->sendMessageToNumber($message,$contact_no);

	// print_r($data);
?>
<script>
	location = "yes_code1.php?code=<?= $id ?>";
</script>