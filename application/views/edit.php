<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Task</title>
</head>
<body>
  <h1>Edit Task: </h1>
  
  <a href="<?= base_url('tasks/home') ?>">Back</a>

  <form action="<?= base_url('tasks/update/'.$task->id) ?>" method="POST">
    <input type="text" name="task_title" placeholder="Task title" value="<?= $task->title ?>" />
    <button type="submit">Update</button>
  </form>
</body>
</html>