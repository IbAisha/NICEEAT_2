
    
    <?php 
   
    require_once("./parts/nav.style.php");
    require_once "./parts/nav.form.php";
    ?>
    
    <div id="formCase">

        <form action="" method="POST">

        <h2 class="textCenter">Connectez-vous</h2>

        <?php require_once('config.login.php'); ?>

        <div class="center" id="input">
            <div id="emailInput">
                <label for="email">E-mail :</label>
                <input type="text" name="email" >

            </div>

            <div id="pswdInput">
                <label for="pswd">Mot de passe : </label>
                <input type="password" name="pswd" >
            </div>
           

            <div id="logoInButton">
                <button type ="submit" name="button"> Connexion</button>
            </div>

            <div class="text-bottom-form">
                <span class="textCenter">Vous n'avez pas encore de compte ? <a href="signup.form.php">Inscrivez-vous</a></span>
                <p>Mot de passe oublié ?</p>
            </div>
            
            


        </div>
        
        </form>
    
    </div>
    <script src="main.js"></script>
</body>
