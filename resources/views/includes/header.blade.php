      <header id="header" class="app-header navbar" role="menu">
        <!-- navbar header -->
        <div class="navbar-header bg-info">
          <button class="pull-right visible-xs dk" ui-toggle-class="show" target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
          </button>
          <button class="pull-right visible-xs" ui-toggle-class="off-screen" target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
          </button>
          <!-- brand -->
          <a href="#/" class="navbar-brand text-lt">
            <img src="/img/logo-small.png" alt="." class="small-logo hide">
            <img src="/img/logo.png" alt="." class="large-logo">
          </a>
          <!-- / brand -->
        </div>
        <!-- / navbar header -->
        <!-- navbar collapse -->
        <div class="collapse pos-rlt navbar-collapse bg-info">
          <!-- buttons -->
          <div class="nav navbar-nav hidden-xs">

          </div>
          <!-- / buttons -->
          <!-- link and dropdown -->
          <ul class="nav navbar-nav hidden-sm">
            <li>
              <a href="#">HOME</a>
            </li>
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
                <span>PAGES</span> <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">

                <li>
                  <a href="#">
                    <span class="badge bg-danger pull-right">5</span>
                    <span>Form Elements</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="badge bg-info pull-right">15</span>
                    <span>Form Validation</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span>Form Wizard</span>
                  </a>
                </li>

              </ul>
            </li>
            <li>
              <a href="#">PROJECT</a>
            </li>
          </ul>
          <!-- / link and dropdown -->
          <!-- nabar right -->
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                <i class="icon-bdg_alert text14"></i>
                <span class="visible-xs-inline">Notifikasi</span>
                <span class="badge badge-sm up bg-danger pull-right-xs">2</span>
              </a>
              <!-- dropdown -->
              <div class="dropdown-menu w-xl animated fadeIn">
                <div class="panel bg-white">
                  <div class="panel-heading b-light bg-light">
                    <strong>Kamu Punya <span>2</span> Notifikasi</strong>
                  </div>
                  <div class="list-group">
                    <a href class="list-group-item">
                      <span class="pull-left m-r thumb-sm">
                        <img src="img/01.jpg" alt="..." class="img-circle">
                      </span>
                      <span class="clear block m-b-none">
                        Pembangunan Taman daerah Bandung Barat<br>
                        <small class="text-muted">10 minutes ago</small>
                      </span>
                    </a>
                    <a href class="list-group-item">
                      <span class="clear block m-b-none">
                        Revitalisasi Sungai Cikapundung<br>
                        <small class="text-muted">1 hour ago</small>
                      </span>
                    </a>
                  </div>
                  <div class="panel-footer text-sm">
                    <a href class="pull-right"><i class="icon-bdg_setting3"></i></a>
                    <a href="#notes" data-toggle="class:show animated fadeInRight">Lihat Semua Notifikasi</a>
                  </div>
                </div>
              </div>
              <!-- / dropdown -->
            </li>
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                <i class="icon-bdg_search text14"></i>
              </a>
              <!-- dropdown -->
              <div class="search_wrapper pull-right w-xl animated fadeIn">
                <form action="">
                  <i class="pull-left glyphicon glyphicon-search"></i>
                  <input type="text" class="pull-left" placeholder="Type Here">
                  <a href="#" class="remove-search"><i class="pull-right icon-bdg_cross"></i></a>
                </form>
              </div>
              <!-- / dropdown -->
            </li>
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="bg-blue profile-header dropdown-toggle clear" data-toggle="dropdown">
                <span class="thumb-sm avatar pull-left m-t-n-sm m-b-n-sm m-r-sm">
                  <img src="/img/01.jpg" alt="...">
                </span>
                <span class="hidden-sm hidden-md m-r-xl">{{$user->name}}</span> <i class="text14 icon-bdg_setting3 pull-right"></i>
              </a>
              <!-- dropdown -->
              <ul class="dropdown-menu animated fadeIn w-ml">
                <li>
                  <a href>
                    <span class="badge bg-danger pull-right">30%</span>
                    <span>Settings</span>
                  </a>
                </li>
                <li>
                  <a href="users/{{$user->name}}">Profile</a>
                </li>
                <li>
                  <a href>
                    <span class="label bg-info pull-right">new</span>
                    Help
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="/logout">Logout</a>
                </li>
              </ul>
              <!-- / dropdown -->
            </li>
          </ul>
          <!-- / navbar right -->
        </div>
        <!-- / navbar collapse -->
      </header>
