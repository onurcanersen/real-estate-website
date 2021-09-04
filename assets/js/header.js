const navOpenButton = document.getElementById("nav-open-button");
const nav = document.getElementById("nav");
const navCloseButton = document.getElementById("nav-close-button");
navOpenButton.addEventListener("click", () => {
  nav.style.display = "block";
  navOpenButton.style.display = "none";
});
navCloseButton.addEventListener("click", () => {
  nav.style.display = "none";
  navOpenButton.style.display = "block";
});
