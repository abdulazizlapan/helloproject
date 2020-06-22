<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title', 'Stisla Laravel') &mdash; {{ env('APP_NAME') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/modules/codemirror/lib/codemirror.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/modules/codemirror/theme/duotone-dark.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css')}}">
  @yield('css')

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        @include('admin.partials.topnav')
      </nav>
      <div class="main-sidebar">
        @include('admin.partials.sidebar')
      </div>

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>
      <footer class="main-footer">
        @include('admin.partials.footer')
      </footer>
    </div>
  </div>


  <!-- General JS Scripts -->

  <script src="{{ asset('assets//modules/jquery.min.js')}}"></script>
  <script src="{{ asset('assets//modules/popper.js')}}"></script>
  <script src="{{ asset('assets//modules/tooltip.js')}}"></script>
  <script src="{{ asset('assets//modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets//modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{ asset('assets//modules/moment.min.js')}}"></script>
  <script src="{{ asset('assets//js/stisla.js')}}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('assets//modules/summernote/summernote-bs4.js')}}"></script>
  <script src="{{ asset('assets//modules/codemirror/lib/codemirror.js')}}"></script>
  <script src="{{ asset('assets//modules/codemirror/mode/javascript/javascript.js')}}"></script>
  <script src="{{ asset('assets//modules/jquery-selectric/jquery.selectric.min.js')}}"></script>

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="{{ asset('assets//js/scripts.js')}}"></script>
  <script src="{{ asset('assets//js/custom.js')}}"></script>
  <script src="{{ route('js.dynamic') }}"></script>
  <script src="{{ asset('js/app.js') }}?{{ uniqid() }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('assets/js/stisla.js') }}"></script>
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  @yield('scripts')
</body>
</html>
