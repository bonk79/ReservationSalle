
        <?php
        include_once 'head.php';
        ?>
    
    <body>
        <h1>Demandes de Réservation</h1>
        
        <table>
            <tr>
                <th>Nom Etudiant </th>
                <th>Classe </th>
                <th>Salle </th>
                <th>Date </th>
                <th>Heure </th>
                <th>Commentaire </th> 
                <th>Décision</th>
            </tr>
     
                <?php
    
    $statement=$db -> prepare("SELECT * FROM BOOKING INNER JOIN ACCOUNT ON BOOKING.idBooking = ACCOUNT.idAccount"
            . " INNER JOIN TIMESLOT ON BOOKING.idTimeSlot = TIMESLOT.idTimeSlot INNER JOIN CLASS ON ACCOUNT.idClass = CLASS.idClass INNER JOIN ROOM ON BOOKING.idBooking = ROOM.idRoom ");
                        $statement -> execute();
                        while($row = $statement->fetch()) {
                            echo "<tr><td>".$row['firstName']." ".$row['lastName']." "."</td>";
                             echo "<td>".$row['shortName']." "."</td>";
                             echo "<td>".$row['name']." "."</td>";
                             echo "<td>".$row['date']." "."</td>";
                            echo "<td>".$row['start']." ".$row['end']."</td>";
                           echo "<td>".$row['commentaire']." "."</td></tr>";
                        } 
    
    
    ?>
            <tr>
                <td>
                    <form action="/action_page.php">
                        <input type="checkbox" name="valider" value="Valider"> Valider<br>
                        <input type="checkbox" name="refuser" value="Refuser"> Refuser<br>
                        <label for="message">Justification : </label><br>
                        <textarea rows="5" cols="70" type="text" name="justification" id="justification" required ></textarea><br>
                        <input type="submit" value="Confirmer">
                    </form>
                </td>
        </tr>
        </table>
        
    </body>
</html> 

