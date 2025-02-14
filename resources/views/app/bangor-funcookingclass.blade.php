@extends('app.layouts.front2')
@section('title', 'Bangor Fun Cooking Class Burger Bangor')
@section('url', 'https://burgerbangorindonesia.com/bigorder')
@section('description', content: 'Bangor Fun Cooking Class - Burger Bangor indonesia ')
@section('content')


  <main class="container p-5">
    <div class="container-xxl pt-5">
        <div class="container">
            <img src="{{asset('bangor/img/bangor-fun-cooking-class.png')}}" alt="bangor-fun-cooking-class" class="img-fluid">

            <div class="text-center">
                <h1>BANGOR FUN COOKING CLASS</h1>
            </div>
            <div>
                <p>Burger Bangor mengadakan kegiatan seru untuk anak-anak, yaitu Fun Cooking Class! Di sini, si kecil bisa belajar cara membuat burger mereka sendiri dengan cara yang menyenangkan. Mereka akan diperkenalkan pada berbagai bahan burger, . Setelah memahami bahan-bahan tersebut, anak-anak juga akan diajari teknik plating burger yang menarik,

                    Tidak hanya itu, akan ada sesi mewarnai yang menyenangkan, di mana anak-anak bisa berkreasi dan mengekspresikan kreativitas mereka dengan gambar-gambar burger.

                    Kegiatan Fun Cooking Class bertujuan untuk memberikan pengalaman belajar yang menyenangkan sambil mengembangkan keterampilan si kecil untuk belajar menyajikan makanan, Selain itu, kegiatan ini juga mendorong anak-anak untuk berkreasi dan mengekspresikan kreativitas mereka.
                    </p>
            </div>
        </div>
    </div>

  </main>



  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"
    ><i class="bi bi-arrow-up text-white"></i
  ></a>
@endsection
@section('script')

@endsection
