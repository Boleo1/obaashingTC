<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('resources/css/app.css')}}">
  <title>{{ $heading }}</title>
</head>
<body>
  <header>
    <div id="navHeader">
    <a href="/"><img class="logo" id="logo" src="{{asset('resources/images/obaashingTClogoText.png')}}" alt="logo"></a>
    <div class="nav-buttons" id="nav-buttons">
      <nav class="topNavBar" id="topNav">
        <ul class="nav_links">
          <x-nav-link href="/about">About</x-nav-link>
          <x-nav-link href="/information">Information</x-nav-link>
          <x-nav-link href="/contact">Contact</x-nav-link>
        </ul>
      </nav>
      <a class="cta" href="resources"><button>Need Support?</button></a>
    </div>
    </div>
  </header>
  <div class="container">
    <div class="main">
      {{ $slot }}
    </div>
  </div>
  <div class="footerContainer">
    <footer>
      <div class="footerNavContainer">
        <nav class="footerNav">
          <h4>Useful Links:</h4>
          <ul class="botnav_links">
            <x-nav-link href="/">Home</x-nav-link>
            <x-nav-link href="/about">About</x-nav-link>
            <x-nav-link href="/information">Information</x-nav-link>
            <x-nav-link href="/contact">Contact</x-nav-link>
          </ul>
        </nav>
      </div>
      <div class="footerContact">
        <h4>Contact Us:</h4>
        <ul class="footerContactList">
          <li><h5>Address: </h5>27190 Northshore Rd, Ponemah MN</li>
          <li><h5>Phone Number:</h5><a href="tel:218-679-1160">(218) 679-1160</a></li>
        </ul>
      </div>
    </footer>
  </div>
  <div class="copyright">
    <p>Copyright &copy;2024 Developed by: <a href="https://github.com/boleo1">Anthony Beaulieu</a></p>
  </div>
  <script src="{{asset('resources/js/main.js')}}" defer></script>
</body>
</html>