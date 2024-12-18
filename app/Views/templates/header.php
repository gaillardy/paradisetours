<?php
use App\Helpers\Language;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $metaDescription ?? 'Default description' ?>">
    <meta name="keywords" content="<?= $metaKeywords ?? 'tourism, travel' ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($translations['title'] ?? 'Home Page') ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<nav>
<?php
// Rendre le switcher avec la route actuelle
echo Language::renderSwitcher($lang, $currentRoute);
?>
</nav>

</body>
</html>