<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include '../entities/user.php';
    
$c = config::getConnexion();

$user=new User($_POST['login'],$_POST['password'],$c);
$u=$user->Logedin($c,$_POST['login'],$_POST['password']);
    
$vide=false;
if (!empty($_POST['login']) && !empty($_POST['password'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['username']==$_POST['login'] && $t['password']==$_POST['password']){
		
		session_start();
		$_SESSION['l']=$_POST['login'];
		$_SESSION['p']=$_POST['password'];
		$_SESSION['r']=$t['type'];
        /**/echo '<body onLoad="alert(\'Bonjour \')">';
		header("location:index.php");
		
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=connect.html">'; 
      } 
}
    
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="connect.html">Retour au formulaire</a>	 <?php 
}
    
?>
</body>
</html>
