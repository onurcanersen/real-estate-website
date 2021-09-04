var more = document.getElementById("more");
var moreContainer = document.getElementById("more-container");
more.addEventListener("click", () => {
  if (moreContainer.style.display === "none")
    moreContainer.style.display = "block";
  else moreContainer.style.display = "none";
});

var adsMap = L.map("ads-map").setView([0, 0], 2);
var marker;

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(adsMap);

for (var i = 0; i < ads.length; i++) {
  if (i === 0) adsMap.setView([ads[i]["latitude"], ads[i]["longitude"]], 3);
  marker = L.marker([ads[i]["latitude"], ads[i]["longitude"]]).addTo(adsMap);
  marker["adId"] = ads[i]["id"];
  marker.on("click", (event) => {
    window.open("ad.php?id=" + event.target["adId"]);
  });
}
