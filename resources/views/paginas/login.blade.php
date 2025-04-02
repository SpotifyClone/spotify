<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Spotify - Login</title>
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
        .login-container {
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
        .login-container h2 {
            font-size: 18px;
            margin-bottom: 25px;
            font-weight: bold;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .login-container input {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: white;
        }
        .login-container input::placeholder {
            color: white;
            opacity: 0.7;
        }
        .login-container .input-group-text {
            background-color: #333;
            border: none;
            color: white;
        }
        .login-container button {
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
        .login-container button:hover {
            background-color: #1ed760;
        }
        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 20px 0;
        }
        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #b3b3b3;
        }
        .divider:not(:empty)::before {
            margin-right: .75em;
        }
        .divider:not(:empty)::after {
            margin-left: .75em;
        }
        .login-container a {
            color: #b3b3b3;
            text-decoration: none;
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        .login-container a:hover {
            color: white;
        }
</style>
</head>
<body>
<div class="login-container">
<div class="spotify-logo">Spotify</div>
<h2>Música para todos.</h2>
<form>
<div class="input-group">
<span class="input-group-text"><i class="fas fa-envelope"></i></span>
<input type="email" class="form-control" placeholder="E-mail ou nome de usuário" required>
</div>
<div class="input-group">
<span class="input-group-text"><i class="fas fa-eye"></i></span>
<input type="password" class="form-control" placeholder="Senha" required>
</div>
<button type="submit">ENTRAR</button>
</form>
<div class="divider">OU</div>
<a href="#">NÃO TEM UMA CONTA? <strong>INSCREVA-SE</strong></a>
<a href="#">ESQUECEU A SENHA? <strong>REDEFINIR SENHA</strong></a>
</div>
</body>
</html>