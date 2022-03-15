
         <?php
          foreach($games as $x=>$value){
           
            foreach($value as $p=>$get){
                
                // foreach($get as $z=>$o){
                    ?>
                    <tr>
                    <th><h3><?php print_r($x);  ?></h3></th>
                    <th><h3><?php print_r($p);  ?></h3></th>
                    <th><h3>Rank</h3></th>
                    <th><h3>Player</h3></th>
                    <th><h3>Country</h3></th>
                </tr>
                <?php
                    // foreach($z as $c=>$o)
                    // {
                    //     // echo "$c is $o";
                    //     // echo"<br>";
                    // }
                // }
            }
      }
      ?>