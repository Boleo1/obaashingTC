<x-layout>
  <x-slot:heading>
    Contact
  </x-slot:heading>
  <script async src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY' )}}&callback=initMap">
  </script>
    <div class="contactInfo">
      <h2>Contact us!</h2>
      <p>We are here to help. Reach out to us through any of the following:</p>
      <ul>
        <li><strong>Phone:</strong> <a href="tel:218-679-1160">(218) 679 1160</a></li>
        <li><strong>Email:</strong> <a href="mailto:">link to general emails</a></li>
        <li><strong>Address:</strong> 27190 Northshore Rd, Ponemah MN</li>
        <li><strong>Hours:</strong> Monday - Friday: 8:00AM - 5:00PM</li>
      </ul>
    </div>
    
    <div class="contactMap" id="map">
      
    </div>
    
    
    <script> src={{ asset('resources/JS/googlemap.js') }}</script>
  </x-layout>