
<?PHP
include "../entities/Activite.php";
include "../core/ActiviteC.php";

if (isset($_POST['nom']) and isset($_POST['jour']) and isset($_POST['temps']) and isset($_POST['pcoach'])){
$activite1=new Activite( $_POST['nom'], $_POST['jour'], $_POST['temps'], $_POST['pcoach']);

$activite1C=new ActiviteC();
$activite1C->ajouterActivite($activite1);

header('Location: affichage_activite_front.php');

	
}else{
	echo "vérifier les champs";
}
//*/

?>




