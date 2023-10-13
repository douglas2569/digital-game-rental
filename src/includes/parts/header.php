<?php  require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/config/config.php'; ?>

<header>
    <div class="container">
        
        <?php
            if(empty($_SESSION['hash'])){
        ?>        
                <a href='http://localhost/digital-game-rental/src/user/view/login.php'>Entrar</a>"; 
                
        <?php
            } else {
        ?>        
                <span>Olá, <strong> <?= $_SESSION['name']?>  </strong>  |
                <a href='http://localhost/digital-game-rental/src/user/view/edit.php'> Meus Dados</a> | </span>
        <?php        
                if($_SESSION['type'] == 'admin'){                    
        ?>        
                <a href='http://localhost/digital-game-rental/src/user/view/register.php'>Novo utilizador</a> |
                <a href='http://localhost/digital-game-rental/src/user/view/register.php'>Novo jogo</a>                   
                
                
        <?php
                }
            } 
        ?>
            <a href='/digital-game-rental/src/user/logout.php'>Sair</a>
    </div>
</header>