<?PHP
include "../core/PackC.php";
$packC=new PackC();
if (isset($_POST["id"])){
	$packC->supprimerPack($_POST["id"]);
	header('Location: afficherPack.php');
}

?>