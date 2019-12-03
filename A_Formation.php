<?php
    include_once 'head.php';
    include_once 'bdd.php';
    
    if($_SESSION['user'] != 3){
        header('location: index.php');
    }else {
?>

<body>
        <h1>Liste des Formations</h1>
        <?php
            $statement=$db -> prepare("SELECT * FROM CLASS");
            $statement -> execute();

            while($row = $statement->fetch()) {
                echo "<input type='checkbox' name='classe' value='".$row['idClass']."'>".$row['shortName']." ";
            } 
        ?>
        <input type="submit" value="Ajouter">
        <input type="submit" value="Modifier">
        
        <input type="submit" value="Supprimer">
        <?php
            $statement=$db -> prepare("DELETE FROM `ROOM` WHERE id = ".$idClass);
            $statement -> execute();
        ?>
            
    </body>
</html> 

<?php
}
?>