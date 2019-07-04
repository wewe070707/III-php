<?php
// Model
function processData(){
    $data['title'] = 'wtf title';
    $data['who'] = 'wewe';
    return $data;
}
// call View
function loadView($viewfile,$data){
    $query = http_build_query(array('data' => $data));
    echo file_get_contents("http://localhost/myphp/view/{$viewfile}.php?{$query}");
}
$data = processData();
loadView('view1',$data);
