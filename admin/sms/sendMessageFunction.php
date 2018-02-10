<pre>
<?php
require_once 'smsGateway.php';

$func = new SmsGateway('ellotzero@gmail.com','pesosense2018');

// $data = $func->getContacts();
// print_r($data);
// echo 'hello';

// $func->createContact('Vonn Jammel Metran','09352270914');

// $data = $func->getContacts();
// print_r($data);

$page = 1;

$device = $func->getMessages($page);
// $device = $func->getDevices($page);

print_r($device);

$deviceID = 78355;
$contact = 11484957;
$message = 'Hello World!';
$options = [];
/* 
$options = [
'send_at' => strtotime('+10 minutes'), // Send the message in 10 minutes
'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
]; */

//Please note options is no required and can be left out
// $result = $func->sendMessageToContact($contact, $message, $deviceID, $options);

// print_r($result);
