<?PHP
include "../core/PackC.php";
$Pack1C=new PackC();
$listePack=$Pack1C->afficherPack();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id</td>
<td>Nom</td>
<td>description</td>
</tr>

<?PHP
foreach($listePack as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
	<td><form method="POST" action="supprimerPack.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierPack.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


