<?php
    $articles = json_decode(file_get_contents('data/characters.json'), true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHARACTER | Sufia Exorcism</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- include nav bar -->
    <?php include __DIR__ . '/navbar.php'; ?>

    <main class="character-page">
        <h1>Characters</h1>
        <p >Help me plssssss</p>

        <!-- news article blocks -->
        <div class="characters-container">
           <img src="images/char/xochitl.png" alt="Flowers in Chania">
        </div>
    </main>
    <!-- footer -->
    <footer class="home-footer">
        <p>© 2025 Sufia Exorcism — A Game Concept by Hayden Le & Dorothy Xu & Jason Zhou</p>
    </footer>
</body>
</html>
