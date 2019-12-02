<?php
    include_once 'head.php';
    include_once 'bdd.php';
?>

<body>
        <h1>Liste des Salles</h1>
        <?php
            $statement=$db -> prepare("SELECT * FROM ROOM");
            $statement -> execute();

            while($row = $statement->fetch()) {
                echo "<input type='checkbox' name='salle' value='".$row['idRoom']."'>".$row['name']." ";
            } 
        ?>
        <input type="submit" value="Ajouter">
        <input type="submit" value="Modifier">
        
        <input type="submit" value="Supprimer">
        <?php
            $statement=$db -> prepare("DELETE FROM `ROOM` WHERE id = ".$idRoom);
            $statement -> execute();
        ?>
            
    </body>
</html> 
