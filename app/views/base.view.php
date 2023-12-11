<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo isset($title) ? $title : "Default Title" ?>
    </title>
    <link rel="stylesheet" href="<?php echo App::get("root_uri") . "/public/css/styleNavPartials.css" ?>">
    <link rel="stylesheet" href="<?php echo App::get("root_uri") . "/public/vendor/bootstrap/css/bootstrap.min.css" ?>">
    <link rel="stylesheet" href="<?php echo App::get("root_uri") . "/public/vendor/jquery/jquery.min.js" ?>">
</head>

<body>
    <?php require $subview; ?>

</body>

</html>