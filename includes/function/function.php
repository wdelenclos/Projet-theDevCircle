<?php


function consoleLog( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}


function addbdd($bdd)
{
    $sql = "INSERT INTO `user`
        (id, pseudo, pw , adresse_mail, nom, prenom, age, genre)
        VALUES
        ( null, :pseudo, :pw ,:adresse_mail, :nom, :prenom, :age, :genre)
        ";
    $stmt = $bdd->prepare( $sql );
    $stmt->bindValue( ':pseudo' , htmlspecialchars($_POST['pseudo']) );
    $stmt->bindValue( ':pw' ,  sha1($_POST['pw'] ));
    $stmt->bindValue( ':nom' ,  $_POST['nom']);
    $stmt->bindValue( ':prenom' ,  $_POST['prenom']);
    $stmt->bindValue( ':age' ,  $_POST['age']);
    $stmt->bindValue( ':genre' ,  $_POST['genre']);
    $stmt->bindValue( ':adresse_mail' , htmlspecialchars($_POST['adresse_mail']) );
    $stmt->execute();
    header('Location:accueil.html');
}
function insertbdd($bdd)
{
    $sql = "INSERT INTO `user`
        (id, pseudo, pw , adresse_mail)
        VALUES
        ( null, :pseudo, :pw ,:adresse_mail)
        ";
    $stmt = $bdd->prepare( $sql );
    $stmt->bindValue( ':pseudo' , htmlspecialchars($_POST['pseudo']) );
    $stmt->bindValue( ':pw' ,  sha1($_POST['pw'] ));
    $stmt->bindValue( ':adresse_mail' , htmlspecialchars($_POST['adresse_mail']) );
    $stmt->execute();
    header('Location:login.html');
}

function login ($bdd) {
    // Hachage du mot de passe
    $pass_hache = sha1($_POST['pw']);

// Vérification des identifiants
    $req = $bdd->prepare('SELECT id, pseudo
                        FROM `user`
                        WHERE pseudo = :pseudo AND pw = :pw');
    $req->bindValue(':pseudo',$_POST['pseudo']);
    $req->bindValue(':pw',$pass_hache);
    $req->execute();
    $resultat = $req->fetch();
    if (!$resultat)
    {
        echo '<script type=\'text/javascript\'>document.getElementById("erreur").innerHTML += "Mauvais mot de passe ou login !"; document.getElementById("erreur").style.color =  "#e57c81";</script>';

        
    }
   else
    {
        echo '<script type=\'text/javascript\'>document.getElementById("erreur").innerHTML += "Connexion ..."; document.getElementById("erreur").style.color =  "#41a28f";</script>';

        echo "<script type='text/javascript'>document.location.replace('accueil.html');</script>";
        session_start();
        $_SESSION['pseudo'] = $_POST['pseudo'];
    }
}

function update ($bdd)
    {
    $heure = time();
   
      if($_POST['keyword'] == 1)
        {
            $phrase = "Dev Back";
            $mot = $_POST['mot']."B";
        }else
        {
            $phrase = "Dev Front";
            $mot = $_POST['mot']."F";
        }
        $sql ="UPDATE `user`
               SET `phrase`=:phrase,
                    `mot`=:mot,
                    `modif`=:modif
                WHERE id=".$_SESSION['id'];
        $stmt = $bdd->prepare($sql);
        $stmt->bindValue(':phrase',$phrase);
        $stmt->bindValue(':mot',$mot);
        $stmt->bindValue(':modif',$heure);
        $stmt->execute();
    
        header('Location:accueil.html');

    }

/**
 * @param $bdd
 * @return int
 */
function videMot($bdd){
    // Recupération timestamp modif
    $req = $bdd->prepare('SELECT modif
                        FROM `user`
                        WHERE pseudo = "'.$_SESSION['pseudo'].'"');
    $req->execute();
    $trans = $req->fetch();
    $timeModif = $trans['modif'];
    $timeCurrent = time();
    $vide = '';
    $timeRest =  ($timeModif+900) - $timeCurrent ;

    if($timeCurrent > $timeModif+900){
         $sql ="UPDATE `user`
               SET `mot`=:mot,
               `modif`=:modif
                WHERE id=".$_SESSION['id'];
        $stmt = $bdd->prepare($sql);
        $stmt->bindValue(':mot',$vide);
        $stmt->bindValue(':modif',0 );
        $stmt->execute();
        return 0;



   }
    else if($timeCurrent < $timeModif+900){
        return $timeRest;
    }
}


function nbResult($bdd, $mot){
    $i = -1;
    $sql = "SELECT `id`, `mot`
        FROM `user`
        WHERE `mot` ='".$mot."'";
    // Il fallait faire une jointure SQL mais je n'ai pas réussi à la faire fonctionner ...
    $results = $bdd->query( $sql );
    
       if($mot == '' ||$mot == null || $mot == ' '){
           // Do nothing
       }
       else{
       while($nbResult = $results->fetchObject()){
       $i++;
      
        }}
    
        return $i;

}

function idResult($bdd, $mot){
    $tablId = array();
    $sql = "SELECT `id`, `mot`
        FROM `user`
        WHERE `mot` ='".$mot."'";
    $results = $bdd->query( $sql );
    
       if($mot == '' ||$mot == null || $mot == ' '){
           //Do nothing
       }
       else{
       while($rest = $results->fetchObject()){

           array_push($tablId, $rest->id);

        }}
    
        return $tablId;
}
