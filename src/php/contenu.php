<?php 
    require "array.php";
    $doAndDone = pushInArray();
    $do = $doAndDone['do'];
    $done = $doAndDone['done'];
    $json = file_get_contents("todo.json");
    $taskTodo = json_decode($json, true);
    function doList ($array){
        foreach($array as $value){
            echo "<div>
                    <label class='item'>
                    <input type='checkbox' name='checked_list[]' value='$value'/>
                    <span> $value </span>
                    </label>
                </div>";
        }
    }
    
?>
<form action="<?php "index.php"?>" method="POST">
        <div id="dropZone" >
            <?php doList($do);?>
        </div>
    <input type="submit" class="btn-blue" id="save" name="save" value="Save">
</form>