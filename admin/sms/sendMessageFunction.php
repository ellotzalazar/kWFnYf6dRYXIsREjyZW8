<?php

Class SendMessage{
	public $func = '';
	public $device = '';
	public $deviceID = 78355;
	public $contact = 11484957;
	public $message = 'Hello World!';
	public $options = [];
	public $page = 1;

	function __construct(){
		require_once 'smsGateway.php';
		$this->func = new SmsGateway('ellotzero@gmail.com','pesosense2018');
	}

	function getAllDevice(){
		return $this->func->getDevices($this->page);
	}

	function getMessages(){
		return $this->func->getMessages($this->page);
	}

	function sendMessageToNumber($message,$number){
		$result = $this->func->sendMessageToNumber($number, $message, $this->deviceID, $this->options);
		// print_r($result);
	}
}