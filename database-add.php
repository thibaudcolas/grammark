<div style="display:block;">Lists: <a href="wordiness-list.php">Wordiness</a> | <a href="grammar-error-list.php">Grammar</a> | <a href="transitions-list.php">Transitions</a></div>
<?php 
echo '<div class="analysis" style="float:left;"><b>Add an error to this list</b>';
if (isset($_REQUEST['submit'])) {
	if ($_REQUEST['cyborg'] != $_REQUEST['z'])
    {
    echo '<span style="color:red;">Your math is wrong. Either you are a spam bot or you need to go back to grade 1.</span>';
    }
  else
    {
    $error = $_REQUEST['error'] ;
    $correct = $_REQUEST['correct'] ;
    mail("mfullmer@gmail.com", "Grammark database add",
    $error, $correct, "From: mfullmer@gmail.com" );
    echo "Your error suggestion was recorded. We'll check it out.";
    }
  }
?>
  <form method='post' action='database-add.php'>
  <p><input name='error' type='text' class='textbox' style='width:200px;margin-top:10px;display:inline;' placeholder='Error (ex. lesser then)' 
  <?php if (isset($_REQUEST['error'])) { echo 'value="'. $_REQUEST['error'] .'"'; } ?>
  />
  <input name='correct' type='text' class='textbox' style='width:200px;margin-top:10px;display:inline;' placeholder='Suggestion (ex. lesser than)' 
  <?php if (isset($_REQUEST['correct'])) { echo 'value="'. $_REQUEST['correct'] .'"'; } ?>
  /></p>
  <?php
	$x = rand(5,15);
	$y = rand(5,15);
	$z = $x+$y;
	?>
  <p>Prove you're not a spammy cyborg thingie:
  <input type="text" class="textbox" name="cyborg" placeholder="<?php echo $x .'+'. $y .'='; ?>" style='width:50px;'></p>
  <input type='hidden' name='z' value='<?php echo $z; ?>'>
  <input class='btn' type='submit' value='Submit suggestion' />
  </form> 
  </div>