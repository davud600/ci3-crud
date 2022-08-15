<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Task</title>
</head>
<body>
  <h1>Add Task: </h1>
  
  <a href="<?= base_url('tasks/home') ?>">Back</a>

  <form action="<?= base_url('tasks/store') ?>" method="POST">
    <input type="text" name="task_title" placeholder="Task title" />
    <button type="submit">Add</button>
  </form>
</body>
</html>