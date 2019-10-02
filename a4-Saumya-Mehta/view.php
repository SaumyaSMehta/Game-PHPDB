<?php
session_start();
  
        if(!isset($_SESSION['username']))
        {
            header("location:login.php?result=noview");
        }
        
?>
<!DOCTYPE HTML>
<html>
<head>
    <style>
        
    #wrapper
            {
                width:50%;
                margin:auto;
            }

            table
            {
                border-collapse: collapse;
                width: 50%;
                margin: auto;
            }

            th, td
            {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){background-color: #f2f2f2}

            th
            {
                background-color:blueviolet;
                color: white;
            }

            h2
            {
                text-align: center;
            }
        
            #head{
                background-color: blueviolet;
                text-align:center;
                border:2px solid black;
                color:white;
            }
            
            #box{
                text-align: center;
            }
            
            #msg{
                background-color: blueviolet;
                width: 150px;
                height:20px;
                color:white;
            }
    </style>
</head>
<?php
 
require_once 'header2.php';
echo "<form method='post'>";
echo "<h2>Search Your Game Here</h2>";
echo "<div id='box'><input type='text' name='search'><br><br>";
echo "<input type='submit' name='qqq' value='Search'></div><br>";
        echo "</form>";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

         $host="localhost";
         $username="mehtsaum_admin";
         $password="GmpnfEr~(J!_";
         $db_name="mehtsaum_mydb";


         $conn=mysqli_connect($host, $username, $password, $db_name);
       
        
         if(empty($conn))
         {
             die("Connection Problem:" . mysqli_connect_error());
         }
         
         
        if(isset($_POST['qqq'])){
         
         
         $search=$_REQUEST['search'];
         
         $query="select * from tblGame where game like '$search%";
    
    $search=$_REQUEST['search'];
    
    $query="SELECT * FROM tblGame WHERE game LIKE '$search%';";
    $result=mysqli_query($conn,$query);
      if(!$result || mysqli_num_rows($result)>0){
      echo "<table id='products'>";echo "<tr><th>Row #</th>";echo "<th>Game Name</th>";echo "<th>Game Size</th>";echo "<th>Game Players</th></tr>";
                 
                 
                 $i = 1;     // To print the row numbers
                 while($row = mysqli_fetch_assoc($result)){
                     echo "<tr><td>$i</td>";
                     echo "<td>" . $row['game'] . "</td>";
                     echo "<td>" . $row['size'] . "</td>";
                     echo "<td>" . $row['players'] . "</td></tr>";
                     $i++;
                     
                 }
            echo "</table>";  
    }
        else if(mysqli_num_rows($result)==0){
        echo '<center><div id="msg">No Match Found. </div></center>';
        }
    die();           
}         
         $querry="Select * from tblGame;";
         $result=  mysqli_query($conn, $querry);
         
         if(mysqli_num_rows($result)>0)
         {
             if(mysqli_num_rows($result) > 0){// print table and header row
                 
                 //require_once 'header.php';
                // require_once 'header.php';
                 
                 echo "<h1 id='head'>Games Created</h1>";
                 
                 echo "<table id='products'>";echo "<tr><th>Row #</th>";echo "<th>Game Name</th>";echo "<th>Game Size</th>";echo "<th>Game Players</th></tr>";
                 
                 
                 $i = 1;     // To print the row numbers
                 while($row = mysqli_fetch_assoc($result)){
                     echo "<tr><td>$i</td>";
                     echo "<td>" . $row['game'] . "</td>";
                     echo "<td>" . $row['size'] . "</td>";
                     echo "<td>" . $row['players'] . "</td></tr>";
                     $i++;
                     
                 }
            echo "</table>";}
                 }
?>
</html>