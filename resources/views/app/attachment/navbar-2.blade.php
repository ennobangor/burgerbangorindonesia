<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0" id="home">
    <nav
      class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0"
    >
      <a href="" class="navbar-brand p-0">
        <!--<h1 class="m-0">FitApp</h1> -->
        <img src="{{asset('bangor/img/logo-burger-bangor-2.png')}}" alt="Logo burger bangor" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="fa fa-bars"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
          <a href="{{route('home')}}" class="nav-item nav-link ">Home</a>
          <div class="nav-item dropdown">
            <a
              href=""
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >About Us</a
            >
            <div class="dropdown-menu m-0">
                <a href="{{route('about')}}" class="dropdown-item">About Us</a>
                <a href="{{route('career')}}" class="dropdown-item">Career</a>
            </div>

          </div>
          <a href="{{route('menu')}}" class="nav-item nav-link ">Menu</a>
          <a href="{{route('store')}}" class="nav-item nav-link">Store</a>
          <a href="{{route('partnership')}}" class="nav-item nav-link">Partnership</a>
          <a href="https://blog.burgerbangorindonesia.com/" class="nav-item nav-link">Blog</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Community Event</a
            >
            <div class="dropdown-menu m-0">
              <a href="{{route('bigorder')}}" class="dropdown-item">Big order</a>
              <a href="{{route('bangor-berbagi')}}" class="dropdown-item">Bangor Berbagi</a>
              <a href="https://bangorfest.com/" class="dropdown-item">Bangor Festival</a>
              <a href="{{route('bangor-goestoevent')}}" class="dropdown-item">Bangor Goes To Event</a>
              <a href="{{route('bangor-goestoschool')}}" class="dropdown-item">Bangor Goes To School x Bertanding</a>
              <a href="{{route('bangor-funcookingclass')}}" class="dropdown-item">Bangor Fun Cooking Class</a>
            </div>

          </div>
          <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>

        </div>

      </div>
    </nav>
     <!-- Audio Player -->
     <audio id="audioPlayer" loop>
        <source src="{{ asset('bangor/jingle-bangor.mp3') }}" type="audio/mp3" />
        Browsermu tidak mendukung tag audio, upgrade donk!
    </audio>

    <!-- Tombol Toggle Suara -->
    <button id="soundToggleBtn" onclick="toggleSound()" class="btn btn-primary-gradient position-fixed p-2 shadow" style="bottom: 43px; right: 250px; z-index: 999;">
        <i class="fa fa-volume-up"></i>
    </button>
  </div>
  <!-- Navbar & Hero End -->

