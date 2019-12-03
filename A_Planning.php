
        <?php
        include_once 'head.php';
        include_once 'bdd.php';
        
        if($_SESSION['user'] != 3){
             header('location: index.php');
        }else {
        ?>

    <body>
    <main>
        <br><br><h1 class="text-center" >PLANNING</h1><br><br><br><br>
        
            <div class="cotainer">
            <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="card">
        
        <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Salle</th>
                <th scope="col">Creneaux Horaire</th>
                <th scope="col">Jour</th>
            </tr>
        </thead>  
            
                    <?php
                        $statement=$db -> prepare("SELECT * FROM AVAILABILITY INNER JOIN ROOM ON AVAILABILITY.idRoom = ROOM.idRoom"
                                . " INNER JOIN TIMESLOT ON AVAILABILITY.idTimeSlot = TIMESLOT.idTimeSlot"
                                . " ORDER BY jourSemaine");
                        
                        $statement -> execute();

                        while($row = $statement->fetch()) {
                            echo "<tr><td>".$row['name']."</td>";
                            echo "<td>".$row['start']." - ".$row['end']."</td>";
                            echo "<td>".$row['jourSemaine']."</td></tr>";
                        } 
                    ?>
        </table>
        </div>
        </div>
        </div>
        </div>
    </main>    
    </body>
</html> 

<?php
}
?>