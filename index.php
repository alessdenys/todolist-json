
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="dist/style.css" />
    <title>Document</title>
  </head>
  <body class="container m-auto flex bg ">
    <div class="m-auto justify-center">
      <h1 class="text-4xl center">To do List</h1>
      <section id="inputSection">
        <h2 class="">Add new task</h2>
        <?php require "src/php/formulaire.php" ?>
      </section>
      <section class="my-4" id="todoSection">
        <h2>Task left :</h2>
        <p><?php echo $result ?? " "; ?></p>
      </section>
      <section class="my-4" id="doneSection">
        <h2>Task done :</h2>
      </section>
    </div>
  </body>
</html>