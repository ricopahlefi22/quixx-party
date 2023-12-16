
<?php include 'partials/main.php'; ?>

<head>
    <?php $title = "Ratings";
    include 'partials/title-meta.php'; ?>

    <link rel="stylesheet" href="assets/libs/nouislider/nouislider.min.css">

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
                $subtitle = "Extended";
                $pagetitle = "Ratings";
                include 'partials/page-title.php'; ?>

                <div class="grid 2xl:grid-cols-2 gap-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Rater Js Example</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="basicRater">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div id="basic-rater"></div>

                            <div id="basicRater" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html">
                                    <code>
                                        &lt;div id=&quot;basic-rater&quot;&gt;&lt;/div&gt;                                        
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">5 star rater with step</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="raterStep">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <div id="rater-step"></div>

                            <div id="raterStep" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html">
                                    <code>
                                        &lt;div id=&quot;rater-step&quot;&gt;&lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Random Number Betweeen</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="raterMessageHTML">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div id="rater-message"></div>

                            <div id="raterMessageHTML" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html">
                                    <code>
                                        &lt;div id=&quot;rater-message&quot;&gt;&lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">On hover Event</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="raterOnHoverHTML">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div>
                                <div id="rater-onhover" class="align-middle"></div>
                                <span class="ratingnum inline-block text-center rounded-full w-6 h-full text-sm bg-info text-white align-middle ms-2"></span>
                            </div>

                            <div id="raterOnHoverHTML" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html">
                                    <code>
                                        &lt;div&gt;
                                            &lt;div id=&quot;rater-onhover&quot; class=&quot;align-middle&quot;&gt;&lt;/div&gt;
                                            &lt;span class=&quot;ratingnum inline-block text-center rounded-full w-6 h-full text-sm bg-info text-white align-middle ms-2&quot;&gt;&lt;/span&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Clear/Reset rater</h4>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="clearRaterHTML">
                                        <i class="mgc_eye_line text-lg"></i>
                                        <span class="ms-2">Code</span>
                                    </button>

                                    <button class="btn-code" data-clipboard-action="copy">
                                        <i class="mgc_copy_line text-lg"></i>
                                        <span class="ms-2">Copy</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex items-center">
                                <div id="raterreset" class="align-middle"></div>
                                <span class="clear-rating"></span>
                                <button id="raterreset-button" class="btn btn-sm bg-primary text-white ms-4">Reset</button>
                            </div>

                            <div id="clearRaterHTML" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html">
                                    <code>
                                        &lt;div class=&quot;flex items-center&quot;&gt;
                                            &lt;div id=&quot;raterreset&quot; class=&quot;align-middle&quot;&gt;&lt;/div&gt;
                                            &lt;span class=&quot;clear-rating&quot;&gt;&lt;/span&gt;
                                            &lt;button id=&quot;raterreset-button&quot; class=&quot;btn btn-sm bg-primary text-white ms-4&quot;&gt;Reset&lt;/button&gt;
                                        &lt;/div&gt;
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

    <!-- rater-js plugin -->
    <script src="assets/libs/rater-js/index.js"></script>

    <!-- Rating Demo js -->
    <script src="assets/js/pages/extended-ratings.js"></script>

</body>

</html>