<!DOCTYPE html>

<html>
    <head>
        <title>ACCUEIL</title>
        <?php
        include_once 'head.php';
        ?>
        </head>
    
    <body>
        <h1>ACCUEIL</h1>
        
        <form method="post" action="login.php">
            <label for="pseudo">Pseudo : </label><br>
            <input type="text" name="pseudo" id="pseudo" required ><br><br>
                
            <label for="password">Password : </label><br>
            <input type="password" name="password" id="password" required ><br><br>
                
            <input type="submit" value="Login" ><br><br>
        </form>
    </body>
</html> 
