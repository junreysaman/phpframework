<!doctype html>
<html lang="en" class="remember-theme">
  <head>
    <meta charset="utf-8">
    <!--
      Available classes for <html> element:

      'dark'                  Enable dark mode - Default dark mode preference can be set in app.js file (always saved and retrieved in localStorage afterwards):
                                window.Dashmix = new App({ darkMode: "system" }); // "on" or "off" or "system"
      'dark-custom-defined'   Dark mode is always set based on the preference in app.js file (no localStorage is used)
      'remember-theme'        Remembers active color theme between pages using localStorage when set through
                                - Theme helper buttons [data-toggle="theme"]
    -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Dashmix - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Dashmix framework -->
    <link rel="stylesheet" id="css-main" href="assets/css/dashmix.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->

    <!-- Load and set color theme + dark mode preference (blocking script to prevent flashing) -->
    <script src="assets/js/setTheme.js"></script>
  </head>

  <body>
    <!-- Page Container -->
    <!--
      Available classes for #page-container:

      SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

      HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header


      FOOTER

        ''                                          Static Footer if no class is added
        'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

      HEADER STYLE

        ''                                          Classic Header style if no class is added
        'page-header-dark'                          Dark themed Header
        'page-header-glass'                         Light themed Header with transparency by default
                                                    (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
        'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                    (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

      MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
    -->
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay sidebar-r side-scroll page-header-fixed main-content-narrow">
      <!-- Side Overlay-->
      <aside id="side-overlay">
        <!-- Side Header -->
        <div class="bg-image" style="background-image: url('assets/media/various/bg_side_overlay_header.jpg');">
          <div class="bg-primary-op">
            <div class="content-header">
              <!-- User Avatar -->
              <a class="img-link me-1" href="be_pages_generic_profile.html">
                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">
              </a>
              <!-- END User Avatar -->

              <!-- User Info -->
              <div class="ms-2">
                <a class="text-white fw-semibold" href="be_pages_generic_profile.html">George Taylor</a>
                <div class="text-white-75 fs-sm">Full Stack Developer</div>
              </div>
              <!-- END User Info -->

              <!-- Close Side Overlay -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                <i class="fa fa-times-circle"></i>
              </a>
              <!-- END Close Side Overlay -->
            </div>
          </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
          <!-- Side Overlay Tabs -->
          <div class="block block-transparent pull-x pull-t mb-0">
            <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="so-settings-tab" data-bs-toggle="tab" data-bs-target="#so-settings" role="tab" aria-controls="so-settings" aria-selected="true">
                  <i class="fa fa-fw fa-cog"></i>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="so-people-tab" data-bs-toggle="tab" data-bs-target="#so-people" role="tab" aria-controls="so-people" aria-selected="false">
                  <i class="far fa-fw fa-user-circle"></i>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="so-profile-tab" data-bs-toggle="tab" data-bs-target="#so-profile" role="tab" aria-controls="so-profile" aria-selected="false">
                  <i class="far fa-fw fa-edit"></i>
                </button>
              </li>
            </ul>
            <div class="block-content tab-content overflow-hidden">
              <!-- Settings Tab -->
              <div class="tab-pane pull-x fade fade-up show active" id="so-settings" role="tabpanel" aria-labelledby="so-settings-tab" tabindex="0">
                <div class="block mb-0">
                  <!-- Color Themes -->
                  <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
                  <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Color Themes</span>
                  </div>
                  <div class="block-content block-content-full">
                    <div class="row g-sm text-center">
                      <div class="col-4 mb-1">
                        <a class="d-block py-3 text-white fs-xs fw-semibold bg-default" data-toggle="theme" data-theme="default" href="#">
                          Default
                        </a>
                      </div>
                      <div class="col-4 mb-1">
                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xwork" data-toggle="theme" data-theme="assets/css/themes/xwork.min.css" href="#">
                          xWork
                        </a>
                      </div>
                      <div class="col-4 mb-1">
                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xmodern" data-toggle="theme" data-theme="assets/css/themes/xmodern.min.css" href="#">
                          xModern
                        </a>
                      </div>
                      <div class="col-4 mb-1">
                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xeco" data-toggle="theme" data-theme="assets/css/themes/xeco.min.css" href="#">
                          xEco
                        </a>
                      </div>
                      <div class="col-4 mb-1">
                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xsmooth" data-toggle="theme" data-theme="assets/css/themes/xsmooth.min.css" href="#">
                          xSmooth
                        </a>
                      </div>
                      <div class="col-4 mb-1">
                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xinspire" data-toggle="theme" data-theme="assets/css/themes/xinspire.min.css" href="#">
                          xInspire
                        </a>
                      </div>
                      <div class="col-4 mb-1">
                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xdream" data-toggle="theme" data-theme="assets/css/themes/xdream.min.css" href="#">
                          xDream
                        </a>
                      </div>
                      <div class="col-4 mb-1">
                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xpro" data-toggle="theme" data-theme="assets/css/themes/xpro.min.css" href="#">
                          xPro
                        </a>
                      </div>
                      <div class="col-4 mb-1">
                        <a class="d-block py-3 text-white fs-sm fw-semibold bg-xplay" data-toggle="theme" data-theme="assets/css/themes/xplay.min.css" href="#">
                          xPlay
                        </a>
                      </div>
                      <div class="col-12">
                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" href="be_ui_color_themes.html">All Color Themes</a>
                      </div>
                    </div>
                  </div>
                  <!-- END Color Themes -->

                  <!-- Sidebar -->
                  <div class="block-content block-content-sm block-content-full bg-body d-dark-none">
                    <span class="text-uppercase fs-sm fw-bold">Sidebar</span>
                  </div>
                  <div class="block-content block-content-full d-dark-none">
                    <div class="row g-sm text-center">
                      <div class="col-6 mb-1">
                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">Dark</a>
                      </div>
                      <div class="col-6 mb-1">
                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">Light</a>
                      </div>
                    </div>
                  </div>
                  <!-- END Sidebar -->

                  <!-- Header -->
                  <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Header</span>
                  </div>
                  <div class="block-content block-content-full">
                    <div class="row g-sm text-center mb-2">
                      <div class="col-6 mb-1 d-dark-none">
                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">Dark</a>
                      </div>
                      <div class="col-6 mb-1 d-dark-none">
                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">Light</a>
                      </div>
                      <div class="col-6 mb-1">
                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>
                      </div>
                      <div class="col-6 mb-1">
                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="header_mode_static" href="javascript:void(0)">Static</a>
                      </div>
                    </div>
                  </div>
                  <!-- END Header -->

                  <!-- Content -->
                  <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Content</span>
                  </div>
                  <div class="block-content block-content-full">
                    <div class="row g-sm text-center">
                      <div class="col-6 mb-1">
                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>
                      </div>
                      <div class="col-6 mb-1">
                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>
                      </div>
                      <div class="col-12 mb-1">
                        <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout" data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>
                      </div>
                    </div>
                  </div>
                  <!-- END Content -->

                  <!-- Layout API -->
                  <div class="block-content block-content-full border-top">
                    <a class="btn w-100 btn-alt-primary" href="be_layout_api.html">
                      <i class="fa fa-fw fa-flask me-1"></i> Layout API
                    </a>
                  </div>
                  <!-- END Layout API -->
                </div>
              </div>
              <!-- END Settings Tab -->

              <!-- People -->
              <div class="tab-pane pull-x fade fade-up" id="so-people" role="tabpanel" aria-labelledby="so-people-tab" tabindex="0">
                <div class="block mb-0">
                  <!-- Online -->
                  <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Online</span>
                  </div>
                  <div class="block-content">
                    <ul class="nav-items">
                      <li>
                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                          <div class="flex-shrink-0 mx-3 overlay-container">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar1.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                          </div>
                          <div class="flex-grow-1">
                            <div class="fw-semibold">Marie Duncan</div>
                            <div class="fs-sm text-muted">Photographer</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                          <div class="flex-shrink-0 mx-3 overlay-container">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar13.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                          </div>
                          <div class="flex-grow-1">
                            <div class="fw-semibold">Scott Young</div>
                            <div class="fw-normal fs-sm text-muted">Web Designer</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                          <div class="flex-shrink-0 mx-3 overlay-container">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar4.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                          </div>
                          <div class="flex-grow-1">
                            <div class="fw-semibold">Marie Duncan</div>
                            <div class="fw-normal fs-sm text-muted">Web Developer</div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- Online -->

                  <!-- Busy -->
                  <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Busy</span>
                  </div>
                  <div class="block-content">
                    <ul class="nav-items">
                      <li>
                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                          <div class="flex-shrink-0 mx-3 overlay-container">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar1.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-danger"></span>
                          </div>
                          <div class="flex-grow-1">
                            <div class="fw-semibold">Marie Duncan</div>
                            <div class="fw-normal fs-sm text-muted">UI Designer</div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- END Busy -->

                  <!-- Away -->
                  <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Away</span>
                  </div>
                  <div class="block-content">
                    <ul class="nav-items">
                      <li>
                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                          <div class="flex-shrink-0 mx-3 overlay-container">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar9.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                          </div>
                          <div class="flex-grow-1">
                            <div class="fw-semibold">David Fuller</div>
                            <div class="fw-normal fs-sm text-muted">Copywriter</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                          <div class="flex-shrink-0 mx-3 overlay-container">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                          </div>
                          <div class="flex-grow-1">
                            <div class="fw-semibold">Lisa Jenkins</div>
                            <div class="fw-normal fs-sm text-muted">Writer</div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- END Away -->

                  <!-- Offline -->
                  <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Offline</span>
                  </div>
                  <div class="block-content">
                    <ul class="nav-items">
                      <li>
                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                          <div class="flex-shrink-0 mx-3 overlay-container">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                          </div>
                          <div class="flex-grow-1">
                            <div class="fw-semibold">Jose Wagner</div>
                            <div class="fw-normal fs-sm text-muted">Teacher</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                          <div class="flex-shrink-0 mx-3 overlay-container">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                          </div>
                          <div class="flex-grow-1">
                            <div class="fw-semibold">Lisa Jenkins</div>
                            <div class="fw-normal fs-sm text-muted">Photographer</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                          <div class="flex-shrink-0 mx-3 overlay-container">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                          </div>
                          <div class="flex-grow-1">
                            <div class="fw-semibold">Helen Jacobs</div>
                            <div class="fw-normal fs-sm text-muted">Front-end Developer</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex py-2" href="be_pages_generic_profile.html">
                          <div class="flex-shrink-0 mx-3 overlay-container">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar15.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-muted"></span>
                          </div>
                          <div class="flex-grow-1">
                            <div class="fw-semibold">Justin Hunt</div>
                            <div class="fw-normal fs-sm text-muted">UX Specialist</div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- END Offline -->

                  <!-- Add People -->
                  <div class="block-content block-content-full border-top">
                    <a class="btn w-100 btn-alt-primary" href="javascript:void(0)">
                      <i class="fa fa-fw fa-plus me-1 opacity-50"></i> Add People
                    </a>
                  </div>
                  <!-- END Add People -->
                </div>
              </div>
              <!-- END People -->

              <!-- Profile -->
              <div class="tab-pane pull-x fade fade-up" id="so-profile" role="tabpanel" aria-labelledby="so-profile-tab" tabindex="0">
                <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                  <div class="block mb-0">
                    <!-- Personal -->
                    <div class="block-content block-content-sm block-content-full bg-body">
                      <span class="text-uppercase fs-sm fw-bold">Personal</span>
                    </div>
                    <div class="block-content block-content-full">
                      <div class="mb-4">
                        <label class="form-label">Username</label>
                        <input type="text" readonly class="form-control" id="so-profile-username-static" value="Admin">
                      </div>
                      <div class="mb-4">
                        <label class="form-label" for="so-profile-name">Name</label>
                        <input type="text" class="form-control" id="so-profile-name" name="so-profile-name" value="George Taylor">
                      </div>
                      <div class="mb-4">
                        <label class="form-label" for="so-profile-email">Email</label>
                        <input type="email" class="form-control" id="so-profile-email" name="so-profile-email" value="g.taylor@example.com">
                      </div>
                    </div>
                    <!-- END Personal -->

                    <!-- Password Update -->
                    <div class="block-content block-content-sm block-content-full bg-body">
                      <span class="text-uppercase fs-sm fw-bold">Password Update</span>
                    </div>
                    <div class="block-content block-content-full">
                      <div class="mb-4">
                        <label class="form-label" for="so-profile-password">Current Password</label>
                        <input type="password" class="form-control" id="so-profile-password" name="so-profile-password">
                      </div>
                      <div class="mb-4">
                        <label class="form-label" for="so-profile-new-password">New Password</label>
                        <input type="password" class="form-control" id="so-profile-new-password" name="so-profile-new-password">
                      </div>
                      <div class="mb-4">
                        <label class="form-label" for="so-profile-new-password-confirm">Confirm New Password</label>
                        <input type="password" class="form-control" id="so-profile-new-password-confirm" name="so-profile-new-password-confirm">
                      </div>
                    </div>
                    <!-- END Password Update -->

                    <!-- Options -->
                    <div class="block-content block-content-sm block-content-full bg-body">
                      <span class="text-uppercase fs-sm fw-bold">Options</span>
                    </div>
                    <div class="block-content">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="so-settings-status" name="so-settings-status">
                        <label class="form-check-label fw-semibold" for="so-settings-status">Online Status</label>
                      </div>
                      <p class="text-muted fs-sm">
                        Make your online status visible to other users of your app
                      </p>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="so-settings-notifications" name="so-settings-notifications">
                        <label class="form-check-label fw-semibold" for="so-settings-notifications">Notifications</label>
                      </div>
                      <p class="text-muted fs-sm">
                        Receive desktop notifications regarding your projects and sales
                      </p>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="so-settings-updates" name="so-settings-updates">
                        <label class="form-check-label fw-semibold" for="so-settings-updates">Auto Updates</label>
                      </div>
                      <p class="text-muted fs-sm">
                        If enabled, we will keep all your applications and servers up to date with the most recent features automatically
                      </p>
                    </div>
                    <!-- END Options -->

                    <!-- Submit -->
                    <div class="block-content block-content-full border-top">
                      <button type="submit" class="btn w-100 btn-alt-primary">
                        <i class="fa fa-fw fa-save me-1 opacity-50"></i> Save
                      </button>
                    </div>
                    <!-- END Submit -->
                  </div>
                </form>
              </div>
              <!-- END Profile -->
            </div>
          </div>
          <!-- END Side Overlay Tabs -->
        </div>
        <!-- END Side Content -->
      </aside>
      <!-- END Side Overlay -->
