<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('bangor/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('bangor/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('bangor/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('bangor/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('bangor/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<script
  src="https://static.elfsight.com/platform/platform.js"
  async
></script>


<!-- Template Javascript -->
<script src="{{asset('bangor/js/main.js')}}"></script>
<script src="{{asset('bangor/js/menu.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MNR15WF5BZ">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MNR15WF5BZ');
</script>

<script>
    $(function () {
      $('#myList a:last-child').tab('show')
    })
  </script>

<script>
     const audio = document.getElementById('audioPlayer');
        const button = document.getElementById('soundToggleBtn');

        // Memulai audio dalam mode mute
        audio.muted = true;
        audio.play();

        // Fungsi untuk mengaktifkan/mematikan suara
        function toggleSound() {
            audio.muted = !audio.muted;
            button.innerHTML = audio.muted ? '<i class="fa fa-volume-up"></i>' : '<i class="fa fa-volume-mute"></i>';
        }
</script>
