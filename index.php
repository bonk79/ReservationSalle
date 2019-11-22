<?php
    include_once 'head.php';
    include_once 'bdd.php';
    
        if(isset($_POST["pseudo"]) && isset($_POST["password"])){
    
            $pseudo=htmlspecialchars($_POST['pseudo']);
            $password=htmlspecialchars($_POST['password']);
    
                $db= new PDO(DSN, login, password,$option);
        
                $statement=$db -> prepare("SELECT * FROM ACCOUNT");
                $statement -> execute();
        
                while($row = $statement->fetch()) {
                    if (($pseudo==$row['pseudo']) && (password_verify($password, $row['passHash']) == true)){
                        
                        $idAccreditation = $row['idAccreditation'];
                        switch ($idAccreditation) {
                            case 1:
                                $_SESSION['etudiant']=1;
                                header ('location: E_Reservation.php');
                                break;
                            case 2:
                                $_SESSION['referent']=2;
                                header ('location: RF_Demande.php');
                                break;
                            case 3:
                                $_SESSION['admin']=3;
                                header ('location: A_Gestion.php');
                                break;
                        }
                
                    }else {
                        echo 'Adresse email erronée';
                    }
            
                }

        }
    ?>
    
    <body>
        <h1>ACCUEIL</h1>
        
        <form method="post" action="">
            
            <label for="pseudo">Pseudo : </label><br>
            <input type="text" name="pseudo" id="pseudo" required ><br><br>
                
            <label for="password">Mot de Passe : </label><br>
            <input type="password" name="password" id="password" required ><br><br>
            
            <input type="submit" value="Login" ><br><br>
        </form>
    </body>
</html> 
