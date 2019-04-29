<?PHP
include "../core/ActiviteC.php";
$Activite1C=new ActiviteC();
$listeActivites=$Activite1C->afficherActivites();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id</td>
<td>nom</td>
    <td>jour</td>
    <td>temps</td>
    <td>pcoach</td>

</tr>

<?PHP
foreach($listeActivites as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['jour']; ?></td>
    <td><?PHP echo $row['temps']; ?></td>
    <td><?PHP echo $row['pcoach']; ?></td>
	<td><form method="POST" action="supprimerActivite.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierActivite.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


