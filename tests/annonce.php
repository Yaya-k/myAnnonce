<?php if(!session_id()) {
    session_start();
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!--ajax-->

    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <meta charset=utf-8 />
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php include ("header.php");?>

</head>
<body style="margin-left: 100px">
</br>
</br>
<form method="post" action="index.php">
    <div class="form-row" style="margin-left: 80px">
        <div class="form-group col-md-4">
            <label for="inputPassword4">Categorie</label>
            <select class="form-control search-slt" id="exampleFormControlSelect1" name="itemCcategorie" required>
                <option selected disabled>Select une categorie</option>
                <optgroup label="DAKAR">

                    <option>Dakar</option>
                    <option>Pikine</option>
                    <option>Guédiawaye</option>
                    <option>Rufisque</option>
                </optgroup>

                <optgroup label="DIOURBEL">


                    <option>Diourbel</option>
                    <option>Bambey</option>
                    <option>Mbacké</option>
                </optgroup>


                <optgroup label="FATICK">

                    <option>Fatick</option>
                    <option>Gossas</option>
                    <option>Foundiougne</option>
                </optgroup>

                <optgroup label="KAFFRINE">


                    <option>Kaffrine</option>
                    <option>Mbouki</option>
                    <option>Koungheul</option>
                    <option>Hoddar</option>
                </optgroup>

                <optgroup label="KAOLACK">


                    <option>Kaolack</option>
                    <option>Nioro du Rip</option>
                    <option>Mbadakhoune</option>
                    <option>Guinguinéo</option>
                </optgroup>
                <optgroup label="KEDOUGOU">


                    <option>Kédougou</option>
                    <option>Salémata</option>
                    <option>Saraya</option>
                </optgroup>
                <optgroup label="KOLDA">


                    <option>Kolda</option>
                    <option>Médina Yoro Foulah</option>
                    <option>Vélingara</option>
                </optgroup>
                <optgroup label="LOUGA">


                    <option>Louga</option>
                    <option>Kébémer</option>
                    <option>Linguère</option>
                </optgroup>

                <optgroup label="MATAM">


                    <option>Matam</option>
                    <option>Kanel</option>
                    <option>Ranérou-Ferlo</option>
                </optgroup>
                <optgroup label="SAINT-LOUIS">


                    <option>Saint Louis</option>
                    <option>Podor</option>
                </optgroup>
                <optgroup label="SEDHIOU">


                    <option>Sédhiou</option>
                    <option>Goudoump</option>
                </optgroup>
                <optgroup label="TAMBACOUNDA">


                    <option>Tambacounda</option>
                    <option>Bakel</option>
                    <option>Goudiry</option>
                </optgroup>
                <optgroup label="THIES">


                    <option>Thiés</option>
                    <option>Tivaouane</option>
                    <option>Mbour</option>
                </optgroup>
                <optgroup label="ZIGUINCHOR">


                    <option>Ziguinchor</option>
                    <option>Bignona</option>
                </optgroup>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Localisation</label>
            <select name="itemLocalisation" class="form-control search-slt" id="exampleFormControlSelect1">
                <option selected disabled>Select une Localisation</option>
                <optgroup label="Vehicule">


                    <option>Voitures</option>
                    <option>Motos</option>
                    <option>Caravaning</option>
                    <option>Utilitaires</option>
                    <option>Nautisme</option>
                    <option>Équipement auto</option>
                    <option>Équipement moto</option>
                    <option>Équipement caravaning</option>
                    <option>Équipement nautisme</option>

                </optgroup>


                <optgroup label="Immobilier">

                    <option>Ventes immobilières</option>
                    <option>Locations</option>
                    <option>Colocations</option>
                    <option>Bureaux & Commerces</option>
                </optgroup>

                <optgroup label="Vacances">


                    <option>Locations & Gîtes</option>
                    <option>Chambres d'hôtes</option>
                    <option>Campings</option>
                    <option>Hébergements insolites</option>
                </optgroup>

                <optgroup label="Multimédia">


                    <option>Informatique</option>
                    <option>Consoles & Jeux vidéo</option>
                    <option>Image & Son</option>
                    <option>Téléphonie</option>
                </optgroup>

                <optgroup label="Maison">


                    <option>Ameublement</option>
                    <option>Électroménager</option>
                    <option>Arts de la table</option>
                    <option>Décoration</option>
                    <option>Linge de maison</option>
                    <option>Bricolage</option>
                    <option>Jardinage</option>
                </optgroup>

                <optgroup label="Mode">


                    <option>Vêtements</option>
                    <option>Chaussures</option>
                    <option>Accessoires & Bagagerie</option>
                    <option>Montres & Bijoux</option>
                    <option>Équipement bébé</option>
                    <option>Vêtements bébé</option>
                </optgroup>

                <optgroup label="Loisirs">


                    <option>DVD - Films</option>
                    <option>CD - Musique</option>
                    <option>Livres</option>
                    <option>Animaux</option>
                    <option>Vélos</option>
                    <option>Sports & Hobbies</option>
                    <option>Instruments de musique</option>
                    <option>Collection</option>
                    <option>Jeux & Jouets</option>
                    <option>Vins & Gastronomie</option>
                </optgroup>

                <optgroup label="Matériel professionnel">


                    <option>Matériel agricole</option>
                    <option>Transport - Manutention</option>
                    <option>BTP - Chantier gros-oeuvre</option>
                    <option>Outillage - Matériaux 2nd-oeuvre</option>
                    <option>Équipements industriels</option>
                    <option>Restauration - Hôtellerie</option>
                    <option>Fournitures de bureau</option>
                    <option>Commerces & Marchés</option>
                    <option>Matériel médical</option>
                </optgroup>

                <optgroup label="Services">


                    <option>Prestations de services</option>
                    <option>Billetterie</option>
                    <option>Évènements</option>
                    <option>Cours particuliers</option>
                    <option>Covoiturage</option>
                </optgroup>

                <optgroup label="Divers">


                    <option>Autres</option>
                </optgroup>

            </select>
        </div>
    </div>
    <div class="form-group col-md-4" style="margin-left: 70px">
        <label for="inputAddress">Titre</label>
        <input name="itemTitre" type="text" class="form-control" id="inputAddress" placeholder="table a manger en bon etats" required>
    </div>
    <div class="form-group col-md-4" style="margin-left: 70px">
        <label for="exampleFormControlTextarea1" >Example textarea</label>
        <textarea name="itemMessage" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
    </div>

        <div class="form-group col-md-4" style="margin-left: 80px">

            <label for="inputZip">Prix</label>

            <input name="itemPrix" type="text" class="form-control" id="inputZip" required>
        </div>
    </br>
    </br>
    <p style="margin-left: 90px ;"><strong>Photos : Une annonce avec photo est 7 fois plus consultée qu'une annonce sans photo </br></strong></p>


    </br>
    </br>

    <div class="container">
        <div class="row">
            <div class="col-md-2 col-xs-1" >
                <img id="photoPrincipale" src="src/images/photoPrincipale.PNG",alt="photo principal" style="cursor:pointer">
                <input name="fileToUpload" type="file"  id="fileToUpload" accept=".gif,.jpg,.jpeg,.png" style="display:none" onchange="uploadImage(this)"/>

            </div>
            <div class="col-md-2 col-xs-1" >
                <img id="photo2" src="src/images/photo.PNG",alt="photo" style="cursor:pointer">
                <input name="file2ToUpload" type="file" id="file2ToUpload" accept=".gif,.jpg,.jpeg,.png" style="display:none" onchange="uploadImage2(this)"/>


            </div>
            <div class="col-md-2 col-xs-1" >
                <img  id="photo3" src="src/images/photo.PNG",alt="photo" style="cursor:pointer">
                <input name="file3ToUpload" type="file" id="file3ToUpload" accept=".gif,.jpg,.jpeg,.png" style="display:none" onchange="uploadImage3(this)"/>


            </div>
            <div class="col-md-2 col-xs-1" >
                <img  id="photo4" src="src/images/photo.PNG",alt="photo" style="cursor:pointer">
                <input name="file4ToUpload" type="file" id="file4ToUpload"  accept=".gif,.jpg,.jpeg,.png" style="display:none" onchange="uploadImage4(this)"/>


            </div>
            <div class="col-md-2 col-xs-1" >
                <img  id="photo5" src="src/images/photo.PNG",alt="photo" style="cursor:pointer">
                <input name="file5ToUpload" type="file" id="file5ToUpload" accept=".gif,.jpg,.jpeg,.png" style="display:none" onchange="uploadImage5(this)"/>


            </div>
            </br>
            <span id='messageIfSameImages' class="col-lg-12"></span>
        </div>

        </br>
        </br>

        <button name="submitAnnonce" type="submit" id="submitAnnonce" class="btn btn-primary col-lg-3" style="margin-left: 4px">Valider</button>

    </div>

</form>
</br>
</br>
</br>



<script>
    var names=["0","1","2","3","4"];


    $("#photoPrincipale").click(function () {
        $("#fileToUpload").trigger('click');
    });
    $("#photo2").click(function () {
        $("#file2ToUpload").trigger('click');
    });
    $("#photo3").click(function () {
        $("#file3ToUpload").trigger('click');
    });
    $("#photo4").click(function () {
        $("#file4ToUpload").trigger('click');
    });
    $("#photo5").click(function () {
        $("#file5ToUpload").trigger('click');
    });

    function checkIfNamesIsTheSame() {
        if(names.length>1){
            for(var i=0;i<names.length;i++){
                for(var j=i+1; j<names.length;j++){
                    if(names[i]==names[j]){
                        document.getElementById('messageIfSameImages').style.color = 'red';
                        document.getElementById('messageIfSameImages').innerHTML = 'l\'images '.concat(names[i]).concat(' et present plusieurs fois!!');
                        return true;
                    }
                }
            }

        }
        document.getElementById('messageIfSameImages').innerHTML ="";
        return false;
    }
    function uploadImage(input) {
        if (input.files && input.files[0]) {
            names[0]=document.getElementById("fileToUpload").value.split(/(\\|\/)/g).pop();
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#photoPrincipale')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(150);

            };


            reader.readAsDataURL(input.files[0]);

            if(checkIfNamesIsTheSame()){
                document.getElementById("submitAnnonce").disabled=true;
            }else {
                document.getElementById("submitAnnonce").disabled=false;

            }
        }


    }


    function uploadImage2(input) {
        if (input.files && input.files[0]) {
            names[1]=document.getElementById("file2ToUpload").value.split(/(\\|\/)/g).pop();
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#photo2')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(150);

            };


            reader.readAsDataURL(input.files[0]);

            if(checkIfNamesIsTheSame()){
                document.getElementById("submitAnnonce").disabled=true;
            }else {
                document.getElementById("submitAnnonce").disabled=false;

            }
        }


    }


    function uploadImage3(input) {
        if (input.files && input.files[0]) {
            names[2]=document.getElementById("file3ToUpload").value.split(/(\\|\/)/g).pop();

            var reader = new FileReader();

            reader.onload = function (e) {
                $('#photo3')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(150);

            };


            reader.readAsDataURL(input.files[0]);

            if(checkIfNamesIsTheSame()){
                document.getElementById("submitAnnonce").disabled=true;
            }else {
                document.getElementById("submitAnnonce").disabled=false;

            }
        }


    }


    function uploadImage4(input) {
        if (input.files && input.files[0]) {
            names[3]=document.getElementById("file4ToUpload").value.split(/(\\|\/)/g).pop();


            var reader = new FileReader();

            reader.onload = function (e) {
                $('#photo4')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(150);

            };


            reader.readAsDataURL(input.files[0]);

            if(checkIfNamesIsTheSame()){
                document.getElementById("submitAnnonce").disabled=true;
            }else {
                document.getElementById("submitAnnonce").disabled=false;

            }
        }


    }

    function uploadImage5(input) {
        if (input.files && input.files[0]) {
            names[4]=document.getElementById("file5ToUpload").value.split(/(\\|\/)/g).pop();

            var reader = new FileReader();

            reader.onload = function (e) {
                $('#photo5')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(150);

            };


            reader.readAsDataURL(input.files[0]);

            if(checkIfNamesIsTheSame()){
                document.getElementById("submitAnnonce").disabled=true;
            }else {
                document.getElementById("submitAnnonce").disabled=false;

            }
        }


    }



</script>
</body>
</html>