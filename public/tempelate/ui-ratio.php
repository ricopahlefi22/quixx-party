
<?php include 'partials/main.php'; ?>

<head>
    <?php $title = "Aspect Ratio";
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
                $subtitle = "Components";
                $pagetitle = "Aspect Ratio";
                include 'partials/page-title.php'; ?>

                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Aspect Ratio 21:9</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="AspectRatio_21:9">
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
                            <!-- 21:9 aspect ratio -->
                            <div class="aspect-w-7 aspect-h-3">
                                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                            <div id="AspectRatio_21:9" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-auto">
                                    <code>
                                        &lt;div class=&quot;aspect-w-7 aspect-h-3&quot;&gt;
                                            &lt;iframe src=&quot;https://www.youtube.com/embed/dQw4w9WgXcQ&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Aspect Ratio 16:9</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="AspectRatio_16:9">
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
                            <!-- 16:9 aspect ratio -->
                            <div class="aspect-w-16 aspect-h-9">
                                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                            <div id="AspectRatio_16:9" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-auto">
                                    <code>
                                        &lt;div class=&quot;aspect-w-16 aspect-h-9&quot;&gt;
                                            &lt;iframe src=&quot;https://www.youtube.com/embed/dQw4w9WgXcQ&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Aspect Ratio 1:1</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="AspectRatio_1:1">
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
                            <!-- 1:1 aspect ratio -->
                            <div class="aspect-w-1 aspect-h-1">
                                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                            <div id="AspectRatio_1:1" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-auto">
                                    <code>
                                        &lt;div class=&quot;aspect-w-1 aspect-h-1&quot;&gt;
                                            &lt;iframe src=&quot;https://www.youtube.com/embed/dQw4w9WgXcQ&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Aspect Ratio 4:3</h4>

                                <div class="flex items-center gap-2">
                                    <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="AspectRatio_4:3">
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
                            <!-- 4:3 aspect ratio -->
                            <div class="aspect-w-4 aspect-h-3">
                                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div> <!-- end preview-->

                            <div id="AspectRatio_4:3" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-auto">
                                    <code>
                                        &lt;div class=&quot;aspect-w-4 aspect-h-3&quot;&gt;
                                            &lt;iframe src=&quot;https://www.youtube.com/embed/dQw4w9WgXcQ&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture&quot; allowfullscreen&gt;&lt;/iframe&gt;
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

</body>

</html>