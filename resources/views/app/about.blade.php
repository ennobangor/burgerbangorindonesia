@extends('app.layouts.front2')
@section('title', 'About Burger Bangor')
@section('url', 'https://burgerbangorindonesia.com/about')
@section('description', content: 'About - Burger Bangor indonesia ')
@section('content')
    <div class="container-xxl pt-5">
        <marquee class="mt-5" scrollamount="10">
        <h5>THE FASTEST GROWING LOCAL BURGER CHAIN IN INDONESIA - THE FASTEST
            GROWING LOCAL BURGER CHAIN IN INDONESIA - THE FASTEST GROWING LOCAL
            BURGER CHAIN IN INDONESIA - THE FASTEST GROWING LOCAL BURGER CHAIN IN
            INDONESIA - THE FASTEST GROWING LOCAL BURGER CHAIN IN INDONESIA</h5>
        </marquee>
    </div>
    <!-- story Start -->
    <div class="container-xxl" id="story ">
        <div class="container py-5 px-lg-5">
          <div class="row align-items-center">
            <div
              class="col-lg-5 animated slideInDown">
            >
              <img class="img-fluid" src="{{asset('bangor/img/densu.png')}}" alt="densu burger bangor">
            </div>
              <div
              class=" position-relative col-lg-7 wow fadeInUp"
              data-wow-delay="0.4s"
            >
              <img src="{{asset('bangor/img/tentangkami.png')}}" alt="Tentang Kami" style="max-width: 300px;">
              <p class="mb-4">
                <br>Berawal dari sebatas ide kecil yang tercetus di tengah obrolan senja unfaedah di pojok warung kopi, Burger Bangor hadir sebagai usaha makanan yang kami harapkan bisa menopang hidup anak cucu cicit sejak tahun 2019.
                <br>
                <br>Di tengah hiruk pikuk dunia dan segala ekspektasinya, kami percaya tiap-tiap cerita yang terjadi hari ini berhak untuk dirayakan dan disyukuri. Maka dari itu, Burger Bangor berdedikasi untuk menghidangkan rasa syukur melalui setiap gigitan burger bercita rasa lezat dan berkualitas tinggi.
                <br>
                <br>Bagi kami, sensasi untuk bisa menikmati kelezatan Burger Bangor bukan tergantung dari rasa, harga, selera, gaya hidup, status sosial, maupun level stress Anda, tapi lebih kepada bagaimana Anda bersyukur hari ini.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- story 2 Start -->
      <div class="container-xxl" id="story ">
        <div class="container py-5 px-lg-5">
          <div class="row align-items-center">

            <div
              class="section-title position-relative col-lg-4 wow fadeInUp"
              data-wow-delay="0.3s"
            >
            <img class="img-fluid" src="{{asset('bangor/img/cariburger.png')}}" alt="cari burger?">
              <p class="mb-4">
                Burger Bangor adalah wujud terbaik dari burger berkualitas yang bisa Anda impikan. Dengan cita rasa yang menggugah selera, harga terjangkau mulai dari 13 ribuan, dan varian yang beragam, kami siap mengubah trajektori hidup Anda melalui setiap gigitan burger. Ingat, yang lebih mahal belum tentu lebih enak!
              </p>

            </div>

            <div
              class="col-lg-4 wow fadeInUp"
              data-wow-delay="0.5s"
            >
              <img class="img-fluid" src="{{asset('bangor/img/about2.png')}}" alt="makan burger bangorS">
            </div>

            <div
              class="section-title position-relative col-lg-4 wow fadeInUp"
              data-wow-delay="0.2s"
            >
            <img class="img-fluid" src="{{asset('bangor/img/citarasa.png')}}" alt="cita rasa burger bangor">
              <p class="mb-4">
                Setiap menu di Burger Bangor memiliki cita rasa yang benar-benar gawat. Bukan hanya perpaduan antara roti, daging, sayur, dan saus buatan sendiri, tapi burger keju Indonesia bercita rasa khas Bangor dengan bahan baku 100% premium beef yang juga halal dan rendah lemak. Burger Bangor juga memiliki ragam varian yang kaya rasa, mulai dari Jelata, Juragan, Ningrat hingga Sultan. Sebaiknya tidak diwakilkan, rasakan sendiri kenikmatannya!
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- About Start -->
      <div class="container-xxl py-5" id="about">
        <div class="container py-5 px-lg-5">
          <div class="row align-items-center">

            <div
              class="section-title position-relative col-lg-6 wow fadeInUp"
              data-wow-delay="0.3s"
            >
            <img class="img-fluid" src="{{asset('bangor/img/jingleburgerbangor.png')}}" alt="jingle burger bangor">
              <p class="mb-4">
                Jingle Burger Bangor adalah sebuah lagu ceria yang akan membuat Anda langsung teringat akan kelezatan burgernya. Dengan lirik yang mudah diingat dan melodi yang catchy, jingle ini berhasil menciptakan kesan yang positif dan menggugah selera. Setiap kali mendengar jingle ini, Anda pasti akan langsung terbayang akan burger yang juicy, lembut, dan penuh dengan rasa.
              </p>
            </div>

            <div class="col-lg wow fadeIn" data-wow-delay="0.5s">
              <div class="embed-responsive embed-responsive-3by4">
                <iframe
                  class="embed-responsive-item col-12 my-3"
                  src="https://www.youtube.com/embed/TK0FdE66D3s?si=ODukuDvrtjS7Bv7T"
                  style="min-height: 400px"
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- About End -->

      <!-- Process Start -->
      <div class="container-xxl">
        <div class="container py-5 px-lg-5">
          <div
            class=" position-relative text-center wow fadeInUp"
            data-wow-delay="0.1s"
          >
          <img class="img-fluid" src="{{asset('bangor/img/prestasikami.png')}}" alt="prestasi kami burger bangor"
          style="max-width: 500px ">
          </div>
          <div class="row gy-5 gx-4 mt-5 justify-content-center">
            <div
              class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="prestasi-item position-relative rounded pt-5 pb-4 px-4">
                <div
                  class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                  style="width: 100px; height: 100px"
                >
                  <i class="fa fa-check fa-3x text-white"></i>
                </div>
                <h5 class="mt-4 mb-3">
                  NO #1 Local Burger Company in Indonesia
                </h5>
              </div>
            </div>
            <div
              class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp"
              data-wow-delay="0.3s"
            >
              <div class="prestasi-item position-relative rounded pt-5 pb-4 px-4">
                <div
                  class="d-inline-flex align-items-center justify-content-center bg-secondary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                  style="width: 100px; height: 100px"
                >
                  <i class="fa fa-check fa-3x text-white"></i>
                </div>
                <h5 class="mt-4 mb-3">
                    Rekor MURI Burger Lokal dengan Gerai Terbanyak
                </h5>

              </div>
            </div>
            <div
              class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp"
              data-wow-delay="0.5s"
            >
              <div class="prestasi-item position-relative rounded pt-5 pb-4 px-4">
                <div
                  class="d-inline-flex align-items-center justify-content-center bg-primary-gradient rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                  style="width: 100px; height: 100px"
                >
                  <i class="fa fa-check fa-3x text-white"></i>
                </div>
                <h5 class="mt-4 mb-3">Rekor Muri Sajian Burger Terbanyak</h5>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Process Start -->

      <!-- halal Start -->
      <div class="container-xxl p-5" id="about">
        <div class="container bg-primary border rounded py-5 px-lg-5">
          <div class="row align-items-center">

            <div
              class="position-relative col-lg-6 fadeInUp"
              data-wow-delay="0.1s"
            >
            <img class="img-fluid halal" src="{{asset('bangor/img/tersertifikasihalal.png')}}" alt="tersertfikasi halal burger bangor">

            </div>
            <div
              class="position-relative col-lg-6 fadeInUp"
              data-wow-delay="0.1s"
            >

              <p class="mb-4">
                Burger Bangor tersertifikasi Halal oleh MUI dengan nomor ID31210020427500824.Burger Bangor berkomitmen untuk menyajikan makanan halal yang lezat dan bergizi. Kami menggunakan bahan-bahan terbaik dan proses pengolahan yang higienis untuk memastikan setiap produk kami aman dikonsumsi oleh semua kalangan.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- About End -->

      <!-- maps-->
      <div class="container text-center">
        <img class="img-fluid" src="{{asset('bangor/img/headoffice.png')}}" alt="HEAD OFFICE burger bangor"
          style="max-width: 500px ">

        <div class="main-content rounded wow fadeInUp" data-wow-delay="0.5s">
          <div class="contact-page-map" >
            <iframe
              id="gmap_canvas"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7933.03543694271!2d106.6981764812294!3d-6.195212730003386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9ce1f5fdfdf%3A0xc8da15a23aaac275!2sBANGOR%20HEAD%20QUARTERS!5e0!3m2!1sen!2sid!4v1728630421058!5m2!1sen!2sid"
              frameborder="100"
              scrolling="no"
              marginheight="100px"
              marginwidth="100px"
            ></iframe>
          </div>
          <!-- map -->
        </div>
        <!-- main-content -->
      </div>
@endsection
{{-- @section('script')
<script>

</script>
@endsection --}}
