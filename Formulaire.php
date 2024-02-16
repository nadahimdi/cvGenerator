
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche de Renseignements</title>
    <link rel="stylesheet" href="formulaire.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script>function displayProject(){

var selectElement= document.getElementById('projets');
var nmbrProjets=selectElement.value;
var box = document.getElementById('projets_inter');
box.innerHTML = '';

if (nmbrProjets>0){
    var title = document.createElement('h2');
    title.innerText="PROJETS";
    box.appendChild(title);
    for(var i=1;i<=nmbrProjets;i++){
          var text=document.createElement('input');
          text.name='Nom_de_Projet'+i;
          text.required=true;
          text.placeholder='Nom de Projet'+i;
          box.appendChild(text);
          var textarea=document.createElement('textarea');
          textarea.name='Description_project'+i;
          textarea.required = true;
          textarea.placeholder='Description project'+i;
          box.appendChild(textarea);
          textarea.style.resize = 'none';
          
    }
}

}
function displayStage(){

var selectElement= document.getElementById('stages');
var nmbrstages=selectElement.value;
var box1 = document.getElementById('Stages_inter');
box1.innerHTML = '';

if (nmbrstages>0){
    var title = document.createElement('h2');
    title.innerText="STAGE";
    box1.appendChild(title);
    for(var i=1;i<=nmbrstages;i++){
          
          var text=document.createElement('input');
          text.name='Nom_de_entreprise'+i;
          text.required=true;
          text.placeholder='Nom de entreprise'+i;
          box1.appendChild(text);


          var textarea=document.createElement('textarea');
          textarea.name='Description'+i;
          textarea.required = true;
          textarea.placeholder='Description du Stage '+i;
          box1.appendChild(textarea);
          textarea.style.resize = 'none';
        
          
    }
}

}




function displayCompetences(){

var selectElement= document.getElementById('competences');
var nmbrCompetences=selectElement.value;
var box2 = document.getElementById('competences_inter');
box2.innerHTML = '';

if (nmbrCompetences>0){
    var title = document.createElement('h2');
    title.innerText="Competences";
    box2.appendChild(title);
    for(var i=1;i<=nmbrCompetences;i++){
          var text=document.createElement('input');
          text.name='Competence'+i;
          text.required=true;
          text.placeholder='Competence'+i;
          box2.appendChild(text);

    }
}

}

function displaylangues(){

var selectElement= document.getElementById('langues');
var nmbrlangues=selectElement.value;
var box3 = document.getElementById('langues_inter');
box3.innerHTML = '';

if (nmbrlangues>0){
    var title = document.createElement('h2');
    title.innerText="langues";
    box3.appendChild(title);
    for(var i=1;i<=nmbrlangues;i++){
          var text=document.createElement('input');
          text.name='langues'+i;
          text.required=true;
          text.placeholder='langues'+i;
          box3.appendChild(text);

    }
}

}





</script> 
</head>
<body>

<h1>Automatique Cv</h1>

<form action="CvTemplate.php" method="POST" enctype="multipart/form-data">
    <div class="personnel">
    <h2>Renseignements Personnels</h2>
     <label class="form-label">Selectionner une image 1:1 (Obigatoire)</label>
    <input class="form-control" name="profile_image" type="file" required>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" placeholder="Entrer votre nom"  required>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" placeholder="Entrer votre prénom" required>
    
    <label class="form-label">Profession</label>
    <input type="text" class="form-control" name="profession" required>
  

    <label for="tel">Numéro de Téléphone :</label>
    <input type="tel" id="tel" name="tel" pattern="0[0-9]{9}" placeholder="Ex. 0612345678" required>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"  placeholder="exemple@domaine.com" required>

</div>
<br>
<div class="academique">
<h2>Renseignements academique</h2>
<h3>Vous etes en :</h3>

<div class="container">

<label class="radio-inline" >|  2AP : <input type="radio" name="oradio"  value="2AP" >
    </label>
    <label class="radio-inline">|  GSTR:<input type="radio" name="oradio" checked value="GSTR" >
    </label>
    <label class="radio-inline">|  GI :<input type="radio" name="oradio" value="GI"  >
    </label>
    <label class="radio-inline">| SCM:<input type="radio" name="oradio" value="SCM" >
    </label>
    <label class="radio-inline">|  GC:<input type="radio" name="oradio" value="GC" >
    </label>
    <label class="radio-inline">|  MS:<input type="radio" name="oradio" value="MS" >
    </label>
</div>
<BR>
<div class="container">

<label class="radio-inline" >|  1er : <input type="radio" name="optradio" checked value="1er">
    </label>
    <label class="radio-inline">|  2eme:<input type="radio" name="optradio" value="2eme">
    </label>
    <label class="radio-inline">| 3eme:<input type="radio" name="optradio" value="3eme">
    </label>
</div>



</div>

<br>

</div>



 
<br>

<div class="remarques">
<h2>LES CHAMPS SUPPLIMENTAIRES</h2>

 <h2>About Me</h2>
 <textarea class="form-control" name="about_me" style="height: 100px" required></textarea>
 <h2>Formation</h2>
<input type="text" id="Formation" name="Formation" required placeholder="École/Collège/Université"></input>
 <div class="container" style="display: inline;">
<h2 style="display: inline;">Nombre de projets :</h2>
<select name="projets" id="projets" onchange="displayProject()" >
<option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
</div>


<div class="container" style="display: inline;">
<h2 style="display: inline;">Nombre de Stage :</h2>
<select name="stages" id="stages" onchange="displayStage()" >
<option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
</div>
<div class="container" style="display: inline;">
<h2 style="display: inline;">Nombre de Competences :</h2>
<select name="competences" id="competences" onchange="displayCompetences()" >
<option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
</div>
<div class="container" style="display: inline;">
<h2 style="display: inline;">Nombre de Langues :</h2>
<select name="langues" id="langues" onchange="displaylangues()" >
<option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
</div>
 <div class="form-floating">
 <div id="projets_inter"></div>
 <div id="competences_inter"></div>
<div id="Stages_inter"></div>
<div id="langues_inter"></div>
</div>
</div>

  <div class="buttons">
    <button type="submit" >Generate</button>
    </div>
</form>

</body>


</html>

