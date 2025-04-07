<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Spotify Clone - Home</title>
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
            background-color: #181818;
            border-radius: 8px;
            text-align: center;
            padding: 10px;
        }
        .grid-item img {
            width: 100%;
            border-radius: 8px;
        }
        .song-title {
            font-size: 14px;
            font-weight: bold;
            color: white;
            margin-top: 10px;
        }
        .artist-name {
            font-size: 12px;
            color: #b3b3b3;
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
        <div class="profile-icon">
            <i class="fas fa-user"></i>
        </div>
    </nav>
    <div class="content">
<div class="grid-container">
    <div class="grid-item">
        <img style="width:100%; height:auto;" src="assets/img/1.jpg">
        <div class="song-title">Sorte</div>
        <div class="artist-name">Thiaguinho</div>
    </div>
    <div class="grid-item">
        <img style="width:100%; height:auto;" src="assets/img/2.jpg">
        <div class="song-title">Mania do Brasil</div>
        <div class="artist-name">Turma do Pagode</div>
    </div>
    <div class="grid-item">
        <img style="width:100%; height:auto;" src="assets/img/3.jpg">
        <div class="song-title">Velocidade da Luz</div>
        <div class="artist-name">Revelação</div>
    </div>
    <div class="grid-item">
        <img style="width:100%; height:auto;" src="assets/img/4.jpg">
        <div class="song-title">A Arte</div>
        <div class="artist-name">Grupo Revelação</div>
    </div>
    <div class="grid-item">
        <img style="width:100%; height:auto;" src="assets/img/5.jpg">
        <div class="song-title">Juntos</div>
        <div class="artist-name">Sorriso e Dilsinho</div>
    </div>
    <div class="grid-item">
        <img style="width:100%; height:auto;" src="assets/img/6.jpg">
        <div class="song-title">Seja Sambista Também</div>
        <div class="artist-name">Grupo Fundo de Quintal</div>
    </div>
    <div class="grid-item">
        <img style="width:100%; height:auto;" src="assets/img/7.jpg">
        <div class="song-title">Pelados em Santos</div>
        <div class="artist-name">Mamonas Assassinas</div>
    </div>
    <div class="grid-item">
        <img style="width:100%; height:auto;" src="assets/img/8.jpg">
        <div class="song-title">Faroeste Caboclo</div>
        <div class="artist-name">Legião Urbana</div>
    </div>
</div>
</div>
</body>
</html>