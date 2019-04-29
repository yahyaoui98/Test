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
                // document.getElementById("answer").value = output; 
     
                return true;
            }





function validerPack() {
    
                var idd = document.forms["f"]["id"].value;
                var nom = document.forms["f"]["nom"].value;
                var description = document.forms["f"]["description"].value;
              

                if(idd === '')
                    {
                        document.getElementById("Id").innerHTML = "Veuillez choisir votre Id !";
                        return false;
                    }
                else if(idd.length < 3)
                    {
                        document.getElementById("Id").innerHTML = "Id doit contenir au moins 3 chiffres !";
                        return false;
                    }
                else if(idd.length >= 8)
                    {
                        document.getElementById("Id").innerHTML = "Id ne doit pas depasser 8 chiffres !";
                        return false;
                    }
                else if(description === '')
                    {
                        document.getElementById("Id").innerHTML = "";
                        document.getElementById("description").innerHTML = "Veuillez saisir votre description !";
                        return false;
                    }
               
                else if((/\d/.test(description)))
                    {
                        document.getElementById("Id").innerHTML = "";
                        document.getElementById("description").innerHTML = "La description ne doit pas contenir des chiffres !";
                        return false;
                    }
           
                alert('Formulaire remplie !')
                return true;
            }

