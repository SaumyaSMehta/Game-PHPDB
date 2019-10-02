<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
       
        <style>
            body{
                border:5px solid black;
                padding-bottom: 100px;
                padding-left:10px;
                padding-right:10px;
            }
            
            #wrapper
            {
                width:70%;
                margin:auto;
            }

            table, td, th
            {    
                border: 1px solid brown;
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
            }
                        
            #reg{           
                color:blueviolet;
            }
            
            #msg{
                background-color: blueviolet;
                width: 150px;
                height:20px;
                color:white;
            }
        </style>
        
    </head>
    <body>
        <?php
            require_once 'header.php';
        ?>
        
        <br>
        
        <h2 id="reg" align="center">Register Here:</h2>
        
        <form name="myform" action="register12.php"  onsubmit="return validateForm()" method="post">
            <table>
                    <tr>
                        <td>Username:</td>
                        <td>Password:</td>
                        <td>Confirm Password:</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="username" required autofocus></td>
                        <td><input type="password" id="password" name="password" required></td>
                        <td><input type="password" id="cpassword" name="cpassword" required></td>
                    </tr>
                    <tr>
                    <td colspan="3"><center><input type="submit" value="Register"></center></td>
                    </tr>
                </table>
            <p id="ans"> </p>
            
        </form>
      
         <script>
   
    document.myform.onsubmit=function()
 {
               
        return validate();
   };
    
    var validate = function()
    {
    isValid=true;
    var username=document.getElementById("username");
    var pass=document.getElementById('password').value;
    var cpass=document.getElementById('cpassword').value;
        
    if(pass!==cpass){
        alert("Password does not match");
      isValid=false;
  }
  return isValid;
    }
</script>-->
        <?php
        
//        if(isset($_REQUEST['cpassword'])){
//            if($_REQUEST['password']!=$_REQUEST['cpassword']){
//                echo 'The Password and Confirm Password must be same.';
//            }
//        }
        
        if(isset($_REQUEST['result'])){
         
            if($_REQUEST['result']==userexists){
                echo "<div id='msg'><b>User already exists!</b></div>";
            }
            
            else if ($_REQUEST['result']==success) {
                echo "<div id='msg'><b>User Created!</b></div>";
            }
            
            else {
                echo "Failed.";
            }
            
        }
        
        ?>
        
    </body>
   
</html>
