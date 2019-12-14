<?php 
    if(isset($_POST['add'])){
        if(empty(trim($_POST['task']))){
            echo "You need to write something";
        }else{
            $result = filter_var($_POST['task'], FILTER_SANITIZE_STRING);
            $json = file_get_contents("todo.json");
            $taskTodo = json_decode($json, true);
            $jsonTask = ["task" => $result,"done"=>false];
            $taskTodo[] = $jsonTask;
            $enJson = json_encode($taskTodo);
            file_put_contents("todo.json",$enJson);
        }
    }
?>


<form action="index.php" method="POST">
    <input class="input" id="task" type="text" name="task"/>
    <button class="btn-blue" id="add" name="add" >Add</button>
</form>