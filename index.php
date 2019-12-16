<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/style.css">
    <title>Document</title>
    
</head>
<body class="container m-auto flex bg-gray-400">
    <div class="m-auto justify-center">
        <h1 class="text-4xl center">To do List</h1>
        <section id="inputSection">
            <h2 class="">Add new task</h2>
            <input class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-auto appearance-none leading-normal bg-yellow-200" id="input" placeholder="add new task here" type="text"> 
            <button class="btn-blue" id="ajout">Add</button>
        </section>
        <section class="my-4" id="todoSection">
            <h2>Task left : </h2>
            <ul id="dropper" ondragstart="dragstart_handler(event)">
                <li draggable="true">
                    <input type="checkbox" id="test1" name="test1">
                    <label for="horns">test1</label>
                </li>
                <li>
                    <input type="checkbox" id="test2" name="test2">
                    <label for="horns">test2</label>
                </li>
                <li>
                    <input type="checkbox" id="test3" name="test3">
                    <label for="horns">test3</label>
                </li>
            </ul>
            <button class="btn-blue" id="store">Store</button>
        </section>
        <section class="my-4" id="doneSection">
            <h2>Task done : </h2>
        </section>
    </div>
    <script src="dist/script.js"></script>
</body>
</html>