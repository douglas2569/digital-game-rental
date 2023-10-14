<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/config/config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/user/UserDAO.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/user/User.php';  

    if(!isset($_SESSION['hash']) && empty($_SESSION['hash'])){
        header("Location: src/user/view/login.php"); 
        exit();
    } 

    $name = $_POST['name'] ?? null;
    $userName = $_POST['username'] ?? null;
    $password = $_POST['password'] ?? null; 
    $hash = $_SESSION['hash'];

    $dataList = array();
    
    if($name && $userName){ 
        if(!empty($password)) $password = password_hash($password, PASSWORD_BCRYPT);        
        
        $userDAO = new UserDAO();
        $register = $userDAO->update('users', array($userName, $name, $password, $hash));  
        
        if(empty($register) && !$register){
            
            echo "<span class='msg'>Dados incorretos.</span>";
        }else{                        
                                   
            header("Location: http://localhost/digital-game-rental/index.php"); exit(); 
        }        
    }else{
        $userDAO = new UserDAO();
        $dataList = $userDAO->show($hash);   
        
    }    
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Perfil</title>
</head>
<body>
    <main>
        <div class="container">
            <form class="form profile-form" method="POST">
                <h2 class="title form-title" >Perfil</h2>  
                <label class="label" for="name">Nome</label>
                <input type="text" name='name' class='input' id='name' required value="<?= $dataList[0]->getName() ?>" /> 
                <label class="label" for="user-name">Usuário</label>
                <input type="text" name='username' class='input' id='user-name' required value="<?= $dataList[0]->getUserName() ?>"/>

                <label class="label" for="password">Senha</label>
                <input type="password" name='password' class='input' /> 

                <button class="btn" type='submit'>Atualizar</button>              
            </form>
        </div>
    </main>
</body>
</html>
