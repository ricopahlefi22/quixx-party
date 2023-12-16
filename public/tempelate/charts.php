
<?php include 'partials/main.php'; ?>

<head>
    <?php $title = "Charts";
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
                $subtitle = "Charts";
                $pagetitle = "Charts";
                include 'partials/page-title.php'; ?>

                <div class="grid lg:grid-cols-2 gap-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Line with Data Labels</h4>
                        </div>
                        <div class="p-6">

                            <div id="line_chart_datalabel" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div><!--end card-->

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Dashed Line</h4>
                        </div>
                        <div class="p-6">
                            <div id="line_chart_dashed" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div><!--end card-->

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Spline Area</h4>
                        </div>
                        <div class="p-6">

                            <div id="spline_area" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div><!--end card-->

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Column Chart</h4>
                        </div>
                        <div class="p-6">
                            <div id="column_chart" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div><!--end card-->

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Column with Data Labels</h4>
                        </div>
                        <div class="p-6">
                            <div id="column_chart_datalabel" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div><!--end card-->

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Bar Chart</h4>
                        </div>
                        <div class="p-6">
                            <div id="bar_chart" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div><!--end card-->

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Line, Column & Area Chart</h4>
                        </div>
                        <div class="p-6">
                            <div id="mixed_chart" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div><!--end card-->

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Radial Chart</h4>
                        </div>
                        <div class="p-6">
                            <div id="radial_chart" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div><!--end card-->


                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pie Chart</h4>
                        </div>
                        <div class="p-6">
                            <div id="pie_chart" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title   ">Donut Chart</h4>
                        </div>
                        <div class="p-6">
                            <div id="donut_chart" class="apex-charts" dir="ltr"></div>
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

    <!-- Apex Chart Plugin Js -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Apex Chart Demo Js -->
    <script src="assets/js/pages/charts-apex.js"></script>

    <?php include 'partials/footer-scripts.php'; ?>

</body>

</html>