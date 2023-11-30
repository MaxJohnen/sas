<?php require_once('../../private/initialize.php');

$page_title = 'Create a Salamander'; 
include(SHARED_PATH . '/salamander-header.php');
?>

<h1>Create a Salamander</h1>
<p>Type the name of the new salamander below.</p>
<form action="create.php" method="post">
	<label for="newName">Name:</label>
	<input id="newName" type="text" name="newName"><br>
	<input type="submit" name="submit" value="Submit">
</form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
