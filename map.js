function initMap() {
    // The location of Uluru
    var gmc = {lat:47.558224, lng: -122.678275};
    var detail = {lat: 47.560781, lng: -122.681196};
    var rental = {lat: 47.554927, lng: -122.675578};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 14.5, center: gmc});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: detail, map: map});
    var marker = new google.maps.Marker({position: rental, map: map});
  }