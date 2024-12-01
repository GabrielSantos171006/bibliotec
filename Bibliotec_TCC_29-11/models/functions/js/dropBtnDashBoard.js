function toggleDropdown() {
  document.getElementById("dropdown-content").classList.toggle("show");
  // Mostra o drop-down
}
// Fecha o drop-down se o usuário clicar fora dele
window.onclick = function(event) {
  if(!event.target.matches('.dropbutton')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for(var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if(openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}