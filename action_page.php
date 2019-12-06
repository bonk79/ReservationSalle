<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @author : bonk
 */
// Si c'est pas cocher alors afficher de cocher, sinon effectuer la requete
// Si c'est cocher alors faire la requete, sinon afficher de cocher

if( empty($_POST["valider"]) && empty($_POST["refuser"]) ) 
{ 
   
    
   echo $valider = "Il faut cocher au moins un des choix";
    
}
else { 
    
    echo "Checkbox was checked."; 
    
    
}


