<!doctype html>
<html lang="en">
{{-- Head --}}
  @include('/culture/culture_list/template/head')

  <body>

    {{-- Navbar --}}
    @include('/culture/culture_list/template/navbar')

    @yield('content')

    {{-- Footer --}}
    @include('/culture/culture_list/template/footer')

    {{-- Javascript --}}
    @include('/culture/culture_list/template/javascript')
  </body>
</html>
  