<?php
$articles = json_decode(file_get_contents('data/news.json'), true);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>News | Sufia Exorcism</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include 'navbar.php'; ?>

  <main class="news">
    <h1>Latest News</h1>
    <div class="news-grid">
      <?php foreach ($articles as $a): ?>
        <div class="news-item">
          <h2><?= $a['title'] ?></h2>
          <p><small><?= $a['date'] ?> | <?= $a['topic'] ?></small></p>
          <p><?= $a['summary'] ?></p>
          <a href="article.php?id=<?= $a['id'] ?>" class="btn">Read More</a>
        </div>
      <?php endforeach; ?>
    </div>
  </main>
</body>
</html>
