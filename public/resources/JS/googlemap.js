function initMap() {
  const location = { lat: 48.04924011230469, lng: -94.89720153808594 }; // Coordinates for your location
  
  // Initialize the map
  const map = new google.maps.Map(document.getElementById('map'), {
    zoom: 14, // Zoom level
    center: location, // Center the map on the location
    mapId: "default" // Optional: Use a specific Map ID for styling
  });

  // Add a marker at the location
  const marker = new google.maps.Marker({
    position: location,
    map: map,
    title: 'Obaashiing Treatment Center' // Title for the marker
  });
}

window.onload = function() {
  if (typeof google === 'object' && typeof google.maps === 'object') {
      initMap();
  } else {
      console.error('Google Maps JavaScript API is not available.');
  }
}