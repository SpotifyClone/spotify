<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Spotify Clone - Confirmação</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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
        .confirm-container {
            background-color: #181818;
            padding: 30px;
            border-radius: 10px;
            width: 400px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        .spotify-logo {
            color: #1db954;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .confirm-message {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .btn-group {
            display: flex;
            justify-content: space-between;
        }
        .btn-cancel {
            background-color: #666;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
        }
        .btn-confirm {
            background-color: #1db954;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
        }
        .btn-confirm:hover {
            background-color: #1ed760;
        }
</style>
</head>
<body>
<div class="confirm-container">
<div class="spotify-logo">Spotify</div>
<p class="confirm-message">Você tem certeza que deseja excluir a publicação?</p>
<div class="btn-group">
<button class="btn-cancel">Não</button>
<button class="btn-confirm">Sim</button>
</div>
</div>
</body>
</html>