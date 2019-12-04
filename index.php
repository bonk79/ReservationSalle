
<?php
    include_once 'head.php';
    include_once 'bdd.php';
     
        if(isset($_POST["pseudo"]) && isset($_POST["password"])){
    
            $pseudo=htmlspecialchars($_POST['pseudo']);
            $password=htmlspecialchars($_POST['password']);
    
        
                $statement=$db -> prepare("SELECT * FROM ACCOUNT");
                $statement -> execute();
        
                while($row = $statement->fetch()) {
                    if (($pseudo==$row['pseudo']) && (password_verify($password, $row['passHash']) == true)){
                        
                        $idAccreditation = $row['idAccreditation'];
                        switch ($idAccreditation) {
                            case 1:
                                $_SESSION['user']=1;
                                header ('location: E_Reservation.php');
                                break;
                            case 2:
                                $_SESSION['user']=2;
                                header ('location: RF_Demande.php');
                                break;
                            case 3:
                                $_SESSION['user']=3;
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
        
        <br><br><h1 class="text-center display-1" >ACCUEIL</h1><br><br><br><br><br>
        <main class="login-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            
                            <div class="card-header"><h3>Connectez-vous en inscrivant votre pseudo et votre mot de passe</h3></div>
                            <div class="card-body">
                                
                                <form action="" method="POST">
                                    <div class="form-group row">
                                        <label for="pseudo" class="col-md-4 col-form-label text-md-right">Pseudo : </label>
                                        <div class="col-md-6">
                                            <input type="text" id="pseudo" class="form-control" name="pseudo">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">Mot de Passe : </label>
                                        <div class="col-md-6">
                                            <input type="password" id="password" class="form-control" name="password">
                                        </div>
                                    </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary btn-sm btn-block">Se Connecter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        
    </body>
</html> 
