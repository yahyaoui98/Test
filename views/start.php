<?PHP
include "../entities/Pack.php";
include "../core/PackC.php";
$Pack=new Pack(123456789,'Fitness','ce pack est le meilleur');
$PackC=new PackC();
$PackC->afficherPack($Pack);
echo "****************";
echo "<br>";
echo "cin:".$Pack->getId();
echo "<br>";
echo "nom:".$Pack->getNom();
echo "<br>";
echo "prenom:".$Pack->getDescription();
echo "<br>";
echo "****************";
?>