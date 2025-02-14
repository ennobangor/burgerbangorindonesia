@extends('app.layouts.front')
@section('title', 'Burger Bangor Indonesia')
@section('url', 'https://burgerbangorindonesia.com')
@section('content')
    <marquee class="position-relative" scrollamount="10">
        <h4 style="text-transform: uppercase">
            <img src="{{asset('bangor/img/food-truck.png')}}" style="max-width: 100px" />
            sensasi untuk menikmati kelezatan burger Bangor bukan tergantung dari rasa , Harga , selera , gaya hidup , status sosial, maupun level stress anda tapi lebih kepada bagaimana anda bersyukur hari ini.
            <img src="{{asset('bangor/img/food-truck.png')}}" style="max-width: 100px" />
        </h4>
    </marquee>


    <!-- Carousel -->
    <div class="container-xxl py-5 promo">
        <div class="owl-carousel promo-carousel wow fadeInUp" data-wow-delay="0.1s">
            @foreach ($carousels as $carousel)
                <div class="promo-item rounded p-4">
                    <div class="d-flex align-items-center shadow">
                        <a href="{{ $carousel->link }}" data-bs-toggle="tooltip"
                            title="{{ $carousel->title }}"
                            target="_blank">
                            <img class="img-fluid bg-white rounded flex-shrink-1 p-1"
                                src="{{ asset('storage/' . $carousel->banner) }}" />
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- End Carousel -->

    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container px-lg-5">
        <div class="row align-items-center">
            <div class="position-relative col-lg-6 fadeInUp" data-wow-delay="0.1s">
                <img src="{{asset('bangor/img/tentangkami.png')}}" style="max-width: 250px;" alt="Tentang Kami">
                <p class="text-justify mb-4">
                    Tepat pada tahun 2019, berawal dari sebuah obrolan senja yang Unfaedah di pojok warung kopi, tercetus ide kecil kami untuk mencoba membuat usaha makanan yang kami harapkan bisa menopang hidup anak cucu cicit di kemudian hari. Akhirnya tanpa basa basi berdasarkan sedikit bekal pengalaman saat masih remaja kami mencoba membuat burger lokal dengan nama BURGER BANGOR Sesuai dengan namanya Bangor!
                    <br> <br> Tentu ini bukan sembarang burger pada umumnya, Bangor memiliki varian parodi kasta Jelata, Juragan, Ningrat sampai level Sultan. Dengan racikan citarasa Bangor yang berbeda, burger halal rendah lemak dengan 100% premium beef, juga roti dan saos yang kami buat sendiri kami hadirkan dengan harga yang sangat terjangkau mulai dari Rp. 13.000. Kini lima  tahun telah berlalu dan ternyata 8 dari 10 wanita mengatakan ini benar-benar Bangor, Gawat!
                </p>
                <a
                    href="{{route('about')}}"
                    class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3"
                    >Selengkapnya
                </a>
            </div>
            <div class="col-lg wow fadeIn" data-wow-delay="0.5s">
                <div class="embed-responsive embed-responsive-3by4">
                  <iframe
                    class="embed-responsive-item col-12 my-3 border rounded"
                    src="https://www.youtube.com/embed/pXAmyT69tFo?si=ojSNESvx68M4RpHz"
                    style="min-height: 400px"
                  ></iframe>
                </div>
              </div>
        </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Promotion Start -->
    <div class="container-fluid my-5 px-0">
        <div class="row bg-primary m-0">
            <div
            class="col-md-6 px-0 animated wow slideInLeft"
            data-wow-delay="0.5s"
            style="min-height: 100px">
            <div class="position-relative h-100">
                <img
                    class="img-fluid"
                    src="{{asset('bangor/img/promotion.png')}}"
                    style="object-fit: cover"/>
            </div>
          </div>
          <div
            class="col-md-6 py-5 py-md-0 px-0 animated wow slideInRight"
            data-wow-delay="0.5s"
          >
            <div
              class="h-100 d-flex flex-column align-items-center justify-content-center p-5"
            >
              <div
                class="d-flex align-items-center justify-content-center mb-4"
                style="width: 100px; height: 100px"
              >
                <h3 class="font-weight-bold text-secondary mb-0">
                <img src="{{asset('bangor/img/icon.png')}}" style="max-width: 300px" />
                </h3>
            </div>
            <h3 class="font-weight-bold text-white mt-3 mb-4">
                BURGER BANGOR
            </h3>
            <p class="text-white mb-4">
                Burger Halal Rendah Lemak dengan 100% Premium Beef
            </p>
            <a
                href="https://linkr.it/13ZYnV" target="_blank"
                class="btn btn-primary-gradient py-3 px-5 mt-2 rounded-pill"
                >Order on GrabFood</a
            >
            <a
                href="https://www.shopeefood.co.id/" target="_blank"
                class="btn btn-primary-gradient py-3 px-5 mt-2 rounded-pill"
                >Order on ShoopeFood</a
            >
            <a
                href="https://linkr.it/4yLSwJ" target="_blank"
                class="btn btn-primary-gradient py-3 px-5 mt-2 rounded-pill"
                >Order on GoFood</a
            >
            </div>
        </div>
        </div>
    </div>
    <!-- Promotion End -->


    <!-- magazine Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container py-5 px-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-6 my-3 text-center data-wow-delay="0.1s">
                <img
                    src="{{asset('bangor/img/bangormagz.png')}}" alt="bangor magazines"
                    style="max-width: 300px"/>
                        <p class="mb-4">
                            Bangor Magazine merupakan majalah yang hadir setiap minggunya untuk memberikan segudang informasi terbaru dan cerita menarik seputar Burger Bangor, Majalah ini dibuat untuk menginspirasi dan membantu Sobat Bangor agar selalu update dengan perkembangan terbaru! Yuk, baca sekarang dan dapatkan informasi menarik setiap minggunya!
                        </p>
                        <a
                            href="https://drive.google.com/drive/folders/1_Mr3nUIN3QxWsfEGDrjt5slPo0mRNpya" target="_blank"
                            class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3"
                            >Selengkapnya
                        </a>
            </div>
            <div class="col-lg-6">
                <div class="row" id="magazine">
                    @foreach ($magzs->take(6) as $magz)
                        <div class="col-4 cards">
                            <img src="{{ asset('storage/' . $magz->banner) }}" class="img-fluid" alt="Magz-burger bangor">
                            <span>
                                <a href="{{ $magz->link }}" target="_blank">Download</a>
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- pelayanan kami -->
    <div class="container-xxl py-5 pelayanan">
        <div class="container px-lg-5">
        <div
            class="position-relative mb-5 wow fadeInUp"
            data-wow-delay="0.1s">
            <img class="img-fluid" src="{{asset('bangor/img/adaapadibangor.png')}}" style="max-width: 350px;" alt="ada apa di bangor?">
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
            <div
                class="service-item d-flex flex-column justify-content-center text-center rounded bg-dark border p-3"
            >
                <div class="service-icon d-flex align-items-center justify-content-center">
                <img src="{{asset('bangor/img/partnership.png')}}" alt="partnership burger bangor" class="img-fluid" style="max-width: 100px;">
                </div>
                <h5 class="mb-3"><strong>PARTNERSHIP</strong></h5>
                <p>
                    Burger Bangor membuka pintu peluang khusus untuk Anda yang tertarik menjalankan bisnis dengan merek yang sudah dikenal, sistem yang teruji, dukungan penuh dari pusat, dan potensi keuntungan yang tinggi. Berbekal kepercayaan membangorkan lebih dari 660 outlet yang tersebar di seluruh Indonesia, kami mengajak Anda untuk bergabung sebagai mitra dalam perjalanan kami menghidangkan momen syukur di setiap gigitan Burger Bangor.
                </p>
                <a class="btn btn-primary-gradient px-3 mt-auto mx-auto rounded-pill"
                href="{{route('partnership')}}"
                >Selengkapnya</a
                >
            </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div
                class="service-item d-flex flex-column justify-content-center text-center rounded bg-dark border p-3"
            >
                <div class="service-icon d-flex align-items-center justify-content-center">
                <img src="{{asset('bangor/img/bigorder.png')}}" alt="partnership burger bangor" class="img-fluid" style="max-width: 100px;">
                </div>
                <h5 class="mb-3"><strong>BIG ORDER</strong></h5>
                <p>
                    Lebih banyak, lebih seru! Rayakan momen spesial Anda bersama Burger Bangor. Dari pesta ulang tahun, gathering, seminar, acara pernikahan, hingga khitanan, kami siap menyajikan berbagai hidangan lezat dalam jumlah besar untuk memeriahkan acara Anda. Dengan variasi menu yang menggugah selera dan layanan yang cepat, dapatkan kesan tak terlupakan lewat setiap gigitan Burger Bangor.
                </p>
                <a class="btn btn-primary-gradient px-3 mt-auto mx-auto rounded-pill"
                href="{{route('partnership')}}"
                >Selengkapnya</a
                >
            </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
              <div
                class="service-item d-flex flex-column justify-content-center text-center rounded bg-dark border p-3"
              >
                <div class="service-icon d-flex align-items-center justify-content-center">
                  <img src="{{asset('bangor/img/Bangorfest.jpg')}}" alt="bangorfest vol.3" class="img-fluid" style="max-width: 100px;">
                </div>
                <h5 class="mb-3"><strong>BANGORFEST</strong></h5>
                <p>
                   Festival burger murah tahunan dari Burger Bangor yang disemarakkan oleh berbagai kegiatan seru! Mulai dari penampilan musik dari musisi besar Indonesia hingga pembagian doorprize puluhan juta rupiah, semua ada di Bangor Fest. Saksikan keseruan Bangor Fest Vol. 3 pada bulan Agustus 2025 mendatang!
                </strong>
                </p>
                <a
                  class="btn btn-primary-gradient px-3 mt-auto mx-auto rounded-pill"
                  href="https://bangorfest.com" target="_blank"
                  >Selengkapnya</a
                >
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
              <div
                class="service-item d-flex flex-column justify-content-center text-center rounded bg-dark border p-3"
              >
                <div class="service-icon d-flex align-items-center justify-content-center">
                  <img src="{{asset('bangor/img/goestoschool.png')}}" alt="bangor goes to school" class="img-fluid" style="max-width: 100px;" >
                </div>
                <h5 class="mb-3"><strong>BANGOR GOES TO SCHOOL</strong></h5>
                <p>
                    Burger Bangor mengajak sekolah-sekolah dari tingkat TK, SD, SMP, SMA, hingga pesantren dan kampus di seluruh Indonesia untuk bergabung dalam rangkaian keseruan Bangor Goes to School. Nantikan kunjungan penuh keceriaan dari Burger Bangor.

                </p>
                <a class="btn btn-primary-gradient px-3 mt-auto mx-auto rounded-pill"
                href="{{route('bangor-goestoschool')}}"
                >Selengkapnya</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
              <div
                class="service-item d-flex flex-column justify-content-center text-center rounded bg-dark border p-3"
              >
                <div class="service-icon d-flex align-items-center justify-content-center">
                  <img class="img-fluid" src="{{asset('bangor/img/bangorberbagi.png')}}" alt="bangor berbagi" style="max-width: 100px;">
                </div>
                <h5 class="mb-3"><strong>BANGOR BERBAGI</strong></h5>
                <p>
                    Lebih dari sebatas program sosial untuk memberikan bantuan di berbagai tempat seperti panti asuhan, yayasan disabilitas, panti jompo, dan rumah yatim, Bangor Berbagi menyuguhkan momen bermakna untuk menanamkan kepedulian, menciptakan kebersamaan dan kontribusi yang bernilai, serta merajut hubungan yang penuh harapan.
                </p>
                <a class="btn btn-primary-gradient px-3 mt-auto mx-auto rounded-pill"
                href="{{route('bangor-berbagi')}}"
                >Selengkapnya</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
              <div
                class="service-item d-flex flex-column justify-content-center text-center rounded bg-dark border p-3"
              >
                <div class="service-icon d-flex align-items-center justify-content-center">
                  <img class="img-fluid" src="{{asset('bangor/img/funcookingclass.png')}}" alt="fun cooking class burger bangor" style="max-width: 80px;">
                </div>
                <h5 class="mb-3"><strong>FUN COOKING CLASS</strong></h5>
                <p>
                    Burger Bangor mengajak adik-adik untuk ikut serta mengekspresikan kreativitas dalam Fun Cooking Class, yaitu kegiatan membuat burger mereka sendiri dengan cara yang menyenangkan. Di kelas ini, si kecil akan diperkenalkan pada berbagai bahan burger, diajari teknik plating yang menarik, juga aktivitas lain yang tidak kalah menyenangkan. Jadikan kesempatan ini pengalaman berharga bagi si kecil!
                </p>
                <a class="btn btn-primary-gradient px-3 mt-auto mx-auto rounded-pill"
                href="{{route('bangor-funcookingclass')}}"
                >Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container-xxl" id="feature">
        <div class="container px-lg-5">
          <div
            class="position-relative text-center wow fadeInUp mb-5"
            data-wow-delay="0.1s"
          >
            <img src="{{asset('bangor/img/menubangor.png')}}" style="max-width: 300px;" alt="menu burger bangor">
          </div>

        <div class="row menu-grid d-flex">

            <!-- Ala Carte -->
            <div class="col-md-2 menu-item ala-carte">
                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Jelata.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
            </div>
            <div class="col-md-2 menu-item ala-carte">
                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Jelata Cheese.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
            </div>
            <div class="col-md-2 menu-item ala-carte">
                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Juragan.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
            </div>
            <div class="col-md-2 menu-item ala-carte">
                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Juragan Cheese.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
            </div>
            <div class="col-md-2 menu-item ala-carte">
                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Ningrat.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
            </div>
            <div class="col-md-2 menu-item ala-carte">
                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Ningrat Cheese.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
            </div>
        </div>
          <div class="text-center">
            <a
              href="{{route('menu')}}"
              class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3"
              >Selengkapnya</a
            >
          </div>
        </div>
      </div>

      <!-- Testimonial Start -->
    <div class="container-fluid py-2 testimonial">
        <div class="container py-5 ">
          <div class="row justify-content-center ">
            <div class="col-lg-12">
              <h2 class="section-title position-relative text-center mb-5">
                What they say about Burger Bangor
              </h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="owl-carousel testimonial-carousel">
                <div class="text-center">
                  <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                  <h4 class="font-weight-light"  style="height: 100px">
                    burger nya enak!, makan nya juga ngga ribet.
                  </h4>
                  <img src="{{asset('bangor/img/barboy.png')}}" alt="" class="img-fluid">
                  <h4 class="font-weight-bold m-0">Sayalarimba</h4>
                  <h5>Food Blogger</h5>
                </div>
                <div class="text-center">
                  <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                  <h4 class="font-weight-light"  style="height: 100px">
                    enak banget rasanya autentik!
                  </h4>
                  <img src="{{asset('bangor/img/barboy.png')}}" alt="" class="img-fluid">
                  <h4 class="font-weight-bold m-0">jessibellnat</h4>
                  <h5>Tiktokers</h5>
                </div>
                <div class="text-center" >
                  <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                  <h4 class="font-weight-light"  style="height: 100px">
                    burger bangor enak banget
                  </h4>
                  <img src="{{asset('bangor/img/barboy.png')}}" alt="" class="img-fluid">
                  <h4 class="font-weight-bold m-0">Ngunyahpedia</h4>
                  <h5>Food Blogger</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Testimonial End -->

      <!-- media sosial -->
      <div class="container-xxl medsos">
        <div class="container px-md-5">
          <div
            class=" position-relative text-center mb-5 pb-2 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <img src="{{asset('bangor/img/mediasosial.png')}}" alt="media sosial burger bangor" style="max-width: 350px;">
          </div>
          <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item bg-dark border rounded">
                <div class="d-flex">
                  <div
                    class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                    style="width: 75px"
                  >
                    <a
                      class="btn btn-square text-primary bg-white my-1"
                      href="https://www.facebook.com/p/Burger-Bangor-100070755492590/" target="_blank"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a
                      class="btn btn-square text-primary bg-white my-1"
                      href="https://www.instagram.com/burgerbangor/" target="_blank"
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                  <img
                    class="img-fluid rounded w-75"
                    src="{{asset('bangor/img/bangor.jpg')}}"
                    alt=""
                  />
                </div>
                <div class="px-3 py-2">
                  <h3 class="fw-bold m-0">Burger <br />Bangor</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item bg-dark border rounded">
                <div class="d-flex">
                  <div
                    class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                    style="width: 75px"
                  >
                    <a
                      class="btn btn-square text-primary bg-white my-1"
                      href="https://www.instagram.com/bangorfest/" target="_blank"
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                  <img
                    class="img-fluid rounded w-75"
                    src="{{asset('bangor/img/Bangorfest.jpg')}}"
                    alt=""
                  />
                </div>
                <div class="px-3 py-2">
                  <h5 class="fw-bold m-0">
                    Bangor <br />
                    Fest
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item bg-dark border rounded">
                <div class="d-flex">
                  <div
                    class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5"
                    style="width: 75px"
                  >
                    <a
                      class="btn btn-square text-primary bg-white my-1"
                      href="https://www.instagram.com/bangorgroup/" target="_blank"
                      ><i class="fab fa-instagram"></i
                    ></a>
                    <a class="btn btn-square text-primary bg-white my-1" href=""
                      ><i class="fab fa-linkedin-in"></i
                    ></a>
                  </div>
                  <img
                    class="img-fluid rounded w-75"
                    src="{{asset('bangor/img/Bangorgroup.jpg')}}"
                    alt=""
                  />
                </div>
                <div class="px-3 py-2">
                  <h5 class="fw-bold m-0">
                    Bangor <br />
                    Group
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
@section('script')
<script>

</script>
@endsection
