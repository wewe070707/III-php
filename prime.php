<h1>質數</h1>
<table border = 1; width=100%;>
    <?php
    
    for($i = 1 ; $i <= 10; $i++){
        echo '<tr style = "border:1px solid;width:100%">';
        for( $j = 1; $j <= 10 ; $j++){
            $number = ($j)+10*($i-1);
            $s_number = intval(sqrt($number));
            $flag = 0;
            for($k = 2; $k<=$number;$k++){
                if($number%$k == 0){   
                    $flag+=1;
                }
            }
            if($flag == 1){
                echo '<td style = "background-color:gold">'.$number.'</td>';
            } else{
                echo '<td>'.$number.'</td>';
            }
        }
        echo '</tr>';
    }
    ?>
</table>