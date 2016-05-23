var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
        'style.css',
        'font.css',
	'mighticon.css',
        'libs_dashboard/assets/animate.css/animate.css',
        'libs_dashboard/assets/font-awesome/css/font-awesome.min.css',
        'libs_dashboard/jquery/bootstrap/dist/css/bootstrap.css',
        'libs_dashboard/jquery/nestable/jquery.nestable.css',
        'libs_dashboard/jquery/bootstrap-slider/bootstrap-slider.css',
        'libs_dashboard/jquery/chosen/bootstrap-chosen.css',
        'libs_dashboard/jquery/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css',
        'libs_dashboard/jquery/plugins/integration/bootstrap/3/dataTables.bootstrap.css',
        'libs_dashboard/jquery/bower-jvectormap/jquery-jvectormap.css',
        'libs_dashboard/jquery/footable/v3/css/footable.bootstrap.min.css',
        'libs_dashboard/jquery/fullcalendar/dist/fullcalendar.css',
        'libs_dashboard/jquery/fullcalendar/dist/fullcalendar.theme.css',
        'libs_dashboard/jquery/bootstrap-daterangepicker/daterangepicker-bs3.css',
        'libs_dashboard/jquery/bootstrap-tagsinput/dist/bootstrap-tagsinput.css'
    ]);
});

elixir(function(mix) {
    mix.scripts([
        'ui-load.js',
        'ui-jp-config.js',
        'ui-jp.js',
        'ui-nav.js',
        'ui-toggle.js',
        'ui-client.js',
        'libs_dashboard/jquery/bootstrap/dist/js/bootstrap.js',
        'libs_dashboard/jquery/jquery/dist/jquery.js',
        'libs_dashboard/jquery/jquery.easy-pie-chart/dist/jquery.easypiechart.fill.js',
        'libs_dashboard/jquery/jquery.sparkline/dist/jquery.sparkline.retina.js',
        'libs_dashboard/jquery/flot/jquery.flot.js',
        'libs_dashboard/jquery/flot/jquery.flot.pie.js', 
        'libs_dashboard/jquery/flot/jquery.flot.resize.js',
        'libs_dashboard/jquery/flot.tooltip/js/jquery.flot.tooltip.min.js',
        'libs_dashboard/jquery/flot.orderbars/js/jquery.flot.orderBars.js',
        'libs_dashboard/jquery/flot-spline/js/jquery.flot.spline.min.js',
        'libs_dashboard/jquery/moment/moment.js',
        'libs_dashboard/jquery/screenfull/dist/screenfull.min.js',
        'libs_dashboard/jquery/slimscroll/jquery.slimscroll.min.js',
        'libs_dashboard/jquery/html5sortable/jquery.sortable.js',
        'libs_dashboard/jquery/nestable/jquery.nestable.js',
        'libs_dashboard/jquery/bootstrap-filestyle/src/bootstrap-filestyle.js',
        'libs_dashboard/jquery/bootstrap-slider/bootstrap-slider.js',
        'libs_dashboard/jquery/chosen/chosen.jquery.min.js',
        'libs_dashboard/jquery/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js',
        'libs_dashboard/jquery/bootstrap-wysiwyg/bootstrap-wysiwyg.js',
        'libs_dashboard/jquery/bootstrap-wysiwyg/external/jquery.hotkeys.js',
        'libs_dashboard/jquery/datatables/media/js/jquery.dataTables.min.js',
        'libs_dashboard/jquery/plugins/integration/bootstrap/3/dataTables.bootstrap.js',
        'libs_dashboard/jquery/bower-jvectormap/jquery-jvectormap-1.2.2.min.js', 
        'libs_dashboard/jquery/bower-jvectormap/jquery-jvectormap-world-mill-en.js',
        'libs_dashboard/jquery/bower-jvectormap/jquery-jvectormap-us-aea-en.js',
        'libs_dashboard/jquery/footable/v3/js/footable.min.js',
        'libs_dashboard/jquery/moment/moment.js',
        'libs_dashboard/jquery/fullcalendar/dist/fullcalendar.min.js',
        'libs_dashboard/jquery/moment/moment.js',
        'libs_dashboard/jquery/bootstrap-daterangepicker/daterangepicker.js',
        'libs_dashboard/jquery/bootstrap-tagsinput/dist/bootstrap-tagsinput.js',
  
    ]);
});

elixir(function(mix) {
    mix.version(['css/all.css','js/all.js']);
});
