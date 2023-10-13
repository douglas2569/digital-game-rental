<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/config/config.php';
require_once 'src/user/UserDAO.php';

if(!isset($_SESSION['hash']) && empty($_SESSION['hash'])){
    header("Location: src/user/view/login.php"); 
    exit();
} 

?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="estilo/estilo.css">    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Listagem de Jogos</title>
</head>
<body>
<body>  
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/includes/parts/header.php' ?>
    

    <main>
        <div class="container"></div>
    </main>
    
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/includes/parts/footer.php' ?>
</body>
</html>   