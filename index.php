<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="ShowPassword.js"></script>

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
    
    <h1>ACCUEIL</h1>
    <body>
        <h3>Connectez-vous avec votre identifiant et votre mot de passe :</h3>
        
        <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
                <div class="form-wrap">
        <form method="post" action="">
            <div class="form-group">
                <label for="pseudo">Pseudo : </label><br>
                <input type="text" class="form-control" name="pseudo" id="pseudo" required ><br><br>
            </div>
            <div class="form-group">    
                <label for="password">Mot de Passe : </label><br>
                <input type="password" class="form-control" name="password" id="password" required ><br><br>
            </div>
            <div class="checkbox">
                <span class="character-checkbox" onclick="showPassword()"></span>
                <span class="label">Show password</span>
            </div>
                <input type="submit" class="btn btn-primary" value="Login" ><br><br>
        </form>
                    </div></div></div></div>
    </body>
</html> 
