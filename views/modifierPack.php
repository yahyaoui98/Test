<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/Pack.php";
include "../core/PackC.php";
if (isset($_GET['id'])){
	$packC=new PackC();
    $result=$packC->recupererPack($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
		$description=$row['description'];
        
?>
    
<form method="POST">
<table>
<caption>Modifier Pack</caption>
<tr>
<td>ID</td>
<td><input type="text" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Description</td>
<td><input type="text" name="description" value="<?PHP echo $description ?>"></td>
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
	$Pack=new Pack($_POST['id'],$_POST['nom'],$_POST['description']);
	$packC->modifierPack($Pack,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherPack.php');
}
?>
</body>
</HTML>
