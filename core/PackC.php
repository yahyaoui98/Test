<?PHP
include "../config.php";
class PackC {
function afficherPackk ($Pack){
		echo "Id: ".$Pack->getId()."<br>";
		echo "Nom: ".$Pack->getNom()."<br>";
		echo "Description: ".$Pack->getDescription()."<br>";
	}




    
    
	function ajouterPack($Pack){
		$sql="insert into pack (id,nom,description) values (:id,:nom,:description)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$Pack->getId();
        $nom=$Pack->getNom();
        $des=$Pack->getDescription();
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':description',$des);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

	
	function afficherPack(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From pack";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPack($id){
		$sql="DELETE FROM pack where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierPack($Pack,$id){
		$sql="UPDATE pack SET id=:idd, nom=:nom,description=:description WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$Pack->getId();
        $nom=$Pack->getNom();
        $des=$Pack->getDescription();
		$datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':description'=>$des);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':description',$des);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererPack($id){
		$sql="SELECT * from pack where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListePack($tarif){
		$sql="SELECT * from employe where nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}


?>