<?php
    // message feedback variable
    $feedback = "";

    // form submission
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // get form input
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $subject = trim($_POST["subject"]);
        $message = trim($_POST["message"]);

        if ($name && $email && $subject && $message) {
            // build a mailto link
            $mailto = "mailto:hle3@scu.edu"
                . "?subject=" . rawurlencode("Contact Form: $subject")
                . "&body=" . rawurlencode(
                    "Name: $name\n"
                    . "Email: $email\n\n"
                    . "Message:\n$message"
                );

            // redirect to default mail app
            header("Location: $mailto");
            exit;
        } else {
            $feedback = "Please fill out all fields before submitting.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us | Sufia Exorcism</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include __DIR__ . '/navbar.php'; ?>

    <main class="contact">
        <!-- page title -->
        <h1>Contact the Sufia Exorcism Team</h1>
        <p>Have feedback, lore ideas, or collaboration inquiries? Send us a message below.</p>

        <!-- contact form -->
        <form method="POST" action="contact.php" class="contact-form">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="6" required></textarea>

            <button type="submit" class="btn">Open Mail App</button>
        </form>

        <!-- feedback message -->
        <?php if ($feedback): ?>
            <p class="feedback"><?= htmlspecialchars($feedback) ?></p>
        <?php endif; ?>
    </main>
</body>
</html>
