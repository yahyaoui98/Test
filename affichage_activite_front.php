<!DOCTYPE html>
<html>
<head>
    
   

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
    
    
    
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
<!-- styles -->
<link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.css">
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<link href="assets/css/bootstrap-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/slippry.css">
<link href="assets/css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/color/default.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<script src="assets/js/modernizr.custom.js"></script>
    <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
    
    
    
    
    
    
    
    
<meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">



    
<header>
<div id="navigation" class="navbar navbar-inverse navbar-fixed-top default" role="navigation">
  <div class="container">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../template/index.html">Oxygym++</a>
    </div>



  </div>
    
</div>

</header>    
    


    
    
    
    
    
      
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: black;
}

/*style the arrow inside the select element:*/
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

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: #4CAF50;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>
    
    
    
    
    
    
    
    
    <style>
/* The container */
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

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #000000;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
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
    
    
    
    
    
    
    
</head>
    <body>
     <div class="bg-image"></div>

<div class="bg-text">
  <h1>Choisissez Votre Activité</h1>
  <p> Bienvenue Chez Nous </p>
</div>
<form id="formulaire_act" method="POST" action="ajoutActivite.php" enctype="multipart/form-data">
                                            <table>


<caption>Ajouter Activite</caption>
       <tr>
    <td> Nom </td>
    <td>
  <select name="nom" id="nom">
    <option value="0">Activités:</option>
    <option value="Musculation">Musculation</option>
    <option value="Cardio et Fitness">Cardio et Fitness</option>
    <option value="Crossfit">Crossfit</option>
    <option value="Zumba">Zumba</option>
    <option value="Kickboxing">Kickboxing</option>
    <option value="Spinning">Spinning</option>
    <option value="kung-fu">kung-fu</option>
    <option value="Yoga">Yoga</option>
  </select>
    </td>
    </tr>
    

    
        <tr>
    <td> Jour </td>
    <td>
  <select name="jour" id="jour">
    <option value="0">Jour:</option>
    <option value="Lundi">Lundi</option>
    <option value="Mardi">Mardi</option>
    <option value="Mercredi">Mercredi</option>
    <option value="Jeudi">Jeudi</option>
    <option value="Vendredi">Vendredi</option>
    <option value="Samedi">Samedi</option>
    <option value="dimanche">dimanche</option>

  </select>
    </td>
    </tr>
    


    
   
<tr>
<td>temps</td>
    <td>
<select name="temps" id="temps">
    <option value="0">Temps</option>
    <option value="de 08h à 10h">de 08h à 10h </option>
    <option value="de 10h à 12h">de 10h à 12h </option>
    <option value="de 12h à 14h">de 12h à 14h </option>
    <option value="de 14h à 16h">de 14h à 16h</option>
    <option value="de 16h à 18h">de 16h à 18h</option>
    <option value="de 18h à 20h">de 18h à 20h</option>
  </select>
    </td>
    </tr>
    
    
    
<tr>
<td>Presence Coach</td>
    <td>
<select name="pcoach" id="pcoach">
    <option value="0">Presence Coach</option>
    <option value="oui">oui </option>
    <option value="non">non </option>

  </select>
    </td>
    </tr>    

<tr>
<td></td>
<td><input type="submit" name="ajouter" value="ajouter"></td>
</tr>
 </table>
</form>
 
    <br />
     
  <br />
        <br>
        <br>
  <div class="container">
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input  name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>    
        
        
        
        
        
        
              <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4"> Page Precedente  </h2>
            <p class="text-white-50">Page Precedente 
              <a href="affichage_pack_front.php">ICI </a></p>
              </div>
            </div>
        </div>
    </section> 
    
    
    
</body>

</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>


