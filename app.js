var contract = "Lyon";
var api_key = "8f905b0bdd8ded93ab15d7ea8581dc703c2a1dea";
var url = "https://api.jcdecaux.com/vls/v1/stations?contract=" + contract + "&apiKey=" + api_key;
var myIcon = L.icon({
    iconUrl: 'img/velo.png',
    iconSize: [32, 32],
});
 
 // Initialize the map and set its view to the coordinates of Lyon
  var map = L.map('map').setView([45.764043, 4.835659], 15);

  // Add a tile layer to the map
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  // Fetch data from JCDecaux API
  fetch(url)
    .then(function(response) {
      return response.json();
    })
    .then(function(data) {
      data.forEach(function(station) {
        var marker = L.marker([station.position.lat, station.position.lng], {icon: myIcon}).addTo(map);
        marker.on('click', function() {
            document.getElementsByClassName('info')[0].innerHTML = `
            <div class="titre">INFO STATION</div>
            <h3>Nom station :</h3> <p> ${station.name}</p>
            <h3>Etat:</h3> <p> ${station.status}</p>
            <h3>Vélos dispo:</h3> <p> ${station.available_bikes}</p>
            <h3>Places dispo: </h3><p>${station.available_bike_stands}</p>
          `;
        });
      });
    });

    