<?php
    $articles = json_decode(file_get_contents('data/characters.json'), true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHARACTERS | Sufia Exorcism</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- include nav bar -->
    <?php include __DIR__ . '/navbar.php'; ?>

    <main class="characters-page">
        <h1>Characters</h1>
        <p >Learn about the characters of <strong>Sufia Exorcism</strong> who will aid you in your adventures!</p>

        <!-- character blocks -->
        <div class="characters-container">
            <?php foreach ($articles as $a): ?>
            <?php 
                $name = htmlspecialchars($a['name']);
                $urlName = urlencode($a['name']); 
            ?>
        
                <a class="character-card-link" href="character.php?name=<?= urlencode($a['name']) ?>">
                    <div class="character-card">
                        <h2><?= $name ?></h2>
                        <p>Region: <?= htmlspecialchars($a['region']) ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

    </main>
    <!-- footer -->
    <footer class="home-footer">
        <p>© 2025 Sufia Exorcism — A Game Concept by Hayden Le & Dorothy Xu & Jason Zhou</p>
    </footer>
</body>
</html>
