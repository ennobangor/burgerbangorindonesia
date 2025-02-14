@extends('layouts.front2')
@section('content')
<div class="container-xxl pt-5">
    <marquee class="mt-5 d-flex " scrollamount="10">
    <h3>
        <img src="{{asset('bangor/img/food-truck.png')}}" style="max-width: 100px" />
        THE FASTEST GROWING LOCAL BURGER CHAIN IN INDONESIA - THE FASTEST
        GROWING LOCAL BURGER CHAIN IN INDONESIA - THE FASTEST GROWING LOCAL
        BURGER CHAIN IN INDONESIA - THE FASTEST GROWING LOCAL BURGER CHAIN
        IN INDONESIA - THE FASTEST GROWING LOCAL BURGER CHAIN IN INDONESIA
    </h3></marquee
    >
</div>

<main class="container p-5">
    <div>
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="text-primary-gradient fw-medium">dongeng burger bangor</h5>
            <h1 class="mb-1">Isi Form Dulu Ya!</h1>
        </div>
        <div
            class="col wow fadeInUp"
            data-wow-delay="0.3s"
            style="
            visibility: visible;
            animation-delay: 0.3s;
            animation-name: fadeInUp;
            ">
            <div class="card bg-dark mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-body bg-white">
                <div class="modal-body">
                    <form id="downloadForm" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">No Whatsapp</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>

                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <div class="input-group">
                            <input type="umur" class="form-control" id="umur" name="umur" required>
                            <span class="input-group-text">tahun</span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" id="gender" name="gender" required>
                            <option value="wanita">Wanita</option>

                            <option value="pria">Pria</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <select class="form-select" id="pekerjaan" name="pekerjaan" required>
                            <option value="ibu_rumah_tangga">Ibu Rumah Tangga</option>
                            <option value="wiraswasta">Wiraswasta</option>
                            <option value="pegawai_negeri_sipil">Pegawai Negeri Sipil</option>
                            <option value="karyawan">Karyawan</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>

                    <button id="submitButton" type="button" class="btn btn-primary">
                        <a class="text-dark" href="{{asset('bangor/file/BANGOR-DONGENG.pdf')}}" download> Submit & Download </a></button>
                    </form>
                </div>
            </div>
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
<script>

    $('document').ready(function(e){

        $.ajax({
            url: "{{route('public.data')}}",
            method: 'GET',
            success: function(response){

                let masterhead =  response.master_head;
                let mastercarousel =  response.master_carousel;
                if (masterhead){
                    $('#masthead-title').empty().text(masterhead.title);
                    $('#masthead-subtitle').empty().text(masterhead.subtitle);
                    $('.hero-header').css({
                    'background': `url("{{asset('bangor//img/bg-bottom2.png')}}") no-repeat, url("/storage/${masterhead.image}") no-repeat, linear-gradient(to bottom right, #222222, #000000)`,
                    'background-position': 'center bottom, right 0px top 67%',
                    'margin-bottom': '6rem',
                    'padding': '13rem 0 0 0'
                    });
                }
                if (mastercarousel && mastercarousel.length > 0){
                    $('#carousel_content').empty();
                    mastercarousel.forEach(function(mastercarousel){
                        let carouselItem = `
                        <div class="promo-item rounded p-4 " >
                            <div class="d-flex align-items-center shadow">
                                <img
                                class="img-fluid bg-white rounded flex-shrink-1 p-1 align-items-center"
                                src="/storage/${mastercarousel.image}"/>
                            </div>
                        </div>
                        `;
                        $('#carousel_content').append(carouselItem);
                    });

                }
            }
        });
        $("#submitButton").on('click',function(){
            let postData = new  FormData($("#downloadForm")[0]);
            $.ajax({
                url:"{{route('send.downloadform')}}",
                data:postData,
                type:"POST",
                cache:false,
                contentType:false,
                processData:false,
                beforeSend: function(){
                    $('.spinner').css('display','flex');
                },
                success: function(data) {
                            if(data.success == 1){
                                toastr_success(data.messages);
                                redraw();
                            } else{
                                toastr_success(data.messages);
                            }
                        },
                complete: function(){
                    $('.spinner').css('display','none');
                },
            });
        })
        function toastr_success(msg){
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
            });
            Toast.fire({
            icon: "success",
            title: msg
        });
    }
    function toastr_error(msg){
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
            });
            Toast.fire({
            icon: "error",
            title: msg
        });
        }
    });
</script>
@endsection
