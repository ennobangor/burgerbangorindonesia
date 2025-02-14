@extends('app.layouts.front2')
@section('title', 'Menu Burger Bangor')
@section('url', 'https://burgerbangorindonesia.com/menu')
@section('description', content: 'Menu - Burger Bangor indonesia ')
@section('content')
        <!-- menu Start -->
        <div class="container-xxl" id="feature">
            <div class="container py-5 px-lg-5">
                <div
                    class="section-title position-relative text-center my-5 wow fadeInUp"
                    data-wow-delay="0.1s">
                    <h1 style="  visibility: hidden;">Menu Burger Bangor</h1>
                    <img src="{{asset('bangor/img/menubangor.png')}}" style="max-width: 17rem; " alt="menu burger bangor">
                </div>
                    <div class="container my-5">
                        <div class="text-center mb-4">
                            <button class="btn btn-outline-primary filter-button" data-filter="*">Semua</button>
                            <button class="btn btn-outline-primary filter-button" data-filter=".promosi">Promo</button>
                            <button class="btn btn-outline-primary filter-button" data-filter=".ala-carte">Ala Carte</button>
                            <button class="btn btn-outline-primary filter-button" data-filter=".side-dish">Side Dish</button>
                            <button class="btn btn-outline-primary filter-button" data-filter=".drinks">Drinks</button>
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
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Sultan.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Sultan Cheese.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Pitik.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Pitik Cheese.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Pitik Fire.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Fish.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Fish Cheese.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Creamy Garlic.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Creamy Garlic Cheese.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor BBQ Smoked Beef.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/the congor cheese.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor BBQ Smoked Beef Cheese.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Cheese Jr (Small).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Cheese Jr (Large).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Sausage.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Bolognese Sausage.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Cheesy Bolognese Sausage.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/Bangor Cheesy Sausage.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item ala-carte">
                                <img src="{{asset('bangor/img/menu/burgerbangor/A la Carte Ayam.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>

                            <!-- Promo -->
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (1).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (2).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (3).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (4).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (5).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (6).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (7).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (8).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (9).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (10).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (11).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (12).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (13).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (14).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (15).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (16).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (17).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (18).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (19).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (20).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (21).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (22).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (23).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (24).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (25).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (26).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (27).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (28).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (29).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (30).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (31).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (32).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item promosi">
                                <img src="{{asset('bangor/img/menu/promo/promo (33).jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>



                            <!-- Dish-->
                            <div class="col-md-2 menu-item side-dish">
                                <img src="{{asset('bangor/img/menu/side-dish/French Fries.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item side-dish">
                                <img src="{{asset('bangor/img/menu/side-dish/Nachos Fries.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item side-dish">
                                <img src="{{asset('bangor/img/menu/side-dish/Cheesy Fries.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item side-dish">
                                <img src="{{asset('bangor/img/menu/side-dish/Bolognese Fries.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item side-dish">
                                <img src="{{asset('bangor/img/menu/side-dish/Bangor Nugget 6 Pcs.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item side-dish">
                                <img src="{{asset('bangor/img/menu/side-dish/Bangor Nugget 9 Pcs.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item side-dish">
                                <img src="{{asset('bangor/img/menu/side-dish/Combo French Fries with tea .jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item side-dish">
                                <img src="{{asset('bangor/img/menu/side-dish/Sistangor.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>

                            <!-- Drinks -->
                            <div class="col-md-2 menu-item drinks">
                                <img src="{{asset('bangor/img/menu/drink/Lemon Tea.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item drinks">
                                <img src="{{asset('bangor/img/menu/drink/Mineral Water.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item drinks">
                                <img src="{{asset('bangor/img/menu/drink/Softdrink.jpg')}}" style="max-width:300px; " alt="menu burger bangor">
                            </div>
                            <div class="col-md-2 menu-item drinks">
                                <img src="{{asset('bangor/img/menu/drink/Tea.jpg')}}" style="max-width: 300px; " alt="menu burger bangor">
                            </div>

                        </div>
                    </div>
            </div>
        </div>
        <!-- Features End -->
@endsection
@section('script')

@endsection
