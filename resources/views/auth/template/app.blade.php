<!doctype html>
<html lang="en">
{{-- Head --}}
  @include('/auth/template/head')

  <body>

    {{-- Navbar --}}
    @include('/auth/template/navbar')

    {{-- Content --}}

    @yield('content')

    {{-- Footer --}}
    @include('/auth/template/footer')

    {{-- Javascript --}}
    @include('/auth/template/javascript')
  </body>
</html>
  