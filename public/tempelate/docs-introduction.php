
<?php include 'partials/main.php'; ?>

<head>
    <?php $title = "Introducation";
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
                $pagetitle = "Introducation";
                include 'partials/page-title.php'; ?>

<div class="flex flex-col gap-6">
                    <div class="card">
                        <div class="p-6">
                            <p>
                                Konrix is a fully featured premium admin template built on
                                top of awesome
                                <strong class="text-danger">Tailwind v3</strong>. It's
                                crafted using modern web technologies
                                <strong class="text-danger">HTML5, CSS, PHP </strong>and
                                <strong class="text-danger">Javascript</strong>. The theme
                                includes beautiful dashboard, many ready to use hand crafted
                                components, widgets, pages, etc. The components can be used
                                very easily on any page. The theme is fully responsive and
                                customizable.
                            </p>
                            <p>
                                It is extremely powerful and adaptable, making it ideal for
                                web development. applications including CRM, CMS, admin
                                panels, dashboards, etc. It is fully responsive and has a
                                perfect look and feel on mobiles and tablets. Also, we tried
                                to implement this by Keeping the concept of modularity in
                                mind, this enables you to reduce the development time and
                                cost.
                            </p>
                            <p>
                                This documentation is guidelines for all users who can even
                                be a beginner or experienced web developer.
                            </p>
                            <p>
                                We really care for our buyers, so in case you are having any
                                question or feedback, please feel free to get back to us via
                                email <code>support@coderthemes.com</code> or by filling out
                                the contact form on our
                                <a href="http://coderthemes.com/#contact" class="text-primary"
                                    target="_blank">website</a>.
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="p-6">
                            <h4 class="card-title mb-4">Structure</h4>
                            <p>
                                When you extract the zip file you received after purchasing,
                                you will find the following files and folders:
                            </p>
                            <div class="mt-4 rounded p-1">
                                <pre class="language-html">
                                    <code>
                                            ├── Documentation
                                            └── Konrix
                                                |── assets/
                                                |   └── css
                                                |   └── fonts
                                                |   └── images
                                                |   └── js  
                                                |   └── libs  
                                                ├── partials
                                                └── services
                                                    └── database.db
                                    </code>
                                </pre>
                            </div>
                        </div>
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

    <?php include 'partials/highlight-scripts.php'; ?>

    <?php include 'partials/footer-scripts.php'; ?>

</body>

</html>