<?php include 'partials/main.php'; ?>

<head>
    <?php $title = "Customization";
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
                $pagetitle = "Customization";
                include 'partials/page-title.php'; ?>

                <div class="flex flex-col gap-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">In-built Demos</h4>
                        </div>
                        <div class="p-6">
                            <p> You can change the colour palatte of any demo very easily by simply changing the few CSS variables' value.</p>

                            <p>
                                In order to modify the colors in existing themes, open
                                the <code>app.css</code>
                                and change any variable in it. Your changes would get
                                reflected automatically in any Tailwind based
                                components or elements. Note that, this requires you to
                                include this file in head-css.php.
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">RTL Support</h4>
                        </div>
                        <div class="p-6">
                            <p>
                                Konrix provides the RTL support as well. You will simply
                                add attribute in html tage.
                            </p>
                            <p>
                                simply change the reference of update the html
                                tag with attribute <code>dir="rtl"</code>. E.g.
                                <code>&lt;html lang=&quot;en&quot;
                                    dir=&quot;rtl&quot;&gt;</code>
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Customizing Left Sidebar, Layout Width and Right Sidebar</h4>
                        </div>
                        <div class="p-6">
                            <p class="mb-4">
                                Konrix allows you to have customized left sidebar, overall
                                layout width or right sidebar. You could turn the left
                                sidebar to different size, theme (look) and type. You can
                                customize it by specifying the layout config data
                                attribute on <code>html</code> element in your html
                            </p>

                            <div class="overflow-hidden ring-1 ring-gray-200 dark:ring-gray-700 md:rounded-lg mb-6">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead>
                                        <tr>
                                            <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-100">Title</th>
                                            <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-100">Type</th>
                                            <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-100">Options</th>
                                            <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-100">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                        <tr>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200"><code class="text-nowrap">data-mode</code></td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">String</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">"light" | "dark"</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Changes overall color scheme to dark</td>
                                        </tr>
                                        <tr>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200"><code class="text-nowrap">dir</code></td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">String</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">"ltr" | "rtl"</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Changes Layout direction</td>
                                        </tr>
                                        <tr>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                <code class="text-nowrap">data-layout-width</code>
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">String</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">"fluid" | "boxed"</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Changes the width of overall layout</td>
                                        </tr>
                                        <tr>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                <code class="text-nowrap">data-topbar-color</code>
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">String</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">"light" | "dark" | "brand" | "Gradient"</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                the <b>Topbar</b> color scheme.
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                <code class="text-nowrap">data-menu-color</code>
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">String</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200"> "light" | "dark" | "brand" | "Gradient"</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                the <b>left sidebar</b> color scheme.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                <code class="text-nowrap">data-sidenav-view</code>
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">String</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                "default" | "md" | "sm" | "hover" | "hover-active" | "mobile" | "hidden"
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                the left sidebar size changes to small (condensed)
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                <code class="text-nowrap">data-layout-position</code>
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">String</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">"fixed" | "scrollable"</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-800 dark:text-gray-200">Layout Position</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="mb-4">Following are few examples:</p>
                            <ul class="list-disc ms-4">
                                <li>
                                    <h5 class="my-2">Changes the left sidebar theme to "dark"</h5>
                                    <code>&lt;html data-menu-color="dark"&gt;&lt;/html&gt;</code>
                                </li>
                                <li>
                                    <h5 class="my-2">Changes the left sidebar theme to "light"</h5>
                                    <code>&lt;html data-menu-color="light"&gt;&lt;/html&gt;</code>
                                </li>
                                <li>
                                    <h5 class="my-2">Changes the left sidebar to scrollable</h5>
                                    <code>&lt;html data-layout-position="scrollable"&gt;&lt;/html&gt;</code>
                                </li>
                                <li>
                                    <h5 class="my-2">Changes the left sidebar size to small</h5>
                                    <code>&lt;html data-sidenav-view="sm"&gt;&lt;/html&gt;</code>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Adding new page</h4>
                        </div>
                        <div class="p-6">
                            <p>
                                We have provided a starter page (check
                                <code>pages-starter.php</code>). It allows you
                                to get started easily and helps you to add new page.
                                Please note following important points:
                            </p>
                            <ul>
                                <li>
                                    Most of default/basic form elements along with few
                                    advanced elements are separately add css and js.
                                </li>
                                <li>
                                    Few elements e.g. charts, data tables, calendar, maps
                                    etc requires you to include corresponding css and js
                                    files in your html. Please check corresponding
                                    documentation page for the same.
                                </li>
                            </ul>
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

    <?php include 'partials/footer-scripts.php'; ?>

</body>

</html>