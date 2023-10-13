<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/config/config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/user/UserDAO.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/user/User.php';  

    if(isset($_SESSION['hash']) && ($_SESSION['type'] != 'admin')) {
        header("Location:". $_SERVER['DOCUMENT_ROOT'].'digital-game-rental/src/user/view/login.php'); exit();   
    }

    $userName = $_POST['username'] ?? null;
    $name = $_POST['name'] ?? null;
    $password = $_POST['password'] ?? null;
    $type = $_POST['type'] ?? null;
    $hash = password_hash(rand(10000,9999), PASSWORD_BCRYPT);
    
    if($userName && $password && $type && $hash){ 
        $userDAO = new UserDAO();
        $password = password_hash($password, PASSWORD_BCRYPT);
        $register = $userDAO->store('users', array($userName, $name, $password, $type, $hash));  
        
        if(empty($register) && !$register){
            echo 'Preecha os campos corretamente!!';
        }else{                        
                                   
            header("Location: http://localhost/digital-game-rental/index.php"); exit(); 
        }
        
    }else{
        echo 'Preencha os campos corretamente.<br>';
        
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar Usuario</title>
</head>
<body>
    <main>
        <div class="container">
            <form method="POST">
                <h2>Cadastrar usuario</h2> 
                <label for="name">Nome</label>
                <input type="text" name='name' class='name' id='name'/> 
                <label for="user-name">Usuário</label>
                <input type="text" name='username' class='user-name' id='user-name'/>

                <label for="password">Senha</label>
                <input type="password" name='password' class='password' /> 

                <label for="type">Type</label>
                <select name="type" id="types">
                    <option value="admin">Administrador</option>
                    <option value="editor">Editor</option>
                </select>

                <button type='submit'>Cadastrar</button>              
            </form>
        </div>
    </main>
</body>
</html>
