<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/config/config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/game/GameDAO.php';

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
    <link rel="stylesheet" href="http://localhost/digital-game-rental/index.css">    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Listagem de Jogos</title>
</head>
<body>
<body>  
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/includes/parts/header.php' ?>
    <?php        
        $order = $_GET['order'] ?? "name";
        $keyword =$_GET['search'] ?? "";
    ?>    

    <main>
        <div class="container">            
            <form method="get" class="form search-form">
                <span>
                   <strong> Ordenar: </strong>
                    <a href="index.php?order=name&keyword=<?php echo $keyword;?>">Nome</a> | 
                    <a href="index.php?order=producer&keyword=<?php echo $keyword;?>">Produtora</a> | 
                    <a href="index.php?order=high-rating<?php echo $keyword;?>">Nota Alta</a> |
                    <a href="index.php?order=low-rating<?php echo $keyword;?>">Nota Baixa</a> |
                    <a href="index.php">Mostrar Todos</a> |
                </span>
                <span>
                    <label class="label" for="search">Buscar </label>
                    <input  class="input search-input" type="text" name="search" id="search" size="25" maxlength="40">
                    <button  type="submit" class="btn search-btn">Pesquisar</button>                
                </span>
            </form>
            
            <table class="table list">
            <?php
                $gameDAO = new GameDAO();
                $gameList = $gameDAO->showJoin($keyword, $order);

                 if(count($gameList) <= 0){
            ?>
                <tr><td>Infelizmente não foi possivel realizar a busca!</td></tr>
            <?php
                } else { 
                        
                    foreach ($gameList as $game) { 
                        
                ?>
                    <tr>
                        <td>
                            <img class ='img sm-img' src="<?= 'http://localhost/digital-game-rental/'.$game->getCover() ?>" />
                            <div>
                                <a href='src/game/view/details.php?id=<?= $game->getId() ?>'><?= $game->getName() ?></a>
                                <span>(<?= $game->getGenderFK() ?>)</span>                    
                                <span>(<?= $game->getProducerFK() ?>) </span>
                            </div>
                            
                        </td>
                        <td>
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
                        </td>
                    </tr>                    
                <?php
                        
                    }
                                            
                }
                ?>
            
        </table>

        </div>

       

    </main>
    
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/includes/parts/footer.php' ?>
</body>
</html>   