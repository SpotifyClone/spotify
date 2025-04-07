<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Spotify Clone - Cadastro</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    body {
        background-color: #121212;
        color: white;
        font-family: 'Circular', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .signup-container {
        background-color: #181818;
        padding: 50px;
        border-radius: 10px;
        width: 350px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }
    .spotify-logo {
        color: #1db954;
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .signup-container h2 {
        font-size: 18px;
        margin-bottom: 25px;
        font-weight: bold;
    }
    .input-group {
        margin-bottom: 15px;
    }
    .signup-container input {
        width: 100%;
        padding: 15px;
        border: none;
        border-radius: 5px;
        background-color: #333;
        color: white;
    }
    .signup-container .input-group-text {
        background-color: #333;
        border: none;
        color: white;
    }
    .signup-container button {
        width: 100%;
        padding: 15px;
        background-color: #1db954;
        border: none;
        border-radius: 50px;
        font-size: 16px;
        font-weight: bold;
        color: white;
        margin-top: 10px;
    }
    .signup-container button:hover {
        background-color: #1ed760;
    }
    .signup-container a {
        color: #b3b3b3;
        text-decoration: none;
        font-weight: bold;
        display: block;
        margin-top: 10px;
    }
    .signup-container a:hover {
        color: white;
    }
</style>
</head>
<body>
    <div class="signup-container">
        <div class="spotify-logo">Spotify</div>
        <h2>Crie sua conta</h2>
        <form action="{{ route('cadastro') }}" method="POST">
            @csrf
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" name="usuario" placeholder="Usuário" required>
            </div>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" name="nome" placeholder="Nome" required>
            </div>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" required>
            </div>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                <input type="tel" class="form-control" name="telefone" placeholder="Telefone">
            </div>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                <input type="date" class="form-control" name="data_nascimento" required>
            </div>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" class="form-control" name="email" placeholder="Endereço de E-mail" required>
            </div>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Senha" required>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
        <a href="#">JÁ TEM UMA CONTA? <strong>ENTRAR</strong></a>
    </div>
</body>
</html>
