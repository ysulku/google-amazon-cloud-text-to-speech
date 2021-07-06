<?php
	require_once "aws-sdk-php/vendor/autoload.php";
	  
	use Aws\Polly\PollyClient;
	$config = [
		'version' => 'latest',
		'region' => 'eu-central-1',
		'credentials' => [
			'key' => $AmazonKey,
			'secret' => $AmazonSecret,
			]
		];
		  
	$client = new PollyClient($config);

	$args = [
		'OutputFormat' => 'mp3',
		'LanguageCode' => 'de-DE',
		'Text' => 'Amazon Tonaufnahme: '.$_REQUEST['textToSpeech'],
		'TextType' => 'text',
		'VoiceId' => 'Vicki'
	];

	$result = $client->synthesizeSpeech($args);

	$resultData = $result->get('AudioStream')->getContents();
	$success = file_put_contents("amazon.mp3", $resultData);
	if ($success === FALSE) { $Message = 'The file could not be created.'; }
	else { $Message = 'The file is created.'; }
?>