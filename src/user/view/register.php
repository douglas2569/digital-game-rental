<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/config/config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/user/UserDAO.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/user/User.php';  

    if(!isset($_SESSION['hash']) || ($_SESSION['type'] != 'admin')) {
        header("Location: src/index.php"); 
        exit();   
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
            
            echo "<span class='msg'>Usuario ou senha incorreto.</span>";
        }else{                        
                                   
            header("Location: http://localhost/digital-game-rental/index.php"); exit(); 
        }        
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
            <form class="form user-form" method="POST">
                <h2 class="title form-title">Cadastrar usuario</h2> 
                <label class="label" for="name">Nome</label>
                <input type="text" name='name' class='input' id='name' required/> 
                <label class="label" for="user-name">Usuário</label>
                <input type="text" name='username' class='input' id='user-name' required/>

                <label class="label" for="password">Senha</label>
                <input type="password" name='password' class='input' required /> 

                <label class="label" for="type">Type</label>
                <select class="select" name="type" id="types">
                    <option value="admin">Administrador</option>
                    <option value="editor">Editor</option>
                </select>

                <button class="btn" type='submit'>Cadastrar</button>              
            </form>
        </div>
    </main>
</body>
</html>
