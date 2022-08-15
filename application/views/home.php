<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <h1>Home</h1>

  <a href="<?= base_url('tasks/add') ?>">Add Task</a>
  
  <h2>Tasks: </h2>
  <?php foreach ($tasks as $task) { ?>
    <p><?= $task->title ?></p>
    <a href="<?= base_url('tasks/edit/'.$task->id) ?>">Edit</a>
    <a href="<?= base_url('tasks/delete/'.$task->id) ?>">Delete</a>
    </br>
  <?php } ?>
</body>
</html>