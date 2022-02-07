<!doctype html>
<html lang="en">
{{-- Head --}}
  @include('/contact/template/head')

  <body>

    {{-- Navbar --}}
    @include('/contact/template/navbar')

    @yield('content')

    {{-- Footer --}}
    @include('/contact/template/footer')

    {{-- Javascript --}}
    @include('/contact/template/javascript')
  </body>
  </html>
  