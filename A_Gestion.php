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
             
                <form action="http://www3.futaie.org:4281/~motardx/Pj_ReservationSalle/A_Salle.php">
                    <button type="submit" class="btn btn-dark btn-lg btn-sm btn-block">Salle</button><br><br>
                </form>
                <form action="http://www3.futaie.org:4281/~motardx/Pj_ReservationSalle/A_Formation.php">
                    <button type="submit" class="btn btn-dark btn-lg btn-sm btn-block">Formation</button><br><br>
                </form>
                <form action="http://www3.futaie.org:4281/~motardx/Pj_ReservationSalle/A_.php">
                    <button type="submit" class="btn btn-dark btn-lg btn-sm btn-block">Compte Utilisateur</button><br><br>
                </form>
                <form action="http://www3.futaie.org:4281/~motardx/Pj_ReservationSalle/A_.php">
                    <button type="submit" class="btn btn-dark btn-lg btn-sm btn-block">Créneaux Horaires</button><br><br>
                </form>
                <form action="http://www3.futaie.org:4281/~motardx/Pj_ReservationSalle/A_.php">
                    <button type="submit" class="btn btn-dark btn-lg btn-sm btn-block">Formation par Salle</button><br><br>
                </form>
                <form action="http://www3.futaie.org:4281/~motardx/Pj_ReservationSalle/A_.php">
                    <button type="submit" class="btn btn-dark btn-lg btn-sm btn-block">Référent par Formation</button><br><br>
                </form>
                <form action="http://www3.futaie.org:4281/~motardx/Pj_ReservationSalle/A_Planning.php">
                    <button type="submit" class="btn btn-dark btn-lg btn-sm btn-block">Planning</button>
                </form>
                    
                </div>
            </div>
        </div>
    </main>
</body>
</html> 

<?php
}
?>