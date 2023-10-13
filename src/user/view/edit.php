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
            <form method="POST">
                <h2>Perfil</h2>  
                <label for="user-name">Usuário</label>
                <input type="text" name='username' class='user-name' id='user-name'/>

                <label for="password">Senha</label>
                <input type="password" name='password' class='password' /> 

                <label for="password">Repita a senha</label>
                <input type="password" name='repeatPassword' class='repeat-password' /> 

                <button type='submit'>Atualizar</button>              
            </form>
        </div>
    </main>
</body>
</html>
