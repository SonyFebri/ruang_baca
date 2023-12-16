<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo isset($title) ? $title : "Ruang Baca JTI" ?>
    </title>
    <link rel="stylesheet" href="<?php echo App::get("root_uri") . "/public/css/styleNavPartials.css" ?>">
    <link rel="stylesheet" href="<?php echo App::get("root_uri") . "/public/vendor/bootstrap/css/bootstrap.min.css" ?>">
    <link rel="stylesheet" href="<?php echo App::get("root_uri") . "/public/vendor/bootstrap/js/bootstrap.min.js" ?>">
    <link rel="stylesheet" href="<?php echo App::get("root_uri") . "/public/vendor/jquery/jquery.min.js" ?>">

</head>

<body>
    <?php require $subview; ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
</body>

</html>