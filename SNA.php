<?php 
	require 'assets/jointures/head.php';
	require 'assets/functions/main_functions.php';

	if ($_SESSION['groupe'] == "all" || $_SESSION['groupe'] == "SNA"){
		// on fait rien
	}else{
		header('Location: index.php');

	}

	require 'assets/jointures/header.php';
?>

<?php 
	require 'assets/jointures/footer.php';
?>