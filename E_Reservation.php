<?php

include_once 'head.php';
include_once 'bdd.php';

if($_SESSION['user'] != 1){
    header('location: index.php');
}else {

?>

    <body>
        
        
        <main class="login-form">
        <div class="row">
        <div class="col-4 container">
            <br><br><h1>RESERVATION D'UNE SALLE</h1><br><br><br><br>
        <form method="POST" action="">
            <aside>
                <h3>Sélectionner une Salle</h3><br>
                
                
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <select class="custom-select" id="inputGroupSelect01">
                    <?php
                        $statement=$db -> prepare("SELECT * FROM ROOM");
                        $statement -> execute();

                        while($row = $statement->fetch()) {
                            echo "<option name='salle' value='".$row['idRoom']."'>".$row['name']."</option>";
                        } 
                    ?>
                </select><br><br><br>
                </div>
                </div>

                <h3>Sélectionner un Créneaux Horaire</h3><br>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                <select class="custom-select" id="inputGroupSelect01">
                    <?php
                        $statement=$db -> prepare("SELECT * FROM TIMESLOT");
                        $statement -> execute();

                        while($row = $statement->fetch()) {
                            echo "<option name='creneaux' value='".$row['idTimeSlot']."'>".$row['start']." - ".$row['end']."</option>";
                        } 
                    ?>
                </select><br><br><br>
                </div>
                </div>
                
                <h3>Sélectionner une Date</h3><br>
                    <?php
                            $dateMin = date('Y-m-d');
                            $dateMax = date('Y-m-d', strtotime("+1 week"));
                            
                            echo "<input name='date' type='date' value='".$dateMin."' min='".$dateMin."' max='".$dateMax."'>";
                    ?>
                <br><br><br>
                
                <label for="message">Justification : </label><br>
                <input type="text" name="Commentaire" placeholder="OUI" id="message"><br><br><br>

                
                <?php
                    $statement=$db -> prepare("SELECT * FROM BOOKING"
                                            . " INNER JOIN ACCESS ON BOOKING.idRoom = ACCESS.idRoom"
                                            . " INNER JOIN CLASS ON ACCOUNT.idClass = CLASS.idClass");
                    $statement -> execute();
                        if ($row['idRoom'] == $row['idClass']){
                            $row['isAllowed'] = 1;
                        } else {
                            $row['isAllowed'] = 0;
                        }
                
                
                    $statement=$db -> prepare("INSERT INTO BOOKING ('isAllowed', 'isKeyOwner', 'idAccount', 'idTimeSlot', 'idRoom', 'date', 'commentaire')"
                                            . "VALUES ('".$isAllowed."', '".$isKeyOwner."', '".$account."', '".$timeSlot."' '".$room."', '".$date."', '".$comment."')");
                    $statement -> execute();
                    
                    echo "<input name='valider' type='submit' value='".$db."'>Valider ma réservation";
                ?>
            </aside>
        </form>
        </div>
        
         
            
        <div class="col-6 container">
            <br><br><h1>VOS INSCRIPTION</h1><br><br><br><br>  
        <section>
            
            
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Salle</th>
                    <th scope="col">Créneaux Horaire</th>
                    <th scope="col">Date</th>
                    <th scope="col">Responsable</th>
                    <th scope="col">Désinscription</th>
                </tr>
                </thead>
                
                <?php
                        $statement=$db -> prepare("SELECT * FROM BOOKING INNER JOIN ROOM ON BOOKING.idBooking = ROOM.idRoom"
                                            . " INNER JOIN TIMESLOT ON BOOKING.idTimeSlot = TIMESLOT.idTimeSlot");
                        
                        $statement -> execute();

                        while($row = $statement->fetch()) {
                            echo "<tr><td>".$row['name']."</td>";
                            echo "<td>".$row['start']." - ".$row['end']."</td>";
                            echo "<td>".$row['date']."</td>";
                            
                            if ($row['isKeyOwner'] == 1){
                                $row['isKeyOwner']="Oui";
                            } else {
                                $row['isKeyOwner']="Non";
                            }
                            
                            echo "<td>".$row['isKeyOwner']."</td>";
                            echo "<td>".'<button type="button" name="desinscrire"> Désinscription'."</td></tr>";
                        } 
                ?>
            </table>
        </section>
        </div>
            </div>
          

        </main>
    </body>
</html> 

<?php
}
?>