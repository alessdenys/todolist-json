<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['check_list'])) {
        // Loop to store and display values of individual checked checkbox.
        foreach($_POST['check_list'] as $selected) {
            echo "<p>".$selected."</p>";   
        }
    }else{
        echo "<b>Please Select Atleast One Option.</b>";
    }
}
?>