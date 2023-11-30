<?php require_once('../../private/initialize.php');
$nameEdit = '';
if(is_post_request()){
	$nameEdit = $_POST['nameEdit'];
	echo 'New Name: ' . $nameEdit;
}

$page_title = 'Edit Salamander Name'; 
include(SHARED_PATH . '/salamander-header.php'); 
?>

<h1>Edit Salamander Name</h1>
<p>Enter the new name of the salamander below.</p>
<form action="edit.php" method="post">
	<label for="nameEdit">New Name:</label>
	<input id="nameEdit" type="text" name="nameEdit" value="<?php echo $nameEdit; ?>" ><br>
	<input type="submit" value="Submit" name="submit">
</form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
