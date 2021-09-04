var formMap = L.map("form-map");
var marker;
var latitude = document.getElementById("latitude").value;
var longitude = document.getElementById("longitude").value;

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(formMap);

if (latitude && longitude) {
  formMap.setView([latitude, longitude], 13);
  marker = L.marker([latitude, longitude]).addTo(formMap);
} else {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition((position) => {
      formMap.setView(
        [position.coords.latitude, position.coords.longitude],
        13
      );
    });
  } else {
    formMap.setView([0, 0], 2);
  }
}

formMap.on("click", (event) => {
  if (marker) {
    formMap.removeLayer(marker);
  }
  marker = L.marker(event.latlng).addTo(formMap);
  document.getElementById("latitude").value = event.latlng.lat;
  document.getElementById("longitude").value = event.latlng.lng;
});
