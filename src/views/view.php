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

} else if (isset($_GET['id'])) {
    $note = Note::get($_GET['id']);
} else {
    header('Location: ?view=home');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>veeeer</h1>
    <form action="?view=view&id=<?= $note->getUUID(); ?>" method="POST">
        <input type="text" name="title" placeholder="Titulo..." value="<?= $note->getTitle() ?>">
        <input type="hidden" name="id" value="<?= $note->getUUID(); ?>">
        <textarea name="content" cols="30" rows="10"><?= $note->getContent() ?></textarea>
        <input type="submit" value="Update note">
    </form>
</body>
</html>