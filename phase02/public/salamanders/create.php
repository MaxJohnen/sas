<?php require_once('../../private/initialize.php');
if(is_get_request()){
	include(SHARED_PATH . '/salamander-header.php');
}
elseif(is_post_request()){
	$page_title = 'The New Salamander'; 
	include(SHARED_PATH . '/salamander-header.php'); 
	if(is_post_request()){
		$newName = $_POST['newName'];
		echo $newName;
	}
}
?>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
