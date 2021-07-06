<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
?>
<form action="" method="POST">
	<div>
	  <input type="radio" name="provider" value="google">
	  <label for="google">Google</label>
	</div>

	<div>
	  <input type="radio" name="provider" value="amazon">
	  <label for="amazon">Amazon</label>
	</div>
	<div>
		<textarea name="textToSpeech" rows="4" cols="50">Von Fahrtenbuch über Fahrzeugverwaltung und Führerscheinkontrolle bis hin zur Werkstattsteuerung oder Schadenmanagement – CARSYNC ist eine All-In-One-Lösung für Selbständige und Unternehmen.​</textarea>
	</div>
	<div>
		<input type="submit" name="submit" value="submit">
	</div>
</form>
<?php
try {
	if ($_REQUEST['submit']) {
		if ($_REQUEST['provider'] == 'google') {
			include_once('google.php');
		} else if ($_REQUEST['provider'] == 'amazon') {
			include_once('amazon.php');
		}
	}
} catch(Exception $e) {
	echo $e->getMessage();
}

if (file_exists('google.mp3')) { echo '<a href="google.mp3" target="_blank">google.mp3</a><hr>'; }
if (file_exists('amazon.mp3')) { echo '<a href="amazon.mp3" target="_blank">amazon.mp3</a>'; }
?>