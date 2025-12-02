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
                          <span class="hide-menu"> {{ auth()->user()->is_admin ? 'Адмін-панель' : 'Панель користувача' }}</span>
                      </a>
                  </li>
                  @if (Auth::user()->is_admin == 1)
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
                          <a class="sidebar-link waves-effect waves-dark {{ Route::is('panel.assort.*') ? 'active' : '' }}"
                              href="{{ route('panel.assort.list') }}">
                              <i class="mdi mdi-food-fork-drink"></i>
                              <span class="hide-menu">Асортимент меню</span>
                          </a>
                      </li>

                       <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark {{ Route::is('panel.portfolio.*') ? 'active' : '' }}"
                              href="{{ route('panel.portfolio.list') }}">
                              <i class="mdi mdi-image-multiple"></i>
                              <span class="hide-menu">Фотогалерея</span>
                          </a>
                      </li>

                      <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark {{ Route::is('panel.page.*') ? 'active' : '' }}"
                              href="{{ route('panel.page.list') }}">
                              <i class="mdi mdi-book-open-variant"></i>
                              <span class="hide-menu">Сторінки</span>
                          </a>
                      </li>
                       <li class="sidebar-item">
                          <a class="sidebar-link waves-effect waves-dark {{ Route::is('panel.reservations.*') ? 'active' : '' }}"
                              href="{{ route('panel.reservations.list') }}">
                              <i class="mdi mdi-calendar-check"></i>
                              <span class="hide-menu">Бронювання</span>
                          </a>
                      </li>
                  @endif
                  <li class="sidebar-item">
                      <a class="sidebar-link waves-effect waves-dark {{ Route::is('panel.comment.*') ? 'active' : '' }}"
                          href="{{ url('panel/comment/list') }}">
                          <i class="mdi mdi-comment"></i>
                          <span>Відгуки</span>
                      </a>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link waves-effect waves-dark {{ Route::is('change-password') ? 'active' : '' }}"
                          href="{{ url('panel/change-password') }}">
                          <i class="mdi mdi-lock"></i>
                          <span>Змінити пароль</span>
                      </a>
                  </li>
                   <li class="sidebar-item">
                      <a class="sidebar-link waves-effect waves-dark {{ Route::is('account-settings') ? 'active' : '' }}"
                          href="{{ url('panel/account-settings') }}">
                          <i class="mdi mdi mdi-settings"></i>
                          <span>Налаштування акаунту</span>
                      </a>
                  </li>
                  
                   <li class="sidebar-item">
                      <a class="sidebar-link waves-effect waves-dark {{ Route::is('panel.hero-setting') ? 'active' : '' }}"
                          href="{{ route('panel.hero_setting') }}">
                          <i class="mdi mdi-image-area"></i>
                          <span class="hide-menu">Налаштування Hero</span>
                      </a>

                    </li>
                    <li class="sidebar-item">
                      <a class="sidebar-link waves-effect waves-dark {{ Route::is('ppanel.setting') ? 'active' : '' }}"
                          href="{{ route('panel.setting') }}">
                          <i class="mdi mdi-message-settings-variant"></i>
                          <span class="hide-menu">Налаштування сайту</span>
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
