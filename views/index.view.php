<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
  <nav>
    <ul>
      <li><a href="/about">About</a></li>
      <li><a href="/contact">Contact</a></li>
      <li><a href="/about/culture">Culture</a></li>
    </ul>
  </nav>
    <h1>Tasks for the Day</h1>
    <ul>
      <?php foreach ($tasks as $task) : ?>
        <li>
          <?php if ($task->completed) : ?>
            <strike><?= $task->description; ?></strike>
          <?php else:  ?>
            <?= $task->description; ?>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
