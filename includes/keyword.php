

    
    <body>
    <div id="timer2"></div>
    <div id="timer1"></div>


    <nav>
        <ul class="verticalmenu">
            <li>
                <a href="#"><img src="assets/img/logo.png" alt="The Dev Circle"></a>
                
            </li>
            <li class="user"><a href="#" class="icon-user">User</a></li>
            <li class="match"><a href="#" class="icon-match">Match</a></li>
            <li class="exit"><a href="login.html" class="icon-exit">Exit</a></li>
           
            <script>
                <?php
                $tmflux = videMot($bdd);
                ?>


                timerUser( <?php echo $tmflux; ?> );

            </script>
            
           
        </ul>

    </nav>
    <?php

    if($_SESSION['mot'] == '' ||$_SESSION['mot'] == null || $_SESSION['mot'] == ' ' ){?>


        <section class="mots">
            <form action="update.html" method="post">

                <label for="">Je suis plutôt :</label>
                <select name="keyword">
                    <option value="1">Développeur Back</option>
                    <option value="2">Développeur Front</option>
                </select>
                <div class="clear"></div>
                <label for="">J'aime coder en</label>
                <input class="autofocus" type="text" name="mot">
                <input id="lancerLaRecherche" type="submit" value="Rechercher">
            </form>

            <div class="filter"></div>
        </section>

        <?php
        }
        ?>

            <section class="modale">

            </section>

            <!--    Début de la page section -->


    <?php
    if($_SESSION['prenom'] == ""){
        $_SESSION['prenom'] = "exemple";
    }
    if($_SESSION['nom'] == ""){
        $_SESSION['nom'] = "nom";
    }
    ?>
    <section class="profile">
        <div class="filter">
            <div class="secondary">

                    <div class="picture">
                        <a href="">
                            <img class="profilePicture ref" src="assets/img/pp/<?=$_SESSION['prenom']?>.jpg" alt="Photo de profil">
                            <img class="profilePicture hover" src="assets/img/editPicture.png" alt="Edit">
                        </a>
                    </div>
                    <div class="genre" >
                        <?php
                        if ($_SESSION['genre'] == "1") {?>
                            <img src="assets/img/picto/man.png" alt="Genre" class="igenre">
                            <img src="assets/img/picto/manEdit.png" alt="Genre" class="egenre">
                        <?php }
                        else {?>
                            <img src="assets/img/picto/woman.png" alt="Genre" class="igenre">
                            <img src="assets/img/picto/womanEdit.png" alt="Genre" class="egenre">
                            <?php
                        }
                        ?>
                        <p><?=$_SESSION['age']?> ans</p>
                        <input class="age autofocus" type="text" name="age" value="<?=$_SESSION['age']?>">
                    </div>
                <p> "Entrer" pour sauvegarder</p>
            </div>


            <div class="primary">
                <p class="info"></p>
                <h1><?=$_SESSION['prenom']?> <?=$_SESSION['nom']?><img src="assets/img/picto/edit.png" alt="Editer"></h1>
                <form action="" class="nom">
                    <input class="autofocus pnm" type="text" placeholder="Prénom" value="<?=$_SESSION['prenom']?>">
                    <input class="autofocus nm"type="text " placeholder="Nom" value="<?=$_SESSION['nom']?>">
                </form>
                <h2>Description<img src="assets/img/picto/edit.png" alt="Editer"></h2>
                <p type="text" name="desciption"><?=$_SESSION['description']?></p>
                <form action="" class="description">
                    <textarea class="autofocus" rows="4" cols="50"><?=$_SESSION['description']?></textarea>
                </form>
                <h2>Compétences</h2>
                
                <ul>
                    <li>
                        <img src="assets/img/language/blackWhite/html5.png" alt="HTML 5" class="icomp C1">
                        <img src="assets/img/language/color/html5.png" alt="HTML 5" class="ecomp C1">
                    </li>
                    <li>
                        <img src="assets/img/language/blackWhite/mysql.png" alt="MySQL" class="icomp C2">
                        <img src="assets/img/language/color/mysql.png" alt="MySQL" class="ecomp C1">
                    </li>
                    <li>
                        <img src="assets/img/language/blackWhite/jquery.png" alt="jQuery" class="icomp C3">
                        <img src="assets/img/language/color/jquery.png" alt="jQuery" class="ecomp C1">
                    </li>
                    <li>
                        <img src="assets/img/language/blackWhite/css3.png" alt="CSS3" class="icomp C4">
                        <img src="assets/img/language/color/css3.png" alt="CSS3" class="ecomp C4">
                    </li>
                    <li>
                        <img src="assets/img/language/blackWhite/ruby.png" alt="RUBY" class="icomp C5">
                        <img src="assets/img/language/color/ruby.png" alt="RUBY" class="ecomp C5">
                    </li>
                    <li>
                        <img src="assets/img/language/blackWhite/php.png" alt="PHP" class="icomp C6">
                        <img src="assets/img/language/color/php.png" alt="PHP" class="ecomp C6">
                    </li>
                    <li>
                        <img src="assets/img/language/blackWhite/java.png" alt="Java" class="icomp C7">
                        <img src="assets/img/language/color/java.png" alt="Java" class="ecomp C7">
                    </li>
                    <li>
                        <img src="assets/img/language/blackWhite/node.png" alt="nodeJS" class="icomp C8">
                        <img src="assets/img/language/color/node.png" alt="nodeJS" class="ecomp C8">
                    </li>
                </ul>

                <ul>
                    <li>
                        <a href="">
                            <img src="assets/img/language/blackWhite/html5.png" alt="HTML 5">
                            <img src="assets/img/language/color/html5.png" alt="HTML 5">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="assets/img/language/blackWhite/mysql.png" alt="MySQL">
                            <img src="assets/img/language/color/mysql.png" alt="MySQL">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="assets/img/language/blackWhite/jquery.png" alt="jQuery">
                            <img src="assets/img/language/color/jquery.png" alt="jQuery">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="assets/img/language/blackWhite/css3.png" alt="CSS3">
                            <img src="assets/img/language/color/css3.png" alt="CSS3">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="assets/img/language/blackWhite/ruby.png" alt="RUBY">
                            <img src="assets/img/language/color/ruby.png" alt="RUBY">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="assets/img/language/blackWhite/php.png" alt="PHP">
                            <img src="assets/img/language/color/php.png" alt="PHP">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="assets/img/language/blackWhite/java.png" alt="Java">
                            <img src="assets/img/language/color/java.png" alt="Java">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="assets/img/language/blackWhite/node.png" alt="nodeJS">
                            <img src="assets/img/language/color/node.png" alt="nodeJS">
                        </a>
                    </li>
                </ul>


            </div>

        </div>
    </section>

        <?php
        $mot = $_SESSION['mot'];
        $nbBulles = nbResult($bdd, $mot);

        ?>
    
            <section class="map">
                  
                <div id="container" class="map-match" style="width:100%; height:100%; overflow:hidden; position:absolute;"></div>

                


            </section>
            <script type="text/javascript" src="js/jquery.js"></script>
            <?php require_once('js/moteurJS.php'); ?>
</body>