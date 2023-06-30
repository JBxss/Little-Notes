<?php

use Jbxss\AppNotas\models\Note;

$notes = Note::getAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="src/views/resources/main.css">
    <?php include 'resources/includes/bootstrap_header.php' ?>
</head>

<body>
    <?php require 'resources/navbar.php' ?>
    <div class="p-4">
        
    <h1 class="text-center pt-3">Start writing notes now!</h1>
    <p class="text-secondary text-center">Write and edit your notes</p>

    <div class="row justify-content-center align-items-center">
        <?php foreach ($notes as $note) : ?>
            <div class="col-3 card card-body m-4">
                <h5 class="card-title text-center"><?= $note->getTitle() ?></h5>
                <p class="card-text text-center text-secondary"><?= $note->getContent() ?></p>
                <a href="?view=view&id=<?= $note->getUUID(); ?>" class="btn text-light" style="background-color: #17c37d;">Edit</a>
            </div>
        <?php endforeach ?>
    </div>

    
    <?php include 'resources/includes/bootstrap_footer.php' ?>
</body>

</html>