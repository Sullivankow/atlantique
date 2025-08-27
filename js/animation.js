// Vérifie si l'utilisateur a déjà accepté les cookies
if (!localStorage.getItem("cookiesAccepted")) {
  document.getElementById("cookie-banner").style.display = "block";
}
// Quand on clique sur le bouton, on cache la bannière et on se souvient du choix
document.getElementById("accept-cookies").onclick = function () {
  localStorage.setItem("cookiesAccepted", "yes");
  document.getElementById("cookie-banner").style.display = "none";
};
