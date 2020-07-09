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

        function insert_data($pdo){
            try{
                $requete = "INSERT INTO produit(id, nom, descriptio, prix, quantité) 
                VALUES('8', 'T-shirt noir', 'T-shirt coton de couleur noire', '15.50', '10')";

        $pdo->exec($requete);
        echo "success";
            }
            catch (PDOException $e) {
                echo "Erreur insert". $e->getMessage();
            }
        }
        insert_data($pdo);
        
?>