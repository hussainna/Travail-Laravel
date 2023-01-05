<header class="header" data-header>

<div class="overlay" data-overlay></div>

<div class="header-top">
  <div class="container">

    <a href="#" class="helpline-box">

      <div class="icon-box">
        <ion-icon name="call-outline"></ion-icon>
      </div>

      <div class="wrapper">
        <p class="helpline-title">call us for more information :</p>

        <p class="helpline-number">+9647832571433</p>
      </div>

    </a>

    <a href="#" class="logo">
      <img src="./assets/images/logo.svg" alt="Tourly logo">
    </a>

    <div class="header-btn-group">

      <a href='/sender' class="search-btn" aria-label="Search">
        <ion-icon name="search"></ion-icon>
      </a>

      <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

    </div>

  </div>
</div>

<div class="header-bottom">
  <div class="container">

    <ul class="social-list">

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-facebook"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-twitter"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-youtube"></ion-icon>
        </a>
      </li>

      <li>
      <div class="dropdown ">
      <ion-icon name="globe-outline" style='font-size:18px' class='social-link '></ion-icon>

      <div class="dropdown-content">
      <ul>
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" class='languageItem' hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
          @endforeach
    </ul>
      </div>
      </div>
     
      </li>
    </ul>

    <nav class="navbar" data-navbar>

      <div class="navbar-top">

        <a href="#" class="logo">
          <img src="./assets/images/logo-blue.svg" alt="Tourly logo">
        </a>

        <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>

      </div>

      <ul class="navbar-list">

        <li>
          <a href="/" class="navbar-link" data-nav-link>home</a>
        </li>

        <li>
          <a href="about-us" class="navbar-link" data-nav-link>about us</a>
        </li>

        <li>
          <a href="/posts" class="navbar-link" data-nav-link>Posts</a>
        </li>


        <li>
          <a href="/contact" class="navbar-link" data-nav-link>contact us</a>
        </li>


        @guest
          @if (Route::has('login'))
            <li>
                <a class="navbar-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
          @endif

          @if (Route::has('register'))
            <li>
                <a class="navbar-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
          @endif
          @else
            <li>
              <a id="navbarDropdown" class="navbar-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
               </a>
              </li>
              <li>
              <a class="navbar-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                    </a>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
              </li>

              @endguest

      </ul>

    </nav>

    <button class="btn btn-primary">Book Now</button>

  </div>
</div>

</header>



