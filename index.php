<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/style.css">
    <title>Document</title>
    
</head>
<body class="container m-auto flex">
    <div class="m-auto justify-center">
        <h1 class="text-4xl center">To do List</h1>
        <section id="inputSection">
            <h2 class="">Add new task</h2>
            <input class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-auto appearance-none leading-normal" id="input" type="text"> 
            <button class="btn-blue" id="ajout">Add</button>
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