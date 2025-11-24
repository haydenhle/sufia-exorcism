
<?php
    // load region data
    $regions = json_decode(file_get_contents('data/regions.json'), true) ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>World of Sufia</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <!-- import nav bar -->
    <?php include 'navbar.php'; ?>

    <main class="world-map">
        <!-- page title -->
        <h1>The Seven Covens of Sufia</h1>
        <!-- map container -->
        <div id="map-container">
            <!-- world map image -->
            <img src="images/world-map.png" alt="Sufia World Map" id="sufia-map">

            <!-- region markers -->
            <?php foreach ($regions as $region): ?>
                <div 
                    class="region-marker"
                    style="top: <?= $region['y'] ?>%; left: <?= $region['x'] ?>%;"
                    data-name="<?= htmlspecialchars($region['name']) ?>"
                    data-description="<?= htmlspecialchars($region['description']) ?>"
                    data-short="<?= htmlspecialchars($region['short']) ?>">
                </div>
            <?php endforeach; ?>
        </div>

        <!-- region info popup -->
        <div id="region-info" class="hidden">
            <button id="close-info">✕</button>
            <h2 id="region-name"></h2>
            <p id="region-desc"></p>
        </div>
    </main>
</body>
</html>
