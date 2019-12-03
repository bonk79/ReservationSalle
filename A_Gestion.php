<?php
        include_once 'head.php';
        include_once 'bdd.php';
        
        if($_SESSION['user'] != 3){
            header('location: index.php');
        }else {
        ?>
    
    <body>
        <h1>Gestionnaire</h1><br>
        
        <button>Salle</button><br>
        <button>Formation</button><br>
        <button>Compte Utilisateur</button><br>
        <button>Créneaux Horaires</button><br>
        <button>Formation par Salle</button><br>
        <button>Référent par Formation</button><br>
        <button>Planning</button>
        
    </body>
</html> 

<?php
}
?>