  <header class="topbar">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header">
              <!-- This is for the sidebar toggle which is visible on mobile only -->
              <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                  <i class="ti-menu ti-close"></i>
              </a>
              <!-- ============================================================== -->
              <!-- Logo -->
              <!-- ============================================================== -->
              <div class="navbar-brand">
                  <a href="{{ url('panel/dashboard') }}" class="logo">
                      <!-- Logo icon -->
                      <b class="logo-icon">
                         
                          <img src="{{ $getSettingApp->getLogo() }}" alt="homepage"
                              class="light-logo" />
                      </b>
                      <!--End Logo icon -->
                      <!-- Logo text -->
                    
                  </a>
                  <a class="sidebartoggler d-none d-md-block" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                      <i class="mdi mdi-toggle-switch mdi-toggle-switch-off font-20"></i>
                  </a>
              </div>

              <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ti-more"></i>
              </a>
          </div>

          <div class="navbar-collapse collapse" id="navbarSupportedContent">

              <ul class="navbar-nav float-left mr-auto">


              </ul>

              <ul class="navbar-nav float-right">

                  <li class="nav-item dropwn border-right">
                      <a class="nav-link" href="{{ config('app.url') }}" target="_blank" rel="noopener noreferrer">На
                          сайт <i class="ti-arrow-right"></i></a>
                  </li>

                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href=""
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          
                          <img src="{{ Auth::user()->getProfile() }}" alt="user" class="rounded-circle"
                              width="40">
                          <span class="m-l-5 font-medium d-none d-sm-inline-block">{{ Auth::user()->name }} <i
                                  class="mdi mdi-chevron-down"></i></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                          <span class="with-arrow">
                              <span class="bg-primary"></span>
                          </span>
                          <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                              <div class="">
                                  <img src="{{ Auth::user()->getProfile() }}" alt="user"
                                      class="rounded-circle" width="60">
                              </div>
                              <div class="m-l-10">
                                  <h4 class="m-b-0">{{ Auth::user()->name }}</h4>
                                  <p class=" m-b-0">{{ Auth::user()->email }}</p>
                                  <p class="m-b-0">
                                      @if (Auth::user()->is_admin == 1)
                                          <span class="badge bg-danger">Адміністратор</span>
                                      @else
                                          <span class="badge bg-secondary">Користувач</span>
                                      @endif
                                  </p>
                              </div>
                          </div>
                          <div class="profile-dis scrollable">
                              {{-- <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="ti-user m-r-5 m-l-5"></i>Мій профіль</a> --}}

                              <a class="dropdown-item" href="{{ url('panel/account-settings') }}">
                                  <i class="ti-settings m-r-5 m-l-5"></i> Налаштування акаунту</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="{{ route('logout') }}">
                                  <i class="fa fa-power-off m-r-5 m-l-5"></i> Вихід</a>
                              <div class="dropdown-divider"></div>
                          </div>
                          {{-- <div class="p-l-30 p-10">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">Переглянути профіль</a>
                                </div> --}}
                      </div>
                  </li>
                  <!-- ============================================================== -->
                  <!-- User profile and search -->
                  <!-- ============================================================== -->
              </ul>
          </div>
      </nav>
  </header>
