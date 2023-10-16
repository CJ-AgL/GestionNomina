// Cambiar el ícono de flecha al hacer clic en un elemento del menú desplegable
document.addEventListener("DOMContentLoaded", function() {
    const treeviewItems = document.querySelectorAll("li.treeview > a");

    treeviewItems.forEach(function(item) {
        item.addEventListener("click", function() {
            item.querySelector(".fa-angle-left").classList.toggle("fa-rotate-90");
        });
    });
});
