<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        flix
    </title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owlcarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-ts3s5qg0blhnqroyjxvnjeem4upmxhrqftgmbq1gkmelcxlsebuaxhrbj/eftzpbp4rvsrpeikbmdjobcvhe3g==" crossorigin="anonymous" />
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- app css -->
    <link rel="stylesheet" href="../views/css/home.css">
</head>
<body>

<?php require 'partials/nav.php' ?>
        <?php if ($_GET['type'] == 'movie'): ?>
            <iframe src="https://embed.su/embed/<?= $_GET['type'] . '/' . $_GET['id'] ?>" width="100%" height="750" frameborder="0" allowfullscreen></iframe>
        <?php else: ?>
            <iframe src="https://embed.su/embed/<?= $_GET['type'] . '/' . $_GET['id'] ?>/1/1" width="100%" height="750" frameborder="0" allowfullscreen></iframe>
        <?php endif ?>
</body>
</html>
