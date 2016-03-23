<?php

require ('includes/core.inc.php');

if(isset($_POST['send'])){
	if (send_msg($_POST['sender'],$_POST['message'])){
		echo "Message Sent";
	}else {
		echo "Message failed to sent.";
	}
}

?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Chat Application</title>
		<link rel="stylesheet" type="text/css" href="public/css/main.css"/>
	</head>
	<body>
		<div id = "input">
			<div id ="feedback"></div>
			<!-- <form action = "index.php" method ="post" id = "form_input"> -->
			<form action = "index.php" method ="post">

			<label>Enter Name: <input type = "text" name = "sender" id = "sender"/></label>
			<label>Enter Message: <input type = "text" name = "message" id = "message"/></label></br>
			<!-- <label>Enter Message:<textarea id = "message" name = "message" col = "10" rows ="4"></textarea></label> -->
			<input type = "submit" name = "send" id = "send" value = "Send Message"/>
			</form>
		</div> <!--Input -->

			<div id = "messages">

					<?php
					$messages = get_msg();
					foreach($messages as $message){
						echo '<strong>'.$message['sender'].' Sent</strong><br/>';
						echo $message['message'].'<br/><br/>';
					} 
				?>

			</div><!--Messages-->

			<script type ="text/javascript" src = "scripts/js/jquery-1.12.2.min.js"></script>
			
			<script type ="text/javascript" src = "scripts/js/auto_chat.js"></script>

			<script type ="text/javascript" src = "scripts/js/send.js"></script>


			
	</body>
</html>