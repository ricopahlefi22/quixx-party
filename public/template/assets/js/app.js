$(document).ready(function(){

    // Feather icons setup
    feather.replace();

    // Data table
    new DataTable('.dataTableFull');

    $('.sidebar-button-toggle').on('click', function(){
        $('body').toggleClass('sidebar-open')    
    });

    // Full screen mode
    $("#toggleFullScreen").on("click", function() {
        var body = document.querySelector('html') || document.documentElement;
  
        if (body.requestFullscreen) {
          body.requestFullscreen();
        } else if (body.mozRequestFullScreen) { /* Firefox */
          body.mozRequestFullScreen();
        } else if (body.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
          body.webkitRequestFullscreen();
        } else if (body.msRequestFullscreen) { /* IE/Edge */
          body.msRequestFullscreen();
        }
    });

    // Dark mode class
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        $('html').addClass('dark');
      } else {
        $('html').removeClass('dark');
      }
    $('#toggleDarkMode').on('click', function(){
        $('html').toggleClass('dark');
    
        // Save user preference to local storage
        if ($('html').hasClass('dark')) {
          localStorage.theme = 'dark';
        } else {
          localStorage.theme = 'light';
        }
    });


});