<?php 
        /*
           Attention ! le host => l'adresse de la base de données et non du site !!           
         */
    try 
    {
        $bdd = new PDO("mysql:host=mysql-clementszewczyk.alwaysdata.net;dbname=clementszewczyk_test;charset=utf8", "263261", "Bonjour.Coucou");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
?> 