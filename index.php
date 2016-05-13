<?php

require_once ('includes/bdd.php');
require_once ('includes/function/function.php');

    require_once('includes/head.php');

    
    if($_GET["p"] == 'login'){
        require_once('includes/login.php');//Ici la page le login
    }
    if($_GET["p"] == 'newuser'){
        require_once('includes/newlogin.php'); //Ici la page le nouveau login
    }
    if($_GET["p"] == 'accueil'){
        if (isset($_SESSION['pseudo'])){
            require_once('includes/keyword.php');
        }
       else{

           require_once('includes/login.php');
       }


    }
    if($_GET["p"] == 'update'){
        update($bdd);
    }

    require_once('includes/footer.php');