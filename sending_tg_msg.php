<?php

function send_tg_msg($message) {
	$chat_id = '1124729481';
	$url = 'https://api.telegram.org/bot1466961302:AAEBzLORgaa8UJQxvnDXiFORhPIe9BH9TyI/sendMessage';

	$data = [
		'chat_id' => $chat_id,
		'text' => $message,
		'parse_mode' => 'HTML',
	];

	$options = array('http' => array(

		'method' => 'POST',
		'header' => "Content-Type:application/x-www-form-urlencoded\r\n",
		'content' => http_build_query($data)

	)
);

	$context = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
}
