<?php 
	require 'assets/jointures/head.php';
	require 'assets/functions/main_functions.php';

	if ($_SESSION['groupe'] == "all" || $_SESSION['groupe'] == "DSAC"){
		// on fait rien
	}else{
		header('Location: index.php');

	}

	require 'assets/jointures/header.php';
?>

<div class="centerContent">
	<img src="assets/images/Tour.jpg" class="Tour">
</div>

<?php 
	require 'assets/jointures/footer.php';
?>