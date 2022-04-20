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

function changeModalImage(direction, totalImages) {
    var srcNum = document.getElementById("modalImg").src.slice(-5);
    if (direction == 1 && parseInt(srcNum) >= totalImages) {srcNum = 0}
    if (direction == -1 && parseInt(srcNum) <= 1) {srcNum = totalImages + 1}

    if (direction == 1) {
        document.getElementById("modalImg").src = document.getElementById("modalImg").src.slice(0, -5).concat(parseInt(srcNum)+1).concat(".jpg");
        document.getElementById("caption").innerHTML = document.getElementById("img".concat(parseInt(srcNum)+1)).alt;
    } else if (direction == -1) {
        document.getElementById("modalImg").src = document.getElementById("modalImg").src.slice(0, -5).concat(parseInt(srcNum)-1).concat(".jpg");
        document.getElementById("caption").innerHTML = document.getElementById("img".concat(parseInt(srcNum)-1)).alt;
    }
}