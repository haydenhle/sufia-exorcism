<?php
    // Load news data
    $articles = json_decode(file_get_contents('data/news.json'), true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News | Sufia Exorcism</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- include nav bar -->
    <?php include __DIR__ . '/navbar.php'; ?>

    <main class="news-page">
        <h1>Development Updates</h1>
        <p class="news-intro">Follow the progress of <strong>Sufia Exorcism</strong> as new regions, art, and gameplay features are added.</p>

        <!-- news article blocks -->
        <div class="news-container">
            <?php foreach ($articles as $a): ?>
                <!-- news cards -->
                <div class="news-card">
                    <!-- htmlspecialchars() makes text safe to put in html -->
                    <h2><?= htmlspecialchars($a['title']) ?></h2>
                    <p class="news-meta"><?= htmlspecialchars($a['date']) ?> | <?= htmlspecialchars($a['topic']) ?></p>
                    <p><?= htmlspecialchars($a['summary']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>
