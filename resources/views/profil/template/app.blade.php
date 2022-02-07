<!doctype html>
<html lang="en">
{{-- Head --}}
  @include('/profil/template/head')

  <body>

    {{-- Navbar --}}
    @include('/profil/template/navbar')

    @yield('content')

    {{-- Footer --}}
    @include('/profil/template/footer')

    {{-- Javascript --}}
    @include('/profil/template/javascript')
  </body>
  </html>
  