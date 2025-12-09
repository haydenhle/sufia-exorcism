<?php
    $regions = json_decode(file_get_contents('data/regions.json'), true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Characters | Sufia Exorcism</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- include nav bar -->
    <?php include __DIR__ . '/navbar.php'; ?>

    <main class="characters-page">
        <h1>Characters</h1>
        <p >Learn about the characters of <strong>Sufia Exorcism</strong> who will aid you in your adventures!</p>

        <!-- character blocks -->
        <h2>Select a Region</h2>
        <div class="characters-container">
            <?php foreach ($regions as $r): ?>
            <?php 
                $name = htmlspecialchars($r['short']);
                $urlName = urlencode($r['short']); 
            ?>
        
                <a class="character-card-link" href="character.php?name=<?= urlencode($r['short']) ?>">
                    <div>
                        <h2><?= htmlspecialchars($r['name']) ?></h2>
                        <p>Embodies: <?= htmlspecialchars($r['short']) ?></p>
                        <p><?= htmlspecialchars($r['description']) ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>
