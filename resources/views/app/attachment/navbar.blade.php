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
          <a href="{{route('home')}}" class="nav-item nav-link fw-medium">Home</a>
          <div class="nav-item dropdown">
            <a
              href=""
              class="nav-link dropdown-toggle "
              data-bs-toggle="dropdown"
              >About Us</a
            >
            <div class="dropdown-menu m-0">
                <a href="{{route('about')}}" class="dropdown-item ">About Us</a>
                <a href="{{route('career')}}" class="dropdown-item ">Career</a>
            </div>

          </div>
          <a href="{{route('menu')}}" class="nav-item nav-link ">Menu</a>
          <a href="{{route('store')}}" class="nav-item nav-link ">Store</a>
          <a href="{{route('partnership')}}" class="nav-item nav-link ">Partnership</a>
          <a href="https://blog.burgerbangorindonesia.com/" class="nav-item nav-link ">Blog</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle "
              data-bs-toggle="dropdown"
              >Community Event</a
            >
            <div class="dropdown-menu m-0">
              <a href="{{route('bigorder')}}" class="dropdown-item ">Big order</a>
              <a href="{{route('bangor-berbagi')}}" class="dropdown-item ">Bangor Berbagi</a>
              <a href="https://bangorfest.com/" class="dropdown-item">Bangor Festival</a>
              <a href="{{route('bangor-goestoevent')}}" class="dropdown-item ">Bangor Goes To Event</a>
              <a href="{{route('bangor-goestoschool')}}" class="dropdown-item ">Bangor Goes To School x Bertanding</a>
              <a href="{{route('bangor-funcookingclass')}}" class="dropdown-item ">Bangor Fun Cooking Class</a>
            </div>

          </div>
          <a href="{{route('contact')}}" class="nav-item nav-link ">Contact</a>

        </div>

      </div>
    </nav>

    <div class="container-xxl hero-header">
      <div class="container px-lg-5">
        <div class="row g-5">
          <div class="col-lg-8 text-center text-lg-start">
            <h1 class="text-white mb-4 animated slideInDown" style="font-size: 48px;" id="masthead-title">
              BURGER BANGOR<br>BURGERNYA INDONESIA
            </h1>
            <p class="text-white pb-3 animated slideInDown" id="masthead-subtitle">
            Burger Bangor sebagai number #1 local burger company in Indonesia selalu memberikan kualitas terbaik dan pelayanan terbaik dengan bangor care yang selalu mendengar suara dari Sobat Bangor. Burger Halal rendah lemak dengan 100% premium beef , roti, dan saus homemade membawa kami sebagai brand burger lokal yang sudah tersebar di seluruh Indonesia dan akan terus bertambah, bertumbuh, berkembang hingga ke seluruh dunia.
            </p>
            <div class="socmed d-flex align-items-center mt-4">
              <a class="btn btn-outline-primary btn-square me-3" href="https://www.facebook.com/p/Burger-Bangor-100070755492590/" target="_blank"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a
                class="btn btn-outline-primary btn-square me-3" target="_blank"
                href="https://wa.me/628569018937"
                ><i class="fab fa-whatsapp"></i
              ></a>
              <a
                class="btn btn-outline-primary btn-square me-3" target="_blank"
                href="https://www.instagram.com/burgerbangor/"
                ><i class="fab fa-instagram"></i
              ></a>
              <a
                class="btn btn-outline-primary btn-square me-3" target="_blank"
                href="https://www.tiktok.com/@burgerbangor.official"
                ><i class="fab fa-tiktok"></i
              ></a>

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
          </div>
          <div
            class="col-lg-4 d-flex justify-content-center justify-content-lg wow fadeInUp"
            data-wow-delay="0.3s"
          >
            <div class="owl-carousel screenshot-carousel">
              <img class="img-fluid" src="{{asset('bangor/img/karyaterbaik.png')}}" alt="burger bangor" />
              <img class="img-fluid" src="{{asset('bangor/img/karyaterbaik2.png')}}" alt="burger bangor" />
              <img class="img-fluid" src="{{asset('bangor/img/karyaterbaik3.png')}}" alt="burger bangor" />
              <img class="img-fluid" src="{{asset('bangor/img/burger-bangor-online.png')}}" alt="burger bangor" />
              <img class="img-fluid" src="{{asset('bangor/img/burger-bangor-family.png')}}" alt="burger bangor" />

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Navbar & Hero End -->


