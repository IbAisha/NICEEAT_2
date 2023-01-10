    <?php 
    require_once "parts/nav.style.php";
    require_once "parts/nav.form.php";
    ?> 
  
        <div id="formCase">

            <form action="" method="POST">

            <h2 class="textCenter">Inscrivez-vous</h2>
            <?php require_once("./config.signup.php"); ?>

            <div class="center" id="input">
                
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom">

                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom">

                    <label for="email">Adresse email: </label>
                    <input type="text" name="email" >

                    <label for="pswd">Mot de passe : </label>
                    <input type="password" name="pswd" >
                </div>
            

                <div id="logoInButton">
                    <button type ="submit" name="button"> S'inscrire</button>
                </div>

            </div>
            
            </form>
        
        </div>
            <script src="main.js"></script>
    </body>
