<?php
use Jbxss\AppNotas\models\Note;


echo $_POST['title'].$_POST['content'];

    if(count($_POST) > 0){
        $title = $_POST['title'];
        $content = $_POST['content'];

        echo $title.$content;
        
    
        $note = new Note($title, $content);
        $note->save();
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
        <textarea name="content" cols="30" rows="10"></textarea>
        <input type="submit" value="Create note">
    </form>
</body>
</html>