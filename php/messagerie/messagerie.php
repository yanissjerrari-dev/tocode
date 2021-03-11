<!--Accueil de messagerie-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!--Toutes les meta-->
        <meta name="viewport" content="width=device-width, initial-scale"/>
        <meta name="description" content="MySocialPX, site de discussion en ligne. Chattez et communiquez en groupe sur le sujet que vous aimez."/>
        <meta charset="utf-8"/>

        <!--Le titre-->
        <title>MySocialPX</title>

        <!--Lien vers les feuilles de style (CSS)-->
        <link rel="stylesheet" href="css/actuStyle.css">
    </head>
    <style>

#logo {
    border-radius: 10px;
    visibility: visible;
}

#bell {
    visibility: visible;
}

img {
    visibility: hidden;
}

.input_container{
    position: relative; 
    }
    
    .input_icon{
    position: absolute; 
    top: 2px;
    color: gray; 
    left: 9px;
    font-size: 21px; 
    width: 50px;
    }
    
    input[type="search"]{
        padding-left:40px; 
    }


    </style>
    <body>
<?php
include'elements/navbar.html';
?>



    </body>
</html>