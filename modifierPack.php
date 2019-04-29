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
		$im=$row['image'];
        
?>
    
<form method="POST" enctype="multipart/form-data">
<table>
<caption>Modifier Pack</caption>

<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>    
<tr>
<td>Description</td>
<td>
<textarea type="text" name="description" value="<?PHP echo $description ?>">
</textarea></td>
</tr>
<td>Image</td>
<td><img src='<?PHP echo $im ?>' width="200" height="250"></td>
<td><input  type="file" id="image" name="image" class="form-control" >  </td>                                  
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
	$name = $_FILES['image']['name'];
  $target_dir = "images/";
  move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$name);


$pack1=new Pack($_POST['nom'],$_POST['description'],$target_dir.$name);
$pack1C=new PackC();
	$pack1C->modifierPack($pack1,$_POST['cin_ini']);
	header('Location:affichage_pack.php');
}
?>
</body>
</HTML>
