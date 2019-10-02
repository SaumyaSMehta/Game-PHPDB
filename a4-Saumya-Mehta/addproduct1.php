<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$host="localhost";
$username="mehtsaum_admin";
$password="GmpnfEr~(J!_";
$db_name="mehtsaum_mydb";

$conn=  mysqli_connect($host, $username, $password, $db_name);

if(empty($conn)){
    die("Connection error: "+mysqli_connect_error());
}

$gname=$_REQUEST['gname'];
$gsize=$_REQUEST['gsize'];
$gplayers=$_REQUEST['gplayers'];

$query="insert into tblGame(game,size,players)values('$gname','$gsize','$gplayers');";

$result=  mysqli_query($conn,$query);

if($result>0){
    header("location:view.php");
}
 else {
    header("location:addproduct.php?result=fail");
}
?>


