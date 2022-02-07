<!doctype html>
<html lang="en">
{{-- Head --}}
  @include('culture/culture_list/culture_detail/template/head')

  <body>

    {{-- Navbar --}}
    @include('culture/culture_list/culture_detail/template/navbar')

    @yield('content')

    {{-- Footer --}}
    @include('culture/culture_list/culture_detail/template/footer')

    {{-- Javascript --}}
    @include('culture/culture_list/culture_detail/template/javascript')
  </body>
  </html>
  