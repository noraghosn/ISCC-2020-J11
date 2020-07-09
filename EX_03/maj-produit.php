<?php
    function connect_to_database (){
        $servername= "localhost";
        $username= "root";
        $password="root";
        $databasename= "basetest01";

        try{
            $pdo=new PDO ("mysql:host=$servername; dbname=$databasename", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

            echo "Connected successfully <br>";
            return $pdo;
        }

        catch (PDOException $e) {
            echo "Connection failed:". $e->getMessage();
        }
    }
    $pdo=connect_to_database();

    function maj($pdo){
        try{
            $requete= "UPDATE produit
            SET quantité='1' 
            WHERE id='4'";
            $pdo->exec($requete);
            echo "success";
        }
        catch (PDOException $e) {
            echo "Erreur insert". $e->getMessage();
        }
    }
    maj($pdo);
    
?>
