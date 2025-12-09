<?php
// Load JSON data
$regions    = json_decode(file_get_contents('data/regions.json'), true);
$characters = json_decode(file_get_contents('data/characters.json'), true);

// Get keyword from URL: ?name=Pride
$keyword = isset($_GET['name']) ? $_GET['name'] : '';
$keywordLower = strtolower($keyword);

// Array to store matching characters
$matched = [];

// Variable to store real region name
$regionName = null;

// Find all characters whose "region" matches the url keyword
foreach ($characters as $c) {
    if (strtolower($c['region']) === $keywordLower) {
        $matched[] = $c;
    }
}

// If no characters found
if (empty($matched)) {
    $title = htmlspecialchars($keyword);
    echo "<h1>No characters found</h1>";
    exit();
}

// find the real name of the region given the url keyword
foreach ($regions as $r) {
    if (strtolower($r['short']) === $keywordLower) {
        $regionName = $r['name'];   // Found the match!
        break;
    }
}

if ($regionName === null) {
    echo "Region name not found.";
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Characters in <?= htmlspecialchars($regionName) ?></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php include __DIR__ . '/navbar.php'; ?>
        <main class="characters-page">
            <h1>Characters from <?= htmlspecialchars($regionName) ?></h1>
            <div class="character-container">
                <?php foreach ($matched as $c): ?>
                        <div class="character-card">
                            <h2><?= htmlspecialchars($c['name']) ?></h2>
                            <div class="character-image">
                                <img src="<?= htmlspecialchars($c['image']) ?>" alt="<?= htmlspecialchars($c['name']) ?>" />
                            </div>
                            <p><strong>Element:</strong> <?= htmlspecialchars($c['element']) ?></p>
                            <p><?= htmlspecialchars($c['bio']) ?></p>
                        </div>
                <?php endforeach; ?>
            </div>
        </main>
    </body>
</html>
