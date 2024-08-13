<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{url('css/app.css')}}">
  <title>{{ $heading }}</title>
</head>
<body>
  <header>
    <a href="/"><img class="logo" src="{{url('resources/images/mainlogo.png')}}" alt="logo"></a>
    <div class="nav-container">
      <nav class="topNavBar">
        <ul class="nav_links">
          <x-nav-link href="/about">About</x-nav-link>
          <x-nav-link href="/resources">Resources</x-nav-link>
          <x-nav-link href="/contact">Contact</x-nav-link>
        </ul>
      </nav>
      <a class="cta" href="resources"><button>Need Support?</button></a>
    </div>
  </header>
  <div class="container">
    <div class="main">
      {{ $slot }}
    </div>
  </div>
</body>
</html>