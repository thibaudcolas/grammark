<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1' />
	<meta http-equiv="Content-Language" content="en-us" />
	<title>Complete List of Wordy Phrases and Wordiness </title>
	<meta name="Author" content="Mark Fullmer" />
	<meta name="Description" content="List of Wordiness and Wordy Phrases" />
	<style type="text/css">
	<?php echo htmlentities(file_get_contents('style.css', true)); ?>
</style>
	</head>
	<body>
<?php
include ('mysql.php');
$errortype = 'wordiness';
?>
<div id="wrap">
<h1>Wordiness List</h1>
<?php include ('database-add.php'); 
echo '<div style="float:left;">';
?>
<table><tr><td><b>Error</b></td><td><b>Suggested Correction</b></td></tr>
<?php
		$sql = " SELECT id,error,correct FROM wordiness ";
		$result = mysql_query($sql)	or die(mysql_error());
		while ($row = mysql_fetch_array($result)) 
		{	extract($row); 
			echo '<tr><td>';
			echo $error;
			echo '</td><td>';
			echo $correct;
			echo '</td></tr>';
		}
		echo '</table></div></div></body></html>';
?>