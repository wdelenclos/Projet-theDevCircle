<?php
require_once ('bdd.php');
require_once ('function/function.php');
?>
<body>
    <div class="inner">
        <h1>Entrez en interaction avec des développeurs comme vous !</h1>

        <section>
            <img src="assets/img/logo.png" alt="logo">
            <p id="erreur"></p>
            <form action="?p=login" method="post">
              
                
                <input class="user autofocus" type="text" placeholder="Identifiant" name="pseudo">
                <input class="pw lock" type="password" placeholder="Mot de passe" name="pw">
                <input class="submit" type="submit" name="submit" VALUE="Se connecter">
            </form>
            <a href="newuser.html">Pas encore de compte ? <span>En créer un</span></a>
        </section>
        
        <p class="small">Eh oui, nous sommes les meilleurs.</p>
    </div>
</body>
<?php
// rajouter par alexandre avec le dossier function
if(isset($_POST['pw'])) {
    login($bdd);
}?>