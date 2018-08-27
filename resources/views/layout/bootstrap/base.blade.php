<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="/img/logo.png">

    <link
      rel="stylesheet"
      type="text/css"
      href="/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>{{ config('app.name') }}</title>
    <style>
      body {
        padding-bottom: 64px;
      }
      .footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        text-align: center;
        padding: 16px;
        background: white;
        border-top: 1px solid rgba(0, 0, 0, .5);
      }
    </style>
    @yield('head')
  </head>
  <body>
    @yield('content')

    <div class="footer">
      <a href="{{ url('/') }}">
        &copy; {{ config('app.name') }}
      </a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    @yield('body')
  </body>
</html>