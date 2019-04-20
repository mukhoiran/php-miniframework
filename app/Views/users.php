<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>List Users</title>
    <link rel="stylesheet" href="<?=$GLOBALS['path']?>/css/style.css">
  </head>
  <body>
    <h1>List Users</h1>

    <?php
      foreach ($data['users'] as $user) { ?>
        <p><?=$user['name']?> <?=$user['age']?></p>
    <?php
      }
    ?>
  </body>
</html>
