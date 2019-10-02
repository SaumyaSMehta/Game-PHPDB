<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $host='localhost';
        $username='mehtsaum_admin';
        $password='GmpnfEr~(J!_';
        $db_name='mehtsaum_mydb';
        
        $conn=  mysqli_connect($host, $username, $password, $db_name);
        
        if(empty($conn)){
            die("Connection Error "+  mysqli_connect_error());
        }
        else {
            echo "heyyy";
        }
        ?>
    </body>
</html>
