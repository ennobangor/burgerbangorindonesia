@extends('app.layouts.front2')
@section('title', 'Store Burger Bangor')
@section('url', 'https://burgerbangorindonesia.com/store')
@section('description', content: 'Store - Burger Bangor indonesia ')
@section('content')
<marquee class="position-relative pt-5 mt-5" scrollamount="10"
        ><h5>
            5 Years Dedicated
            The Unexpected Journey
            >60 Months
>660 Outlets
>60 Million Burgers Sold
>6000 Job Oppotunities
        </h5></marquee
      >

    <section class="outlet mb-5">
        <div class="container px-5">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <img class="img-fluid" src="{{asset('bangor/img/outletbiasa.png')}}"  alt="outlet-burger-bangor">
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h2>GRAB & GO OUTLET</h2>
                                {{-- <p>outlet syukur dengan </p> --}}
                            </div>

                            <p>Buru-buru tapi laper? Berkunjunglah sebentar ke grab & go outlet dari Burger Bangor. Dengan layanan yang terpusat pada sistem takeaway, outlet ini dikhususkan untuk Sobat Bangor yang ingin menikmati kelezatan Burger Bangor secara cepat dan praktis, tanpa perlu mengantri. Kami siap menyajikan burger favorit Anda dalam sekejap.


                            </p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li>Tidak menyediakan banyak meja dan kursi
                                            </li>
                                            <li>menu yang disajikan secara cepat</li>
                                            <li>mengandalkan layanan takeaway</li>
                                            <li>tidak perlu mengantri</li>
                                        </ul>
                                    </div>
                                    {{-- <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Scores:</span>Lorem, ipsum.</li>
                                            <li><span>Rating:</span> Lorem, ipsum.</li>
                                            <li><span>Duration:</span> Lorem, ipsum.p</li>
                                            <li><span>Quality:</span>Lorem, ipsum.</li>
                                            <li><span>Views:</span> Lorem, ipsum.</li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                            {{-- <div class="anime__details__btn">
                                <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> Follow</a>
                                <a href="#" class="watch-btn"><span>See Now</span> <i
                                    class="fa fa-angle-right"></i></a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            <br><hr>
        </div>
    </section>


    <section class="outlet mb-5">
        <div class="container px-5">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <img class="img-fluid" src="{{asset('bangor/img/outletflagship.png')}}"  alt="outlet-burger-bangor">
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h2>FLAGSHIP STORE OUTLET</h2>
                                {{-- <p>outlet syukur dengan </p> --}}
                            </div>

                            <p>Outlet ini diperuntukkan bagi Sobat Bangor yang ingin mampir dan duduk sejenak untuk menikmati kelezatan Burger Bangor. Dilengkapi dengan fasilitas yang nyaman dan koneksi Wi-Fi gratis, setiap sudut dari flagship store outlet Burger Bangor siap menjadi saksi atas momen-momen bersyukur Anda ketika menyantap burger favorit, juga berbagai obrolan hangat mengenai bagaimana Anda bersyukur hari ini.

                            </p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li>Lebih luas dengan area makan yang nyaman
                                            </li>
                                            <li>dilengkapi dengan meja dan kursi yang beragam.</li>
                                            <li>Koneksi internet gratis </li>
                                            <li>memberikan vibes yang menyenangkan dan rasa syukur</li>
                                        </ul>
                                    </div>
                                    {{-- <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Scores:</span>Lorem, ipsum.</li>
                                            <li><span>Rating:</span> Lorem, ipsum.</li>
                                            <li><span>Duration:</span> Lorem, ipsum.p</li>
                                            <li><span>Quality:</span>Lorem, ipsum.</li>
                                            <li><span>Views:</span> Lorem, ipsum.</li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                            {{-- <div class="anime__details__btn">
                                <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> Follow</a>
                                <a href="#" class="watch-btn"><span>See Now</span> <i
                                    class="fa fa-angle-right"></i></a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            <br><hr>
        </div>
    </section>



      {{-- <!-- Maps Start -->
      <div class="container-xxl maps" >
        <div class="main-content rounded wow fadeInUp" data-wow-delay="0.5s">
            <div class="contact-page-map text-center">
                <iframe src="https://www.google.com/maps/d/embed?mid=13UmbEmEOra-6_2kPORiSre_kXyTp9kM&ehbc=2E312F"></iframe>
            </div>
        </div>
      </div>
      <!-- About End --> --}}

@endsection
@section('script')

@endsection
