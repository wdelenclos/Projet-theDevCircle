<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=porjet_js','root','root');
}catch (PDOException $e) {
    $e->getMessage();
}