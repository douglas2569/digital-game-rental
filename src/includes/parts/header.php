<?php  require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/config/config.php'; ?>

<header>
    <div class="container">
        <?php
            if(empty($_SESSION['hash'])){
                echo  "<a href='user-login.php'>Entrar</a>"; 
            } else {
                echo "Olá, <strong>" . $_SESSION['name'] . "</strong>  | ";
                echo "<a href='user-edit.php'> Meus Dados</a> | ";
                
                if($_SESSION['type'] == 'admin'){
                    echo "<a href='user-new.php'>Novo utilizador</a> | ";
                    echo "Novo jogo | ";
                }
                echo "<a href='/digital-game-rental/src/user/logout.php' >Sair</a>";
            } 
        ?>
    </div>
</header>