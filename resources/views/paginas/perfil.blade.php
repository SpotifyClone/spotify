<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Perfil - Spotify Clone</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
        body {
            background-color: #121212;
            color: white;
            font-family: 'Circular', sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 40px auto;
            background-color: #181818;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        .spotify-logo {
            color: #1db954;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 50px;
            color: #1db954;
        }
        .btn-green {
            background-color: #1db954;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: bold;
        }
        .btn-green:hover {
            background-color: #1ed760;
        }
        .btn-gray {
            background-color: #555;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: bold;
        }
        .btn-gray:hover {
            background-color: #777;
        }
        .publications {
            margin-top: 20px;
        }
        .publication-card {
            background-color: #222;
            padding: 15px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .publication-card img {
            width: 50px;
            height: 50px;
            border-radius: 5px;
            background-color: #333;
        }
</style>
</head>
<body>
<div class="container">
<div class="spotify-logo">Spotify</div>
<div class="profile-header">
<div class="profile-pic">
<i class="fas fa-user"></i>
</div>
<div>
<h4>Usuário: Nome do Usuário</h4>
<p>Email: email@exemplo.com</p>
<p>Telefone: (00) 00000-0000</p>
</div>
<button class="btn btn-green">Editar Perfil</button>
</div>
<button class="btn btn-gray">Excluir Usuário</button>
<button class="btn btn-green">Nova Publicação</button>
<div class="publications">
<h5>Suas Publicações</h5>
<div class="publication-card">
<img src="#" alt="Podcast">
<div>
<p><strong>Nome:</strong> Podcast 1</p>
<p><strong>Tempo:</strong> 30 min</p>
</div>
<button class="btn btn-gray">Excluir</button>
<button class="btn btn-green">Editar</button>
</div>
<div class="publication-card">
<img src="#" alt="Podcast">
<div>
<p><strong>Nome:</strong> Podcast 2</p>
<p><strong>Tempo:</strong> 45 min</p>
</div>
<button class="btn btn-gray">Excluir</button>
<button class="btn btn-green">Editar</button>
</div>
</div>
</div>
</body>
</html>