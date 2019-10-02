<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        
        <style>
            
            #wrapper
            {
                width:70%;
                margin:auto;
            }

            table, td, th
            {    
                border: 2px solid brown;
                text-align: left;
            }

            table
            {
                border-collapse: collapse;
                width: 40%;
                margin: auto;
            }

            th, td
            {
                padding: 15px;
            }

            h2
            {
                text-align: center;
            }

            #msg
            {
                width:40%;
                margin:auto;
                text-align: center;
            }
            
            #sub{
                align:center;
                margin-left: 202px;
            }
            
            #msg{
                background-color: blueviolet;
                width: 150px;
                height:auto;
                color:white;
               }
            
              #reg{           
                color:blueviolet;
            }
        </style>
        
    </head>
    <body>
        <?php
           require_once 'header.php';
        ?>
        <br><br>
        <form action="login1.php" method="post">
            
            <h2 id="reg" align="center">Login Here:</h2> 
            
        <table>
                    <tr>
                        <td><b>Username:</b></td>
                        <td><b>Password</b></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="username" required autofocus></td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Login" id="sub"></td>
                    </tr>
                </table>
        <br>
        
        
        </form>
        
        <?php
          if(isset($_REQUEST['result'])){
                if($_REQUEST['result'] == fail){
                    echo "<div id='msg'>Either username or password is incorrect.</div>";
                }
                
                if($_REQUEST['result'] == noview){
                    echo "<div id='msg'>Please Login First.</div>";
                }
                
                if($_REQUEST['result'] == noadd){
                    echo "<div id='msg'>Please Login First.</div>";
                }
            }
            echo "<div id='msg'><h5>Quick Login</h5>Username: user<br>Password: 123</div>";
        
        ?>
    </body>
</html>
