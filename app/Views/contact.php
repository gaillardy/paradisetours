<?php include 'templates/header.php'; ?>

<h1><?= htmlspecialchars($translations['contact'] ?? 'contact') ?></h1>

<form action="/en/sub" method="post">
    <p><input type="text" name="email" placeholder="Votre email"></p>
    <p>
        <textarea name="message" id=""></textarea>
    </p>
    <input type="submit" value="Send">
</form>

<?php include 'templates/footer.php'; ?>