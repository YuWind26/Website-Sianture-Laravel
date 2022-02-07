<!doctype html>
<html lang="en">
{{-- Head --}}
  @include('/culture/template/head')

  <body>

    {{-- Navbar --}}
    @include('/culture/template/navbar')

    @yield('content')

    {{-- Footer --}}
    @include('/culture/template/footer')

    {{-- Javascript --}}
    @include('/culture/template/javascript')
  </body>
  </html>
  