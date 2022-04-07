@include('layouts.themes.head')
@include('layouts.themes.top-menu')
@include('layouts.themes.left-menu')


  <div class="content-wrapper">
    @yield('content')
  </div>


@include('layouts.themes.right-menu')
@include('layouts.themes.footer')
</div>
<script src="{{asset('themes/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('themes/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('themes/js/adminlte.min.js')}}"></script>
@section('js')
@section('modal')
</body>
</html>
