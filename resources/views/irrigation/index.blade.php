<!DOCTYPE html>
<html>
  <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ url('../css/style.css') }}" />
        
    <title>DATC Project</title>
    <meta charset="utf-8">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGSdsBXL9WfRsEfpOxKkLSax3FYWFQcGU"></script>
    
    </head>
    <body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="/images/leaf-solid.svg" width="30" height="30" alt="">
            DATC Project
        </a>
    </nav>  
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 mt-4">
                    <div id="map" class="centered"></div>
                    <p class="font-weight-bold text-center"> Temperature</p>
                </div>
                <div class="col-xl-6 mt-4 ">
                    <div id="map2" class="centered"></div>
                    <p class="font-weight-bold text-center"> Humidity</p>
                 </div>
            </div>
        </div>
    </body>

    {{-- Google --}}
    <script>
            // In this example, we center the map, and add a marker, using a LatLng object
            // literal instead of a google.maps.LatLng object. LatLng object literals are
            // a convenient way to add a LatLng coordinate and, in most cases, can be used
            // in place of a google.maps.LatLng object.
      
            var map;
            var map2;
            function initialize() {
              var mapOptions = {
                zoom: 8,
                center: {lat: 45.7494, lng: 21.2272}
              };
              var mapOptions2 = {
                zoom: 8,
                center: {lat: 45.7494, lng: 21.2272}
              };
              map = new google.maps.Map(document.getElementById('map'),
                  mapOptions);
              map2 = new google.maps.Map(document.getElementById('map2'),
                  mapOptions2);
            //   Google Marker settings


              /* var marker = new google.maps.Marker({
                // The below line is equivalent to writing:
                // position: new google.maps.LatLng(-34.397, 150.644)
                position: {lat: 45.7494, lng: 21.2272},
                map: map
              }); 
      
              var infowindow = new google.maps.InfoWindow({
                content: '<p>Marker Location:' + marker.getPosition() + '</p>'
              });
      
              google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map);
              }); */
            }
      
            google.maps.event.addDomListener(window, 'load', initialize);
          </script>
</html>