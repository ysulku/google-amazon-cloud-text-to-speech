<?php
	require __DIR__ . '/google-cloud/vendor/autoload.php';

	use Google\Cloud\TextToSpeech\V1\AudioConfig;
	use Google\Cloud\TextToSpeech\V1\AudioEncoding;
	use Google\Cloud\TextToSpeech\V1\SynthesisInput;
	use Google\Cloud\TextToSpeech\V1\TextToSpeechClient;
	use Google\Cloud\TextToSpeech\V1\VoiceSelectionParams;

	putenv('GOOGLE_APPLICATION_CREDENTIALS='.$GoogleServiceAccountJSONPath);

	$textToSpeechClient = new TextToSpeechClient();

	$input = new SynthesisInput();
	$input->setText('Google Tonaufnahme: '.$_REQUEST['textToSpeech']);
	$voice = new VoiceSelectionParams();
	$voice->setLanguageCode('de-DE');
	$audioConfig = new AudioConfig();
	$audioConfig->setAudioEncoding(AudioEncoding::MP3);

	$resp = $textToSpeechClient->synthesizeSpeech($input, $voice, $audioConfig);
	$success = file_put_contents('google.mp3', $resp->getAudioContent());
	if ($success === FALSE) { $Message = 'The file could not be created.'; }
	else { $Message = 'The file is created.'; }
?>