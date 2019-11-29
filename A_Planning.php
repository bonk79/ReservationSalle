
        <?php
        include_once 'head.php';
        ?>

    <body>
        <h1>PLANNING</h1><br>
        <table>
            <tr>
                <th>Salle</th>
                <th>Creneaux Horaire</th>
                <th>Jour</th>
            </tr>
            
            
                    <?php
                        $statement=$db -> prepare("SELECT * FROM AVAILABILITY INNER JOIN ROOM ON AVAILABILITY.idRoom = ROOM.idRoom"
                                . " INNER JOIN TIMESLOT ON AVAILABILITY.idTimeSlot = TIMESLOT.idTimeSlot");
                        $statement -> execute();

                        while($row = $statement->fetch()) {
                            echo "<tr><td>".$row['name']."</td>";
                            echo "<td>".$row['start']." - ".$row['end']."</td>";
                            echo "<td>".$row['jourSemaine']."</td></tr>";
                        } 
                    ?>
        </table>
        
    </body>
</html> 

