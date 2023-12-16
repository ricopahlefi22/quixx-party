
<?php include 'partials/main.php'; ?>

<head>
    <?php $title = "Error Page | 404 Alt";
    include 'partials/title-meta.php'; ?>

    <?php include 'partials/head-css.php'; ?>
</head>

<body class="bg-gradient-to-r from-rose-100 to-teal-100 dark:from-gray-700 dark:via-gray-900 dark:to-black">

    <div class="flex wrapper">

        <?php include 'partials/menu.php'; ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <?php include 'partials/topbar.php'; ?>

            <main class="flex-grow p-6">

                <div class="flex h-full justify-center items-center">
                    <div class="flex flex-col justify-center text-center gap-6">
                        <a href="index.php" class="flex justify-center mx-auto">
                            <img class="h-6 block dark:hidden" src="assets/images/logo-dark.png" alt="">
                            <img class="h-6 hidden dark:block" src="assets/images/logo-light.png" alt="">
                        </a>
                        <p class="text-3xl font-semibold text-primary">404!</p>
                        <h1 class="text-4xl font-bold tracking-tight dark:text-gray-100">Page not found.</h1>
                        <p class="text-base text-gray-600 dark:text-gray-300">Sorry, we couldn’t find the page you’re looking for.</p>
                        <a href="index.php" class="text-base font-medium text-primary"> Go back home </a>
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