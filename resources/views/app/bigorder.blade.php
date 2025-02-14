@extends('app.layouts.front2')
@section('title', 'Bigorder Us Burger Bangor')
@section('url', 'https://burgerbangorindonesia.com/bigorder')
@section('description', content: 'Big Order - Burger Bangor indonesia ')
@section('content')
<div class="container-xxl pt-5 ">
    <marquee class="mt-5 text-center" scrollamount="10">
        <h5>
            THE FASTEST GROWING LOCAL BURGER CHAIN IN INDONESIA - THE FASTEST
            GROWING LOCAL BURGER CHAIN IN INDONESIA - THE FASTEST GROWING LOCAL
            BURGER CHAIN IN INDONESIA - THE FASTEST GROWING LOCAL BURGER CHAIN
            IN INDONESIA - THE FASTEST GROWING LOCAL BURGER CHAIN IN INDONESIA
        </h5>
    </marquee>
</div>

    <header >
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">BANGOR BIG ORDER</h1>
                                <p class="lead text-white-60 mb-4">Burger Bangor melayani pesanan dalam jumlah besar untuk memeriahkan momen spesial Anda. Kami siap menghidangkan rasa syukur melalui varian menu Burger Bangor yang menggugah selera di semua perayaan penting Anda, mulai dari pesta ulang tahun, gathering, seminar, acara pernikahan hingga acara khitanan. Jadikan acara istimewa Anda lebih sempurna dengan layanan Big Order yang praktis dan cepat dari Burger Bangor.
                                </p>

                                {{-- <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{asset('bangor/img/bigordermenu.png')}}" alt="..."></div>
                    </div>
                </div>


    </header>

    <main class="container p-5">
        <div class="row mb-3">
            <div
                class="col wow fadeInUp"
                data-wow-delay="0.5s"
                style="
                visibility: visible;
                animation-delay: 0.5s;
                animation-name: fadeInUp;
                ">
                <div class="card bg-dark mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-body">
                        <div class="text-center">
                            <img  src="{{asset('bangor/img/bigorder.png')}}" style="max-width: 100px" />
                            <h1 class="text-center">BIG ORDER</h1>
                        </div>
                                    <ul>
                                        <li>Min order 50pcs</li>
                                        <li>Pengiriman dari outlet terdekat</li>
                                        <li>Packaging box</li>
                                        <li>Pengiriman pakai Gosend</li>
                                        <li>Dikenakan ongkir sesuai alamat yang dituju</li>

                                    </ul>

                        <button
                        type="button"
                        class="w-100 btn btn-lg btn-outline-secondary"
                        >
                        <a href="https://api.whatsapp.com/send?phone=6281318752885&text=Halo%20kak!%20saya%20ingin%20memesan%20big%20order%20burger%20bangornya%20dong!" target="_blank">contact us</a>
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
                ">
                <div class="card bg-dark mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-body">
                        <div class="text-center">
                            <img  src="{{asset('bangor/img/bigorder.png')}}" style="max-width: 100px" />
                            <h1 class="text-center">BOOTH</h1>
                        </div>
                                    <ul>
                                        <li>Include Booth portable, Man power dan Microwave</li>
                                        <li>Free ongkir untuk JaBoDeTaBek</li>
                                        <li>Min order 3 juta</li>
                                        <li>Burger ready to serve</li>
                                        <li>Maks 3 menu</li>
                                    </ul>

                        <button
                        type="button"
                        class="w-100 btn btn-lg btn-outline-secondary">
                        <a href="https://api.whatsapp.com/send?phone=6281318752885&text=Halo%20kak!%20saya%20ingin%20memesan%20big%20order%20booth%20burger%20bangornya%20dong!" target="_blank">contact us</a>
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
                ">
                <div class="card bg-dark mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-body">
                        <div class="text-center">
                            <img  src="{{asset('bangor/img/bigorder.png')}}" style="max-width: 100px" />
                            <h1 class="text-center" style="font-size: 43px;">MOBILE VAN</h1>
                        </div>
                                    <ul>
                                        <li>Include van dan Man power</li>
                                        <li>Free ongkir untuk JaBoDeTaBek</li>
                                        <li>Min order 3 juta</li>
                                        <li>Tersedia untuk memasak di lokasi acara</li>
                                        <li>Maks 3 menu</li>
                                    </ul>

                        <button
                        type="button"
                        class="w-100 btn btn-lg btn-outline-secondary"
                        >
                        <a href="https://api.whatsapp.com/send?phone=6281318752885&text=Halo%20kak!%20saya%20ingin%20memesan%20big%20order%20mobile%20van%20burger%20bangornya%20dong!" target="_blank">contact us</a>
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
                ">
                <div class="card bg-dark mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-body">
                        <div class="text-center">
                            <img  src="{{asset('bangor/img/bigorder.png')}}" style="max-width: 100px" />
                            <h1 class="text-center" style="font-size: 40px;">FOOD TRUCK</h1>
                        </div>
                            <ul>
                                <li>Include food truck dan Man power</li>
                                <li>Free ongkir untuk JaBoDeTaBek</li>
                                <li>Min order 5 juta</li>
                                <li>Tersedia untuk memasak di lokasi acara</li>
                                <li>Maks 3 menu</li>
                            </ul>
                        <button
                        type="button"
                        class="w-100 btn btn-lg btn-outline-secondary"
                        >
                        <a href="https://api.whatsapp.com/send?phone=6281318752885&text=Halo%20kak!%20saya%20ingin%20memesan%20big%20order%20food%20truck%20burger%20bangornya%20dong!" target="_blank">contact us</a>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card bg-white my-5 py-4 ">
                <div class="card-body">
                    <h2 class="text-dark text-center">Ketentuan Diskon</h2>
                    <div class="row diskon">
                        <div class="col-md-6 ">
                            <ul>
                                <li class="text-dark">50 - 100 pcs Diskon 5%</li>
                                <li class="text-dark">101 - 250 pcs Diskon 7%</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li class="text-dark">251 - 450 pcs Diskon 8%</li>
                                <li class="text-dark">lebih dari 450 pcs Diskon 10%</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>

<div class="container-xxl text-center">
    <div class="bg-dark border p-3">
      <h1>Tata Cara Pemesanan</h1>
      <h3>step 1</h3>
      <p class="text-center">
        Customer menghubungi nomor berikut <a href="https://api.whatsapp.com/send?phone=6281318752885&text=Halo%20kak!%20saya%20ingin%20memesan%20big%20order%20burger%20bangornya%20dong!" target="_blank">0813-1875-2885<!--
        --></a>
        </p><a href="https://wa.me/6281318752885"> </a>
        <h3>step 2</h3>
        <p class="text-center">Pengisian format order FOOD TRUCK atau BIG ORDER</p>
      <h3>step 3</h3>
      <p class="text-center">
        Customer melakukan pembayaran dan memberikan bukti ke whatsapp
        customee service
      </p>
      <h3>step 4</h3>
      <p class="text-center">Invoice akan dikirim melalui whatsapp</p>
      <h3>step 5</h3>
      <p class="text-center">
        Pesanan diantar ke alamat tujuan sesuai dengan tanggal &amp; waktu yang
        sudah ditulis melalui format order
      </p>
   </div>
</div>





@endsection
