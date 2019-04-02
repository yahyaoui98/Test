<?PHP
include "../entities/Pack.php";
include "../core/PackC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['description']) ){
$pack1=new Pack($_POST['id'],$_POST['nom'],$_POST['description']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$pack1C=new PackC();
$pack1C->ajouterPack($pack1);
header('Location: afficherPack.php');

	
}else{
	echo "vérifier les champs";
}
//*/

?>