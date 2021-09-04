var images = document.getElementsByClassName("image");
for (var i = 0; i < images.length; i++) {
  images[i].addEventListener("click", (event) => {
    document.getElementById("main-image").src = event.target.src;
  });
}

var adMap = L.map("ad-map").setView([latitude, longitude], 13);
L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(adMap);

var marker = L.marker([latitude, longitude]).addTo(adMap);
