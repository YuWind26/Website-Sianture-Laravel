<!doctype html>
<html lang="en">
{{-- Head --}}
  @include('/home/template/head')

  <body>

    {{-- Navbar --}}
    @include('/home/template/navbar')

    {{-- Content --}}

    @yield('content')

    {{-- Footer --}}
    @include('/home/template/footer')

    {{-- Javascript --}}
    @include('/home/template/javascript')
  </body>
</html>
  