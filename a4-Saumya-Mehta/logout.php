<?php
session_start();
?>
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
        if(isset($_SESSION['username']))
        {
            echo "Session destroyed";
            session_destroy();
        }
        else
        {
           echo "You are not logged in";
        }
        ?>
    </body>
</html>
