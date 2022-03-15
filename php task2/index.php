<?php 
include 'obj.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>task 2</title>
</head>
<body>
    <div id="container">
       <br>
       <h1>List of All Players</h1><br>
       <table id="tbl1">
           <tr>
               <th><h3>Mode</h3></th>
               <th><h3>Game</h3></th>
               <th><h3>Rank</h3></th>
               <th><h3>Player</h3></th>
               <th><h3>Country</h3></th>
           </tr>
           <?php 
       foreach($games as $g=>$value){
            foreach($value as $n=>$get){
                foreach($get as $v=>$fetch){
                    echo "<tr>";
                    echo "<td>$g</td>";
                    echo "<td>$n</td>";
                    foreach($fetch as $getch){
                        
                        echo "<td>$getch</td>";
                       
                    }
                    echo "</tr>";
                }
            }
            
       }
     ?>
       </table>


       <br>
       <h1>List of Swimming Players</h1><br>
       <table id="tbl2">
           <tr>
               <th><h3>Mode</h3></th>
               <th><h3>Game</h3></th>
               <th><h3>Rank</h3></th>
               <th><h3>Player</h3></th>
               <th><h3>Country</h3></th>
           </tr>
           <?php 
       foreach($games as $g=>$value){
            foreach($value as $n=>$get){
                if($n == "Swimming"){
                    foreach($get as $v=>$fetch){
                            echo "<tr>";
                            echo "<td>$g</td>";
                           echo "<td>$n</td>";
                        foreach($fetch as $getch){
                             echo "<td>$getch</td>";
                          
                        }
                        echo "</tr>";
                    }
                }
               
            }
            
       }
     ?>
       </table>


       <br>
       <h1>List of All Players</h1><br>
       <table id="tbl3">
       
           <?php 
       foreach($games as $g=>$value){
            foreach($value as $n=>$get){
                
                foreach($get as $v){
                   if($v['country'] == 'India'){
                       echo "<tr>";
                       echo "<td><h3>Game :</h3></td>";
                       echo "<td><label>$n</label></td>";
                       echo "</tr>";
                       echo "<tr>";
                       echo "<td><h3>Rank :</h3></td>";
                       echo "<td><label>".$v['rank']."</label></td>";
                       echo "</tr>";
                       echo "<tr>";
                       echo "<td><h3>Player :</h3></td>";
                       echo "<td><label>".$v['player']."</label></td>";
                       echo "</tr>";
                   }

                    
                }
            }
            
       }
     ?>
       </table>

       <h1>Updated Rank-8 Country</h1><br>
       <table id="tbl1">
           <tr>
               <th><h3>Mode</h3></th>
               <th><h3>Game</h3></th>
               <th><h3>Rank</h3></th>
               <th><h3>Player</h3></th>
               <th><h3>Country</h3></th>
           </tr>
           <?php 
       foreach($games as $g=>$value){ 
            foreach($value as $n=>$get){
                foreach($get as $v){
                    echo "<tr>";
                    echo "<td>$g</td>";
                    echo "<td>$n</td>";
                    
                    if($v['rank'] == '8'){
                        $games[$g][$n][1]['country']="India"; 
                         $v['country']="India"; 
                        echo "<td><label>".$v['rank']."</label></td>";
                        echo "<td><label>".$v['player']."</label></td>";
                        echo "<td><label>".$v['country']."</label></td>";
                    }else{
                        echo "<td><label>".$v['rank']."</label></td>";
                        echo "<td><label>".$v['player']."</label></td>";
                        echo "<td><label>".$v['country']."</label></td>";
                    }
                    echo "</tr>";
                }
            }
            
       }
     ?>
    
       </table>
    

       <h1>Deleted Chinese Players</h1><br>
       <table id="tbl1">
           <tr>
               <th><h3>Mode</h3></th>
               <th><h3>Game</h3></th>
               <th><h3>Rank</h3></th>
               <th><h3>Player</h3></th>
               <th><h3>Country</h3></th>
           </tr>
           <?php 
       foreach($games as $g=>$value){
            foreach($value as $n=>$get){
                foreach($get as $v){
                    
                    
                    if($v['country'] == 'China'){
                        continue;
                    }else{
                        echo "<tr>";
                        echo "<td>$g</td>";
                        echo "<td>$n</td>";
                        echo "<td><label>".$v['rank']."</label></td>";
                        echo "<td><label>".$v['player']."</label></td>";
                        echo "<td><label>".$v['country']."</label></td>";
                    }
                    echo "</tr>";
                }
            }
            
       }
     ?>
       </table>
    </div>
</body>
</html>