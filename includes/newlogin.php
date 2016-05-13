<?php
require_once ('bdd.php');
require_once ('function/function.php')
?>

<body>
    <div class="inner">
        <h1>Rejoignez le réseau de développeurs aujourd'hui !</h1>
        <section>
            <img src="assets/img/logo.png" alt="logo">
            <form action="index.php?p=newuser" method="post">
                <input type="text autofocus" placeholder="Identifiant" name="pseudo">
                <input type="text" placeholder="Adresse email" name="adresse_mail">
                <input type="password" placeholder="Mot de passe" name="pw">
                <input type="password" placeholder="Encore mot de passe" name="confirm_pass">
                <input type="submit" name="submit" VALUE="S'inscrire">
            </form>
            <a href="login.html">J'ai déjà un compte, <span>je me connecte</span></a>
        </section>
        <p class="small">Eh oui, nous sommes les meilleurs.</p>
    </div>
</body>

<?php
// 
if(isset($_POST['pw'])!== isset($_POST['confirm_pass']))
{
    echo "mot de passe et confirmation differents<br>";
}
if(isset($_POST['pw'])&&isset($_POST['confirm_pass'])&&$_POST['pw']===$_POST['confirm_pass']) {
    
    //insertion des infos dans la bdd
    insertbdd($bdd);
    //pop d'un boutton pour aller sur le login
    
   
}
