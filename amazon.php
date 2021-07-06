<?php
	require_once "aws-sdk-php/vendor/autoload.php";
	  
	use Aws\Polly\PollyClient;
	$config = [
		'version' => 'latest',
		'region' => 'eu-central-1',
		'credentials' => [
			'key' => 'AKIAVNT4X3VICF3N7P6D',
			'secret' => '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',
			]
		];
		  
	$client = new PollyClient($config);

	$args = [
		'OutputFormat' => 'mp3',
		'LanguageCode' => 'de-DE',
		'Text' => 'Amazon Tonaufnahme: '.$_REQUEST['textToSpeech'],
		'TextType' => 'text',
		'VoiceId' => 'Vicki', //pass preferred voice id here
	];

	$result = $client->synthesizeSpeech($args);

	$resultData = $result->get('AudioStream')->getContents();
	$success = file_put_contents("amazon.mp3", $resultData);
	if ($success === FALSE) { $Message = 'The file could not be created.'; }
	else { $Message = 'The file is created.'; }
?>