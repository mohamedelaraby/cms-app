<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <!-- Latest compiled and minified CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          --}}

          {{-- Local style sheets --}}
          <link rel="stylesheet" href="{{url('/node_modules/bootstrap/dist/css/bootstrap.min.css')}}">
          <link rel="stylesheet" href="{{url('/css/app.css')}}">

    <title> @yield('title','Dummy')</title>
    </head>
    <body>

        @include ('inc.navbar')

        <div class="container">


        @include('inc.messages')

        @yield('content')

       </div>







       {{-- <script src="//cdn.ckeditor.com/4.5.7/full/ckeditor.js"></script> --}}
    <script src="{{url('/node_modules/jquery/dist/jquery.min.js')}}"></script>
<script src="{{url('/node_modules/popper.js/dist/popper.min.js')}}"></script>
<script src="{{url('/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</body>
</html>

