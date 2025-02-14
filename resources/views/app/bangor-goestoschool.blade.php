@extends('app.layouts.front2')
@section('title', 'Bangor goes to school Burger Bangor')
@section('url', 'https://burgerbangorindonesia.com/bigorder')
@section('description', content: 'Bangor goes to school - Burger Bangor indonesia ')
@section('content')


  <main class="container p-5">
    <div class="container-xxl pt-5">
        <div class="container">
            <img src="{{asset('bangor/img/bangor-gts.png')}}" alt="bangor-goes-to-shool" class="img-fluid">
            <div class="text-center">
                <h1>BANGOR GOES TO SCHOOL X BERTANDING</h1>
            </div>
            <div>
                <p>Bangor Goes to School adalah kegiatan yang dirancang khusus untuk memperkenalkan Burger Bangor kepada generasi muda di seluruh Indonesia. Melalui kunjungan langsung ke sekolah-sekolah dari tingkat SD, SMP, SMA, hingga pesantren dan kampus. Tujuan kami dalam kegiatan ini yaitu agar Burger Bangor dapat dikenal oleh setiap orang khususnya anak-anak dan remaja Indonesia.

                    Program ini juga dilengkapi dengan berbagai serangkaian kegiatan Bangor Bertanding seperti tarik tambang, balap karung, dan berbagai permainan lainnya yang menjadi daya tarik tersendiri di setiap kunjungan kami. Setiap lomba ini menghadirkan keceriaan yang mengundang tawa dan semangat kebersamaan

                    Melalui kegiatan Bangor Goes to School kami berharap dapat membuat Burger Bangor semakin dikenal luas dan menjadi pilihan utama di hati masyarakat Indonesia. Selain itu, kami berkomitmen untuk terus berinovasi dan menghadirkan pengalaman menyenangkan agar Burger Bangor tidak hanya dikenal sebagai produk lokal yang enak, tetapi juga dapat membawa keceriaan di setiap kunjungannya.

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
