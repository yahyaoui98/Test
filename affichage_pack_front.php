<!DOCTYPE html>

<title>test</title>
    
    
    
<style>
#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 1%;
  height: 30px;
  background-color: #4CAF50;
}
</style>
    
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="" />
<link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.css">
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<link href="assets/css/bootstrap-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/slippry.css">
<link href="assets/css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/color/default.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/js/modernizr.custom.js"></script>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet">    
<meta charset="utf-8">
<link href="style.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<header>
<div id="navigation" class="navbar navbar-inverse navbar-fixed-top default" role="navigation">
<div class="container">
<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">Oxygym++</a>
    </div>
  </div>
</div>
</header>          
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    

.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none;
}

.select-selected {
  background-color: black;
}
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}
.select-items {
  position: absolute;
  background-color: #4CAF50;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>
    
    
    
<style>
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

.container input:checked ~ .checkmark {
  background-color: #000000;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.container input:checked ~ .checkmark:after {
  display: block;
}

.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
</style>
    
<style>
#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 1%;
  height: 30px;
  background-color: #4CAF50;
}
</style>
<style>
.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color: #ddd;
  color: black;
}
</style>
    
<style>
.responsive {
  width: 100%;
  height: auto;
}
</style>
    
<body>
<div class="bg-image"></div>
<div class="bg-text">
  <h1>Choisissez Votre Activité</h1>
  <p> Bienvenue Chez Nous </p>
</div>
    <br>
    <br>
    
<?php 
include "../core/PackC.php";
$Pack1C=new PackC();
$listePack=$Pack1C->afficherPack();
?>       
                <h2 style="text-align:center"> Voici nos packs</h2>
               
   <?php  foreach($listePack as $row){
    ?>     
       
 <img src="<?php  echo $row['image'];  ?>" alt="pack1" class="responsive" width="600" height="400">
       <div class="columns">
  <ul class="price">
    <li class="header"><?PHP echo $row['nom']; ?></li>
    <li class="grey"><?PHP echo $row['description']; ?></li>
  </ul>
</div>
  <?php } ?>

    <style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}


.row::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 500px) {
  .column {
    width: 100%;
  }
}
</style>
</body>
<body>
   <script type="text/javascript">
          
            function calculerBMI() {
                // les inputs mta3i
                var taille = Number(document.getElementById("taille").value);
                var tailleunités = document.getElementById("tailleunités").value;
                var poids = Number(document.getElementById("poids").value);
                var poidsunités = document.getElementById("poidsunités").value;

                //nconverti les unitités el koll
                if (tailleunités == "inches") taille /= 39.3700787;
                if (poidsunités == "lb") poids /= 2.20462;
                

                var BMI = Math.round(poids / Math.pow(taille, 2) * 10000);
        
                //affichage resultat mta3 el bmi
                document.getElementById("output").innerText = Math.round(BMI * 100) / 100;
        
                var output = Math.round(BMI * 100) / 100
                if (output < 18.5)
                    document.getElementById("comment").innerText = "poids insuffisant";
                    
                else if (output >= 18.5 && output <= 24.9)
                    document.getElementById("comment").innerText = "poids normal";
                      

                else if (output >= 25 && output <= 29.9)
                    document.getElementById("comment").innerText = "excès pondéral, surpoids";
                     


                else if (output >= 30 && output <= 39.9)
                    document.getElementById("comment").innerText = "obésité";
                    
                else if (output > 40)
                    document.getElementById("comment").innerText = "obésité morbide";
                    
            }
        </script>

        <h1>Calculez Votre BMI </h1>

<form>
    <div> 

        <p>
            Entrer Votre Taille:
            
        <input type = "text" required  pattern ='[0-9]{3}' minlength ='1' maxlength ='3' placeholder = 'Saisissez 3 Chifres svp' id="taille"/>

            <select type="multiple" id="tailleunités">
                <option value="centimetres" selected="selected">centimetres</option>
                <option value="inches">inches</option>
            </select>
             </p>

        <p>
            Entrer Votre Poids: 
            <input type = "text" required    maxlength ='4' placeholder = 'Saisissez votre Poids ' id="poids"/>
            <select type="multiple" id="poidsunités">
                <option value="kg" selected="selected">kilograms</option>
                <option value="lb">pounds</option>
            </select>
        </p>

    </div>
        <input type="" value="calculerBMI" onclick="calculerBMI();">
       </form>
        <h1>Votre BMI Est : <span id="output">...</span></h1>
        
        <h2> Donc On Parle de  : <span id="comment">...</span> </h2> 

    
      <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4"> Back Pack </h2>
            <p class="text-white-50">Backend Pack 
              <a href="affichage_pack.php">ICI </a></p>
              </div>
            </div>
        </div>
    </section> 
    
    
    
    
          <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4"> Commentaire </h2>
            <p class="text-white-50">Metier Comment
              <a href="comment.php">Test Metier </a></p>
              </div>
            </div>
        </div>
    </section> 
    
    
    
    
    
      <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4"> Passons aux Activités </h2>
            <p class="text-white-50">Programmes D'entrainnement et Activités Sportives
              <a href="affichage_activite_front.php">ICI </a></p>
              </div>
            </div>
        </div>
    </section>    
    
    
    
    
</body>
</HTML>







