<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>  
        <meta charset="UTF-8">
        <title>Gamers</title>
        
        <style>
            body{
                background:url("images/wallpaper.jpg");
                background-size: 100%;
            }
            
            h1{
                color:white;
            }
            
            #header{
                
                margin-left: 490px;
                margin-top: 150px;
                width:250px;
                text-align: center;
                padding:20px;
                border-radius: 50px 50px 50px 50px;
            }
            
            a{
                color:white;
            }
        </style>
        
    </head>
    <body>
    <center><h1>Assignment 4-Inventory Management System - By Saumya Mehta</h1></center><br>
        <center><h1>This is a Game Database System Where User Can Register Their Game</h1></center>
        
        <div id='header'>
        
        <a href="index.php" id="link">> Home</a><br><br>
        <a href="register.php" id="link1">> Register</a><br><br>
        <a href="login.php" id="link2">> Login</a><br><br>
        <a href="addproduct.php" id="link3">> Add Product</a><br><br>
        <a href="view.php" id="link4">> View Product</a>
        
        </div>
       
        <script>
            var a=document.getElementById("link");
            a.onmouseover=function()
            {
                 a.style.color="black";        
            };
   
            a.onmouseout=function()
            {
                 a.style.color="white";        
            }
        
    
    
            var b=document.getElementById("link1");
            b.onmouseover=function()
            {
                 b.style.color="black";        
            };
   
                b.onmouseout=function()
            {
                 b.style.color="white";        
            };  
            
            var c=document.getElementById("link2");
            c.onmouseover=function()
            {
                 c.style.color="black";        
            };
   
            c.onmouseout=function()
            {
                 c.style.color="white";        
            }
            
            var d=document.getElementById("link3");
            d.onmouseover=function()
            {
                 d.style.color="black";        
            };
   
            d.onmouseout=function()
            {
                 d.style.color="white";        
            }
            
            var e=document.getElementById("link4");
            e.onmouseover=function()
            {
                 e.style.color="black";        
            }
   
            e.onmouseout=function()
            {
                 e.style.color="white";        
            }
    </script>
    </body>
</html>
