@extends('app.layouts.front2')
@section('title', 'Bangor Berbagi Burger Bangor')
@section('url', 'https://burgerbangorindonesia.com/bigorder')
@section('description', content: 'Bangor Berbagi  - Burger Bangor indonesia ')
@section('content')


  <main class="container p-5">
    <div class="container-xxl pt-5">
        <div class="container">
            <img src="{{asset('bangor/img/bangor-berbagi.png')}}" alt="bangor-berbagi" class="img-fluid">
            <div class="text-center">
                <h1>BANGOR BERBAGI</h1>
            </div>
            <div>
                <p>Burger Bangor menyelenggarakan kegiatan bangor berbagi di berbagai tempat seperti panti asuhan, yayasan disabilitas, panti jompo dan rumah yatim. Kegiatan ini bertujuan untuk memberikan bantuan kepada mereka yang membutuhkan seperti sembako, alat tulis dan kebutuhan pokok lainnya. Melalui kegiatan ini, kami tidak hanya sekadar datang dan memberikan bantuan, namun kami hadir untuk terlibat, bermain, dan mendengarkan cerita-cerita mereka yang begitu bermakna.

                    Bagi kami, Bangor Berbagi bukan sekadar program sosial yang dijadwalkan secara rutin, tetapi sebuah gerakan kepedulian yang melekat dalam visi kami. Kami berharap kegiatan ini bisa menginspirasi lebih banyak pihak untuk ikut berbagi dan peduli.

                    Komitmen kami untuk terus berbagi juga merupakan bagian misi kami untuk menciptakan masyarakat yang saling mendukung dan peduli satu sama lain. Setiap langkah yang kami ambil dalam program Bangor Berbagi diharapkan dapat memberikan keceriaan dan harapan baru bagi mereka yang kami temui.
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
