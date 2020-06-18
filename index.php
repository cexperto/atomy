<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <header class="header">
        <?php
        include 'header-h.html';
        ?>
    </header>
    <section class="container">
        <aside class="aside">
            <aside><img src="./img/bigatomy.JPG" alt=""></aside>
    </aside>
        <section class="content">
            <?php
            include 'slider.html';
            include 'carousel.php';
            ?>
        </section>
    
    </section>
<?php
include 'footer.html';
?>  

</body>
</html>
    