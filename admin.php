 <?php 
session_start();
// Verification admin
if (isset($_SESSION['identifiant'])) {
	if ($_SESSION['isAdmin'] == 0) {
		header("Location: index.php");
	}
}else{
	header("Location: index.php");
}
?>
Bonjour grand admin <?= $_SESSION['identifiant'] ?>