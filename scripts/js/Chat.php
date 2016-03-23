<?php

require('../../includes/database/connect.db.php');
require('../../includes/function/chat.func.php');


$messages = get_msg();
	foreach($messages as $message){
		echo '<strong>'.$message['sender'].'Sent</Strong><br />';
		echo $message['message'].'<br/><br/>';
	}

?>
