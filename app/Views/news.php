<?php include 'templates/header.php'; ?>


<form action="/en/sendnews" method="post">
    <p>
        <input type="text" name="sujet" >
    </p>
    <p>
        <textarea name="message" ></textarea>
    </p>
    <input type="submit" value="envoyer">
</form>

<?php include 'templates/footer.php'; ?>
