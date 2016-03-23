$(document).ready(function(){
	var interval = setInterval(function(){
	$.ajax({
		url: 'scripts/php/Chat.php',
		// url: 'scripts/php/chat.func.php',
		success:function(data){
			$('#messages').html(data);
		}
	})
	},10);
});
