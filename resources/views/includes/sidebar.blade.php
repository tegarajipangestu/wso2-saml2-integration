<aside id="aside" class="app-aside hidden-xs bg-dark">
  <div class="aside-wrap">
    <div class="navi-wrap">
      <!-- user -->
      <div class="clearfix hidden-xs text-center hide" id="aside-user">
        <div class="dropdown wrapper">
          <a href="app.page.html">
            <span class="thumb-lg w-auto-folded avatar m-t-sm">
              <img src="img/01.jpg" class="img-full" alt="...">
            </span>
          </a>
          <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
            <span class="clear">
              <span class="block m-t-sm">
                <strong class="font-bold text-lt">John.Smith</strong> 
                <b class="caret"></b>
              </span>
              <span class="text-muted text-xs block">Art Director</span>
            </span>
          </a>
          <!-- dropdown -->
          <ul class="dropdown-menu animated fadeInRight w hidden-folded">
            <li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
              <span class="arrow top hidden-folded arrow-info"></span>
              <div>
                <p>300mb of 500mb used</p>
              </div>
              <div class="progress progress-xs m-b-none dker">
                <div class="progress-bar bg-white" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
              </div>
            </li>
            <li>
              <a href>Settings</a>
            </li>
            <li>
              <a href="page_profile.html">Profile</a>
            </li>
            <li>
              <a href>
                <span class="badge bg-danger pull-right">3</span>
                Notifications
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="page_signin.html">Logout</a>
            </li>
          </ul>
          <!-- / dropdown -->
        </div>
        <div class="line dk hidden-folded"></div>
      </div>
      <!-- / user -->

      <!-- nav -->
      <nav ui-nav class="navi clearfix">
        <ul class="nav">
          <li class="hidden-folded m-t text-dark-grey text-xs padder-md padder-v-sm">
            <span>Navigation</span>
          </li>
          <li class="active">
            <a href="index-2.html" class="text-dark-grey" >      
              <i class="icon-bdg_dashboard icon-grey"></i>
              <span class="font-bold">Dashboard</span>
            </a>               
          </li>
          <!-- components -->
          <!-- @include('includes.components') -->
          <!-- components -->
        </ul>
      </nav>
      <!-- nav -->



    </div>
  </div>
</aside>