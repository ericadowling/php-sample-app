<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hello world</title>
    </head>
    <body>
          <p>Hello world</p>
          <p><?php echo 'Current PHP version: ' . phpversion();?></p>
          <p><?php echo implode( ", ", get_loaded_extensions() );?></p>
    </body>
</html>
