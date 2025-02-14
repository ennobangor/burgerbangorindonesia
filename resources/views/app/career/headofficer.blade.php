@extends('app.layouts.front2')
@section('title', 'Head Officer Burger Bangor')
@section('url', 'https://burgerbangorindonesia.com/career')
@section('description', content: 'Career - Burger Bangor indonesia ')
@section('content')

    <div class="container-xxl pt-5 ">
        <marquee class="mt-5 text-center" scrollamount="10">
            <h5>
                5 Years Dedicated
                The Unexpected Journey
                >60 Months
                >660 Outlets
                >60 Million Burgers Sold
                >6000 Job Oppotunities
                Relevant. Lead. Remarkable.
            </h5>
        </marquee>
    </div>

    <div class="container-fluid">

        {{-- isi --}}
        <div class="row">
            <div class="col-xl-8 col-lg-7 mb-4">
                <div class="card border shadow">
                    <div class="card-header py-3 flex-row align-items-center justify-content-between">
                        <div class="text-center">
                            <h1 class="h2 mb-0 text-dark ">Head Officer Careers</h1>
                        </div>

                    </div>
                    <div class="card-body p-4">
                        <img src="{{asset('bangor/img/career.png')}}" alt="bangor" class="img-fluid">


                        <p class="text-dark">
                            <strong>Pertumbuhan Bangor Group berasal dari dedikasi, kreativitas, kebangoran, dan semangat team Bangor. Karyawan menjadi aset terpenting bagi kami, Bangor selalu mencari potensi dan bakat terbaik, memberi ruang untuk berkembang dan terukur bagi mahasiswa tingkat akhir, fresh graduate, dan yang sudah memiliki pengalaman kerja. Dengan bekerja sama kita dapat menginspirasi orang lain dengan setiap gigitan Burger Bangor yg kami sajikan dengan rasa syukur.</strong> <br>
                        </p>

                        <div  class="mt-3"">
                            <p class="text-dark">Untuk bergabung menjadi team Bangor, silahkan kirimkan CV Anda ke : <a href="">rekrutmen.burgerbangor@gmail.com</a>
                                <br>
                                WhatsApp : <a href="">0897-9923412</a> <br>
                                Sertakan posisi yang dilamar di subjek e-mail. (Nama_posisi yang dilamar)
                            </p>

                        </div>

                        <p class="text-dark">
                            penempatan di <strong>Kantor HO Burger Bangor Green Lake City, Tangerang.</strong>
                        </p>

                        <div class="text-center mb-2">
                            <strong>POSISI YANG DIBUTUHKAN</strong>
                        </div>
                        <div class="bg-dark pt-3 border rounded">
                            <ul>
                                <li>Intern Event, Design, Bangor care, Business strategy, Client Relations, Digital Marekting</li>
                                <li>General Admin</li>
                                <li>Receptionis</li>
                                <li>⁠Office Boy</li>
                                <li>⁠Kepala kebersihan</li>
                                <li>⁠Field Support</li>
                                <li>Project</li>
                                <li>⁠Internal Audit</li>
                                <li>⁠Ass Manager, Spv & Staff Accounting
                                </li>
                                <li>⁠Technician</li>
                                <li>⁠Purchasing, Inventory</li>
                                <li>Senior LnD</li>
                                <li>HR Recruitment</li>
                                <li>Spv Operasional</li>
                                <li>Spv Site development</li>
                                <li>Ass Manager</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card bg-dark border shadow p-3 fw-semi-bold" style=" font-size: 1.5rem;">
                    <a href="">About Us</a>
                    <div class="card bg-dark shadow fw-semi-bold " style=" font-size: 1rem;">
                        <a class="text-white" href="{{route('headofficer')}}">Head Officer Careers</a>
                        <a class="text-white" href="{{route('retail')}}">Retail Store Careers</a>
                    </div>
                </div>

                <div class="team-item bg-dark border rounded mt-4">
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

  </section>
@endsection

