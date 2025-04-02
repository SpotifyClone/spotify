<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Spotify Clone - Editar Publicação</title>
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
            flex-direction: column;
        }
        .edit-container {
            background-color: #181818;
            padding: 30px;
            border-radius: 10px;
            width: 600px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        .spotify-logo {
            color: #1db954;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        .edit-container h2 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .edit-container input {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: white;
        }
        .edit-container input::placeholder {
            color: white;
            opacity: 0.7;
        }
        .edit-container button {
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
        .edit-container button:hover {
            background-color: #1ed760;
        }
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #1db954;
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            color: black;
            font-weight: bold;
            border: none;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .back-button:hover {
            background-color: #1ed760;
        }
        .profile-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 30px;
            color: white;
            background-color: #1db954;
            padding: 8px;
            border-radius: 50%;
        }
        .edit-box {
            background-color: #181818;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .image-placeholder {
            width: 120px;
            height: 120px;
            background-color: #333;
            border-radius: 5px;
        }
        .form-container {
            flex: 1;
        }
</style>
</head>
<body>
<button class="back-button">Voltar</button>
<div class="spotify-logo">Spotify</div>
<div class="edit-container">
<h2>Enviar Publicação</h2>
<div class="edit-box">
    <div class="image-placeholder"></div>
    <div class="form-container">
        <form>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Nome" required>
            </div>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Podcast / Música" required>
            </div>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Tempo" required>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</div>
</div>
<i class="fas fa-user-circle profile-icon"></i>
</body>
</html>