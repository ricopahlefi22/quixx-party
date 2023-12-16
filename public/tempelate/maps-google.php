
<?php include 'partials/main.php'; ?>

<head>
     <?php $title = "Dashboard";
     include 'partials/title-meta.php'; ?>

     <?php include 'partials/head-css.php'; ?>
</head>

<body>

     <!-- Begin page -->
     <div class="flex wrapper">

          <?php include 'partials/menu.php'; ?>

          <!-- ============================================================== -->
          <!-- Start Page Content here -->
          <!-- ============================================================== -->

          <div class="page-content">

               <?php include 'partials/topbar.php'; ?>

               <main class="flex-grow p-6">

                    <?php
                    $subtitle = "Maps";
                    $pagetitle = "Google";
                    include 'partials/page-title.php'; ?>

                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">

                         <div class="card">
                              <div class="card-header">
                                   <h4 class="card-title">Basic Example</h4>
                              </div>
                              <div class="p-6">
                                   <div class="mb-3">
                                        <div id="gmaps-basic" class="gmaps"></div>
                                   </div>
                              </div>
                         </div>

                         <div class="card">
                              <div class="card-header">
                                   <h4 class="card-title">Markers Google Map</h4>
                              </div>
                              <div class="p-6">
                                   <div class="mb-3">
                                        <div id="gmaps-markers" class="gmaps"></div>
                                   </div>
                              </div>
                         </div>

                         <div class="card">
                              <div class="card-header">
                                   <h4 class="card-title">Street View Panoramas Google Map</h4>
                              </div>
                              <div class="p-6">
                                   <div class="mb-3">
                                        <div id="panorama" class="gmaps"></div>
                                   </div>
                              </div>
                         </div>

                         <div class="card">
                              <div class="card-header">
                                   <h4 class="card-title">Google Map Types</h4>
                              </div>
                              <div class="p-6">
                                   <div class="mb-3">
                                        <div id="gmaps-types" class="gmaps"></div>
                                   </div>
                              </div>
                         </div>

                         <div class="card">
                              <div class="card-header">
                                   <h4 class="card-title">Ultra Light With Labels</h4>
                              </div>
                              <div class="p-6">
                                   <div class="mb-3">
                                        <div id="ultra-light" class="gmaps"></div>
                                   </div>
                              </div>
                         </div>

                         <div class="card">
                              <div class="card-header">
                                   <h4 class="card-title">Dark</h4>
                              </div>
                              <div class="p-6">
                                   <div class="mb-3">
                                        <div id="dark" class="gmaps"></div>
                                   </div>
                              </div>
                         </div> <!-- end card -->

                    </div><!-- end grid-->

               </main>

               <?php include 'partials/footer.php'; ?>

          </div>

          <!-- ============================================================== -->
          <!-- End Page content -->
          <!-- ============================================================== -->

     </div>
     <!-- END wrapper -->

     <?php include 'partials/customizer.php'; ?>

     <?php include 'partials/highlight-scripts.php'; ?>

     <?php include 'partials/footer-scripts.php'; ?>

     <!-- Code Highlight Plugin Js -->
     <script src="assets/js/pages/highlight.js"></script>

     <!-- Google Maps API -->
     <script src="http://maps.google.com/maps/api/js"></script>

     <!-- Google Map Js -->
     <script src="assets/libs/gmaps/gmaps.min.js"></script>

     <!-- Google Map Demo js-->
     <script src="assets/js/pages/maps-google.js"></script>

</body>

</html>