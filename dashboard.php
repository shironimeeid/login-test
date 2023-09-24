<?php
    session_start();

    if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
        header('Location: login.html');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honkai StarRail</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <audio src="spotifydown.com - Fading Memories.mp3" autoplay loop controls>
    </audio>
<body>
    <header class="header">
        <div class="container">
            <h1 class="logo">Honkai StarRail</h1>
            <nav class="main-nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Characters</a></li>
                    <li><a href="#">Story</a></li>
                    <li><a href="#">Download</a></li>
                    <li><a href="logout.php">Logout</a></li> 
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h2>Welcome to the World of Honkai!</h2>
            <p>Embark on an epic journey...</p>
            <a href="#" class="cta-button">Play Now</a>
        </div>
    </section>

    <section class="characters">
        <div class="container">
            <h2>Meet the Characters</h2>
            <div class="character-list">
                <div class="character">
                    <img src="character1.jpg" alt="Character 1">
                    <h3>Character Name 1</h3>
                    <p>Description of Character 1.</p>
                </div>
                <div class="character">
                    <img src="character2.jpg" alt="Character 2">
                    <h3>Character Name 2</h3>
                    <p>Description of Character 2.</p>
                </div>
                <div class="character">
                    <img src="character3.jpg" alt="Character 3">
                    <h3>Character Name 3</h3>
                    <p>Description of Character 3.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Honkai StarRail. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
