<?PHP
include "../entities/Pack.php";
include "../core/PackC.php";

if (isset($_POST['nom']) and isset($_POST['desc']) and isset($_FILES['image']['name'])){

$name = $_FILES['image']['name'];
  $target_dir = "images/";
  move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$name);


$pack1=new Pack($_POST['nom'],$_POST['desc'], $target_dir.$name);

$pack1C=new PackC();
$pack1C->ajouterPack($pack1);
header('Location: affichage_pack_front.php');

	
}else{
	echo "vérifier les champs";
}
//*/

?>