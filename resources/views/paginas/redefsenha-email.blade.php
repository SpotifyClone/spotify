<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Clone - Redefinir Senha</title>
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
        .reset-container {
            background-color: #181818;
            padding: 40px;
            border-radius: 10px;
            width: 400px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        .spotify-logo {
            color: #1db954;
            font-size: 30px;
            font-weight: bold;
        }
        .reset-container h2 {
            font-size: 22px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .reset-container .input-group {
            display: flex;
            align-items: center;
            background-color: #333;
            border-radius: 5px;
            padding: 5px;
            margin: 10px 0;
        }
        .reset-container .input-group-text {
            background-color: transparent;
            border: none;
            color: white;
            font-size: 18px;
            padding: 10px;
        }
        .reset-container input {
            flex: 1;
            border: none;
            background-color: transparent;
            color: white !important;
            padding: 10px;
            font-size: 16px;
        }
        .reset-container input::placeholder {
            color: white !important;
        }
        .reset-container input:focus {
            outline: none;
        }
        .reset-container button {
            width: 100%;
            padding: 12px;
            background-color: #1db954;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            margin-top: 10px;
        }
        .reset-container button:hover {
            background-color: #1ed760;
        }
    </style>
</head>
<body>
    <div class="reset-container">
        <div class="spotify-logo">Spotify</div>
        <h2>Redefinir a senha.</h2>
        <form>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="E-mail cadastrado" required>
            </div>
            <button type="submit">ENVIAR LINK</button>
        </form>
    </div>
</body>
</html>