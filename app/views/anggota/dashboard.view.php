<head>
    <link rel="stylesheet" href="<?php echo App::get("root_uri") . "/public/css/styleCardDashboard.css" ?>">
    <?php Helper::importView("partials/headerAnggota.view.php") ?>
</head>

<body>

    <?php Helper::importView("partials/sidebarAnggota.view.php") ?>

    <!-- Container -->
    <div class="container">
        <!-- Konten pertama -->
        <div>
            <h2>Card 1</h2>
            <p>Isi konten pertama.</p>
        </div>

        <!-- Konten kedua -->
        <div>
            <h2>Card 2</h2>
            <!-- Isi konten kedua di sini -->
        </div>

        <!-- Konten ketiga -->
        <div>
            <h2>Card 3</h2>
            <p>Isi konten ketiga.</p>
        </div>
    </div>

    <?php Helper::importView("partials/footer.view.php") ?>

</body>