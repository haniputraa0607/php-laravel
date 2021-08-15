<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        @component('layouts.navbar')
            
        @endcomponent
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script>
        function preview(){
          const sampul = document.querySelector('#company_logo');
          console.log(sampul);
          const sampulLabel = document.querySelector('.custom-file-label');
          const imgPrev = document.querySelector('.img-preview');
          sampulLabel.textContent = sampul.files[0].name;
          const filesampul = new FileReader();
          filesampul.readAsDataURL(sampul.files[0]);
          filesampul.onload = function(e){
            imgPrev.src = e.target.result;
          }
        }
    </script>
</body>
</html>
