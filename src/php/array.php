<?php
function pushInArray(){
    $do = [];
    $done = [];
    $json = file_get_contents("todo.json");
    $taskTodo = json_decode($json, true);
    foreach($taskTodo as $key){
        if($key['done'] == true){
            $done[] = $key['task'];
        }else{
            $do[] = $key['task'];
        }
    }
    return ['do' => $do, 'done'=>$done];
}
?>