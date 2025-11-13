  <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
              <ul id="sidebarnav" class="mt-5">

                  <li class="sidebar-item">
                      <a class="sidebar-link waves-effect waves-dark {{ Route::is('panel.dashboard') ? 'active' : '' }}"
                          href="{{ route('panel.dashboard') }}">
                          <i class="mdi mdi-av-timer"></i>
                          <span class="hide-menu">Адмін-панель</span>
                      </a>
                  </li>

                  <li class="sidebar-item">
                      <a class="sidebar-link waves-effect waves-dark {{ Route::is('panel.user.*') ? 'active' : '' }}"
                          href="{{ route('panel.user.list') }}">
                          <i class="mdi mdi-account-multiple-plus"></i>
                          <span class="hide-menu">Користувачі</span>
                      </a>
                  </li>

                  <li class="sidebar-item">
                      <a class="sidebar-link waves-effect waves-dark {{ Route::is('panel.menu.*') ? 'active' : '' }}"
                          href="{{ route('panel.menu.list') }}">
                          <i class="mdi mdi-note-multiple"></i>
                          <span class="hide-menu">Розділи меню</span>
                      </a>
                  </li>

                  <li class="sidebar-item">
                      <a class="sidebar-link waves-effect waves-dark" href="{{ url('panel/gallery') }}">
                          <i class="mdi mdi-image"></i>
                          <span class="hide-menu">Фотогалерея</span>
                      </a>
                  </li>

                  <li class="sidebar-item">
                      <a class="sidebar-link waves-effect waves-dark" href="{{ url('panel/gallery') }}">
                          <i class="mdi mdi-book-open-variant"></i>
                          <span class="hide-menu">Сторінки</span>
                      </a>
                  </li>

                  <li class="sidebar-item">
                      <a class="sidebar-link waves-effect waves-dark" href="{{ route('logout') }}">
                          <i class="fa fa-power-off"></i>
                          <span class="hide-menu">Вихід</span>
                      </a>
                  </li>

              </ul>
          </nav>

          <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
  </aside>
