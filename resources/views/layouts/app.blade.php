<!DOCTYPE html>
<html lang="en" class="">
  @include('includes/head')
  <body>
    <div class="app app-header-fixed ">

      <!-- header -->
      @include('includes/header')
      <!-- / header -->
      <!-- aside -->
      <!-- sidebar-left -->
      @include('includes/sidebar-left')
      <!-- end of sidebar left -->
      <!-- / aside -->
      <!-- content -->
      <div id="content" class="app-content" role="main">
        <div class="hbox hbox-auto-xs hbox-auto-sm ng-scope">
          <!-- content -->
          @yield('content')
          <!-- .col -->
          <!-- end of content -->


        </div>
        <!-- end hbox hbox-auto-xs -->
      </div>
      <!-- footer -->
      @include('includes/footer')
      <!-- / footer -->
    </div>
    @include('includes/script')
  </body>
</html>
