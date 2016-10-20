<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <style type="text/css">
      body {
          background: #f1f3f5;
      }
      @yield('styles')
    </style>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
      @section('header')
      <div class="ui menu">
        <a class="header item" href="{{ url('') }}">
          {{ config('app.name', 'Laravel') }}
        </a>

        <div class="right menu">
          <div class="ui simple dropdown item">
            Tools
            <i class="dropdown icon"></i>
            <div class="menu">
              <a class="item" href="{{ url('adminer') }}">SQL Admin</a>
              <a class="item" href="{{ url('api-tester') }}">API Tester</a>
              <a class="item" href="{{ url('logs') }}">Log viewer</a>
              <a class="item" href="http://semantic-ui.com/examples/theming.html">Semantic UI examples</a>
            </div>
          </div>

          <!-- Authentication Links -->
          @if (Auth::guest())
            <div class="item">
              <a class="ui button" href="{{ url('/login') }}">Log in</a>
            </div>
            <div class="item">
              <a class="ui primary button" href="{{ url('/register') }}">Sign Up</a>
            </div>
          @else
            <div class="ui dropdown item">
              Logged in as <strong>{{ Auth::user()->name }}</strong>
              <i class="dropdown icon"></i>
              <div class="menu">
                <a class="item" href="{{ url('logout') }}">Log out</a>
              </div>
            </div>
          @endif
        </div>
      </div>
      @show

      @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/semantic.js"></script>
    <script type="text/javascript">
     $(document).ready(function(){
       $('.ui.dropdown')
         .dropdown()
       ;
     });
     </script>
</body>
</html>
