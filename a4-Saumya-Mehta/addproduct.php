<?php
session_start();
        if(empty($_SESSION['username']))
        {
            header("location:login.php?result=noadd");
        }
        
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
        <title>Add Game</title>
        <style>
         td,tr,table{
                border:2px solid brown;
            }
            
             table
            {
                border-collapse: collapse;
                width: 40%;
                margin: auto;
            }
            
            #reg{           
                color:blueviolet;
            }
            
            th, td
            {
                padding: 15px;
            }
            
            #sub{
                margin-left: 202px;
            }
            
        </style>
    </head>
    <body>
        <?php
            require_once 'header2.php';
        ?>
        <form action="addproduct1.php" method="post"> 
        
            <h2 id="reg" align="center">Add Your Game:</h2>
            
        <table>
        <tr>  
        <td>Game Name:</td>
        <td><input type="text" name="gname" required focus></td>></tr>
        
        <br>
        
        <tr>
        <td>Game Size:</td>
        <td><input type="number" name="gsize" required min="50"></td>
        </tr>
        
        <br>
        
        <tr>
        <td>No Of Players:</td>
        <td><input type="number" name="gplayers" required min="0"></td>
        </tr>
        
        <tr>
        <td colspan="2"><input type="submit" value="Add Game" id="sub"></td>
        </tr>
        
        </table>
        </form>
        <?php
        if(isset($_REQUEST['result'])){
            if($_REQUEST['result']=="success"){            
                echo "Game Created";                
            }
            
            else{
                echo "Fail";
            }
        }
        ?>
    </body>
</html>
