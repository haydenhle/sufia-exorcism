<?php
// Load JSON data
$json = file_get_contents("data/characters.json");
$characters = json_decode($json, true);

// Check if ?name= exists
if (!isset($_GET['name'])) {
    die("No character selected.");
}

$requestedName = $_GET['name'];
$character = null;

// Find character in JSON
foreach ($characters as $c) {
    if (strtolower($c['name']) === strtolower($requestedName)) {
        $character = $c;
        break;
    }
}

// If not found
if (!$character) {
    die("Character not found.");
}
?>

<!DOCTYPE html>
<html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($character['name']) ?> | Sufia Excorcism</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .character-image {
            width: 300px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <?php include __DIR__ . '/navbar.php'; ?>
    <main>
<div class="character-page">
    <h1><?= htmlspecialchars($character['name']) ?></h1>
    <p><strong>Region:</strong> <?= htmlspecialchars($character['region']) ?></p>
    <p><?= htmlspecialchars($character['bio']) ?></p>

    <?php if (!empty($character['image'])): ?>
        <img src="<?= htmlspecialchars($character['image']) ?>" 
             alt="<?= htmlspecialchars($character['name']) ?>" 
             class="character-image">
    <?php endif; ?>

    <br><br>

    <div class="hero-buttons back-to-button">
        <a href="characters.php" class="btn">Back to All Characters</a>
    </div>

<main>
<!-- footer -->
    <footer class="home-footer">
        <p>© 2025 Sufia Exorcism — A Game Concept by Hayden Le & Dorothy Xu & Jason Zhou</p>
    </footer>
</body>

</html>
