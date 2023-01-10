<?php



//PARTIE CONNEXION 

 function connexion() {

     if(isset($_POST['button'])){
         if(isset($_POST["email"], $_POST["pswd"])) {
            //Verifier si les informations entrées sont correctes
            
            $email = $_POST['email'];
             $pswd = $_POST['pswd'];

             $_SESSION['user']=$email;
            if (isset($_SESSION['user'])) {
                echo "connecté";
            }

             //hasher le mdp 
         
            // Requete  pour selectionner tout les utilisateurs 
            //Connexion bdd
   
            require_once('./connect.php');
   
            $req = mysqli_query($connexion, "SELECT * FROM `users` WHERE email='$email' AND pswd='$pswd'; ");
            $num_ligne = mysqli_num_rows($req); // compter le nombre de ligne ayant rapport a la requete SQL
            

              if( !empty($email) && !empty($pswd) && $num_ligne >= 1 ) {
                   header("Location: welcome.php");
                   exit(0);
             
              } elseif(empty($email) || empty($pswd)){
                  echo "Veuillez remplir les champs obligatoires";
              } else {
                  echo "Mot de passe incorrect";
              }
         }
    }
 }connexion();




   // $bdd = new PDO('mysql:host=localhost; dbname=form', "root", "root");
// // connexion à la bdd$

// $req = $bdd->prepare("SELECT * FROM form"); // la requete
// $req -> execute(); // envoi et execution en BDD
// $myForm = $req-> fetchAll(PDO :: FETCH_ASSOC);
// $req->closeCursor();

// if(isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['pswd'], $_POST['confirmed-pswd']) && !empty($_POST['Nom'] && !empty($_POST['prenom'] && !empty($_POST['email']) && !empty($_POST['pswd']) !empty($_POST['confirmed-pswd'])
// ) {
//     // le form est complet 
//     // On recupere les donné
// }

?>