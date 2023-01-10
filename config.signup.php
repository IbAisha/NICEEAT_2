<?php 

 if(isset($_POST['button'])){
         if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['pswd'])) {
                $nom = htmlentities($_POST['nom']);
                $prenom = htmlentities($_POST['prenom']);
                $email = strip_tags($_POST['email']);


         //Ajoutez ici tous les COntroles souhaités 
               if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                       echo "L'adresse email est valide";
                   }
                     
                $pswd = password_hash($_POST['pswd'], PASSWORD_ARGON2ID);

       
               // connexion bdd
               require_once('./connect.php');
                $req = mysqli_query($connexion, "INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `pswd`) VALUES (NULL, '$nom', '$prenom', '$email', '$pswd');");
       
               if(isset($_POST["nom"],$_POST["prenom"], $_POST["email"], $_POST["pswd"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["pswd"])
               ){
                       echo "Votre inscription a bien été enregistré !";
               }   else {
                       echo "Veuillez remplir les champs obligatoire";
               }
       }

         }
         

 
?>