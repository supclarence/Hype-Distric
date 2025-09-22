function done() {
    alert("Items Added");
}
document.addEventListener("DOMContentLoaded", function() {
    const popup = document.getElementById("popup");
    const btn = document.getElementById("popup-btn");

    btn.addEventListener("click", function() {
        popup.style.display = "none";
    });
});
