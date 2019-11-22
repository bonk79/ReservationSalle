<!DOCTYPE html>

<html>
    <head>
        <title>ETUDIANT RESERVATION</title>
        <?php
        include_once 'head.php';
        ?>
    </head>
    
    <body>
        <h1>Réservation d'une Salle</h1>
        
        <aside>
            <h3>Sélectionner une Salle</h3>
            <select>
                <option value="Fu22">Fu22</option>
                <option value="Fu23">Fu23</option>
                <option value="Fu24">Fu24</option>
            </select>
            
            <h3>Sélectionner un Créneaux Horaire</h3>
            <select>
                <option value="14h-15h">14h-15h</option>
                <option value="15h-16h">15h-16h</option>
                <option value="16h-17h">16h-17h</option>
            </select>
            
            
            <label for="message">Justification : </label><br>
            <textarea rows="5" cols="70" type="text" name="justification" id="justification" required ></textarea><br>
            <input type="submit" value="Valider la Réservation">
        </aside>
        
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
        
    </body>
</html> 

