function changeNav() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

function openModal(src, alt) {
    document.getElementById("modal").style.display = "block";
    document.getElementById("modalImg").src = src;
    document.getElementById("caption").innerHTML = alt;
}

function closeModal() {
    document.getElementById("modal").style.display = "none";
}