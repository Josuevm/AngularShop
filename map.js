var map;
 
function showMap(latitude, longitude) {

  let mapOptions = {
    center: new google.maps.LatLng(latitude, longitude),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.ROADMAP} ;
    let map = new google.maps.Map(document.getElementById("map_canvas"),mapOptions);
    console.log(latitude + "   " + longitude);

    let place = new google.maps.LatLng(latitude,longitude);
    let marker = new google.maps.Marker({
      position: place
      , title: ''
      , map: map
      , });

      let popup = new google.maps.InfoWindow({
        content: 'Current Location'});
        popup.open(map, marker);

        let geocoder = new google.maps.Geocoder;
        geocoder.geocode({
          'location': place
          // ej. "-34.653015, -58.674850"
        }, function(results, status) {
        });
      }
 
$('#searchLocation').on('click', function() {
	
	
	var subAddress ='';
	
	if(!document.getElementById('pickState').hasAttribute("hidden")){
	   subAddress += $('#pickState').val();
	   }
	if(!document.getElementById('pickCostaRicaCity').hasAttribute("hidden")){
	   subAddress += $('#pickCostaRicaCity').val();
	   }
	if(!document.getElementById('pickCanadaCity').hasAttribute("hidden")){
	   subAddress += $('#pickCanadaCity').val();
	   }
	if(!document.getElementById('pickUKCity').hasAttribute("hidden")){
	   subAddress += $('#pickUKCity').val();
	   }
	
    // Obtenemos la dirección y la asignamos a una variable
    var address = $('#pickCountry').val() +","+subAddress;
    // Creamos el Objeto Geocoder
    var geocoder = new google.maps.Geocoder();
    // Hacemos la petición indicando la dirección e invocamos la función
    // geocodeResult enviando todo el resultado obtenido
    geocoder.geocode({ 'address': address}, geocodeResult);
});
 
function geocodeResult(results, status) {
    // Verificamos el estatus
    if (status == 'OK') {
        // Si hay resultados encontrados, centramos y repintamos el mapa
        // esto para eliminar cualquier pin antes puesto
        var mapOptions = {
            center: results[0].geometry.location,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map($("#map_canvas").get(0), mapOptions);
        // fitBounds acercará el mapa con el zoom adecuado de acuerdo a lo buscado
        map.fitBounds(results[0].geometry.viewport);
        // Dibujamos un marcador con la ubicación del primer resultado obtenido
        var markerOptions = { position: results[0].geometry.location }
        var marker = new google.maps.Marker(markerOptions);
        marker.setMap(map);
    } else {
        // En caso de no haber resultados o que haya ocurrido un error
        // lanzamos un mensaje con el error
        alert("Geocoding no tuvo éxito debido a: " + status);
    }
}
function Start(){
  navigator.geolocation.getCurrentPosition(showPosition);
}

function showPosition(position) {
  showMap(position.coords.latitude, position.coords.longitude);
}