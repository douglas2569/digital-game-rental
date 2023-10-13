<?php
    include_once '../User.php';
    include_once '../UserDAO.php';

    if(isset($_SESSION['hash'])) {
        header("Location:". $_SERVER['DOCUMENT_ROOT'].'digital-game-rental/src/user/User.php'); exit();   
    }

    $userName = $_POST['username'] ?? null;
    $password = $_POST['password'] ?? null;
    
    if($userName && $password){ 
        $userDAO = new UserDAO();
        $userList = $userDAO->login($userName, $password);
        print_r($userList);            
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
            <form method="POST">
                <h2>Login</h2>  
                <label for="user-name">Usuário</label>
                <input type="text" name='username' class='user-name' id='user-name'/>

                <label for="password">Senha</label>
                <input type="password" name='password' class='password' /> 

                <label for="password">Name</label>
                <input type="password" name='password' class='password' /> 

                <button type='submit'>Enviar</button>              
            </form>
        </div>
    </main>
</body>
</html>
