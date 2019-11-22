<!DOCTYPE html>

<html>
    <head>
        <title>REFERENT DEMANDES</title>
        <?php
        include_once 'head.php';
        ?>
    </head>
    
    <body>
        <h1>Demandes de Réservation</h1>
        
        <table>
            <tr>
                <th>Nom Etudiant</th>
                <th>Classe</th>
                <th>Salle</th>
                <th>Date-Heure</th>
                <th>Commentaire</th>
                <th>Décision</th>
            </tr>
            
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
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

