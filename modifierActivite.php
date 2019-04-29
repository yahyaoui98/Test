<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/Activite.php";
include "../core/ActiviteC.php";
if (isset($_GET['id'])){
	$activiteC=new ActiviteC();
    $result=$activiteC->recupererActivite($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
		$jour=$row['jour'];
        $temps=$row['temps'];
        $pcoach=$row['pcoach'];
        
?>
    
<form method="POST">
<table>
<caption>Modifier Activite</caption>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Jour</td>
<td><input type="text" name="jour" value="<?PHP echo $jour ?>"></td>
</tr>
<tr>
<td>Temps</td>
<td><input type="text" name="temps" value="<?PHP echo $temps ?>"></td>
</tr>
    <tr>
<td>Presence Coach</td>
<td><input type="text" name="pcoach" value="<?PHP echo $pcoach ?>"></td>
</tr>
    

    
<tr>

<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Activite=new Activite($_POST['nom'],$_POST['jour'],$_POST['temps'],$_POST['pcoach']);
	$activiteC->modifierActivite($Activite,$_POST['cin_ini']);

	header('Location: affichage_activite.php');
}
?>
</body>
</HTML>
