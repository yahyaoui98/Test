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
                                        <strong>Formulaire </strong> Pack
                               
                                    <div class="form-group input-group">
                                        <form id="formulaire_pack" method="POST" action="ajoutPack.php" enctype="multipart/form-data">
                                            
                                                
                                                <div class="form-group">
                                            <label>Nom Pack</label>
                                            <input  id="nom" name="nom" class="form-control" /> 
                                            </div>


                                            <div class="form-group">
                                            <label>Description Pack</label>
                                            <textarea name="desc" id="desc" rows="5" placeholder="Contenu..." class="form-control" required></textarea>
                                            </div>


                                            <div class="form-group">
                                            <label>Image</label>
                                            <input  type="file" id="image" name="image" class="form-control" > 
                                            </div>

                                                                                                                 
                                                                                                                            
                              
                            <button type="submit" class="btn btn-primary btn-sm" >
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm" >
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
