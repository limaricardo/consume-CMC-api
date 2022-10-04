<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url() ?>css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <form action="<?= base_url() ?>/search" method="post">
        <input class="search" type="text" name="search" id="search" placeholder="Search" aria-label="Search" value="">
    </form>
</body>
</html>