<?php
    $name = null;
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn Php</title>
</head>
<body>
<h1>Hello <?php echo $name;  ?></h1>
<h1>Hello <?php echo $name. " K";  ?></h1>
<h1>Hello <?php echo $name;  ?> K </h1>


<?php if (isset($name)) : ?>
    <h1><?php echo $name; ?></h1>
<?php else: ?>
    <h1>Login</h1>
<?php endif; ?>

</body>
</html>
