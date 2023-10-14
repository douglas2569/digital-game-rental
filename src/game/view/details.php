<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/config/config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/game/GameDAO.php';

$id = $_GET['id'] ?? null;

$gameDAO = new GameDAO();
$gameList = $gameDAO->showJoinByColumn($id);

?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="http://localhost/digital-game-rental/index.css">    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
    <title>Listagem de Jogos</title>
</head>
<body>
<body>     

    <main>
        <div class="container">            
        <h1 class="form-title">Detalhes do jogo</h1>
        <table class='table detail-table'>
            <?php
                if(count($gameList) <= 0){
            ?>
                <tr><td>Infelizmente não foi possivel realizar a busca!</td></tr>
            <?php
                } else {
            ?>
                <tr>
                        <td>
                            <img class ='img xlg-img' src="<?= 'http://localhost/digital-game-rental/'.$gameList[0]->getCover() ?>" />
                            <div id="table-body">
                                <a href='src/game/view/details.php?id=<?= $gameList[0]->getId() ?>'><strong>Nome:</strong> <?= $gameList[0]->getName() ?></a>
                                <span> <strong>Genero:</strong> <?= $gameList[0]->getGenderFK() ?></span>                    
                                <span><strong>Produtora:</strong> <?= $gameList[0]->getProducerFK() ?> </span>
                                <span><strong>Nota:</strong> <?= $gameList[0]->getRaing()/10 ?> </span>
                                <p><strong>Descrição:</strong><?= $gameList[0]->getDescription() ?> </p>
                                
                                <div  id='game-manager-options'>
                                    <?php
                                        if($_SESSION['type'] == 'admin'){
                                    ?>
                                        <span title='essa funcionalidade não faz parte do projeto do modulo 2'  class='icon material-symbols-outlined'>add_circle</span>
                                        <span title='essa funcionalidade não faz parte do projeto do modulo 2'  class='icon material-symbols-outlined'>edit</span>
                                        <span title='essa funcionalidade não faz parte do projeto do modulo 2'  class='icon material-symbols-outlined'>delete</span>
                                    <?php        
                                        }else{
                                    ?>
                                        <span class='icon material-symbols-outlined'>edit</span>
                                    <?php
                                        }
                                    ?>
                                </div>

                            </div>
                            
                        </td>                        
                    </tr>
            <?php

                }
                   
            ?>
        </table>
        </div>

    </main>
    
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/includes/parts/footer.php' ?>
</body>
</html>   