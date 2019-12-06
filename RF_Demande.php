<!-- @author: bonk !-->
        <?php
        include_once 'head.php';
        include_once 'bdd.php';
        $valider = "";
        $refuser="";
        if($_SESSION['user'] != 2){
            header('location: index.php');
        }else {
        ?>
    
     <form action="http://www3.futaie.org:4281/~bonk/Pj_ReservationSalle/logout.php">
        <button type="submit" class="btn btn-outline-danger btn-sm">Se déconnecter</button><br><br>
     </form>
    <body>
        <br><br><h1 class="text-center display-1" >Demandes de Réservation</h1><br><br><br>
        
        <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark"> 
            <tr>
                <th>Nom Etudiant </th>
                <th>Classe </th>
                <th>Salle </th>
                <th>Date </th>
                <th>Heure </th>
                <th>Commentaire </th> 
                <th>Décision</th>
            </tr>
        </thead>
     
        <div class="form-check">
            
            <?php
            if( empty($_POST["valider"]) && empty($_POST["refuser"]) ) 
{ 
   
    
   echo $valider = "Il faut cocher au moins un des choix";
    
}
else { 
    
    echo "Checkbox was checked."; 
    
    
}

                $statement=$db -> prepare("SELECT * FROM BOOKING INNER JOIN ACCOUNT ON BOOKING.idBooking = ACCOUNT.idAccount"
                . " INNER JOIN TIMESLOT ON BOOKING.idTimeSlot = TIMESLOT.idTimeSlot"
                . " INNER JOIN CLASS ON ACCOUNT.idClass = CLASS.idClass"
                . " INNER JOIN ROOM ON BOOKING.idBooking = ROOM.idRoom ");
                $statement -> execute();
                    while($row = $statement->fetch()) {
                        echo "<tr><td>".$row['firstName']." ".$row['lastName']." "."</td>";
                        echo "<td>".$row['shortName']." "."</td>";
                        echo "<td>".$row['name']." "."</td>";
                        echo "<td>".$row['date']." "."</td>";
                        echo "<td>".$row['start']." ".$row['end']."</td>";
                        echo "<td>".$row['commentaire']." "."</td>";
                        echo "<td>".'<form method="POST" action="RF_Demande.php">'.
                            '<input class="form-check-input" type="radio" name="valider" value="valider"> Valider'.'<label class="form-check-label" for="message">'.$valider.'</label>'.'<br>'.
                            '<input class="form-check-input" type="radio" name="refuser" value="refuser"> Refuser'.'<label class="form-check-label" for="message">'.$refuser.'</label>'.'<br>'.
                            '<label class="form-check-label" for="message">Justification : </label>'.'<br>'.
                            '<textarea class="form-control" rows="2" cols="25" type="text" name="justification" id="justification" required >'.'</textarea><br>'.
                            '<input class="form-check-input btn btn-outline-primary btn-sm" type="submit" value="Confirmer">'.'</form></td></tr>';
                    } 
                    
                   
                        
                    
            ?>
            </div>
        </table>
    </body>
</html> 

<?php
}
?>