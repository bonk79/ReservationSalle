<?php
        include_once 'head.php';
        include_once 'bdd.php';
        
        if($_SESSION['user'] != 2){
            header('location: index.php');
        }else {
        ?>
    
    <body>
        <h1>Listes des Salles et Classes</h1>
        
        <table>
            <tr>
                <th>Classe</th>
                <th>Salle</th>
                <th>Statut</th>
            </tr>
            
            <tr>
                <td>SIO</td>
                <td>Fu24</td>
                <td>Disponible</td>
            </tr>
        </table>
        
    </body>
</html> 

<?php
}
?>