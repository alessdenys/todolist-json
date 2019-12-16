<?php 
if(isset($_POST['save'])){
    if(!empty($_POST['checked_list'])){
        foreach($_POST['checked_list'] as $selected){
            $json = file_get_contents("todo.json");
            $taskTodo = json_decode($json, true);
            foreach($taskTodo as $key => $value){
                if ($selected == $value['task']) {
                    $taskTodo[$key]['done'] = true ;
                    $enJson = json_encode($taskTodo, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
                    file_put_contents("todo.json",$enJson);
                    break;
                }
            }
        }
    }else{
        echo "select something";
    }
}
?>