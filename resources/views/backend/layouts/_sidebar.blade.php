  <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
         <nav class="sidebar-nav">
    <ul id="sidebarnav" class="mt-5">

        <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark" href="{{url('panel/dashboard')}}">
                <i class="mdi mdi-av-timer"></i>
                <span class="hide-menu">Панель Адміна</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark" href="{{ url('panel/user/list') }}">
                <i class="mdi mdi-account"></i>
                <span class="hide-menu">Користувачі</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                <i class="mdi mdi-silverware"></i>
                <span class="hide-menu">Меню</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                    <a href="index.html" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu">Загальне</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="index2.html" class="sidebar-link">
                        <i class="mdi mdi-adjust"></i>
                        <span class="hide-menu">Дитяче</span>
                    </a>
                </li>
            </ul>
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
