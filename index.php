<?php
    include_once 'head.php';
    include_once 'bdd.php';
    
        
        if(isset($_POST["pseudo"]) && isset($_POST["passHash"])){
    
            $pseudo=htmlspecialchars($_POST['pseudo']);
            $passHash=htmlspecialchars($_POST['passHash']);
    
            try {  
                $db= new PDO(DSN, login, passHash,$option);
        
                $statement=$db -> prepare("SELECT pseudo, passHash, mail FROM ACCOUNT");
                $statement -> execute();
        
                while($row = $statement->fetch()) {
                    if (($pseudo==$row['pseudo']) && (password_verify($password, $row['passHash']) == true)){
                        $row['idAccreditation'];
                        
                
                    }else {
                        header ('location: index.php');
                        echo 'Adresse email erronée';
                    }
            
                }

            }catch (PDOException $exc) {
                echo "<p>".$exc->getTraceAsString()."</p>";
                die("<p>"."echec : ".$exc->getMessage()."</p>");
            }
        }
    ?>
    
    <body>
        <h1>ACCUEIL</h1>
        
        <form method="post" action="login.php">
            <label for="mail">Adresse mail : </label><br>
            <input type="text" name="mail" id="mail" required ><br><br>
            
            <label for="pseudo">Pseudo : </label><br>
            <input type="text" name="pseudo" id="pseudo" required ><br><br>
                
            <label for="password">Mot de Passe : </label><br>
            <input type="password" name="password" id="password" required ><br><br>
            
            <label for="password2">Retaper votre Mot de Passe : </label><br>
            <input type="password" name="password2" id="password2" required ><br><br>
                
            <input type="submit" value="Login" ><br><br>
        </form>
    </body>
</html> 
