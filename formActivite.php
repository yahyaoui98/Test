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
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                        <a class="active-menu" href="activite.php"><i class="fa fa-desktop fa-3x"></i> Activité</a>
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
       <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div >

                                <div class="panel-body"></div>
                                        <strong>Formulaire </strong> Activite
                               
                                    <div class="form-group input-group">
                                        <form id="formulaire_act" method="POST" action="ajoutActivite.php" enctype="multipart/form-data">
                                            <table>


<caption>Ajouter Activite</caption>
       <tr>
    <td> Nom </td>
    <td>
  <select>
    <option value="0">Activités:</option>
    <option value="1">Musculation</option>
    <option value="2">Cardio et Fitness</option>
    <option value="3">Crossfit</option>
    <option value="4">Zumba</option>
    <option value="5">Kickboxing</option>
    <option value="6">Spinning</option>
    <option value="7">kung-fu</option>
    <option value="8">Yoga</option>
  </select>
    </td>
    </tr>
    

    
        <tr>
    <td> Jour </td>
    <td>
  <select>
    <option value="0">Jour:</option>
    <option value="1">Lundi</option>
    <option value="2">Mardi</option>
    <option value="3">Mercredi</option>
    <option value="4">Jeudi</option>
    <option value="5">Vendredi</option>
    <option value="6">Samedi</option>
    <option value="7">dimanche</option>

  </select>
    </td>
    </tr>
    


    
   
<tr>
<td>temps</td>
    <td>
<select>
    <option value="0">Temps</option>
    <option value="1">de 08h à 10h </option>
    <option value="2">de 10h à 12h </option>
    <option value="3">de 12h à 14h </option>
    <option value="4">de 14h à 16h</option>
    <option value="5">de 16h à 18h</option>
    <option value="6">de 18h à 20h</option>
  </select>
    </td>
    </tr>
    
    
    
<tr>
<td>Presence Coach</td>
    <td>
<select>
    <option value="0">Presence Coach</option>
    <option value="1">oui </option>
    <option value="2">non </option>

  </select>
    </td>
    </tr>    

<tr>
<td></td>
<td><input type="submit" name="ajouter" value="ajouter"></td>
</tr>
 </table>
</form>
       

                                 
                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
