<?php
$poker = [];
for ($i = 0; $i < 52; $i++){
    $rand = rand(0,51);
    $check = false;
    for($j = 0; $j<$i; $j++){
        if($rand == $poker[$j]){
            $check = true;
            break;
        }
    }
    if($check){
        $i--;
        continue;   
    }
    $poker[$i] = $rand; 
}   

//$poker = range(0,51);
//shuffle($poker);
$suits = array("&spades;","<font color='red'>&hearts;</font>",
            "<font color='red'>&diams;</font>","&clubs;");
$values = array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');

echo "<h1>洗牌</h1>";

$players = [[],[],[],[]];
echo '<table border=1><tr>';
foreach($poker as $i => $card){
    echo "<td>{$suits[($card/13)]}{$values[($card%13)]}</td>";
    $players[$i%4][(int)($i/4)] = $suits[($card/13)] . $values[($card%13)];
}
echo '</tr></table><br>';
echo '<table border=1><tr>';
foreach ($players as $j => $value){
    echo "<tr><td>player{$j}=></td>";
    foreach($value as $card){
        echo '<td>'.$card . "</td>";
    }
    echo '</tr>';
}
echo '</table>'
?>