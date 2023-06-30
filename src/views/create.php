<?php

use Jbxss\AppNotas\models\Note;

echo $_POST['title'] . $_POST['content'];

if (count($_POST) > 0) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $note = new Note($title, $content);
    $note->save();
    header('Location: ?view=home');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little Notes</title>
    <link rel="stylesheet" href="src/views/resources/main.css">
    <?php include 'resources/includes/bootstrap_header.php' ?>
</head>

<body>
    <?php require 'resources/navbar.php' ?>

    <h1 class="text-center pt-3">Create your notes!</h1>
    <p class="text-secondary text-center">you can write the notes too</p>

    <form action="?view=create" method="POST">

    <div class="mb-3">
            <label class="form-label">Note</label>
            <input class="form-control" type="text" name="title" placeholder="Title...">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="content" cols="10" rows="6"></textarea>
        </div>

        <input class="btn text-light" style="background-color: #17c37d;" type="submit" value="Create note">

    </form>

    <?php include 'resources/includes/bootstrap_footer.php' ?>

</body>

</html>