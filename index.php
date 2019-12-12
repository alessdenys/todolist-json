<?php 
    if(isset($_GET['add'])){
        $option = array[
            'task' => FILTER_SANITIZE_STRING
        ]
    }
    $result = filter_input_array(INPUT_GET, $option)
    if ($result != null AND $result != FALSE) {

    }else{

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/style.css">
    <title>Document</title>
    
</head>
<body class="container m-auto flex bg ">
    <div class="m-auto justify-center">
        <h1 class="text-4xl center">To do List</h1>
        <section id="inputSection">
            <h2 class="">Add new task</h2>
            <form action="<?php $_SERVER['PHP_SELF']?>" method='POST'>
                <input class="input" id="task" type="text"> 
                <button class="btn-blue" id="add">Add</button>
            </form>
        </section>
        <section class="my-4" id="todoSection">
            <h2>Task left : </h2>
        </section>
        <section class="my-4" id="doneSection">
            <h2>Task done : </h2>
        </section>
    </div>
</body>
</html>