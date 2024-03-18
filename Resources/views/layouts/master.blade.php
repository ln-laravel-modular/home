<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Module Home</title>

  {{-- Laravel Mix - CSS File --}}
  {{-- <link rel="stylesheet" href="{{ mix('css/home.css') }}"> --}}
  @stack('styles')
  <!-- Fonts -->
  {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}

  <!-- Styles -->
  <x-styles :props="[
      ['file' => 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap'],
      ['file' => asset('public/app/css/app.css')],
  ]"> </x-styles>
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body class="antialiased">
  @yield('content')

  {{-- Laravel Mix - JS File --}}
  {{-- <script src="{{ mix('js/home.js') }}"></script> --}}
  @stack('scripts')
  <x-scripts :props="[['file' => asset('public/app/js/app.js')]]"></x-scripts>
</body>

</html>
