<?php  require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/config/config.php'; ?>

<header>
    <div class="container">
        <div class='header-top'>
            <?php
                if(empty($_SESSION['hash'])){
            ?>        
                    <a href='http://localhost/digital-game-rental/src/user/view/login.php'>Entrar</a>"; 
                    
            <?php
                } else {
            ?>        
                    <span>Olá, <strong> <?= $_SESSION['name']?>  </strong> </span>
                    <a href='http://localhost/digital-game-rental/src/user/view/edit.php'> Meus Dados</a> 
            <?php        
                    if($_SESSION['type'] == 'admin'){                    
            ?>        
                    <a href='http://localhost/digital-game-rental/src/user/view/register.php'>Novo utilizador</a>
                    <a title='essa funcionalidade não faz parte do projeto do modulo 2' href='http://localhost/digital-game-rental/src/user/view/register.php'>Novo jogo</a>                   
                    
                    
            <?php
                    }
                } 
            ?>
                <a href='/digital-game-rental/src/user/logout.php'>Sair</a>
        </div>
    </div>
</header>