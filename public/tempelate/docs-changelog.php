
<?php include 'partials/main.php'; ?>

<head>
    <?php $title = "Dashboard";
    include 'partials/title-meta.php'; ?>

    <?php include 'partials/head-css.php'; ?>
</head>

<body>

    <div class="flex wrapper">

        <?php include 'partials/menu.php'; ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <?php include 'partials/topbar.php'; ?>

            <main class="flex-grow p-6">

                <?php
                $subtitle = "Documentation";
                $pagetitle = "Changelog";
                include 'partials/page-title.php'; ?>

                <div class="card">
                    <div class="p-6">
                        <h4 class="card-title mb-3">v1.0.0 <code class="text-primary text-sm"> - 3 June, 2023</code></h4>

                        <ul class="list-inside">
                            <li class="text-sm text-slate-700 dark:text-slate-400 list-disc">Initial released </li>
                        </ul>
                    </div>
                </div>

            </main>

            <?php include 'partials/footer.php'; ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    <?php include 'partials/customizer.php'; ?>

    <?php include 'partials/footer-scripts.php'; ?>

</body>

</html>