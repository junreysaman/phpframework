<!-- Sidebar -->
      <!--
        Sidebar Mini Mode - Display Helper classes

        Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
          If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

        Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
        Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
        Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
      -->
      <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
          <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="fw-semibold text-white tracking-wide" href="index.html">
              <span class="smini-visible">
                D<span class="opacity-75">x</span>
              </span>
              <span class="smini-hidden">
                Dash<span class="opacity-75">mix</span>
              </span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div class="d-flex align-items-center gap-1">
              <!-- Dark Mode -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <div class="dropdown">
                <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-dark-mode-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="far fa-fw fa-moon" data-dark-mode-icon></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end smini-hide border-0" aria-labelledby="sidebar-dark-mode-dropdown">
                  <button type="button" class="dropdown-item d-flex align-items-center gap-2" data-toggle="layout" data-action="dark_mode_off" data-dark-mode="off">
                    <i class="far fa-sun fa-fw opacity-50"></i>
                    <span class="fs-sm fw-medium">Light</span>
                  </button>
                  <button type="button" class="dropdown-item d-flex align-items-center gap-2" data-toggle="layout" data-action="dark_mode_on" data-dark-mode="on">
                    <i class="far fa-moon fa-fw opacity-50"></i>
                    <span class="fs-sm fw-medium">Dark</span>
                  </button>
                  <button type="button" class="dropdown-item d-flex align-items-center gap-2" data-toggle="layout" data-action="dark_mode_system" data-dark-mode="system">
                    <i class="fa fa-desktop fa-fw opacity-50"></i>
                    <span class="fs-sm fw-medium">System</span>
                  </button>
                </div>
              </div>
              <!-- END Dark Mode -->

              <!-- Options -->
              <div class="dropdown">
                <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-fw fa-paint-brush"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end fs-sm border-0" aria-labelledby="sidebar-themes-dropdown">
                  <!-- Color Themes -->
                  <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                  <div class="row g-sm text-center">
                    <div class="col-4 mb-1">
                      <a class="d-block py-3 text-white fs-xs fw-semibold bg-default rounded-1" data-toggle="theme" data-theme="default" href="#">
                        Default
                      </a>
                    </div>
                    <div class="col-4 mb-1">
                      <a class="d-block py-3 text-white fs-xs fw-semibold bg-xwork rounded-1" data-toggle="theme" data-theme="assets/css/themes/xwork.min.css" href="#">
                        xWork
                      </a>
                    </div>
                    <div class="col-4 mb-1">
                      <a class="d-block py-3 text-white fs-xs fw-semibold bg-xmodern rounded-1" data-toggle="theme" data-theme="assets/css/themes/xmodern.min.css" href="#">
                        xModern
                      </a>
                    </div>
                    <div class="col-4 mb-1">
                      <a class="d-block py-3 text-white fs-xs fw-semibold bg-xeco rounded-1" data-toggle="theme" data-theme="assets/css/themes/xeco.min.css" href="#">
                        xEco
                      </a>
                    </div>
                    <div class="col-4 mb-1">
                      <a class="d-block py-3 text-white fs-xs fw-semibold bg-xsmooth rounded-1" data-toggle="theme" data-theme="assets/css/themes/xsmooth.min.css" href="#">
                        xSmooth
                      </a>
                    </div>
                    <div class="col-4 mb-1">
                      <a class="d-block py-3 text-white fs-xs fw-semibold bg-xinspire rounded-1" data-toggle="theme" data-theme="assets/css/themes/xinspire.min.css" href="#">
                        xInspire
                      </a>
                    </div>
                    <div class="col-4 mb-1">
                      <a class="d-block py-3 text-white fs-xs fw-semibold bg-xdream rounded-1" data-toggle="theme" data-theme="assets/css/themes/xdream.min.css" href="#">
                        xDream
                      </a>
                    </div>
                    <div class="col-4 mb-1">
                      <a class="d-block py-3 text-white fs-xs fw-semibold bg-xpro rounded-1" data-toggle="theme" data-theme="assets/css/themes/xpro.min.css" href="#">
                        xPro
                      </a>
                    </div>
                    <div class="col-4 mb-1">
                      <a class="d-block py-3 text-white fs-xs fw-semibold bg-xplay rounded-1" data-toggle="theme" data-theme="assets/css/themes/xplay.min.css" href="#">
                        xPlay
                      </a>
                    </div>
                    <div class="col-12">
                      <a class="d-block py-2 bg-body-dark fs-xs fw-semibold text-dark rounded-1" href="be_ui_color_themes.html">All Color Themes</a>
                    </div>
                  </div>
                  <!-- END Color Themes -->
                </div>
              </div>
              <!-- END Options -->

              <!-- Close Sidebar, Visible only on mobile screens -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-times-circle"></i>
              </button>
              <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
          </div>
        </div>
        <!-- END Side Header -->
        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
          <!-- Side Actions -->
          <div class="content-side content-side-full bg-black-10 text-center">
            <div class="smini-hide">
              <button type="button" class="btn btn-sm btn-secondary">
                <i class="fa fa-fw fa-user-circle"></i>
              </button>
              <button type="button" class="btn btn-sm btn-secondary">
                <i class="fa fa-fw fa-pencil-alt"></i>
              </button>
              <button type="button" class="btn btn-sm btn-secondary">
                <i class="fa fa-fw fa-file-alt"></i>
              </button>
              <button type="button" class="btn btn-sm btn-secondary">
                <i class="fa fa-fw fa-envelope"></i>
              </button>
              <button type="button" class="btn btn-sm btn-secondary">
                <i class="fa fa-fw fa-cog"></i>
              </button>
            </div>
          </div>
          <!-- END Side Actions -->

          <!-- Side Navigation -->
          <div class="content-side">
            <ul class="nav-main">
              <li class="nav-main-item">
                <a class="nav-main-link active" href="db_modern.html">
                  <i class="nav-main-link-icon fa fa-chart-bar"></i>
                  <span class="nav-main-link-name">Dashboard</span>
                  <span class="nav-main-link-badge badge rounded-pill bg-primary">3</span>
                </a>
              </li>
              <li class="nav-main-heading">Manage</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-briefcase"></i>
                  <span class="nav-main-link-name">Projects</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-plus"></i>
                      <span class="nav-main-link-name">New</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-star"></i>
                      <span class="nav-main-link-name">Active</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-pencil-alt"></i>
                      <span class="nav-main-link-name">Manage</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-user"></i>
                  <span class="nav-main-link-name">Customers</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-plus"></i>
                      <span class="nav-main-link-name">New</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-pencil-alt"></i>
                      <span class="nav-main-link-name">Manage</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-file-alt"></i>
                  <span class="nav-main-link-name">Invoices</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-plus"></i>
                      <span class="nav-main-link-name">New</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-hourglass"></i>
                      <span class="nav-main-link-name">Pending</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-pencil-alt"></i>
                      <span class="nav-main-link-name">Manage</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-check"></i>
                  <span class="nav-main-link-name">Payments</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-hourglass"></i>
                      <span class="nav-main-link-name">Pending</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-pencil-alt"></i>
                      <span class="nav-main-link-name">Manage</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-glasses"></i>
                  <span class="nav-main-link-name">Marketing</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-book-open"></i>
                      <span class="nav-main-link-name">Articles</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-globe"></i>
                      <span class="nav-main-link-name">SEO</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-directions"></i>
                      <span class="nav-main-link-name">Feedback</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-chart-area"></i>
                      <span class="nav-main-link-name">Analytics</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-life-ring"></i>
                  <span class="nav-main-link-name">Support</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-fire"></i>
                      <span class="nav-main-link-name">Open Tickets</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                      <i class="nav-main-link-icon fa fa-pencil-alt"></i>
                      <span class="nav-main-link-name">Manage</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">Settings</li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-house-user"></i>
                  <span class="nav-main-link-name">Profile</span>
                  <span class="nav-main-link-badge badge rounded-pill bg-primary">4</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-envelope-open"></i>
                  <span class="nav-main-link-name">Messages</span>
                  <span class="nav-main-link-badge badge rounded-pill bg-success">9</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-user"></i>
                  <span class="nav-main-link-name">Account</span>
                  <span class="nav-main-link-badge badge rounded-pill bg-warning">3</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="">
                  <i class="nav-main-link-icon fa fa-lock"></i>
                  <span class="nav-main-link-name">Security</span>
                  <span class="nav-main-link-badge badge rounded-pill bg-danger">1</span>
                </a>
              </li>
              <li class="nav-main-heading">Actions</li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_pages_dashboard_all.html">
                  <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i>
                  <span class="nav-main-link-name">Logout</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
      </nav>
      <!-- END Sidebar -->