<?php
    $data = $_GET['data'];
    foreach( $data as $key => $value){
        //變數的變數 $key 是string  $$變 變數
        $$key = $value;
    }
?>

<h1>test <?php echo $title?></h1>

<hr>

hello <?php echo $who?>