<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> Hello World! </h1>

<?php

require_once 'vendor/autoload.php';

use App\SitesRepository;

$repository = new SitesRepository();

foreach ($repository->getSites() as $site) {
    echo '<hr>';
    $url = "site.php?slug=$site->slug";
    echo "<h2> <a href='$url'> $site->name </a> </h2>";
}

?>

</body>
</html>