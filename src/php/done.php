<?php
if(isset($_POST['save'])){
    if(!empty($_POST['checked_list'])){
        foreach($_POST['checked_list'] as $selected){
            echo "<p>$selected</p>";
        }
    }else{
        echo "select something";
    }
}
