<?php
$mail = new Email;
$src = 'http://facebook.com';
$email = 'ellotzero@gmail.com';
$person = 'Mr. Robot';

$mail->sendConfirmation($src,$email, $person);

Class Email{

	function sendConfirmation($src,$email, $person){
		$link = 'http://ellotzero.x10host.com/';
		$systemName = 'Sterling';
		$mailTitle = 'Welcome to Sterling';
		$mailContent = 'Hi '.$person.', </br> Welcome to Sterling, <br/> To continue using your account please click verify.';
		$actionContent = 'Verify';
		$systemLogoLink = 'http://ellotzero.x10host.com/img/dr.png';

		$body = $this->emailBody($link,$systemName,$mailTitle,$mailContent,$systemLogoLink,$src, $actionContent);

		$to = $email;
		$subject = "Sterling Confirmation";
		$txt = $body;
		$headers = "From: noreply@ellotzero.x10host.com" . "\r\n" .
		"BCC: noreply@ellotzero.x10host.com";
	}
	function emailBody($link,$systemName,$mailTitle,$mailContent,$systemLogoLink,$src, $actionContent){
		$body = '<!DOCTYPE html>
					<html lang="en">
						<head>
							<meta charset="UTF-8">
							<title>Email</title>
							<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
						</head>
						<body style="margin: 0; padding: 0; min-width: 100%!important; font-family: "Roboto", sans-serif;">
							<table width="100%" cellspacing="0" cellpadding="0" border="0">
								<tbody>
								<tr>
									<td align="center" style="padding:0" bgcolor="'."#ffffff".'">
										<table style="max-width: 540px;" cellspacing="0" cellpadding="0" border="0">
											<tbody>
											<tr>
												<td style="padding:0" align="center">
													<table width="100%" cellspacing="0" cellpadding="0" border="0">
														<tbody>
														<tr>
															<td style="padding:10px 111px" valign="top">
																<img src="'.$systemLogoLink.'" alt="" style="width: 50px;height: 50px;">
															</td>
														</tr>
														<tr>
															<td align="center" style="padding:0px 0px 10px 0px;">
																<span style="clear:both;color: #fff;">'.$systemName.'</span>
															</td>
														</tr>
														</tbody>
													</table>
												</td>
											</tr>
											</tbody>
										</table>
									</td>
								</tr>
								</tbody>
							</table>
							<table width="100%" cellspacing="0" cellpadding="0" border="0">
								<tbody>
									<tr>
										<td valign="top" bgcolor="#e8e8e4">
											<table style="padding:0" width="100%" cellspacing="0" cellpadding="0" border="0">
												<tbody>
												<tr>
													<td style="padding:0 15px 70px 0" bgcolor="'."#ffffff".'">&nbsp;</td>
												</tr>
												</tbody>
											</table>
										</td>
										<td style="padding:0" width="540" bgcolor="#e8e8e4" align="center">
											<table style="padding:0" width="540" cellspacing="0" cellpadding="0" border="0">
												<tbody>
												<tr>
													<td style="padding:40px 60px" bgcolor="#ffffff">
														<table width="100%" cellspacing="0" cellpadding="0" border="0">
															<tbody>
															<tr>
																<td style="padding:0">
																	<table width="100%" cellspacing="0" cellpadding="0" border="0">
																		<tbody>
																		<tr>
																			<td style="padding:0 0 20px 0;font-size:18px;line-height:26px;color:#000000" align="center">
																				'.$mailTitle.'
																			</td>
																		</tr>
																		<tr>
																			<td style="padding:0;font-size:12px;line-height:18px;color:#000000" align="left">
																				'.$mailContent.'
																			</td>
																		</tr>
																		<tr>
																			<td style="padding:20px 0 30px 0" bgcolor="#ffffff" align="center">
																				<table width="220" cellspacing="0" cellpadding="0" border="0">
																					<tbody>
																					<tr>
																						<td style="padding:10px 0 0" align="center">
																							<table cellspacing="0" cellpadding="0" border="0" align="center">
																								<tbody>
																								<tr>
																									<td width="198" bgcolor="'."#ffffff".'" align="center">
																										<a href="'.$src.'" 
																											style="
																													font-size:11px;
																													font-family:Arial,sans-serif;color:#ffffff;
																													text-decoration:none;
																													text-decoration:none;
																													padding:12px 10px;
																													border:1px solid '."#ffffff".';
																													display:inline-block;
																													width:198px;
																													letter-spacing:1px
																												" target="_blank" >'.$actionContent.'
																										</a>
																										
																									</td>
																								</tr>
																							</tbody></table>
																						</td>
																					</tr>
																					</tbody>
																				</table>
																			</td>
																		</tr>
																		<tr>
																			<td style="padding:0;font-size:12px;line-height:18px;color:#000000" align="left">
																				We hope you enjoy what you discover.<br>
																				<br>
																				This is an automatically generated email, please do not reply.<br>
																				<br>
																				Warmest wishes<br>
																				Dash Taxes team</td>
																		</tr>
																		</tbody>
																	</table>
																</td>
															</tr>
															</tbody>
														</table>
													</td>
												</tr>
												</tbody>
											</table>
										</td>
										<td valign="top" bgcolor="#e8e8e4">
											<table style="padding:0" width="100%" cellspacing="0" cellpadding="0" border="0">
												<tbody>
												<tr>
													<td style="padding:0 15px 70px 0" bgcolor="'."#ffffff".'">&nbsp;</td>
												</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
							<table width="100%" cellspacing="0" cellpadding="0" border="0">
								<tbody>
								<tr>
									<td style="padding:0 20px 0 20px" bgcolor="#333333" align="center">
										<table style="padding:0" width="540" cellspacing="0" cellpadding="0" border="0">
											<tbody>
											<tr>
												<td style="padding:35px 0 0 0">
													<table width="100%" cellspacing="0" cellpadding="0" border="0">
														<tbody>
														<tr>
															<td align="center" style="color: #fff;padding: 0 0 20px 0;">
																<span style="font-size:11px;">
																	Dash Taxes 2017, All rights reserve. 
																</span>

																<hr style="border:0px; border-top: 1px solid #fff;width: 50%;margin: 20px 0px 0px 0px">
															</td>
														</tr>
														</tbody>
													</table>
												</td>
											</tr>
											</tbody>
										</table>
										<table class="m_8769210341079186614responsive-table" width="540" cellspacing="0" cellpadding="0" border="0" align="center">
											<tbody>
											<tr>
												<td style="font-size:11px;line-height:18px;font-family:Arial,sans-serif;color:#ffffff;padding: 0" align="center">
													<span><img src="'.$systemLogoLink.'" style="width:50px;height:50px"></span>
												</td>
											</tr>
											<tr>
												<td style="font-size:11px;line-height:18px;font-family:Arial,sans-serif;color:#ffffff;padding:0 0 40px 0" align="center">
													<a href="'.$link.'" style="color:#fff;">dashtaxes.com</a>
												</td>
											</tr>
											</tbody>
										</table>
									</td>
								</tr>
								</tbody>
							</table>
						</body>
					</html>';
		return $body;
	}
}