@extends('app.layouts.front2')
@section('title', 'Contact Burger Bangor')
@section('url', 'https://burgerbangorindonesia.com/contact')
@section('description', content: 'Contact - Burger Bangor indonesia ')
@section('content')
<div class="container-xxl pt-5">
    <marquee class="mt-5" scrollamount="10">
    <h3>
        THE FASTEST GROWING LOCAL BURGER CHAIN IN INDONESIA - THE FASTEST
        GROWING LOCAL BURGER CHAIN IN INDONESIA - THE FASTEST GROWING LOCAL
        BURGER CHAIN IN INDONESIA - THE FASTEST GROWING LOCAL BURGER CHAIN
        IN INDONESIA - THE FASTEST GROWING LOCAL BURGER CHAIN IN INDONESIA
    </h3></marquee
    >
</div>

<main class="container p-5">
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div
        class="col wow fadeInUp"
        data-wow-delay="0.3s"
        style="
          visibility: visible;
          animation-delay: 0.3s;
          animation-name: fadeInUp;
        "
      >
        <div class="card bg-dark mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 border-primary">
            <h4 class="my-0 fw-normal">Partnership</h4>
          </div>
          <div class="card-body">
            <img src="{{asset('bangor/img/partnership.png')}}" style="max-width: 200px" />
            <h1>KEMITRAAN</h1>
            <p>
              Sejak tahun 2019 sampai 2024 dengan membuka 500+ outlet di
              Indonesia. Kami mengundang Anda untuk menjajaki peluang
              kemitraan bersama kami.
            </p>
            <button
              type="button"
              class="w-100 btn btn-lg btn-outline-secondary"
            >
              <a href="https://wa.me/6287760285078" target="_blank">contact us</a>
            </button>
          </div>
        </div>
      </div>
      <div
        class="col wow fadeInUp"
        data-wow-delay="0.5s"
        style="
          visibility: visible;
          animation-delay: 0.5s;
          animation-name: fadeInUp;
        "
      >
        <div class="card bg-dark mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 border-primary">
            <h4 class="my-0 fw-normal">Sponsorship &amp; Big Order</h4>
          </div>
          <div class="card-body">
            <img src="{{asset('bangor/img/bigorder.png')}}" style="max-width: 135px" />
            <h1>BIG ORDER</h1>
            <p>
              Kami menerima sponsorship dan pemesanan berskala besar.kami
              merekomendasikan anda burger bangor sebagai hidangan yang
              nikmat di acara kamu.
            </p>
            <button
              type="button"
              class="w-100 btn btn-lg btn-outline-secondary"
            >
              <a href="https://wa.me/6281318752885" target="_blank">contact us</a>
            </button>
          </div>
        </div>
      </div>
      <div
        class="col wow fadeInUp"
        data-wow-delay="0.7s"
        style="
          visibility: visible;
          animation-delay: 0.7s;
          animation-name: fadeInUp;
        "
      >
        <div class="card bg-dark mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 border-primary">
            <h4 class="my-0 fw-normal">Bangor Care</h4>
          </div>
          <div class="card-body">
            <img src="{{asset('bangor/img/partnership.png')}}" style="max-width: 200px" />
            <h1>BANGOR CARE</h1>
            <p>
              selalu siap melayani Anda dengan sepenuh hati! dan membantu
              Anda menikmati Burger Bangor. Hubungi kami kapan saja, kami
              siap membantu!
            </p>
            <button
              type="button"
              class="w-100 btn btn-lg btn-outline-secondary"
            >
              <a href="https://wa.me/628569018937" target="_blank">contact us</a>
            </button>
          </div>
        </div>
      </div>
    </div>

     <!-- Contact Start -->
     <div class="container-xxl py-5" id="contact">
        <div class="container py-5 px-lg-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="text-primary-gradient fw-medium">Contact Us</h5>
                <h1 class="mb-1">Get In Touch!</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <p class="text-center mb-4">Ada pertanyaan atau ingin memberikan masukan? Jangan ragu untuk menghubungi kami!</a>.</p>
                        <form id="contactForm" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required >
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required >
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your Phone"  required >
                                        <label for="phone">Phone</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" required style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary-gradient rounded-pill py-3 px-5" id="submitButton" type="button">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
  </main>



  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"
    ><i class="bi bi-arrow-up text-white"></i
  ></a>
@endsection
@section('script')

@endsection
