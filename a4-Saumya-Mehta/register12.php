<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//$pass=$_REQUEST['password'];
//$cpass=$_REQUEST['cpassword'];
//
//if($pass!=$cpass){
//    echo 'sahi daal';
//}
//else if($pass==$cpass){
//    echo 'rightt';
//}


ob_start();
        require_once 'config.php';
 
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $hashed_password=  password_hash($password,PASSWORD_DEFAULT);
    
        $query="select username from tblGameUser where username='$username';";
        $result=mysqli_query($conn,$query);
    
        if(mysqli_num_rows($result)=="1"){
            header("location:register.php?result=userexists");
        }
    
        else{
            $query="insert into tblGameUser(username,password)values('$username','$hashed_password');";
        
            $result=mysqli_query($conn,$query);
        
            if($result==1){
                header("location:register.php?result=success");
            }
        
            else{
                header("location:register.php?result=fail");
            }
        }
?>
