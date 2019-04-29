<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Oxygen ++</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                 <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.jpg" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a   href="index.html"><i class="fa fa-dashboard fa-3x"></i> Inscription </a>
                    </li>
                     <li>
                        <a   class="active-menu" href="affichage_activite.php"><i class="fa fa-dashboard fa-3x"></i> Activite </a>
                    </li>
                     <li>
                        <a  href="affichage_pack.php"><i class="fa fa-desktop fa-3x"></i> Packs</a>
                    </li>
                  
                    <li>
                        <a  href="produits.html"><i class="fa fa-qrcode fa-3x"></i> Produits </a>
                    </li>
						   <li  >
                        <a   href="commandeetpanier.html"><i class="fa fa-bar-chart-o fa-3x"></i> Commandes & Panier </a>
                    </li>	
                      <li  >
                        <a  href="employers.html"><i class="fa fa-table fa-3x"></i> Employers </a>
                    </li>
                    <li  >
                        <a  href="sav.html"><i class="fa fa-edit fa-3x"></i> Services Aprés vente </a>
                    </li>				
					
                </ul>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
<?PHP
include "../core/ActiviteC.php";
$acC=new ActiviteC();
$listeac=$acC->afficherActivites();
?>
<a href="stat2.php"><button type="button" class="btn btn-primary btn-lg">Statistique</button></a>

<table class="table table-borderless table-dark">
  <thead>
    <tr>
<th>id</th>
<th>Nom</th>
<th>jour</th>
<th>temps</th>
<th>pcoach</th>
    </tr>
  </thead>
  <tbody>
   <?PHP
foreach($listeac as $row){
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
    <td><a href="modifierActivite.php?id=<?PHP echo $row['id']; ?>"> Modifier</a></td>
    </tr>
    
    <?PHP
}
?>
  </tbody>
</table>




 <form> 
        <select name="sortBy"> 
            <option value="nom">nom</option>
            <option value="description">jour</option>
        </select> 
        <button type="submit" formaction="?" formmethod="post">Trier</button> 
    </form>                         

                    </div>
                </div>
         
                 <hr />
               
    </div>
       
            </div>
         
        </div>




    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>   


<script type="text/javascript" src="cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js   "></script>
<link rel="stylesheet" type="text/css" href="cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>


 <script type="text/javascript">
       $(document).ready( function () {
    $('#tab').DataTable();
} );
    </script>


</body>
</html>
