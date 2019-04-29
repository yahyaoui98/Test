<?PHP
include "../core/ActiviteC.php";
$activiteC=new ActiviteC();
if (isset($_POST["id"])){
	$activiteC->supprimerActivite($_POST["id"]);
	header('Location: affichage_activite.php');
}

?>