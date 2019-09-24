<?php
// On démarre la session AVANT d'écrire du code HTML

// je sais que c de la merde mais ne me juge pas j'avais sommeil
if(!session_id()) {
    session_start();
}

if(htmlspecialchars(isset($_GET["action"])) )
{
    if(isset($_GET["action"])=="deconnexion")
    {
        session_destroy();
        unset($_COOKIE["email"]);
        // empty value and expiration one hour before
        $res = setcookie("email", '', time() - 3600);
    }

}
if(htmlspecialchars(isset($_POST["rememberMe"])) )
{
    if(isset($_POST["email"]))
    setcookie('email', $_POST["email"], time() + 0.1*24*3600, null, null, false, true);

}
//if(htmlspecialchars(isset($_POST["email"])) and htmlspecialchars(isset($_POST["password"])))
//{
 //   $_SESSION["email"]=$_POST["email"];

//}
if(htmlspecialchars(isset($_COOKIE["email"]))){
    $_SESSION["email"]=$_COOKIE["email"];

}

?>
<!-- don't try to undestund this code! you will lose your mind-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="src/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- polices pour les titres -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
    <script defer src= "https://use.fontawesome.com/releases/v5.0.6/js/all.js "></script>


</head>
<body>


<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=ykamis;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

// ici je gere l'inscription des nouveau membres
  if(htmlspecialchars(isset($_POST['registerButton'])))
  {
// je me connecte a la base de donner



      $nom = $_POST['firstName'];
      $prenom = $_POST['lastName'];
      $email =$_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $birthday = $_POST['birthDate'];
    $numero = $_POST['phoneNumber'];

      $sql = "INSERT   user (nom, prenom, email, password, birthday, numero) VALUES(?,?,?,?,?,?)";
      $stmtinsert = $bdd->prepare($sql);
      $result = $stmtinsert->execute([$nom, $prenom, $email, $password, $birthday, $numero]);
      if($result){
          echo 'Successfully saved.';
      }else{
          echo 'There were erros while saving the data.';
      }

      $_SESSION["email"]=$_POST["email"];

  }

//$reponse = $bdd->query('SELECT * FROM user');

//while ($donnees = $reponse->fetch())
//{
 //   echo $donnees['nom'] . '<br />';
//}

//$reponse->closeCursor();


?>

<?php

if(htmlspecialchars(isset($_POST["submitLogin"])))
{
    $email=$_POST["email"];
//  Récupération de l'utilisateur et de son pass hashé
    $req = $bdd->prepare('SELECT id, password FROM user WHERE email = :email');
    $req->execute(array(
        'email' => $email));

    $resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

    if (!$resultat)
    {
        $_SESSION["error"]="Mauvais identifiant mot de passe !";
        echo 'Mauvais identifiant mot de passe !';
        header("location:logIn.php");
        return;
    }
    else
    {
        if ($isPasswordCorrect) {
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['email'] = $email;

            echo 'Vous êtes connecté !';
            $_SESSION["error"]='';
        }
        else {
            $_SESSION["error"]="Mauvais identifiant mot de passe !";
            echo 'Mauvais identifiant ou mot de passe !';
            header("location:logIn.php");

            return;
        }
    }



}

?>

<?php
if(htmlspecialchars(isset($_SESSION["email"])) or htmlspecialchars(!isset($_POST["submitLogin"])) or htmlspecialchars(!isset($_POST["registerButton"])))
include ("rechercheform.php");
$_SESSION["error"]='';
    ?>
<?php include ("header.php");?>

<!-- nous allons recuperer les donner provenend de pages -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="src/js/main.js"></script>
</body>

</html>