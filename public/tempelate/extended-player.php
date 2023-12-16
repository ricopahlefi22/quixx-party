
<?php include 'partials/main.php'; ?>

<head>
    <?php $title = "Player";
include 'partials/title-meta.php'; ?>

    <!-- Plugin Css -->
    <link href="assets/libs/plyr/plyr.css" rel="stylesheet" type="text/css" >

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
                $pagetitle = "Player";
                include 'partials/page-title.php'; ?>

                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Youtube Player</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="videoPlayerYoutube">
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
                            <div class="rounded-xl overflow-hidden">
                                <div id="player-youtube" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY" allowfullscreen></div>
                            </div>

                            <div id="videoPlayerYoutube" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html">
                                    <code>
                                        &lt;div id=&quot;player-youtube&quot; data-plyr-provider=&quot;youtube&quot; data-plyr-embed-id=&quot;bTqVqk7FSmY&quot;&gt;&lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Vimeo Player</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="videoPlayerVimeo">
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
                            <div class="rounded-xl overflow-hidden">
                                <div id="player-charlotte" data-plyr-provider="vimeo" data-plyr-embed-id="707012696"></div>
                            </div>

                            <div id="videoPlayerVimeo" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html">
                                    <code>
                                        &lt;div id=&quot;player-charlotte&quot; data-plyr-provider=&quot;vimeo&quot; data-plyr-embed-id=&quot;707012696&quot;&gt;&lt;/div&gt;
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

    <!-- Plyr Plugin JS -->
    <script src="assets/libs/plyr/plyr.min.js"></script>

    <!-- Plyr Demo Component js -->
    <script src="assets/js/pages/extended-plyr.js"></script>

</body>

</html>