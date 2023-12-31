<?php
$this->db = new Database;
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$uriS = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$uri = $uriS[2];
$uriPop = array_pop($uriSegments);
?>
<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="#" class="app-brand-link">
              <span class="app-brand-logo demo">
                
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">SIAP</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li <?php if ($uriPop === 'dashboard'): ?> class="menu-item active" <?php else : ?> class="menu-item" <?php  endif; ?>> 
              <a href="<?=base_url;?>/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
           

            
            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text"></span></li>
            <!-- Cards -->
			 <li <?php if ($uriPop !== 'dashboard' && $uriPop !== 'antrian'&& $uriPop !== 'user'): ?> class="menu-item active open" <?php else : ?> class="menu-item" <?php  endif; ?>>
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Data</div>
              </a>

              <ul class="menu-sub">
                <li <?php if ($uriPop === 'dokter'): ?> class="menu-item active" <?php else : ?> class="menu-item" <?php  endif; ?>>
                  <a href="<?=base_url;?>/dokter" class="menu-link">
                    <div data-i18n="Without menu">Dokter</div>
                  </a>
                </li>
                <li <?php if ($uriPop === 'pasien'): ?> class="menu-item active" <?php else : ?> class="menu-item" <?php  endif; ?>>
                  <a href="<?=base_url;?>/pasien" class="menu-link">
                    <div data-i18n="Without navbar">Pasien</div>
                  </a>
                </li>
                <li <?php if ($uriPop === 'jadwal'): ?> class="menu-item active" <?php else : ?> class="menu-item" <?php  endif; ?>>
                  <a href="<?=base_url;?>/jadwal" class="menu-link">
                    <div data-i18n="Container">Jadwal</div>
                  </a>
                </li>
              </ul>
            </li>
            <li <?php if ($uriPop === 'antrian'): ?> class="menu-item active open" <?php else : ?> class="menu-item" <?php  endif; ?>>
              <a href="<?=base_url;?>/antrian" class="menu-link">
                <i class="menu-icon tf-icons bx bx-clinic"></i>
                <div data-i18n="Basic">Antrian</div>
              </a>
            </li>
            <li class="menu-header small text-uppercase"><span class="menu-header-text"></span></li>
            <li <?php if ($uriPop === 'user'): ?> class="menu-item active open" <?php else : ?> class="menu-item" <?php  endif; ?>>
              <a href="<?=base_url;?>/user" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Basic">User</div>
              </a>
            </li>
          
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?=base_url;?>/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?=base_url;?>/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?=base_url;?>/logout/logout">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>