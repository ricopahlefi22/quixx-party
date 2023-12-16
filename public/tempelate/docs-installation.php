<?php include 'partials/main.php'; ?>

<head>
    <?php $title = "Installation";
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
                $pagetitle = "Installation";
                include 'partials/page-title.php'; ?>

                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">Setup</h6>
                    </div>
                    <div class="p-6">

                        <div class="px-6 max-w-full">
                            <h6 class="mb-2.5 text-base font-semibold">Prerequisites</h6>

                            <p class="mb-4">Please follow below steps to install and setup all prerequisites:</p>

                            <ul class="ps-8">
                                <li class="list-disc">
                                    <p class="my-2.5">Sqlite3</p>
                                    <ol class="ps-8">
                                        <li class="list-disc">
                                            Open the download page <a href="https://www.sqlite.org/download.html" target="_blank" class="text-primary">https://www.sqlite.org/download.html</a> and download command-line tools file for your operating system.
                                        </li>
                                        <li class="list-disc">
                                            Create a folder C:\>sqlite and unzip above zipped file in this folder.
                                        </li>
                                        <li class="list-disc">
                                            Add C:\>sqlite in your PATH environment variable and finally go to the command prompt and issue sqlite3 command.
                                        </li>
                                        <li class="mt-2">
                                            If you have any problem with installation and setup, refer this page <a href="https://www.tutorialspoint.com/sqlite/sqlite_installation.htm" class="text-primary">https://www.tutorialspoint.com/sqlite/sqlite_installation.htm</a>
                                        </li>

                                    </ol>

                                </li>


                                <li class="list-disc">
                                    <p class="my-2.5">PHP 7.4</p>
                                    <p class="mb-3.5">Make sure to have <a class="text-primary" href="https://www.php.net/" target="_blank">PHP-7.4 or latest version</a>
                                        installed &amp; running
                                        on your computer.
                                        If you already have installed PHP on your computer, you
                                        can skip this step.</p>
                                </li>

                                <li class="list-disc">
                                    <p class="my-2.5">Xampp</p>
                                    <p class="mb-3.5">Make sure to have <a class="text-primary" href="https://www.apachefriends.org/" target="_blank">the latest version of xampp</a> or installed &amp; running
                                        on your computer. If you already have installed Xampp on your computer, you
                                        can skip this step.</p>
                                </li>

                            </ul>

                            <h6 class="mt-9 mb-2.5 text-base font-semibold">Installation</h6>

                            <p class="mb-1"> After you finished with the above steps, you can run the following commands into the
                                terminal/command prompt from the root directory ( Konrix ) of the project to
                                run the project locally or build for production use:
                            </p>
                            <p class="mb-4">You can run the following commands to run project locally or
                                build for production use:</p>

                            <p class="mb-4">Put your project file in xampp/htdocs/. Open your browser and run your project using localhost/your_project.
                            </p>

                            <div class="shadow-sm overflow-hidden ring-1 ring-gray-200 dark:ring-gray-700 rounded-md">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead>
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                                Description</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                        <tr>
                                            <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">
                                                Start the apache server from xampp control pannel if you are using windows.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">
                                                Project can be accessed from <code>
                                                    localhost/project_name/directory/index.php
                                                </code>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">
                                                You can execute create, insert, update, and delete queries in database using <code>database.db</code> file in services folder.
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="mt-6 bg-success/20 text-sm text-success rounded-md p-4">If you are having
                            any question or
                            difficulty during setup, don't hesitate to contact us. We would be glad
                            to assist you.</div>

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