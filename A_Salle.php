<?php
    include_once 'head.php';
    include_once 'bdd.php';
    
    if($_SESSION['user'] != 3){
        header('location: index.php');
    }else {
?>

<body>
        <br><br><h1 class="text-center display-1" >Liste des Salles</h1><br><br><br><br>
        
        <main class="login-form">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        
        <form method="POST" action="">
        <?php
            $statement=$db -> prepare("SELECT * FROM ROOM");
            $statement -> execute();
            
            while($row = $statement->fetch()) {
                echo "<input type='radio' value='".$row['idRoom']."' name='salle'>".$row['name']." ";
            } 
        ?>
    <br><br><br><br>
            <div class="form-group row" class="form-control">
            <input type="submit" value="Ajouter">
            <input type="submit" value="Modifier">
            <input type="submit" value="Supprimer">
            </div>
        </form>
                        
            
        <?php
            $res = "'".$_POST['salle']."'";
            $statement=$db -> prepare("DELETE FROM ROOM WHERE idRoom = :idroom");
            $statement ->bindParam('idroom', $res);
            $statement -> execute();
            
            echo var_dump($res);
        ?>
           </div></div>
        </main>
    </body>
</html> 

<?php
}
?>