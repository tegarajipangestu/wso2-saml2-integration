<!DOCTYPE html>
<html lang="en" class="">
  <!-- Mirrored from bdgwebkit.com/dashboard-components/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 07:24:58 GMT -->
  <head>
    @include('includes.head')
  </head>
  <body>
    <div class="app app-header-fixed ">
      
      <!-- header -->
      <header id="header" class="app-header navbar" role="menu">
        @include('includes.header')
      </header>
      <!-- / header -->
      <!-- aside -->
      <aside id="aside" class="app-aside hidden-xs bg-dark">
        @include ('includes.sidebar')
      </aside>
      <!-- / aside -->
      <!-- content -->
      <div id="content" class="app-content" role="main">
        <div class="hbox hbox-auto-xs hbox-auto-sm ng-scope">
          @yield('content')
          <!-- .col -->
          @include('includes.right_sidebar')          
        </div>
        <!-- end hbox hbox-auto-xs -->
      </div>
      <!-- footer -->
      <footer id="footer" class="app-footer" role="footer">
        @include('includes.footer')
      </footer>
      <!-- / footer -->
    </div>
    @include ('includes.script')
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpn0PdGE7HJeXqO%2fKhKviM58fOaLEhr0KEQ1NCjn62%2fGRMmGu7zIkxGe9tARUoZ7Bck%2bDyDrZ%2fCeQ%2fS3Q22ZRpGWLtGpm81cjsG8nZSaDbBNmHPxS9jrerOHcxuP6tOpBAgeUuhcI1tQYOM1jsZM%2bLidcpUCr6Trp8vLG7BvW1JX7Gect71AU2X4HJWnQJJDFQRrUpC1YBugAa4En36HBFWuU7WVdEumBe%2bdyrXJjeAVREr1%2f5hIk8wpamp1fCTMN7mE1VEvzTUMG1MyyoGaQDjh2H5tqrUCar2GiYGNR5fTxzmFXjUQTMBjAH37yoj3ILYq16ZzHvilbfZwD%2bDPN1Dmhg7W4IMH1hH%2bsrdRdOZ5UvsG9r6P2wylLAkGmbrVZygKh0rpnp3GUZ4wXAXgVrw3xYiiDrgp%2f%2b8A9KUqp%2b%2f%2fatRTAwSpDTivbxTE24H%2fcIlFycgP498fOyg0WTy0WkfPXJYKML7wSaJ" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
    <!-- Mirrored from bdgwebkit.com/dashboard-components/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 07:25:37 GMT -->
  </html>