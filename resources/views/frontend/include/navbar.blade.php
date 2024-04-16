  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('frontend.home') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">ESSEN</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="{{ Route::is('frontend.home') ? 'active' : '' }}" href="{{ route('frontend.home') }}" class="active">Home</a></li>
          <li><a class="{{ Route::is('frontend.about') ? 'active' : '' }}" href="{{ route('frontend.about') }}">About</a></li>
          <li><a class="{{ Route::is('frontend.services') ? 'active' : '' }}" href="{{ route('frontend.services') }}">Services</a></li>
          <li><a class="{{ Route::is('frontend.portfolio') ? 'active' : '' }}" href="{{ route('frontend.portfolio') }}">Portfolio</a></li>
          {{-- <li><a class="{{ Route::is('frontend.team') ? 'active' : '' }}" href="{{ route('frontend.team') }}">Team</a></li> --}}
          {{-- <li><a class="{{ Route::is('frontend.blog') ? 'active' : '' }}" href="{{ route('frontend.blog') }}">Blog</a></li> --}}
          {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> --}}
          <li><a class="{{ Route::is('frontend.contact') ? 'active' : '' }}" href="{{ route('frontend.contact') }}">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>