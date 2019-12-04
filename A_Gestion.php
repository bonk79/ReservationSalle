<?php
        include_once 'head.php';
        include_once 'bdd.php';
        
        if($_SESSION['user'] != 3){
            header('location: index.php');
        }else {
        ?>
    
    <body>
        <br><br><h1 class="text-center display-1" >Gestionnaire</h1><br><br><br><br>
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class=" col-md-8">
        
            <button type="button" class="btn btn-dark btn-lg btn-sm btn-block" href="A_Salle">Salle</button><br><br>
            <button type="button" class="btn btn-dark btn-lg btn-sm btn-block" href="A_Formation">Formation</button><br><br>
            <button type="button" class="btn btn-dark btn-lg btn-sm btn-block" href="#">Com Utilisateur</button><br><br>
            <button type="button" class="btn btn-dark btn-lg btn-sm btn-block" href="#">Créneaux Horaires</button><br><br>
            <button type="button" class="btn btn-dark btn-lg btn-sm btn-block" href="#">Formation par Salle</button><br><br>
            <button type="button" class="btn btn-dark btn-lg btn-sm btn-block" href="#">Référent par Formation</button><br><br>
            <button type="button" class="btn btn-dark btn-lg btn-sm btn-block" href="A_Planning">Planning</button>
        </div>
                </div>
            </div>
        </main>
    </body>
</html> 

<?php
}
?>