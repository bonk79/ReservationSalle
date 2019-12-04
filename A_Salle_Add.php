<?php
    include_once 'head.php';
    include_once 'bdd.php';
    
    if($_SESSION['user'] != 3){
        header('location: index.php');
    }else {
?>

<body>
    <br><br><h1 class="text-center display-1" >AJOUT D'UNE SALLE</h1><br><br><br><br>
        
    <main class="login-form">
        <div class="row justify-content-center">
            <div class="col-md-4">
                        
            <form method="POST" action="">
                    <?php
                        $statement=$db -> prepare("SELECT * FROM ROOM");
                        $statement -> execute();

                        while($row = $statement->fetch()) {
                            echo "";
                        } 
                    ?>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Dénomination</span>
                        </div>
                        <input type="text" class="form-control" >
                    </div><br>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Location</span>
                        </div>
                        <input type="text" class="form-control" >
                    </div><br>
                    
                        <h3 class="form-check-label" >Tableau : </h3><br>
                        <input class="form-check-input" type="radio" id="Oui" name="Oui" value="Oui"><br>
                        <label for="Oui">Oui</label>
                        <input class="form-check-input" type="radio" id="Non" name="Non" value="Non"><br>
                        <label for="Non">Non</label>
                        
                        //"<input id='radio' type='radio' value='".$row['idRoom']."' name='salle'>".$row['name']."   "
                    </div>
                    
            </form>
            
            </div>
        </div>
    </main>
</body>
</html> 

<?php
}
?>