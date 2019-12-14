<?php 
    $json = file_get_contents("todo.json");
    $taskTodo = json_decode($json, true);
    function forLoopJson ($array){
        foreach($array as $value){
            $element = $value['task'];
            echo "<div>
                    <label class='item'>
                    <input type='checkbox' name='checked_list[]' value='$element'/>
                    <span> $element </span>
                    </label>
                </div>";
        }
    }
?>