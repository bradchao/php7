<?php

function loadView($viewFile, $data){
    $query = http_build_query(array('data' => $data));
    echo file_get_contents("http://localhost/views/{$viewFile}.php?{$query}");
}

function processData(){
    $dd['title'] = 'Brad Big Company V2';
    $dd['who'] = 'Brad';
    return $dd;
}


$data = processData();

loadView('view1', $data);

?>