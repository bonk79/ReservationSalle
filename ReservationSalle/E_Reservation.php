<?php
include_once 'head.php';
include_once 'bdd.php';
?>

    <body>
        
        
        <main class="login-form">
        <div class="row">
        <div class="col-4 container">
            <h1>RESERVATION D'UNE SALLE</h1><br><br><br><br>
        <form method="POST" action="">
            <aside>
                <h3>Sélectionner une Salle</h3><br>
                
                <select>
                    <?php
                        $statement=$db -> prepare("SELECT * FROM ROOM");
                        $statement -> execute();

                        while($row = $statement->fetch()) {
                            echo "<option name='salle' value='".$row['idRoom']."'>".$row['name']."</option>";
                        } 
                    ?>
                </select><br><br><br>

                <h3>Sélectionner un Créneaux Horaire</h3><br>
                <select>
                    <?php
                        $statement=$db -> prepare("SELECT * FROM TIMESLOT");
                        $statement -> execute();

                        while($row = $statement->fetch()) {
                            echo "<option name='creneaux' value='".$row['idTimeSlot']."'>".$row['start']." - ".$row['end']."</option>";
                        } 
                    ?>
                </select><br><br><br>
                
                
                <h3>Sélectionner une Date</h3><br>
                <select>
                    <?php
                            $dateMin = date('d-m-Y');
                            $dateMax = mktime(0, 0, 0, date("d")+7,   date("m"),   date("Y"));
                            echo "<input name='date' type='date' value='".$dateMin."' min='".$dateMin."' max='".$dateMax."'>";
                            echo $dateMin;
                            echo $dateMax;
                    ?>
                </select><br><br><br>
                    
                
                <label for="message">Justification : </label><br>
                <input type="text" name="Commentaire" placeholder="OUI" id="message"><br><br><br>

                <input type="submit" value="Valider la Réservation">
                //return BOOKING
            </aside>
        </form>
        </div>
        
         
            
        <div class="col-6 container">
            <h1>VOS INSCRIPTION</h1><br><br><br><br>  
        <section>
            
            
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Salle</th>
                    <th scope="col">Créneaux Horaire</th>
                    <th scope="col">Date</th>
                    <th scope="col">Responsable</th>
                    <th scope="col">Désinscription</th>
                </tr>
                </thead>
                
                <tr>
                    <td></td>
                    <td>16h-18h</td>
                    <td>22/11/2019</td>
                    <td>Oui</td>
                    <td><button>Se Désinscrire</button></td>
                </tr>
            </table>
        </section>
        </div>
            </div>
          

        </main>
    </body>
</html> 

