
<?php include 'partials/main.php'; ?>

<head>
    <?php $title = "Sweet Alerts";
    include 'partials/title-meta.php'; ?>

    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

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
                $pagetitle = "Sweet Alerts";
                include 'partials/page-title.php'; ?>

                <div class="grid 2xl:grid-cols-2 grid-cols-1 gap-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Basic Message</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="basicSweetAlert">
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
                            <button type="button" class="btn bg-primary text-white" id="sweetalert-basic">Click me</button>

                            <div id="basicSweetAlert" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-auto">
                                    <code>
                                        &lt;button type=&quot;button&quot; class=&quot;btn bg-primary text-white&quot; id=&quot;sweetalert-basic&quot;&gt;Click me&lt;/button&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Title with a Text Under</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="TitleSweetAlert">
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
                            <button type="button" class="btn bg-primary text-white" id="sweetalert-title">Click me</button>
                            <div id="TitleSweetAlert" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-auto">
                                    <code>
                                        &lt;button type=&quot;button&quot; class=&quot;btn bg-primary text-white&quot; id=&quot;sweetalert-basic&quot;&gt;Click me&lt;/button&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Message Alert</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="MessageSweetAlert">
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
                            <button type="button" class="btn bg-success text-white" id="sweetalert-success">Success</button>
                            <button type="button" class="btn bg-warning text-white" id="sweetalert-warning">Warning</button>
                            <button type="button" class="btn bg-info text-white" id="sweetalert-info">Info</button>
                            <button type="button" class="btn bg-danger text-white" id="sweetalert-error">Error</button>

                            <div id="MessageSweetAlert" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-auto">
                                    <code>
                                        &lt;button type=&quot;button&quot; class=&quot;btn bg-success text-white&quot; id=&quot;sweetalert-success&quot;&gt;Success&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn bg-warning text-white&quot; id=&quot;sweetalert-warning&quot;&gt;Warning&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn bg-info text-white&quot; id=&quot;sweetalert-info&quot;&gt;Info&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn bg-danger text-white&quot; id=&quot;sweetalert-error&quot;&gt;Error&lt;/button&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Long Content</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="LongContentSweetAlert">
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
                            <button type="button" class="btn bg-primary text-white" id="sweetalert-longcontent">Click me</button>
                            <div id="LongContentSweetAlert" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-auto">
                                    <code>
                                        &lt;button type=&quot;button&quot; class=&quot;btn bg-primary text-white&quot; id=&quot;sweetalert-longcontent&quot;&gt;Click me&lt;/button&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Warning Message</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="WarningSweetAlert">
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
                            <button type="button" class="btn bg-primary text-white" id="sweetalert-params">Click me</button>

                            <div id="WarningSweetAlert" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-auto">
                                    <code>
                                        &lt;button type=&quot;button&quot; class=&quot;btn bg-primary text-white&quot; id=&quot;sweetalert-longcontent&quot;&gt;Click me&lt;/button&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card -->

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

    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Sweet alert init js-->
    <script src="assets/js/pages/extended-sweetalert.js"></script>

</body>

</html>