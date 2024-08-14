<x-layout>
  <x-slot:heading>
    Home
  </x-slot:heading>
  <div class="homeMission">
    <h2>Empowering Healing Through Culturally Rooted Care</h2>
    <p>This is the sub information for the mission statement need to think of something right now.</p>
  </div>
  <div class="homeCTA">
    <a href="/contact"><button>Need Support?</button></a>
  </div>
  <div class="homeHero">
    <div class="heroSlide fade">
      <img src="{{url('resources/images/chemhealth.jpg')}}" alt="Chemical health Building" style="width:100%">
    </div>
    <div class="heroSlide fade">
      <img src="{{url('resources/images/obaashingtc.png')}}" alt="Chemical health Building" style="width:100%">
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>  
    <div class="heroSlideDots" style="text-align: center;">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
    </div>
  </div>
  <div class="successStoriesContainer">
    <div class="successStory">
      <h4>Success Story heading</h4>
      <p>Success story description</p>
      <a>Link to full detailed story.</a>
    </div>
    <div class="successStory">
      <h4>Success Story heading</h4>
      <p>Success story description</p>
      <a>Link to full detailed story.</a>
    </div>
    <div class="successStory">
      <h4>Success Story heading</h4>
      <p>Success story description</p>
      <a>Link to full detailed story.</a>
    </div>
  </div>
</x-layout>