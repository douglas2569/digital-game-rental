<?php 
    require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/config/config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/user/User.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/src/user/UserDAO.php';

    if(isset($_SESSION['hash'])) {         
        header("Location: http://localhost/digital-game-rental/index.php"); exit();   
    }
    
    $userName = $_POST['username'] ?? null;
    $password = $_POST['password'] ?? null;
    
    if($userName && $password){ 
        $userDAO = new UserDAO();
        $userList = $userDAO->login($userName, $password);  
                
        if(count($userList) <= 0){
            echo "<span class='msg'>Usuario ou senha incorreto.</span>";

        }else{            
            $_SESSION['hash'] = $userList[0]->getHash();
            $_SESSION['name'] = $userList[0]->getName();
            $_SESSION['type'] = $userList[0]->getType();
            $_SESSION['username'] = $userList[0]->getUserName();           
        
                                   
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
    <title>Login</title>
</head>
<body>
    <main>
        <div class="container">
            <form class = 'form login-form' method="POST">
                <h2 class='title form-title'>Login</h2>  
                <label class='label' for="user-name">Usuário*</label >
                <input type="text" name='username' class='input user-name-input' id='user-name' required/>

                <label  class='label'for="password">Senha*</label>
                <input type="password" name='password' class='input password-input' required />  
                <button  class="btn login-btn" type='submit'>Entrar</button>              
            </form>
        </div>
    </main>
</body>
</html>
