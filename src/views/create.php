<?php
use Jbxss\AppNotas\models\Note;

if(count($_POST) > 0){
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea una nueva nota</title>
</head>
<body>
    <h1>Crea una nota</h1>
    <form action="?view=create" method="POST">
        <input type="text" name="title" placeholder="Titulo...">
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Crear Nota">
    </form>
</body>
</html>