<?php

use Jbxss\AppNotas\models\Note;

if (count($_POST) > 0 && isset($_GET['id'])) {
    # Actualizar notas
    $title = $_POST['title'];
    $content = $_POST['content'];
    $uuid = $_POST['id'];

    $note = Note::get($uuid);
    $note->setTitle($title);
    $note->setContent($content);

    $note->update();
    header('Location: ?view=home');
} else if (isset($_GET['id'])) {
    $note = Note::get($_GET['id']);
} else {
    header('location: ?view=home');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/views/resources/main.css">
    <?php include 'resources/includes/bootstrap_header.php' ?>
</head>

<body>
    <?php require 'resources/navbar.php' ?>

    <h1 class="text-center pt-3">View your notes!</h1>
    <p class="text-secondary text-center">you can edit the notes too</p>

    <form action="?view=view&id=<?= $note->getUUID(); ?>" method="POST">

        <div class="mb-3">
            <label class="form-label">Note</label>
            <input class="form-control" type="text" name="title" placeholder="Title..." value="<?= $note->getTitle() ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="content" cols="10" rows="6"><?= $note->getContent() ?></textarea>
        </div>

        <input class="form-control" type="hidden" name="id" value="<?= $note->getUUID(); ?>">
        <input class="btn text-light" style="background-color: #17c37d;" type="submit" value="Update note">
        
    </form>

    <?php include 'resources/includes/bootstrap_footer.php' ?>
</body>

</html>