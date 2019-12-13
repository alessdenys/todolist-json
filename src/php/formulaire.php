<?php 
    if(isset($_POST['add'])){
        if(empty(trim($_POST['task']))){
            echo "You need to write something";
        }else{
            $result = filter_var($_POST['task'], FILTER_SANITIZE_STRING);
        }
        $task = $result['task'];
        $json = file_get_contents("todo.json");
        $json = json_decode($json);
    }
?>


<form action="index.php" method="POST">
    <input class="input" id="task" type="text" />
    <button class="btn-blue" id="add">Add</button>
</form>