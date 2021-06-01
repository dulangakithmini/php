<?php
    $name = $_GET['name'];
    $todo = $_POST['todo'];

    $savedTodos = $_POST['todos'];

    //Allows to drop any variable which has a type to it
    var_dump($savedTodos);

    $todos = array();

    if (isset($todo)) {
        array_push($todos, $todo);
    }
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
<h1> <?php echo 5*25;  ?> </h1>


<?php if (isset($name)) : ?>
    <h1><?php echo $name; ?></h1>
    <form method="post">
        <?php foreach ($todos as $value) : ?>
        <input type="hidden" name="todos[]" value="<?php echo $value ?>">
        <?php endforeach; ?>

        <label for="todo">Enter todo</label>
        <input type="text" name="todo" id="todo">
        <input type="submit" value="Save">
    </form>
    <ul>
        <li> <?php var_dump($todos); ?> </li>
    </ul>
<?php else: ?>
    <h1>Login</h1>
    <form method="get">
        <label for="name"> Name </label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Login">
    </form>
<?php endif; ?>

</body>
</html>
