<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Spotify Clone - Home</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
        body {
            background-color: #121212;
            color: white;
            font-family: 'Circular', sans-serif;
        }
        .navbar {
            background-color: #000;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar-brand {
            color: #1db954;
            font-size: 24px;
            font-weight: bold;
        }
        .profile-icon {
            color: white;
            font-size: 24px;
            background-color: #1db954;
            padding: 10px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
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