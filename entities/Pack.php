<?PHP
class Pack{
	private $id;
	private $nom;
	private $des;
	
    function __construct($id,$nom,$des){
		$this->id=$id;
		$this->nom=$nom;
		$this->description=$des;
	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getDescription(){
		return $this->description;
	}


	function setNom($nom){
		$this->nom=$nom;
	}
	function setDescription($description){
		$this->description;
	}

}

?>