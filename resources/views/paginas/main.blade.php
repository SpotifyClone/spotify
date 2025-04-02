<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #121212;
            color: white;
            font-family: 'Circular', sans-serif;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #000;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .sidebar a {
            color: #b3b3b3;
            text-decoration: none;
            font-size: 18px;
            padding: 12px 0;
            display: flex;
            align-items: center;
        }
        .sidebar a i {
            margin-right: 10px;
            font-size: 20px;
        }
        .sidebar a:hover {
            color: white;
        }
        .main-content {
            margin-left: 270px;
            padding: 20px;
        }
        .playlist {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .playlist-card {
            background-color: #181818;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            transition: background 0.3s;
        }
        .playlist-card:hover {
            background-color: #282828;
        }
        .playlist-card img {
            width: 100%;
            border-radius: 5px;
        }
        .player {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #181818;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 -2px 5px rgba(0,0,0,0.5);
        }
        .player button {
            background: none;
            border: none;
            color: white;
            font-size: 20px;
            margin: 0 10px;
        }
        .player button:hover {
            color: #1db954;
        }
    </style>
</head>
<body>
    <div class="d-flex">
       
        <div class="sidebar">
            <div>
                <h4 class="text-light">Spotify</h4>
                <a href="#"><i class="fas fa-home"></i> Início</a>
                <a href="#"><i class="fas fa-search"></i> Buscar</a>
                <a href="#"><i class="fas fa-book"></i> Biblioteca</a>
            </div>
            <div>
                <a href="#"><i class="fas fa-cog"></i> Configurações</a>
            </div>
        </div>

        <div class="main-content">
            <h2>Bem-vindo ao Spotify</h2>
            <p>Explore músicas, artistas e playlists.</p>
            <div class="playlist">
                <div class="playlist-card">
                    <img src="https://via.placeholder.com/200" alt="Playlist 1">
                    <p>Minha Playlist</p>
                </div>
                <div class="playlist-card">
                    <img src="https://via.placeholder.com/200" alt="Playlist 2">
                    <p>Top Hits</p>
                </div>
                <div class="playlist-card">
                    <img src="https://via.placeholder.com/200" alt="Playlist 3">
                    <p>Rock Clássico</p>
                </div>
            </div>
        </div>
    </div>
    
  
    <div class="player">
        <div>
            <strong>Música Atual</strong>
        </div>
        <div>
            <button><i class="fas fa-backward"></i></button>
            <button><i class="fas fa-play"></i></button>
            <button><i class="fas fa-forward"></i></button>
        </div>
    </div>
</body>
</html> -->

 
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Spotify</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<style>

        body {

            background-color: #121212;

            color: white;

            font-family: 'Circular', sans-serif;

        }

        .navbar {

            background-color: #000;
            padding: 10px 20px;
        }

        .navbar-brand {

            color: #1db954;

            font-size: 24px;

            font-weight: bold;

        }

        .content {

            display: flex;

            justify-content: center;

            align-items: center;

            min-height: 80vh;

        }

        .grid-container {

            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 30px;

        }

        .grid-item {

            width: 160px;

            height: 160px;

            background-color: #b3b3b3;

            border-radius: 8px;

        }

        .btn-custom {

            background-color: #b3b3b3;

            border: none;

            color: black;

            font-weight: bold;

            padding: 5px 15px;

            border-radius: 20px;

        }

        .btn-custom:hover {

            background-color: white;

        }
</style>
</head>
<body>
<nav class="navbar">
<a class="navbar-brand" href="#">Spotify</a>
<div>
<button class="btn btn-custom">Entrar</button>
<button class="btn btn-custom">Registrar</button>
</div>
</nav>
<div class="content">
<div class="grid-container">
<div class="grid-item"></div>
<div class="grid-item"></div>
<div class="grid-item"></div>
<div class="grid-item"></div>
<div class="grid-item"></div>
<div class="grid-item"></div>
<div class="grid-item"></div>
<div class="grid-item"></div>
</div>
</div>
</body>
</html>

 