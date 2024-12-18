<?php include 'templates/header.php'; ?>
<?php use App\Helpers\Language; ?>

<h1><?= htmlspecialchars($translations['welcome'] ?? 'Welcome') ?></h1>
<p><?= htmlspecialchars($translations['intro'] ?? '') ?></p>


<a href="/contact"><?php //Language::translate('contact'); ?></a>
<a href="/about"><?php //Language::translate('about'); ?></a>



<?php include 'templates/footer.php'; ?>