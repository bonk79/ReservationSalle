<?php
        include_once 'head.php';
        include_once 'bdd.php';
        ?>
    
    <body>
        <h1>Demandes de Réservation</h1>
        
        <table>
            <tr>
                <th>Nom Etudiant</th>
                <th>Classe</th>
                <th>Salle</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Commentaire</th>
                <th>Décision</th>
            </tr>
            
            <tr>
                <td>BON Killian</td>
                <td>SIO</td>
                <td>Fu24</td>
                <td>22/11/2019</td>
                <td>13h-14h</td>
                <td>Je souhaite reserve</td>
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

