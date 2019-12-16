<?php
function doneList($array){
    foreach($array as $value){
        echo "<li> $value </li>";
    }
}
?>

<ul>
<?php doneList($done) ?>
</ul>
