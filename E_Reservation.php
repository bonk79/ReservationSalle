<?php
include_once 'head.php';
?>

    <body>
        <h1>Réservation d'une Salle</h1>
        <div class="row">
        <div class="col-4 container">
        <form method="POST" action="">
            <aside>
                <h3>Sélectionner une Salle</h3>

                <select>
                    <?php
                        $statement=$db -> prepare("SELECT * FROM ROOM");
                        $statement -> execute();

                        while($row = $statement->fetch()) {
                            echo "<option name='salle' value='".$row['idRoom']."'>".$row['name']."</option>";
                        } 
                    ?>
                </select><br><br>

                <h3>Sélectionner un Créneaux Horaire</h3>
                <select>
                    <?php
                            $statement=$db -> prepare("SELECT * FROM TIMESLOT");
                            $statement -> execute();

                            while($row = $statement->fetch()) {
                                echo "<option name='creneaux' value='".$row['idTimeSlot']."'>".$row['start']." - ".$row['end']."</option>";
                            } 
                    ?>
                </select><br><br>
                
                <div>
                <h3>Sélectionner une Date</h3>
                    <?php
                            $statement=$db -> prepare("SELECT * FROM BOOKING");
                            $statement -> execute();

                    ?>
                    <input type='date' min="2011-08-13" max='2012-06-25' name="the_date"><br><br>
                    //min : date du jour, max : + 1 semaine
                    //jjmmaaaa -> aaaammjj
                    
                </div>

                <label for="message">Justification : </label><br>
                <input type="text" name="Commentaire" placeholder="OUI" id="message"><br>

                <input type="submit" value="Valider la Réservation">
                //return BOOKING
            </aside>
        </form>
        </div>
        
        
        <div class="col-8 container">
        <section>
            <h3>Vos Inscriptions</h3>
            
            <table>
                <tr>
                    <th>Salle</th>
                    <th>Créneaux Horaire</th>
                    <th>Date</th>
                    <th>Responsable</th>
                    <th>Désinscription</th>
                </tr>
            
                <tr>
                    <td>Fu23</td>
                    <td>16h-18h</td>
                    <td>22/11/2019</td>
                    <td>Oui</td>
                    <td><button>Se Désinscrire</button></td>
                </tr>
            </table>
        </section>
        </div>
            </div>
        
    </body>
</html> 

