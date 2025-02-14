<!DOCTYPE html>
<html lang="en">
  <head>
    @include('app.attachment.header')
    @include('app.attachment.style')
  </head>

  <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KGH3DZ8C"
        height="0" width="0" style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->


        <!-- Spinner Start -->
        <div
            id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div
            class="spinner-grow text-primary"
            style="width: 3rem; height: 3rem"
            role="status">
            <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

      <!-- Navbar & Hero Start -->
      @include('app.attachment.navbar-2')
      <!-- Navbar & Hero End -->
      @yield('content')

      <!-- Footer Start -->
      @include('app.attachment.footer')
      <!-- Footer End -->


      <!-- Back to Top -->
      <a href="https://wa.me/628569018937" target="_blank" class="btn btn-md back-to-top text-white pt-2"
        ><i class="bi bi-whatsapp"></i> Hubungi Bangor Care!</a>

    @include('app.attachment.script')
    @yield('script')
  </body>
</html>
