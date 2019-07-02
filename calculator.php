<table border = 1; width=100%;>

        <?php
        define('ROWS',3);
        define('FROM',1);
        define('TO',6);
        for ($k = 0; $k < ROWS; $k++){
            echo '<tr>';
            for ($j = FROM; $j<=TO; $j++){
                if($k%2){
                    $j % 2 == 0?$color="yellow":$color="pink"; 
                    echo '<td bgcolor = "' . $color . '"';
                } else{
                    $j % 2 == 0?$color="pink":$color="yellow"; 
                echo '<td bgcolor = "' . $color . '"';
                }
                $newj = $j + (TO-FROM+1) * $k;
                for ($i = 1; $i<=9; $i++ ){
                    $r = $newj * $i;
                    echo "{$newj} x {$i} = {$r}<br>";
                }
                echo '</td>';
            }
            echo '</tr>';
        }    

            
        ?>
    
    
</table>