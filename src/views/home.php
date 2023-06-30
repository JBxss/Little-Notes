<?php

use Jbxss\AppNotas\models\Note;

$notes = Note::getAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>

<body>
    <h1>home</h1>

    <?php foreach ($notes as $note) : ?>
        <a href="?view=view&id=<?= $note->getUUID(); ?>">
            <div class="note-preview">
                <div class="title"><?= $note->getTitle() ?></div>
            </div>
        </a>
    <?php endforeach ?>

</body>

</html>